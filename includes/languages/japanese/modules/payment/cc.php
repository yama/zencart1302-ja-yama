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
// $Id: cc.php 2424 2005-11-22 09:25:32Z drbyte $
//

  define('MODULE_PAYMENT_CC_TEXT_TITLE', '���쥸�åȥ�����');
  define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', '���쥸�åȥ����ɥƥ��Ⱦ���:<br /><br />�ƥ������ֹ�: 4111111111111111<br />ͭ������: Ǥ��');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', '���쥸�åȥ����ɥ�����:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', '������̾��:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', '�������ֹ�:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', 'CVV �ֹ� (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . '�ܤ�������' . '</a>)');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', 'ͭ������:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* ���쥸�åȥ����ɤ�̾����' . CC_OWNER_MIN_LENGTH . 'ʸ��ɬ�פǤ�.\n');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* ���쥸�åȥ������ֹ��Ⱦ�ѿ�����' . CC_NUMBER_MIN_LENGTH . '�ʾ�ɬ�פǤ���\n');
  define('MODULE_PAYMENT_CC_TEXT_ERROR', '���쥸�åȥ����� ���顼:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* CVV �ֹ��' . CC_CVV_MIN_LENGTH . 'ʸ���ʾ�ɬ�פǤ���\n');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_ERROR','�ٹ� - ���ꥨ�顼: ');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_WARNING','�ٹ�: ���쥸�åȥ����ɻ�ʧ���⥸�塼�뤬ͭ���ˤʤäƤ��ޤ����������ɾ����᡼����������褦�����ꤵ��Ƥ��ޤ��󡣤��η�̡�������ˡ�Ǥ���ʸ�˥������ֹ�ν������Ǥ��ʤ���ǽ��������ޤ�����������>�⥸�塼��>��ʧ��>���쥸�åȥ�����>�Խ��ǥ����ɾ������������E�᡼�륢�ɥ쥹�����ꤷ�Ƥ���������' . "\n\n\n\n");
?>