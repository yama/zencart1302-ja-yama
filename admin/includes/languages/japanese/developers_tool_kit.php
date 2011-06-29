<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: developers_tool_kit.php 1105 2005-04-04 22:05:35Z birdbrain $
//
  define('HEADING_TITLE', '��ȯ���ѥġ���');
  define('TABLE_CONFIGURATION_TABLE', 'CONSTANT����򸡺�');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>����</strong>: °���Υ����Ƚ�򹹿����ޤ���');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>���顼:</strong> ���פ������ꥭ��(Configuration Keys)�����Ĥ���ޤ���...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>���顼:</strong> �����Τ�������ꥭ�����ƥ����Ȥ����Ϥ���Ƥ��ޤ��� ... ��������ߤ��ޤ���');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>�����ʤβ��ʥ����Ȥ򹹿�</strong><br />ɽ�����ʤǤΥ����Ȥ��ǽ�ˤ���ˤ�: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>CONSTANT����������ե�����򸡺�</strong>');
  define('TEXT_CONFIGURATION_KEY', '�����ޤ���̾��:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>���:</strong> CONSTANTS����ʸ���Ǥ���<br />�ɥ�åץ���������򤵤�Ƥ���С��ǡ����١����ơ��֥���˲��⸫�Ĥ���ʤ���硢��󥲡����ե����롢��ǽ(functions)�����饹(classes)����¾�θ������Ԥ��ޤ���');

  define('TABLE_TITLE_KEY', '<strong>����:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>�����ȥ�:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>����:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>���롼��:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>��:</strong>');

  define('TEXT_LOOKUP_NONE', '- ̤���� -');
  define('TEXT_INFO_SEARCHING', '������ ');
  define('TEXT_INFO_FILES_FOR', ' �ե����� ... for: ');
  define('TEXT_INFO_MATCHES_FOUND', '���פ���Ԥ��ҥå�: ');

  define('TEXT_LANGUAGE_LOOKUPS', '��󥲡����ե�����θ���:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '����󥲡����ե����� ' . strtoupper($_SESSION['language']) . ' - ����åץڡ���(Catalog)/�����ԥڡ���(Admin)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '�ᥤ�������󥲡����ե����� - ����åץڡ���(Catalog) (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '���������������󥲡����ե����� - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '�ᥤ�������󥲡����ե����� - �����ԥڡ���(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '���������������󥲡����ե����� - �����ԥڡ���(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '���������������󥲡����ե����� - ����åץڡ���(Catalog)/�����ԥڡ���(Admin)');

  define('TEXT_FUNCTION_CONSTANT', '<strong>��ǽ�ե�����(Function files)��ǵ�ǽ(Functions)��򸡺� </strong>');
  define('TEXT_FUNCTION_LOOKUPS', '��ǽ�ե�����򸡺�:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', '���Ƥε�ǽ�ե����� - ����åץڡ���(Catalog)/�����ԥڡ���(Admin)');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', '���Ƥε�ǽ�ե����� - ����åץڡ���(Catalog)');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', '���Ƥε�ǽ�ե����� - �����ԥڡ���(Admin)');

  define('TEXT_CLASS_CONSTANT', '<strong>���饹�ե�����(Classes files)��ǥ��饹(Classes)��򸡺�</strong>');
  define('TEXT_CLASS_LOOKUPS', '���饹�ե�����򸡺�:');
  define('TEXT_CLASS_LOOKUP_CURRENT', '���ƤΥ��饹�ե����� - ����åץڡ���(Catalog)/�����ԥڡ���(Admin)');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', '���ƤΥ��饹�ե����� - ����åץڡ���(Catalog)');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', '���ƤΥ��饹�ե����� - �����ԥڡ���(Admin)');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>�ƥ�ץ졼��(Template)��򸡺�</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', '�ƥ�ץ졼�ȥե�����򸡺�:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', '���ƤΥƥ�ץ졼�ȥե����� - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', '���ƤΥƥ�ץ졼�ȥե����� - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', '���ƤΥƥ�ץ졼�ȥե����� - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', '���ƤΥƥ�ץ졼�ȥե����� - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>���ե�������򸡺�</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', '���ե�������򸡺�:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', '���ե����� - ����åץڡ���(Catalog)/�����ԥڡ���(Admin)');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', '���ե����� - ����åץڡ���(Catalog)');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', '���ե����� - �����ԥڡ���(Admin)');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','�Խ��Բ�');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' or, HIDDEN');
?>