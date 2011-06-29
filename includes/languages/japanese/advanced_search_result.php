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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', '�ܺٸ���');
define('NAVBAR_TITLE_2', '�������');

//define('HEADING_TITLE_1', '�ܺٸ���');
define('HEADING_TITLE', '�ܺٸ���');

define('HEADING_SEARCH_CRITERIA', '����������ɤ����Ϥ��Ƥ�������');

define('TEXT_SEARCH_IN_DESCRIPTION', '�����������鸡������');
define('ENTRY_CATEGORIES', '���ƥ��꡼:');
define('ENTRY_INCLUDE_SUBCATEGORIES', '���֥��ƥ����ޤ�');
define('ENTRY_MANUFACTURERS', '�᡼����:');
define('ENTRY_PRICE_FROM', '���ʲ���:');
define('ENTRY_PRICE_TO', '���ʾ��:');
define('ENTRY_DATE_FROM', '��������:');
define('ENTRY_DATE_TO', '��λ����:');

define('TEXT_SEARCH_HELP_LINK', '�إ��[?]');

define('TEXT_ALL_CATEGORIES', '�����ƥ���');
define('TEXT_ALL_MANUFACTURERS', '���᡼����');

define('HEADING_SEARCH_HELP', '�����إ��');
define('TEXT_SEARCH_HELP', '�ܺٸ����Ǥϡ�ñ���ʸ����� AND �� OR �Ƕ��ڤ뤳�Ȥ��Ǥ��ޤ���<br /><br />�㤨�� �ޥ������ե� AND �ޥ��������Ϥ���ȡ�ξ����ñ���ޤ�����ʤ򸡺����ޤ���������Ф��ơ��ޥ��� OR �����ܡ��ɤ����Ϥ���ȡ�ξ�����ɤ��餫��ñ���ޤ�����ʤ򸡺����ޤ���<br /><br />�����Ĥ���ñ��������ǰϤ�Ǹ�������ȡ����Ϥ���ʸ��������Τ˰��פ����Τ�õ���ޤ���<br /><br />�㤨�С�"�Ρ��� �ѥ�����"�Ȥ��Ƹ�������ȡ����Τޤޤ�ʸ�����ޤ�����ʤ򸡺����뤳�Ȥ��Ǥ��ޤ���<br /><br />���å���ȤäƤ������Ȥ߹�碌�ƻ��ꤹ�뤳�Ȥ�Ǥ��ޤ���
<br /><br />�㡧�ޥ������ե� AND (�����ܡ��� OR �ޥ��� OR "visual basic")');
define('TEXT_CLOSE_WINDOW', '������ɥ����Ĥ���[x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', '��ǥ�');
define('TABLE_HEADING_PRODUCTS', '����̾');
define('TABLE_HEADING_MANUFACTURER', '�᡼����');
define('TABLE_HEADING_QUANTITY', '����');
define('TABLE_HEADING_PRICE', '����');
define('TABLE_HEADING_WEIGHT', '����');
define('TABLE_HEADING_BUY_NOW', '����������');

define('TEXT_NO_PRODUCTS', '�������뾦�ʤϸ��Ĥ���ޤ���Ǥ�����');

define('ERROR_AT_LEAST_ONE_INPUT', '�����İʾ�θ������ܤ����Ϥ��Ƥ���������');
define('ERROR_INVALID_FROM_DATE', '̵���ʳ������դ����Ϥ���ޤ�����');
define('ERROR_INVALID_TO_DATE', '̵���ʽ�λ���դ����Ϥ���ޤ�����');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '��λ���դϳ������դ�Ʊ��������ʹߤ����դ����Ϥ��Ƥ���������');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '���ʲ��¤ˤ�Ⱦ�ѿ��������Ϥ��Ƥ���������');
define('ERROR_PRICE_TO_MUST_BE_NUM', '���ʾ�¤ˤ�Ⱦ�ѿ��������Ϥ��Ƥ���������');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '���ʾ�¤ϲ��ʲ��¤�Ʊ��������ʾ�ο��ͤ����Ϥ��Ƥ���������');
define('ERROR_INVALID_KEYWORDS', '̵���ʸ���������ɤ����Ϥ���ޤ�����');
?>
