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
//  $Id: coupon_admin.php 2457 2005-11-27 04:51:37Z ajeh $
//

define('TOP_BAR_TITLE', '����');
define('HEADING_TITLE', '�����ݥ���δ���');
define('HEADING_TITLE_STATUS', '���ơ����� : ');
define('TEXT_CUSTOMER', '�ܵ�:');
define('TEXT_COUPON', '�����ݥ�̾:');
define('TEXT_COUPON_ALL', '���ƤΥ����ݥ�');
define('TEXT_COUPON_ACTIVE', 'ͭ���ʥ����ݥ��');
define('TEXT_COUPON_INACTIVE', '̵���ʥ����ݥ��');
define('TEXT_SUBJECT', '��̾:');
define('TEXT_UNLIMITED', '̵����');
define('TEXT_FROM', '���п�:');
define('TEXT_FREE_SHIPPING', '̵������');
define('TEXT_MESSAGE', '��ʸ:');
define('TEXT_RICH_TEXT_MESSAGE','��ʸ(HTML����):');
define('TEXT_SELECT_CUSTOMER', '�ܵҤ�����');
define('TEXT_ALL_CUSTOMERS', '���Ƥθܵ�');
define('TEXT_NEWSLETTER_CUSTOMERS', '���ƤΥ᡼��ޥ�������ɼԤ�');
define('TEXT_CONFIRM_DELETE', '���Υ����ݥ���������˺�����ޤ�����');
define('TEXT_SEE_RESTRICT', '���¤�Ŭ�Ѥ���');

define('TEXT_COUPON_ANNOUNCE','���꤬�Ȥ��������ޤ��������ݥ�����󶡤������ޤ���');

define('TEXT_TO_REDEEM', '���ʹ������ˤ��Υ����ݥ����Ѥ��뤳�Ȥ��Ǥ��ޤ�����ʧ��������Ϥ���Ȥ��˲����Υ����ݥ󥳡��ɤ���ꤷ�Ƥ���������');
define('TEXT_IN_CASE', ' ���꤬ȯ��������� ');
define('TEXT_VOUCHER_IS', '�����ݥ� ������ ');
define('TEXT_REMEMBER', '�����ݥ� �����ɤ�ʤ����ʤ��褦�����ʾ�����¸���Ƥ���������');
define('TEXT_VISIT', 'Visit us at %s');
define('TEXT_ENTER_CODE', ' �����ݥ󥳡��ɤ����Ϥ��Ƥ��������� ');

define('TABLE_HEADING_ACTION', '���');

define('CUSTOMER_ID', '�ܵ� ID');
define('CUSTOMER_NAME', '�ܵ�̾');
define('REDEEM_DATE', '������������');
define('IP_ADDRESS', 'IP ���ɥ쥹');

define('TEXT_REDEMPTIONS', '��������');
define('TEXT_REDEMPTIONS_TOTAL', '���');
define('TEXT_REDEMPTIONS_CUSTOMER', '�ܵ�');
define('TEXT_NO_FREE_SHIPPING', '̵���������ʤ�');

define('NOTICE_EMAIL_SENT_TO', '���: �᡼���������: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '���顼: ���򤵤줿�ܵҤ�¸�ߤ��ޤ���');
define('ERROR_NO_SUBJECT', '���顼: ��̾�����Ϥ���Ƥ��ޤ���');

define('COUPON_NAME', '�����ݥ�̾');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', '�����ݥ���γ�');
define('COUPON_CODE', '�����ݥ� ������');
define('COUPON_STARTDATE', '������');
define('COUPON_FINISHDATE', '��λ��');
define('COUPON_FREE_SHIP', '̵������');
define('COUPON_DESC', '�����ݥ�������� <br />(�ܵҤϸ��뤳�Ȥ��Ǥ��ޤ���)');
define('COUPON_MIN_ORDER', '�����ݥ�����Ѻ����');
define('COUPON_USES_COUPON', '�����ݥ�����Ȥ����ѿ�');
define('COUPON_USES_USER', '�ܵҤ��Ȥ����ѿ�');
define('COUPON_PRODUCTS', 'ͭ���ʾ��ʤΥꥹ��');
define('COUPON_CATEGORIES', 'ͭ���ʥ��ƥ���Υꥹ��');
define('VOUCHER_NUMBER_USED', '���ѿ�');
define('DATE_CREATED', '������');
define('DATE_MODIFIED', '������');
define('TEXT_HEADING_NEW_COUPON', '�����������ݥ�����������');
define('TEXT_NEW_INTRO', '�����������ݥ��������Ϥ��Ƥ���������<br />');

define('ERROR_NO_COUPON_AMOUNT', '�����ݥ���γۤ����Ϥ���Ƥ��ޤ���');
define('ERROR_NO_COUPON_NAME', '�����ݥ�̾�����Ϥ���Ƥ��ޤ��� ');
define('ERROR_COUPON_EXISTS', '���Υ����ݥ� �����ɤϴ���¸�ߤ��ޤ���');


define('COUPON_NAME_HELP', '�������륯���ݥ����̾��');
define('COUPON_AMOUNT_HELP', '�����ݥ�������Ѥ����Ȥ��ΰ��������� ��%�פ�Ǹ�ˤĤ������ϳ��Ψ�Υѡ�����ơ���');
define('COUPON_CODE_HELP', '�����ݥ󥳡��ɤ����Ϥ��Ƥ�������������ξ��ϼ�ư����������ޤ���');
define('COUPON_STARTDATE_HELP', '�����ݥ����ͭ���ˤʤ�����');
define('COUPON_FINISHDATE_HELP', '�����ݥ����ͭ�����¤�����');
define('COUPON_FREE_SHIP_HELP', '�����ݥ���θ��̤���������̵���ˤ��롣<BR>�Ρ��ȡ� ����ϥ����ݥ�����ѳۤ˴ط��ʤ�Ŭ�Ѥ���ޤ��������Ѻ���ۤ�Ŭ�Ѥ���ޤ���');
define('COUPON_FREE_SHIP_ITEM_HELP', '<BR>�ޤ������ʶ�ۤ��Ф��Ƥ�Ŭ�Ѥ���ޤ���');
define('COUPON_DESC_HELP', '�ܵҸ���������ʸ');
define('COUPON_MIN_ORDER_HELP', '�����ݥ����ͭ���ʾ��κ������ѳ�');
define('COUPON_USES_COUPON_HELP', '�����ݥ���κ������Ѳ��������ξ���̵���¤ˤʤ�ޤ���');
define('COUPON_USES_USER_HELP', '�����ݥ���κ������Ѳ��������ξ���̵���¤ˤʤ�ޤ���');
define('COUPON_PRODUCTS_HELP', '�����ݥ�������ѤǤ���product_ids�Υ���ޤǶ��ڤ�줿�ꥹ�ȡ�����ξ���̵����');
define('COUPON_CATEGORIES_HELP', '�����ݥ�������ѤǤ���cpaths�Υꥹ�ȡ�����ξ���̵����');
define('COUPON_BUTTON_PREVIEW', '�ץ�ӥ塼');
define('COUPON_BUTTON_CONFIRM', '����');
define('COUPON_BUTTON_BACK', '���');

define('COUPON_ACTIVE', '���ơ�����');
define('COUPON_START_DATE', '���ѳ�����');
define('COUPON_EXPIRE_DATE', 'ͭ������');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'Discount Coupon CANNOT be deactivated. This Discount Coupon is the Welcome Discount Coupon<br /><br />Change the Welcome Discount Coupon before trying to delete it.');
define('SUCCESS_COUPON_DISABLED', 'Success! Discount Coupon was set to Inactive ...');
define('TEXT_COUPON_NEW', '���ԡ��ǿ������������륯���ݥ���Υ����ݥ󥳡��ɤ���ꤷ�Ƥ���������');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', '�ٹ�! ���ꤵ�줿�����ݥ󥳡��ɤϴ���¸�ߤ��ޤ������ԡ�����������ޤ�����');
define('TEXT_CONFIRM_COPY', '���Υ����ݥ���򥳥ԡ����ƿ����������ݥ����������ޤ����������������[��¸]�ܥ���򲡤��Ƥ���������');
?>
