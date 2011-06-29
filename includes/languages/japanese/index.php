<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('TEXT_MAIN','�ƥ�ץ졼�ȥե����뤬�ʤ���硢���Υإåɥ饤����ʬ���ѹ�����ˤϰʲ��Υե�������Խ����ޤ���<br />
<strong>/includes/languages/japanese/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', '<span class="greetUser">������</span>���󡢤���ä��㤤�ޤ���<a href="%s">������</a>���ޤ���?');
} else {
  define('TEXT_GREETING_GUEST', '�褦������������åפ򤪳ڤ��ߤ���������');
}

define('TEXT_GREETING_PERSONAL', '<span class="greetUser">%s</span>�͡�����ä��㤤�ޤ������ʤ�<a href="%s">�������</a>�����ˤʤ�ޤ���?');

define('TEXT_INFORMATION', '������ʬ���ѹ�����ˤϡ�<br /><strong>/includes/languages/japanese/index.php</strong>��<strong>define(\'TEXT_I
NFORMATION\',</strong>�α�¦��<br />
���󥰥륯�����ơ������(\')�δ֤��Խ����Ƥ���������<br />�ޤ��������Υƥ����ȥܥå����Τߤ���Ѥ�����ϡ�<br /><strong>define(\'TEXT_IN
FORMATION\',\'\')</strong><br />�Τ褦�˥��󥰥륯�����ơ������δ֤ˤϡ����⵭����������¸���뤳�Ȥǡ�������ʬ����ɽ���ˤʤ�ޤ���');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','�������ᾦ��');

//define('TABLE_HEADING_NEW_PRODUCTS', '���徦�� %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', '����ͽ�꾦��');
//define('TABLE_HEADING_DATE_EXPECTED', '��Ͽͽ����');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', '������ǽ����');
  define('TABLE_HEADING_IMAGE', '���ʲ���');
  define('TABLE_HEADING_MODEL', '��ǥ�');
  define('TABLE_HEADING_PRODUCTS', '����̾');
  define('TABLE_HEADING_MANUFACTURER', '�᡼����');
  define('TABLE_HEADING_QUANTITY', '����');
  define('TABLE_HEADING_PRICE', '����');
  define('TABLE_HEADING_WEIGHT', '����');
  define('TABLE_HEADING_BUY_NOW', '�������㤦');
  define('TEXT_NO_PRODUCTS', '���Υ��ƥ���ξ��ʤϤ���ޤ���');
  define('TEXT_NO_PRODUCTS2', '���Υ᡼�����ξ��ʤϤ���ޤ���');
  define('TEXT_NUMBER_OF_PRODUCTS', '�����ֹ�: ');
  define('TEXT_SHOW', 'ʬ��:');
  define('TEXT_BUY', '����㤦 \'');
  define('TEXT_NOW', '\' ������');
  define('TEXT_ALL_CATEGORIES', '�����ƥ���');
  define('TEXT_ALL_MANUFACTURERS', '���᡼����');
} elseif ($category_depth == 'top') {
  // �������򤵤�Ƥ��ʤ��ȥåץ�٥�Υۡ���ڡ����Ǥ�ɽ��
  /*���Υإåɥ饤��ϡ֡���������åפؤ褦�����פʤɹ��ߤΥ��ԡ����ѹ����Ƥ���������*/

  define('HEADING_TITLE', '����ǤȤ��������ޤ�!<br />
����饤�󥷥�å׹��ۥ��ե�Zen Cart ���ܸ��ǤΥ��󥹥ȡ�����������ޤ�����');
} elseif ($category_depth == 'nested') {
  // ���֥��ƥ���Ǥ�ɽ��
  /*���Υإåɥ饤��ϡ֡���������åפؤ褦�����פʤɹ��ߤΥ��ԡ����ѹ����Ƥ���������*/
  define('HEADING_TITLE', '����ǤȤ��������ޤ�!<br />
����饤�󥷥�å׹��ۥ��ե�Zen Cart ���ܸ��ǤΥ��󥹥ȡ�����������ޤ�����'); 
}
?>
