<?php
/**
 * paypal.php payment module class for Paypal IPN payment method
 *
 * @package paymentMethod
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 3279 2006-03-27 22:51:19Z wilt $
 */

define('MODULE_PAYMENT_PAYPAL_RM', '2');

if (IS_ADMIN_FLAG === true) {
  include_once(DIR_FS_CATALOG_MODULES . 'payment/paypal/paypal_functions.php');
} else {
  include_once(DIR_WS_MODULES . 'payment/paypal/paypal_functions.php');
}

require_once(dirname(__FILE__).'/paypal/paypal_express_checkout.php');
require_once(dirname(__FILE__).'/paypal/paypal_web_payment_plus.php');

/**
 * paypal IPN pyment method class
 *
 */
class paypal extends base {
  /**
   * string repesenting the payment method
   *
   * @var string
   */
  var $code;

  /**
   * $title is the displayed name for this payment method
   *
   * @var string
   */
  var $title;

  /**
   * $description is a soft name for this payment method
   *
   * @var string
   */
  var $description;

  /**
   * $enabled determines whether this module shows or not... in catalog.
   *
   * @var boolean
   */
  var $enabled;

  /**
   * $model
   *
   * @var object
   */
  var $model;

  /**
   * $form_action_url
   *
   * @var string
   */
  var $form_action_url;

  /**
    * constructor
    *
    * @param int $paypal_ipn_id
    * @return paypal
    */
  function paypal($paypal_ipn_id = '') {
    global $order;
    global $db;

    $this->code = 'paypal';
    $this->title = MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE; // Payment Module title in Catalog
    $this->description = MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION;
    $this->sort_order = MODULE_PAYMENT_PAYPAL_SORT_ORDER;
    $this->enabled = ((MODULE_PAYMENT_PAYPAL_STATUS == 'True') ? true : false);
    if ((int)MODULE_PAYMENT_PAYPAL_ORDER_STATUS_ID > 0) {
      $this->order_status = MODULE_PAYMENT_PAYPAL_ORDER_STATUS_ID;
    }

    // �ʲ���UPDATE�ϴ������̤����Ф줿���ܤΤ�ɽ�����뤿�������Ǥ���
    $this->model = NULL;
    if (MODULE_PAYMENT_PAYPAL_SETTLEMENT_TYPE == 'ExpressCheckout') {
      $this->model = new paypal_express_checkout($this->code, $this->title, $this->description, $this->sort_order, $this->enabled);

      $db->Execute("update " . TABLE_CONFIGURATION . " set configuration_title='</b><div id=\"EC_div\"><b>' where configuration_key='MODULE_PAYMENT_PAYPAL_EC_START'");
      $db->Execute("update " . TABLE_CONFIGURATION . " set configuration_title='</b><div id=\"WPP_div\" style=\"display:none;\"><b>' where configuration_key='MODULE_PAYMENT_PAYPAL_WPP_START'");
    }
    else if (MODULE_PAYMENT_PAYPAL_SETTLEMENT_TYPE == 'WebPaymentPlus') {
      $this->model = new paypal_web_payment_plus($this->code, $this->title, $this->description, $this->sort_order, $this->enabled);

      $db->Execute("update " . TABLE_CONFIGURATION . " set configuration_title='</b><div id=\"EC_div\" style=\"display:none;\"><b>' where configuration_key='MODULE_PAYMENT_PAYPAL_EC_START'");
      $db->Execute("update " . TABLE_CONFIGURATION . " set configuration_title='</b><div id=\"WPP_div\"><b>' where configuration_key='MODULE_PAYMENT_PAYPAL_WPP_START'");
    }

    if ( $this->model != NULL ) {
      $this->form_action_url = $this->model->get_form_action_url();
    }
    if (is_object($order)) $this->update_status();
  }

  /**
   * calculate zone matches and flag settings to determine whether this module should display to customers or not
   *
   */
  function update_status() {
    $this->model->update_status();
  }

  /**
   * JS validation which does error-checking of data-entry if this module is selected for use
   * (Number, Owner, and CVV Lengths)
   *
   * @return string
   */
  function javascript_validation() {
    return $this->model->javascript_validation();
  }

  /**
   * Displays Credit Card Information Submission Fields on the Checkout Payment Page
   * In the case of paypal, this only displays the paypal title
   *
   * @return array
   */
  function selection() {
    return $this->model->selection();
  }

  /**
   * Normally evaluates the Credit Card Type for acceptance and the validity of the Credit Card Number & Expiration Date
   * Since paypal module is not collecting info, it simply skips this step.
   *
   * @return boolean
   */
  function pre_confirmation_check() {
    return $this->model->pre_confirmation_check();
  }

  /**
   * Display Credit Card Information on the Checkout Confirmation Page
   * Since none is collected for paypal before forwarding to paypal site, this is skipped
   *
   * @return boolean
   */
  function confirmation() {
    return $this->model->confirmation();
  }

  /**
   * Build the data and actions to process when the "Submit" button is pressed on the order-confirmation screen.
   * This sends the data to the payment gateway for processing.
   * (These are hidden fields on the checkout confirmation page)
   *
   * @return string
   */
  function process_button() {
    return $this->model->process_button();
  }

  /**
   * Store transaction info to the order and process any results that come back from the payment gateway
   *
   */
  function before_process() {
    $this->model->before_process();
  }

  /**
   * Checks referrer
   *
   * @param string $zf_domain
   * @return boolean
   */
  function check_referrer($zf_domain) {
    return $this->model->check_referrer($zf_domain);
  }

  /**
   * Build admin-page components
   *
   * @param int $zf_order_id
   * @return string
   */
  function admin_notification($zf_order_id) {
    return $this->model->admin_notification($zf_order_id);
  }

  /**
   * Post-processing activities
   *
   * @return boolean
   */
  function after_process() {
    return $this->model->after_process();
  }

  /**
   * Used to display error message details
   *
   * @return boolean
   */
  function output_error() {
    return $this->model->output_error();
  }

  /**
   * Check to see whether module is installed
   *
   * @return boolean
   */
  function check() {
    global $db;
    if (!isset($this->_check)) {
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_PAYMENT_PAYPAL_STATUS'");
      $this->_check = $check_query->RecordCount();
    }
    return $this->_check;
  }

  /**
   * Install the payment module and its configuration settings
   *
   */
  function install() {
    global $db;

    // javascript
    $script = '<script type="text/javascript">'."\n"
            . "<!--\n"
            . "window.onload = function() {\n"
            . "  init();\n"
            . "  var radio = document.getElementsByName('configuration[MODULE_PAYMENT_PAYPAL_SETTLEMENT_TYPE]');\n"
            . "  for (var i=0; i<radio.length; i++) {\n"
            . "    if (radio[i].value == 'ExpressCheckout')\n"
            . "      radio[i].onclick = function() { config_show('EC_div'); config_hide('WPP_div'); }\n"
            . "    else\n"
            . "      radio[i].onclick = function() { config_show('WPP_div'); config_hide('EC_div'); }\n"
            . "  }\n"
            . "}\n"
            . "function config_hide(div_id) {\n"
            . "  var element = document.getElementById(div_id);\n"
            . "  if (!element) return;\n"
            . "  element.style.display = 'none';\n"
            . "}\n"
            . "\n"
            . "function config_show(div_id) {\n"
            . "  var element = document.getElementById(div_id);\n"
            . "  if (!element) return;\n"
            . "  element.style.display = 'block';\n"
            . "}\n"
            . "// -->\n"
            . "</script>\n";
    $script = str_replace("'", "\'", $script);
    $script = str_replace('"', '\"', $script);

    define('MODULE_PAYMENT_PAYPAL_TEXT_STATUS',                'PayPal ��ͭ���ˤ���');
    define('MODULE_PAYMENT_PAYPAL_DESC_STATUS',                'PayPal ��ͭ���ˤ���');
    define('MODULE_PAYMENT_PAYPAL_TEXT_SETTLEMENT_TYPE',       '����������');
    define('MODULE_PAYMENT_PAYPAL_DESC_SETTLEMENT_TYPE',       '���������פ����򤷤Ƥ�������'.$script);
    define('MODULE_PAYMENT_PAYPAL_TEXT_ZONE',                  'Ŭ���ϰ�');
    define('MODULE_PAYMENT_PAYPAL_DESC_ZONE',                  'Ŭ���ϰ�����򤹤�ȡ����򤷤��ϰ�Τߤ����Ѳ�ǽ�Ȥʤ�ޤ���');
    define('MODULE_PAYMENT_PAYPAL_TEXT_ORDER_STATUS_ID',       '�����ʸ���ơ�����');
    define('MODULE_PAYMENT_PAYPAL_DESC_ORDER_STATUS_ID',       '���ꤷ�����ơ��������������Ŭ�Ѥ���ޤ���');
    define('MODULE_PAYMENT_PAYPAL_TEXT_SORT_ORDER',            'ɽ���������');
    define('MODULE_PAYMENT_PAYPAL_DESC_SORT_ORDER',            'ɽ��������������Ǥ��ޤ����������������ۤɾ�̤�ɽ������ޤ�');
    define('MODULE_PAYMENT_PAYPAL_TEXT_SELECTOPTION',           '');
    define('MODULE_PAYMENT_PAYPAL_DESC_SELECTOPTION',           'WebPaymentPlus�ϡ���Ѳ��̤Υ������ޥ�����PayPal�����쥸�åȥ����ɷ�Ѥ����Ѳ�ǽ�Ǥ���');

    // for Express Checkout
    define('MODULE_PAYMENT_PAYPAL_EC_TEXT_BUSINESS_ID',        'PayPal �ӥ��ͥ���������Ȥ�ID');
    define('MODULE_PAYMENT_PAYPAL_EC_DESC_BUSINESS_ID',        'PayPal �ӥ��ͥ���������Ȥ�ID�����Ϥ��Ƥ���������');
    define('MODULE_PAYMENT_PAYPAL_EC_TEXT_BUSINESS_PASS',      'PayPal �ӥ��ͥ���������ȤΥѥ����');
    define('MODULE_PAYMENT_PAYPAL_EC_DESC_BUSINESS_PASS',      'PayPal �ӥ��ͥ���������ȤΥѥ���ɤ����Ϥ��Ƥ���������');
    define('MODULE_PAYMENT_PAYPAL_EC_TEXT_BUSINESS_SIGNATURE', 'API��̾');
    define('MODULE_PAYMENT_PAYPAL_EC_DESC_BUSINESS_SIGNATURE', '�嵭��������Ȥ�API��̾�����ꤷ�Ƥ���������');
    define('MODULE_PAYMENT_PAYPAL_EC_TEXT_SETTLEMENT_TYPE',    '�������');
    define('MODULE_PAYMENT_PAYPAL_EC_DESC_SETTLEMENT_TYPE',    'Sale(���)�⤷����Authorization(Ϳ��)�����򤷤Ƥ�������');
    define('MODULE_PAYMENT_PAYPAL_EC_TEXT_CURRENCY',           '�̲�');
    define('MODULE_PAYMENT_PAYPAL_EC_DESC_CURRENCY',           '�̲ߤ����򤷤Ƥ�������');
    define('MODULE_PAYMENT_PAYPAL_EC_TEXT_REFERENCE',          'Reference Transaction������');
    define('MODULE_PAYMENT_PAYPAL_EC_DESC_REFERENCE',          '������դˤ��PayPal���°�����Ȥ���ͭ���ˤ���<br/>�� Reference Transaction�����Ѥ��뤿��ˤϻ����˿�����ɬ�פǤ���<br/>�� <a href="https://www.paypal.com/jp/cgi-bin/helpscr?cmd=_help&t=escalateTab" target="_blank">�����Τ�����ϥե�����</a>');
    define('MODULE_PAYMENT_PAYPAL_EC_TEXT_TEST',               'Test�Ķ�');
    define('MODULE_PAYMENT_PAYPAL_EC_DESC_TEST',               '�ƥ��Ȼ���True�������Ǥʤ����False�Ȥ��Ƥ���������');

    // for Web Payment Plus
    define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_LINK',               'WebPaymentPlus�����Ѥ���ˤϤ��������ߤ�ɬ�פǤ���');
    define('MODULE_PAYMENT_PAYPAL_WPP_DESC_LINK',               '<p>������URL���鿽�����ߤ���ǽ�Ǥ���<br><a href="https://www.paypal-japan.com/wpp/">�����֥ڥ����ȥץ饹�Τ��Ҳ�</a></p>'.
                                                                '<b>WebPaymentPlus�����ꡧ</b><br>'.
                                                                '<p>������ˡ��<a href="...">WPP����ޥ˥奢��</a>��������������</p>'.
                                                                '<b>�����͡�</b><br>'.
                                                                '<p>(A)IPN�ؤ�URL��<br>'. str_replace('index.php?main_page=index','paypal_ipn.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) .'<br><br>'.
                                                                '(B)zen-cart�ؤ����URL��<br>'. zen_catalog_href_link(FILENAME_CHECKOUT_SUCCESS_PAYPAL_IPN_WAITING, '', 'SSL',false) .
                                                                '</p>');
    define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_MERCHANT_ID',        'PayPal �ӥ��ͥ���������ȤΡ֥����奢�ʥޡ�������ID��');
    define('MODULE_PAYMENT_PAYPAL_WPP_DESC_MERCHANT_ID',        'PayPal�إ����󤷤ơָĿ�����פΥڡ��������˽񤤤Ƥ���ޤ���');
    define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_SETTLEMENT_TYPE',    '�������');
    define('MODULE_PAYMENT_PAYPAL_WPP_DESC_SETTLEMENT_TYPE',    '��ʸ�塢¨���Ȥʤ�ޤ�(sale)');
    define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CURRENCY',           '�̲�');
    define('MODULE_PAYMENT_PAYPAL_WPP_DESC_CURRENCY',           '����ʧ���̲ߡ�');
    define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_TEST',               '�ƥ��ȴĶ� (Sandbox������̵ͭ)');
    define('MODULE_PAYMENT_PAYPAL_WPP_DESC_TEST',               '�ƥ��Ȼ���True�������Ǥʤ����False�Ȥ��Ƥ���������');
    define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CUSTOM_KEY',         '�ѥ����롼�ѿ��������������å�����');
    define('MODULE_PAYMENT_PAYPAL_WPP_DESC_CUSTOM_KEY',         '�ѥ����롼�ѿ������������Ȥ�����å����륭�������Ϥ��Ƥ���������');
    define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EMAIL',              '���顼ȯ������������᡼�륢�ɥ쥹');
    define('MODULE_PAYMENT_PAYPAL_WPP_DESC_EMAIL',              '���顼ȯ������������᡼�륢�ɥ쥹�����Ϥ��Ƥ���������');

    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function,               date_added) values ('".MODULE_PAYMENT_PAYPAL_TEXT_STATUS."',          'MODULE_PAYMENT_PAYPAL_STATUS',          'True',            '".MODULE_PAYMENT_PAYPAL_DESC_STATUS."',          '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function,               date_added) values ('".MODULE_PAYMENT_PAYPAL_TEXT_SETTLEMENT_TYPE."', 'MODULE_PAYMENT_PAYPAL_SETTLEMENT_TYPE', 'ExpressCheckout', '".MODULE_PAYMENT_PAYPAL_DESC_SETTLEMENT_TYPE."', '6', '1', 'zen_cfg_select_option(array(\'ExpressCheckout\', \'WebPaymentPlus\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function,               date_added) values ('".MODULE_PAYMENT_PAYPAL_TEXT_SELECTOPTION."',    'MODULE_PAYMENT_PAYPAL_SELECTOPTION',    '',                '".MODULE_PAYMENT_PAYPAL_DESC_SELECTOPTION."',    '6', '2', 'zen_cfg_null(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_TEXT_ZONE."',            'MODULE_PAYMENT_PAYPAL_ZONE',            '0',               '".MODULE_PAYMENT_PAYPAL_DESC_ZONE."',            '6', '3', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_TEXT_ORDER_STATUS_ID."', 'MODULE_PAYMENT_PAYPAL_ORDER_STATUS_ID', '0',               '".MODULE_PAYMENT_PAYPAL_DESC_ORDER_STATUS_ID."', '6', '4', 'zen_cfg_pull_down_order_statuses(', 'zen_get_order_status_name', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order,                             date_added) values ('".MODULE_PAYMENT_PAYPAL_TEXT_SORT_ORDER."',      'MODULE_PAYMENT_PAYPAL_SORT_ORDER',      '0',               '".MODULE_PAYMENT_PAYPAL_DESC_SORT_ORDER."',      '6', '5', now())");

    // for Express Checkout
    $curencies = array(
      'USER' => '[User Selected Currency]',
      'AUD' => 'Australian Dollar',
      'BRL' => 'Brazilian Real',
      'CAD' => 'Canadian Dollar',
      'CZK' => 'Czech Koruna',
      'DKK' => 'Danish Krone',
      'EUR' => 'Euro',
      'HKD' => 'Hong Kong Dollar',
      'HUF' => 'Hungarian Forint',
      'ILS' => 'Israeli New Sheqel',
      'JPY' => 'Japanese Yen',
      'MYR' => 'Malaysian Ringgit',
      'MXN' => 'Mexican Peso',
      'NOK' => 'Norwegian Krone',
      'NZD' => 'New Zealand Dollar',
      'PHP' => 'Philippine Peso',
      'PLN' => 'Polish Zloty',
      'GBP' => 'Pound Sterling',
      'SGD' => 'Singapore Dollar',
      'SEK' => 'Swedish Krona',
      'CHF' => 'Swiss Franc',
      'TWD' => 'Taiwan New Dollar',
      'THB' => 'Thai Baht',
      'TRY' => 'Turkish Lira',
      'USD' => 'U.S. Dollar',
    );
    $option = array();
    foreach($curencies as $k => $v) {
      $option[] = "array(\'id\' => \'$k\', \'text\' => \'$v\')";
    }
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('</b><div id=\"EC_div\"><b>',                           'MODULE_PAYMENT_PAYPAL_EC_START',              '',                              '',                                                     '6', '10', 'zen_cfg_null(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order,               date_added) values ('".MODULE_PAYMENT_PAYPAL_EC_TEXT_BUSINESS_ID."',        'MODULE_PAYMENT_PAYPAL_EC_BUSINESS_ID',        '".STORE_OWNER_EMAIL_ADDRESS."', '".MODULE_PAYMENT_PAYPAL_EC_DESC_BUSINESS_ID."',        '6', '11', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order,               date_added) values ('".MODULE_PAYMENT_PAYPAL_EC_TEXT_BUSINESS_PASS."',      'MODULE_PAYMENT_PAYPAL_EC_BUSINESS_PASS',      '',                              '".MODULE_PAYMENT_PAYPAL_EC_DESC_BUSINESS_PASS."',      '6', '12', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order,               date_added) values ('".MODULE_PAYMENT_PAYPAL_EC_TEXT_BUSINESS_SIGNATURE."', 'MODULE_PAYMENT_PAYPAL_EC_BUSINESS_SIGNATURE', '',                              '".MODULE_PAYMENT_PAYPAL_EC_DESC_BUSINESS_SIGNATURE."', '6', '13', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_EC_TEXT_SETTLEMENT_TYPE."',    'MODULE_PAYMENT_PAYPAL_EC_SETTLEMENT_TYPE',    'Sale',                          '".MODULE_PAYMENT_PAYPAL_EC_DESC_SETTLEMENT_TYPE."',    '6', '14', 'zen_cfg_select_option(array(\'Sale\', \'Authorization\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_EC_TEXT_CURRENCY."',           'MODULE_PAYMENT_PAYPAL_EC_CURRENCY',           'USER',                          '".MODULE_PAYMENT_PAYPAL_EC_DESC_CURRENCY."',           '6', '15', 'zen_cfg_select_drop_down_paypal(array(".implode(",", $option)."), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_EC_TEXT_REFERENCE."',          'MODULE_PAYMENT_PAYPAL_EC_REFERENCE',          'True',                          '".MODULE_PAYMENT_PAYPAL_EC_DESC_REFERENCE."',          '6', '16', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_EC_TEXT_TEST."',               'MODULE_PAYMENT_PAYPAL_EC_TEST',               'True',                          '".MODULE_PAYMENT_PAYPAL_EC_DESC_TEST."',               '6', '17', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('</b></div><b>',                                        'MODULE_PAYMENT_PAYPAL_EC_END',                '',                              '',                                                     '6', '19', 'zen_cfg_null(', now())");

    // for Web Payment Plus
    $customAvailableChars = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz' .
                            '01234567890123456789';
    $customAvailableCharCount = strlen($customAvailableChars);
    $customCharCount = zen_rand(20, 30);
    $customValue = '';
    for ( $i = 0 ; $i < $customCharCount ; $i++ ) {
        $pos = mt_rand(0, $customAvailableCharCount * 50) % $customAvailableCharCount;
        $customValue = $customValue . substr($customAvailableChars, $pos, 1);
    }

    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('</b><div id=\"WPP_div\"><b>',                          'MODULE_PAYMENT_PAYPAL_WPP_START',             '',                              '',                                                     '6', '20', 'zen_cfg_null(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_WPP_TEXT_LINK."',              'MODULE_PAYMENT_PAYPAL_WPP_LINK',              '',                              '".MODULE_PAYMENT_PAYPAL_WPP_DESC_LINK."',              '6', '27', 'zen_cfg_null(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order,               date_added) values ('".MODULE_PAYMENT_PAYPAL_WPP_TEXT_MERCHANT_ID."',       'MODULE_PAYMENT_PAYPAL_WPP_MERCHANT_ID',       '',                              '".MODULE_PAYMENT_PAYPAL_WPP_DESC_MERCHANT_ID."',       '6', '21', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_WPP_TEXT_SETTLEMENT_TYPE."',   'MODULE_PAYMENT_PAYPAL_WPP_SETTLEMENT_TYPE',   'sale',                          '".MODULE_PAYMENT_PAYPAL_WPP_DESC_SETTLEMENT_TYPE."',   '6', '22', 'zen_cfg_select_option(array(\'sale\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_WPP_TEXT_CURRENCY."',          'MODULE_PAYMENT_PAYPAL_WPP_CURRENCY',          'JPY',                           '".MODULE_PAYMENT_PAYPAL_WPP_DESC_CURRENCY."',          '6', '23', 'zen_cfg_select_option(array(\'User Selected Currency\', \'USD\', \'JPY\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('".MODULE_PAYMENT_PAYPAL_WPP_TEXT_TEST."',              'MODULE_PAYMENT_PAYPAL_WPP_TEST',              'True',                          '".MODULE_PAYMENT_PAYPAL_WPP_DESC_TEST."',              '6', '24', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order,               date_added) values ('".MODULE_PAYMENT_PAYPAL_WPP_TEXT_CUSTOM_KEY."',        'MODULE_PAYMENT_PAYPAL_WPP_CUSTOM_KEY','".$customValue."',                      '".MODULE_PAYMENT_PAYPAL_WPP_DESC_CUSTOM_KEY."',        '6', '25', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order,               date_added) values ('".MODULE_PAYMENT_PAYPAL_WPP_TEXT_EMAIL."',             'MODULE_PAYMENT_PAYPAL_WPP_EMAIL',             '',                              '".MODULE_PAYMENT_PAYPAL_WPP_DESC_EMAIL."',             '6', '26', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('</b></div><b>',                                        'MODULE_PAYMENT_PAYPAL_WPP_END',               '',                              '',                                                     '6', '29', 'zen_cfg_null(', now())");

    // customers(paypal_express_checkout_billing_agreement_id)
    $find   = false;
    $result = $db->Execute("desc ".TABLE_CUSTOMERS);
    while (!$result->EOF) {
      if ($result->fields['Field'] == "paypal_express_checkout_billing_agreement_id") {
        $find = true;
        break;
      }
      $result->MoveNext();
    }
    if ($find == false) {
      $db->Execute("alter table ". TABLE_CUSTOMERS . " add column paypal_express_checkout_billing_agreement_id varchar(255) NULL default NULL");
    }

    // payment_ec_log
    $query = "create table if not exists ".TABLE_PAYPAL_LOG." (
                paypal_log_id int(11)      not null auto_increment,
                customers_id  int(11)      not null default 0,
                method        varchar(255) not null default '',
                request       text         not null default '',
                response      text         not null default '',
                ack           varchar(255) not null default '',
                created       datetime         null,
                updated       datetime         null,
                primary key(paypal_log_id)
              )";
    $db->Execute($query);

    // payment_wpp_log
    $query = "create table if not exists ".TABLE_PAYPAL_WPP_LOG." (
                paypal_wpp_log_id int(11)      not null auto_increment,
                post_base64       text,
                session_id        text,
                saved_session     blob,
                expiry            int(17),
                customers_id      int(11),
                reject_reason     text,
                created           datetime     null,
                updated           datetime     null,
                primary key(paypal_wpp_log_id)
              )";
    $db->Execute($query);

    $this->notify('NOTIFY_PAYMENT_PAYPAL_INSTALLED');
  }

  /**
   * Remove the module and all its settings
   *
   */
  function remove() {
    global $db;
    $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key LIKE  'MODULE_PAYMENT_PAYPAL%'");
    $this->notify('NOTIFY_PAYMENT_PAYPAL_UNINSTALLED');

  }

  /**
   * Internal list of configuration keys used for configuration of the module
   *
   * @return array
   */
  function keys() {
    return array(
    'MODULE_PAYMENT_PAYPAL_STATUS',
    'MODULE_PAYMENT_PAYPAL_SETTLEMENT_TYPE',
    'MODULE_PAYMENT_PAYPAL_SELECTOPTION',
    'MODULE_PAYMENT_PAYPAL_ZONE',
    'MODULE_PAYMENT_PAYPAL_ORDER_STATUS_ID',
    'MODULE_PAYMENT_PAYPAL_SORT_ORDER',

    'MODULE_PAYMENT_PAYPAL_EC_START',
    'MODULE_PAYMENT_PAYPAL_EC_BUSINESS_ID',
    'MODULE_PAYMENT_PAYPAL_EC_BUSINESS_PASS',
    'MODULE_PAYMENT_PAYPAL_EC_BUSINESS_SIGNATURE',
    'MODULE_PAYMENT_PAYPAL_EC_SETTLEMENT_TYPE',
    'MODULE_PAYMENT_PAYPAL_EC_CURRENCY',
    'MODULE_PAYMENT_PAYPAL_EC_REFERENCE',
    'MODULE_PAYMENT_PAYPAL_EC_TEST',
    'MODULE_PAYMENT_PAYPAL_EC_END',

    'MODULE_PAYMENT_PAYPAL_WPP_START',
    'MODULE_PAYMENT_PAYPAL_WPP_LINK',
    'MODULE_PAYMENT_PAYPAL_WPP_MERCHANT_ID',
    'MODULE_PAYMENT_PAYPAL_WPP_SETTLEMENT_TYPE',
    'MODULE_PAYMENT_PAYPAL_WPP_CURRENCY',
    'MODULE_PAYMENT_PAYPAL_WPP_TEST',
//    'MODULE_PAYMENT_PAYPAL_WPP_CUSTOM_KEY',
    'MODULE_PAYMENT_PAYPAL_WPP_EMAIL',
    'MODULE_PAYMENT_PAYPAL_WPP_END',
    );
  }
}
?>
