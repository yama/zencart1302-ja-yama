<?php
/**
 * Authorize.net AIM Payment Module V.1.0 created by Eric Stamper - 01/30/2004 Released under GPL
 *
  * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 2667 2005-12-24 05:31:58Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<b>��ư��ǧ���쥸�åȥ������ֹ�:</b><br /><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>���:</b> �����Υ��쥸�åȥ������ֹ�ϱ��ѥ⡼�ɤǤϵ��ݲ������֤��ޤ������ƥ��ȥ⡼�ɤǤϾ�ǧ�������֤��ޤ��������ʹߤ�Ǥ�դ����դ�ͭ�����¤˻Ȥ��ޤ���Ǥ�դ�3��ޤ���4�� (AMEX)�ο�����CVV�����ɤ˻Ȥ��ޤ���<br /><br /><b>��ư��ǧ���쥸�åȥ������ֹ�:</b><br /><br />Card #: 4222222222222<br /><br />���Υ������ֹ�ϥƥ�����Ū�ǵ��ݲ����������ꤿ�����˻Ȥ��ޤ���<br /><br />');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', '���쥸�åȥ�����');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', '�����ɥ�����:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', '������̾��:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', '�������ֹ�:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'ͭ������:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV�ֹ�(<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'More Info' . '</a>)');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* ������̾����' . CC_OWNER_MIN_LENGTH . 'ʸ���ʾ�ɬ�פǤ���\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* �������ֹ��' . CC_NUMBER_MIN_LENGTH . 'ʸ���ʾ�ɬ�פǤ���\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* ������΢�̤˵��ܤ���Ƥ���3��ޤ���4���CVV�ֹ椬ɬ�פǤ���\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', '�����ͤΥ��쥸�åȥ����ɤϤ�����ͳ�ˤ�꾵ǧ���ߤ�ޤ���Ǥ�����������������⤦���ٻ�Ƥ��������������䤤��碌��������');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', '���쥸�åȥ����� ���顼!');
?>