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
// $Id: pm2checkout.php,v 1.2 2004/09/02 06:18:06 shidairiki Exp $
//

  define('MODULE_PAYMENT_2CHECKOUT_TEXT_TITLE', '2CheckOut');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_DESCRIPTION', '���쥸�åȥ����� �ƥ��Ⱦ���:<br><br>CC#: 4111111111111111<br>ͭ������: Ǥ��');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_TYPE', 'Type:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_OWNER', '������̾��:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_OWNER_FIRST_NAME', '������̾��(̾):');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_OWNER_LAST_NAME', '������̾��(��):');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_NUMBER', '�������ֹ�:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_EXPIRES', 'ͭ������:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_CHECKNUMBER', '���쥸�åȥ����ɥ����å��ֹ�:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(located at the back of the credit card)');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_JS_CC_NUMBER', '* �������ֹ��' . CC_NUMBER_MIN_LENGTH . 'ʸ���ʾ�ɬ�פǤ���\n');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_ERROR_MESSAGE', '���쥸�åȥ����ɤν����˥��顼��ȯ�����ޤ���. �⤦���ٻ�Ƥ���������');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_ERROR', '���쥸�åȥ����� ���顼!');
?>