# This SQL script upgrades the core Zen Cart database structure from v1.2.0-l10n-jp-2 to v1.2.0-l10n-jp-3
#
# 2005/05/06 shida@zen-cart.jp


UPDATE configuration SET configuration_title = '��������Ⱥ������θĿ;����ǧ����ɽ��', configuration_description = '��������Ȥ����������̤ǸĿ;���γ�ǧ���̤�ɽ�����ޤ���<div style="color: red;">2005ǯ4��1���˻ܹԤ��줿�ָĿ;����ݸ�ˡ�פǤϡ��Ŀ;����ݸ����ˤ򳫼����뤳�Ȥ������Ƥ��ޤ���</div>', configuration_value='true' WHERE configuration_key = 'DISPLAY_PRIVACY_CONDITIONS';
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('���䤤��碌���θĿ;����ǧ����ɽ��', 'DISPLAY_CONTACT_US_PRIVACY_CONDITIONS', 'true', '���䤤��碌������̤ǸĿ;���γ�ǧ���̤�ɽ�����ޤ���<div style="color: red;">2005ǯ4��1���˻ܹԤ��줿�ָĿ;����ݸ�ˡ�פǤϡ��Ŀ;����ݸ����ˤ򳫼����뤳�Ȥ������Ƥ��ޤ���</div>', '11', '3', 'zen_cfg_select_option(array(\'true\', \'false\'), ', now());
 
