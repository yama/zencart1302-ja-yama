<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: database_upgrade.php 2342 2005-11-13 01:07:55Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('PAGE_HEADING', 'Zen Cart&trade; ���åȥ��åס�-���ǡ����١������åץ��졼��');
  define('UPDATE_DATABASE_NOW','�ǡ����١����򥢥åץǡ��Ȥ���');//this comes before TEXT_MAIN
  define('TEXT_MAIN', '<em>���: </em> ���Υ�����ץȤϲ��˥ꥹ�Ȥ��줿�С�����󤫤顢���ʤ���Zen Cart�ǡ����١����������ޤ򥢥åץ��졼�ɤ��뤿������˻��Ѥ����٤��Ǥ���  ' .
                      '<span class="emphasis"><strong>���åץ��졼�ɤ������ˤ��ʤ��Υǡ����١����Υե�Хå����åפ�Ԥ����Ȥ򶯤��侩���ޤ�!</strong></span>');
  define('TEXT_MAIN_2','<span class="emphasis">���ξܺ٤�������տ��������å����Ƥ���������</span>���ξ���Ϥ��ʤ���configure.php���꤫�������Ƥ��ޤ���<br />' .
                      '�⤷����餬���ΤǤ���ȳο��Ǥ��ʤ���С���˿ʤޤʤ��Ǥ�������������ʤ��ȡ����ʤ��Υǡ����١�������»�����������ޤ���');

  define('DATABASE_INFORMATION', '�ǡ����١�������');
  define('DATABASE_TYPE', '�ǡ����١���������');
  define('DATABASE_HOST', '�ǡ����١����ۥ���');
  define('DATABASE_USERNAME', '�ǡ����١����桼��̾');
  define('DATABASE_PASSWORD', '�ǡ����١����ѥ����');
  define('DATABASE_NAME', '�ǡ����١���̾');
  define('DATABASE_PREFIX', '�ǡ����١����ơ��֥�ץ�ե�����');
  define('DATABASE_PRIVILEGES', '�ǡ����١�������');

  define('SNIFFER_PREDICTS','<em>Upgrade Sniffer</em> predicts: ');
  define('CHOOSE_UPGRADES','���åץ��졼�ɥ��ƥåפ����򤷤Ƥ�������');
  define('TITLE_DATABASE_PREFIX_CHANGE','�ǡ����١����ơ��֥�ץ�ե������ѹ�');
  define('ERROR_PREFIX_CHANGE_NEEDED','<span class="errors">���ʤ��Υǡ����١��������Zen Cart�Υơ��֥�򸫤Ĥ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����<br />���餯���ʤ��Υǡ����١����ơ��֥�Υץ�ե������������Τ˻��ꤵ��ޤ�����</span><br />�⤷�ץ�ե��������Ѥ��Ƥ����꤬��褷�ʤ��ʤ顢phpMyAdmin�ޤ��Ϥ��ʤ��Υ����֥����ФΥ���ȥ���ѥͥ��Ȥä�configure.php������ȸ��ԤΥǡ����١����򡢼��Ȥ���Ӥ���ɬ�פ�����Ǥ��礦��');
  define('TEXT_DATABASE_PREFIX_CHANGE','�⤷�ǡ����١����ơ��֥�Υץ�ե��������ѹ���������С����˿������ץ�ե����������Ϥ��Ƥ���������<span class="emphasis">���: ��ʣ�����å��ϹԤ��ޤ���Τǡ����˻��Ѥ���Ƥ���ץ�ե������ǤϤʤ����Ȥ��ǧ���Ƥ���������</span>����¸�ߤ���ơ��֥�ץ�ե�������Ȥ��ȥǡ����١�����������Ȥˤʤ�ޤ���');
  define('TEXT_DATABASE_PREFIX_CHANGE_WARNING','<span class="errors"><strong>���: �⤷���ǡ����١����δ����ǿ���Ǥ���Ƕ�ΥХå����åפ��ʤ��ΤǤ���С��ơ��֥�ץ�ե��������ѹ����Τϻߤ�Ƥ����������⤷������˲������ޤ������ʤ��ä���硢���ʤ��ΥХå����åפ������줹��ɬ�פ�����Ǥ��礦���⤷���ۤ��ä���ο������Ƥʤ��ΤǤ���С��ơ��֥�̾���ѹ������ȤϤ��Ƥ���������</strong></span>');
  define('DATABASE_OLD_PREFIX','�Ť��ơ��֥�ץ�ե�����');
  define('DATABASE_OLD_PREFIX_INSTRUCTION','�Ť��ơ��֥�ץ�ե����������Ϥ��Ƥ�������');
  define('ENTRY_NEW_PREFIX','�������ơ��֥�ץ�ե�����');
  define('DATABASE_NEW_PREFIX_INSTRUCTION','�������ơ��֥�ץ�ե����������Ϥ��Ƥ�������');
  define('ENTRY_ADMIN_ID','�����Ԥ�ID (Zen Cart�δ����ԥ��ꥢ)');
  define('ENTRY_ADMIN_PASSWORD','�ѥ����');
  define('ADMIN_PASSSWORD_INSTRUCTION','�ǡ����١������ѹ���Ԥ��ˤϴ����ԤΥ桼�����͡���ȥѥ���ɡʴ������̤˥��������Ǥ��륢������ȡˤ�ɬ�פˤʤ�ޤ���<em> (MySQL�Υѥ���ɤǤϤ���ޤ���) </em>');
  define('TITLE_SECURITY','�ǡ����١����Υ������ƥ�');

  define('UPDATE_DATABASE_WARNING_DO_NOT_INTERRUPT','<span class="emphasis">���򥯥�å������塢���Ǥ��ʤ��Ǥ������������åץ��졼�ɤδ֤��Ԥ�����������</span>');
  define('SKIP_UPDATES','���åץ��졼�ɤ򥹥��åפ���');


  define('REASON_TABLE_ALREADY_EXISTS','����¸�ߤ��뤿��ơ��֥�򹹿����뤳�Ȥ��Ǥ��ޤ���Ǥ�����');
  define('REASON_TABLE_DOESNT_EXIST','�ơ��֥뤬¸�ߤ��ʤ�����ơ��֥�������뤳�Ȥ��Ǥ��ޤ���Ǥ�����');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','����ե�����졼����󥭡�������¸�ߤ��뤿�ῷ�����������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_COLUMN_ALREADY_EXISTS','����ब����¸�ߤ��뤿�ῷ�����ɲä��뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','����ब¸�ߤ��ʤ����ᥫ���������뤳�Ȥ��Ǥ��ޤ���Ǥ�����');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','����ब¸�ߤ��ʤ����ᥫ�����ѹ����뤳�Ȥ��Ǥ��ޤ���Ǥ�����');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','�ץ�����ȥ����ץ쥤�����ȥ���ե�����졼����󥭡�������¸�ߤ��뤿�ῷ�����������뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','����ǥå�����¸�ߤ��ʤ����ᥤ��ǥå����������뤳�Ȥ��Ǥ��ޤ���Ǥ�����');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','�ץ饤�ޥ꡼������¸�ߤ��ʤ�����ץ饤�ޥ꡼�����������뤳�Ȥ��Ǥ��ޤ���Ǥ�����');
  define('REASON_INDEX_ALREADY_EXISTS','����ǥå���������¸�ߤ��뤿�ῷ�����ɲä��뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','�ץ饤�ޥ꡼����������¸�ߤ��뤿��ơ��֥�˿����˥ץ饤�ޥ꡼�������ɲä��뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_NO_PRIVILEGES','���Υ桼�����ϥǡ����١����Խ����¤�����ޤ���');

?>
