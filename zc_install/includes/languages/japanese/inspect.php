<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: inspect.php 3178 2006-03-12 22:30:49Z drbyte $
 */
/**
 * defining language components for the page
 */
  
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; ���åȥ��åס�-�������ƥม��');
  define('INSTALL_BUTTON', ' ���󥹥ȡ��� '); // this comes before TEXT_MAIN
  define('UPGRADE_BUTTON', '���åץ��졼��'); // this comes before TEXT_MAIN
  define('DB_UPGRADE_BUTTON', '�ǡ����١����Υ��åץ��졼��'); // this comes before TEXT_MAIN
  define('REFRESH_BUTTON', '�ƥ����å�');
//Button meanings: (to be made into help-text for future version):
// "Install" = make new configure.php files, regardless of existing contents.  Load new database by dropping old tables.
// "Upgrade" = read old configure.php files, and write new ones using new structure. Upgrade database, instead of wiping and new install
// "Database Upgrade" = don't write the configure.php files -- simply jump to the database-upgrade page. Only displayed if detected database version is new enough to not require configure.php file updates.

  define('TEXT_MAIN', '���Ȥ���Web�����С���Zen Cart��ư��뤿��ε�ǽ�򥵥ݡ��Ȥ��Ƥ��뤫�����å���ԤäƤ��ޤ��� ��ؿʤि��ˡ����ƤΥ��顼�������Ƥ����<em>'.INSTALL_BUTTON.'&nbsp;</em>�פ򲡤��ƺ�Ȥ�³�Ԥ��Ƥ���������');
  define('SYSTEM_INSPECTION_RESULTS', '�����ƥ�θ������');
  define('OTHER_INFORMATION', '����¾�Υ����ƥ����(���ȤΤ�)');
  define('OTHER_INFORMATION_DESCRIPTION', '�ʲ��ξ����ɬ�������������䡢�������٤�����򼨤��櫓�ǤϤ���ޤ��� ��ñ�˸��Ĥ��뤳�Ȥν�������ɽ�����뤿���¸�ߤ��ޤ���');

  define('NOT_EXIST','���Ĥ���ޤ���');
  define('WRITABLE','�񤭹���ޤ�');
  define('UNWRITABLE',"<span class='errors'>�񤭹���ޤ���</span>");
  define('UNKNOWN','����');
  define('ON','ON');
  define('OFF','OFF');
  define('OK','OK');

  define('UPGRADE_DETECTION','���åץ��졼�ɥ⡼�ɤ����ѤǤ��ޤ�');
  define('LABEL_PREVIOUS_INSTALL_FOUND','�������󥹥ȡ��뤵�줿Zen Cart�����Ĥ���ޤ���');
  define('LABEL_PREVIOUS_VERSION_NUMBER','Zen Cart v%s�ѤΥǡ����١�����¸�ߤ��ޤ���');
  define('LABEL_PREVIOUS_VERSION_NUMBER_UNKNOWN','<em>�������ʤ��顢�ǡ����١����ΥС����������ꤹ�뤳�Ȥ��Ǥ��ޤ��󡣤����餯�ǡ����١����ơ��֥�Υץ�ե��å����δְ㤤�䡢����¾�Υǡ����١������꤬��äƤ����ΤȻפ��ޤ��� <br /><br />�ٹ�: ���ߤ�configure.php���꤬�������ȳο���������ϡ�ñ�˥��åץ��졼�ɥ��ץ�������Ѥ��Ƥ���������</em>');

  define('DISPLAY_PHP_INFO','PHP����ؤΥ��: ');
  define('VIEW_PHP_INFO_LINK_TEXT','���ʤ��Υ����Ф� PHP �ξ���򸫤�');
  define('LABEL_WEBSERVER','Web �����С�');
  define('LABEL_MYSQL_AVAILABLE','MySQL �Υ��ݡ���');
  define('LABEL_MYSQL_VER','MySQL �ΥС������');
  define('LABEL_DB_PRIVS','�ǡ����١�������');
  define('LABEL_POSTGRES_AVAILABLE','PostgreSQL �Υ��ݡ���');
  define('LABEL_PHP_VER','PHP �ΥС������');
  define('LABEL_PHP_OS','PHP O/S');
  define('LABEL_REGISTER_GLOBALS','Register Globals');
  define('LABEL_SET_TIME_LIMIT','PHP �μ¹Ի��֤Υ�ߥå�');
  define('LABEL_DISABLED_FUNCTIONS','���ѤǤ��ʤ� PHP �ε�ǽ');
  define('LABEL_SAFE_MODE','PHP �����ե⡼��');
  define('LABEL_CURRENT_CACHE_PATH','���ߤ� SQL ����å���ե������');
  define('LABEL_SUGGESTED_CACHE_PATH','�侩�����SQL ����å���ե������');
  define('LABEL_HTTP_HOST','HTTP �ۥ���');
  define('LABEL_PATH_TRANLSATED','Path_Translated');
  define('LABEL_PHP_API_MODE','PHP API �⡼��');
  define('LABEL_PHP_MODULES','�¹Բ�ǽ�ˤʤäƤ���PHP �⥸�塼��');
  define('LABEL_PHP_EXT_SESSIONS','PHP ���å����Υ��ݡ���');
  define('LABEL_PHP_SESSION_AUTOSTART','PHP ���å���� �����ȥ�������');
  define('LABEL_PHP_EXT_SAVE_PATH','PHP ���å���� ��¸�ѥѥ�');
  define('LABEL_PHP_EXT_FTP','PHP FTP ���ݡ���');
  define('LABEL_PHP_EXT_CURL','PHP cURL ���ݡ���');
  define('LABEL_PHP_MAG_QT_RUN','PHP magic_quotes_runtime ������');
  define('LABEL_PHP_EXT_GD','PHP GD ���ݡ���');
  define('LABEL_GD_VER','GD �С������');
  define('LABEL_PHP_EXT_OPENSSL','PHP OpenSSL ���ݡ���');
  define('LABEL_PHP_UPLOAD_STATUS','PHP Upload ���ݡ���');
  define('LABEL_PHP_EXT_PFPRO','PHP Payflow Pro ���ݡ���');
  define('LABEL_PHP_EXT_ZLIB','PHP ZLIB Compression ���ݡ���');
  define('LABEL_PHP_SESSION_TRANS_SID','PHP session.use_trans_sid');
  define('LABEL_DISK_FREE_SPACE','�����С���ζ����ǥ���������');
  define('LABEL_XML_SUPPORT','PHP XML ���ݡ���');
  define('LABEL_OPEN_BASEDIR','PHP open_basedir ������');
  define('LABEL_UPLOAD_TMP_DIR','PHP Upload TMP �ǥ��쥯�ȥ�');
  define('LABEL_SENDMAIL_FROM','PHP sendmail \'from\'');
  define('LABEL_SENDMAIL_PATH','PHP sendmail �ѥ�');
  define('LABEL_SMTP_MAIL','PHP SMTP destination');

  define('LABEL_CRITICAL','��̿Ū�ʥ����ƥ�');
  define('LABEL_RECOMMENDED','��������Υ����ƥ�');
  define('LABEL_OPTIONAL','���ץ����Υ����ƥ�');

  define('LABEL_EXPLAIN',' �ܺپ���...');
  define('LABEL_FOLDER_PERMISSIONS','�ե�����ȥե�������Υѡ��ߥå����');
  define('LABEL_WRITABLE_FOLDER_INFO','Zen Cart�δ����������ɲä���뿷��ǽ����������ư�����뤿��ˡ������Ĥ��Υե������ե���������Խ���ǽ�˥��åȤ��Ƥ���ɬ�פ�����ޤ����ʲ��˵󤲤�Τϡ����ɤ߹���/�񤭹��߲�ǽ�פˤ��Ƥ����٤��ե�������ΰ����Ǥ���
�侩�����CHMOD�Υ��åƥ��󥰤򻲹ͤˤ��Ƥ������������󥹥ȡ����Ȥ�³�������ˤ���������������ԤäƤ���������
���꤬�������Ԥ�줿����ǧ���뤿��ˤϡ����Υڡ�������ɤ߹��ߤ��Ƥ���������<br /><br />
�ۥ��ƥ��󥰥����ӥ��ˤ�äƤ�CHMOD 777�ǤϤʤ���666�������Ĥ��Ƥ��ʤ����⤷��ޤ��󡣤ޤ���777�ǻ�Ƥߤơ��Ǥ��ʤ��褦�Ǥ����666�����ꤷ�ƤߤƤ���������');


?>
