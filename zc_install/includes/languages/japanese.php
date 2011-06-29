<?php
/**
 * Main Japanese language file for installer *
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: japanese.php 3252 2006-03-24 05:55:07Z drbyte $
 */
/**
 * defining language components for the page
 */

  define('NAVI_WELCOME', '�褦����');
  define('NAVI_LICENSE', '�饤���󥹵���');
  define('NAVI_PREREQUISITES', '�����ƥม��');
  define('NAVI_SYSTEM_SETUP', '�����ƥ�����');
  define('NAVI_PHPBB_SETUP', 'phpBB����');
  define('NAVI_DATABASE_SETUP', '�ǡ����١�������');
  define('NAVI_DATABASE_UPGRADE', '�ǡ����١������åץ��졼��');
  define('NAVI_STORE_SETUP', 'Ź������');
  define('NAVI_ADMIN_SETUP', '����������');
  define('NAVI_FINISHED', '��λ');

  define('YES', '�Ϥ�');
  define('NO', '������');

  // Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="ja"');

  // charset for web pages and emails
  define('CHARSET', 'EUC-JP');

  // META TAG TITLE
  define('META_TAG_TITLE', 'Zen Cart���󥹥ȡ���');

  define('INSTALLATION_IN_PROGRESS','���󥹥ȡ���ʹ���...');

  if (isset($_GET['main_page']) && ($_GET['main_page']== 'index' || $_GET['main_page']== 'license')) {
    define('TEXT_ERROR_WARNING', '���: ��³����������դ��Ƥۤ������ब����ޤ���');
  } else {
    define('TEXT_ERROR_WARNING', '<span class="errors"><strong>�ٹ�: ���꤬���Ĥ���ޤ���</strong></span>');
  }

  define('DB_ERROR_NOT_CONNECTED', '���󥹥ȡ��륨�顼: �ǡ����١����ؤ���³�˼��Ԥ��ޤ���');
	define('SHOULD_UPGRADE','���åץ��졼�ɤ��뤳�Ȥ򤪴��ᤷ�ޤ�! ');

  define('UPLOAD_SETTINGS','���åץ��ɤǤ��륵�����ξ�¤ϰʲ��Υǡ����Τʤ��ǺǾ����ͤ����ꤵ��ޤ�:.<br />
php.ini ��<em>upload_max_filesize</em>: %s <br />
php.ini ��<em>post_max_size</em>: %s <br />' . 
//'<em>Zen Cart</em>�Υ��åץ�������: %s <br />' .
'Apache (���ѥå�)������ˤ�äƤϥե�����Υ��åץ��ɤ��Ǥ��ʤ��ä���ե����륵�����ξ�¤����¤��줿�ꤹ�뤳�Ȥ�����ޤ������ܤ���������Apache (���ѥå�)�������򻲾Ȥ��Ƥ���������');

  define('TEXT_HELP_LINK', ' �ܺپ���...');
  define('TEXT_CLOSE_WINDOW', '[������ɥ����Ĥ���]');
  define('STORE_ADDRESS_DEFAULT_VALUE', 'Ź��̾
  ����
  ��̾
  �����ֹ�');

  define('ERROR_TEXT_ADMIN_CONFIGURE', '/admin/includes/configure.php ��¸�ߤ��ޤ���');
  define('ERROR_CODE_ADMIN_CONFIGURE', '2');

  define('ERROR_TEXT_STORE_CONFIGURE', '/includes/configure.php ��¸�ߤ��ޤ���');
  define('ERROR_CODE_STORE_CONFIGURE', '3');

  define('ERROR_TEXT_PHYSICAL_PATH_ISEMPTY', 'ʪ���ѥ������Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_PHYSICAL_PATH_ISEMPTY', '9');

  define('ERROR_TEXT_PHYSICAL_PATH_INCORRECT', 'ʪ���ѥ�����Ŭ�ڤǤ�');
  define('ERROR_CODE_PHYSICAL_PATH_INCORRECT', '10');

  define('ERROR_TEXT_VIRTUAL_HTTP_ISEMPTY', '����HTTP�����Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_VIRTUAL_HTTP_ISEMPTY', '11');

  define('ERROR_TEXT_VIRTUAL_HTTPS_ISEMPTY', '����HTTPS�����Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_VIRTUAL_HTTPS_ISEMPTY', '12');

  define('ERROR_TEXT_VIRTUAL_HTTPS_SERVER_ISEMPTY', '����HTTPS �����Ф����Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_VIRTUAL_HTTPS_SERVER_ISEMPTY', '13');

  define('ERROR_TEXT_DB_USERNAME_ISEMPTY', 'DB�桼��̾�����Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_DB_USERNAME_ISEMPTY', '16'); // ����Ū��Ʊ����å������ʤΤ��̤Τ�Τ������

  define('ERROR_TEXT_DB_HOST_ISEMPTY', 'DB�ۥ��Ȥ����Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_DB_HOST_ISEMPTY', '24');

  define('ERROR_TEXT_DB_NAME_ISEMPTY', 'DB̾�����Ϥ���Ƥ��ޤ���'); 
  define('ERROR_CODE_DB_NAME_ISEMPTY', '25');

  define('ERROR_TEXT_DB_SQL_NOTEXIST', 'SQL���󥹥ȡ���ե����뤬¸�ߤ��ޤ���');
  define('ERROR_CODE_DB_SQL_NOTEXIST', '26');

  define('ERROR_TEXT_DB_NOTSUPPORTED', '�ǡ����١��������ݡ��Ȥ���Ƥ��ޤ���');
  define('ERROR_CODE_DB_NOTSUPPORTED', '27');

  define('ERROR_TEXT_DB_CONNECTION_FAILED', '�ǡ����١����ؤ���³�˼��Ԥ��ޤ���');
  define('ERROR_CODE_DB_CONNECTION_FAILED', '28');

  define('ERROR_TEXT_DB_CREATE_FAILED', '�ǡ����١���������Ǥ��ޤ���Ǥ���');
  define('ERROR_CODE_DB_CREATE_FAILED', '29');

  define('ERROR_TEXT_DB_NOTEXIST', '�ǡ����١�����¸�ߤ��ޤ���');
  define('ERROR_CODE_DB_NOTEXIST', '30');

  define('ERROR_TEXT_STORE_NAME_ISEMPTY', 'Ź��̾�����Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_STORE_NAME_ISEMPTY', '31');

  define('ERROR_TEXT_STORE_OWNER_ISEMPTY', 'Ź�ޥ����ʡ������Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_STORE_OWNER_ISEMPTY', '32');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_ISEMPTY', 'Ź�ޥ����ʡ�Email�����Ϥ���Ƥ��ޤ���');
  define('ERROR_CODE_STORE_OWNER_EMAIL_ISEMPTY', '33');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_NOTEMAIL', 'Ź�ޥ����ʡ�Email��ͭ���ʤ�ΤǤϤ���ޤ���');
  define('ERROR_CODE_STORE_OWNER_EMAIL_NOTEMAIL', '34');

define('ERROR_TEXT_STORE_ADDRESS_ISEMPTY', 'Ź�޽��꤬���Ϥ���Ƥ��ޤ���');
define('ERROR_CODE_STORE_ADDRESS_ISEMPTY', '35');

define('ERROR_TEXT_DEMO_SQL_NOTEXIST', '�ǥ⾦��SQL�ե����뤬¸�ߤ��ޤ���');
define('ERROR_CODE_DEMO_SQL_NOTEXIST', '36');

define('ERROR_TEXT_ADMIN_USERNAME_ISEMPTY', '������ID�����Ϥ���Ƥ��ޤ���');
define('ERROR_CODE_ADMIN_USERNAME_ISEMPTY', '46');

define('ERROR_TEXT_ADMIN_EMAIL_ISEMPTY', '�������Żҥ᡼�뤬���Ϥ���Ƥ��ޤ���');
define('ERROR_CODE_ADMIN_EMAIL_ISEMPTY', '47');

define('ERROR_TEXT_ADMIN_EMAIL_NOTEMAIL', '�������Żҥ᡼���ͭ���ʤ�ΤǤϤ���ޤ���');
define('ERROR_CODE_ADMIN_EMAIL_NOTEMAIL', '48');

define('ERROR_TEXT_ADMIN_PASS_ISEMPTY', '�����ԥѥ���ɤ����Ϥ���Ƥ��ޤ���');
define('ERROR_CODE_ADMIN_PASS_ISEMPTY', '49');

define('ERROR_TEXT_ADMIN_PASS_NOTEQUAL', '�ѥ���ɤ����פ��ޤ���');
define('ERROR_CODE_ADMIN_PASS_NOTEQUAL', '50');

define('ERROR_TEXT_4_1_2', 'PHP�ΥС�������4.1.2�Ǥ�');
define('ERROR_CODE_4_1_2', '1');
define('ERROR_TEXT_PHP_OLD_VERSION', 'PHP�ΥС�����󤬥��ݡ��ȳ��Ǥ�');
define('ERROR_CODE_PHP_OLD_VERSION', '55');
define('ERROR_TEXT_PHP_VERSION', '���ݡ��ȳ���PHP�С������Ǥ�');
define('ERROR_CODE_PHP_VERSION', '91');

define('ERROR_TEXT_ADMIN_CONFIGURE_WRITE', 'admin configure.php ���񤭹��߲�ǽ�ǤϤ���ޤ���');
define('ERROR_CODE_ADMIN_CONFIGURE_WRITE', '56');

define('ERROR_TEXT_STORE_CONFIGURE_WRITE', 'store configure.php ���񤭹��߲�ǽ�ǤϤ���ޤ���');
define('ERROR_CODE_STORE_CONFIGURE_WRITE', '57');

define('ERROR_TEXT_CACHE_DIR_ISEMPTY', 'Session/SQL Cache Directory entry �����Ϥ���Ƥ��ޤ���');
define('ERROR_CODE_CACHE_DIR_ISEMPTY', '61');

define('ERROR_TEXT_CACHE_DIR_ISDIR', 'Session/SQL Cache Directory entry ��¸�ߤ��ޤ���');
define('ERROR_CODE_CACHE_DIR_ISDIR', '62');

define('ERROR_TEXT_CACHE_DIR_ISWRITEABLE', 'Session/SQL Cache Directory entry ���񤭹��߲�ǽ�ǤϤ���ޤ���');
define('ERROR_CODE_CACHE_DIR_ISWRITEABLE', '63');

define('ERROR_TEXT_PHPBB_CONFIG_NOTEXIST', 'phpBB����ե����뤬¸�ߤ��ޤ���');
define('ERROR_CODE_PHPBB_CONFIG_NOTEXIST', '68');

define('ERROR_TEXT_REGISTER_GLOBALS_ON', 'Register Globals��ON�ˤʤäƤ��ޤ�');
define('ERROR_CODE_REGISTER_GLOBALS_ON', '69');

define('ERROR_TEXT_SAFE_MODE_ON', 'Safe Mode��ON�ˤʤäƤ��ޤ�');
define('ERROR_CODE_SAFE_MODE_ON', '70');

define('ERROR_TEXT_CACHE_CUSTOM_NEEDED','����å���ե�����ϥե����륭��å��󥰥��ݡ��Ȥ���Ѥ��뤿���ɬ�פǤ�');
define('ERROR_CODE_CACHE_CUSTOM_NEEDED', '71');

define('ERROR_TEXT_TABLE_RENAME_CONFIGUREPHP_FAILED','�������ץ�ե�������configure.php �ե�����򹹿��Ǥ��ޤ���Ǥ���');
define('ERROR_CODE_TABLE_RENAME_CONFIGUREPHP_FAILED', '72');

define('ERROR_TEXT_TABLE_RENAME_INCOMPLETE','���٤ƤΥơ��֥�Υ�͡��ब�Ǥ��ޤ���Ǥ���');
define('ERROR_CODE_TABLE_RENAME_INCOMPLETE', '73');

define('ERROR_TEXT_SESSION_SAVE_PATH','PHP "session.save_path" ���񤭹����ԲĤˤʤäƤ��ޤ�');
define('ERROR_CODE_SESSION_SAVE_PATH','74');


define('ERROR_TEXT_MAGIC_QUOTES_RUNTIME','PHP "magic_quotes_runtime" ��ON�ˤʤäƤ��ޤ�');
define('ERROR_CODE_MAGIC_QUOTES_RUNTIME','75');

define('ERROR_TEXT_DB_VER_UNKNOWN','�ǡ����١������󥸥�ΥС��������������Ǥ�');
define('ERROR_CODE_DB_VER_UNKNOWN','76');

define('ERROR_TEXT_DB_MYSQL5','MySQL 5��ǤΥƥ��Ȥ��Դ����Ǥ�');
define('ERROR_CODE_DB_MYSQL5','90');

define('ERROR_TEXT_UPLOADS_DISABLED','�ե����륢�åץ��ɤ�OFF�ˤʤäƤ��ޤ�');
define('ERROR_CODE_UPLOADS_DISABLED','77');

define('ERROR_TEXT_ADMIN_PWD_REQUIRED','���åץ��졼�ɤ���ˤϴ������ѤΥѥ���ɤ�ɬ�פǤ�');
define('ERROR_CODE_ADMIN_PWD_REQUIRED','78');

define('ERROR_TEXT_PHP_SESSION_SUPPORT','PHP Session Support��ɬ�פǤ�');
define('ERROR_CODE_PHP_SESSION_SUPPORT','80');

define('ERROR_TEXT_PHP_AS_CGI','Windows�ʳ��Ǥ�PHP��cgi�Ȥ��ƻ��Ѥ��뤳�ȤϤ����ᤷ�ޤ���');
define('ERROR_CODE_PHP_AS_CGI','81');

define('ERROR_TEXT_DISABLE_FUNCTIONS','ɬ�פ�PHP�ε�ǽ�����ʤ��Υ����ФǤ�OFF�ˤʤäƤ��ޤ�');
define('ERROR_CODE_DISABLE_FUNCTIONS','82');

define('ERROR_TEXT_OPENSSL_WARN','OpenSSL�Ϥ��ʤ��Υ����Ȥ�SSL (https://)���󶡤��뤿��˻Ȥ�����ˡ�ΰ�ĤǤ���<br /><br />�����ԲĤ�ɽ�����줿��硢�ͤ�������ͳ�Ȥ��ưʲ��Τ�Τ��ͤ����ޤ�: <br />(a) �����֥ۥ��Ȥ�SSL�򥵥ݡ��Ȥ��Ƥ��ʤ�<br />(b) �����֥����С���OpenSSL�����󥹥ȡ��뤵��Ƥ��ʤ�(¾��SSL�����ӥ������󥹥ȡ��뤵��Ƥ����ǽ��������)<br />(c) �����֥ۥ��Ȥ����ʤ���SSLǧ�ڤˤĤ��ƾܺ٤��Τ�ʤ����ᡢŬ�ڤ�����򤹤뤳�Ȥ��Ǥ��ʤ�<br />(d) PHP��OpenSSL�򥵥ݡ��Ȥ���褦�����ꤵ��Ƥ��ʤ���<br /><br />������θ����ˤ��衢�����֥ڡ����ΰŹ沽(SSL)��ɬ�פʤ顢�����֥ۥ��ƥ��󥰤Υץ�Х��������̤��Ƥ���������');
define('ERROR_CODE_OPENSSL_WARN','79');

define('ERROR_TEXT_DB_PREFIX_NODOTS','�ǡ����١����Υơ��֥�ץ�ե������˰ʲ��ε������Ѥ��뤳�Ȥ��Ǥ��ޤ���: / �ޤ��� \\ �ޤ��� . ');
define('ERROR_CODE_DB_PREFIX_NODOTS','83');

define('ERROR_TEXT_PHP_SESSION_AUTOSTART','PHP Session.autostart ��OFF�ˤ��Ƥ���������');
define('ERROR_CODE_PHP_SESSION_AUTOSTART','84');
define('ERROR_TEXT_PHP_SESSION_TRANS_SID','PHP Session.use_trans_sid ��OFF�ˤ��Ƥ���������');
define('ERROR_CODE_PHP_SESSION_TRANS_SID','86');
define('ERROR_TEXT_DB_PRIVS','�ǡ����١����桼���˻��Ѹ��¤�ɬ�פǤ�');
define('ERROR_CODE_DB_PRIVS','87');
define('ERROR_TEXT_COULD_NOT_WRITE_CONFIGURE_FILES','/includes/configure.php �˽񤭹��ߤ�Ԥ��ݥ��顼�������ޤ���');
define('ERROR_CODE_COULD_NOT_WRITE_CONFIGURE_FILES','88');
define('ERROR_TEXT_GD_SUPPORT','GD���ݡ��Ȥ˴ؤ���ܺ�');
define('ERROR_CODE_GD_SUPPORT','89');

define('ERROR_TEXT_OPEN_BASEDIR','Could have problems uploading files or doing backups');
define('ERROR_CODE_OPEN_BASEDIR','92');
define('ERROR_CODE_CURL_SUPPORT','cURL support not detected');
define('ERROR_TEXT_CURL_SUPPORT','93');

define('ERROR_TEXT_PHYSICAL_HTTPS_PATH_INCORRECT', 'Physical https path is incrrect');
define('ERROR_CODE_PHYSICAL_HTTPS_PATH_INCORRECT', '94');

  $error_code ='';
if (isset($_GET['error_code'])) {
  $error_code = $_GET['error_code'];
  }

switch ($error_code) {
  case ('1'):
    define('POPUP_ERROR_HEADING', 'PHP�С������4.1.2����ǧ����ޤ���');
    define('POPUP_ERROR_TEXT', 'PHP�С������4.1.2�Τ����Ĥ��Υ�꡼���Ǿ�̥����Х�����˴ؤ���Х�����𤵤�Ƥ��ޤ������ΥХ��ˤ�ä�Zen Cart�δ������̤�ɽ������ʤ���ǽ��������ޤ��Τǡ���ǽ�Ǥ����PHP�򥢥åץ��졼�ɤ��Ƥ���������<br /><br />PHP 4.2.0�ʹߤ�Zen Cart��¹Ԥ��뤿��κ���饤��Ǥ���<br />PHP 4.3.11�ʹߤ���Ѥ��뤳�Ȥ򶯤������ᤷ�ޤ���');
    
  break;
  case ('2'):
    define('POPUP_ERROR_HEADING', '/admin/includes/configure.php ��¸�ߤ��ޤ���');
    define('POPUP_ERROR_TEXT', '�ե����� /admin/includes/configure.php ��¸�ߤ��ޤ��󡣶��Υե������������뤫��/admin/includes/dist-configure.php �� configure.php �إ�͡��ह�뤳�ȤǤ��Υե����������Ǥ��ޤ��������塢read-write ��ޡ������뤫��CHMOD 666 �ޤ��� CHMOD 777 �Ȥ���ɬ�פ�����ޤ���');
    
  break;
  case ('3'):
    define('POPUP_ERROR_HEADING', '/includes/configure.php ��¸�ߤ��ޤ���');
    define('POPUP_ERROR_TEXT', '�ե����� /includes/configure.php ��¸�ߤ��ޤ��� ���Υե������������뤫��/includes/dist-configure.php �� configure.php �إ�͡��ह�뤳�ȤǤ��Υե����������Ǥ��ޤ��������塢read-write ��ޡ������뤫��CHMOD 666 �ޤ��� CHMOD 777 �Ȥ���ɬ�פ�����ޤ���');
    
  break;
  case ('4'):
    define('POPUP_ERROR_HEADING', 'ʪ���ѥ�');
    define('POPUP_ERROR_TEXT', 'ʪ���ѥ���Zen Cart�Υե����뷲�����󥹥ȡ��뤵�줿�ǥ��쥯�ȥ�ؤΥѥ��Ǥ�����Ȥ��ơ�����linux�����ƥ�Ǥ�html�ե������ /var/www/html �س�Ǽ����ޤ����⤷Zen Cart�ե����뷲�� \'store\' �Ȥ����ǥ��쥯�ȥ���֤����ʤ顢ʪ���ѥ��� /var/www/html/store �Ȥʤ�Ǥ��礦�������Ƥ��ϥ��󥹥ȡ��餬���Υǥ��쥯�ȥ�����Τ˿�¬���Ƥ���ȿ��ꤷ�Ƥ褤�Ǥ��礦��');
    
  break;
  case ('5'):
    define('POPUP_ERROR_HEADING', '����HTTP�ѥ�');
    define('POPUP_ERROR_TEXT', '�����Zen Cart�����֥����Ȥ�������뤿��˥����֥֥饦�������Ϥ��륢�ɥ쥹�Τ��ȤǤ����⤷�����Ȥ��ɥᥤ��� \'root\' �ˤ���ʤ顢����� \'http://www.yourdomain.com\' �Ȥʤ�Ǥ��礦���⤷ \'store\' �Ȥ����ǥ��쥯�ȥ�β����֤����ΤǤ���С� \'http://www.yourdomain.com/store\' �Ȥʤ�Ǥ��礦��');
    
  break;
  case ('6'):
    define('POPUP_ERROR_HEADING', '����HTTPS������');
    define('POPUP_ERROR_TEXT', '�����secure/SSL�����ФؤΥ����֥����Х��ɥ쥹�Ǥ������Υ��ɥ쥹��SSL/Secure�⡼�ɤ������о�ǤɤΤ褦�˼¹Ԥ���Ƥ��뤫�ˤ�ä��Ѥ��ޤ�����������������ꤹ��Τ�μ¤ˤ��뤿���<a href="http://www.zen-cart.com/modules/xoopsfaq/index.php?cat_id=2#46" target="_blank">FAQ��</a>��SSL�ˤĤ����ɤळ�Ȥ򴫤�ޤ���');
    
  break;
  case ('7'):
    define('POPUP_ERROR_HEADING', '����HTTPS�ѥ�');
    define('POPUP_ERROR_TEXT', '�����Zen Cart�����֥����Ȥ�secure/SSL�⡼�ɤǱ������뤿��˥����֥֥饦�������Ϥ��륢�ɥ쥹�Τ��ȤǤ�����������������ꤹ��Τ�μ¤ˤ��뤿���<a href="http://www.zen-cart.com/modules/xoopsfaq/index.php?cat_id=2#46" target="_blank">FAQ��</a>��SSL�ˤĤ����ɤळ�Ȥ򴫤�ޤ���');
    
  break;
  case ('8'):
    define('POPUP_ERROR_HEADING', 'Enable SSL');
    define('POPUP_ERROR_TEXT', '���������Zen Cart�����֥����Ⱦ�Υ������ƥ��ȼ�ʥڡ����� SSL/Secure (HTTPS:) �⡼�ɤ���Ѥ��뤫�ɤ������ޤ���<br /><br />�Ŀ;������Ϥ���뤢����ڡ������㤨�Х����󡢥����å������ȡ���������Ⱦܺ٤ʤɤ�SSL/Secure�⡼�ɤˤ���ݸ�뤳�Ȥ��Ǥ��ޤ�������ˡ�����ϴ����ԥ��ꥢ��Ŭ�Ѥ��뤳�Ȥ�Ǥ��ޤ���<br /><br />SSL������(HTTP�������HTTPS�λ��Ѥˤ��ɽ�����줿)�˥����������ʤ���Фʤ�ޤ���<br /><br />SSL�����Ф����뤫�ɤ���ʬ����ʤ���С����Ϥ�������� \'No\' �Τޤޤˤ��Ƥ����Ƥ��������������Ƽ�ʬ�Υۥ��ƥ��󥰥ץ�Х����س�ǧ���Ƥ�����������:���٤Ƥ�����ϡ�configure.php�ե�������Խ����뤳�ȤǸ夫���ѹ����뤳�Ȥ��Ǥ��ޤ���');
    
  break;
  case ('9'):
    define('POPUP_ERROR_HEADING', 'ʪ���ѥ������Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', 'ʪ���ѥ������Ϥ���ޤ���Ǥ�����ͭ�����ͤ����Ϥ���ɬ�פ�����ޤ���');
    
  break;
  case ('10'):
    define('POPUP_ERROR_HEADING', 'ʪ���ѥ�������������ޤ���');
    define('POPUP_ERROR_TEXT', '���Ϥ��줿ʪ���ѥ���ͭ���ǤϤ���ޤ��󡣽������ƺ��ٻ�Ƥ���������');
    
  break;
  case ('11'):
    define('POPUP_ERROR_HEADING', '����HTTP�����Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', '����HTTP�ѥ������Ϥ���ޤ���Ǥ�����ͭ�����ͤ����Ϥ���ɬ�פ�����ޤ���');
    
  break;
  case ('12'):
    define('POPUP_ERROR_HEADING', '����HTTPS�����Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', 'SSL�⡼��ͭ�������򤷤���ǲ���HTTPS�ѥ������Ϥ���ޤ���Ǥ�����ͭ�����ͤ����Ϥ��뤫��SSL�⡼�ɤ�̵���ˤ���ɬ�פ�����ޤ���');
    
  break;
  case ('13'):
    define('POPUP_ERROR_HEADING', '����HTTPS�����Ф����Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', 'SSL�⡼��ͭ�������򤷤���ǲ���HTTPS�����Ф����Ϥ���ޤ���Ǥ�����ͭ�����ͤ����Ϥ��뤫��SSL�⡼�ɤ�̵���ˤ���ɬ�פ�����ޤ���');
    
  break;
  case ('14'):
    define('POPUP_ERROR_HEADING', '�ǡ����١���������');
    define('POPUP_ERROR_TEXT', 'Zen Cart��ʣ���Υǡ����١��������פ��б�����褦�߷פ���Ƥ��ޤ�����ǰ�ʤ���ޤ������б�����λ���Ƥ��ޤ��󡣺��λ����ǤϾ��MySQL�Τޤޤˤ��Ƥ����Ʋ�������');
    
  break;
  case ('15'):
    define('POPUP_ERROR_HEADING', '�ǡ����١����ۥ���');
    define('POPUP_ERROR_TEXT', '����Ϥ��ʤ��Υۥ��Ȥ��ǡ����١����ץ�����¹Ԥ��륦���֥����Ф�̾���Ǥ����ۤȤ�ɤξ�硢 \'localhost\' �Τޤޤ�����פǤ�������ʳ��ξ��ϡ������Υǡ����١��������ФΥ�����̾��ۥ��ƥ��󥰥ץ�Х����ؿҤͤ�ɬ�פ�����Ǥ��礦��');
    
  break;
  case ('16'):
    define('POPUP_ERROR_HEADING', '�ǡ����١����桼��̾');
    define('POPUP_ERROR_TEXT', '���٤ƤΥǡ����١����ϥ����������뤿��˥桼��̾����ӥѥ���ɤ�ɬ�פȤ��ޤ����ǡ����١����桼��̾�ϥۥ��ƥ��󥰥ץ�Х����ˤ�äƳ�����Ƥ��Ƥ���Ǥ��礦�����ξܺ٤ˤĤ��Ƥϥۥ��ƥ��󥰥ץ�Х����˳�ǧ���Ƥ���������');
    
  break;
  case ('17'):
    define('POPUP_ERROR_HEADING', '�ǡ����١����ѥ����');
    define('POPUP_ERROR_TEXT', '���٤ƤΥǡ����١����ϥ����������뤿��˥桼��̾����ӥѥ���ɤ�ɬ�פȤ��ޤ����ǡ����١����ѥ���ɤϡ��ۥ��ƥ��󥰥ץ�Х����ˤ�������Ƥ��Ƥ���Ǥ��礦�����ξܺ٤ˤĤ��Ƥϥۥ��ƥ��󥰥ץ�Х����˳�ǧ���Ƥ���������');
    
  break;
  case ('18'):
    define('POPUP_ERROR_HEADING', '�ǡ����١���̾');
    define('POPUP_ERROR_TEXT', '�����Zen Cart�˻��Ѥ���ǡ����١���̾�Ǥ����⤷�������Ϥ��뤫ʬ����ʤ����ˤϡ��ۥ��ƥ��󥰥ץ�Х����˾ܺ٤��ǧ���Ƥ���������');
    
  break;
  case ('19'):
    define('POPUP_ERROR_HEADING', '�ǡ����١����ץ�ե�����');
    define('POPUP_ERROR_TEXT', 'Zen Cart�ϡ����Ѥ����ơ��֥��̾���˥ץ�ե�������ä��뤳�Ȥ��Ǥ��ޤ����ۥ��Ȥ���1�Ĥ����ǡ����١������󶡤���Ƥ��ơ��ǡ����١�������Ѥ���¾�Υ�����ץȤ⥤�󥹥ȡ��뤷�������ˡ�������ä�ͭ�ѤǤ����̾�ϥǥե���Ȥ�����Τޤޤˤ��Ƥ������ۤ��������Ǥ��礦��');
    
  break;
  case ('20'):
    define('POPUP_ERROR_HEADING', '�ǡ����١�������');
    define('POPUP_ERROR_TEXT', '��������ϡ�Zen Cart�ѤΥǡ����١�����������뤳�Ȥ򥤥󥹥ȡ��餬��ߤ뤫�ɤ�������ޤ�����:\'create\'�ν����ϡ�Zen Cart��ɬ�פʥơ��֥���ɲä��뤳�Ȥ������ط�����ޤ��󡣤����ϼ�ưŪ�˹Ԥ���Ǥ��礦��¿���Υۥ��ȤǤ� \'create\' ���¤�Ϳ���Ƥ��ʤ��Ǥ��礦�������Υǡ����١�������������̤���ˡ(�㤨��cPanel��phpMyAdmin)���󶡤��Ƥ���Ǥ��礦��');
    
  break;
  case ('21'):
    define('POPUP_ERROR_HEADING', '�ǡ����١�����³');
    define('POPUP_ERROR_TEXT', '��³Ū��³(Persistent connection)�ϥǡ����١�������٤򸺾�������ˡ�Ǥ������Υ��ץ��������ꤹ�����˥����Хۥ��Ȥ˰ո������٤��Ǥ����⤷���ʤ��Υۥ��Ȥ�\'Persistent connection\'�򰷤ä����Ȥ��ʤ���С��ǡ����١�����������⤿�餹���⤷��ޤ���<br /><br />���Υ��ץ����λ��Ѥ��θ��������ɬ�����ʤ��Υۥ��Ȥ��ä���äƤ���������');
    
  break;
  case ('22'):
    define('POPUP_ERROR_HEADING', '�ǡ����١������å����');
    define('POPUP_ERROR_TEXT', '����ϡ��ե����뤢�뤤�ϥǡ����١����˥��å���������Ǽ���뤫�ɤ�������ޤ����ե�����١����Υ��å���������®���ΤǤ��������������θ����ȡ�SSL��³����Ѥ��뤹�٤ƤΥ���饤�󥹥ȥ��ˤϥǡ����١������å������������ޤ����Ǥ���');
    
  break;
  case ('23'):
    define('POPUP_ERROR_HEADING', 'Enable SSL');
    define('POPUP_ERROR_TEXT', '');
    
  break;
  case ('24'):
    define('POPUP_ERROR_HEADING', '�ǡ����١����ۥ���̾�����Ϥ���Ƥ��ޤ���');
    define('POPUP_ERROR_TEXT', '�ǡ����١����ۥ���̾�����Ϥ���Ƥ��ޤ���ͭ���ʥǡ����١��������Хۥ���̾�����Ϥ��Ƥ���������<br />����Ϥ��ʤ��Υۥ��Ȥ��ǡ����١����ץ�����¹Ԥ��륦���֥����Ф�̾���Ǥ����ۤȤ�ɤξ�硢\'localhost\'�Τޤޤ�����פǤ�������ʳ��ξ��ϡ��ǡ����١��������ФΥ�����̾��ۥ��ƥ��󥰥ץ�Х����˼��䤷�Ƥ���������');
  break;
  
  case ('25'):
    define('POPUP_ERROR_HEADING', '�ǡ����١���̾�����Ϥ���Ƥ��ޤ���');
    define('POPUP_ERROR_TEXT', 'T�ǡ����١���̾�����Ϥ���Ƥ��ޤ���Zen Cart�˻��Ѥ���ǡ����١���̾�����Ϥ��Ƥ���������<br />�����Zen Cart�˻��Ѥ���ǡ����١�����̾���Ǥ����⤷�������Ϥ��뤫�狼��ʤ��ʤ顢�ۥ��ƥ��󥰥ץ�Х����˾ܺ٤��ǧ���Ƥ���������');
    
  break;
  case ('26'):
    define('POPUP_ERROR_HEADING', 'SQL���󥹥ȡ���ե����뤬¸�ߤ��ޤ���');
    define('POPUP_ERROR_TEXT', 'SQL���󥹥ȡ���ե�����򸫤Ĥ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����\'zc_install\' �ǥ��쥯�ȥ�� \'mysql_zencart.sql\' �Ȥ����褦��̾���Υե����뤬���뤳�Ȥ��ǧ���Ƥ���������');
    
  break;
  case ('27'):
    define('POPUP_ERROR_HEADING', '�ǡ����١��������ݡ��Ȥ���Ƥ��ޤ���');
    define('POPUP_ERROR_TEXT', '���򤷤��ǡ����١��������פϥ��󥹥ȡ��뤵��Ƥ���С�������PHP�˥��ݡ��Ȥ���Ƥ��ʤ��褦�Ǥ������򤷤��ǡ����١��������פ����ݡ��Ȥ���Ƥ��뤫�ۥ��ƥ��󥰥ץ�Х����س�ǧ����ɬ�פ�����ޤ����⤷��ʬ���ȤΥ����ФǤ���С����Υǡ����١��������פ�PHP�˥���ѥ��뤷���Ȥ߹���������ǧ���Ƥ����������ޤ��⥸�塼��/dll�ե�����ϥ��ɤ���Ƥ���ɬ�פ�����ޤ���');
    
  break;
  case ('28'):
    define('POPUP_ERROR_HEADING', '�ǡ����١����ؤ���³�˼��Ԥ��ޤ���');
    define('POPUP_ERROR_TEXT', '�ǡ����١�������³�Ǥ��ޤ���Ǥ���������Ϥ����Ĥ�����ͳ�ˤ�굯���ꤨ�ޤ���<br /><br />DB�ۥ���̾���������ʤ������桼��̾�ޤ���<em>�ѥ����</em>���������ʤ����⤷��ޤ���<br /><br />�ޤ��ǡ����١���̾���������ʤ��Τ��⤷��ޤ���(<strong>�ǡ����١�����¸�ߤ��Ƥ��ޤ���? </strong> <strong>���ʤ����Ȥ��������ޤ�����? </strong> -- ���: Zen Cart�ϥǡ����١�����������ޤ���)��<br /><br />���٤Ƥ����Ϲ��ܤ�����������ǧ���Ƥ���������');
    
  break;
  case ('29'):
    define('POPUP_ERROR_HEADING', '�ǡ����١���������Ǥ��ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', '�����ǡ����١��������θ��¤���äƤ��ʤ��褦�Ǥ����ǡ����١��������Τ���ˤϤ����ȤΥۥ��Ȥ�Ϣ�����ɬ�פ�����Ǥ��礦�����뤤��cPanel��phpMyAdmin��ɬ�פ��⤷��ޤ��󡣰��ټ�ư�ǥǡ����١�������������顢Zen Cart���󥹥ȡ���� \'�ǡ����١�������\' ���ץ��������򤷤ʤ��Ǥ���������');
    
  break;
  case ('30'):
    define('POPUP_ERROR_HEADING', '�ǡ����١�����¸�ߤ��ޤ���');
    define('POPUP_ERROR_TEXT', '���ꤵ�줿�ǡ����١���̾�����Ĥ���ޤ���Ǥ�����<br />(<strong>���Υǡ����١�����������ޤ�����? </strong> -- ���: Zen Cart�ϥǡ����١�����������ޤ���)<br /><br />�ǡ����١����ξܺ٤��ǧ�����塢���ꤷ���ǡ����١����˴ؤ���ǡ����������Ƥ���������<br /><br />�����֥ۥ��ƥ��󥰤ε�ǽ��Ȥäƥǡ����١������������ɬ�פ����뤫�⤷��ޤ��󡣥ǡ����١��������������ϡ��桼��̾�ȥѥ���ɤ����ƥǡ����١���̾���⤷�Ƥ����ȡ����󥹥ȡ��뤹��ݤ������Ǥ���');
    
  break;
  case ('31'):
    define('POPUP_ERROR_HEADING', 'Ź��̾�����Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', 'Ź��̾����ꤷ�Ƥ���������');
    
  break;
  case ('32'):
    define('POPUP_ERROR_HEADING', 'Ź�ޥ����ʡ������Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', 'Ź�ޥ����ʡ���̾�������Ϥ��Ƥ������������ξ���� \'Contact Us\' �ڡ�����\'Welcome\' �᡼�롢�����Ź�ο����ʲս��ɽ������ޤ���');
    
  break;
  case ('33'):
    define('POPUP_ERROR_HEADING', 'Ź���Żҥ᡼�뤬���Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', 'Ź�ޤ��Żҥ᡼�륢�ɥ쥹�����Ϥ��Ƥ��������������Ź����ȯ��������Żҥ᡼�����Ϣ����˻��Ѥ���륢�ɥ쥹�Ǥ������ʤ�����ư��ɽ������褦�˥������ޥ������ʤ��¤ꡢ���ξ���ϤɤΥڡ����ˤ�ɽ������뤳�ȤϤ���ޤ���');
    
  break;
  case ('34'):
    define('POPUP_ERROR_HEADING', 'Ź���Żҥ᡼�륢�ɥ쥹��ͭ���ǤϤ���ޤ���');
    define('POPUP_ERROR_TEXT', 'ͭ�����Żҥ᡼�륢�ɥ쥹�����Ϥ��Ƥ���������');
    
  break;
  case ('35'):
    define('POPUP_ERROR_HEADING', 'Ź�޽��꤬���Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', 'Ź�ޤν�������Ϥ��Ƥ�������������Ϥ��䤤��碌�ڡ�����(ɬ�פ˱�������ɽ���ˤ��뤳�Ȥ�Ǥ��ޤ�)��Ǽ�ʽ�/��������ɼ��ɽ������ޤ����ޤ��������å������ȤǸܵҤ������å���ޥ͡����������Ǥι��������򤷤��ݤˤ⤳�ξ���ɽ�������Ǥ��礦��');
    
  break;
  case ('36'):
    define('POPUP_ERROR_HEADING', '�ǥ⾦��SQL�ե����뤬¸�ߤ��ޤ���');
    define('POPUP_ERROR_TEXT', 'Zen Cart�ǥ⾦�ʤ򤢤ʤ���Ź�ޤإ��ɤ��뤿���SQL�ե����뤬���Ĥ���ޤ���Ǥ�����/zc_install/demo/xxxxxxx_demo.sql �ե����뤬¸�ߤ��뤫�����å����Ƥ���������(xxxxxxx = ���ʤ��Υǡ����١���������)');
    
  break;
  case ('37'):
    define('POPUP_ERROR_HEADING', 'Ź��̾');
    define('POPUP_ERROR_TEXT', '���ʤ���Ź�ޤ�̾�ΤǤ�������Ϥ��Υ����ƥ�ˤ�ä��������Żҥ᡼�롢���ˤ�äƥ֥饦���Υ����ȥ����ǻ��Ѥ���ޤ���');
    
  break;
  case ('38'):
    define('POPUP_ERROR_HEADING', 'Ź�ޥ����ʡ�');
    define('POPUP_ERROR_TEXT', 'Ź�ޥ����ʡ��Ϥ��Υ����ƥ�ˤ�ä��������Żҥ᡼�����ǻ��Ѥ���ޤ���');
    
  break;
  case ('39'):
    define('POPUP_ERROR_HEADING', 'Ź�ޥ����ʡ����Żҥ᡼��');
    define('POPUP_ERROR_TEXT', '���ʤ���Ź�ޤ�Ϣ�������뤳�Ȥ��Ǥ�����פ��Żҥ᡼�륢�ɥ쥹�Ǥ��������ƥ�ˤ�ä�����줿�ۤȤ�ɤ��Żҥ᡼��䡢���䤤��碌�ڡ����˻��Ѥ���ޤ���');
    
  break;
  case ('40'):
    define('POPUP_ERROR_HEADING', '��');
    define('POPUP_ERROR_TEXT', '���ʤ���Ź�ޤ��������֤���Ǥ����Ǥ����ȯ���Υ��ץ����������Ư������ˡ���������Τ����ꤹ�뤳�Ȥ����פǤ�������ˤ����Ǽ�ʽ�ˤ����밸̾�Υ쥤�����Ȥʤɤ���ꤷ�ޤ���');
    
  break;
  case ('41'):
    define('POPUP_ERROR_HEADING', '������');
    define('POPUP_ERROR_TEXT', '���ʤ���Ź�ޤ��������֤��������Ū�ʶ�ʬ�Ǥ����㤨�Х���ꥫ�罰��ν������ܤ���ƻ�ܸ��Ǥ���');
    
  break;
  case ('42'):
    define('POPUP_ERROR_HEADING', 'Ź�޽���');
    define('POPUP_ERROR_TEXT', 'Ź�ޤν���Ǥ���Ǽ�ʽ����ʸ��ǧ�˻��Ѥ���ޤ���');
    
  break;
  case ('43'):
    define('POPUP_ERROR_HEADING', '�ǥե���Ȥθ���');
    define('POPUP_ERROR_TEXT', '���ʤ���Ź�ޤǻȤ��ǥե���Ȥθ���Ǥ����⤷���Τʸ���ѥå������ɤ����С�Zen Cart�Ϥ��Τޤ�¿����򥵥ݡ��Ȥ��ޤ���Zen Cart�ϱѸ�ѥå����ǥե���ȤˤʤäƤ��ޤ�������¾�θ���˴ؤ��Ƥϡ�Zen Cart���ߥ�˥ƥ��ˤ�ä��������줿����ѥå��� www.zen-cart.com �Υ�������ɥ����ʡ����Ѱդ���Ƥ��ޤ���');
    
  break;
  case ('44'):
    define('POPUP_ERROR_HEADING', '�ǥե���Ȥ��̲�');
    define('POPUP_ERROR_TEXT', '���ʤ���Ź�ޤǰ����ǥե���Ȥ��̲ߤ����򤷤Ƥ����������⤷��˾�����Τ��ꥹ�Ȥˤʤ���С����󥹥ȡ��봰λ��˴����ԥ��ꥢ�Ǵ�ñ���ѹ��Ǥ��ޤ���');
    
  break;
  case ('45'):
    define('POPUP_ERROR_HEADING', '�ǥ⾦�ʥ��󥹥ȡ���');
    define('POPUP_ERROR_TEXT', 'Zen Cart���͡�����ħ���Ƥߤ뤿��ˡ��ǥ⾦�ʤ�ǡ����١����˥��󥹥ȡ��뤹�뤫�ɤ������򤷤Ƥ���������');
    
  break;
  case ('46'):
    define('POPUP_ERROR_HEADING', '������ID�����Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', '���󥹥ȡ��봰λ��˴����ԥ��ꥢ�إ����󤹤뤿��δ�����ID����ꤹ��ɬ�פ�����ޤ���');
    
  break;
  case ('47'):
    define('POPUP_ERROR_HEADING', '�������Żҥ᡼�뤬���Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', '�������Żҥ᡼�륢�ɥ쥹�ϡ����ʤ����ѥ���ɤ�˺��ѥ���ɺ����򤹤�ݤ˻��Ѥ���ޤ���');
    
  break;
  case ('48'):
    define('POPUP_ERROR_HEADING', '�������Żҥ᡼���ͭ���ʤ�ΤǤϤ���ޤ���');
    define('POPUP_ERROR_TEXT', 'ͭ�����Żҥ᡼�륢�ɥ쥹�����Ϥ��Ƥ�������');
    
  break;
  case ('49'):
    define('POPUP_ERROR_HEADING', '�����ԥѥ���ɤ����Ϥ���ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', '�������ƥ��Τ���ˡ��ѥ���ɤ϶���ˤϤǤ��ޤ���');
    
  break;
  case ('50'):
    define('POPUP_ERROR_HEADING', '�ѥ���ɤ����פ��ޤ���');
    define('POPUP_ERROR_TEXT', '�����ԥѥ���ɤ���ӳ�ǧ������Ϥ��Ƥ���������');
    
  break;
  case ('51'):
    define('POPUP_ERROR_HEADING', '������ID');
    define('POPUP_ERROR_TEXT', '���󥹥ȡ��봰λ��˴����ԥ��ꥢ�إ����󤹤뤿��δ�����ID�򤳤��ǻ��ꤹ��ɬ�פ�����ޤ���');
    
  break;
  case ('52'):
    define('POPUP_ERROR_HEADING', '�������Żҥ᡼�륢�ɥ쥹');
    define('POPUP_ERROR_TEXT', '�������Żҥ᡼�륢�ɥ쥹�ϡ����ʤ����ѥ���ɤ�˺��ѥ���ɺ����򤹤�ݤ˻��Ѥ���ޤ���');
    
  break;
  case ('53'):
    define('POPUP_ERROR_HEADING', '�����ԥѥ����');
    define('POPUP_ERROR_TEXT', '�����ԥѥ���ɤϤ��ʤ��˴����ԥ��ꥢ�ؤΥ���������Ϳ���뤢�ʤ��ΰ����ʥѥ���ɤǤ���');
    
  break;
  case ('54'):
    define('POPUP_ERROR_HEADING', '�����ԥѥ����(��ǧ)');
    define('POPUP_ERROR_TEXT', '���������פ���ѥ���ɤ����Ϥ���ɬ�פ�����ޤ���');
    
  break;
  case ('55'):
    define('POPUP_ERROR_HEADING', 'PHP�ΥС�����󤬥��ݡ��ȳ�');
    define('POPUP_ERROR_TEXT', '���ʤ��Υ����֥����о��ư���Ƥ���С�������PHP��Zen Cart�Υ��ݡ��ȳ��Ǥ���<br /><br />PHP 4.2.0��ư��Ķ��κ�����Ǥ���<br />����������ǽ�ʤ��PHP 4.3.11�ʾ�˥��åץ��졼�ɤ��뤳�Ȥ򤪴��ᤷ�ޤ���<br /><br />���ߤΤȤ���PHP 5.0�ǤΥƥ��Ȥ��Դ����Ǥ��Τǡ�������Ǥ��ޤ��󡣤�����5.x�򤪻Ȥ��ˤʤ���ˤϡ�5.0.4�ʾ�򤪻Ȥ�����������<br /><br />PHP�С������4.1.2�Τ����Ĥ��Υ�꡼���Ͼ�̥����Х�����˱ƶ���ڤܤ��Х���ޤ�Ǥ��ޤ������ΥХ��ˤ��Zen Cart�δ����ԥڡ����˥��������Ǥ��ʤ��ʤ��ǽ��������ޤ����Ǥ���¤�PHP�ΥС������򥢥åץ��졼�ɤ��뤳�Ȥ򤪴��ᤷ�ޤ���');
    
  break;
  case ('56'):
    define('POPUP_ERROR_HEADING', 'admin configure.php ���񤭹����Բ�');
    define('POPUP_ERROR_TEXT', '�ե����� admin/includes/configure.php ���񤭹��߲�ǽ�ˤʤäƤ��ޤ���Unix��Linux�����ƥ����Ѥ���Ƥ���ΤǤ���С�Zen Cart�Υ��󥹥ȡ��뤬��λ����ޤ�CHMOD�ǥե�����θ��¤�777�ޤ���666���ѹ����Ƥ��������������Ƥ���FTP�ץ����Ǥ����ѹ���Ԥ����Ȥ��Ǥ��ޤ�(������å���ե������°�����Խ�����ʤ�)��<br /><br />Windows�ǥ����ȥåץ����ƥ�ʤ�С�ñ��read/write�����ꤷ�Ƥ���������<br /><br />Windows�����С����ä�IIS��Ǥϡ����Υե�����򱦥���å����ơ��������ƥ��������򤷡��֥��󥿡��ͥåȥ����ȥ�������ȡפ��뤤��IUSR_xxxxxxx�桼�����ɤ߽񤭤Ǥ���褦�����ꤷ�Ƥ���������<br /><br />���󥹥ȡ��뤬��λ�����顢���Υե�������ɤ����Ѥ��ᤷ�Ƥ�������(CHMOD 644���뤤��444��Windows�ʤ��write�פ���ä�������read-only�פ�����å����Ƥ���������)��');
    
  break;
  case ('57'):
    define('POPUP_ERROR_HEADING', 'Store configure.php ���񤭹����Բ�');
    define('POPUP_ERROR_TEXT', '�ե����� includes/configure.php ���񤭹��߲�ǽ�ˤʤäƤ��ޤ���Unix��Linux�����ƥ����Ѥ���Ƥ���ΤǤ���С�Zen Cart�Υ��󥹥ȡ��뤬��λ����ޤ�CHMOD�ǥե�����θ��¤�777�ޤ���666���ѹ����Ƥ��������������Ƥ���FTP�ץ����Ǥ����ѹ���Ԥ����Ȥ��Ǥ��ޤ�(������å���ե������°�����Խ�����ʤ�)��<br /><br />Windows�ǥ����ȥåץ����ƥ�ʤ�С�ñ��read/write�����ꤷ�Ƥ���������<br /><br />Windows�����С����ä�IIS��Ǥϡ����Υե�����򱦥���å����ơ��������ƥ��������򤷡��֥��󥿡��ͥåȥ����ȥ�������ȡפ��뤤��IUSR_xxxxxxx�桼�����ɤ߽񤭤Ǥ���褦�����ꤷ�Ƥ���������<br /><br />���󥹥ȡ��뤬��λ�����顢���Υե�������ɤ����Ѥ��ᤷ�Ƥ�������(CHMOD 644���뤤��444��Windows�ʤ��write�פ���ä�������read-only�פ�����å����Ƥ���������)��');
    
  break;
  case ('58'):
    define('POPUP_ERROR_HEADING', '�ǡ����١����ơ��֥�ץ�ե�����');
    define('POPUP_ERROR_TEXT', 'Zen Cart�ϡ����Ѥ����ơ��֥��̾���˥ץ�ե�������ä��뤳�Ȥ��Ǥ��ޤ����ǡ����١�������Ĥ����Ȥ��ʤ����ˡ��ǡ����١�������Ѥ���ۤ��Υץ����⥤�󥹥ȡ��뤷�����ʤ顢�ץ�ե������ǥơ��֥����̤��뤳�Ȥ��Ǥ��ޤ����̾�ϥǥե���Ȥ�����ΤޤޤǷ빽�Ǥ���');
    
  break;
  case ('59'):
    define('POPUP_ERROR_HEADING', 'SQL����å���ǥ��쥯�ȥ�');
    define('POPUP_ERROR_TEXT', 'SQL������ϡ��ǡ����١�������ˡ����뤤�ϥ����ФΥϡ��ɥǥ�������Υե�����˥���å��夹�뤳�Ȥ��Ǥ��ޤ��� �����ФΥϡ��ɥǥ�������Υե�����ؤ�SQL����å�������򤷤��ʤ�С�����å���ǡ�������¸���뤿��Υǥ��쥯�ȥ����ꤷ�Ƥ���������<br /><br />Tɸ��Ū��Zen Cart�Υ��󥹥ȡ���ˤ� \'cache\' �ե�������ޤޤ�Ƥ��ޤ��������֥����С��㤨��apache�ˤ����Υǥ��쥯�ȥ�˥��������Ǥ���褦�ˡ����Υե�������ɤ߽񤭲�ǽ�ˤ���ɬ�פ�����ޤ���<br /><br />���ꤵ�줿�ǥ��쥯�ȥ꤬���뤳�Ȥ��ǧ���������֥����Фˤ�äƽ񤭹��߲�ǽ�Ǥ��뤫(CHMOD 777�ޤ��Ͼ��ʤ��Ȥ�666��侩)��Τ���Ƥ���������');
    
  break;
  case ('60'):
    define('POPUP_ERROR_HEADING', 'SQL����å�����ˡ');
    define('POPUP_ERROR_TEXT', 'SQL������ˤ�äƤϥ���å��夹�뤳�Ȥ��Ǥ��ޤ�������å��夵�줿���ˤϡ����®����������ޤ��������Ǥ�SQL������򥭥�å��夹�뤿��ˡ��ɤ���ˡ����Ѥ��뤫���ꤳ�Ȥ��Ǥ��ޤ���<br /><br /><strong>�ʤ�</strong>. SQL���������������å��夵��ޤ��󡣤⤷���ʤ䥫�ƥ��꤬�ȤƤ⾯�ʤ��ʤ顢���줬��Ŭ�Ǥ���<br /><br /><strong>�ǡ����١���</strong>. SQL�����꤬�ǡ����١����ơ��֥�˥���å��夵��ޤ�������ϡ��浬�Ϥξ���/���ƥ�����Υ����Ȥ�®�٥��åפ�⤿�餹�Ǥ��礦��<br /><br /><strong>�ե�����</strong>. SQL�����꤬���ʤ��Υ����ФΥϡ��ɥǥ������˥���å��夵��ޤ��������ǽ�����뤿��ˤϡ������֥����Ф��񤭹��߲�ǽ�ʥ�����򥭥�å��夹��ǥ��쥯�ȥ���ǧ����ɬ�פ�����ޤ���������ˡ���絬�Ϥʾ���/���ƥ�����Υ����Ȥ�Ŭ���Ƥ���Ǥ��礦��');
    
  break;
  case ('61'):
    define('POPUP_ERROR_HEADING', '���å����/SQL ����å���ǥ��쥯�ȥ꤬̤����');
    define('POPUP_ERROR_TEXT', '���å����/SQL������Υ���å��󥰤˥ե��������Ѥ����硢���ʤ��Υ����֥����о��ͭ���ʥǥ��쥯�ȥ����ꤹ��ɬ�פ�����ޤ����ޤ������֥����Ф����Υǥ��쥯�ȥ�ؤν񤭹��߸��¤���äƤ��뤳�Ȥ��ǧ���Ƥ���������');
    
  break;
  case ('62'):
    define('POPUP_ERROR_HEADING', '���å����/SQL ����å���ǥ��쥯�ȥ꤬���Ĥ���ʤ�');
    define('POPUP_ERROR_TEXT', '���å����/SQL������Υ���å��󥰤˥ե��������Ѥ����硢���ʤ��Υ����֥����о��ͭ���ʥǥ��쥯�ȥ꤬¸�ߤ���ɬ�פ�����ޤ����ޤ������֥����Ф����Υǥ��쥯�ȥ�ؤν񤭹��߸��¤���äƤ��뤳�Ȥ��ǧ���Ƥ���������');
    
  break;
  case ('63'):
    define('POPUP_ERROR_HEADING', '���å����/SQL ����å���ǥ��쥯�ȥ꤬�񤭹����Բ�');
    define('POPUP_ERROR_TEXT', '���å����/SQL������Υ���å��󥰤˥ե��������Ѥ����硢���ʤ��Υ����֥����о��ͭ���ʥǥ��쥯�ȥ����ꤹ��ɬ�פ�����ޤ����ޤ������֥����Ф����Υǥ��쥯�ȥ�ؤν񤭹��߸��¤���äƤ��뤳�Ȥ��ǧ���Ƥ���������Linux/Unix�ˤ����Ƥ�CHMOD 666�ޤ���777��Windows�����Фˤ����Ƥ�Read/Write��Ŭ�Ѥ��Ƥ�������(IIS��Ǥϡ����󥿡��ͥåȥ����ȥ�������Ȥ�Ŭ�Ѥ���ɬ�פ�����ޤ�)��');
    
  break;
  case ('64'):
    define('POPUP_ERROR_HEADING', '���ʤ��Υ����Ȥ�phpBB�ե������ȥ�󥯤����ޤ���? ');
    define('POPUP_ERROR_TEXT', '���ʤ���Zen Cart���ȥ��򡢴������֤��Ƥ���phpBB�ե������ȥ�󥯤���ˤϡ��Ϥ������򤷤Ƥ���������');
    
  break;
  case ('65'):
    define('POPUP_ERROR_HEADING', 'phpBB�ǡ����١����ץ�ե�����');
    define('POPUP_ERROR_TEXT', 'phpBB�ơ��֥��ѤΥץ�ե���������ꤷ�Ƥ����������̾�� \'phpBB_\' �Ǥ���');
    
  break;
  case ('66'):
    define('POPUP_ERROR_HEADING', 'phpBB�ǡ����١���̾ ');
    define('POPUP_ERROR_TEXT', '���ʤ���phpBB�ơ��֥뤬����ǡ����١���̾����ꤷ�Ƥ���������');
  break;
  case ('67'):
    define('POPUP_ERROR_HEADING', 'phpBB�ǥ��쥯�ȥ�');
    define('POPUP_ERROR_TEXT', '���ʤ���phpBB������ץȥե����뤬���󥹥ȡ��뤵��Ƥ���ǥ��쥯�ȥ�ؤδ����ʥѥ�����ꤷ�Ƥ����������������뤳�Ȥǡ����ʤ���Zen CartŹ�ޤ�phpBB��󥯤򥯥�å������ݤˡ��������ڡ�����ɽ�������褦�ˤʤ�ޤ���<br /><br />���������Ϥ���ѥ��ϡ������Ф�"root"��������Хѥ��Ǥ����⤷phpBB��<strong>/home/users/username/public_html/phpbb </strong>�����֤��Ƥ���ʤ顢<strong>/home/users/username/public_html/phpbb/ </strong>�����Ϥ��Ƥ����������⤷���֥ե�����ˤ���ʤ顢���Υѥ�����ꤷ�Ƥ���������<br /><br />���Υե�����ˤ����<em>config.php</em>�פ����ꤵ��ޤ���');
  break;
  case ('68'):
    define('POPUP_ERROR_HEADING', 'phpBB�ǥ��쥯�ȥ�');
    define('POPUP_ERROR_TEXT', '���ʤ��λ��ꤷ���ǥ��쥯�ȥ��phpBB configure�ե����뤬����ޤ���Ǥ��������μ�ư�������Ѥ���ˤϡ�phpBB�����˥��󥹥ȡ��뤵��Ƥ���ɬ�פ�����ޤ������󥹥ȡ��뤵��Ƥ��ʤ��ʤ顢phpBB�μ�ư�������ꤻ����Zen Cart��phpBB�Υ��󥹥ȡ����˼�ư�����ꤹ��ɬ�פ�����ޤ���<br /><br />���������Ϥ��줿�ѥ��ϡ������Ф�"root"��������Хѥ��Ǥ������ʤ���phpBB�� <strong>/home/users/username/public_html/phpbb </strong>�����֤��Ƥ���ʤ顢<strong>/home/users/username/public_html/phpbb/ </strong>�����Ϥ���ɬ�פ�����ޤ����⤷���֥ե�����ˤ���ʤ顢���Υѥ�����ꤷ�Ƥ���������<br /><br />���Υե�����ˤ����<em>config.php</em>�פ����ꤵ��ޤ���');
  break;
  case ('69'):
    define('POPUP_ERROR_HEADING', 'Register Globals');
    define('POPUP_ERROR_TEXT', 'register_globals�ϥ������ƥ�����������������������ǽ�������뤿�ᡢZen Cart�ϡ�register_globals�������Off�ˤ��ʤ����ư��ޤ���(v1.3.0.2-l10n-jp-3���)��<br/>Zen Cart�Υ��󥹥ȡ���ǥ��쥯�ȥ��.htaccess�ե����뤬���������åץ��ɤ���Ƥ���Τˤ��Υ�å�������ɽ������Ƥ����硢��������Υ����С��Ǥ�.htaccess��register_globals��������ѹ��Ǥ��ʤ����Ȥ��̣���Ƥ��ޤ���<br/>����������褹�뤿��ˤϡ����Τ���2�ĤΤɤ��餫���б���ɬ�פǤ���<br/><br/><br/>1. �����С���������ѹ�����<br/>2. register_globals��Off�Ǳ��Ѳ�ǽ�ʥ����С��˺ƥ��󥹥ȡ��뤹��');
  break;
  case ('70'):
    define('POPUP_ERROR_HEADING', 'Safe Mode is On');
    define('POPUP_ERROR_TEXT', '���Ūe-Commerce���ץꥱ�������Ǥ���Zen Cart�ϡ�Safe Mode�ǲ�Ư���Ƥ��륵���ФǤϤ��ޤ���ǽ���ޤ���<br /><br />e-Commerce�����ƥ��¹Ԥ��뤳�Ȥϡ�¿�������Ū�ʥ����ӥ���ɬ�פȤ��������ʡֶ�ͭ�ץۥ��ƥ��󥰥����ӥ��Ǥ�ư����¤���뤳�Ȥ��褯����ޤ��������֥��ڡ������Safe Mode�פ����ꤷ�Ƥ��ޤ��ȡ�����饤�󥹥ȥ������˱��Ĥ��뤳�Ȥ��Ǥ��ʤ��ʤ�ޤ���php.ini�ե������ǡ�SAFE_MODE=OFF�פ����ꤷ�Ƥ��������������ѹ��ˤϥۥ��ƥ��󥰲�Ҥμ������ɬ�פˤʤ��礬����ޤ���');
  break;
  case ('71'):
    define('POPUP_ERROR_HEADING', '�ե�����١�������å��󥰥��ݡ��ȤΤ���˥���å���ե������ɬ�פǤ�');
    define('POPUP_ERROR_TEXT', 'Zen Cart�Υե�����١���SQL����å��奵�ݡ��Ȥ���Ѥ���ʤ顢���ʤ��Υ����֥��ڡ����Υ���å���ե�����θ��¤�Ŭ�ڤ����ꤹ��ɬ�פ�����ޤ���<br /><br />����å���ե��������Ѥ������ʤ���С��֥ǡ����١�������å��󥰡פޤ��ϡ֥���å����Ի��ѡפ����򤹤뤳�Ȥ�Ǥ��ޤ������ξ�硢���å����ȥ�å�����Ʊ�ͤ˥ե����륭��å������Ѥ���Τǡ֥��å�������¸����פ���Ѥ��ʤ������������⤷��ޤ���<br /><br />����å���ե������Ŭ�ڤ˥��åȥ��åפ��뤿��ˡ����ʤ���FTP�ץ����ޤ��ϥ����롦������������Ѥ����ե�����Υѡ��ߥå�����CHMOD 666�ޤ���777�ˤ��Ƥ���������<br /><br />���Τˡ����ʤ��Υ����֥����ФΥ桼��ID���㤨�С�\'apache\' �� \'www-user\' �ޤ���Windows�Ǥ� \'IUSR_xxxxxxxxx\'�ˤϡ�����å���ե�������Ф��� \'read-write-delete\' �Τ��٤Ƥθ��¤��äƤ��ʤ���Фʤ�ޤ���');
  break;
  case ('72'):
    define('POPUP_ERROR_HEADING', 'ERROR: ���٤Ƥ�configure.php�ե�����򿷤����ץ�ե������ǹ����Ǥ��ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', '�ơ��֥�̾���ѹ������塢configure.php�ե�����ι�����˥��顼��ȯ�����ޤ�����/includes/configure.php �� /admin/includes/configure.php �ե�������ư���Խ�������DB_PREFIX�פ�Zen Cart�ơ��֥�����������ꤹ��褦�˽�ľ���Ƥ���������');
  break;
  case ('73'):
    define('POPUP_ERROR_HEADING', 'ERROR: ���٤ƤΥơ��֥�˿������ơ��֥�ץ�ե�������Ŭ�ѤǤ��ޤ���Ǥ���');
    define('POPUP_ERROR_TEXT', '���ʤ��Υǡ����١����ơ��֥�򿷤����ơ��֥�ץ�ե��������ղä��Ʋ�̾���ߤƤ���֤ˡ����顼��ȯ�����ޤ��������ʤ��Υǡ����١����ơ��֥�̾����Ȥ�Ĵ������ɬ�פ�����Ǥ��礦���ǰ��ξ�硢���ʤ��ΥХå����åפ������줹��ɬ�פ����뤫�⤷��ޤ���');
  break;
  case ('74'):
    define('POPUP_ERROR_HEADING', '���: PHP�Ρ�session.save_path�פ�����߶ػ�');
    define('POPUP_ERROR_TEXT', '<strong>�����ñ�ʤ���ս񤭤Ǥ���</strong>PHP��session.save_path����ǻ��ꤵ�줿�ѥ��ؤν񤭹��߸��¤�����ޤ���<br /><br />����ϤĤޤꤳ�Υѥ���������Ū�ʥե��������¸���Ȥ��ƻȤ����Ȥ��Ǥ��ʤ����Ȥ��̣���ޤ�������ˡ�����ɽ�����줿�ֿ侩���륭��å���Υѥ��פ�ȤäƤ���������<br /><br /><br />���뤤�ϡ��⤷���Υѥ�����ǧ�ԲĤȤʤä����ˤϡ������Ф�php.ini�ե�����Ǥ�����ǵ��Ĥ���Ƥʤ���ǽ��������ޤ������������м��ˤʤ�ɬ�פϤ���ޤ��󡣤����ñ�ʤ���ս񤭤��ȹͤ��Ƥ����������ɤ����Ƥⵤ�ˤʤ�ʤ顢�����֥ۥ���¦�����̤��Ƥ���������');
  break;
  case ('75'):
    define('POPUP_ERROR_HEADING', '���: PHP�Ρ�magic_quotes_runtime�פ�ON�ˤʤäƤ���');
    define('POPUP_ERROR_TEXT', '��magic_quotes_runtime�פ�OFF�ˤʤäƤ��뤳�Ȥ����ޤ����Ǥ���ON�ˤʤäƤ���ȡ�ͽ�����ʤ�1064 SQL���顼��ȯ�������ꡢ�����ɤμ¹Ԥ˻پ�򤭤������Ȥ�����ޤ���<br /><br />�⤷���������Τǡ�magic_quotes_runtime�פ�OFF�ˤǤ��ʤ��ʤ顢.htaccess�ե����뤫php.ini��OFF�ˤ��Ƥ�������������λ������狼��ʤ����ˤϡ������֥ۥ���¦�����̤��Ƥ���������');
  break;
  case ('76'):
    define('POPUP_ERROR_HEADING', '�ǡ����١������󥸥�ΥС����������');
    define('POPUP_ERROR_TEXT', '���ꤵ�줿�ǡ����١������󥸥�ΥС�����������Ǥ���<br /><br />�����ɬ��������������֤ǤϤ���ޤ���ס��ºݤΤȤ������ʳ��ǤϥС�����󤬳�ǧ�Ǥ��ʤ����Ȥ����Ф��Фߤ��ޤ���<br /><br />���Υǡ����������ȤʤäƤ����Ȥ��Ƥ⡢���󥹥ȡ�����³�����̾�����ꤢ��ޤ���');

  break;
  case ('77'):
    define('POPUP_ERROR_HEADING', '�ե����륢�åץ��ɤ�OFF');
    define('POPUP_ERROR_TEXT', '�ե����륢�åץ��ɤ����Ĥ���Ƥ��ޤ��󡣥��åץ��ɤ���Ĥ���ˤϡ�php.ini�ե������<em><strong>file_uploads = on</strong></em>�Ȼ��ꤷ�Ƥ���������');
  break;
  case ('78'):
    define('POPUP_ERROR_HEADING', '���åץ��졼�ɤ�¹Ԥ���ˤϴ����ͤΥѥ���ɤ�ɬ��');
    define('POPUP_ERROR_TEXT', '�ǡ����١������ѹ���ä���ˤϴ����ͤΥ桼��̾�ȥѥ���ɤ�ɬ�פǤ���<br /><br />Zen Cart�δ����ͥ桼��̾�ȥѥ���ɤ����������Ϥ��Ƥ���������');
  break;
  case ('79'):
    define('POPUP_ERROR_TEXT','OpenSSL�Ϥ��ʤ��Υ����Ȥ�SSL (https://)���󶡤��뤿��˻Ȥ�����ˡ�ΰ�ĤǤ���<br /><br />�����ԲĤ�ɽ�����줿��硢�ͤ�������ͳ�Ȥ��ưʲ��Τ�Τ��ͤ����ޤ�: <br />(a) �����֥ۥ��Ȥ�SSL�򥵥ݡ��Ȥ��Ƥ��ʤ�<br />(b) �����֥����С���OpenSSL�����󥹥ȡ��뤵��Ƥ��ʤ�(¾��SSL�����ӥ������󥹥ȡ��뤵��Ƥ����ǽ��������)<br />(c) �����֥ۥ��Ȥ����ʤ���SSLǧ�ڤˤĤ��ƾܺ٤��Τ�ʤ����ᡢŬ�ڤ�����򤹤뤳�Ȥ��Ǥ��ʤ�<br />(d) PHP��OpenSSL�򥵥ݡ��Ȥ���褦�����ꤵ��Ƥ��ʤ���<br /><br />������θ����ˤ��衢�����֥ڡ����ΰŹ沽(SSL)��ɬ�פʤ顢�����֥ۥ��ƥ��󥰤Υץ�Х��������̤��Ƥ���������');
    define('POPUP_ERROR_HEADING','OpenSSL����');
  break;
  case ('80'):
    define('POPUP_ERROR_HEADING', 'PHP���å���󥵥ݡ��Ȥ�ɬ��');
    define('POPUP_ERROR_TEXT', 'PHP���å���󥵥ݡ��Ȥ�ON�ˤ��Ƥ����������ʲ��Υ⥸�塼��򥤥󥹥ȡ��뤹�뤳�Ȥǲ�褹���礬����ޤ�: php4-session ');
  break;
  case ('81'):
    define('POPUP_ERROR_HEADING', 'Windows�ʳ��Ǥ�PHP��cgi�Ȥ��ƻ��Ѥ��뤳�Ȥ��򤱤�');
    define('POPUP_ERROR_TEXT', 'Linux/Unix�����о��PHP��cgi�Ȥ��Ƽ¹Ԥ�����ȡ��͡������꤬�������ǽ��������ޤ���<br /><br />Windows�����Фʤ顢PHP�Ͼ��cgi�⥸�塼��Ȥ��Ƽ¹Ԥ����Τǡ�Windows�����Ф�ȤäƤ���ʤ顢���ηٹ��̵�뤷�Ƥ���������');
  break;
  case ('82'):
    define('POPUP_ERROR_HEADING', ERROR_TEXT_DISABLE_FUNCTIONS);
    define('POPUP_ERROR_TEXT', 'php.ini�ե�����ǰʲ��ε�ǽ�Τ����줫��OFF�ˤʤäƤ��ޤ�: <br /><ul><li>set_time_limit</li><li>exec</li></ul>�ȥ�ե��å�������ʥ����С��Ǥϰ������Τ��ᡢ���ε�ǽ��OFF�ˤ��Ƥ����Τ�����ޤ�����e-Commerce�����ƥ��ư�����ˤ�����Ū�ǤϤʤ����ѥե����ޥ󥹤˱ƶ����Ф��ǽ��������ޤ���<br /><br />�ۥ��ƥ��󥰥ץ�Х������ˡ������ε�ǽ�������������Ф��󶡤��Ƥ�餦�褦�˸�Ĥ��뤳�Ȥ򤪴��ᤷ�ޤ���');
  break;
  case ('83'):
    define('POPUP_ERROR_HEADING','�ǡ����١����Υơ��֥�ץ�ե�������̤���Ĥ�ʸ�����ޤޤ�Ƥ���');
    define('POPUP_ERROR_TEXT','�ǡ����١����Υơ��֥�ץ�ե������ˤϰʲ���ʸ����ޤळ�Ȥ��Ǥ��ޤ���: <br />
&nbsp;&nbsp; / �ޤ��� \\ �ޤ��� . <br /><br />�ץ�ե������λ������ľ���Ƥ����������㤨�д�ñ�ˡ�zen_�פΤ褦�ʤ�Τ򤪴��ᤷ�ޤ���');
  break;
  case ('84'):
    define('POPUP_ERROR_HEADING','PHP��Session.autostart��ON�ˤʤäƤ��롣');
    define('POPUP_ERROR_TEXT','php.ini�ե�����ˤ���session.auto_start���꤬ON�ˤʤäƤ��ޤ���<br /><br />Zen Cart�Ǥϥ��å��������꤬��λ���������ǥ��å����򳫻Ϥ���ǥ�����ˤʤäƤ��뤿�ᡢ��������Ǥϥ��å����ν��������Թ礬�������ǽ��������ޤ������å�����ưŪ�˳��Ϥ�����������ȡ������Фˤ�äƤ�����ˤʤ�ޤ���<br /><br />�⤷�����OFF�ˤ������ʤ顢Zen Cart�Υ롼�ȥǥ��쥯�ȥ�(index.php��Ʊ���ե����)�ˤ���.htaccess�ե�����˼��Υ��ޥ�ɤ�񤭹���Ǥ�������: <br /><br /><code>php_value session.auto_start 0</code>');
  break;
  case ('85'):
    define('POPUP_ERROR_HEADING','�ǡ����١������åץ��졼���Ѥ�SQL�ε��Ҥ��Դ���');
    define('POPUP_ERROR_TEXT','�ǡ����١����򥢥åץ��졼�ɤ���ݤˡ�SQL�ε��ҤΤ����Τ����Ĥ����¹Ԥ���ޤ���Ǥ���������ϥǡ����١����˽�ʣ��������ȥ꤬���뤫������٤��Ϥ��Υ���ब�ʤ��ʤɤξ�郎���ʤ��ä����Ȥˤ���ΤǤ���<br /><br />�Ǥ�褯�����븶���Ȥ��ơ�Zen Cart�Υǡ����١������ѹ���ä���褦�ʥ���ȥ�ӥ塼�����/ ���ɥ���ʤɤ򥤥󥹥ȡ��뤷�����Ȥ��󤲤��ޤ���<br /><br />���˥��åץ��졼�ɤκݤ˥��顼��ȯ�����Ƥ⡢Ź�ޤα��Ĥˤ������ƶ���Ϳ���ʤ����Ȥ⤢��ޤ�����ǰ�Τ���˥��顼�����Ƥ��ǧ���뤳�Ȥ򤪴��ᤷ�ޤ���<br /><br />��ǧ����ˤϡ���upgrade_exceptions�ץơ��֥�����Ƥ�����å����뤳�Ȥ���Ϥ�Ƥ���������');
  break;
  case ('86'):
    define('POPUP_ERROR_HEADING','PHP��Session.use_trans_sid��ON�ˤʤäƤ���');
    define('POPUP_ERROR_TEXT','php.ini�ե������session.use_trans_sid��ON�����ꤵ��Ƥ��ޤ���<br /><br />���Τޤޤ��ȥ��å����ν��������꤬�Ф�Ф��꤫���������ˤ�پ�򤭤�����ǽ��������ޤ���<br /><br /><a href="http://www.olate.com/articles/252">http://www.olate.com/articles/252</a>�򻲹ͤˤ���.htaccess�Υѥ�᡼�����ѹ����뤫��php.ini�ե������OFF�ˤ��Ƥ���������<br /><br />�������˴ؤ��Ƥξ���ϡ����ξ��򻲾Ȥ��Ƥ�������: <a href="http://shh.thathost.com/secadv/2003-05-11-php.txt">http://shh.thathost.com/secadv/2003-05-11-php.txt</a>��');
  break;
  case ('87'):
    define('POPUP_ERROR_HEADING','�ǡ����١����桼���θ��¤�ɬ��');
    define('POPUP_ERROR_TEXT','Zen Cart�򱿱Ĥ���ˤϰʲ��Τ褦�ʥǡ����١�����٥�Ǥθ��¤�ɬ�פǤ�: <ul><li>ALL PRIVILEGES<br /><em>or</em></li><li>SELECT</li><li>INSERT</li><li>UPDATE</li><li>DELETE</li><li>CREATE</li><li>ALTER</li><li>INDEX</li><li>DROP</li></ul>��������ˤϡ�CREATE�פȡ�DROP�פθ��¤�ɬ�פ���ޤ��󤬡����󥹥ȡ���䥢�åץ��졼�ɤ�����SQL�ѥå��ʤɤκݤ�ɬ�פˤʤ�ޤ���');
  break;
  case ('88'):
    define('POPUP_ERROR_HEADING','/includes/configure.php�ؤν񤭹��ߤ˼���');
    define('POPUP_ERROR_TEXT','���ʤ������ꤷ�������configure.php�ե��������¸����ݡ�Zen Cart���󥹥ȡ��餬�񤭹��ߤ˼��Ԥ��ޤ������ʲ���configure.php�ե�������Ф��ƥ����֥����Ф��񤭹��ߤθ��¤��äƤ��뤫��ǧ���Ƥ���������<br /><br />- /includes/configure.php<br />- /admin/includes/configure.php<br /><br />�����Ƥ����Υե������񤭴����뤿��Υǥ��������̤���­���Ƥ��ʤ���������å�����ɬ�פ����뤫�⤷��ޤ���<br /><br />���顼���������Ȥ��ˡ������Υե����륵������0-bytes���ä��Ȥ����顢�ǥ��������̤�����Ǥ����ǽ�����⤯�ʤ�ޤ���<br /><br />���󥹥ȡ��뤬��λ����ޤǡ�Unix/Linux�ۥ��ƥ��󥰤Ǥ�CHMOD 777�ˤ��Ƥ������Ȥ�����Ū�Ǥ��������ƥ��󥹥ȡ��뤬��λ���������ǡ�644��444�����ꤷ�Ƥ���������<br /><br />Windows�ξ��ˤϡ����󥹥ȡ����Ϥ�����ˡ������Υե�����򱦥���å����ơ��֥ץ�ѥƥ��פ����򤷡��֥������ƥ��ץ��֤򥯥�å����ޤ����ֿ����פ򥯥�å����ơ������פ����򤷤ơ��ɤ߽񤭤θ��¤�Ϳ���ޤ��������ƥ��󥹥ȡ��뤬��λ�����顢�ɤ����Ѥ����ꤷ�ʤ����ޤ���');
  break;
  case ('89'):
    define('POPUP_ERROR_HEADING','GD���ݡ��Ȥ˴ؤ���ܺ�');
    define('POPUP_ERROR_TEXT','���������Τ���ˡ�Zen Cart��PHP��GD���ݡ��Ȥ���Ѥ��ޤ�(GD�����Ѳ�ǽ�ʾ��)���С������2.0�ʾ�Τ�Τ򤪴��ᤷ�ޤ���<br /><br />�⤷GD���ݡ��Ȥ�PHP�����äƤ��ʤ��ʤ顢�ۥ��ƥ��󥰲�Ҥ����Ǥߤޤ��礦��');
  break;
  case ('90'):
    define('POPUP_ERROR_HEADING','Zen Cart��v1.3.0.2-l10n-jp-3�ˤ�����<br/>MySQL5.0.x���б����ޤ���');
    define('POPUP_ERROR_TEXT','�⤷MySQL 5���SQL���顼�������ä��顢���ߥ�˥ƥ��Ǽ��Ĥ���Ƥ��Ƥ�������(��Ƥ�������Ʊ�����Ƥ����Ǥ���Ƥ���Ƥ��ʤ�����ǧ��˺��ʤ�)��');
  break;
  case ('91'):
    define('POPUP_ERROR_HEADING','PHP�С������ηٹ�');
    define('POPUP_ERROR_TEXT','Zen Cart��PHP�С������4.3.2�ʾ�Ǽ¹Ԥ����褦�˥ǥ����󤵤�Ƥ��ޤ���<br /><br />Zen Cart�ǻȤ��Ƥ���PHP�ե��󥯥����(���ǧ�ڤȥ��å���������Ϣ)��4.3.2������PHP�ˤ�����¸�ߤ��ʤ��������뤤�ϥХ�������ޤ���<br /><br />���Υ����Ф�Zen Cart�򱿱Ĥ���ʤ顢PHP�ΥС������򥢥åץ��졼�ɤ��뤳�Ȥ򶯤������ᤷ�ޤ���');
  break;
  case ('92'):
    define('POPUP_ERROR_HEADING','open_basedir restriction may cause problems');
    define('POPUP_ERROR_TEXT','Your PHP is configured in such a way that prevents you from running scripts outside a specified "basedir" folder. Yet, your website files appear to be kept in a folder outside of the allowed "basedir" area.<br /><br />Among other things, you could have problems uploading files or doing backups.<br /><br />You should talk to your web host to change or remove this restriction.');
  break;
  case ('93'):
    define('POPUP_ERROR_HEADING','cURL support not detected');
    define('POPUP_ERROR_TEXT','Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('94'):
    define('POPUP_ERROR_HEADING', 'Physical HTTPS Path is incorrect');
    define('POPUP_ERROR_TEXT', 'The entry you have made for the Physical HTTPS Path does not appear to be valid. Please correct and try again.');
  break;
  case ('95'):
    define('POPUP_ERROR_HEADING', 'Physical HTTPS Path');
    define('POPUP_ERROR_TEXT', '���Ĥ��Υ�󥿥륵���ФǤ�SSL��non-SSL��ɽ�����륳��ƥ�Ĥγ�Ǽ�ǥ��쥯�ȥ꤬�ۤʤ��礬����ޤ����⤷���Τ褦�ʴĶ��ξ���non-SSL��Ʊ�ͤ�SSL�ѤΥǥ��쥯�ȥ�ˤ�Zen Cart�򥤥󥹥ȡ��뤷�ʤ���Фʤ�ޤ���ʪ��HTTPS�ѥ���Zen Cart�Υե������SSL�Ѥ˥��󥹥ȡ��뤹��ѥ��Ǥ����⤷SSL��ɬ�פǤʤ��ä���Zen Cart��SSL�ѥǥ��쥯�ȥ�˥��󥹥ȡ��뤹��ɬ�פ��ʤ���ж���Ƿ빽�Ǥ���');
  break;
}

?>
