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
// $Id: authorizenet.php 1969 2005-09-13 06:57:21Z drbyte $
//

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Credit Card');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '���쥸�åȥ����� �ƥ��Ⱦ���:<br><br>CC#: 4111111111111111<br>ͭ������: Ǥ��');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', '������:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', '������̾��:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', '�������ֹ�:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'ͭ������:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* ������̾����' . CC_OWNER_MIN_LENGTH . 'ʸ���ʾ�ɬ�פǤ���\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* �������ֹ��' . CC_NUMBER_MIN_LENGTH . 'ʸ���ʾ�ɬ�פǤ���\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', '���쥸�åȥ����ɤν����˥��顼��ȯ�����ޤ���. �⤦���ٻ�Ƥ���������.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', '���쥸�åȥ����ɤμ��դ����ݤ���ޤ�����¾�Υ��쥸�åȥ����ɤ����ܺ٤�������쥸�åȲ�Ҥ��䤤��碌�Ƥ���������');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', '���쥸�åȥ����� ���顼!!');
?>