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
// $Id: discount_coupon.php 3253 2006-03-25 17:26:14Z birdbrain $
//

define('NAVBAR_TITLE', '��������ݥ�');
define('HEADING_TITLE', '��������ݥ�');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span>��̵���ʥ����ɤǤ����⤦�������Ϥ��Ƥ���������');

define('HEADING_COUPON_HELP', '��������ݥ�إ��');
define('TEXT_CLOSE_WINDOW', '������ɥ����Ĥ��� [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">�����Ϥγ�������ݥ����������');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">����Τ���:</span> %s</p><p class="smallText">����Τ����Ѥˤ����äư������¤������礬�������ޤ����ܤ����ϲ���������������</p>');
define('TEXT_COUPON_HELP_DATE', '<p>���Υ����ݥ�� %s �� %s �δ֤˸¤�ͭ���Ǥ���</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">��������ݥ���о�</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">���ƥ���ˤ������:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">���ʤˤ������:</p>');
define('TEXT_ALLOW', '�о�');
define('TEXT_DENY', '�оݳ�');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>���γ�������ݥ�������ƥ����оݤǤ���</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>���γ�������ݥ���������оݤǤ���</p>');
define('TEXT_CAT_ALLOWED', ' (���Υ��ƥ���Ǥ��Ȥ����������ޤ�)');
define('TEXT_CAT_DENIED', ' (���Υ��ƥ���ϳ���оݳ��Ǥ�)');
define('TEXT_PROD_ALLOWED', ' (���ξ��ʤǤ��Ȥ����������ޤ�)');
define('TEXT_PROD_DENIED', ' (���ξ��ʤϳ���оݳ��Ǥ�)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">��������ݥ��' . TEXT_GV_NAMES . '�Τ���ʸ�ˤϤ��Ȥ��ˤʤ�ޤ��󡣰��Τ���ʸ�ˤĤ���ĤΥ����ݥ󤬤����Ѥ��������ޤ���</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', '��������ݥ�Ȳ�... ');
define('TEXT_DISCOUNT_COUPON_ID', '��������ݥ����������: ');
?>