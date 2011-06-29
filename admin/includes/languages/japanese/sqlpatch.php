<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
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
//  $Id: sqlpatch.php 3093 2006-03-02 19:50:40Z drbyte $
//
  define('HEADING_TITLE','SQL�ѥå��Υ��󥹥ȡ���');
  define('HEADING_WARNING','������ץȤμ¹����˥ǡ����١����Υե�Хå����åפ�ԤäƤ�������');
  define('HEADING_WARNING2','�����ɥѡ��ƥ��Υ⥸�塼��ʤɤ���Ѥ��Ƥ����硢����ʬ����Ǥ�ˤ����Ƽ¹Ԥ��Ƥ���������Zen-Cart�ϰ������ˤĤ��Ƥ��ݾ��Ԥ��ޤ���<br />�ƥ����Ѥ�DB�ǻ����˳�ǧ���뤳�Ȥ�侩���ޤ���');
  define('TEXT_QUERY_RESULTS','������η��:');
  define('TEXT_ENTER_QUERY_STRING','������ʸ��Ž���դ��� <br />�¹Ԥ��Ƥ���������&nbsp;&nbsp;<br /><br />ɬ����;�פ�<br />����äƤ���������');
  define('TEXT_QUERY_FILENAME','�ե����뤫��<br />�ɤ߹���:');
  define('ERROR_NOTHING_TO_DO','���顼: �����ꡢ�ޤ��ϥ�����ե����뤬����ޤ���');
  define('TEXT_CLOSE_WINDOW', '[ �Ĥ��� ]');
  define('SQLPATCH_HELP_TEXT','SQL�ѥå��ġ���ϥƥ����ȥ��ꥢ�ե�����ɤ˥����쥯�Ȥ�SQL�����ɤ��̤����⤷���ϥ�����ץȥե�����򥢥åץ��ɤ��뤳�ȤǤ��Ȥǥ����ƥ�˥ѥå���Ŭ�Ѥ��ޤ��� '.
                              '���Υġ���ϥ��ȥ����admin/includes/configure.php(DB_PREFIX definition)��������줿�����ƥ��֤�DB�ˡ���ưŪ���׵ᤵ�줿�ץ�ե��å������������뤿�ᡢ������ץȤ��������Ȥ��ˤϥơ��֥�Υץ�ե�������ޤ�ƤϤ����ޤ���<br /><br />' .
                              '���ϡ��ޤ��ϥ��åץ��ɤ��줿���ޥ�ɤϰʲ��������ˤ�äƻϤޤ�ޤ�:'.
                              '<br /><ul><li>TABLE��¸�ߤ�������Ȥ�</li><li>TABLE���������</li><li>��������</li><li>̵�����������</li><li>TABLE���ѹ�����</li>' .
                              '<li>���åץǡ��Ȥ���(ñ��TABLE�Τ�)</li><li>���åץǡ��Ȥ�̵�뤹��(ñ��TABLE�Τ�)</li><li>�������</li><li>INDEX��ɥ�åפ���</li><li>INDEX���������</li>' .
                              '<br /><li>���򤹤� </li></ul>' . 
'<h2>���Ը����Υ᥽�å�</h2>�ʲ��Υ᥽�åɤ�ɬ�פ˱���ʣ����Statement���������Τ˻Ȥ��ޤ�:<br />
�����Ĥ��Υ����ɤ��ĤȤ������餻�뤳�Ȥǡ�MySQL�Ϥ�����ĤΥ��ޥ�ɤȤ��ư����ޤ��������ɤ�<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>�Τ褦�˵��Ҥ��ޤ����ѡ�������xxx�ο��Υ��ޥ�ɤ��ĤΥ��ޥ�ɤȤ��ư����ޤ���<br />
�⤷���Υե������phpMyAdmin�䤽���Ʊ���Υ��ץꥱ�����������Ѥ������餻�Ƥ�����ˤϡ�"#NEXT..."�ǻϤޤ륳���Ȥ�̵�뤵��ޤ��������ƥ�����ץȤϲ�Ŭ��ư���ޤ�<br />
<br /><strong>���: </strong>SELECT.... FROM... and LEFT JOIN�������Υ��ޥ�ɤ�Table�ץ�ե�������ѡ���������ץȤ˲ä��뤿��˰�Ԥ˵��Ҥ��ʤ���Ф����ޤ���<br /><br />
<em><strong>��:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
  define('REASON_TABLE_ALREADY_EXISTS','Table��������뤳�Ȥ��Ǥ��ޤ��󡣴���¸�ߤ��Ƥ��ޤ���');
  define('REASON_TABLE_DOESNT_EXIST','Table��õ�뤳�Ȥ��Ǥ��ޤ���¸�ߤ��Ƥ��ޤ���');
  define('REASON_TABLE_NOT_FOUND','Table���ʤ�����õ�뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','configuration_key�������Ǥ��ޤ��󡣴���¸�ߤ��Ƥ��ޤ�');
  define('REASON_COLUMN_ALREADY_EXISTS','�������ɲäǤ��ޤ��󡢴���¸�ߤ��Ƥ��ޤ�');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','¸�ߤ��ʤ����ᥫ�������Ǥ��ޤ���');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','¸�ߤ��ʤ����ᥫ�����ѹ����뤳�Ȥ��Ǥ��ޤ���');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','prod-type-layout configuration_key���ı�ͭ���뤳�Ȥ��Ǥ��ޤ��󡣴���¸�ߤ��Ƥ��ޤ���');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','¸�ߤ��ʤ�����Table�Υ���ǥå��������Ǥ��ޤ���');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','¸�ߤ��ʤ�����Table���primary key�����Ǥ��ޤ���');
  define('REASON_INDEX_ALREADY_EXISTS','Table�˥���ǥå������ɲäǤ��ޤ��󡣴���¸�ߤ��Ƥ��ޤ���');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','primary key��table���ɲäǤ��ޤ��󡣴���¸�ߤ��Ƥ��ޤ�');
  define('REASON_NO_PRIVILEGES','User '.DB_SERVER_USERNAME.'@'.DB_SERVER.' �ǡ����١����ؤθ��¤�����ޤ��� '.DB_DATABASE.'.');

?>
