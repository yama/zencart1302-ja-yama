<?php
/**
 * @package shippingMethod
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: table.php 3308 2006-03-29 08:21:33Z ajeh $
 */
/**
 * Enter description here...
 *
 */
class table extends base {
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  var $code;
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  var $title;
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  var $description;
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  var $icon;
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  var $enabled;
  /**
   * Enter description here...
   *
   * @return table
   */
  function table() {
    global $order, $db;

    $this->code = 'table';
    $this->title = MODULE_SHIPPING_TABLE_TEXT_TITLE;
    $this->description = MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION;
    $this->sort_order = MODULE_SHIPPING_TABLE_SORT_ORDER;
    $this->icon = '';
    $this->tax_class = MODULE_SHIPPING_TABLE_TAX_CLASS;
    $this->tax_basis = MODULE_SHIPPING_TABLE_TAX_BASIS;
    // disable only when entire cart is free shipping
    if (zen_get_shipping_enabled($this->code)) {
      $this->enabled = ((MODULE_SHIPPING_TABLE_STATUS == 'True') ? true : false);
    }

    if ( ($this->enabled == true) && ((int)MODULE_SHIPPING_TABLE_ZONE > 0) ) {
      $check_flag = false;
      $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_SHIPPING_TABLE_ZONE . "' and zone_country_id = '" . $order->delivery['country']['id'] . "' order by zone_id");
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
  /**
   * Enter description here...
   *
   * @param unknown_type $method
   * @return unknown
   */
  function quote($method = '') {
    global $order, $shipping_weight, $shipping_num_boxes;

    // shipping adjustment
    if (MODULE_SHIPPING_TABLE_MODE == 'price') {
      $order_total = $_SESSION['cart']->show_total() - $_SESSION['cart']->free_shipping_prices() ;
    } else {
      $order_total = $shipping_weight;
    }

    $table_cost = split("[:,]" , MODULE_SHIPPING_TABLE_COST);
    $size = sizeof($table_cost);
    for ($i=0, $n=$size; $i<$n; $i+=2) {
      if ($order_total <= $table_cost[$i]) {
        $shipping = $table_cost[$i+1];
        break;
      }
    }

    if (MODULE_SHIPPING_TABLE_MODE == 'weight') {
      $shipping = $shipping * $shipping_num_boxes;
      // show boxes if weight
      switch (SHIPPING_BOX_WEIGHT_DISPLAY) {
        case (0):
        $show_box_weight = '';
        break;
        case (1):
        $show_box_weight = ' (' . $shipping_num_boxes . ' ' . TEXT_SHIPPING_BOXES . ')';
        break;
        case (2):
        $show_box_weight = ' (' . number_format($shipping_weight * $shipping_num_boxes,2) . TEXT_SHIPPING_WEIGHT . ')';
        break;
        default:
        $show_box_weight = ' (' . $shipping_num_boxes . ' x ' . number_format($shipping_weight,2) . TEXT_SHIPPING_WEIGHT . ')';
        break;
      }
    }

    $this->quotes = array('id' => $this->code,
    'module' => MODULE_SHIPPING_TABLE_TEXT_TITLE . $show_box_weight,
    'methods' => array(array('id' => $this->code,
    'title' => MODULE_SHIPPING_TABLE_TEXT_WAY,
    'cost' => $shipping + MODULE_SHIPPING_TABLE_HANDLING)));

    if ($this->tax_class > 0) {
      $this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
    }

    if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);

    return $this->quotes;
  }
  /**
   * Enter description here...
   *
   * @return unknown
   */
  function check() {
    global $db;
    if (!isset($this->_check)) {
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_TABLE_STATUS'");
      $this->_check = $check_query->RecordCount();
    }
    return $this->_check;
  }
  /**
   * Enter description here...
   *
   */
  function install() {
    global $db;
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('�º�ˡ��������ͭ���ˤ���', 'MODULE_SHIPPING_TABLE_STATUS', 'True', '�º�ˡ�ˤ���������󶡤��ޤ�����', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('����ꥹ��', 'MODULE_SHIPPING_TABLE_COST', '25:8.50,50:5.50,10000:0.00', '���̤ޤ��ϲ��ʤˤ�ä�������������ꤷ�ޤ�<br/>��: 25:1000,50:3000,10000:10000,etc.. <br/>���ξ��25kg(�ޤ��� ��)���礦�ɤޤǤ�1000�ߤ���������ˡ�25kg(�ޤ��� ��)��Ķ����50kg(�ޤ��� ��)���礦�ɤޤǤ�3000�ߤ���������ˤʤ�ޤ���', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('�º�ˡ', 'MODULE_SHIPPING_TABLE_MODE', '����', '��������򻻽Ф��븵�Ȥʤ��Τ����򤷤ޤ���', '6', '0', 'zen_cfg_select_option(array(\'weight\', \'price\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('�谷�������', 'MODULE_SHIPPING_TABLE_HANDLING', '0', '������Ŭ�Ѥ���谷�����������Ǥ��ޤ���', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('�Ǽ���', 'MODULE_SHIPPING_TABLE_TAX_CLASS', '0', '�º�ˡ����������Ŭ�Ѥ�����Ǽ��̤�����Ǥ���������', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('��Ψ�η׻��١���', 'MODULE_SHIPPING_TABLE_TAX_BASIS', 'Shipping', '�������ˤ������Ƕ⥪�ץ��������ꤷ�ޤ���<br /><br />\r\n��Shipping - �ܵҤ������轻��˴�Ť�<br />\r\n��Billing - �ܵҤ������轻��˴�Ť�<br />\r\n��Store - ����åפν�߽���˴�Ť�(������/�����褬����å׽���Ϥ�Ʊ���ϰ�ξ���ͭ��)', '6', '0', 'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('�����ϰ�', 'MODULE_SHIPPING_TABLE_ZONE', '0', '�����ϰ�����򤹤�����򤵤줿�ϰ�Τߤ����Ѳ�ǽ�Ȥʤ�ޤ���', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('ɽ���������', 'MODULE_SHIPPING_TABLE_SORT_ORDER', '0', 'ɽ��������������Ǥ��ޤ����������������ۤɾ�̤�ɽ������ޤ���', '6', '0', now())");
  }
  /**
   * Enter description here...
   *
   */
  function remove() {
    global $db;
    $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
  }
  /**
   * Enter description here...
   *
   * @return unknown
   */
  function keys() {
    return array('MODULE_SHIPPING_TABLE_STATUS', 'MODULE_SHIPPING_TABLE_COST', 'MODULE_SHIPPING_TABLE_MODE', 'MODULE_SHIPPING_TABLE_HANDLING', 'MODULE_SHIPPING_TABLE_TAX_CLASS', 'MODULE_SHIPPING_TABLE_TAX_BASIS', 'MODULE_SHIPPING_TABLE_ZONE', 'MODULE_SHIPPING_TABLE_SORT_ORDER');
  }
}
?>
