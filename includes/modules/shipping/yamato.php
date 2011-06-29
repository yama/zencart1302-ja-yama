<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+

//
// �����⥸�塼�� ��ޥȱ�͢(�����)
// TAMURA Toshihiko (tamura@bitscope.co.jp)
// 2004/02/27 modified for ZenCart by HISASUE Takahiro ( hisa@flatz.jp )
// 2005/02/15 modified for Yamato Transport by HIRAOKA Tadahito ( hira@s-page.net )

//
// [��Ϣ�ե�����]
// catalog/includes/modules/shipping/yamato.php
// catalog/includes/classes/_yamato.php
// catalog/includes/languages/japanese/modules/shipping/yamato.php
//
// [����]
// http://partner.kuronekoyamato.co.jp/estimate/all_est.html
//
  class yamato {
    var $code, $title, $description, $sort_order, $icon, $tax_class, $enabled;
    var $yamato_countries, $yamato_countries_nbr;
    var $quote;

// class constructor
    function yamato() {
      global $order,$db;

      $this->code        = 'yamato';
      $this->title       = MODULE_SHIPPING_YAMATO_TEXT_TITLE;
      $this->description = MODULE_SHIPPING_YAMATO_TEXT_DESCRIPTION;
      $this->sort_order  = MODULE_SHIPPING_YAMATO_SORT_ORDER;
//      $this->icon        = DIR_WS_ICONS . 'shipping_yamato.gif';
      $this->tax_class   = in_array('MODULE_SHIPPING_YAMATO_TAX_CLASS',$this->keys()) ? MODULE_SHIPPING_YAMATO_TAX_CLASS : 0;
      
      if( zen_get_shipping_enabled( $this->code ) ){
	      $this->enabled = ((MODULE_SHIPPING_YAMATO_STATUS == 'True') ? true : false);
	    }
      // only these three are needed since Yamato only ships to them
      // convert TEP country id to ISO 3166 id
      $this->yamato_countries = array(107 => 'JP');
      $this->yamato_countries_nbr = array(107);

      if ( ($this->enabled == true) && ((int)MODULE_SHIPPING_YAMATO_ZONE > 0) ) {
        $check_flag = false;
        $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_SHIPPING_YAMATO_ZONE . "' and zone_country_id = '" . $order->delivery['country']['id'] . "' order by zone_id");
        while (!$check->EOF) {
          if ($check->fields['zone_id'] < 1) {
            $check_flag = true;
            break;
          } elseif ($check->fields['zone_id'] == $order->delivery['zone_id']) {
            $check_flag = true;
            break;
          }
          $check->MoveNext();
        }

        if ($check_flag == false) {
          $this->enabled = false;
        }
      }
    }

// class methods
    function quote() {
      global $shipping_weight, $shipping_num_boxes;
      global $order;
      global $a_yamato_time;
      global $cart;
      global $db;
      
      $this->quotes = array('id' => $this->code,
                            'module' => $this->title);
      if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);
      $country_id = $order->delivery['country']['id'];
      $zone_id    = $order->delivery['zone_id'];

      if (in_array($country_id, $this->yamato_countries_nbr)) {
          $zoneinfo = $db->Execute("SELECT zone_code FROM ".TABLE_ZONES." WHERE zone_id = '".$zone_id."'");
          $a_zonevalues = $zoneinfo->fields;
          $s_zone_code = $a_zonevalues['zone_code'];

          // ���������ˤ�ä�̵���ˤʤäƤ��ޤ�(�����Ǥ�total�ǤϤʤ�subtotal���ǧ���٤�)
          if ( (MODULE_SHIPPING_YAMATO_FREE_SHIPPING != 'True') || ((int)$order->info['subtotal'] < (int)MODULE_SHIPPING_YAMATO_OVER) ) {
              include_once(DIR_WS_CLASSES . '_yamato.php');
              $rate = new _Yamato($this->code, MODULE_SHIPPING_YAMATO_TEXT_WAY_NORMAL,
                                zen_get_zone_code( STORE_COUNTRY,STORE_ZONE,0), STORE_COUNTRY);
                                //STORE_ORIGIN_ZONE, STORE_ORIGIN_COUNTRY);
              $rate->SetDest($s_zone_code, $this->yamato_countries[$country_id]);
              $rate->SetWeight($shipping_weight);
              $tmpQuote = $rate->GetQuote(); // id, title, cost | error

              if (isset($tmpQuote['error'])) {
                  $this->quotes['error'] = $tmpQuote['error'];
              } else {
                  $this->quotes['module'] = $this->title
                      . ' (' . $shipping_num_boxes . ' x ' . $shipping_weight . 'kg)';

                  $tmpQuote['cost'] *= $shipping_num_boxes;
                  // �����ǥ����������
                  if (defined('MODULE_SHIPPING_YAMATO_DISCOUNT') && 0 < (int)MODULE_SHIPPING_YAMATO_DISCOUNT) {
                      $tmpQuote['cost'] -= (int)($tmpQuote['cost'] * MODULE_SHIPPING_YAMATO_DISCOUNT / 100);
                  }
                  // �����
                  $tmpQuote['cost'] += MODULE_SHIPPING_YAMATO_HANDLING;
              }
          } else {
              $tmpQuote = array('id' => $this->code, 'title' => MODULE_SHIPPING_YAMATO_TEXT_WAY_NORMAL, 'cost' => 0);
          }

          if (!isset($tmpQuote['error'])) {
              // �����������
              $timespec = $this->get_timespec();
              $tmpQuote['option'] = TEXT_TIME_SPECIFY
                  . zen_draw_pull_down_menu('yamato_timespec', $a_yamato_time, $timespec);
              $tmpQuote['timespec'] = $timespec;
          }

          $this->quotes['methods'][] = $tmpQuote;

          if ($this->tax_class > 0) {
              $this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $country_id, $zone_id);
          }
        } else {
            $this->quotes['error'] = MODULE_SHIPPING_YAMATO_TEXT_NOTAVAILABLE;
        }
        return $this->quotes;
    }

    // �������ꤹ��ץ�������˥塼��'value'���֤�
    function get_timespec() {
        global $a_yamato_time;
        global $shipping;

        $selected = $a_yamato_time[0]['id'];
        if ( isset($_POST['yamato_timespec']) ) {
            $selected = $_POST['yamato_timespec'];
        } elseif ( is_array($shipping) ) { // see checkout_shipping.php
            list($module, $method) = explode('_', $shipping['id']);
            if ($module == $this->code) {
                $selected = $shipping['timespec'];
            }
        }
        return $selected;
    }

    function check() {
			global $db;
      if (!isset($this->_check)) {
        $check_query = $db->Execute("select configuration_value from "
          . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_YAMATO_STATUS'");
        $this->_check = $check_query->RecordCount();
      }
      return $this->_check;
    }

    function install() {
			global $db;
      $db->Execute("insert into " . TABLE_CONFIGURATION .
      " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('��ޥȱ�͢(�����)��������ͭ���ˤ���', 'MODULE_SHIPPING_YAMATO_STATUS', 'True', '��ޥȱ�͢(�����)���������󶡤��ޤ���?', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('�谷�������', 'MODULE_SHIPPING_YAMATO_HANDLING', '0', '������Ŭ�Ѥ���谷�����������Ǥ��ޤ�.', '6', '1', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('����̵������', 'MODULE_SHIPPING_YAMATO_FREE_SHIPPING', 'False', '����̵�������ͭ���ˤ��ޤ���? [��ץ⥸�塼��]-[����]-[����̵������]��ͥ�褹����� False ������Ǥ�������.', '6', '2', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");

      $db->Execute("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('������̵���ˤ�������������', 'MODULE_SHIPPING_YAMATO_OVER', '5000', '�����۰ʾ�򤴹����ξ���������̵���ˤ��ޤ�.', '6', '3', now())");

      $db->Execute("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('�������Ͱ�Ψ', 'MODULE_SHIPPING_YAMATO_DISCOUNT', '0', '�������Ͱ�Ψ����ꤷ�ޤ�.(��)', '6', '4', now())");

//    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('�Ǽ���', 'MODULE_SHIPPING_YAMATO_TAX_CLASS', '0', '���������Ŭ�Ѥ�����Ǽ��̤�����Ǥ�������.', '6', '3', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('�����ϰ�', 'MODULE_SHIPPING_YAMATO_ZONE', '0', '�����ϰ�����򤹤�����򤵤줿�ϰ�Τߤ����Ѳ�ǽ�Ȥʤ�ޤ�.', '6', '5', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");

      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('ɽ���������', 'MODULE_SHIPPING_YAMATO_SORT_ORDER', '0', 'ɽ��������������Ǥ��ޤ�. �������������ۤɾ�̤�ɽ������ޤ�.', '6', '6', now())");
    }

    function remove() {
      global $db;
      $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array(
        'MODULE_SHIPPING_YAMATO_STATUS',
        'MODULE_SHIPPING_YAMATO_HANDLING',
        'MODULE_SHIPPING_YAMATO_FREE_SHIPPING',
        'MODULE_SHIPPING_YAMATO_OVER',
        'MODULE_SHIPPING_YAMATO_DISCOUNT',
//      'MODULE_SHIPPING_YAMATO_TAX_CLASS',
        'MODULE_SHIPPING_YAMATO_ZONE',
        'MODULE_SHIPPING_YAMATO_SORT_ORDER',
      );
    }
  }
?>
