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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'EZ-Pages');
define('TABLE_HEADING_PAGES', '�ڡ��������ȥ�');
define('TABLE_HEADING_ACTION', '���������');
define('TABLE_HEADING_VSORT_ORDER', '�����ɥܥå����������');
define('TABLE_HEADING_HSORT_ORDER', 'Footer Sort Order');
define('TEXT_PAGES_TITLE', '�ڡ��������ȥ�:');
define('TEXT_PAGES_HTML_TEXT', 'HTML ����ƥ��:');
define('TABLE_HEADING_DATE_ADDED', '�ɲ���:');
define('TEXT_PAGES_STATUS_CHANGE', '���ơ��������ѹ�: %s');
define('TEXT_INFO_DELETE_INTRO', '���Υڡ����������˺�����ޤ�����');
define('SUCCESS_PAGE_INSERTED', '����: ���Υڡ�������������ޤ���');
define('SUCCESS_PAGE_UPDATED', '����: ���Υڡ����Ϲ�������ޤ���');
define('SUCCESS_PAGE_REMOVED', '����: ���Υڡ����Ϻ������ޤ���');
define('SUCCESS_PAGE_STATUS_UPDATED', '����: ���Υڡ����Υ��ơ������Ϲ�������ޤ���');
define('ERROR_PAGE_TITLE_REQUIRED', '���顼: �ڡ��������ȥ뤬ɬ�פǤ�.');
define('ERROR_UNKNOWN_STATUS_FLAG', '���顼: ���ơ����������Υե饰�Ǥ�');
define('ERROR_MULTIPLE_HTML_URL', '���顼: �ơ��Υ�󥯤��Ф���ʣ���������Ŭ�Ѥ��Ƥ��ޤ�<br />: HTML ����ƥ�� -or- ������� URL -or- ������� URL���ɤ줫��ĤΤ����ꤷ�Ƥ�������');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', '�إå���:');
define('TABLE_HEADING_STATUS_SIDEBOX', '�����ɥܥå���:');
define('TABLE_HEADING_STATUS_FOOTER', '�եå���:');
define('TABLE_HEADING_STATUS_TOC', '���롼�ԥ�:');
define('TABLE_HEADING_CHAPTER', '���롼��ID:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', '������������ɥ��򳫤�:');
define('TABLE_HEADING_PAGE_IS_SSL', '�ڡ�����SSL�Ǥ�:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', ' <b>%d</b> ���� <b>%d</b> ��ɽ��(<b>%d</b> �ڡ�����)');
define('IMAGE_NEW_PAGE', '�����ڡ���');
define('TEXT_INFO_PAGE_IMAGE', '���᡼��');
define('TEXT_INFO_CURRENT_IMAGE', '���ߤΥ��᡼��:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', '�ڡ��������� ...');

define('TEXT_HEADER_SORT_ORDER', '����:');
define('TEXT_SIDEBOX_SORT_ORDER', '����:');
define('TEXT_FOOTER_SORT_ORDER', '����:');
define('TEXT_TOC_SORT_ORDER', '����:');
define('TEXT_CHAPTER', '���롼��ID:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', '���롼��ID:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', '�إå����������ϥإå���������˺���Ƥ�����ˤΤ߻��Ѥ���ޤ�; �����ϥ������礭�����ͤ����ꤷ�Ƥ�������');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', '�����ɥܥå����������ϥ����ɥܥå�������ľ���¤٤��Ƥ�����ˤΤ߻��Ѥ���ޤ�; �����ϥ������礭�����ͤ����ꤷ�Ƥ���������');
define('TEXT_FOOTER_ORDER_EXPLAIN', '�եå����������ϥեå���������˺���Ƥ�����ˤΤ߻��Ѥ���ޤ�; �����ϥ������礭�����ͤ����ꤷ�Ƥ�������');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', '���롼�������ϥ���ƥ�ĥ֥�å��Υ��ꥢ������˿�ľ���¤�Ǥ�����Τ߻��ѤǤ��ޤ��������ϥ������礭�����ͤ����ꤷ�Ƥ���������');
define('TEXT_CHAPTER_EXPLAIN', '���롼�ԥ󥰤���Ѥ��ơ��ڡ����򥰥롼�ײ�����ưŪ���ܼ���ɽ�������뤳�Ȥ��Ǥ��ޤ���Ʊ�����롼��ID���ĥڡ���Ʊ�Τ����롼�ײ�����ޤ��������ϥ��롼����Ǥ��ܼ���ɽ�������ꤷ�ޤ���');

define('TEXT_ALT_URL', '�������URL:');
define('TEXT_ALT_URL_EXPLAIN', '���ꤵ���Ȥ��Υڡ�������ƥ�Ĥ�̵�뤵�졢������󥯤ϥ�󥯤Ȥ��ƻ��Ѥ����URL���Ѵ�����ޤ���<br />��: index.php?main_page=reviews<br />�ޥ���������Ȥ���: index.php?main_page=account and mark as SSL');

define('TEXT_ALT_URL_EXTERNAL', '������� URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', '���ꤵ���Ȥ��Υڡ�������ƥ�Ĥ�̵�뤵�졢������󥯤ϥ�󥯤Ȥ��ƻ��Ѥ����URL���Ѵ�����ޤ���<br />������󥯤ؤ���: http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'ɽ����: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', '���롼��');
define('TEXT_SORT_HEADER_TITLE', '�إå���');
define('TEXT_SORT_SIDEBOX_TITLE', '�����ɥܥå���');
define('TEXT_SORT_FOOTER_TITLE', '�եå���');
define('TEXT_SORT_PAGE_TITLE', '�ڡ��������ȥ�');
define('TEXT_SORT_PAGE_ID_TITLE', '�ڡ���ID, �����ȥ�');

define('TEXT_PAGE_TITLE', '�����ȥ�:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>�ٹ�: ʣ���Υ�����</strong>');
?>