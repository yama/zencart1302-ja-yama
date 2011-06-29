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
//  $Id: banner_manager.php 3131 2006-03-07 22:53:04Z ajeh $
//

define('HEADING_TITLE', '�Хʡ��δ���');

define('TABLE_HEADING_BANNERS', '�Хʡ�');
define('TABLE_HEADING_GROUPS', '���롼��');
define('TABLE_HEADING_STATISTICS', 'ɽ�� / ����å�');
define('TABLE_HEADING_STATUS', '���ơ�����');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','������������ɥ�');
define('TABLE_HEADING_BANNER_ON_SSL', 'SSL��ɽ��');
define('TABLE_HEADING_ACTION', '���');
define('TABLE_HEADING_BANNER_SORT_ORDER', '�����Ƚ�');

define('TEXT_BANNERS_TITLE', '�Хʡ� �����ȥ�:');
define('TEXT_BANNERS_URL', '�Хʡ� URL:');
define('TEXT_BANNERS_GROUP', '�Хʡ� ���롼��:');
define('TEXT_BANNERS_NEW_GROUP', ' �ޤ��ϲ��˿������Хʡ������롼�פ���Ͽ');
define('TEXT_BANNERS_IMAGE', '�����ե�����:');
define('TEXT_BANNERS_IMAGE_LOCAL', ' �ޤ��ϲ��˥����о�β����ե�����̾������');
define('TEXT_BANNERS_IMAGE_TARGET', '��������¸��:');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>�����С���Υ��᡼���ο侩�������:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>���: HTML�Хʡ��ϥ���å��ε�Ͽ������ޤ���</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML �ƥ�����:');
define('TEXT_BANNERS_ALL_SORT_ORDER', '�����Ȥν��� ���ƤΥХʡ��ܥå���');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>���: �Хʡ��ܥå��������ƤΥХʡ���������줿�����ɽ�����ޤ���</strong>');
define('TEXT_BANNERS_EXPIRES_ON', '��λ��:');
define('TEXT_BANNERS_OR_AT', ' �ޤ���');
define('TEXT_BANNERS_IMPRESSIONS', 'ɽ�����');
define('TEXT_BANNERS_SCHEDULED_AT', '������:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>�Хʡ��ˤĤ���:</b><ul><li>�Хʡ��ˤϡ�������HTML�ƥ����ȤΤ����줫����Ѥ��ޤ���ξ���ϻ��ѤǤ��ޤ���</li><li>HTML�ƥ����Ȥ���������ͥ�褵��ޤ���</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>�����ˤĤ���:</b><ul><li>�Хʡ�������¸��ǥ��쥯�ȥ�ˤϡ�Ŭ�ڤʽ񤭹��߸��¤�Ϳ���Ƥ���������</li><li>Web�����Ф˥Хʡ������򥢥åץ��ɤ��ʤ����ϡ�&quot;��������¸��&quot; ������Ϥ��ʤ��Ǥ������� ��(���ξ��ϡ�������¦�β�������Ѥ��뤳�Ȥˤʤ�ޤ�)</li><li>&quot;��������¸��&quot; ����ꤹ����ϡ�¸�ߤ���ǥ��쥯�ȥꡢ�ޤ��ϥǥ��쥯�ȥ����˺������Ƥ���ɬ�פ�����ޤ����ޤ����ǥ��쥯�ȥ�������˥���å���(/)��ɬ�פǤ���(��: banners/)</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>��λ���ˤĤ���:</b><ul><li>��λ����ɽ�������2�Ĥ�������Τ������ҤȤĤ�������Ͽ����ޤ���</li><li>�Хʡ�ɽ����ưŪ�˽�λ�����ʤ����ϡ�������������Τޤޤˤ��Ƥ���������</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>�������ˤĤ���:</b><ul><li>����������Ͽ�����ȡ��Хʡ�����Ͽ���줿���դ���ͭ���ˤʤ�ޤ���</li><li>����������Ͽ���줿�Хʡ��ϡ������������ޤ�ɽ������ޤ���</li></ul>');
define('TEXT_BANNERS_STATUS', '�Хʡ��Υ��ơ�����:');
define('TEXT_BANNERS_ACTIVE', 'ɽ��');
define('TEXT_BANNERS_NOT_ACTIVE', '��ɽ��');
define('TEXT_INFO_BANNER_STATUS', '<strong>���:</strong> �Хʡ��Υ��ơ����������ꤵ�줿������ɽ������ˤ�äƹ�������ޤ�');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', '�Хʡ��ο�����������ɥ�');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>���:</strong>�Хʡ��Ͽ�������ǳ����ޤ�');
define('TEXT_BANNERS_ON_SSL', 'SSL��ΥХʡ�');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>���:</strong>�Хʡ��ϥ��顼�Τʤ�SSL�ڡ�����ɽ������ޤ�');

define('TEXT_BANNERS_DATE_ADDED', '��Ͽ��:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', '������: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', '��λ��: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', '��λ��: <b>%s</b> ����å���');
define('TEXT_BANNERS_STATUS_CHANGE', '���ơ������ѹ�: %s');

define('TEXT_BANNERS_DATA', '��<br/>��<br/>��');
define('TEXT_BANNERS_LAST_3_DAYS', '�Ƕᣳ����');
define('TEXT_BANNERS_BANNER_VIEWS', '�Хʡ�ɽ��');
define('TEXT_BANNERS_BANNER_CLICKS', '�Хʡ� ����å�');

define('TEXT_INFO_DELETE_INTRO', '���ΥХʡ��������˺�����ޤ�����');
define('TEXT_INFO_DELETE_IMAGE', '�Хʡ���������');

define('SUCCESS_BANNER_INSERTED', '����: �Хʡ�����������ޤ�����');
define('SUCCESS_BANNER_UPDATED', '����: �Хʡ�����������ޤ�����');
define('SUCCESS_BANNER_REMOVED', '����: �Хʡ����������ޤ�����');
define('SUCCESS_BANNER_STATUS_UPDATED', '����: �Хʡ��Υ��ơ��������ѹ�����ޤ�����');

define('ERROR_BANNER_TITLE_REQUIRED', '���顼: �Хʡ��Υ����ȥ뤬ɬ�פǤ���');
define('ERROR_BANNER_GROUP_REQUIRED', '���顼: �Хʡ��Υ��롼�פ�ɬ�פǤ���');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '���顼: ��¸��Υǥ��쥯�ȥ꤬¸�ߤ��ޤ���: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '���顼: ��¸��Υǥ��쥯�ȥ�˽񤭹��ߤ��Ǥ��ޤ���: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '���顼: ������¸�ߤ��ޤ���');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '���顼: ����������Ǥ��ޤ���');
define('ERROR_UNKNOWN_STATUS_FLAG', '���顼: �����ʥ��ơ������Ǥ���');
define('ERROR_BANNER_IMAGE_REQUIRED', '���顼: �Хʡ��β�����ɬ�פǤ���');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '���顼: ����եǥ��쥯�ȥ꤬¸�ߤ��ޤ��󡣥���եǥ��쥯�ȥ��������Ƥ�����������: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '���顼: ����եǥ��쥯�ȥ�˽񤭹��ߤ��Ǥ��ޤ��󡣥���եǥ��쥯�ȥ�ΰ���: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', 'SSL��ɽ��');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', '������������ɥ�');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','������������ɥ��򳫤�����ǽ');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','������������ɥ��򳫤����Բ�ǽ');
define('IMAGE_ICON_BANNER_ON_SSL_ON','�����ʥڡ����򳫤�����ǽ');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','�����ʥڡ����򳫤����Բ�ǽ');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', '�������ޤ���: ������������ɥ��򳫤��Хʡ��Υ��ơ������Ϲ�������ޤ���.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', '�������ޤ���: SSL�ڡ�����ǳ����Хʡ��Υ��ơ������Ϲ�������ޤ���');
?>