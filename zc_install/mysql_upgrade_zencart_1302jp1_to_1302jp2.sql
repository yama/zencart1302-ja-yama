# Start of l10n-jp-2's modification
DELETE from tax_rates;
DELETE from geo_zones;
DELETE from zones_to_geo_zones;
DELETE from tax_class;
INSERT INTO tax_rates VALUES (1,1,1,1,5.0000,'�����ǡ�5%','2007-01-15 11:44:17','2006-11-29 16:18:40');
INSERT INTO geo_zones VALUES (1,'����','���ܡʾ����ǡ�','2007-01-15 11:44:41','2006-11-29 16:18:40');
INSERT INTO zones_to_geo_zones VALUES (1,107,NULL,1,'2007-01-21 11:44:32','2006-11-29 16:18:40');
INSERT INTO tax_class VALUES (1,'������','�����ǡ����ܡ�','2007-01-15 11:43:40','2004-01-21 01:35:29');
UPDATE configuration SET configuration_title='���ʤ��ǹ��ߤ�ɽ�� - ��������', configuration_description='�������̤ǲ��ʤ��ǹ��ߤ�ɽ�����뤫�ɤ��������ꤷ�ޤ���<br /><br />\r\n��true = ���ʤ��ǹ��ߤ�ɽ��<br />\r\n��false = �Ǹ���ǳۤ�ɽ��', configuration_value = 'true' WHERE configuration_key='DISPLAY_PRICE_WITH_TAX_ADMIN';
UPDATE configuration SET configuration_title='�����᡼������������ɥ쥹�μº���', configuration_description='���Ȥ��Υ᡼�륵���ФǤϡ���������᡼���������(From)���ɥ쥹��Web�����о�˼ºߤ��뤳�Ȥ�ɬ�ܤǤ���?<br /><br />spam�������ɻߤ���ʤɤΤ���ˤ��Τ褦�����ꤵ��Ƥ��뤳�Ȥ�����ޤ���Yes�����ꤹ��ȡ����������ɥ쥹�ȥ᡼�����From���ɥ쥹�����פ��Ƥ��뤳�Ȥ������ޤ���' WHERE configuration_key='EMAIL_SEND_MUST_BE_STORE';
UPDATE configuration SET configuration_title='���å������Ѥ�ɬ�ܤˤ���', configuration_description='���å�����ɬ�����å��������Ѥ��ޤ���True���ꤹ��ȥ֥饦���Υ��å��������դˤʤäƤ�����ϥ��å����򳫻Ϥ��ޤ��󡣥������ƥ������ͳ����;������ͳ�Τʤ��¤��True����ΤޤޤȤ��뤳�Ȥ򶯤��侩���ޤ���', configuration_value='True' WHERE configuration_key='SESSION_FORCE_COOKIE_USE';
UPDATE configuration SET configuration_title='�����륫�९���ݥ��', configuration_description='�����Ͽ���ˤ��β���˥����륫�९���ݥ���Ȥ��Ƽ�ưȯ�Ԥ��륯���ݥ�������򤷤Ƥ���������' WHERE configuration_key='NEW_SIGNUP_DISCOUNT_COUPON';
UPDATE project_version SET project_version_minor = '3.0.2-l10n-jp-2' where project_version_id = '1';
UPDATE project_version SET project_version_minor = '3.0.2-l10n-jp-2' where project_version_id = '2';
INSERT INTO project_version_history (project_version_key, project_version_major, project_version_minor, project_version_patch, project_version_comment, project_version_date_applied) VALUES ('Zen-Cart Main', '1', '3.0.2-l10n-jp-2', '', 'v1.3.0.2-l10n-jp-2', now());
INSERT INTO project_version_history (project_version_key, project_version_major, project_version_minor, project_version_patch, project_version_comment, project_version_date_applied) VALUES ('Zen-Cart Database', '1', '3.0.2-l10n-jp-2', '', 'v1.3.0.2-l10n-jp-2', now());
# End of l10n-jp-2's modification
