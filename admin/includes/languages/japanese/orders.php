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
//  $Id: orders.php 2652 2005-12-22 18:30:59Z drbyte $
//

define('HEADING_TITLE', '��ʸ����');
define('HEADING_TITLE_SEARCH', '��ʸID:');
define('HEADING_TITLE_STATUS', '���ơ�����:');

define('TABLE_HEADING_PAYMENT_METHOD', '��ʧ��ˡ<br />������ˡ');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','������������褬�㤤�ޤ�');

define('TABLE_HEADING_COMMENTS', '������');
define('TABLE_HEADING_CUSTOMERS', '�ܵ�̾');
define('TABLE_HEADING_ORDER_TOTAL', '��ʸ���');
define('TABLE_HEADING_DATE_PURCHASED', '��ʸ��');
define('TABLE_HEADING_STATUS', '���ơ�����');
define('TABLE_HEADING_TYPE', 'Order Type');
define('TABLE_HEADING_ACTION', '���');
define('TABLE_HEADING_QUANTITY', '����');
define('TABLE_HEADING_PRODUCTS_MODEL', '����');
define('TABLE_HEADING_PRODUCTS', '����̾');
define('TABLE_HEADING_TAX', '��Ψ');
define('TABLE_HEADING_TOTAL', '���');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', '���� (��ȴ��)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', '���� (�ǹ���)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', '��� (��ȴ��)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', '��� (�ǹ���)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', '�ܵҤ�����');
define('TABLE_HEADING_DATE_ADDED', '������');

define('ENTRY_CUSTOMER', '�ܵ�̾:');
define('ENTRY_SOLD_TO', '����ʸ��̾:');
define('ENTRY_DELIVERY_TO', '������:');
define('ENTRY_SHIP_TO', '������:');
define('ENTRY_SHIPPING_ADDRESS', '�����轻��:');
define('ENTRY_BILLING_ADDRESS', '�����轻��:');
define('ENTRY_PAYMENT_METHOD', '��ʧ��ˡ:');
define('ENTRY_CREDIT_CARD_TYPE', '���쥸�åȥ����ɼ���:');
define('ENTRY_CREDIT_CARD_OWNER', '���쥸�åȥ����ɽ�ͭ��:');
define('ENTRY_CREDIT_CARD_NUMBER', '���쥸�åȥ������ֹ�:');
define('ENTRY_CREDIT_CARD_CVV', '���쥸�åȥ���CVV�ֹ�:');
define('ENTRY_CREDIT_CARD_EXPIRES', '���쥸�åȥ�����ͭ������:');
define('ENTRY_SUB_TOTAL', '����:');
define('ENTRY_TAX', '�Ƕ�:');
define('ENTRY_SHIPPING', '����:');
define('ENTRY_TOTAL', '���:');
define('ENTRY_DATE_PURCHASED', '��ʸ��:');
define('ENTRY_STATUS', '���ơ�����:');
define('ENTRY_DATE_LAST_UPDATED', '������:');
define('ENTRY_NOTIFY_CUSTOMER', '����������ܵҤ�����:');
define('ENTRY_NOTIFY_COMMENTS', '�ɲå�����:');
define('ENTRY_PRINTABLE', 'Ǽ�ʽ��ץ���');

define('TEXT_INFO_HEADING_DELETE_ORDER', '�����');
define('TEXT_INFO_DELETE_INTRO', '������ʸ�������˺�����ޤ���?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '�߸˿��򸵤��᤹');
define('TEXT_DATE_ORDER_CREATED', '��ʸ��:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '������:');
define('TEXT_INFO_PAYMENT_METHOD', '��ʧ��ˡ:');
define('TEXT_PAID', 'Paid');
define('TEXT_UNPAID', 'Un-paid');

define('TEXT_ALL_ORDERS', '���Ƥ���ʸ');
define('TEXT_NO_ORDER_HISTORY', '��ʸ����Ϥ���ޤ���');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', '����ʸ���վ����Τ��Τ餻');
define('EMAIL_TEXT_ORDER_NUMBER', '����ʸ�����ֹ�:');
define('EMAIL_TEXT_INVOICE_URL', '����ʸ�ˤĤ��Ƥξ���򲼵�URL�Ǥ������������ޤ���:');
define('EMAIL_TEXT_DATE_ORDERED', '����ʸ��:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>[��Ϣ�����]: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', '����ʸ�����ϼ��Τ褦�ˤʤäƤ���ޤ���:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>���ߤμ��վ���:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', '������ʤɤ��������ޤ����顢���Υ᡼��ˤ��ֿ�����������' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', '���顼: ��ʸ��¸�ߤ��ޤ���');
define('SUCCESS_ORDER_UPDATED', '����: ��ʸ���֤���������ޤ�����');
define('WARNING_ORDER_NOT_UPDATED', '�ٹ�: ��ʸ���֤ϲ��⹹������ޤ���Ǥ�����');

define('ENTRY_ORDER_ID','����� No. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">FREE</span>');

define('TEXT_DOWNLOAD_TITLE', '���������Υ�������ɾ���');
define('TEXT_DOWNLOAD_STATUS', '����');
define('TEXT_DOWNLOAD_FILENAME', '�ե�����͡���');
define('TEXT_DOWNLOAD_MAX_DAYS', '����');
define('TEXT_DOWNLOAD_MAX_COUNT', '�������');

define('TEXT_DOWNLOAD_AVAILABLE', '���Ѳ�ǽ');
define('TEXT_DOWNLOAD_EXPIRED', '�����ڤ�');
define('TEXT_DOWNLOAD_MISSING', '�����С���ˤ���ޤ���');

define('IMAGE_ICON_STATUS_CURRENT', '���� - ���Ѳ�ǽ');
define('IMAGE_ICON_STATUS_EXPIRED', '���� - �����ڤ�');
define('IMAGE_ICON_STATUS_MISSING', '���� - ����');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', '��������ɤ��������ޤ�����');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', '̵���ʥ�������ɤǤ���');
define('TEXT_MORE', '... more');

define('TEXT_INFO_IP_ADDRESS', 'IP���ɥ쥹: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','�ǡ����١�������CVV����');
define('TEXT_DELETE_CVV_REPLACEMENT','���');
define('TEXT_MASK_CC_NUMBER','���ο��˥ޥ����򤫤��Ƥ�������');
define('TEXT_PRODUCTS_ORDERED','��ʸ��������: ');
?>