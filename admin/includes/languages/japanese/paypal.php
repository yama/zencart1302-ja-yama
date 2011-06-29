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
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', '��ʸ��ɽ������: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', '������ä�PayPal����ʸ(��������� - �Ť����)');
  define('TEXT_SORT_PAYPAL_ID', '������ä�PayPal����ʸ(�Ť���� - ���������)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', '��ʸ ID (�߽�), ������ä�PayPal����ʸ');
  define('TEXT_SORT_ZEN_ORDER_ID', '��ʸ ID (����), ������ä�PayPal����ʸ');
  define('TEXT_PAYMENT_AMOUNT_DESC', '��ʸ�����̡ʹ߽�)');
  define('TEXT_PAYMENT_AMOUNT', '��ʸ�����̡ʾ���)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal Instant Payment������');
  define('HEADING_PAYMENT_STATUS', '��ʧ���Υ��ơ�����');
  define('TEXT_ALL_IPNS', '����');

  define('TABLE_HEADING_ORDER_NUMBER', '��ʸ�ֹ�');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal���ֹ�');
  define('TABLE_HEADING_TXN_TYPE', '�����Υ�����');
  define('TABLE_HEADING_PAYMENT_STATUS', '��ʧ���Υ��ơ�����');
  define('TABLE_HEADING_PAYMENT_AMOUNT', '����');
  define('TABLE_HEADING_ACTION', '���������');
  define('TABLE_HEADING_DATE_ADDED', '�ɲ�����');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', '���ơ��������������Υ���ȥ꡼��');
  define('TABLE_HEADING_ENTRY_NUM', '����ȥ꡼��');
  define('TABLE_HEADING_TRANS_ID', '����ID');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', '(<strong>%d</strong> IPN��)<strong>%d</strong> ���� <strong>%d</strong>��ɽ����');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal �ܵ���Ͽ�ξܺ�');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal Instant Payment������');
  define('TEXT_INFO_ENTRY_ADDRESS', '����');
  define('TEXT_INFO_ORDER_NUMBER', '��ʸ�ֹ�');
  define('TEXT_INFO_TXN_TYPE', '�����Υ�����');
  define('TEXT_INFO_PAYMENT_STATUS', '��ʧ���Υ��ơ�����');
  define('TEXT_INFO_PAYMENT_AMOUNT', '����');
  define('ENTRY_FIRST_NAME', '̾');
  define('ENTRY_LAST_NAME', '��');
  define('ENTRY_BUSINESS_NAME', '�ӥ��ͥ��͡���');
  define('ENTRY_ADDRESS', '����');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', '��ʧ���Ԥ�ID');
  define('ENTRY_PAYER_STATUS', '��ʧ���ԤΥ��ơ�����');
  define('ENTRY_ADDRESS_STATUS', '����Υ��ơ�����');
  define('ENTRY_PAYMENT_TYPE', '��ʧ���Υ�����');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', '��ʧ���Υ��ơ�����');
  define('TABLE_HEADING_PENDING_REASON', '�ڥ�ǥ��󥰤���ͳ');
  define('TABLE_HEADING_IPN_DATE', 'IPN������');
  define('ENTRY_INVOICE', '����');
  define('ENTRY_PAYPAL_IPN_TXN', '����ID');
  define('ENTRY_PAYMENT_DATE', '��ʧ������');
  define('ENTRY_PAYMENT_LAST_MODIFIED', '�ǽ�������');
  define('ENTRY_MC_CURRENCY', 'MC���̲�');
  define('ENTRY_MC_GROSS', 'MC�ι��');
  define('ENTRY_MC_FEE', 'MC�Υե���');
  define('ENTRY_PAYMENT_GROSS', '��ʧ�۹��');
  define('ENTRY_PAYMENT_FEE', '��ʧ���ե���');
  define('ENTRY_SETTLE_AMOUNT', '�����ι��');
  define('ENTRY_SETTLE_CURRENCY', '�������̲�');
  define('ENTRY_EXCHANGE_RATE', '����졼��');
  define('ENTRY_CART_ITEMS', '��������Υ����ƥ��');
  define('ENTRY_CUSTOMER_COMMENTS', '�ܵҤΥ�����');
  define('TEXT_NO_IPN_HISTORY', 'IPN������ϻ��ȤǤ��ޤ���');
  define('TEXT_TXN_SIGNATURE', '�����ν�̾');
  //end ADMIN text
?>
