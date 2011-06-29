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
//  $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '���եȷ���᡼������');

define('TEXT_CUSTOMER', '�ܵ�:');
define('TEXT_SUBJECT', '��̾:');
define('TEXT_FROM', '���п�email:');
define('TEXT_TO', '������email:');
define('TEXT_AMOUNT', '����������');
define('TEXT_MESSAGE', '�ƥ����ȷ��� <br />��ʸ:');
define('TEXT_RICH_TEXT_MESSAGE', 'HTML���� <br />��ʸ:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">�ġ��˥᡼����������뤫����Υץ�����󤫤����򤷤Ƥ���������</span>');
define('TEXT_SELECT_CUSTOMER', '�ܵҤ�����');
define('TEXT_ALL_CUSTOMERS', '���Ƥθܵ�');
define('TEXT_NEWSLETTER_CUSTOMERS', '�᡼��ޥ��������Ͽ���Ƥ��뤹�٤Ƥθܵ�');

define('NOTICE_EMAIL_SENT_TO', 'Notice: %s�˥᡼�������');
define('ERROR_NO_CUSTOMER_SELECTED', '���顼�� �ܵҤ����򤵤�Ƥ��ޤ���');
define('ERROR_NO_AMOUNT_SELECTED', '���顼�� �ۤ����򤵤�Ƥ��ޤ���');
define('ERROR_NO_SUBJECT', '���顼�� ��̾�����Ϥ���Ƥ��ޤ���');
define('ERROR_GV_AMOUNT', '��ۤ�ñ��ȴ�������Ϥ��Ƥ�����������: 500.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">���ڤʤ����ͤǤ��뤢�ʤ��ˡ�' . TEXT_GV_NAME . '��£�褤�����ޤ���</font>');
define('TEXT_GV_WORTH', '' . TEXT_GV_NAME . '�ΰ����ۡ� ');
define('TEXT_TO_REDEEM', '����' . TEXT_GV_NAME . '�����������ˤϡ��ʲ��Υ�󥯤򥯥�å����Ƥ���������ư������꤬�������' . TEXT_GV_REDEEM.'�����Ϥ���������'."\n");
define('TEXT_WHICH_IS', ' ���եȷ��ֹ桧');
define('TEXT_IN_CASE', ' ');
define('TEXT_OR_VISIT', '�ޤ��� ');
define('TEXT_ENTER_CODE', ' �ˤ��������˥��ե��ֹ�����Ϥ��Ƥ���������');
define('TEXT_CLICK_TO_REDEEM','����Ȥ������Ѥ��뤿��ˤ����򥯥�å����Ƥ�������');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '������åפǤ���������������' . TEXT_GV_NAME . '�ϥ������ƥ��Τ���ͭ���ˤʤäƤ���ޤ���Ǥ��������������ޤ����Ѥ���ǽ�ˤʤ�ޤ�����');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . '' . TEXT_GV_NAME . ' �ΰ����ۤ�%s�Ǥ���');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . '' . TEXT_GV_NAME . '��������åפ���᡼��Ǥɤʤ��ˤǤ�£�뤳�Ȥ��Ǥ��ޤ���');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>
