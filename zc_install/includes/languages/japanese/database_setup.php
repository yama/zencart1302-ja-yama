<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: database_setup.php 3164 2006-03-11 01:54:17Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('SAVE_DATABASE_SETTINGS', '�ǡ����١����������¸');//this comes before TEXT_MAIN
  define('TEXT_MAIN', "���˥ǡ����١����������Ԥ��ޤ�����դ��Ƴƹ��ܤ����Ϥ���<em>" . SAVE_DATABASE_SETTINGS . "</em> �򥯥�å����Ƥ���������");
  define('TEXT_PAGE_HEADING', 'Zen Cart���ꡡ-���ǡ����١�������');
  define('DATABASE_INFORMATION', '�ǡ����١�������');
  define('DATABASE_TYPE', '�ǡ����١���������');
  define('DATABASE_TYPE_INSTRUCTION', '���Ѥ���ǡ����١��������פ����򤷤Ƥ���������');
  define('DATABASE_HOST', '�ǡ����١����ۥ���̾');
  define('DATABASE_HOST_INSTRUCTION', '��³����ۥ���̾�����Ϥ��Ƥ���������(���\'db1.myserver.com\', \'192.168.0.1\', \'localhost\'��');
  define('DATABASE_USERNAME', '�ǡ����١����桼��̾');
  define('DATABASE_USERNAME_INSTRUCTION', '�ǡ����١�����³�˻��Ѥ���桼��̾�����Ϥ��Ƥ���������(���\'root\'��');
  define('DATABASE_PASSWORD', '�ǡ����١����ѥ����');
  define('DATABASE_PASSWORD_INSTRUCTION', '�ǡ����١�����³�˻��Ѥ���ѥ���ɤ����Ϥ��Ƥ���������');
  define('DATABASE_NAME', '�ǡ����١���̾');
  define('DATABASE_NAME_INSTRUCTION', '�ǡ����١���̾�����Ϥ��Ƥ���������(���\'zencart\'��');
  define('DATABASE_PREFIX', '�ơ��֥�ץ�ե�����');
  define('DATABASE_PREFIX_INSTRUCTION', '�ǡ����١����ơ��֥���դ���ץ�ե����������Ϥ��Ƥ���������(���\'zen_\'��ɬ�פǤʤ���ж���ˤ��Ƥ���������<br />�ץ�ե���������Ѥ��뤳�Ȥǰ�ĤΥǡ����١�����ʣ����Ź�ޤ򱿱Ĥ��뤳�Ȥ��Ǥ��ޤ���');
  define('DATABASE_CREATE', '�ǡ����١�������');
  define('DATABASE_CREATE_INSTRUCTION', '�ǡ����١����򿷵��������ޤ���? ');
  define('DATABASE_CONNECTION', '��³Ū��³');
  define('DATABASE_CONNECTION_INSTRUCTION', '��³Ū��³(Persistent connection)��ͭ���ˤ��ޤ�����<br>ʬ����ʤ�����\�֤������פ����򤷤Ƥ���������');
  define('DATABASE_SESSION', '�ǡ����١������å����');
  define('DATABASE_SESSION_INSTRUCTION', '�ǡ����١����ǤΥ��å�����������Ĥ��ޤ�����<br>ʬ����ʤ����ϡ֤Ϥ��פ����򤷤Ƥ���������');
  define('CACHE_TYPE', 'SQL����å������ˡ');
  define('CACHE_TYPE_INSTRUCTION', 'SQL����å������Ѥ��뤿�����ˡ�����򤷤Ƥ���������');
  define('SQL_CACHE', '���å����/SQL����å���ǥ��쥯�ȥ�');
  define('SQL_CACHE_INSTRUCTION', '�ե�����١����� SQL����å������Ѥ��뤿��Υǥ��쥯�ȥ�����Ϥ��Ƥ���������');
  define('ONLY_UPDATE_CONFIG_FILES','����ե�����Τ߹���');


  define('REASON_TABLE_ALREADY_EXISTS','���ꤵ�줿�ǡ����١����ơ��֥��%s�פϤ��Ǥ�¸�ߤ��Ƥ���Τǡ��������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_TABLE_DOESNT_EXIST','���ꤵ�줿�ǡ����١����ơ��֥��%s�פ����Ĥ���ʤ��Τǡ�������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','���ꥭ����%s�פϤ��Ǥ�¸�ߤ��Ƥ���Τǡ��������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_COLUMN_ALREADY_EXISTS','������%s�פϤ��Ǥ�¸�ߤ��Ƥ���Τǡ��ä��뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','������%s�פ����Ĥ���ʤ��Τǡ�������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','������%s�פ����Ĥ���ʤ��Τǡ��ѹ����뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','���ꥭ����%s�פϤ��Ǥ�¸�ߤ��Ƥ���Τ��������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','����ǥå�����%s��(�ơ��֥��%s��)�����Ĥ���ʤ��Τǡ�������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','�ơ��֥��%s�פμ��ץ��������Ĥ���ʤ��Τǡ�������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_INDEX_ALREADY_EXISTS','����ǥå�����%s��(�ơ��֥��%s��)�Ϥ��Ǥ�¸�ߤ��Ƥ���Τǡ��ä��뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','�ơ��֥��%s�פμ��ץ����Ϥ��Ǥ�¸�ߤ��Ƥ���Τǡ��ä��뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_NO_PRIVILEGES','�桼����%s@%s�פϡ�%s�פθ��¤���äƤ��ޤ���');

?>
