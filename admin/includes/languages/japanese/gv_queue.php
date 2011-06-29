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
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '��ǧ�Ԥ�' . TEXT_GV_NAME);

define('TABLE_HEADING_CUSTOMERS', '�ܵ�');
define('TABLE_HEADING_ORDERS_ID', '��ʸ�ֹ�.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' ��');
define('TABLE_HEADING_DATE_PURCHASED', '������');
define('TABLE_HEADING_ACTION', '���');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', '��Web�����ȤˤƤ���������������' . TEXT_GV_NAME);
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', '�������ƥ������ץ����Τ��᤹����ͭ���ˤϤʤ�ޤ���Ǥ�������' .
                                          '�����������ѳ��Ϥν�������λ�������ޤ�������Ź�ˤƤ����ȤǤ����Ѥ����������Ȥ��Ǥ���¾���᡼��ˤƤɤʤ��ˤǤ�£�뤳�Ȥ��Ǥ��ޤ���' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', '���������������ޤ���' . TEXT_GV_NAME . '�ΰ����ۤ�%s�Ǥ���');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', '��Ź�����Ѥ������������ˤ��꤬�Ȥ��������ޤ���');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' ������');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' ����ʸ�ֹ�');

define('TEXT_EDIT_ORDER','����ʸ�ֹ���Խ�����');
define('TEXT_GV_NONE','ͭ��������' . TEXT_GV_NAME . '�Ϥ���ޤ���');

define('ERROR_MAX_GIFT_AMOUNT_EXCEEDED','���եȷ��Ĺ⤬'.MAX_GIFT_AMOUNT.'��Ķ����Τǰ��������Ǥ��ޤ���');
?>
