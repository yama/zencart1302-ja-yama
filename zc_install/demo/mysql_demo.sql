# MySQL file for Zen Cart Demo Products load
#
# $Id: mysql_demo.sql 3784 2006-06-17 00:35:28Z drbyte $
#

#
# Dumping data for table `address_book`
#

INSERT INTO address_book (address_book_id, customers_id, entry_gender, entry_company, entry_firstname, entry_lastname, entry_street_address, entry_suburb, entry_postcode, entry_city, entry_state, entry_country_id, entry_zone_id) VALUES (NULL, 1, 'm', 'JustaDemo', 'Bill', 'Smith', '123 Any Avenue', '', '12345', 'Here', '', 223, 12);

#
# Dumping data for table `categories`
#

INSERT INTO categories VALUES (1,'',0,10,'2007-01-15 13:01:41','2007-02-01 17:33:02',1);
INSERT INTO categories VALUES (2,'',1,0,'2007-01-15 13:01:41','2007-02-01 17:34:46',1);
INSERT INTO categories VALUES (3,'',0,20,'2007-01-15 13:10:03','2007-02-01 17:33:18',1);
INSERT INTO categories VALUES (4,'',3,0,'2007-01-15 13:10:03','2007-02-01 17:35:48',1);
INSERT INTO categories VALUES (5,'',1,0,'2007-01-15 13:10:04','2007-02-01 17:34:55',1);
INSERT INTO categories VALUES (6,'',0,30,'2007-01-15 13:10:04','2007-02-01 17:33:37',1);
INSERT INTO categories VALUES (7,'',6,0,'2007-01-15 13:10:04','2007-02-01 17:36:37',1);
INSERT INTO categories VALUES (8,'',3,0,'2007-01-15 13:10:04','2007-02-01 17:36:05',1);
INSERT INTO categories VALUES (9,'',3,0,'2007-01-15 13:10:04','2007-02-01 17:35:38',1);
INSERT INTO categories VALUES (10,'',6,0,'2007-01-15 13:10:04','2007-02-01 17:36:49',1);
INSERT INTO categories VALUES (11,'',3,0,'2007-01-15 13:10:04','2007-02-01 17:35:56',1);
INSERT INTO categories VALUES (12,'',3,0,'2007-01-15 13:10:04','2007-02-01 17:35:22',1);
INSERT INTO categories VALUES (13,'',3,0,'2007-01-15 13:10:04','2007-02-01 17:35:30',1);
INSERT INTO categories VALUES (14,'',3,0,'2007-01-15 13:10:04','2007-02-01 17:35:14',1);
INSERT INTO categories VALUES (15,'',1,0,'2007-01-15 13:10:04','2007-02-01 17:34:37',1);
INSERT INTO categories VALUES (16,'',1,0,'2007-01-15 13:10:04','2007-02-01 17:34:25',1);
INSERT INTO categories VALUES (17,'',6,0,'2007-01-15 13:10:04','2007-02-01 17:36:28',1);
INSERT INTO categories VALUES (96,NULL,94,20,'2007-01-26 03:33:54',NULL,1);
INSERT INTO categories VALUES (27,NULL,25,20,'2007-01-16 00:24:50','2007-01-26 03:31:06',1);
INSERT INTO categories VALUES (20,'',0,190,'2007-01-15 13:10:05','2007-02-01 17:38:10',1);
INSERT INTO categories VALUES (21,'',0,100,'2007-01-15 13:15:14','2007-02-01 17:37:40',1);
INSERT INTO categories VALUES (22,'',0,110,'2007-01-15 13:15:17','2007-02-01 17:37:55',1);
INSERT INTO categories VALUES (26,NULL,25,10,'2007-01-16 00:24:31','2007-01-26 03:43:46',1);
INSERT INTO categories VALUES (23,'',0,40,'2007-01-15 14:10:00','2007-02-01 17:37:13',1);
INSERT INTO categories VALUES (25,NULL,0,9000,'2007-01-16 00:22:56','2007-01-26 03:31:59',1);
INSERT INTO categories VALUES (29,NULL,26,10,'2007-01-16 00:25:31','2007-01-26 03:34:26',1);
INSERT INTO categories VALUES (30,NULL,26,20,'2007-01-16 00:25:46','2007-01-26 03:34:33',1);
INSERT INTO categories VALUES (31,NULL,26,30,'2007-01-16 00:26:06','2007-01-26 03:34:44',1);
INSERT INTO categories VALUES (94,NULL,25,30,'2007-01-26 03:29:40','2007-01-26 03:45:01',1);
INSERT INTO categories VALUES (95,NULL,94,10,'2007-01-26 03:32:51','2007-01-26 03:33:32',1);
INSERT INTO categories VALUES (45,'',84,100,'2007-01-16 19:27:32','2007-01-24 17:11:06',1);
INSERT INTO categories VALUES (41,'',0,400,'2007-01-16 15:11:23','2007-01-19 01:41:40',1);
INSERT INTO categories VALUES (40,'categories/category_free.gif',0,300,'2007-01-16 15:03:58','2007-02-01 17:41:21',1);
INSERT INTO categories VALUES (70,'',66,100,'2007-01-18 14:08:42','2007-01-18 14:40:49',1);
INSERT INTO categories VALUES (68,'',66,210,'2007-01-18 14:08:42','2007-01-18 14:19:31',1);
INSERT INTO categories VALUES (69,'',66,220,'2007-01-18 14:08:42','2007-01-18 14:19:51',1);
INSERT INTO categories VALUES (67,'',66,200,'2007-01-18 14:08:42','2007-01-18 15:28:46',1);
INSERT INTO categories VALUES (66,'',0,1000,'2007-01-18 14:08:42','2007-01-19 00:29:36',1);
INSERT INTO categories VALUES (61,'',59,0,'2007-01-17 15:20:31','2007-02-01 17:39:54',1);
INSERT INTO categories VALUES (62,'',59,0,'2007-01-17 15:20:31','2007-02-01 17:39:08',1);
INSERT INTO categories VALUES (63,'',59,0,'2007-01-17 15:20:31','2007-02-01 17:39:33',1);
INSERT INTO categories VALUES (64,NULL,66,10000,'2007-01-17 18:06:48','2007-01-19 00:25:42',1);
INSERT INTO categories VALUES (60,'',59,0,'2007-01-17 15:20:31','2007-02-01 17:40:03',1);
INSERT INTO categories VALUES (59,'',0,200,'2007-01-17 15:20:31','2007-02-01 17:38:41',1);
INSERT INTO categories VALUES (58,NULL,99,10000,'2007-01-16 21:31:45','2007-01-26 18:10:30',1);
INSERT INTO categories VALUES (71,'',66,700,'2007-01-18 14:08:42','2007-01-19 00:03:55',1);
INSERT INTO categories VALUES (72,'',66,1000,'2007-01-18 14:11:14','2007-01-19 00:05:31',1);
INSERT INTO categories VALUES (73,'',66,500,'2007-01-18 14:11:14','2007-01-18 14:18:33',1);
INSERT INTO categories VALUES (74,'',66,510,'2007-01-18 14:11:14','2007-01-18 14:18:39',1);
INSERT INTO categories VALUES (75,'',66,520,'2007-01-18 14:13:02','2007-01-18 14:18:46',1);
INSERT INTO categories VALUES (76,NULL,77,10,'2007-01-18 17:10:12','2007-01-23 00:59:03',1);
INSERT INTO categories VALUES (77,NULL,0,1200,'2007-01-18 17:40:48','2007-01-26 16:30:14',1);
INSERT INTO categories VALUES (78,NULL,77,20,'2007-01-18 17:45:38','2007-01-23 23:49:43',1);
INSERT INTO categories VALUES (79,NULL,0,500,'2007-01-19 01:25:28','2007-02-01 17:40:56',1);
INSERT INTO categories VALUES (80,NULL,99,3000,'2007-01-21 21:47:15','2007-01-26 18:15:51',1);
INSERT INTO categories VALUES (81,NULL,99,4000,'2007-01-23 10:24:53','2007-01-26 18:10:49',1);
INSERT INTO categories VALUES (82,NULL,99,5000,'2007-01-23 11:44:05','2007-01-26 18:12:53',1);
INSERT INTO categories VALUES (83,NULL,84,200,'2007-01-24 10:06:24','2007-01-25 20:18:56',1);
INSERT INTO categories VALUES (84,NULL,0,1100,'2007-01-24 10:18:28',NULL,1);
INSERT INTO categories VALUES (85,NULL,84,300,'2007-01-24 17:09:48','2007-01-24 17:10:44',1);
INSERT INTO categories VALUES (86,NULL,77,30,'2007-01-24 19:31:55','2007-01-24 20:55:37',1);
INSERT INTO categories VALUES (87,NULL,0,1300,'2007-01-24 20:02:17','2007-01-26 16:17:44',1);
INSERT INTO categories VALUES (89,NULL,0,2000,'2007-01-25 20:32:45','2007-01-26 18:17:18',1);
INSERT INTO categories VALUES (91,NULL,0,7200,'2007-01-26 03:16:19','2007-01-26 18:03:38',1);
INSERT INTO categories VALUES (99,NULL,0,10000,'2007-01-26 18:10:20',NULL,1);
INSERT INTO categories VALUES (93,NULL,0,7400,'2007-01-26 03:22:16','2007-01-26 18:04:08',1);
INSERT INTO categories VALUES (98,NULL,0,7300,'2007-01-26 14:12:54','2007-01-26 18:03:49',1);
INSERT INTO categories VALUES (97,NULL,0,7500,'2007-01-26 11:30:57','2007-01-26 18:18:53',1);
INSERT INTO categories VALUES (100,NULL,0,800,'2007-01-26 18:19:30',NULL,1);
INSERT INTO categories VALUES (101,NULL,59,0,'2007-01-31 01:39:40','2007-02-01 17:39:44',1);

#
# Dumping data for table `categories_description`
#

INSERT INTO categories_description VALUES (1,2,'�ԥ���ġ����','�ۥ磻�ȣԥ���ġ���ͥ������ˤǤ�');
INSERT INTO categories_description VALUES (2,2,'��(��)','');
INSERT INTO categories_description VALUES (3,2,'�ԥ���ġʥ��顼��','���顼�ԥ���ġ���ͥ������ˤǤ�');
INSERT INTO categories_description VALUES (4,2,'��(���顼)','');
INSERT INTO categories_description VALUES (5,2,'ǭ���꡼��(��)','');
INSERT INTO categories_description VALUES (6,2,'���å�T','�Ҷ������Σԥ���ĤǤ���');
INSERT INTO categories_description VALUES (7,2,'���襤����(for KIDS)','');
INSERT INTO categories_description VALUES (8,2,'ǭ���꡼��(���顼)','');
INSERT INTO categories_description VALUES (9,2,'�ɥ饴��(���顼)','');
INSERT INTO categories_description VALUES (10,2,'�ɥ饴��(for KIDS)','');
INSERT INTO categories_description VALUES (11,2,'�����꡼��(���顼)','');
INSERT INTO categories_description VALUES (12,2,'���˥ޥ�(���顼)','');
INSERT INTO categories_description VALUES (13,2,'���饹��(���顼)','');
INSERT INTO categories_description VALUES (14,2,'��������(���顼)','');
INSERT INTO categories_description VALUES (15,2,'���饹��(��)','');
INSERT INTO categories_description VALUES (16,2,'���˥ޥ�(��)','');
INSERT INTO categories_description VALUES (17,2,'��������(for KIDS)','');
INSERT INTO categories_description VALUES (20,2,'���եȷ�','����²�䤪ͧã����Ҥ�Ʊν�˥��եȷ���£��ޤ��礦��<br /><br />\r\n\r\n���եȷ��ϥ���å���Τ��٤Ƥξ��ʹ����˻Ȥ��ޤ���<br /><br />\r\n\r\n���եȷ����������ȡ��ޤ���ʬ�Υޥ��ڡ�����˥��եȷ��Ĺ⤬�ɲä��졢���λĹ���ϰϤ�ï��¾�οͤ˰��������ɤ�£�뤳�Ȥ��Ǥ���褦�ˤʤ�ޤ���');
INSERT INTO categories_description VALUES (21,2,'����Ϻ\'s ���쥯�ȡʥ�󥯾��ʡ�','���Υ��ƥ���ϡ֥�󥯾��ʡפΥ���ץ�Ǥ���<br />�Ĥޤꡢ�����ˤ��뾦�ʤϤ��٤�¾�Υ��ƥ���ˤ���Ͽ���졢���̤ξ��ʾ���򻲾Ȥ��Ƥ�����֤Ǥ���<br /><br />��󥯾��ʤξ��ʾ���ϡ��ɤ��餫�������Խ����������ξ����ȿ�Ǥ���ޤ���<br /><br />ʣ���Υ��ƥ���˥�󥯤��Ƥ��뾦�ʤˤϡ��־��ʥޥ��������ƥ���פ���ꤷ�Ƥ����ޤ���������㤨�Х�����ʤɾ��ʥ��ƥ�����˲�������򤹤�褦�ʾ��˻Ȥ��ޤ�����°����ޥ��������ƥ���˥��������ꤹ��ȡ����ξ��ʤ�Ŭ���оݤˤʤ�ޤ���<br /><br />\r\n\r\n<strong>ONE POINT���ڡ����󥰤ˤĤ���</strong><br />\r\n���Υ��ƥ����۲��ˤ�10�ʾ�ξ��ʤ����äƤ��ޤ���10��Ķ����ʬ�ϼ��Υڡ�����ɽ������ޤ���');
INSERT INTO categories_description VALUES (22,2,'��Ź���ꥸ�ʥ�����󥯾��ʡ�','���Υ��ƥ���ϡ����󥯾��ʤ���Ǥ���<br/>\r\n���󥯾��ʤȤϡ��Ĥޤ�¾�ΤɤΥ��ƥ��꤫����󥯤���Ƥ��ʤ��ʤ��Υ��ƥ����۲��ˤ���¸�ߤ��ʤ��˾��ʤȤ�����̣�Ǥ���<br /><br />\r\n\r\n<strong>ONE POINT��1�ˡ��ڡ����󥰤ˤĤ���</strong><br />\r\n���Υ��ƥ����۲��ˤ�10�ʾ�ξ��ʤ����äƤ��ޤ���10��Ķ����ʬ�ϼ��Υڡ�����ɽ������ޤ���<br /><br />\r\n\r\n<strong>ONE POINT��2�ˡ����ʤ��¤ӽ�ˤĤ���</strong><br />\r\n���ʤ����������Ȥ��ϡ�����̾��ABC����������������¤Ӥޤ�����<br />\r\n������ޤྦ��̾�ϴ����̤���¤�Ǥ���ʤ���ǽ�����⤤�Ǥ���<br /><br />\r\n�⤷�����ʤ��¤ӽ������Ū��Ϳ��������С����ʾ���Ρ֥����Ƚ�פ˿����򥻥åȤ��ޤ���<br />\r\nƱ�����ƥ�����ǡ��夫��֥����Ƚ�פο���������������¤Ӥޤ���<br />\r\n���åȤ��������10��20��100�ʤ��������ӤǤ⤫�ޤ��ޤ���');
INSERT INTO categories_description VALUES (23,2,'���ꥸ�ʥ��ɻ�','������������侦�ʤΥ���ץ�Ǥ���');
INSERT INTO categories_description VALUES (25,1,'[1]Category(top level)','');
INSERT INTO categories_description VALUES (25,2,'���ƥ��깽�����[1]��1���ƥ���','����ϡ����ƥ��깽�������򤹤뤿��Τ�ΤǤ���<br /><br />\r\n��������1��٥�Υ��ƥ���Ǥ���<br /><br />\r\n\r\n���Υ��ƥ���ϰʲ��Τ褦�ʥĥ꡼�����ˤʤäƤ��ޤ���<br /><br />\r\n[1]��1���ƥ���<br />\r\n����[1.1]��2���ƥ���<br />\r\n��������[1.1.1]��3���ƥ���<br />\r\n��������[1.1.2]��3���ƥ���<br />\r\n��������[1.1.3]��3���ƥ���<br />\r\n����[1.2]��2���ƥ���<br />\r\n����[1.3]��2���ƥ���(1.3)<br />\r\n��������[1.3.1]��3���ƥ���<br />\r\n��������[1.3.2]��3���ƥ���');
INSERT INTO categories_description VALUES (95,1,'[1.3.1]Category(level3)','');
INSERT INTO categories_description VALUES (95,2,'[1.3.1]��3���ƥ���','��3��٥�Υ��ƥ���Ǥ���<br />\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬�ʤ������줬�ǲ��̥��ƥ���Ǥ���<br />\r\n���ä��۲��ξ��ʰ�����ɽ������ޤ���');
INSERT INTO categories_description VALUES (26,1,'[1.1]Category(level2)','');
INSERT INTO categories_description VALUES (26,2,'[1.1]��2���ƥ���','��2��٥�Υ��ƥ���Ǥ���<br /><br />\r\n\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬¸�ߤ��ޤ���<br />\r\n���äơ����ʰ����ǤϤʤ����ҥ��ƥ���ΰ�����ɽ�����ޤ���');
INSERT INTO categories_description VALUES (27,1,'[1.2]Category(level2)','');
INSERT INTO categories_description VALUES (27,2,'[1.2]��2���ƥ���','��2��٥�Υ��ƥ���Ǥ���<br />\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬�ʤ������줬�ǲ��̥��ƥ���Ǥ���<br />\r\n���ä��۲��ξ��ʰ�����ɽ������ޤ���');
INSERT INTO categories_description VALUES (96,1,'[1.3.2]Category(level3)','');
INSERT INTO categories_description VALUES (29,1,'[1.1.1]Category(level3)','');
INSERT INTO categories_description VALUES (29,2,'[1.1.1]��3���ƥ���','��3��٥�Υ��ƥ���Ǥ���<br />\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬�ʤ������줬�ǲ��̥��ƥ���Ǥ���<br />\r\n���ä��۲��ξ��ʰ�����ɽ������ޤ���');
INSERT INTO categories_description VALUES (30,1,'[1.1.2]Category(level3)','');
INSERT INTO categories_description VALUES (30,2,'[1.1.2]��3���ƥ���','��3��٥�Υ��ƥ���Ǥ���<br />\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬�ʤ������줬�ǲ��̥��ƥ���Ǥ���<br />\r\n���ä��۲��ξ��ʰ�����ɽ������ޤ���');
INSERT INTO categories_description VALUES (31,1,'[1.1.3]Category(level3)','');
INSERT INTO categories_description VALUES (31,2,'[1.1.3]��3���ƥ���','��3��٥�Υ��ƥ���Ǥ���<br />\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬�ʤ������줬�ǲ��̥��ƥ���Ǥ���<br />\r\n���ä��۲��ξ��ʰ�����ɽ������ޤ���');
INSERT INTO categories_description VALUES (94,1,'[1.3]Category(level2)','');
INSERT INTO categories_description VALUES (94,2,'[1.3]��2���ƥ���','��2��٥�Υ��ƥ���Ǥ���<br /><br />\r\n\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬¸�ߤ��ޤ���<br />\r\n���äơ����ʰ����ǤϤʤ����ҥ��ƥ���ΰ�����ɽ�����ޤ���');
INSERT INTO categories_description VALUES (41,2,'���䤤�礻������','���ʤ��䤤�礻���ʤ���Ǥ���<br /><br />\r\n\r\n���ʤ��䤤�礻�˻��ꤷ�����ʤǤϡ��̾�ι����ʥ����������˥ܥ��������ˡ����䤤�礻�ե�����ؤΥ�󥯤�ɽ������ޤ���<br /><br />�ܵҤ�ô���Դ֤Ǥθ����Ǥ���碌��Ϥ���ǲ�����᤿�����ʤ䡢�������Ѥ�꤬ɬ�פʥ���ե��ʤɤΥ������˻Ȥ��ޤ���');
INSERT INTO categories_description VALUES (40,2,'̵������ץ��ʤ���','����ץ뾦�ʤ��󶡤ʤɲ���̵�����ʤγƼ�������Ǥ���̵�����������ץ쥼��Ⱦ��ʤ��󶡤ʤɤ�����ʱ��ѥ����󤬹ͤ����ޤ���<br /><br />\r\n\r\n���β��ʤ�ɽ�����Ĥ�̵�������뤳�Ȥ䡢���β��ʤ�̵����������Υ��ץ���������ͭ���Ȥ���ʤɺ٤������꤬��ǽ�Ǥ����ޤ���������Ʊ����̵���ˤ����ꡢȿ�Ф���������ͭ���Ȥ��뤳�Ȥ��ǽ�Ǥ���');
INSERT INTO categories_description VALUES (58,1,'SEO(META, Title..)','');
INSERT INTO categories_description VALUES (58,2,'SEO��META������������','SEO�к��ΰ�ĤȤ��ơ�Zen Cart�Ǥ�META������title����������Ū�����ꤹ�뤳�Ȥ��Ǥ��ޤ���<br /><br />\r\n\r\n���Υ��ƥ�����Ф��ơ��ʲ��Τ褦�����ꤷ�ޤ�����<br />\r\n�֥饦���Ρ֥�������ɽ���פǡ����Υڡ�����HTML��������<head>��</head>��ʬ���ǧ���ƤߤƤ���������<br /><br />\r\n\r\n\r\n�������⡧META��<br />\r\n��title��<br />\r\n�����֤��Υ��ƥ���ˤ�����Ū��title���������ꤷ�ޤ�������<br /><br />\r\n��META��keyword�ˡ�<br />\r\n�����֤��Υ��ƥ���ˤ�����Ū��META��keyword�ˤ����ꤷ�Ƥ��ޤ�,�������1,�������2,�������3��<br /><br />\r\n\r\n��META��description�ˡ�<br />\r\n�����֤��Υ��ƥ���ˤ�����Ū��META��description�ˤ����ꤷ�Ƥ��ޤ���Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus sit amet velit��������<br />');
INSERT INTO categories_description VALUES (45,2,'�ڴ��ܡ۾��ʤ��Ф�����̳������','�����Ǥϡ�������ܥ�塼��ǥ���������Ȥ�������򽸤�ޤ�����');
INSERT INTO categories_description VALUES (63,2,'DROPDOWN��RADIO������','');
INSERT INTO categories_description VALUES (59,2,'���ʥ��ץ����γƼ勵����','���ʥ��ץ����°����������򡢥��ץ����Υ������̤��㼨���ޤ���');
INSERT INTO categories_description VALUES (60,2,'TEXT������','');
INSERT INTO categories_description VALUES (61,2,'READONLY������','');
INSERT INTO categories_description VALUES (62,2,'CHCKBOX������','');
INSERT INTO categories_description VALUES (64,1,'(temporary)','');
INSERT INTO categories_description VALUES (64,2,'�����ʥ��ץ���������������','�����Υ��ƥ���ϡ�¾�ε�ǽ�������ƥ�����ǥ�����Ŭ�Ѿ��ʤ��㼨���뤿���ߤ������ߡ����ƥ���Ǥ���<br />\r\n�����Υ��ƥ��꼫�ΤˤϤ��ޤ��̣������ޤ���');
INSERT INTO categories_description VALUES (66,2,'��������ò�','���Υ��ƥ���ϡ�\r\nZen Cart�����Ĥ��ޤ��ޤʳ����ǽ����ǥᥤ��ǽ�Ȥ⤤������ò��פȡ֥�����פˤĤ�������򿼤�뤿��Υ���ץ뽸�Ǥ���<br /><br />\r\n\r\n\r\n<strong>NOTE��</strong> �ò��ȥ�����ΰ㤤<br />\r\n�ò��ϡ�����ñ�̤������ǽ�ʳ����ǽ�Ǥ���<br />\r\n������Ф��ƥ�����ϡ����ƥ���ñ�̤������ǽ�ʳ����ǽ�Ǥ���<br />\r\n����2�Ĥ�ξ���Ȥ߹�碌��Ŭ�Ѥ��뤳�Ȥ⡢�ɤ��餫��ͥ�褵���뤳�Ȥ��ǽ�Ǥ���<br /><br /><br />\r\n\r\n<strong>NOTE��</strong><br />\r\n�ʲ��γƥ��ƥ���ˤ�����Ʊ�����ʤ�3�����ļ�����Ƥ��ꡢ�㤤�ϥ��ƥ�����Ф��륻������������Ȥ��Ƥ��ޤ���<br />\r\n�ۤʤ륫�ƥ����Ʊ������Ʊ�Τ���٤�ȡ�����������ˤ��դ�ޤ��ΰ㤤�����򤷤䤹���Ȼפ��ޤ���<br /><br />\r\n\r\n���ʲ���3���ƥ���ˤ�Ʊ������ξ��ʤ�3���������äƤ��ޤ�<br />\r\n���������롧10��OFF<br />\r\n���������롧10��OFF<br />\r\n���������롧1���ߤ�8000�ߤ�<br /><br />\r\n\r\n���ʲ���3���ƥ���ˤ�Ʊ��������ò�Ŭ�Ѿ��ʤ�3���������äƤ��ޤ�<br />\r\n������������ò���ξ��Ŭ��<br />\r\n������������ò���������ͥ��<br />\r\n������������ò����ò�ͥ��<br /><br /><br />\r\n\r\n---------\r\n�ʤ���<br />\r\n�֢����ʥ��ץ��������������ѡץ��ƥ����<br />\r\n��¾�ε�ǽ�������ƥ�����ǥ�����Ŭ�Ѿ��ʤ��㼨���뤿���ߤ������ߡ����ƥ���Ǥ���<br />\r\n�����Υ��ƥ��꼫�ΤˤϤ��ޤ��̣������ޤ���');
INSERT INTO categories_description VALUES (67,2,'�����롧10��OFF','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���\r\n���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ\r\n���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���');
INSERT INTO categories_description VALUES (68,2,'�����롧500��OFF','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���\r\n���Υ��ƥ�����Ф��ơ�500�߰����Υ��������꤬����Ƥ��ꡢ\r\n���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���');
INSERT INTO categories_description VALUES (69,2,'�����롧1���ߤ�8000�ߤ�','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���\r\n���Υ��ƥ�����Ф��ơ�8000�ߡʿ��������ʡˤˤ��륻�������꤬����Ƥ��ꡢ\r\n���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���');
INSERT INTO categories_description VALUES (70,2,'�ò�������','����ñ�̤��ò����ʤ����ꤹ�뤳�Ȥ��Ǥ��ޤ���<br />\r\n���Υ��ƥ���Ǥ��ò���ǽ�δ���������Ƥ��ޤ���');
INSERT INTO categories_description VALUES (71,2,'�������Ϣetc','');
INSERT INTO categories_description VALUES (72,2,'�������оݳ����ƥ���','���Υ��ƥ���ϡ־��ʥޥ��������ƥ���פ����򤹤뤿��Υ���ץ�Ǥ���<br />\r\nʣ���Υ��ƥ���˥�󥯤��줿���ʤξ�硢���ʥޥ��������ƥ���Υ��������꤬Ŭ�Ѥ���ޤ���<br /><br />\r\n\r\n���Υ��ƥ���ˤϥ����������򤷤Ƥ��ޤ���<br />\r\n���Υ��ƥ����۲��ˤϡ�����ʣ���Υ��ƥ���˥�󥯤��줿���ʤ�2�����äƤ��ޤ���<br /><br />\r\n\r\n1�Ĥϡ����Υ��ƥ��꤬���ʥޥ��������ƥ���ʤΤǥ������Ŭ�Ѥ���ޤ���<br />\r\n���������⤦�����ξ��ʤϡ�������Ŭ�ѥ��ƥ����10��OFF�פ��ʥޥ��������ƥ���Ȥ��Ƥ��뤿�ᡢ\r\n�ʤ��Υ��ƥ��꤬�������оݤǤʤ��ˤ⤫����餺��10��OFF�ˤʤ�ޤ���');
INSERT INTO categories_description VALUES (73,2,'��������ò���ξ��Ŭ��','');
INSERT INTO categories_description VALUES (74,2,'��������ò���������ͥ��','');
INSERT INTO categories_description VALUES (75,2,'��������ò����ò�ͥ��','');
INSERT INTO categories_description VALUES (76,1,'Qty Min','');
INSERT INTO categories_description VALUES (76,2,'�Ǿ����������������ϡ��Ĥ��顪','�Ǿ���������Ȥ���<br />\r\n�֤�������10�Ĥ���Ȥ����Ƥ��������ޤ��פȤ��ä����������б��Ǥ��ޤ���');
INSERT INTO categories_description VALUES (78,1,'Qty Max','');
INSERT INTO categories_description VALUES (78,2,'���������������ͤ��ޡ����ޤǡ�','���������������ˤ��\r\n�֤���ͤ���1���ޤǡפΤ褦�˰��٤ι������㤨��������¤��뤳�Ȥ��Ǥ��ޤ���');
INSERT INTO categories_description VALUES (77,1,'Qty Min,Mix, Units','');
INSERT INTO categories_description VALUES (77,2,'����ñ�̤�Ǿ�/�������������','Zen Cart�Ǥϡ��Ǿ����������������������¤����ꡢ����ñ�̤����¡ʤ�������5�Ĥ��ġˤʤɤ���ǽ�Ǥ���');
INSERT INTO categories_description VALUES (79,1,'Shipping free products','');
INSERT INTO categories_description VALUES (79,2,'����̵��������','�����Ǥ�������̵���Ȥ���������򤴾Ҳ𤷤ޤ���<br />\r\n��������ɾ��ʤϤ�����ͭ���ξ��ʤ����������ӥ��ˤ��������˻Ȥ��ޤ���<br /><br />\r\n\r\n�ʤ���<strong>����å����Τˡ֤�����1���߰ʾ������̵�����פ�Ŭ�Ѥ�����</strong>�ʤɤΥ������ˤĤ��Ƥϡ������⥸�塼����������ƤǤ��Τǡ������Ǥϰ����ޤ���');
INSERT INTO categories_description VALUES (80,1,'Product Expected & Out of Stock','');
INSERT INTO categories_description VALUES (80,2,'����ͽ��Ⱥ߸��ڤ쾦����','���Υ��ƥ���ˤ�����ͽ�꾦�ʤȺ߸��ڤ쾦�ʤ�������Ƥ���ޤ���<br /><br />\r\n\r\n<strong>������ͽ�꾦�ʡ�</strong>\r\n���ʾ���Ρ��󶡲�ǽ���פ�̤������դ����Ϥ��������ͽ�꾦�ʤȤ��ư����ޤ���<br /><br />\r\n\r\n������ͽ�꾦�ʤξ�硢�桼���Ͼ��ʾ���α������Ǥ�����ʸ���ǽ�Ǥ���<br />\r\n������ͽ�꾦�ʤϡ�������˥塼�ξ��ʤδ���������ͽ�꾦�ʤδ��� �ǰ���ɽ��������������뤳�Ȥ��Ǥ��ޤ���<br /><br />\r\n\r\n\r\n<strong>�ں߸��ڤ쾦�ʡ�</strong>\r\n�߸˿���0�ˤʤ�ȡ����ξ��ʤˤϺ߸��ڤ쾦�ʤΥ�������ɽ������ޤ���<br /><br />\r\n\r\n���߸��ڤ쾦�ʤϡ��桼���Ͼ��ʾ���α����ϤǤ��ޤ�������ʸ�ϤǤ��ޤ���<br />\r\n���߸ˤ�0�ˤʤä��Ȥ��Τդ�ޤ��ʺ߸��ڤ쥢�������ɽ�������뤫�ɤ������ˤϡ����������Ȥΰ��������߸ˤδ������������ǽ�Ǥ����ʲ��Τ褦�����꤬�Ǥ��ޤ���<br />\r\n�������߸ˤ��ʤ��ʤä����ʤˡ��֥����Ȥ������ץܥ����<br />\r\n����������ˡ�����ڤ�ץ��������ɽ������/���ʤ�<br />\r\n�������߸��ڤ쾦�ʤ���ʸ�Ǥ���/�Ǥ��ʤ�<br />\r\n�������߸��ڤ쾦�ʤΥ��ơ������ѹ���<br />\r\n�������߸ˤ��ʤ��ʤä��龦�ʥ��ơ�������OFF�ˤ��ơ�<br />\r\n����������å׾�ؤηǺܤ�ư�Ǽ�����/���ʤ�<br />\r\n�������߸˿�������å����ƿ��ʲ��ˤʤä��鱿�ļԤ�<br />\r\n�������᡼����Τ餻��/�Τ餻�ʤ�');
INSERT INTO categories_description VALUES (81,1,'Consumption Tax','');
INSERT INTO categories_description VALUES (81,2,'�����Ǥΰ���','�����Ǥΰ�����2�̤�ͤ����ޤ���<br />\r\n�ɤ������ˡ�Ǥ�ɽ�����ʤ�Ʊ���褦���ǹ��߲��ʤ�ɽ������ޤ���������¦�����Ǿ��ʲ��ʤ�����/���ǤΤɤ���Ǵ������뤫���ۤʤ�ޤ���<br /><br />\r\n��1�˳��ǤǴ������롧<br />\r\n�������ʲ��ʤˤϾ�����ʬ��ޤ�ʤ����ʤ����Ϥ��ޤ���<br />\r\n�������ʲ���(����)�ˤϼ�ư�׻����줿�ǹ��߲��ʤ����ꡢɽ�����ʤˤϤ��줬ɽ������ޤ���<br />\r\n����������Ψ���ѹ����줿���ϡ����������Ȥ�����Ψ���Ѥ�������ǡ��оݾ������Ƥ�ȿ�Ǥ���ޤ���<br /><br />\r\n��2�����ǤǴ������롧<br />\r\n�������ʲ���(����)�˾�����ʬ��ޤ᤿���ʤ����Ϥ����Ƕ�ʬ��־����ǡפȤ��뤫���Ƕ�ʬ��֤ʤ��פˤ��ƾ��ʲ��ʤ����ǲ��ʤ�ľ�����Ϥ����2��ˡ����ޤ���<br />\r\n����ɽ�����ʤϡ����Ǥ�ɽ������ޤ���<br />\r\n������Ȥ�ȥ���å���δ�����Ģ���ǹ��߲��ʤǴ�������Ƥ�����Ϥ������Ȥ��ޤ���<br />\r\n�����ǹ��ߤ�ɽ�����ʤ򥭥å���9800�ߤˤ������ʤɤξ������ǤǴ������������狼��䤹���Ǥ���<br />\r\n�������������Ƕ�ʬ��֤ʤ��פ����ꤷ�����ϡ���Ψ���Ѥ����оݾ��ʤ��٤Ƥ�ľ��ɬ�פ�����ޤ�');
INSERT INTO categories_description VALUES (82,1,'Add Images','');
INSERT INTO categories_description VALUES (82,2,'��������ɲäβ�����Ǻܤ�����ˡ','����������ˡ��ᥤ������ʳ��ξ��ʲ�����Ǻܤ�����ˡ���������Ƥ��ޤ���<br />\r\n�¸���ˡ�ϡ���1�˼�ưɽ��������ˡ�ȡ�2���������HTMLľ�񤭤���ɽ��������ʼ�ư�ˤ�2�����פ���ޤ���<br /><br />\r\n\r\n��ǽ�Ȥ��Ƥ��̥�ΤǤ�����<br />\r\n���ʥ��ץ���󤴤Ȥ˲�����Ǻܤ�����ˡ�ˤĤ��Ƥ�ʻ���ƷǺܤ��Ƥ����ޤ���');
INSERT INTO categories_description VALUES (83,1,'Qty Discounts by Attributes','');
INSERT INTO categories_description VALUES (83,2,'���ץ������Ф�����̳��','Zen Cart�ǥܥ�塼��ǥ���������Ȥ�¸�����⤦��Ĥ���ˡ�Ȥ��ơ����ʤΥ��ץ����°�����ȤΥܥ�塼��ǥ����������������ˡ������ޤ���<br /><br />\r\n\r\n���ʥ��ץ���󤴤Ȥ�����򤹤�ȡ�<br />\r\nƱ��T����ľ��ʤ��Ф��ơ���å��������10�İʾ��100�߰��������ɡ����������ä���5�İʾ��200�߰��������Ȥ��ä����Ȥ��¸��Ǥ��ޤ���');
INSERT INTO categories_description VALUES (84,1,'Qty Discounts','Discount Quantities can be set for Products or on the individual attributes.<br />\r\nDiscounts on the Product do NOT reflect on the attributes price.<br />\r\nOnly discounts based on Special and Sale Prices are applied to attribute prices.');
INSERT INTO categories_description VALUES (84,2,'�ܥ�塼��ǥ������������','���̳���ʥܥ�塼��ǥ���������ȡˤ�������򽸤᤿���ƥ���Ǥ���<br /><br />\r\n\r\nZen Cart�Υܥ�塼��ǥ���������ȵ�ǽ��2��ˡ���ꡢ�����оݤ�¸��Ǥ��뤳�Ȥ��ۤʤ�ޤ���<br /><br />\r\n\r\n��1�ˤ��ξ��ʤ��Ф��ƿ��̳����Ԥ���ˡ<br />\r\n���������̳���δ��ܵ�ǽ�Ǥ���<br />\r\n������[���ʲ��ʤδ���(Price Manager)]�������ꤷ�ޤ���<br /><br />\r\n\r\n��2�ˤ��ξ��ʤΥ��ץ����°�����Ф��ƿ��̳����Ԥ���ˡ<br />\r\n���������ץ����°�����Ȥ˰ۤʤ���̳�����꤬��ǽ�Ǥ���<br />\r\n<br />\r\n������[���ʥ��ץ����°��]�������ꤷ�ޤ���<br />');
INSERT INTO categories_description VALUES (85,1,'OneTime Discount','');
INSERT INTO categories_description VALUES (85,2,'��󥿥�����','���ץ����°���Υ�󥿥�������ǽ�ˤĤ��Ƥ��������ƥ���Ǥ���<br />\r\n�ǽ��1���ܤ���500�߳������Ȥ��ä��Ȥ����򤷤ޤ���<br />\"���\"�ȥ͡��ߥ󥰤���Ƥ��ޤ������Ȥ�������ǲ�����äƤ�1�����������ִ�������ʤĤޤ�����ˡפȤ��Ƥ�Ȥ��ޤ���');
INSERT INTO categories_description VALUES (86,1,'Qty Unit','');
INSERT INTO categories_description VALUES (86,2,'���ʤο���ñ�̡�����ñ�̤Ǥ���ʸ','��˥å�ñ�̤����䤷�������ϡ�[���ʤο���ñ��]�����ꤷ�ޤ���<br /><br />\r\n[���ʤκǾ�����]��[���ʤκ������]��������Ȥ߹�碌��С�<br />��1000�İʾ塢200��ñ�̤Ǥ���ʸ������������ʸ��ǽ�ʺ������5000�ĤޤǤǤ���<br />\r\n�Τ褦�����䤬��ǽ�ˤʤ�ޤ���<br /><br />');
INSERT INTO categories_description VALUES (87,1,'Price-factor, Offset','');
INSERT INTO categories_description VALUES (87,2,'�ץ饤���ե��������ȥ��ե��å�','���ʥ��ץ����°������Ǥ⡢�狼��Ť餤�Ȱ�ɾ�⤤����[�ץ饤���ե�������]��[���ե��å�]�ʤɤˤĤ����������ޤ���');
INSERT INTO categories_description VALUES (89,1,'Base/Product/Option Price','');
INSERT INTO categories_description VALUES (89,2,'�١������ʡ����ʲ��ʡ����ץ����','<strong>�١������ʡ����ʲ��ʡ����ץ������ʤδط�</strong><br /><br />\r\n\r\nZen Cart�Ǥϡ��֥١������ʡפȤ��������������������˽ФƤ��ޤ���������ϴ������̤����Ϥ����־��ʲ��ʡפ�֥��ץ������ʡפȤɤ��㤦�ΤǤ��礦����<br /><br />\r\n\r\n�١������ʤϡ��ò��䥻����ʤɤ��Ͱ����׻��䡢�ץ饤���ե���������Ŭ�Ѥ���ݤδ��ۤȤ��ƻȤ��ޤ�������̾ľ����ɽ���������ʡʤ����Ǥ�ɽ�����ʤȸƤ�Ǥ����ޤ��ˤ⤳�Υ١������ʤ�ɽ������ޤ���<br /><br />\r\n\r\n���륪�ץ��������򤷤����Υ١������ʤϡ�<br /><br />\r\n\r\n��<strong>����Ū�ˤϡ�����<br />\r\n��[�١�������]��[���ʲ���]��[�ʤ��Υ��ץ����Ρ˥��ץ�������]</strong><br />\r\n\r\n�Ǥ���<br />\r\n���������ʲ���2�ĤΥե饰�ξ��֤ˤ�äƥ��ץ������ʤ�١������ʤ˴ޤ�ʤ���礬����ޤ����դ˸����Ф��Υ��ץ������Ф��Ƥɤ����դ��򤷤������ˤ�äƤ��Υե饰�����椹��櫓�Ǥ���\r\n<ul>\r\n <li>[����°���ˤ�����]�ե饰�������ʾ���������1�������Τ˱ƶ������</li>\r\n <li>[°���ˤ�����������١������ʤ˴ޤ��]�ե饰�������ץ����°�����Ȥ�����ʤ��Υ��ץ��������˱ƶ������</li>\r\n</ul>\r\n�ե饰�ȥ١������ʤδط���ɽ�ˤ���ȡ�����<br /><br />\r\n\r\n<table border=\"1\">\r\n  <tr>\r\n    <th width=\"20%\">[����°���ˤ�����]</th>\r\n   <td colspan=\"2\" width=\"60%\"><b>\"�Ϥ�\"</b></td>\r\n   <td width=\"20%\"><b>\"������\"</b></td>\r\n  </tr>\r\n  <tr>\r\n   <th>[°���ˤ�����������١������ʤ˴ޤ��]</th>\r\n   <td width=\"40%\"><b>\"�Ϥ�\"</b></td>\r\n   <td width=\"20%\">\"������\"</td>\r\n   <td>��</td>\r\n  </tr>\r\n  <tr>\r\n   <th>[�١�������]</th>\r\n   <td style=\"background:#E6E68A;\">��[���ʲ���]��[���ץ�������]</td>\r\n   <td colspan=\"2\" style=\"background:#E6E68A;\">��[���ʲ���]</td>\r\n  </tr>\r\n  <tr>\r\n   <th>ɽ�����ʤ��оݡ�</th>\r\n   <td style=\"background:#E6E68A;\">YES�ʥ١���������Ǿ��ͤʤ�ɽ��������</td>\r\n   <td colspan=\"2\" style=\"background:#E6E68A;\">ɽ���оݳ�</td>\r\n  </tr>\r\n</table>\r\n<br />\r\n�Ȥ������ˤ��Ȥ���ȡ�[����°���ˤ�����]�ե饰�ϲ����ΤΥ֥졼�����ʤ��줬�ڤ������Ƥ��������ä���ˤˤ����ꡢ[°���ˤ�����������١������ʤ˴ޤ��]�ե饰�ϳ������Υ����å��ˤ�����ޤ���');
INSERT INTO categories_description VALUES (91,1,'Product - Music','');
INSERT INTO categories_description VALUES (91,2,'���̤����ʥ����ס�Music','');
INSERT INTO categories_description VALUES (99,1,'Tips','');
INSERT INTO categories_description VALUES (93,1,'Document Type','');
INSERT INTO categories_description VALUES (93,2,'���̤����ʥ����ס�Document','���ʥ����פ��ɥ�����ȤΥ��ƥ���ϡ���1��٥�Ǥʤ��Ȥ��ޤ�ư���ʤ��褦�Ǥ���');
INSERT INTO categories_description VALUES (96,2,'[1.3.2]��3���ƥ���','��3��٥�Υ��ƥ���Ǥ���<br />\r\n���Υ��ƥ���ˤϻҥ��ƥ��꤬�ʤ������줬�ǲ��̥��ƥ���Ǥ���<br />\r\n���ä��۲��ξ��ʰ�����ɽ������ޤ���');
INSERT INTO categories_description VALUES (98,2,'���̤����ʥ����ס�Free Shipping','');
INSERT INTO categories_description VALUES (98,1,'Product - Free Shipping','');
INSERT INTO categories_description VALUES (97,1,'Mixed Product Types','This is a category with mixed product types. This includes both products and documents. There are two types of documents - Documents that are for reading and Documents that are for reading and purchasing.');
INSERT INTO categories_description VALUES (97,2,'���ޤ��ޤ����ʥ����פ�ޤ���','���ƥ�����Ф���[���ʥ����פ�����]�򤷤ʤ��������뤤�ϰ����������ʥ����פ�ʣ����Ͽ���Ƥ����С����Υ��ƥ���˰ۤʤ����ʥ����פ򺮺ߤ����뤳�Ȥ��Ǥ��ޤ���');
INSERT INTO categories_description VALUES (99,2,'����¾��Tips','');
INSERT INTO categories_description VALUES (100,1,'Download Files','');
INSERT INTO categories_description VALUES (100,2,'��������ɾ���','');
INSERT INTO categories_description VALUES (101,1,'FILE type','');
INSERT INTO categories_description VALUES (101,2,'FILE������','���Υ��ץ���󥿥��פˤ���ȡ����åץ����ѤΥե�����������ɽ������ޤ���');
INSERT INTO categories_description VALUES (1,1,'T-shirts(white)','T-shirts(white)');
INSERT INTO categories_description VALUES (2,1,'Logo T(white)','');
INSERT INTO categories_description VALUES (3,1,'T-shirts(color)','T-shirts(color)');
INSERT INTO categories_description VALUES (4,1,'Logo T(color)','');
INSERT INTO categories_description VALUES (5,1,'Cat T(white)','');
INSERT INTO categories_description VALUES (6,1,'T-shirts for kids','T-shirts for kids');
INSERT INTO categories_description VALUES (7,1,'Cute T(for Kids)','');
INSERT INTO categories_description VALUES (8,1,'Cat T(color)','');
INSERT INTO categories_description VALUES (9,1,'Dragon T(color)','');
INSERT INTO categories_description VALUES (10,1,'Dragon T(for Kids)','');
INSERT INTO categories_description VALUES (11,1,'Dog T(color)','');
INSERT INTO categories_description VALUES (12,1,'Animal T(color)','');
INSERT INTO categories_description VALUES (13,1,'Illust. T(color)','');
INSERT INTO categories_description VALUES (14,1,'Icon T(color)','');
INSERT INTO categories_description VALUES (15,1,'Illust. T(white)','');
INSERT INTO categories_description VALUES (16,1,'Animal T(white)','');
INSERT INTO categories_description VALUES (17,1,'Fish T(for Kids)','');
INSERT INTO categories_description VALUES (20,1,'Gift Certificates','Send a Gift Certificate today!<br />\r\nGift Certificates are good for anything in the store.');
INSERT INTO categories_description VALUES (21,1,'Zen\'s selection(Linked products','All of these products are \"Linked Products\".\r\n\r\nThis means that they appear in more than one Category.\r\n\r\nHowever, you only have to maintain the product in one place.\r\n\r\nThe Master Product is used for pricing purposes.');
INSERT INTO categories_description VALUES (22,1,'Shop Original(unlinked products)','shop originals. these are unlinked products.');
INSERT INTO categories_description VALUES (23,1,'wallpapers','wallpapers(download)');
INSERT INTO categories_description VALUES (40,1,'Free products','Free products');
INSERT INTO categories_description VALUES (41,1,'Call Stuff','call staff products');
INSERT INTO categories_description VALUES (45,1,'Qty Discount','');
INSERT INTO categories_description VALUES (59,1,'Option Types','Option Types');
INSERT INTO categories_description VALUES (60,1,'TEXT type','');
INSERT INTO categories_description VALUES (61,1,'READONLY Type','');
INSERT INTO categories_description VALUES (62,1,'CHCKBOX Type','');
INSERT INTO categories_description VALUES (63,1,'DROPDOWN & RADIO Type','');
INSERT INTO categories_description VALUES (66,1,'SALE & Special price','Sale & Special price');
INSERT INTO categories_description VALUES (67,1,'SALE Percent: 10% off','SALE 10% off');
INSERT INTO categories_description VALUES (68,1,'SALE Deduction: 500yen off','Sale Deduction');
INSERT INTO categories_description VALUES (69,1,'SALE New Price: set 8000 yen','Sale New Price');
INSERT INTO categories_description VALUES (70,1,'Special Price','Special Price');
INSERT INTO categories_description VALUES (71,1,'SALE etc..','');
INSERT INTO categories_description VALUES (72,1,'Not SALE','');
INSERT INTO categories_description VALUES (73,1,'SALE x Special','');
INSERT INTO categories_description VALUES (74,1,'SALE x Special: skip special','');
INSERT INTO categories_description VALUES (75,1,'SALE x Special: skip SALE','');

#
# Dumping data for table `customers`
#

INSERT INTO customers (customers_id, customers_gender, customers_firstname, customers_lastname, customers_dob, customers_email_address, customers_nick, customers_default_address_id, customers_telephone, customers_fax, customers_password, customers_newsletter, customers_group_pricing, customers_email_format, customers_authorization, customers_referral) VALUES (NULL, 'm', 'Bill', 'Smith', '2001-01-01 00:00:00', 'root@localhost', '', 1, '12345', '', 'd95e8fa7f20a009372eb3477473fcd34:1c', '0', 0, 'TEXT', 0, '');

#
# Dumping data for table `customers_info`
#

INSERT INTO customers_info (customers_info_id, customers_info_date_of_last_logon, customers_info_number_of_logons, customers_info_date_account_created, customers_info_date_account_last_modified, global_product_notifications) VALUES (1, '0001-01-01 00:00:00', 0, '2004-01-21 01:35:28', '0001-01-01 00:00:00', 0);

#
# Dumping data for table `ezpages`
#

INSERT INTO ezpages (pages_id, languages_id, pages_title, alt_url, alt_url_external, pages_html_text, status_header, status_sidebox, status_footer, status_toc, header_sort_order, sidebox_sort_order, footer_sort_order, toc_sort_order, page_open_new_window, page_is_ssl, toc_chapter) VALUES (1, 1, 'EZ�ڡ���', '', '', '���Υڡ����ϡ��إå��ˤ����EZ�ڡ����פ����󥯤���Ƥ���ڡ������Υᥤ��ڡ����Ǥ���<br />\r\n<br />\r\n<strong>��ա�EZ�ڡ����γ�����ˡ�ˤĤ��Ƥϡ�EZ(��������)�ڡ����Ȥ�?�פ򻲾Ȥ��Ƥ���������</strong><br />\r\n<br />\r\n��EZ�ڡ����ץܥ���ϡ��إå��������ɥܥå������եå��Τ����줫���ޤ������Ƥξ���ɽ�����뤳�Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n���롼�ԥ󥰤����ꤹ��ȡ����롼�ײ����줿�ڡ��������ܼ���ɽ�����뤳�Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n¾�Υڡ����ϡ����Υᥤ��ڡ��������֤����ܼ������󥯤��뤫���ޤ��ϥإå����˥�˥塼�Ȥ���ɽ�����뤳�Ȥ�Ǥ��ޤ������ߤ����ꤷ�Ƥ���������<br />\r\n<br />\r\n', 1, 0, 0, 1, 10, 0, 0, 10, 0, 0, 10),
(2, 2, '�ɲåڡ���1(EZ�ڡ�������)', '', '', '���Υڡ������ɲåڡ�������Ǥ���<br />\r\n<br />\r\n���롼��ID10�ǥ��롼�ԥ󥰤��졢�ܼ��ϡ�ɽ����˽��äƥ����Ȥ���Ƥ��ޤ���<br />\r\n<br />\r\n���Υڡ����ˤϥإå����եå��������ɥܥå�������Υ�󥯤Ϥʤ����ᥤ��ڡ������ܼ���ɽ������ޤ���<br />\r\n<br />\r\n', 0, 0, 0, 1, 0, 0, 0, 30, 0, 0, 10),
(3, 2, '�ɲåڡ���2(EZ�ڡ�������)', '', '', '���Υڡ����ϡ����롼��ID10��°����⤦1�Ĥ��ɲåڡ����Ǥ���<br />\r\n<br />\r\n���롼�����ɽ�����10��20��30�Ȥ��ä���Ǥ���м�ͳ�˥ʥ�С��դ����뤳�Ȥ��Ǥ��ޤ����ޤ�����ǥڡ������ɲä����ꡢ���Ǥˤ���ڡ����ؤΥ�󥯤��ɲä����ꤹ�뤳�Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n���롼�פ�ñ�̤ˤޤȤ�뤳�Ȥ��Ǥ���ڡ�������������¤Ϥ���ޤ���<br />\r\n<br />\r\n[����][����]�ܥ���䡢�ܼ���ɽ������ɽ���ˤĤ��Ƥϡ�������̤��ڤ��ؤ��뤳�Ȥ��Ǥ��ޤ���', 0, 0, 0, 1, 0, 0, 0, 40, 0, 0, 10),
(4, 2, 'My���(EZ�ڡ�������)', '', '', '����ϡ������ɥܥå����˥�󥯤�ɽ�������ñ�ȤΥڡ�������Ǥ���<br />\r\n<br />\r\n���Υڡ����ϾϤ�°���Ƥ��ʤ��Τǡ�¾���ɲåڡ����ؤΥ�󥯤Ϥ���ޤ���<br />\r\n<br />\r\n���Ȥ���ڡ�������������Ϥ��ܼ��ˤĤ������ꤹ�뤳�Ȥ�Ǥ��ޤ���<br />\r\n<br />\r\n�Ϥ�°���Ƥ��ʤ��ڡ����Ǥϡ�[����] [����] �ܥ�����ܼ��ϼ�ưŪ����ɽ���Ȥʤ�ޤ���', 0, 1, 0, 0, 0, 10, 0, 0, 0, 0, 0),
(5, 2, '�����Υڡ���(EZ�ڡ�������)', '', '', '�ڡ��������ȥ�ȥ��̾�ϡ�����ƥ�Ĥ����Ƥ��θ���Ƽ�ͳ�����ꤹ�뤳�Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n�ޤ�����󥯤�ɽ�����ϥإå��������ɥܥå������եå�����1������������Ƥʤɤ�����Ǥ��ޤ���<br />\r\n<br />\r\n���Υڡ�������Υ�󥯤�Ʊ�쥦����ɥ��ǳ������̥�����ɥ��ǳ��������������󥻥��奢(��SSL)�ڡ����������奢(SSL)�ڡ��������ʤɤ����ꤹ�뤳�Ȥ�Ǥ��ޤ���', 0, 1, 0, 0, 0, 20, 0, 0, 0, 0, 0),
(6, 2, '����������(Shared)�ڡ���(EZ�ڡ�������)', '', '', '���Υڡ����ϥإå��������ɥܥå������եå�����Υ���������(Shared)��󥯤�ĥ��줿�ڡ�������Ǥ���<br />\r\n<br />\r\n�����Ƚ�Ϥ狼��䤹��50�����ꤷ�Ƥ���ޤ������إå��������ɥܥå������եå��Τ��줾��ǰ㤦��Τˤ��뤳�Ȥ�Ǥ��ޤ���<br />\r\n<br />\r\n', 1, 1, 1, 0, 50, 50, 50, 0, 0, 0, 0),
(7, 2, 'My���������(EZ�ڡ�������)', 'index.php?main_page=account', '', '', 0, 0, 1, 0, 0, 0, 10, 0, 0, 1, 0),
(8, 2, '�����ȥޥå�(EZ�ڡ�������)', 'index.php?main_page=site_map', '', '', 0, 1, 1, 0, 0, 40, 20, 0, 0, 0, 0),
(9, 2, '�Ŀ;����ݸ�����(EZ�ڡ�������)', 'index.php?main_page=privacy', '', '', 1, 0, 1, 0, 30, 0, 40, 0, 0, 0, 0),
(10, 2, 'Zen Cart�ˤĤ���(EZ�ڡ�������)', '', 'http://www.zen-cart.com', '', 1, 0, 0, 0, 60, 0, 0, 0, 1, 0, 0),
(11, 2, '���եȷ��ˤĤ���(EZ�ڡ�������)', 'index.php?main_page=index&cPath=21', '', '', 0, 1, 0, 0, 0, 60, 0, 0, 0, 0, 0),
(12, 2, 'DVD - ���������(EZ�ڡ�������)', 'index.php?main_page=index&cPath=3_10', '', '', 0, 0, 1, 0, 0, 0, 60, 0, 0, 0, 0),
(13, 2, 'Google�ˤĤ���(EZ�ڡ�������)', '', 'http://www.google.com', '', 0, 1, 0, 0, 0, 70, 0, 0, 1, 0, 0),
(14, 2, 'EZ(��������)�ڡ����Ȥ�?', '', '', '<table cellspacing="4" cellpadding="4" border="3" align="center" style="width: 80%;"><tbody><tr><td><span style="font-style: italic;"><span style="font-weight: bold;">��ա�����EZ�ڡ����ϡ�HTMLarea��Ȥäƺ������ޤ������Ǥ��Τǡ�¾�Υ��ǥ����ǤϤ��ޤ�ɽ���Ǥ��ʤ���ǽ��������ޤ���</span></span></td></tr></tbody></table><br />\r\n<br />\r\n<span style="font-weight: bold; color: rgb(255, 0, 0);">�ޤȤ�</span><br />\r\n<br />\r\n<span style="font-weight: bold;">EZ�ڡ���</span>�Ǥϡ��ɲåڡ����κ����䡢��󥯤�������ñ�˹Ԥ����Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n�ɲåڡ��������Ӥ��㡧<br />\r\n<ul><li>�����ڡ���</li><li>���������󥯤Υڡ���</li><li>�����ȳ���󥯤Υڡ���</li><li>�����奢(SSL)/�󥻥��奢(��SSL)�ڡ���</li><li>Ʊ�쥦����ɥ��ǳ����ڡ���/�̥�����ɥ��ǳ����ڡ���</li></ul>����˥ڡ���Ʊ�Τ򥰥롼�פǤޤȤᡢ���Ρ��ܼ��פ�ɽ�����뤳�Ȥ�Ǥ��ޤ���<br />\r\n<br />\r\n<span style="font-weight: bold; color: rgb(255, 0, 0);">��󥯤�̿̾</span><br />\r\n<br />\r\n��󥯤ϥڡ��������ȥ��̿̾����ޤ������٤ƤΥ�󥯤ϡ���ǽ���뤿��ˤϥڡ��������ȥ뤬ɬ�פǤ��ꡢ�����˺���ȥ�󥯤��ɲä��뤳�Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n<span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">��󥯤�����</span><br />\r\n<br />\r\n</span>�������̤ǡ��إå��������ɥܥå������եå��Τɤ���ɽ�����뤫�����ꤹ��ɬ�פ�����ޤ���3�������Ƥ�ɽ�����뤳�Ȥ⡢���ߤξ�������ɽ�����뤳�Ȥ�Ǥ��ޤ���<br />\r\n30��إå��ˡ�50�򥵥��ɥܥå����ˡ��Ȥ��ä�������ǽ�Ǥ���<br />\r\n�ʥ�С��ο������ϼ�ͳ�Ǥ��������Ȥ���10��20��30�Ȥ����ʥ�С��դ��򤹤�С������Ȥ���Ω�����ޤ��夫��(�����δ֤�)��󥯤��ɲä��뤳�Ȥ�Ǥ���Ǥ��礦��<br />\r\n<br />\r\n��ա��ͤ��0�פˤ���ȥ�󥯤�ɽ������ʤ��ʤ�ޤ���<br />\r\n<br />\r\n<span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">���̥�����ɥ��ǳ����פȥ����奢(SSL�б�)�ڡ���</span><br />\r\n</span><br />\r\nEZ�ڡ����Ǥϡ��������̾�Τ褦��Ʊ�쥦����ɥ��ǳ������Ȥ⡢�ޤ�����������ɥ��ǳ����褦�����ꤹ�뤳�Ȥ�Ǥ��ޤ���<br />\r\n�ޤ��������򥻥��奢(SSL�б�)�ڡ����ǳ��������󥻥��奢(SSL���б�)�ڡ����Ȥ��Ƴ����������ꤹ�뤳�Ȥ�Ǥ��ޤ���<br />\r\n<br />\r\n<span style="font-weight: bold; color: rgb(255, 0, 0);">�֥��롼�ԥ󥰡�</span><br style="font-weight: bold; color: rgb(255, 0, 0);" /><br />\r\n�֥��롼�ԥ󥰡פϡ�EZ�ڡ���Ʊ�Τ�ޤȤ���ߤ��󥯤����륹�ޡ��Ȥ���ˡ�Ǥ���<br />\r\n<br />\r\nEZ�ڡ����Ǻ������줿ʣ���Υڡ�����������ݤˡ����Υᥤ��ڡ����ؤΥ�󥯤�إå��������ɥܥå������եå��Τ����줫��ɽ������������򤷤ޤ��礦��<br />\r\n���ˡ����Υ�󥯤ȴ�Ϣ�Ť��륰�롼��ID�����ꤷ�ޤ���<br />\r\n�����ơ����롼�����ɽ��������ꤷ�Ƥ������������줬�ܼ����¤ӽ�ˤʤ�ޤ���<br />\r\n<br />\r\n<span style="font-weight: bold; font-style: italic;">��ա��إå��������ɥܥå������եå��ˤϡ����롼�פ˴ޤޤ�����ƤΥڡ������󥯤Ȥ���ɽ�����뤳�Ȥ�Ǥ����إå��ˤ�A�Ȥ����ڡ����򡢥եå��ˤ�B�Ȥ����ڡ����򡢤����ꤹ�뤳�Ȥ�Ǥ��ޤ����ޤ��ϡ����롼�פΥᥤ��ڡ���������Υڡ����������Ƥ���ݤˤ���ɽ�������󥯤����ꤹ�뤳�Ȥ�Ǥ��ޤ���</span><br />\r\n<br />\r\n<span style="color: rgb(255, 0, 0); font-weight: bold;">�ֳ�����󥯡�</span><br />\r\n<br />\r\n�ֳ�����󥯡פϡ����ʤ��Υ���å׳��Υڡ����ؤΥ�󥯤Ǥ������Υڡ����ؤΥ�󥯤� "http://www.sashbox.net/" �Τ褦�����ꤷ�ޤ���<br />\r\n������Ʊ�쥦����ɥ��ǳ��������̥�����ɥ��ǳ����������ꤹ�뤳�Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n<span style="color: rgb(255, 0, 0); font-weight: bold;">��������󥯡�</span><br />\r\n<br />\r\n��������󥯡פϤ��ʤ��Υ���å���Υڡ����ؤΥ�󥯤Ǥ������Υڡ����ؤΥ�󥯤ϡ����Ȥ���ID21�Υ��ƥ���إ�󥯤���ݤˤ� "index.php?main_page=index&cPath=21" �Τ褦�����Хѥ������ꤷ�ޤ������Хѥ��ǵ�������ݤˤϡ��ɥᥤ����ѹ������ݤʤɤ˽�������ɬ�פ����뤳�Ȥ���դ��Ƥ���������<br />\r\n������Ʊ�쥦����ɥ��ǳ��������̥�����ɥ��ǳ����������ꤹ�뤳�Ȥ��Ǥ��ޤ���<br />\r\n<br />\r\n<span style="font-weight: bold; color: rgb(255, 0, 0);">EZ�ڡ������Խ��ˤĤ��Ƥ����</span><br />\r\n<br />\r\nHTMLarea�Τ褦�ʥ��ǥ�����ȤäƤ���ݡ�HTML�Խ����ꥢ��Enter�����ʤɤ򲡤��ȡ�����ƥ�Ĥ��ɲä��줿�ȸ��ʤ����(���ɲåڡ����פȤʤ�)���Ȥ�����ޤ������ξ�硢������󥯤䳰����󥯤������̵���ˤʤäƤ��ޤ��ޤ��Τ���դ��Ƥ���������<br />\r\n<br />\r\n<span style="font-weight: bold; color: rgb(255, 0, 0);">�ִ����ԤˤΤ�ɽ��������</span><br />\r\n<br />\r\n����ϡ��ºݤ˲�ư���Ƥ��륷��åפ�EZ�ڡ������Խ�����ݤ�����������Ǥ���<br />\r\nEZ�ڡ����Υإå��������ɥܥå������եå��ؤ�ɽ����<br />\r\n<ul><li>����</li><li>����</li><li>�����ԤˤΤ�ɽ��</li></ul>������򤹤뤳�Ȥ��Ǥ��ޤ����ִ����ԤˤΤ�ɽ���פˤ��Ƥ����ȡ��������̤Ρ֡إ��ƥʥ����- ���ꤷ��IP���ɥ쥹������פ����ꤷ��IP���ɥ쥹�ǥ������������ݤˤ�����EZ�ڡ����ؤΥ�󥯤�ɽ������ޤ���<br />\r\n<br />\r\n', 0, 0, 0, 1, 0, 0, 0, 20, 0, 0, 10);

#
# Dumping data for table `featured`
#

INSERT INTO featured VALUES (1,18,'2007-01-18 00:38:40',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO featured VALUES (2,2,'2007-01-18 00:38:50',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO featured VALUES (3,4,'2007-01-18 00:38:59',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO featured VALUES (4,9,'2007-01-18 00:39:11',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO featured VALUES (5,28,'2007-01-18 00:39:33',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO featured VALUES (6,11,'2007-01-18 00:40:27',NULL,'0001-01-01',NULL,1,'0001-01-01');

#
# Dumping data for table `group_pricing`
#

INSERT INTO group_pricing (group_id, group_name, group_percentage, last_modified, date_added) VALUES (1, '10%���', '10.00', NULL, '2004-04-29 00:21:04');

#
# Dumping data for table `manufacturers`
#

INSERT INTO manufacturers VALUES (1,'ABC������',NULL,'2007-01-17 14:59:37','2007-01-21 22:22:03');
INSERT INTO manufacturers VALUES (2,'���Ĳ�T����ĳ������',NULL,'2007-01-21 22:19:08','2007-01-21 22:19:55');
INSERT INTO manufacturers VALUES (3,'ZenMarT����',NULL,'2007-01-21 22:20:41',NULL);
INSERT INTO manufacturers VALUES (4,'XYZ�ǥ�����',NULL,'2007-01-21 22:21:38',NULL);

#
# Dumping data for table `manufacturers_info`
#

INSERT INTO manufacturers_info VALUES (2,1,'',0,NULL);
INSERT INTO manufacturers_info VALUES (2,2,'',0,NULL);
INSERT INTO manufacturers_info VALUES (3,1,'',0,NULL);
INSERT INTO manufacturers_info VALUES (3,2,'',0,NULL);
INSERT INTO manufacturers_info VALUES (4,1,'',0,NULL);
INSERT INTO manufacturers_info VALUES (4,2,'',0,NULL);

#
# Dumping data for table `media_clips`
#

INSERT INTO media_clips VALUES (1,1,1,'thehunter.mp3','2007-01-26 10:50:45','0001-01-01 00:00:00');
INSERT INTO media_clips VALUES (3,1,1,'help.mp3','2007-01-26 11:03:23','0001-01-01 00:00:00');

#
# Dumping data for table `media_manager`
#

INSERT INTO media_manager VALUES (1,'Help!','2007-01-26 11:03:23','2007-01-26 10:50:30');
INSERT INTO media_manager VALUES (2,'Russ Tippins - The Hunter','2007-01-26 10:51:28','2007-01-26 10:51:10');

#
# Dumping data for table `media_to_products`
#

INSERT INTO media_to_products VALUES (1,213);
INSERT INTO media_to_products VALUES (1,229);
INSERT INTO media_to_products VALUES (2,212);

#
# Dumping data for table `music_genre`
#

INSERT INTO music_genre VALUES (1,'Jazz','2007-01-26 10:45:31',NULL);
INSERT INTO music_genre VALUES (2,'Rock','2007-01-26 10:45:46',NULL);

#
# Dumping data for table `product_music_extra`
#

INSERT INTO product_music_extra VALUES (212,1,0,2);
INSERT INTO product_music_extra VALUES (213,0,1,2);
INSERT INTO product_music_extra VALUES (229,0,1,2);

#
# Dumping data for table `product_types_to_category`
#

INSERT INTO product_types_to_category VALUES (2,91);
INSERT INTO product_types_to_category VALUES (3,93);
INSERT INTO product_types_to_category VALUES (4,93);
INSERT INTO product_types_to_category VALUES (1,97);
INSERT INTO product_types_to_category VALUES (3,97);
INSERT INTO product_types_to_category VALUES (4,90);
INSERT INTO product_types_to_category VALUES (4,92);
INSERT INTO product_types_to_category VALUES (4,97);
INSERT INTO product_types_to_category VALUES (5,98);

#
# Dumping data for table `products`
#

INSERT INTO products VALUES (1,1,1000,'SAMPLE-T01','sample_t/t-shirt_01.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-21 22:27:22',NULL,0.25,1,1,3,0,1,1,0,0,0,0,0,1,0,0,0,0,4050.0000,2,1,0,0,0,0,0);
INSERT INTO products VALUES (2,1,1000,'SAMPLE-T02','sample_t/t-shirt_02.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-21 22:28:03',NULL,0.25,1,1,3,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,4,1,0,0,0,0,0);
INSERT INTO products VALUES (3,1,1000,'SAMPLE-T03','sample_t/t-shirt_03.gif',4500.0000,0,'2007-01-16 15:03:56','2007-01-21 22:27:35',NULL,0.25,1,1,3,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,2,1,0,0,0,0,0);
INSERT INTO products VALUES (4,1,1000,'SAMPLE-T04','sample_t/t-shirt_04.gif',4500.0000,0,'2007-01-16 15:03:56','2007-01-20 17:48:17',NULL,0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,2,1,0,0,0,0,0);
INSERT INTO products VALUES (5,1,1000,'SAMPLE-T05','sample_t/t-shirt_05.gif',4500.0000,0,'2007-01-16 15:03:56','2007-01-21 22:27:48',NULL,0.25,1,1,3,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (6,1,1000,'SAMPLE-T06','sample_t/t-shirt_06.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-16 15:03:58',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,5,1,0,0,0,0,0);
INSERT INTO products VALUES (7,1,1000,'SAMPLE-T06KIDS','sample_t/t-shirt_06.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (8,1,1000,'SAMPLE-T07','sample_t/t-shirt_07.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (9,1,1000,'SAMPLE-T08','sample_t/t-shirt_08.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,5,1,0,0,0,0,0);
INSERT INTO products VALUES (10,1,1000,'SAMPLE-T09','sample_t/t-shirt_09.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (11,1,1000,'SAMPLE-T10','sample_t/t-shirt_10.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:42:21',NULL,0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,5,1,0,0,0,0,0);
INSERT INTO products VALUES (12,1,0,'SAMPLE-T10KIDS','sample_t/t-shirt_10.gif',3800.0000,0,'2007-01-16 15:03:57','2007-02-01 18:55:14',NULL,0.2,1,1,1,0,1,1,0,0,0,0,0,1,0,10,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (13,1,1000,'SAMPLE-T11','sample_t/t-shirt_11.gif',4500.0000,0,'2007-01-16 15:03:57','2007-02-01 18:56:23',NULL,0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (14,1,0,'SAMPLE-T12','sample_t/t-shirt_12.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:11:55',NULL,0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,12,0,0,4500.0000,5,1,0,0,0,0,0);
INSERT INTO products VALUES (15,1,1000,'SAMPLE-T13','sample_t/t-shirt_13.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (16,1,1000,'SAMPLE-T13KIDS','sample_t/t-shirt_13.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (17,1,1000,'SAMPLE-T14','sample_t/t-shirt_14.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,11,0,0,0,0,0,0);
INSERT INTO products VALUES (18,1,1000,'SAMPLE-T15','sample_t/t-shirt_15.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (19,1,1000,'SAMPLE-T16','sample_t/t-shirt_16.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:25:53',NULL,0.25,1,1,4,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (20,1,1000,'SAMPLE-T16KIDS','sample_t/t-shirt_16.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-21 22:30:37',NULL,0.2,1,1,4,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (21,1,1000,'SAMPLE-T17','sample_t/t-shirt_17.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-21 22:26:50',NULL,0.25,1,1,3,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,13,1,0,0,0,0,0);
INSERT INTO products VALUES (22,1,1000,'SAMPLE-T18','sample_t/t-shirt_18.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-21 22:26:38',NULL,0.25,1,1,3,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (23,1,1000,'SAMPLE-T19','sample_t/t-shirt_19.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,14,1,0,0,0,0,0);
INSERT INTO products VALUES (24,1,1000,'SAMPLE-T20','sample_t/t-shirt_20.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,14,1,0,0,0,0,0);
INSERT INTO products VALUES (25,1,1000,'SAMPLE-T21','sample_t/t-shirt_21.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (26,1,1000,'SAMPLE-T21KIDS','sample_t/t-shirt_21.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (27,1,1000,'SAMPLE-T22','sample_t/t-shirt_22.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:31:27',NULL,0.25,1,1,4,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (28,1,1000,'SAMPLE-T22KIDS','sample_t/t-shirt_22.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-21 22:30:49',NULL,0.2,1,1,4,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (29,1,1000,'SAMPLE-T23','sample_t/t-shirt_23.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-16 15:03:58',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,14,1,0,0,0,0,0);
INSERT INTO products VALUES (30,1,1000,'SAMPLE-T23KIDS','sample_t/t-shirt_23.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (31,1,1000,'SAMPLE-T24','sample_t/t-shirt_24.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,14,1,0,0,0,0,0);
INSERT INTO products VALUES (32,1,1000,'SAMPLE-T25','sample_t/t-shirt_25.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-18 00:35:01',NULL,0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,14,1,0,0,0,0,0);
INSERT INTO products VALUES (33,1,1000,'SAMPLE-T26','sample_t/t-shirt_26.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (34,1,1000,'SAMPLE-T27','sample_t/t-shirt_27.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (35,1,1000,'SAMPLE-T28','sample_t/t-shirt_28.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (36,1,1000,'SAMPLE-T28KIDS','sample_t/t-shirt_28.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (37,1,1000,'SAMPLE-T29','sample_t/t-shirt_29.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (38,1,1000,'SAMPLE-T30','sample_t/t-shirt_30.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-26 03:38:47',NULL,0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,9,1,0,0,0,0,0);
INSERT INTO products VALUES (39,1,1000,'SAMPLE-T30KIDS','sample_t/t-shirt_30.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (40,1,1000,'SAMPLE-T31','sample_t/t-shirt_31.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (41,1,1000,'SAMPLE-T31KIDS','sample_t/t-shirt_31.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (42,1,1000,'SAMPLE-T32','sample_t/t-shirt_32.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (43,1,1000,'SAMPLE-T33','sample_t/t-shirt_33.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 21:26:40','2007-06-10 00:00:00',0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (44,1,1000,'SAMPLE-T34','sample_t/t-shirt_34.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (45,1,1000,'SAMPLE-T35','sample_t/t-shirt_35.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (46,1,1000,'SAMPLE-T36','sample_t/t-shirt_36.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:26:23',NULL,0.25,1,1,4,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (47,1,1000,'SAMPLE-T37','sample_t/t-shirt_37.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (48,1,1000,'SAMPLE-T38','sample_t/t-shirt_38.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-21 21:25:57','2007-04-01 00:00:00',0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,13,1,0,0,0,0,0);
INSERT INTO products VALUES (49,1,1000,'SAMPLE-T39','sample_t/t-shirt_39.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-18 00:37:13',NULL,0.25,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (50,1,1000,'SAMPLE-T40','sample_t/t-shirt_40.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:24:08',NULL,0.25,1,1,4,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,15,1,0,0,0,0,0);
INSERT INTO products VALUES (51,1,1000,'SAMPLE-T41','sample_t/t-shirt_41.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:23:36',NULL,0.25,1,1,2,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,16,1,0,0,0,0,0);
INSERT INTO products VALUES (52,1,1000,'SAMPLE-T41KIDS','sample_t/t-shirt_41.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-21 22:28:43',NULL,0.2,1,1,2,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (53,1,1000,'SAMPLE-T42','sample_t/t-shirt_42.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:22:48',NULL,0.25,1,1,1,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,16,1,0,0,0,0,0);
INSERT INTO products VALUES (54,1,1000,'SAMPLE-T43','sample_t/t-shirt_43.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-21 22:25:40',NULL,0.25,1,1,1,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,12,1,0,0,0,0,0);
INSERT INTO products VALUES (55,1,1000,'SAMPLE-T43KIDS','sample_t/t-shirt_43.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-21 22:29:01',NULL,0.2,1,1,1,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (56,1,1000,'SAMPLE-T44','sample_t/t-shirt_44.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:25:19',NULL,0.25,1,1,1,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (57,1,1000,'SAMPLE-T44KIDS','sample_t/t-shirt_44.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-21 21:58:29','2007-06-03 00:00:00',0.2,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,17,1,0,0,0,0,0);
INSERT INTO products VALUES (58,1,1000,'SAMPLE-T45','sample_t/t-shirt_45.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-16 15:03:58',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (59,1,1000,'SAMPLE-T45KIDS','sample_t/t-shirt_45.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (60,1,1000,'SAMPLE-T46','sample_t/t-shirt_46.gif',4500.0000,0,'2007-01-16 15:03:58','2007-01-21 22:24:33',NULL,0.25,1,1,1,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (61,1,1000,'SAMPLE-T46KIDS','sample_t/t-shirt_46.gif',3800.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.2,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,3800.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (62,1,1000,'SAMPLE-T47','sample_t/t-shirt_47.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:22:26',NULL,0.25,1,1,1,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,16,1,0,0,0,0,0);
INSERT INTO products VALUES (63,1,1000,'SAMPLE-T48','sample_t/t-shirt_48.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:25:02','2007-08-12 00:00:00',0.25,1,1,2,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,12,1,0,0,0,0,0);
INSERT INTO products VALUES (64,1,1000,'SAMPLE-T49','sample_t/t-shirt_49.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-21 22:23:12',NULL,0.25,1,1,2,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,16,1,0,0,0,0,0);
INSERT INTO products VALUES (65,1,1000,'SAMPLE-T50','sample_t/t-shirt_50.gif',4500.0000,0,'2007-01-16 15:03:57','2007-01-16 15:03:57',NULL,0.25,1,1,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,2,1,0,0,0,0,0);
INSERT INTO products VALUES (90,1,1000,'SAMPLE-WP03','sample_w/wallpaper_03.jpg',200.0000,1,'2007-01-16 15:50:07','2007-01-23 11:34:23',NULL,0,1,1,0,0,1,1,0,0,0,0,2,1,0,3,0,0,200.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (89,1,1000,'SAMPLE-WP02','sample_w/wallpaper_02.jpg',200.0000,1,'2007-01-16 15:50:07','2007-01-23 11:34:10',NULL,0,1,1,0,0,1,1,0,0,0,0,2,1,0,2,0,0,200.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (88,1,1000,'SAMPLE-WP01','sample_w/wallpaper_01.jpg',200.0000,1,'2007-01-16 15:50:07','2007-01-23 11:33:59',NULL,0,1,1,0,0,1,1,0,0,0,0,2,1,0,1,0,0,200.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (70,1,1000,'GIFT005','gift_certificates/gv_5.gif',500.0000,0,'2007-01-16 15:03:58','2007-01-20 14:40:45',NULL,0,1,0,0,0,1,1,0,0,0,0,0,1,0,500,0,0,500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (71,1,1000,'GIFT 010','gift_certificates/gv_10.gif',1000.0000,0,'2007-01-16 15:03:58','2007-01-20 14:37:46',NULL,0,1,0,0,0,1,1,0,0,0,0,0,1,0,1000,0,0,1000.0000,20,1,0,0,0,0,0);
INSERT INTO products VALUES (72,1,1000,'GIFT025','gift_certificates/gv_25.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-20 14:38:41',NULL,0,1,0,0,0,1,1,0,0,0,0,0,1,0,2500,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (73,1,1000,'GIFT050','gift_certificates/gv_50.gif',5000.0000,0,'2007-01-16 15:03:58','2007-01-27 20:58:47',NULL,0,1,0,0,0,1,1,0,0,0,0,0,1,0,5000,0,0,5000.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (74,1,1000,'GIFT100','gift_certificates/gv_100.gif',10000.0000,0,'2007-01-16 15:03:58','2007-01-20 14:38:11',NULL,0,1,0,0,0,1,1,0,0,0,0,0,1,0,10000,0,0,10000.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (75,1,1000,'GIFTSELECT','gift_certificates/gv.gif',0.0000,0,'2007-01-16 15:03:58','2007-01-22 10:56:42',NULL,0,1,0,0,0,1,1,0,0,0,0,0,1,0,20000,0,0,0.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (76,1,1000,'NOTLINK01','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:28:51',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (77,1,1000,'NOTLINK02','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:29:10',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (78,1,1000,'NOTLINK03','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:29:22',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (79,1,1000,'NOTLINK04','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:29:33',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2000.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (80,1,1000,'NOTLINK05','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:29:52',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (81,1,1000,'NOTLINK08','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:30:45',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (82,1,1000,'NOTLINK10','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:31:56',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (83,1,1000,'NOTLINK06','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:31:04',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (84,1,1000,'NOTLINK07','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:31:20',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (85,1,1000,'NOTLINK12','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:32:37',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (86,1,1000,'NOTLINK09','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:31:41',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (87,1,1000,'NOTLINK11','sample_t/t-sample.gif',2500.0000,0,'2007-01-16 15:03:58','2007-01-18 00:32:23',NULL,1,1,1,0,0,1,1,0,0,0,0,0,1,0,0,0,0,2500.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (92,1,1000,'FREEALL','sample_t/t-sample.gif',0.0000,0,'2007-01-16 15:50:07','2007-01-26 15:10:55',NULL,1,1,0,0,0,1,1,0,1,0,0,1,1,0,10,0,0,0.0000,40,1,0,0,0,0,0);
INSERT INTO products VALUES (93,1,1000,'FREE3','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 15:50:07','2007-01-18 09:59:02',NULL,1,1,0,0,0,1,1,0,1,0,0,0,1,0,40,0,0,0.0000,40,1,0,0,0,0,0);
INSERT INTO products VALUES (91,1,1000,'SAMPLE-WP04','sample_w/wallpaper_04.jpg',200.0000,1,'2007-01-16 15:50:07','2007-01-23 11:34:34',NULL,0,1,1,4,0,1,1,0,0,0,0,2,1,0,4,0,0,200.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (222,1,1000,'FREESHIP1','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-26 15:27:23','2007-01-26 15:39:06',NULL,50,1,0,0,0,1,1,0,0,0,0,1,1,0,1,0,0,4000.0000,79,1,0,0,0,0,0);
INSERT INTO products VALUES (95,1,1000,'FREE1','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 15:50:07','2007-01-18 09:57:54',NULL,10,1,0,0,0,1,1,0,1,0,0,1,1,0,20,0,0,0.0000,40,1,0,0,0,0,0);
INSERT INTO products VALUES (101,1,1000,'CALL3','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 17:24:53','2007-01-24 09:52:47',NULL,1,1,0,0,0,1,1,0,0,1,0,0,1,0,0,0,0,8100.0000,64,1,0,0,0,0,0);
INSERT INTO products VALUES (98,1,1000,'FREEATTRB1','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 15:50:07','2007-01-23 00:15:26',NULL,0,1,0,0,0,1,1,0,1,0,0,0,1,0,50,0,0,0.0000,40,1,0,0,0,0,0);
INSERT INTO products VALUES (99,1,1000,'CALL1','sample_t/t-sample.gif',0.0000,0,'2007-01-16 15:50:07','2007-01-16 15:50:07',NULL,1,1,0,NULL,0,1,1,0,0,1,0,0,1,0,0,0,0,0.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (100,1,1000,'CALL2','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 15:50:07','2007-01-21 00:15:45',NULL,1,1,0,0,0,1,1,0,0,1,0,0,1,0,0,0,0,10000.0000,41,1,0,0,0,0,0);
INSERT INTO products VALUES (102,1,1000,'DISCNTQTY1','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 21:10:16','2007-01-17 23:37:02',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,10,1,0,10000.0000,45,1,0,0,0,0,0);
INSERT INTO products VALUES (103,1,1000,'DISCNTQTY2','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 21:10:16','2007-01-21 00:33:44',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,20,3,0,10000.0000,45,1,0,0,0,0,0);
INSERT INTO products VALUES (104,1,1000,'DISCNTQTY3','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 21:10:17','2007-01-17 23:37:35',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,30,2,0,10000.0000,45,1,0,0,0,0,0);
INSERT INTO products VALUES (115,1,1000,'SEO','',10000.0000,0,'2007-01-16 21:41:07','2007-01-17 16:30:59',NULL,1,1,0,0,0,1,1,0,0,0,1,0,1,0,0,0,0,10000.0000,58,1,1,1,1,1,1);
INSERT INTO products VALUES (113,1,1000,'DISCNTQTY8','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 21:10:17','2007-01-24 15:56:19',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,80,1,1,5000.0000,45,1,0,0,0,0,0);
INSERT INTO products VALUES (112,1,1000,'DISCNTQTY7','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 21:10:17','2007-01-24 15:55:33',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,70,1,0,10000.0000,45,1,0,0,0,0,0);
INSERT INTO products VALUES (111,1,1000,'DISCNTQTY5','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 21:10:17','2007-01-17 23:55:45',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,50,1,1,5000.0000,45,1,0,0,0,0,0);
INSERT INTO products VALUES (110,1,1000,'DISCNTQTY4','sample_t/t-sample.gif',10000.0000,0,'2007-01-16 21:10:17','2007-01-17 23:55:21',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,40,1,0,9500.0000,45,1,0,0,0,0,0);
INSERT INTO products VALUES (116,1,1000,'SEO2','',10000.0000,0,'2007-01-16 21:54:19','2007-01-16 22:00:23',NULL,1,1,0,0,0,1,1,0,0,0,1,0,1,0,10,0,0,10000.0000,58,1,0,0,0,0,0);
INSERT INTO products VALUES (151,1,1000,'ATTR_RADIO3','no_picture.gif',0.0000,0,'2007-01-17 18:12:19','2007-01-18 01:04:39',NULL,0,1,0,0,0,10,1,1,0,0,0,0,1,0,0,0,0,5.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (227,1,1000,'ATTR_FILE','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-31 01:40:08','2007-02-01 18:36:02',NULL,0.2,1,0,0,0,1,1,1,0,0,0,0,1,0,0,0,0,5000.0000,101,1,0,0,0,0,0);
INSERT INTO products VALUES (139,1,1000,'ATTR_TEXT1','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-17 15:20:31','2007-01-17 17:28:37',NULL,0.2,1,0,0,0,1,1,1,0,0,0,0,1,0,0,0,0,4000.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (140,1,1000,'ATTR_TEXT2','sample_t/t-shirt_02.gif',4000.0000,0,'2007-01-17 15:20:31','2007-01-17 17:29:01',NULL,0.2,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4000.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (141,1,1000,'ATTR_RDONLY','no_picture.gif',4000.0000,0,'2007-01-17 15:20:31','2007-01-17 17:31:44',NULL,0.2,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4000.0000,61,1,0,0,0,0,0);
INSERT INTO products VALUES (142,1,1000,'ATTR_CHKBOX1','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-17 15:20:31','2007-01-17 15:20:31',NULL,0.2,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4000.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (143,1,1000,'ATTR_CHKBOX2','sample_t/t-shirt_02.gif',0.0000,0,'2007-01-17 15:20:31','2007-01-17 17:57:25',NULL,0.2,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,0.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (144,1,1000,'ATTR_DROPDOWN1','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-17 15:20:31','2007-01-17 19:09:09',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4000.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (152,1,1000,'ATTR_DROPDOWN2','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-17 19:09:41','2007-01-21 00:04:16',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,3600.0000,64,0,0,0,0,0,0);
INSERT INTO products VALUES (146,1,1000,'ATTR_DROPDOWN3','no_picture.gif',0.0000,0,'2007-01-17 15:20:31','2007-01-18 01:04:56',NULL,0,1,0,0,0,10,1,1,0,0,0,0,1,0,0,0,0,5.0000,0,1,0,0,0,0,0);
INSERT INTO products VALUES (156,1,1000,'SALE10-1','sample_t/t-shirt_01.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-26 15:19:15',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,9000.0000,67,1,0,0,0,0,0);
INSERT INTO products VALUES (155,1,1000,'FREEATTRB2','sample_t/t-sample.gif',10000.0000,0,'2007-01-18 10:22:57','2007-01-18 10:25:25',NULL,0,1,0,0,0,1,1,0,1,0,0,0,1,0,50,0,0,0.0000,40,1,0,0,0,0,0);
INSERT INTO products VALUES (157,1,1000,'SALE10-2','sample_t/t-shirt_02.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-18 14:13:01',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,10000.0000,67,1,0,0,0,0,0);
INSERT INTO products VALUES (158,1,1000,'SALE10-3','sample_t/t-shirt_03.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-18 23:24:03',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,9000.0000,67,1,0,0,0,0,0);
INSERT INTO products VALUES (159,1,1000,'SALE500-1','sample_t/t-shirt_01.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-18 14:13:01',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,9500.0000,68,1,0,0,0,0,0);
INSERT INTO products VALUES (160,1,1000,'SALE500-2','sample_t/t-shirt_02.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-19 01:10:08',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,9500.0000,68,1,0,0,0,0,0);
INSERT INTO products VALUES (161,1,1000,'SALE500-3','sample_t/t-shirt_03.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-18 14:13:01',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,9500.0000,68,1,0,0,0,0,0);
INSERT INTO products VALUES (162,1,1000,'SALESET8000-1','sample_t/t-shirt_01.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-18 14:13:01',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,8000.0000,69,1,0,0,0,0,0);
INSERT INTO products VALUES (163,1,1000,'SALESET8000-2','sample_t/t-shirt_02.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 01:15:03',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,8000.0000,69,1,0,0,0,0,0);
INSERT INTO products VALUES (164,1,1000,'SALESET8000-3','sample_t/t-shirt_03.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-18 14:13:02',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,8000.0000,69,1,0,0,0,0,0);
INSERT INTO products VALUES (165,1,1000,'SPECIAL1-1','sample_t/t-shirt_01.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-18 14:13:02',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,8000.0000,70,1,0,0,0,0,0);
INSERT INTO products VALUES (166,1,1000,'SPECIAL2-1','sample_t/t-shirt_01.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-18 14:13:02',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,5000.0000,70,1,0,0,0,0,0);
INSERT INTO products VALUES (167,1,1000,'SPECIAL2-2','sample_t/t-shirt_02.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-18 14:13:02',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,5000.0000,70,1,0,0,0,0,0);
INSERT INTO products VALUES (168,1,1000,'SPECIAL2-3','sample_t/t-shirt_03.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-18 14:13:02',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,5000.0000,70,1,0,0,0,0,0);
INSERT INTO products VALUES (169,1,1000,'SPECIAL3','sample_t/t-shirt_04.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-18 14:29:48',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,5000.0000,70,0,0,0,0,0,0);
INSERT INTO products VALUES (170,1,1000,'SALE_ETC1','sample_t/t-shirt_01.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-18 14:13:02',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,9000.0000,71,1,0,0,0,0,0);
INSERT INTO products VALUES (171,1,1000,'SALE_ETC2','sample_t/t-shirt_02.gif',7500.0000,0,'2007-01-18 14:13:03','2007-01-18 14:13:03',NULL,1,1,0,NULL,0,1,1,0,0,0,0,0,1,0,0,0,0,7500.0000,71,1,0,0,0,0,0);
INSERT INTO products VALUES (172,1,1000,'NOSALE','sample_t/t-shirt_04.gif',10000.0000,0,'2007-01-18 14:13:01','2007-01-26 15:18:09',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,10000.0000,72,1,0,0,0,0,0);
INSERT INTO products VALUES (173,1,1000,'SALE_SPECIAL1-1','sample_t/t-shirt_03.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:25:48',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,73,1,0,0,0,0,0);
INSERT INTO products VALUES (174,1,1000,'SALE_SPECIAL1-2','sample_t/t-shirt_04.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:27:09',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,73,1,0,0,0,0,0);
INSERT INTO products VALUES (175,1,1000,'SALE_SPECIAL1-3','sample_t/t-shirt_05.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:27:22',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,4500.0000,73,1,0,0,0,0,0);
INSERT INTO products VALUES (176,1,1000,'SALE_SPECIAL2-1','sample_t/t-shirt_03.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:27:42',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,9000.0000,74,1,0,0,0,0,0);
INSERT INTO products VALUES (177,1,1000,'SALE_SPECIAL2-2','sample_t/t-shirt_04.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:27:54',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,9000.0000,74,1,0,0,0,0,0);
INSERT INTO products VALUES (178,1,1000,'SALE_SPECIAL2-3','sample_t/t-shirt_05.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:28:06',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,9000.0000,74,1,0,0,0,0,0);
INSERT INTO products VALUES (179,1,1000,'SALE_SPECIAL3-1','sample_t/t-shirt_03.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:28:29',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,5000.0000,75,1,0,0,0,0,0);
INSERT INTO products VALUES (180,1,1000,'SALE_SPECIAL3-2','sample_t/t-shirt_04.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:28:44',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,5000.0000,75,1,0,0,0,0,0);
INSERT INTO products VALUES (181,1,1000,'SALE_SPECIAL3-3','sample_t/t-shirt_05.gif',10000.0000,0,'2007-01-18 14:13:02','2007-01-19 13:28:59',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,5000.0000,75,1,0,0,0,0,0);
INSERT INTO products VALUES (182,1,1000,'DISCNTQTY6','sample_t/t-sample.gif',10000.0000,0,'2007-01-18 16:31:53','2007-01-24 15:54:28',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,60,1,0,10000.0000,45,0,0,0,0,0,0);
INSERT INTO products VALUES (183,1,1000,'MIN','',200.0000,0,'2007-01-18 17:13:22','2007-01-24 19:27:00',NULL,1,1,0,0,0,10,1,0,0,0,1,0,1,0,10,0,0,200.0000,76,1,0,0,0,0,0);
INSERT INTO products VALUES (184,1,1000,'MIN_ATR1','',200.0000,0,'2007-01-18 17:14:01','2007-01-24 19:46:56',NULL,1,1,0,0,0,10,1,0,0,0,1,0,1,0,20,0,0,200.0000,76,1,0,0,0,0,0);
INSERT INTO products VALUES (185,1,1000,'MIN_ATR2','',200.0000,0,'2007-01-18 17:19:58','2007-01-24 19:47:20',NULL,1,1,0,0,0,10,1,0,0,0,0,0,1,0,30,0,0,200.0000,76,0,0,0,0,0,0);
INSERT INTO products VALUES (187,1,1000,'LIMIT-5','',200.0000,0,'2007-01-19 01:58:18','2007-01-24 19:15:18',NULL,1,1,0,0,0,1,1,0,0,0,1,0,1,5,10,0,0,200.0000,78,1,0,0,0,0,0);
INSERT INTO products VALUES (188,1,1000,'LIMIT_ATR1','',200.0000,0,'2007-01-19 02:04:36','2007-01-24 19:22:43',NULL,1,1,0,0,0,1,1,0,0,0,1,0,1,5,50,0,0,200.0000,78,1,0,0,0,0,0);
INSERT INTO products VALUES (189,1,1000,'LIMIT_ATR2','',200.0000,0,'2007-01-19 02:13:38','2007-01-24 19:16:03',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,5,60,0,0,200.0000,78,0,0,0,0,0,0);
INSERT INTO products VALUES (190,1,1000,'TAXOUT','sample_t/t-sample.gif',10000.0000,0,'2007-01-23 10:39:16','2007-01-23 11:18:43',NULL,0.25,1,1,0,0,1,1,0,0,0,1,0,1,0,1,0,0,10000.0000,81,1,0,0,0,0,0);
INSERT INTO products VALUES (191,1,1000,'TAXIN','sample_t/t-sample.gif',10000.0000,0,'2007-01-23 10:41:32','2007-01-23 11:29:24',NULL,0.25,1,0,0,0,1,1,0,0,0,1,0,1,0,2,0,0,10000.0000,81,1,0,0,0,0,0);
INSERT INTO products VALUES (192,1,1000,'ATTR_IMAGE1','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-23 11:50:48','2007-01-24 00:13:12',NULL,1,1,0,0,0,1,1,0,0,0,0,0,1,0,3,0,0,4000.0000,82,1,0,0,0,0,0);
INSERT INTO products VALUES (193,1,1000,'ATTR_IMAGE2','sample_t/t-shirt_02.gif',4000.0000,0,'2007-01-23 11:53:44','2007-01-24 00:15:48',NULL,0.2,1,0,0,0,1,1,0,0,0,0,0,1,0,4,0,0,4000.0000,82,1,0,0,0,0,0);
INSERT INTO products VALUES (194,1,1000,'IMAGE1','samples/IMAGE1.jpg',4000.0000,0,'2007-01-24 00:34:30','2007-01-24 01:59:35',NULL,0.25,1,0,0,0,1,1,0,0,0,1,0,1,0,1,0,0,4000.0000,82,1,0,0,0,0,0);
INSERT INTO products VALUES (195,1,1000,'IMAGE2','samples/IMAGE2.gif',4000.0000,0,'2007-01-24 00:39:27','2007-01-24 02:21:17',NULL,0.25,1,0,0,0,1,1,0,0,0,1,0,1,0,2,0,0,4000.0000,82,1,0,0,0,0,0);
INSERT INTO products VALUES (196,1,1000,'DISCNTQTY_ATTR1','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-24 11:25:24','2007-01-25 20:01:10',NULL,0.25,1,0,0,0,1,1,0,0,0,0,0,1,0,1,0,0,4000.0000,83,1,0,0,0,0,0);
INSERT INTO products VALUES (197,1,1000,'DISCNTQTY_ATTR2','sample_t/t-shirt_01.gif',0.0000,0,'2007-01-24 15:35:08','2007-01-25 19:26:28',NULL,0.25,1,0,0,0,1,1,1,0,0,0,0,1,0,2,0,0,4000.0000,83,1,0,0,0,0,0);
INSERT INTO products VALUES (198,1,1000,'DSCNT_ONE1','sample_t/t-shirt_01.gif',0.0000,0,'2007-01-24 16:37:59','2007-01-26 03:05:02',NULL,0.25,1,0,0,0,1,1,1,0,0,0,0,1,0,1,0,0,4000.0000,85,1,0,0,0,0,0);
INSERT INTO products VALUES (199,1,1000,'DSCNT_ONE2','sample_t/t-sample.gif',4000.0000,0,'2007-01-24 17:42:19','2007-01-26 03:08:54',NULL,0.25,1,0,0,0,1,1,0,0,0,1,0,1,0,2,0,0,4000.0000,85,1,0,0,0,0,0);
INSERT INTO products VALUES (200,1,1000,'LIMIT-2','',200.0000,0,'2007-01-24 19:07:16','2007-01-24 19:15:29',NULL,1,1,0,0,0,1,1,0,0,0,1,0,1,1,20,0,0,200.0000,78,1,0,0,0,0,0);
INSERT INTO products VALUES (201,1,1000,'UNIT1','',200.0000,0,'2007-01-24 19:32:13','2007-01-24 19:36:47',NULL,1,1,0,0,0,100,100,0,0,0,1,0,1,0,10,0,0,200.0000,86,1,0,0,0,0,0);
INSERT INTO products VALUES (202,1,1000,'UNIT2','',200.0000,0,'2007-01-24 19:37:00','2007-01-24 19:43:47',NULL,1,1,0,0,0,2000,100,0,0,0,1,0,1,0,20,0,0,200.0000,86,1,0,0,0,0,0);
INSERT INTO products VALUES (203,1,1000,'UNIT_ATR1','',200.0000,0,'2007-01-24 19:44:59','2007-01-24 19:52:48',NULL,1,1,0,0,0,100,1,0,0,0,1,0,1,100,30,0,0,200.0000,86,1,0,0,0,0,0);
INSERT INTO products VALUES (204,1,1000,'UNIT_ATR2','',200.0000,0,'2007-01-24 19:45:15','2007-01-24 19:54:44',NULL,1,1,0,0,0,100,100,0,0,0,0,0,1,0,40,0,0,200.0000,86,0,0,0,0,0,0);
INSERT INTO products VALUES (205,1,1000,'PRCFACTOR','samples/teacup.png',20000.0000,0,'2007-01-25 12:48:10','2007-01-25 18:56:07',NULL,1,1,0,0,0,1,1,0,0,0,1,0,1,0,10,0,0,20000.0000,87,1,0,0,0,0,0);
INSERT INTO products VALUES (206,1,1000,'PRCFACTOR_OFFSET','sample_t/t-shirt_01.gif',0.0000,0,'2007-01-25 17:47:50','2007-01-26 01:32:25',NULL,0,1,0,0,0,1,1,1,0,0,1,0,1,0,20,0,0,4000.0000,87,1,0,0,0,0,0);
INSERT INTO products VALUES (209,1,1000,'BASEPRICE1','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-26 01:57:23','2007-01-26 02:57:14',NULL,0.25,1,0,0,0,1,1,1,0,0,0,0,1,0,1,0,0,4500.0000,89,1,0,0,0,0,0);
INSERT INTO products VALUES (207,1,1000,'PRCFACTOR_OFFSET_ONCE','sample_t/t-sample.gif',4000.0000,0,'2007-01-25 18:59:30','2007-01-26 17:48:08',NULL,0,1,0,0,0,1,1,1,0,0,1,0,1,0,30,0,0,4000.0000,87,1,0,0,0,0,0);
INSERT INTO products VALUES (208,1,1000,'DISCNTQTY_ATTR_ONCE','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-25 19:23:37','2007-01-25 20:01:38',NULL,0.25,1,0,0,0,1,1,0,0,0,0,0,1,0,3,0,0,4000.0000,83,1,0,0,0,0,0);
INSERT INTO products VALUES (210,1,1000,'BASEPRICE3','sample_t/t-shirt_01.gif',4000.0000,0,'2007-01-26 02:26:19','2007-01-26 02:50:02',NULL,0.25,1,0,0,0,1,1,1,0,0,0,0,1,0,3,0,0,5000.0000,89,1,0,0,0,0,0);
INSERT INTO products VALUES (211,1,1000,'BASEPRICE2','sample_t/t-shirt_02.gif',4000.0000,0,'2007-01-26 02:46:13','2007-01-26 02:59:27',NULL,0.25,1,0,0,0,1,1,0,0,0,0,0,1,0,2,0,0,4000.0000,89,1,0,0,0,0,0);
INSERT INTO products VALUES (212,2,1001,'RTBHUNTER','sooty.jpg',500.0000,0,'2007-01-26 10:54:55','2007-01-26 19:40:58',NULL,3,1,0,NULL,0,1,1,0,0,0,1,0,1,0,1,0,0,450.0000,91,1,0,0,0,0,0);
INSERT INTO products VALUES (213,2,1001,'HELP','samples/music.jpg',3500.0000,0,'2007-01-26 10:55:12','2007-02-01 18:28:20',NULL,0,1,0,NULL,0,1,1,0,0,0,1,2,1,0,2,0,0,3500.0000,91,1,0,0,0,0,0);
INSERT INTO products VALUES (214,3,0,'','samples/DOC_GENERAL.gif',0.0000,0,'2007-01-26 12:02:50','2007-01-26 17:09:58',NULL,0,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0.0000,93,1,0,0,0,0,0);
INSERT INTO products VALUES (215,4,1000,'DOC_PRODUCT','samples/DOC_PRODUCT.gif',2000.0000,0,'2007-01-26 12:22:09','2007-01-26 17:01:36',NULL,0,1,0,0,0,1,1,0,0,0,1,0,1,0,2,0,0,2000.0000,93,1,0,0,0,0,0);
INSERT INTO products VALUES (225,1,1001,'DOWNLOAD1','samples/download.jpg',5000.0000,0,'2007-01-26 18:38:56','2007-01-26 19:58:12',NULL,0,1,0,0,0,1,1,0,0,0,1,0,1,0,10,0,0,5000.0000,100,1,0,0,0,0,0);
INSERT INTO products VALUES (217,5,1001,'TYPE_P_FREESHIP','sample_t/t-sample.gif',4000.0000,0,'2007-01-26 14:35:30','2007-01-26 16:53:40',NULL,1,1,0,0,0,1,1,0,0,0,1,1,1,0,10,0,0,4000.0000,98,1,0,0,0,0,0);
INSERT INTO products VALUES (218,1,1000,'FREE2','sample_t/t-sample.gif',0.0000,1,'2007-01-26 15:10:08','2007-01-26 15:10:10','0000-00-00 00:00:00',2,1,0,0,0,1,1,0,1,0,0,0,1,0,30,0,0,0.0000,40,1,0,0,0,0,0);
INSERT INTO products VALUES (224,1,1000,'FREESHIP3','sample_t/t-shirt_02.gif',4000.0000,0,'2007-01-26 15:54:57','2007-01-26 16:12:01',NULL,0,1,0,0,0,1,1,0,0,0,1,0,1,0,3,0,0,4000.0000,79,1,0,0,0,0,0);
INSERT INTO products VALUES (223,1,1000,'FREESHIP2','sample_w/wallpaper_M01.jpg',4000.0000,1,'2007-01-26 15:39:15','2007-01-26 15:48:48',NULL,50,1,0,0,0,1,1,0,0,0,0,1,1,0,2,0,0,4000.0000,79,1,0,0,0,0,0);
INSERT INTO products VALUES (226,1,1000,'DOWNLOAD2','samples/download.jpg',5000.0000,0,'2007-01-26 19:08:15','2007-01-26 19:58:26',NULL,0,1,0,0,0,1,1,0,0,0,1,0,1,0,20,0,0,5000.0000,100,1,0,0,0,0,0);
INSERT INTO products VALUES (229,2,1001,'MEDIA_MIX','samples/music.jpg',3500.0000,0,'2007-02-01 18:06:43','2007-02-01 18:30:53',NULL,0,1,0,0,0,1,1,0,0,0,1,2,1,0,30,0,0,3500.0000,91,1,0,0,0,0,0);
# (Fix Illegal master_categories_id)
UPDATE products set master_categories_id = '4' WHERE products_id = '5';
UPDATE products set master_categories_id = '7' WHERE products_id = '7';
UPDATE products set master_categories_id = '8' WHERE products_id = '8';
UPDATE products set master_categories_id = '8' WHERE products_id = '10';
UPDATE products set master_categories_id = '9' WHERE products_id = '15';
UPDATE products set master_categories_id = '10' WHERE products_id = '16';
UPDATE products set master_categories_id = '8' WHERE products_id = '18';
UPDATE products set master_categories_id = '12' WHERE products_id = '19';
UPDATE products set master_categories_id = '7' WHERE products_id = '20';
UPDATE products set master_categories_id = '11' WHERE products_id = '25';
UPDATE products set master_categories_id = '12' WHERE products_id = '27';
UPDATE products set master_categories_id = '7' WHERE products_id = '28';
UPDATE products set master_categories_id = '7' WHERE products_id = '30';
UPDATE products set master_categories_id = '13' WHERE products_id = '33';
UPDATE products set master_categories_id = '13' WHERE products_id = '34';
UPDATE products set master_categories_id = '10' WHERE products_id = '36';
UPDATE products set master_categories_id = '9' WHERE products_id = '37';
UPDATE products set master_categories_id = '10' WHERE products_id = '39';
UPDATE products set master_categories_id = '9' WHERE products_id = '40';
UPDATE products set master_categories_id = '10' WHERE products_id = '41';
UPDATE products set master_categories_id = '13' WHERE products_id = '42';
UPDATE products set master_categories_id = '12' WHERE products_id = '43';
UPDATE products set master_categories_id = '13' WHERE products_id = '45';
UPDATE products set master_categories_id = '13' WHERE products_id = '46';
UPDATE products set master_categories_id = '11' WHERE products_id = '47';
UPDATE products set master_categories_id = '7' WHERE products_id = '52';
UPDATE products set master_categories_id = '12' WHERE products_id = '56';
UPDATE products set master_categories_id = '17' WHERE products_id = '59';
UPDATE products set master_categories_id = '17' WHERE products_id = '61';
UPDATE products set master_categories_id = '23' WHERE products_id = '90';
UPDATE products set master_categories_id = '23' WHERE products_id = '88';
UPDATE products set master_categories_id = '20' WHERE products_id = '70';
UPDATE products set master_categories_id = '20' WHERE products_id = '72';
UPDATE products set master_categories_id = '20' WHERE products_id = '73';
UPDATE products set master_categories_id = '20' WHERE products_id = '74';
UPDATE products set master_categories_id = '20' WHERE products_id = '75';
UPDATE products set master_categories_id = '23' WHERE products_id = '91';
UPDATE products set master_categories_id = '41' WHERE products_id = '99';
UPDATE products set master_categories_id = '63' WHERE products_id = '151';
UPDATE products set master_categories_id = '60' WHERE products_id = '139';
UPDATE products set master_categories_id = '60' WHERE products_id = '140';
UPDATE products set master_categories_id = '62' WHERE products_id = '142';
UPDATE products set master_categories_id = '62' WHERE products_id = '143';
UPDATE products set master_categories_id = '63' WHERE products_id = '144';
UPDATE products set master_categories_id = '63' WHERE products_id = '146';
UPDATE products set master_categories_id = '7' WHERE products_id = '12';
UPDATE products set master_categories_id = '8' WHERE products_id = '13';
UPDATE products set master_categories_id = '13' WHERE products_id = '22';
UPDATE products set master_categories_id = '7' WHERE products_id = '26';
UPDATE products set master_categories_id = '9' WHERE products_id = '35';
UPDATE products set master_categories_id = '12' WHERE products_id = '44';
UPDATE products set master_categories_id = '13' WHERE products_id = '49';
UPDATE products set master_categories_id = '7' WHERE products_id = '55';
UPDATE products set master_categories_id = '12' WHERE products_id = '58';
UPDATE products set master_categories_id = '12' WHERE products_id = '60';
UPDATE products set master_categories_id = '23' WHERE products_id = '89';

#
# Dumping data for table `products_attributes`
#

INSERT INTO products_attributes VALUES (1,57,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (2,57,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (3,57,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (4,57,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (5,57,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (306,59,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (305,59,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (304,59,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (303,59,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (302,59,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (311,61,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (310,61,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (309,61,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (308,61,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (307,61,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (16,7,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (17,7,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (18,7,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (19,7,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (20,7,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (21,12,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (22,12,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (23,12,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (24,12,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (25,12,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (26,20,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (27,20,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (28,20,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (29,20,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (30,20,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (31,26,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (32,26,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (33,26,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (34,26,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (35,26,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (36,28,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (37,28,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (38,28,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (39,28,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (40,28,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (41,30,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (42,30,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (43,30,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (44,30,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (45,30,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (46,52,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (47,52,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (48,52,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (49,52,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (50,52,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (51,55,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (52,55,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (53,55,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (54,55,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (55,55,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (56,16,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (57,16,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (58,16,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (59,16,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (60,16,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (61,36,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (62,36,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (63,36,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (64,36,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (65,36,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (66,39,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (67,39,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (68,39,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (69,39,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (70,39,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (71,41,2,9,0.0000,'+',210,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (72,41,2,10,0.0000,'+',220,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (73,41,2,11,0.0000,'+',230,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (74,41,2,12,0.0000,'+',240,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (75,41,2,13,0.0000,'+',250,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (77,98,3,4,500.0000,'+',110,0,0,'+',0,1,1,'attributes/color_red.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (78,98,3,5,0.0000,'+',120,0,0,'+',0,0,1,'attributes/color_yellow.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (81,112,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (80,98,3,8,0.0000,'+',140,0,0,'+',0,0,1,'attributes/color_black.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (82,112,3,8,1000.0000,'+',140,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (83,113,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (84,113,3,8,1000.0000,'+',140,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (112,141,6,17,0.0000,'+',620,1,0,'+',0,0,1,'attributes/washM40.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (110,141,6,15,0.0000,'+',600,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (107,139,5,0,0.0000,'+',0,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,5.0000,0,1);
INSERT INTO products_attributes VALUES (108,140,4,0,0.0000,'+',0,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',20.0000,2,0.0000,0,1);
INSERT INTO products_attributes VALUES (101,53,1,2,0.0000,'+',20,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (100,53,1,1,0.0000,'+',30,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (104,64,1,2,0.0000,'+',20,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (103,64,1,1,0.0000,'+',30,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (111,141,6,16,0.0000,'+',610,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (106,139,4,0,0.0000,'+',0,0,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,10.0000,5,1);
INSERT INTO products_attributes VALUES (102,53,1,3,0.0000,'+',10,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (105,64,1,3,0.0000,'+',10,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (113,141,6,18,0.0000,'+',630,1,0,'+',0,0,1,'attributes/ironM.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (115,142,7,21,0.0000,'+',700,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (116,142,7,22,0.0000,'+',710,1,0,'+',0,0,1,'',0,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (117,142,7,23,100.0000,'+',720,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (118,143,8,27,3000.0000,'+',830,1,0.1,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (119,143,8,28,3000.0000,'+',840,1,0.1,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (120,143,8,29,3000.0000,'+',850,1,0.1,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (121,143,8,30,3500.0000,'+',860,1,0.15,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (122,143,8,31,3500.0000,'+',870,1,0.15,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (123,143,8,26,4500.0000,'+',820,1,0.25,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (124,143,8,24,4000.0000,'+',800,1,0.2,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (125,143,8,25,4000.0000,'+',810,1,0.2,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (126,144,1,1,0.0000,'+',30,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (127,144,1,2,0.0000,'+',20,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (128,144,1,3,0.0000,'+',10,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (129,144,1,19,500.0000,'+',40,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (130,144,3,5,0.0000,'+',120,1,0,'+',0,1,0,'attributes/color_yellow.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (132,144,3,8,500.0000,'+',140,1,0,'+',0,0,0,'attributes/color_black.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (133,144,3,7,0.0000,'+',130,1,0,'+',0,0,0,'attributes/color_blue.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (134,144,3,14,0.0000,'+',100,1,0,'+',0,0,0,'attributes/color_white.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (148,144,1,20,0.0000,'+',50,1,0,'+',1,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (163,152,1,19,500.0000,'+',40,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (164,152,3,5,0.0000,'+',120,1,0,'+',0,1,0,'attributes/color_yellow.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (165,152,3,8,500.0000,'+',140,1,0,'+',0,0,0,'attributes/color_black.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (166,152,3,7,0.0000,'+',130,1,0,'+',0,0,0,'attributes/color_blue.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (167,152,3,14,0.0000,'+',100,1,0,'+',0,0,0,'attributes/color_white.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (168,152,1,20,0.0000,'+',50,1,0,'+',1,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (144,146,9,32,500.0000,'',900,1,0.1,'',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (145,146,9,33,5.0000,'',910,1,0.001,'',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (146,151,10,35,5.0000,'',1010,1,0.001,'',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (147,151,10,34,500.0000,'',1000,1,0.1,'',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (149,144,3,4,0.0000,'+',110,1,0,'+',0,0,0,'attributes/color_red.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (169,152,3,4,0.0000,'+',110,1,0,'+',0,0,0,'attributes/color_red.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (160,152,1,1,0.0000,'+',30,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (161,152,1,2,0.0000,'+',20,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (162,152,1,3,0.0000,'+',10,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (173,155,3,4,0.0000,'+',110,1,0,'+',0,1,1,'attributes/color_red.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (174,155,3,5,0.0000,'+',120,0,0,'+',0,0,1,'attributes/color_yellow.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (175,155,3,8,0.0000,'+',140,0,0,'+',0,0,1,'attributes/color_black.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (291,156,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (292,156,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (293,156,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (290,156,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (180,157,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (181,157,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (182,157,3,4,2000.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (183,157,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (184,158,3,5,0.0000,'+',120,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (185,158,3,14,0.0000,'+',100,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (186,158,3,4,2000.0000,'+',110,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (187,158,3,7,0.0000,'+',130,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (188,176,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (189,176,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (190,176,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (191,176,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (192,177,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (193,177,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (194,177,3,4,2000.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',2000.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (195,177,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (196,178,3,5,0.0000,'+',120,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (197,178,3,14,0.0000,'+',100,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (198,178,3,4,2000.0000,'+',110,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (199,178,3,7,0.0000,'+',130,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (200,159,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (201,159,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (202,159,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (203,159,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (204,160,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (205,160,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (206,160,3,4,2000.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (207,160,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (208,161,3,5,0.0000,'+',120,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (209,161,3,14,0.0000,'+',100,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (210,161,3,4,2000.0000,'+',110,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (211,161,3,7,0.0000,'+',130,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (212,162,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (213,162,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (214,162,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (215,162,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (216,163,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (217,163,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (218,163,3,4,2000.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (219,163,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (220,164,3,5,0.0000,'+',120,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (221,164,3,14,0.0000,'+',100,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (222,164,3,4,2000.0000,'+',110,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (223,164,3,7,0.0000,'+',130,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (224,170,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (225,170,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (226,170,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (227,170,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (228,171,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (229,171,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (230,171,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (231,171,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (232,173,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (233,173,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (234,173,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (235,173,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (236,174,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (237,174,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (238,174,3,4,2000.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (239,174,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (240,175,3,5,0.0000,'+',120,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (241,175,3,14,0.0000,'+',100,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (242,175,3,4,2000.0000,'+',110,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (243,175,3,7,0.0000,'+',130,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (244,179,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (245,179,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (246,179,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (247,179,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (248,180,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (249,180,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (250,180,3,4,2000.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (251,180,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (252,181,3,5,0.0000,'+',120,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (253,181,3,14,0.0000,'+',100,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (254,181,3,4,2000.0000,'+',110,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (255,181,3,7,0.0000,'+',130,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (256,172,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (257,172,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (258,172,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (259,172,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (260,165,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (261,165,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (262,165,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (263,165,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (264,166,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (265,166,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (266,166,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (267,166,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (268,167,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (269,167,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (270,167,3,4,2000.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (271,167,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (272,168,3,5,0.0000,'+',120,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (273,168,3,14,0.0000,'+',100,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (274,168,3,4,2000.0000,'+',110,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (275,168,3,7,0.0000,'+',130,1,0,'+',0,0,0,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (276,169,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (277,169,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (278,169,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (279,169,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (280,182,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (281,182,3,8,1000.0000,'+',140,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (282,184,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (283,184,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (284,184,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (285,184,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (286,185,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (287,185,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (288,185,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (289,185,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (294,188,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (295,188,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (296,188,3,4,0.0000,'+',110,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (297,188,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (298,189,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (299,189,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (300,189,3,4,0.0000,'+',110,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (301,189,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (316,88,11,37,0.0000,'+',2010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (315,88,11,36,0.0000,'+',2000,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (317,89,11,36,0.0000,'+',2000,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (318,89,11,37,0.0000,'+',2010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (319,90,11,36,0.0000,'+',2000,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (320,90,11,37,0.0000,'+',2010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (321,91,11,36,0.0000,'+',2000,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (322,91,11,37,0.0000,'+',2010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (356,193,6,15,0.0000,'+',600,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (365,198,3,14,4000.0000,'',100,1,0,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,-500.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (327,190,3,5,2000.0000,'+',120,1,0,'+',0,0,0,'attributes/color_yellow.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (360,192,3,38,0.0000,'+',150,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (361,196,3,14,0.0000,'+',100,1,0,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'9:-0,10:-100,11:-200','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (330,190,3,14,1000.0000,'+',100,1,0,'+',0,0,0,'attributes/color_white.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (353,192,3,14,0.0000,'+',100,1,0,'+',0,0,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (332,190,3,4,0.0000,'+',110,1,0,'+',0,1,0,'attributes/color_red.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (362,196,3,38,0.0000,'+',150,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'19:-0,20:-150','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (363,197,3,14,4000.0000,'',100,1,0,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'9:-0,10:-100,11:-200','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (364,197,3,38,5000.0000,'',150,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'19:-0,20:-150','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (366,198,3,38,5000.0000,'',150,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,-1000.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (343,191,3,5,2000.0000,'+',120,1,0,'+',0,0,0,'attributes/color_yellow.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (344,191,3,14,1000.0000,'+',100,1,0,'+',0,0,0,'attributes/color_white.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (345,191,3,4,0.0000,'+',110,1,0,'+',0,1,0,'attributes/color_red.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (357,193,6,16,0.0000,'+',610,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (358,193,6,17,0.0000,'+',620,1,0,'+',0,0,1,'attributes/washM40.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (359,193,6,18,0.0000,'+',630,1,0,'+',0,0,1,'attributes/ironM.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (367,199,12,39,600.0000,'+',2100,1,0,'+',0,1,1,'',1,10000.0000,0.0000,0.0000,0.0000,0.0000,'49:-0,50:-200,100:-300','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (368,199,12,40,700.0000,'+',2120,1,0,'+',0,0,1,'',1,20000.0000,0.0000,0.0000,0.0000,0.0000,'49:-0,50:-200,100:-300','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (369,199,12,41,800.0000,'+',2130,1,0,'+',0,0,1,'',1,30000.0000,0.0000,0.0000,0.0000,0.0000,'49:-0,50:-200,100:-300','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (370,203,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (371,203,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (372,203,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (373,203,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (374,204,3,5,0.0000,'+',120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (375,204,3,14,0.0000,'+',100,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (376,204,3,4,0.0000,'+',110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (377,204,3,7,0.0000,'+',130,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (379,205,14,45,0.0000,'+',2310,1,0,'+',0,1,1,'',1,0.0000,0.0500,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (380,205,14,46,0.0000,'+',2320,1,0,'+',0,0,1,'',1,0.0000,0.1500,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (381,205,14,44,0.0000,'+',2300,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (382,206,13,43,4000.0000,'',2210,1,0,'+',0,1,1,'',1,0.0000,100.0000,1.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (389,209,3,50,1000.0000,'+',180,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (385,208,3,14,0.0000,'+',100,1,0,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','9:-0,10:-1000,11:-4000',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (386,208,3,38,0.0000,'+',150,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','19:-0,20:-5000',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (390,209,3,49,500.0000,'+',170,1,0,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (405,207,7,21,0.0000,'+',700,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.3000,0.1000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (391,210,3,50,1000.0000,'+',180,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (393,210,3,48,500.0000,'+',160,1,0,'+',0,1,1,'attributes/t-shirt_01mini.gif',0,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (394,211,3,50,1000.0000,'+',180,1,0,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (396,211,3,49,500.0000,'+',170,1,0,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (397,217,6,18,1000.0000,'+',630,1,10,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (398,217,3,5,2000.0000,'+',120,1,20,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (399,222,3,14,0.0000,'+',100,1,100,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (400,222,3,38,0.0000,'+',150,1,40,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (404,224,3,38,0.0000,'+',150,1,20,'+',0,0,1,'attributes/t-shirt_02mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (403,224,3,14,0.0000,'+',100,1,2,'+',0,1,1,'attributes/t-shirt_01mini.gif',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (406,225,15,53,0.0000,'+',3010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (407,225,15,52,0.0000,'+',3000,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (408,226,15,53,0.0000,'+',3010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (409,226,15,52,0.0000,'+',3000,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (410,226,16,56,0.0000,'+',3120,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (411,226,16,54,0.0000,'+',3100,1,0,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (412,226,16,55,0.0000,'+',3110,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (413,213,17,57,0.0000,'+',4000,1,1,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (414,213,17,58,0.0000,'+',4010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (417,227,18,0,1000.0000,'+',0,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (420,229,17,57,0.0000,'+',4000,1,1,'+',0,1,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);
INSERT INTO products_attributes VALUES (421,229,17,58,0.0000,'+',4010,1,0,'+',0,0,1,'',1,0.0000,0.0000,0.0000,0.0000,0.0000,'','',0.0000,0,0.0000,0,0);

#
# Dumping data for table `products_attributes_download`
#

INSERT INTO products_attributes_download VALUES (315,'wallpaper_M01.jpg',7,5);
INSERT INTO products_attributes_download VALUES (316,'wallpaper_L01.jpg',7,5);
INSERT INTO products_attributes_download VALUES (317,'wallpaper_M02.jpg',7,5);
INSERT INTO products_attributes_download VALUES (318,'wallpaper_L02.jpg',7,5);
INSERT INTO products_attributes_download VALUES (319,'wallpaper_M03.jpg',7,5);
INSERT INTO products_attributes_download VALUES (320,'wallpaper_L03.jpg',7,5);
INSERT INTO products_attributes_download VALUES (321,'wallpaper_M04.jpg',7,5);
INSERT INTO products_attributes_download VALUES (322,'wallpaper_L04.jpg',7,5);
INSERT INTO products_attributes_download VALUES (406,'pdf_sample.zip',7,5);
INSERT INTO products_attributes_download VALUES (407,'ms_word_sample.zip',7,5);
INSERT INTO products_attributes_download VALUES (410,'mac-jp.zip',7,5);
INSERT INTO products_attributes_download VALUES (409,'pdf_sample.zip',7,5);
INSERT INTO products_attributes_download VALUES (408,'ms_word_sample.zip',7,5);
INSERT INTO products_attributes_download VALUES (411,'win-en.zip',7,5);
INSERT INTO products_attributes_download VALUES (412,'win-jp.zip',7,5);
INSERT INTO products_attributes_download VALUES (414,'help.mp3',7,5);

#
# Dumping data for table `products_description`
#

INSERT INTO products_description VALUES (1,1,'t-shirt_01','','',0);
INSERT INTO products_description VALUES (1,2,'Zen Cart��T�����','Zen Cart���ꥸ�ʥ��T����ĤǤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (2,1,'t-shirt_02','','',0);
INSERT INTO products_description VALUES (2,2,'Zen Cart��T�����','Zen Cart���ꥸ�ʥ��T����ĤǤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',7);
INSERT INTO products_description VALUES (3,1,'t-shirt_03','','',0);
INSERT INTO products_description VALUES (3,2,'CC��T�����','���ꥨ���ƥ��֡�����󥺥���T����ĤǤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','http://www.creativecommons.jp/',1);
INSERT INTO products_description VALUES (4,1,'t-shirt_04','','',0);
INSERT INTO products_description VALUES (4,2,'Google��T�����','�������󥸥��Google�פΥ�T����ĤǤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','www.google.co.jp/',6);
INSERT INTO products_description VALUES (5,1,'t-shirt_05','','',0);
INSERT INTO products_description VALUES (5,2,'Feed��������T�����','�ե����ɥ�������T����ĤǤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (6,1,'t-shirt_06','','',0);
INSERT INTO products_description VALUES (6,2,'����ǭ','����ǭ�μ̿��򤢤���ä����塼�Ȥ�T����ġ�ǭ��������͵���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (7,1,'t-shirt_06','','',0);
INSERT INTO products_description VALUES (7,2,'����ǭ for KIDS','����ǭ�μ̿��򤢤���ä����塼�Ȥ�T����ġ�ǭ��������͵���<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (8,1,'t-shirt_07','','',0);
INSERT INTO products_description VALUES (8,2,'����ǭ','����ǭ�μ̿��򤢤���ä�T����ĤǤ���ǭ��������͵���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (9,1,'t-shirt_08','','',0);
INSERT INTO products_description VALUES (9,2,'�Ӥ��ä�','��ǭ�Ӥ��ä��μ̿��򤢤���ä����塼�Ȥ�T����ġ�ǭ��������͵���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',5);
INSERT INTO products_description VALUES (10,1,'t-shirt_09','','',0);
INSERT INTO products_description VALUES (10,2,'�Ӥ��ä�','��ǭ�Ӥ��ä��μ̿��򤢤���ä����塼�Ȥ�T����ġ�ǭ��������͵���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',4);
INSERT INTO products_description VALUES (11,1,'t-shirt_10','','',1);
INSERT INTO products_description VALUES (11,2,'��ǭ���ޤ��1��','�ʥܡ���Ȣ�ˤ⤰�ꤳ�����ǭ�Τ��ޤ�T����ġ����ΰ����뤷������Ź�͵��ʥ�С�����ʤǤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',7);
INSERT INTO products_description VALUES (12,1,'t-shirt_10','','',0);
INSERT INTO products_description VALUES (12,2,'Ȣ����Τ��ޤ� for KIDS','�ʥܡ���Ȣ������������ǭ\"���ޤ�\"T����ġ��͵��ʥ�С�����ʤǤ���<br />\r\n����Ѥ⤴�����ޤ���<br /><br />\r\n\r\n�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� \r\n˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���\r\n�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� \r\n��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���<br /><br />\r\n\r\nNOTE��<br />\r\n���ξ��ʤϺ߸��ڤ쾦�ʤΥ���ץ�Ǥ���<br /><br />\r\n�ں߸��ڤ쾦�ʡ� �߸˿���0�ˤʤ�ȡ����ξ��ʤˤϺ߸��ڤ쾦�ʤΥ�������ɽ������ޤ���<br />\r\n\r\n���߸��ڤ쾦�ʤϡ��桼���Ͼ��ʾ���α����ϤǤ��ޤ�������ʸ�ϤǤ��ޤ���<br />\r\n���߸ˤ�0�ˤʤä��Ȥ��Τդ�ޤ��ʺ߸��ڤ쥢�������ɽ�������뤫�ɤ������ˤϡ����������Ȥΰ��������߸ˤδ������������ǽ�Ǥ����ʲ��Τ褦�����꤬�Ǥ��ޤ���<br />\r\n�������߸ˤ��ʤ��ʤä����ʤˡ��֥����Ȥ������ץܥ����<br />\r\n����������ˡ�����ڤ�ץ��������ɽ������/���ʤ�<br />\r\n�������߸��ڤ쾦�ʤ���ʸ�Ǥ���/�Ǥ��ʤ�<br />\r\n�������߸��ڤ쾦�ʤΥ��ơ������ѹ���<br />\r\n�������߸ˤ��ʤ��ʤä��龦�ʥ��ơ�������OFF�ˤ��ơ�<br />\r\n����������å׾�ؤηǺܤ�ư�Ǽ�����/���ʤ�<br />\r\n�������߸˿�������å����ƿ��ʲ��ˤʤä��鱿�ļԤ�<br />\r\n�������᡼����Τ餻��/�Τ餻�ʤ�<br />','',11);
INSERT INTO products_description VALUES (13,1,'t-shirt_11','','',0);
INSERT INTO products_description VALUES (13,2,'��ǭ���ޤ��2��','������åפΥ�ǥ�ǭ\"���ޤ�\"��T����ġ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',3);
INSERT INTO products_description VALUES (14,1,'t-shirt_12','','',0);
INSERT INTO products_description VALUES (14,2,'Extream Cat�ʥ�ȥ�����','�������ȥ꡼�७��åȥ��꡼����<br /><br />\r\n\r\n�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ����ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ�����ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���<br /><br />\r\n\r\nNOTE��<br />\r\n���ξ��ʤϺ߸��ڤ쾦�ʤΥ���ץ�Ǥ���<br /><br />\r\n�ں߸��ڤ쾦�ʡ� �߸˿���0�ˤʤ�ȡ����ξ��ʤˤϺ߸��ڤ쾦�ʤΥ�������ɽ������ޤ���<br />\r\n\r\n���߸��ڤ쾦�ʤϡ��桼���Ͼ��ʾ���α����ϤǤ��ޤ�������ʸ�ϤǤ��ޤ���<br />\r\n���߸ˤ�0�ˤʤä��Ȥ��Τդ�ޤ��ʺ߸��ڤ쥢�������ɽ�������뤫�ɤ������ˤϡ����������Ȥΰ��������߸ˤδ������������ǽ�Ǥ����ʲ��Τ褦�����꤬�Ǥ��ޤ���<br />\r\n�������߸ˤ��ʤ��ʤä����ʤˡ��֥����Ȥ������ץܥ����<br />\r\n����������ˡ�����ڤ�ץ��������ɽ������/���ʤ�<br />\r\n�������߸��ڤ쾦�ʤ���ʸ�Ǥ���/�Ǥ��ʤ�<br />\r\n�������߸��ڤ쾦�ʤΥ��ơ������ѹ���<br />\r\n�������߸ˤ��ʤ��ʤä��龦�ʥ��ơ�������OFF�ˤ��ơ�<br />\r\n����������å׾�ؤηǺܤ�ư�Ǽ�����/���ʤ�<br />\r\n�������߸˿�������å����ƿ��ʲ��ˤʤä��鱿�ļԤ�<br />\r\n�������᡼����Τ餻��/�Τ餻�ʤ�<br />','',3);
INSERT INTO products_description VALUES (15,1,'t-shirt_13','','',0);
INSERT INTO products_description VALUES (15,2,'��åɥɥ饴��','��²����ϤΤ褦�ʥɥ饴�����Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (16,1,'t-shirt_13','','',0);
INSERT INTO products_description VALUES (16,2,'��åɥɥ饴�� for KIDS','��²����ϤΤ褦�ʥɥ饴�����Ǥ���<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (17,1,'t-shirt_14','','',0);
INSERT INTO products_description VALUES (17,2,'���ͤࡦ����','�ͤि�����դˤ���ʸ����Ϥ�������<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',3);
INSERT INTO products_description VALUES (18,1,'t-shirt_15','','',0);
INSERT INTO products_description VALUES (18,2,'Extream Cat�ʥ����ե����','�������ȥ꡼�७��åȥ��꡼����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',3);
INSERT INTO products_description VALUES (19,1,'t-shirt_16','','',0);
INSERT INTO products_description VALUES (19,2,'��ӥå�','�Ҷ������ˤ�͵��ι⤤��ӥåȥ���顣���å�T��·�äƤ��뤫��ƻҤ�·���ơ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (20,1,'t-shirt_16','','',0);
INSERT INTO products_description VALUES (20,2,'��ӥå� for KIDS','�Ҷ���������͵��Υ�ӥåȥ���顣����Ѥ�·�äƤ��뤫��ƻҤ�·���ơ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (21,1,'t-shirt_17','','',0);
INSERT INTO products_description VALUES (21,2,'�������ݡ�','��͵����������ݥ��꡼���о�Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (22,1,'t-shirt_18','','',0);
INSERT INTO products_description VALUES (22,2,'�������ݡ�','��͵����������ݥ��꡼���о�Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (23,1,'t-shirt_19','','',0);
INSERT INTO products_description VALUES (23,2,'�����������͡�','�ӥӥåɤʿ��Ȥ�������Ū�ʥ������󥷥꡼����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (24,1,'t-shirt_20','','',0);
INSERT INTO products_description VALUES (24,2,'��������ʥ٥ӡ���','�ӥӥåɤʿ��Ȥ�������Ū�ʥ������󥷥꡼����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (25,1,'t-shirt_21','','',0);
INSERT INTO products_description VALUES (25,2,'�֤ȸ�','���֤˰Ϥޤ쥷���ﵤʬ�θ��μ̿��򤢤��餤�ޤ�����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (26,1,'t-shirt_21','','',0);
INSERT INTO products_description VALUES (26,2,'�֤ȸ� for KIDS','���֤˰Ϥޤ쥷���ﵤʬ�θ��μ̿��򤢤��餤�ޤ���������Ѥ�·�äƤ��뤫��ƻҤ�·���ơ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (27,1,'t-shirt_22','','',0);
INSERT INTO products_description VALUES (27,2,'�ե�ߥ�','�Ȥܤ���ɽ�𤬱��줿�͵��Υե�ߥ��������å�T��·�äƤ��뤫��ƻҤ�·���ơ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (28,1,'t-shirt_22','','',0);
INSERT INTO products_description VALUES (28,2,'�ե�ߥ� for KIDS','�Ȥܤ���ɽ�𤬱��줿�͵��Υե�ߥ���������Ѥ�·�äƤ��뤫��ƻҤ�·���ơ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',4);
INSERT INTO products_description VALUES (29,1,'t-shirt_23','','',0);
INSERT INTO products_description VALUES (29,2,'����ʥ�������','�ӥӥåɤʿ��Ȥ�������Ū�ʥ������󥷥꡼����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (30,1,'t-shirt_23','','',0);
INSERT INTO products_description VALUES (30,2,'����ʥ������� for KIDS','�ӥӥåɤʿ��Ȥ�������Ū�ʥ������󥷥꡼����<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (31,1,'t-shirt_24','','',0);
INSERT INTO products_description VALUES (31,2,'����ʥ��꡼���','�ӥӥåɤʿ��Ȥ�������Ū�ʥ������󥷥꡼����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (32,1,'t-shirt_25','','',0);
INSERT INTO products_description VALUES (32,2,'��������ʥϥ���','�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (33,1,'t-shirt_26','','',0);
INSERT INTO products_description VALUES (33,2,'���󥽡���','���󥽡����Υ��饹�Ȥ����襤���Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (34,1,'t-shirt_27','','',0);
INSERT INTO products_description VALUES (34,2,'�ͤ��դΥ����С���1��','�����糧���ֻͤ��դΥ����С����Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (35,1,'t-shirt_28','','',0);
INSERT INTO products_description VALUES (35,2,'���꡼��ɥ饴��','�Ȥܤ���ɽ����͵��Υɥ饴���������å�T��·�äƤ��뤫��ƻҤ�·���ơ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (36,1,'t-shirt_28','','',0);
INSERT INTO products_description VALUES (36,2,'���꡼��ɥ饴�� for KIDS','�Ȥܤ���ɽ����͵��Υɥ饴����������Ѥ�·�äƤ��뤫��ƻҤ�·���ơ�<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (37,1,'t-shirt_29','','',0);
INSERT INTO products_description VALUES (37,2,'��Ĺε','�ɥ饴�󥷥꡼������������<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (38,1,'t-shirt_30','','',0);
INSERT INTO products_description VALUES (38,2,'�ɥ饴��','�Ի׵Ĥ�ʷ�ϵ����͵��Υɥ饴�����Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (39,1,'t-shirt_30','','',0);
INSERT INTO products_description VALUES (39,2,'�ɥ饴�� for KIDS','�Ի׵Ĥ�ʷ�ϵ����͵��Υɥ饴�����Ǥ���<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (40,1,'t-shirt_31','','',0);
INSERT INTO products_description VALUES (40,2,'�ɥ饴��','�Ի׵Ĥ�ʷ�ϵ����͵��Υɥ饴�����Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (41,1,'t-shirt_31','','',0);
INSERT INTO products_description VALUES (41,2,'�ɥ饴�� for KIDS','�Ի׵Ĥ�ʷ�ϵ����͵��Υɥ饴�����Ǥ���<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (42,1,'t-shirt_32','','',0);
INSERT INTO products_description VALUES (42,2,'�ͤ��դΥ����С���2��','�����糧���ֻͤ��դΥ����С����Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (43,1,'t-shirt_33','','',0);
INSERT INTO products_description VALUES (43,2,'�դ���','��᤿ɽ��Τդ������˥ե���¿����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',4);
INSERT INTO products_description VALUES (44,1,'t-shirt_34','','',0);
INSERT INTO products_description VALUES (44,2,'�դ���','��᤿ɽ��Τդ������˥ե���¿����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (45,1,'t-shirt_35','','',0);
INSERT INTO products_description VALUES (45,2,'�ͤ��դΥ����С���1��','�����糧���ֻͤ��դΥ����С����Ǥ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (46,1,'t-shirt_36','','',0);
INSERT INTO products_description VALUES (46,2,'���ե�����','�ۥäȰ�©�Ĥ��������ˤ䤵�������ե��������Ϥ������Ǥ�����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (47,1,'t-shirt_37','','',0);
INSERT INTO products_description VALUES (47,2,'�ߥ˥��奢���å���','��󹥤��ˤϤ��ޤ�ʤ����͵��Υߥ˥��奢���å�������<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (48,1,'t-shirt_38','','',0);
INSERT INTO products_description VALUES (48,2,'��ǥ�����1��','���㡼�꡼�����󥸥����פ碌�뤪ޯ��ʥ��饹�ȡ�Uba����κ��ʤ򤢤��餤�ޤ�����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','www.flickr.com/photo_zoom.gne?id=4042701&size=m&context=set-101799',3);
INSERT INTO products_description VALUES (49,1,'t-shirt_39','','',0);
INSERT INTO products_description VALUES (49,2,'��ǥ�����2��','���㡼�꡼�����󥸥����פ碌�뤪ޯ��ʥ��饹�ȡ�Uba����κ��ʤ򤢤��餤�ޤ�����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','www.flickr.com/photo_zoom.gne?id=4042701&size=m&context=set-101799',0);
INSERT INTO products_description VALUES (50,1,'t-shirt_40','','',0);
INSERT INTO products_description VALUES (50,2,'������','�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',7);
INSERT INTO products_description VALUES (51,1,'t-shirt_41','','',0);
INSERT INTO products_description VALUES (51,2,'���ꥬ��','ɽ�𤬤��襤�������֤ʥ��ꥬ�ˡ����줿�ҥåȾ��ʤǤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',6);
INSERT INTO products_description VALUES (52,1,'t-shirt_41','','',0);
INSERT INTO products_description VALUES (52,2,'���ꥬ�� for KIDS','ɽ�𤬤��襤�������֤ʥ��ꥬ�ˡ����줿�ҥåȾ��ʤǤ���<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (53,1,'t-shirt_42','','',0);
INSERT INTO products_description VALUES (53,2,'�ڥ󥮥�','�͵��ι���ڥ󥮥�����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (54,1,'t-shirt_43','','',0);
INSERT INTO products_description VALUES (54,2,'�ڥ󥮥�','�͵��ι���ڥ󥮥�����<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (55,1,'t-shirt_43','','',0);
INSERT INTO products_description VALUES (55,2,'�ڥ󥮥� for KIDS','�͵��ι���ڥ󥮥�����<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (56,1,'t-shirt_44','','',0);
INSERT INTO products_description VALUES (56,2,'�פˤפ�','���������γ�������ʪ��<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (57,1,'t-shirt_44','','',0);
INSERT INTO products_description VALUES (57,2,'�פˤפ� for KIDS','���������γ�������ʪ��<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',5);
INSERT INTO products_description VALUES (58,1,'t-shirt_45','','',0);
INSERT INTO products_description VALUES (58,2,'�֥롼�ۥ�����','����Ū�ʥ֥롼�ۥ�����ʤ����������<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (59,1,'t-shirt_45','','',0);
INSERT INTO products_description VALUES (59,2,'�ۥ����� for KIDS','����Ū�ʥ֥롼�ۥ�����ʤ����������<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (60,1,'t-shirt_46','','',0);
INSERT INTO products_description VALUES (60,2,'���륫�ʥ������','������å�����T�Υ������<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',2);
INSERT INTO products_description VALUES (61,1,'t-shirt_46','','',0);
INSERT INTO products_description VALUES (61,2,'���륫�ʥ������ for KIDS','������å�����T�Υ������<br />����Ѥ⤴�����ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',1);
INSERT INTO products_description VALUES (62,1,'t-shirt_47','','',0);
INSERT INTO products_description VALUES (62,2,'���륫�ʥ������','������å�����T�Υ������<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',3);
INSERT INTO products_description VALUES (63,1,'t-shirt_48','','',0);
INSERT INTO products_description VALUES (63,2,'����','�����֤ʷ��ܤ��ѥ�򤯤�ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',3);
INSERT INTO products_description VALUES (64,1,'t-shirt_49','','',0);
INSERT INTO products_description VALUES (64,2,'����','�����֤ʷ��ܤ��ѥ�򤯤�ޤ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (65,1,'t-shirt_50','','',0);
INSERT INTO products_description VALUES (65,2,'I love T-Shirt','���֤Ρ�I love T-Shirt�ץ���<br /><br /><br />�١�����USA����COTTON 100�󡢣�.1���󥹡��إӡ���������T����ġ� <br /><br />˭�٤ʥ��顼�Хꥨ�������ǿ͵� No.1��T����ĤǤ���<br /><br />�ɼ����ʲ֤��Τ�����ե������åȥ���˻��Ѥ��� <br /><br />��ʬ�ۼ����ɤ����եȤ�ȩ���꤬�ɤ��Τ���ħ�Ǥ���','',0);
INSERT INTO products_description VALUES (91,1,'wallpaper_04','','',0);
INSERT INTO products_description VALUES (90,2,'Extream Cat�ʥ��̡���','Extream Cat���꡼�����ɻ�Ǥ���<br /><br />\r\n\r\n�����ξ��ʤϥ�������ɾ��ʤǤ�','',6);
INSERT INTO products_description VALUES (90,1,'wallpaper_03','','',0);
INSERT INTO products_description VALUES (89,2,'Extream Cat�ʥ����ե����','Extream Cat���꡼�����ɻ�Ǥ���<br /><br />\r\n\r\n�����ξ��ʤϥ�������ɾ��ʤǤ�','',2);
INSERT INTO products_description VALUES (89,1,'wallpaper_02','','',0);
INSERT INTO products_description VALUES (88,1,'wallpaper_01','','',0);
INSERT INTO products_description VALUES (88,2,'Extream Cat�ʥ����åȥ�������','Extream Cat���꡼�����ɻ�Ǥ���<br /><br />\r\n\r\n�����ξ��ʤϥ�������ɾ��ʤǤ�','',11);
INSERT INTO products_description VALUES (70,1,'Gift Certificate $  5.00','Purchase a Gift Certificate today to share with your family, friends or business associates!','',0);
INSERT INTO products_description VALUES (70,2,'���եȷ���500��','���եȷ���������ơ�����²����ͧã����Ҥ���֤�£��ޤ��礦��','',1);
INSERT INTO products_description VALUES (71,1,'Gift Certificate $ 10.00','Purchase a Gift Certificate today to share with your family, friends or business associates!','',0);
INSERT INTO products_description VALUES (71,2,'���եȷ� 1,000��','���եȷ���������ơ�����²����ͧã����Ҥ���֤�£��ޤ��礦��','',0);
INSERT INTO products_description VALUES (72,1,'Gift Certificate $ 25.00','Purchase a Gift Certificate today to share with your family, friends or business associates!','',0);
INSERT INTO products_description VALUES (72,2,'���եȷ� 2,500��','���եȷ���������ơ�����²����ͧã����Ҥ���֤�£��ޤ��礦��','',0);
INSERT INTO products_description VALUES (73,1,'Gift Certificate $ 50.00','Purchase a Gift Certificate today to share with your family, friends or business associates!','',0);
INSERT INTO products_description VALUES (73,2,'���եȷ� 5,000��','���եȷ���������ơ�����²����ͧã����Ҥ���֤�£��ޤ��礦��','',3);
INSERT INTO products_description VALUES (74,1,'Gift Certificate $100.00','Purchase a Gift Certificate today to share with your family, friends or business associates!','',0);
INSERT INTO products_description VALUES (74,2,'���եȷ� 10,000��','���եȷ���������ơ�����²����ͧã����Ҥ���֤�£��ޤ��礦��','',1);
INSERT INTO products_description VALUES (75,1,'Gift Certificates by attributes','Priced by Attributes Gift Certificates.','',0);
INSERT INTO products_description VALUES (75,2,'���եȷ��ʹ������˼���������','���եȷ��μ���ʳ��̡ˤ򥪥ץ����°�������ꤹ����Ǥ�','',2);
INSERT INTO products_description VALUES (76,1,'Test One','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (76,2,'����ץ�01','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (77,1,'Test Two','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (77,2,'����ץ�02','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (78,1,'Test Three','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (78,2,'����ץ�03','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (79,1,'Test Four','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (79,2,'����ץ�04','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (80,1,'Test Five','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (80,2,'����ץ�05','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (81,1,'Test Eight','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (81,2,'����ץ�08','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',2);
INSERT INTO products_description VALUES (82,1,'Test Ten','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (82,2,'����ץ�10','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',1);
INSERT INTO products_description VALUES (83,1,'Test Six','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (83,2,'����ץ�06','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (156,2,'��1�ۥ�����Ŭ�Ѥδ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���������оݤΥ��ƥ��ꡧ���֥�����10��OFF�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�����10��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br /><br />\r\n\r\nNOTE��<br />\r\n���ξ��ʤϡ��֥�����10��OFF�ץ��ƥ���ʢ����줬�ޥ��������ƥ���ˤ�¾�ˡ�\r\n�֥�������ò� > �������оݳ����ƥ���פˤ��󥯤���Ƥ��ޤ���<br /><br />\r\n�֥������оݳ����ƥ���פϡ������������򤷤Ƥ��ʤ����ƥ���Ǥ�����\r\n���ξ��ʤΥޥ��������ƥ���ϥ��������ꤵ�줿���ƥ���ʤΤǡ��֥������оݳ����ƥ���פ�ɽ���������⥻���뤬Ŭ�Ѥ�����������ܤ��Ƥ���������','',2);
INSERT INTO products_description VALUES (84,1,'Test Seven','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (84,2,'����ץ�07','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (85,1,'Test Twelve','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (85,2,'����ץ�12','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (86,1,'Test Nine','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (86,2,'����ץ�09','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (87,1,'Test Eleven','This is a test product to fill this category with more 12 randomly entered products to envoke the split page results on products that are not linked, have no specials, sales, etc.','',0);
INSERT INTO products_description VALUES (87,2,'����ץ�11','���ξ��ʤϡ�¾�Υ��ƥ���˥�󥯤��Ƥ��ޤ���','',0);
INSERT INTO products_description VALUES (91,2,'Extream Cat�ʥ�ȥ�����','Extream Cat���꡼�����ɻ�Ǥ���<br /><br />\r\n\r\n�����ξ��ʤϥ�������ɾ��ʤǤ�','',2);
INSERT INTO products_description VALUES (92,1,'A Free Product - All','This is a free product where there are no prices at all.  <br /><br />    The Always Free Shipping is also turned ON.  <br /><br />    If this is bought separately, the Zen Cart Free Charge payment module will show if there is no charges on shipping.  <br /><br />    If other products are purchased with a price or shipping charge, then the Zen Cart Free Charge payment module will not show and the shipping will be applied accordingly.','',0);
INSERT INTO products_description VALUES (92,2,'����1��̵�����ʡ����0�ߡ�������̵��','̵�����ʤΥ���ץ�Ǥ�����Ȥ�Ȥξ��ʲ��ʤ�0�ߤξ��ʤǡ�Ʊ����������̵�������ꤷ����ǡ��㤨�Хǥ⾦�ʤ䥵��ץ뾦������ʤɤΥ�����������ˤ�����Ǥ��礦��<br /><br /><br />�ʤ���Ʊ����������¾�ξ��ʤ��٤Ƥ��ǥ⾦�ʤǤ���Ȥ�������������ȯ�����ޤ��󤬡�¾�������������뾦�ʤ��������С��������̾��̤꤫����ޤ���<br /><br /><br /><br />���������<br /><br />��̵�����ʡ� �Ϥ�<br /><br />�����ʲ��ʡ���0��<br /><br />���������̵�������Ϥ����������̵��<br />','',12);
INSERT INTO products_description VALUES (93,1,'A Free Product - SALE','This is a free product that is also on special.  <br />    This should show as having a price, special price but then be free.  <br />','',0);
INSERT INTO products_description VALUES (93,2,'����4��̵�����ʡ��ò����ʤ򤵤��̵���ˡ�������ͭ��','̵�����ʤΥ���ץ�Ǥ�����Ȥ�Ȥξ��ʲ��ʤ�10000�ߤǡ�������ò�����7500�ߤξ��ʤǤ�����̵�����ʡ�֤Ϥ��פ����ꤷ�����Ȥˤ�ꡢ���Ū��̵�����ʤȤʤ�ޤ�����Ȥξ��ʲ��ʤȡ��ò����ʤ�ξ����ɽ�����졢����ˤ���餬�Ǥ��ä����̵�����ʤ�ɽ������ޤ���<br /><br />���ʼ��Τ�̵���Ȥʤ�ޤ�����������Ǥ�������̵���Ȥ������̾�������������褦���ꤷ�ޤ��������Υ������ϡ�����ץ뾦���������������������ô���Ƥ������������褦�ʾ������ꤷ�Ƥ��ޤ���<br /><br /><br /><br />���������<br /><br />��̵�����ʡ����Ϥ�<br /><br />�����ʲ��ʡ� 10000��<br /><br />���ò����ʡ� 7500��<br /><br />���������̵���� ���������̾�������Ŭ��<br />','',10);
INSERT INTO products_description VALUES (222,1,'FREESHIP1','','',0);
INSERT INTO products_description VALUES (222,2,'��1�۾������̵��','[�������̵��]�������\"�Ϥ�\"�ˤ��뤳�Ȥǡ����ξ��ʤν��̤���ʤ˴ط��ʤ��������̵�����ʤȤ��ư�����Ǥ������ץ������̤�̵���оݤ˴ޤޤ�ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[�������̵��]���Ϥ�<br />\r\n��[���ʽ���]��50Kg<br /><br />\r\n\r\n��������ۥ��ץ����°��<br />\r\n\"�ۥ磻��\"��\"�����\" �γƥ��ץ����ˤĤ��ơ�\r\n��[���ץ�������] 100Kg �� 40Kg','',9);
INSERT INTO products_description VALUES (223,1,'FREESHIP2','','',0);
INSERT INTO products_description VALUES (223,2,'��2������̵�����С�����뾦��','[�������̵��]�������\"�Ϥ�\"�ˤ��뤳�Ȥǡ����ξ��ʤν��̤���ʤ˴ط��ʤ��������̵�����ʤˤʤ�ޤ��������[����������뾦��]�������\"�Ϥ�\"�ˤ����Τǡ���ʸ��³�������轻������ϥ��ƥåפ������åפ���ޤ���<br />\r\n���ץ������̤�̵���оݤ˴ޤޤ�ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[����������뾦��]���Ϥ��������轻��򥹥��å�<br />\r\n��[�������̵��]���Ϥ�<br />\r\n��[���ʽ���]��50Kg<br /><br />\r\n\r\n��������ۥ��ץ����°��<br />\r\n\"�ۥ磻��\"��\"�����\" �γƥ��ץ����ˤĤ��ơ�\r\n��[���ץ�������] 100Kg �� 40Kg','',4);
INSERT INTO products_description VALUES (95,1,'Free Ship & Payment Virtual weight 10','Free Shipping and Payment  <br /><br />    The Price is set to 25.00 ... but what makes it Free is that this product has been marked as:  <br />  Product is Free: Yes  <br /><br />    This would allow the product to be listed with a price, but the actual charge is $0.00  <br /><br />    The weight is set to 10 but could be set to 0. What really makes it truely Free Shipping is that it has been marked to be Always Free Shipping.  <br /><br />    Always Free shipping is set to: Yes<br />  This will not charge for shipping, but requres a shipping address.  <br /><br />    Because there is no shipping and the price is 0, the Zen Cart Free Charge comes up for the payment module and the other payment modules vanish.  <br /><br />    You can change the text on the Zen Cart Free Charge module to read as you would prefer.  <br /><br />    Note: if you add products that incur a charge or shipping charge, then the Zen Cart Free Charge payment module will vanish and the regular payment modules will show.','',0);
INSERT INTO products_description VALUES (95,2,'����2��̵�����ʡ����1���ߤΤȤ�����ʡ���������̵����','̵�����ʤǡ���������̵������Ǥ���<br /><br /><br />���ξ��ʲ��ʤ�10000�ߤǤ�����̵�����ʤ����ꤵ��Ƥ��뤿��̵���Ȥʤ�ޤ���<br />�ޤ������ʽ��̤�10Kg����ޤ�����������̵�������ꤷ�Ƥ��ޤ��Τ������⤫����ޤ��󡣤��������С�����뾦�ʡᤤ���������ꤷ�Ƥ���Τǥ桼���������轻������Ϥ�ɬ�פǤ���<br /><br />���������<br />��̵�����ʡ� �Ϥ�<br />�����ʲ��ʡ���0��<br />������������뾦�ʡ� �������������轻�꤬ɬ��<br />���������̵�������Ϥ����������̵��','',14);
INSERT INTO products_description VALUES (101,2,'����3�۲��ʤ��䤤�礻���ʡ�����ȥ��������ɽ����','���ξ��ʤϥ������оݾ��ʤǤ������ʲ��ʡ�����ˤ��ò����ʡ���������ʤ�ɽ������ޤ��������ξ��ʤ򥫥����������ʸ���뤳�ȤϤǤ����������Τ��䤤�礻��ɬ�פǤ���<br /><br />�̾�ι����ܥ���Τ����ˡֲ��ʤ��䤤��碌���� �ץܥ���ɽ�����졢����å�����Ȥ��䤤�礻�ե����ब�����ޤ���<br /><br /><br /><br />���������<br /><br />�����ʤ��䤤��碌���ʡ����Ϥ�<br /><br />�����ʲ��� (�ͥå�)�� 10000��<br /><br />���ò����ʡ� 9000��<br />�����ʤδ����䥻����δ����������ξ��ʥޥ��������ƥ����10��Υ��������ꤷ�Ƥ���','',9);
INSERT INTO products_description VALUES (102,1,'Normal Product','<p>This is a normal product priced at $15</p><p>There are quantity discounts setup which will be discounted from the Products Price.</p><p>Discounts are added on the Products Price Manager.</p>','',0);
INSERT INTO products_description VALUES (102,2,'����1�ۡ��İʾ��㤦��1�Ĥ�����������','���̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ����Ǥ���<br />9�ĤޤǤ������10��20�Ĥ������10�������20��49�Ĥ�20�������50�İʾ��25������Ȥ����褦�ˡ����Ψ�ˤ����̳�������ꤷ�ޤ�����<br /><br />NOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br /><br /><br />�������⡧���ʲ��ʤδ�����<br /><br />�ʲ�������ˤ�ꡢ�׻����ϡ��������������ߡ�1�ݿ��̳��Ψ�ˡѡ��ߡ��������Ȥʤ�ޤ���<br />���ǥ���������ȥ����ס������Ψ<br />�����β��ʤ���ǥ���������ȡ�������<br />���������<br /><br />��------------------------------------------<br /><br />�������٥롡�������Ǿ��¤�ͭ�����̡������������<br /><br />��------------------------------------------<br /><br />�����3����������������10���ʸġˡ�����������������10.0���ʡ�ˡ�<br /><br />�����4����������������20���ʸġˡ�����������������20.0���ʡ�ˡ�<br /><br />�����5����������������50���ʸġˡ�����������������25.0���ʡ�ˡ�<br /><br />��------------------------------------------<br /><br />','',11);
INSERT INTO products_description VALUES (103,1,'Normal Product��2��','','',0);
INSERT INTO products_description VALUES (103,2,'����2�ۡ��İʾ��㤦��1�Ĥ�������߰���','���̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ����Ǥ���<br />9�ĤޤǤ������10��20�Ĥ������1000�߰�����20��49�Ĥ�1500�߰�����50�İʾ��2000�߰����Ȥ����褦�ˡ�������������Ͱ����������̳�������ꤷ�ޤ�����<br /><br />NOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br /><br /><br />�������⡧���ʲ��ʤδ�����<br /><br />�ʲ�������ˤ�ꡢ�׻����ϡ�������������������Ͱ����ˡ��ߡ��������Ȥʤ�ޤ���<br /><br />���ǥ���������ȥ����ס��������۳��<br />�����β��ʤ���ǥ���������ȡ�������<br />���������<br /><br />��------------------------------------------<br />�������٥롡�������Ǿ��¤�ͭ�����̡������������<br />��------------------------------------------<br />�����3����������������10���ʸġˡ�����������������1000���ʱߡˡ�<br />�����4����������������20���ʸġˡ�����������������1500���ʱߡˡ�<br />�����5����������������50���ʸġˡ�����������������2000���ʱߡˡ�<br />��------------------------------------------<br />','',8);
INSERT INTO products_description VALUES (155,1,'A Free Product with Attributes','This is a free product that is also on special.  <br /><br />    This should show as having a price, special price but then be free.  <br /><br />    Attributes can be added that can optionally be set to free or not free  <br /><br />    The Color Red attribute is priced at $5.00 but marked as a Free Attribute when the Product is Free  <br /><br />    The Size Medium attribute is priced at $1.00 but marked as a Free Attribute when Product is Free','',0);
INSERT INTO products_description VALUES (101,1,'A Call for Price Product SALE','This is a Call for Price product that is also on special and has a Sale price via Sale Maker.<br /><br /><br /><br /><br />This should show as having a price, special price but then be Call for Price. This means you cannot buy it.<br /><br /><br /><br /><br />The Add to Cart buttons automatically change to Call for Price, which is defined as: TEXT_CALL_FOR_PRICE<br /><br /><br /><br /><br />This link will take the customer to the Contact Us page.<br /><br /><br />','',0);
INSERT INTO products_description VALUES (98,1,'A Free Product with Attributes','This is a free product that is also on special.  <br /><br />    This should show as having a price, special price but then be free.  <br /><br />    Attributes can be added that can optionally be set to free or not free  <br /><br />    The Color Red attribute is priced at $5.00 but marked as a Free Attribute when the Product is Free  <br /><br />    The Size Medium attribute is priced at $1.00 but marked as a Free Attribute when Product is Free','',0);
INSERT INTO products_description VALUES (98,2,'����5��̵�����ʡ�����̵�������ɥ��ץ�����ͭ��','���ʤ�̵�����ʤˤ��Ƥ⡢���ʥ��ץ������ɲ����������ͭ���Τޤޤˤ�����������Ǥ���<br /><br />\r\n\r\n������Ǥϡ����顼���åɤ����򤷤��������ɲ������500�������ˤ�ȯ����������ˤʤäƤ��ޤ���<br />\r\n����ˡ��־��ʤ�̵���ΤȤ�°���ˤ����ʤ�̵���ˤ���ᤤ�����פ����ꤵ��Ƥ���Τǡ����ʤ�̵�����ʤ����ꤷ�Ƥ�\r\n°�����ʤˤϱƶ����ޤ��󡣤Ĥޤꡢ��åɤ����򤹤��500�ߡ�¾�ο������򤷤��Ȥ���0�ߤȤʤ�ޤ���<br /><br />\r\n\r\n\r\n���������<br />\r\n��̵�����ʡ� �Ϥ�<br /><br />\r\n\r\n�ڥ��ץ����°�������⡧ ���顼�֥�åɡס�<br />\r\n�����ץ����̾�����顼<br />\r\n�����ץ�����͡���å�<br />\r\n��°���ˤ��������ꡧ����500��<br />\r\n�����ʤ�̵���ΤȤ�°���ˤ����ʤ�̵���ˤ��롧 ������','',18);
INSERT INTO products_description VALUES (155,2,'����6��̵�����ʡ�����̵���ʤ饪�ץ�����̵��','���ʤ�̵�����ʤˤ����顢���ʥ��ץ������ɲ����������̵���ˤ�����������Ǥ���<br /><br />\r\n\r\n������Ǥϡ����顼���åɤ����򤷤��������ɲ������500�������ˤ�ȯ����������ˤʤäƤ��ޤ���<br />\r\n����ˡ��־��ʤ�̵���ΤȤ�°���ˤ����ʤ�̵���ˤ����Ϥ��פ����ꤵ��Ƥ���Τǡ����ʤ�̵�����ʤ����ꤷ����\r\n°�����ʤ�̵���ˤʤ�ޤ����Ĥޤꡢ��åɤ����򤷤Ƥ�0�ߤǤ���<br /><br />\r\n\r\n\r\n���������<br />\r\n��̵�����ʡ� �Ϥ�<br /><br />\r\n\r\n�ڥ��ץ����°�������⡧ ���顼�֥�åɡס�<br />\r\n�����ץ����̾�����顼<br />\r\n�����ץ�����͡���å�<br />\r\n��°���ˤ��������ꡧ����500�ߡ��ʥ١������ʤ�500��������<br />\r\n�����ʤ�̵���ΤȤ�°���ˤ����ʤ�̵���ˤ��롧 �Ϥ�','',3);
INSERT INTO products_description VALUES (99,1,'A Call No Price','This is a Call for Price product with no price<br /><br /><br />This should show as having a price, special price but then be Call for Price. This means you cannot buy it.<br /><br />','',0);
INSERT INTO products_description VALUES (99,2,'����1�۲��ʤ��䤤�礻���ʡ����ɽ���ʤ���','����ϡֲ��ʤ��䤤�礻���ʡפ���Ǥ���<br /><br />���ʲ��ʡ�����ˤ�0�ߤ����ꤷ�Ƥ������ɽ���Ϥ���ޤ���ʤ�����̵�����ʤˤ����ꤵ��Ƥ��ʤ��Τ�̵���ޡ����ϤĤ��ʤ��ˡ����ξ��ʤ򥫥����������ʸ���뤳�ȤϤǤ����������Τ��䤤�礻��ɬ�פǤ���<br /><br />�̾�ι����ܥ���Τ����ˡֲ��ʤ��䤤��碌���� �ץܥ���ɽ�����졢����å�����Ȥ��䤤�礻�ե����ब�����ޤ���<br /><br /><br /><br />���������<br /><br />��̵�����ʡ� ������<br /><br />�����ʤ��䤤��碌���ʡ����Ϥ�<br /><br />�����ʲ��� (�ͥå�)�� 0��','',5);
INSERT INTO products_description VALUES (100,1,'A Call for Price Product','This is a Call for Price product that is also on special. <br /><br /><br />This should show as having a price, special price but then be Call for Price. This means you cannot buy it','',0);
INSERT INTO products_description VALUES (100,2,'����2�۲��ʤ��䤤�礻���ʡʲ���ɽ�������','���ʤ��䤤�礻���ʤ���Ǥ�<br /><br /><br />���ξ��ʤˤϾ��ʲ��ʤ�ɽ������ޤ��������ξ��ʤ򥫥����������ʸ���뤳�ȤϤǤ����������Τ��䤤�礻��ɬ�פǤ���<br /><br />�̾�ι����ܥ���Τ����ˡֲ��ʤ��䤤��碌���� �ץܥ���ɽ�����졢����å�����Ȥ��䤤�礻�ե����ब�����ޤ���<br /><br /><br /><br />���������<br /><br />�����ʤ��䤤��碌���ʡ����Ϥ�<br /><br />�����ʲ��� (�ͥå�)�� 10000��<br /><br />���ò����ʡ� 9000��','',9);
INSERT INTO products_description VALUES (104,1,'Normal Product(3)','','',0);
INSERT INTO products_description VALUES (104,2,'����3�ۡ��İʾ��㤦��1�Ĥ����������','���̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ����Ǥ���<br />9�ĤޤǤ�ñ��10000�ߡ�10��20�Ĥ�ñ��9500�ߡ�20��49�Ĥ�ñ��9000�ߡ�50�İʾ��ñ��8000�ߤȤ����褦�ˡ�ñ�������������ʤˤʤ�褦�ʿ��̳�������ꤷ�ޤ�����<br /><br />NOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br /><br /><br />�������⡧���ʲ��ʤδ�����<br /><br />�ʲ�������ˤ�ꡢ�׻����ϡ���������������ʡ��ߡ��������Ȥʤ�ޤ���<br /><br />���ǥ���������ȥ����ס�����������<br />�����β��ʤ���ǥ���������ȡ�������<br />���������<br /><br />��------------------------------------------<br />�������٥롡�������Ǿ��¤�ͭ�����̡������������<br />��------------------------------------------<br />�����3����������������10���ʸġˡ�����������������9500���ʱߡˡ�<br />�����4����������������20���ʸġˡ�����������������9000���ʱߡˡ�<br />�����5����������������50���ʸġˡ�����������������8000���ʱߡˡ�<br />��------------------------------------------<br />','',8);
INSERT INTO products_description VALUES (115,1,'SEO','','',0);
INSERT INTO products_description VALUES (115,2,'���ʥڡ����ؤ�SEO��META��title��������','SEO�к��ΰ�ĤȤ��ơ�Zen Cart�Ǥϸ��̾��ʤ��Ȥ�META������title����������Ū�����ꤹ�뤳�Ȥ��Ǥ��ޤ���<br /><br />\r\n\r\n���Υ���ץ뾦�ʤ��Ф��ơ��ʲ��Τ褦�����ꤷ�ޤ�����<br />\r\n�֥饦���Ρ֥�������ɽ���פǡ����Υڡ�����HTML��������<head>��</head>��ʬ���ǧ���ƤߤƤ���������<br /><br />\r\n\r\n�������⡧META��<br />\r\n��title��<br />\r\n�����֤��ξ��ʥڡ����ˤ�����Ū��title���������ꤷ�ޤ�������<br /><br />\r\n��META��keyword�ˡ�<br />\r\n�����֤��ξ��ʥڡ����ˤ�����Ū��META��keyword�ˤ����ꤷ�Ƥ��ޤ�,���ʥ������1,���ʥ������2,���ʥ������3��<br /><br />\r\n\r\n��META��description�ˡ�<br />\r\n�����֤��ξ��ʥڡ����ˤ�����Ū��META��description�ˤ����ꤷ�Ƥ��ޤ���Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus sit amet velit��������<br /><br />\r\n\r\nNOTE��<br />\r\n�����ʤߤˤ��ε�ǽ�����Ѥ��ʤ��Ƥ⡢Zen Cart�Ǥ�ɸ�ൡǽ�Ȥ���META��title�����˾���̾����ʤ���¾�����Ǥ�������褦�ˤǤ��Ƥ��ޤ���<br />\r\n���������̤ΰ�������侦�ʾ�������꤫�顢TITLE�����˾��ʲ��ʤ�ޤ��ʴޤ�ʤ��ˤ�META��description�ˤΥƥ�����Ĺ�ʤɤ����꤬�Ǥ��ޤ�������������ʤ��Ф���Ŭ�Ѥ���ޤ���<br /><br />','',15);
INSERT INTO products_description VALUES (113,1,'Normal Product(8)','','',0);
INSERT INTO products_description VALUES (113,2,'����8�ۥ��顼����OK�ǹ�ס��İʾ�ʤ��ò��򤵤�˿��̳��','�������䥫�顼�ʤɤΥ��ץ����°���������������ò����ꤵ�줿���ʤ��Ф��ƿ��̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ�Ѥ������ʣ����������Ǥ���<br />9�ĤޤǤ������10��20�Ĥ������10�������20��49�Ĥ�20�������50�İʾ��25������Ȥ����褦�ˡ����Ψ�ˤ����̳�������ꤷ�ޤ�����<br />�ò��١����ǿ��̳��Ψ��Ŭ�Ѥ�������ʳ��ϡ����Ρ���6�ۤ�Ʊ������Ǥ����դ�ޤ����ɤ��Ѥ�뤫����٤ƤߤƤ���������<br />NOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br />�������⡧���ʲ��ʤδ�����<br /><br />�ʲ�������ˤ�ꡢ�׻����ϡ�����������ò��ߡ�1�ݿ��̳��Ψ�ˡѡ��ߡ��������Ȥʤ�ޤ���<br />���ǥ���������ȥ����ס������Ψ<br />�����β��ʤ���ǥ���������ȡ����ò�<br />���������<br />��------------------------------------------<br />�������٥롡�������Ǿ��¤�ͭ�����̡������������<br />��------------------------------------------<br />�����3����������������10���ʸġˡ�����������������10.0���ʡ�ˡ�<br />�����4����������������20���ʸġˡ�����������������20.0���ʡ�ˡ�<br />�����5����������������50���ʸġˡ�����������������25.0���ʡ�ˡ�<br />��------------------------------------------<br /><br />\r\n�������⡧���ץ����°����<br />\r\n1�˥��顼�֥ۥ磻�ȡ�<br />\r\n���������ʡ� ��0��<br />\r\n�������ò�/����������Ŭ�Ѥ������ʤ�١������ʤȤ��ư��������Ϥ�<br />\r\n2�˥��顼�֥֥�å���<br />\r\n���������ʡ�����1000��<br />\r\n�������ò�/����������Ŭ�Ѥ������ʤ�١������ʤȤ��ư��������Ϥ�<br />\r\n������°���ˤ�����������١������ʤ˴ޤ�롧���Ϥ�<br /><br />\r\n\r\nNOTE��<br />\r\n������Ǥϡ����ץ����򤤤����꺮���Ƥ褯�����ξ��ʤι�פ������̰ʾ�Ǥ���Сʸġ��Υ��ץ�������򤬤ʤ�Ǥ���˳�������Ŭ�Ѥ���ޤ���<br />\r\n�Ĥޤꡢ�ۥ磻��5�����������졢³���ƥ֥�å���5�����������줿�����ǹ��10���ȸ��ʤ���Ƴ�����ʤ�Ŭ�Ѥ���ޤ���<br />\r\n������ۥ磻�Ȥ��뤤�ϥ֥�å�ñ�Τ�10�İʾ�������Ƥ�������ޤ���<br />\r\n����ϡ����ʲ��ʤδ����ˤ����ơ��ֿ��̤�Ʊ�쾦�ʤǤ���Х��ץ�����ͤ˴ط��ʤ��绻�����Ϥ��פ����ꤷ�����ˤ��Τ褦��ư��ˤʤ�ޤ���<br /><br />','',9);
INSERT INTO products_description VALUES (112,1,'Normal Product(7)','','',0);
INSERT INTO products_description VALUES (112,2,'����7�ۥ��顼����OK�ǹ�ס��İʾ�ʤ���','�������䥫�顼�ʤɤΥ��ץ����°������ľ��ʤˡ����̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ�Ѥ������ʣ����������Ǥ���<br />\r\n9�ĤޤǤ������10��20�Ĥ������10�������20��49�Ĥ�20�������50�İʾ��25������Ȥ����褦�ˡ����Ψ�ˤ����̳�������ꤷ�ޤ�����<br /><br />\r\n������Ǥϡ����ץ����򤤤����꺮���Ƥ褯�����ξ��ʤι�פ������̰ʾ�Ǥ���Сʸġ��Υ��ץ�������򤬤ʤ�Ǥ���˳�������Ŭ�Ѥ���ޤ���<br />\r\n�Ĥޤꡢ�ۥ磻��5�����������졢³���ƥ֥�å���5�����������줿�����ǹ��10���ȸ��ʤ���Ƴ�����ʤ�Ŭ�Ѥ���ޤ���<br />\r\n������ۥ磻�Ȥ��뤤�ϥ֥�å�ñ�Τ�10�İʾ�������Ƥ�������ޤ���<br />\r\n����ϡ����ʲ��ʤδ����ˤ����ơ��ֿ��̤�Ʊ�쾦�ʤǤ���Х��ץ�����ͤ˴ط��ʤ��绻�����Ϥ��פ����ꤷ�����ˤ��Τ褦��ư��ˤʤ�ޤ���<br /><br />\r\n\r\n\r\nNOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br />\r\n\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�ʲ�������ˤ�ꡢ�׻����ϡ��������������ߡ�1�ݿ��̳��Ψ�ˡѡ��ߡ��������Ȥʤ�ޤ���<br />\r\n���ǥ���������ȥ����ס������Ψ<br />\r\n�����β��ʤ���ǥ���������ȡ�������<br />\r\n���������<br /><br />\r\n���������̤�Ʊ�쾦�ʤǤ���Х��ץ�����ͤ˴ط��ʤ��绻���롧���Ϥ�<br />\r\n��------------------------------------------<br />\r\n�������٥롡�������Ǿ��¤�ͭ�����̡������������<br />\r\n��------------------------------------------<br />\r\n�����3����������������10���ʸġˡ�����������������10.0���ʡ��<br />\r\n�����4����������������20���ʸġˡ�����������������20.0���ʡ��<br />\r\n�����5����������������50���ʸġˡ�����������������25.0���ʡ��<br />\r\n��-----------------------------------------<br /><br />\r\n\r\n�������⡧���ץ����°����<br />\r\n1�˥��顼�֥ۥ磻�ȡ�<br />\r\n���������ʡ� ��0��<br />\r\n�������ò�/����������Ŭ�Ѥ������ʤ�١������ʤȤ��ư��������Ϥ�<br />\r\n2�˥��顼�֥֥�å���<br />\r\n���������ʡ�����1000��<br />\r\n�������ò�/����������Ŭ�Ѥ������ʤ�١������ʤȤ��ư��������Ϥ�<br />\r\n������°���ˤ�����������١������ʤ˴ޤ�롧���Ϥ�','',16);
INSERT INTO products_description VALUES (110,1,'Normal Product��4��','','',0);
INSERT INTO products_description VALUES (110,2,'����4�ۡ��ĤޤǤ��ò�������ʾ�ʤ�����Ρ������','�ò����ʤ����ꤵ�줿���ʤ˿��̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ�Ѥ�����Ǥ���<br />�������ʤ��������ò����ʤ�Ŭ�Ѥ��졢������ʾ��������ȡ�1�Ĥ�����β��ʤ�������Ρ����Ͱ��������̳����Ŭ�Ѥ���ޤ����Ĥޤ���̳��ʬ������١����Ƿ׻����������Ǥ���<br /><br />NOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br /><br /><br />�������⡧���ʲ��ʤδ�����<br /><br />�ʲ�������ˤ�ꡢ�׻����ϡ�<br />�������̳���ʲ��λ�������������ò� �� ������<br />�������̳���ʾ�λ������������������ߡ�1�ݿ��̳��Ψ�ˡѡ��ߡ��������Ƿ׻�����ޤ���<br /><br />���ǥ���������ȥ����ס������Ψ�ʡ��<br />�����β��ʤ���ǥ���������ȡ������<br />���������<br /><br />��------------------------------------------<br />�������٥롡�������Ǿ��¤�ͭ�����̡������������<br />��------------------------------------------<br />�����3����������������10���ʸġˡ�����������������10���ʡ�ˡ�<br />�����4����������������20���ʸġˡ�����������������20���ʡ�ˡ�<br />�����5����������������50���ʸġˡ�����������������25���ʡ�ˡ�<br />��------------------------------------------<br />','',17);
INSERT INTO products_description VALUES (111,1,'Normal Product(5)','','',0);
INSERT INTO products_description VALUES (111,2,'����5�ۡ��ĤޤǤ��ò�������ʾ�ʤ��ò��򤵤�ˡ������','�ò����ʤ����ꤵ�줿���ʤ˿��̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ�Ѥ�����Ǥ���<br />������ʾ��������ȡ�1�Ĥ�����β��ʤ����ò����ʤ��餵��ˡ����Ͱ�����ޤ����Ĥޤ���ʬ���ò��١����Ƿ׻����������Ǥ���<br /><br />NOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br /><br /><br />�������⡧���ʲ��ʤδ�����<br /><br />�ʲ�������ˤ�ꡢ�׻����ϡ�����������ò��ߡ�1�ݿ��̳��Ψ�ˡ��ߡ��������Ȥʤ�ޤ���<br /><br />���ǥ���������ȥ����ס������Ψ�ʡ��<br />�����β��ʤ���ǥ���������ȡ����ò�<br />���������<br />��------------------------------------------<br />�������٥롡�������Ǿ��¤�ͭ�����̡������������<br />��------------------------------------------<br />�����3����������������10���ʸġˡ�����������������10���ʡ��<br />�����4����������������20���ʸġˡ�����������������20���ʡ��<br />�����5����������������50���ʸġˡ�����������������25���ʡ�ˡ�<br />��------------------------------------------<br />','',12);
INSERT INTO products_description VALUES (116,1,'SEO2','','',0);
INSERT INTO products_description VALUES (116,2,'META��title���ꤷ�Ƥ��ʤ�ɸ��ξ��ʥڡ�����','�����ɸ��ξ��ʥڡ�����META�����㡢title���������Ū�����ꤷ�Ƥ��ʤ��ˤΥ���ץ�Ǥ���<br /><br />\r\n\r\nSEO�к��ΰ�ĤȤ��ơ�Zen Cart�Ǥϸ��̾��ʤ��Ȥ�META������title����������Ū�����ꤹ�뤳�Ȥ��Ǥ��ޤ�����<br />\r\n���Υڡ�����ߤƤ狼��褦�ˡ�<br />\r\nZen Cart�Ǥ�ɸ�ൡǽ�Ȥ���META��title�����˾���̾����ʤ���¾�����Ǥ�������褦�ˤǤ��Ƥ��ޤ���<br /><br />\r\n\r\n�������̤ΰ�������侦�ʾ�������꤫�顢TITLE�����˾��ʲ��ʤ�ޤ��ʴޤ�ʤ��ˤ�META��description�ˤΥƥ�����Ĺ�ʤɤ����꤬�Ǥ��ޤ�������������ʤ��Ф���Ŭ�Ѥ���ޤ���<br /><br />','',3);
INSERT INTO products_description VALUES (142,1,'ATTR_CHKBOX1','','',0);
INSERT INTO products_description VALUES (142,2,'��1�ۥ��եȥ��ץ����','���ʥ��ץ����Υ����ס�CHECKBOX�ʥ����å��ܥå����ˤγ��ѥ���ץ�Ǥ���<br /><br />�����å��ܥå��������פˤ���ȡ�1���ʤ�����ʣ���Υ��ץ�����Ʊ������Ǥ��ޤ���<br />������Ǥϡ���£���Ѥ�ץ쥼��ȸ����Υ��ץ����Ȥ��ơ���1�˥��ե���������2�˥�å����������ɡ���3�˥��ꥸ�ʥ륭���ۥ�����դ���3�Ĥ����ꤷ�ޤ�����<br />���Τ������ꥸ�ʥ륭���ۥ�����դ���ͭ�����ץ����¾��2�Ĥ�̵�������ӥ��Ȥ��ޤ������ʤ����ץ����������ò�/������αƶ��򤦤��ʤ�����ˤ��Ƥ��ޤ���<br /><br /><br />���������<br />�����ץ����̾�������եȥ��ץ����<br />�������ץ����Υ����ס���CHECKBOX<br />�����ץ����°������ʤȽ��̡� <br />�����ץ�����͡��������������ץ������ʡ������ò�����/������ˤ�äƳ����Ŭ�Ѥ���<br />��--------------------------------------------------------------<br />����1�˥��ե������������� ��������0�ߡ�����������������<br />����2�˥�å����������ɡ���������0�ߡ�����������������<br />����3�˥����ۥ�����դ�����100�ߡ�����������������<br />','',16);
INSERT INTO products_description VALUES (140,1,'ATTR_TEXT2','','',0);
INSERT INTO products_description VALUES (140,2,'��2��̾���쥪�ץ�������1��ɤ������','���ʥ��ץ����Υ����ס�TEXT�γ��ѥ���ץ�Ǥ���<br />������Ʊ�͡�������Ǥ�ԥ���Ĥؤ�̾�������Ȥ��ƻȤäƤ��ޤ���<br />������Ǥ�1ʸ�����������������Ǥ������������Ǥ�1��ɤ�����ǥ�����Ȥ��ޤ���Word�ǥ�����Ȥ���Τ����ܸ�ˤϤʤ��ޤʤ���������⤷��ޤ��󤬡�����<br /><br /><br />2��ɤޤ�̵����3��ɰʾ�Ǥ�1��ɤ�����20�ߤ��ɲ������T����Ĥ˻����ʸ���������������Ǥ���<br /><br />���������<br />�����ץ����̾����̾�����1��<br />�������ץ����Υ����ס���TEXT<br />�����ƥ�����°���κ�Ĺ��ɽ��������<br />�������������ȡ�<br />�������������줿��ʸ��������Ϥ��Ƥ�������������40ʸ���ޤǡˡ���<br />���������ԡ���1<br />��������ɽ������������40<br />����������Ĺ����80<br />�����ʥ��ץ����°�� �� ���ʤȽ���<br />�������դ��Ȥβ��ʡ�����20��<br />����̵���θ��ա�����2�ʥ�ɡ�<br />����°���ե饰<br />��������°���ˤ�äƲ��ʤ��Ĥ�����Ȥ����ܲ��ʤ˴ޤ�롧���Ϥ�<br />���������ƥ��������Ϥ�ɬ�ܤˤ��롧���Ϥ�','',5);
INSERT INTO products_description VALUES (141,1,'ATTR_RDONLY','','',0);
INSERT INTO products_description VALUES (141,2,'ɽ���Τߥ��ץ����������','���ץ����°����������ˡ�ϡ����ʥХꥨ�������������Ȥ��Ƥ����Ѥ����ǤϤ���ޤ���<br />���ʥڡ������귿ʸ��ɽ���������ӤȤ��Ƥ����Ѳ�ǽ�Ǥ���<br />���ξ��ϡ����ץ����Υ����פȤ��ơ�READ ONLY�פ�Ȥ��ޤ���<br /><br />���������<br />�����ץ����̾��������������ˡ<br />�������ץ����Υ����ס���READ ONLY<br />�����ץ������<br />����1���� 100�� <br />����2�ˣ�.1����<br />����3���������ʼ��ή�ˤޤ��ϼ�Ӥ����岹��40��ޤǡ������ץ�����������Ͽ<br />����4�˥��������油�ʡ�160��ˤޤ� ���������ץ�����������Ͽ','',17);
INSERT INTO products_description VALUES (139,1,'ATTR_TEXT1','','',0);
INSERT INTO products_description VALUES (139,2,'��1��̾���쥪�ץ�������1ʸ���������','���ʥ��ץ����Υ����ס�TEXT�γ��ѥ���ץ�Ǥ���<br />������Ǥϡ��ԥ���Ĥؤ�̾�������Ȥ��ƻȤäƤ��ޤ���<br /><br /><br />̾���쥨�ꥢ�Ϻ���2�ԡ�<br />����1���ܤ�5ʸ���ޤ�̵����6ʸ���ʾ�ϰ�ʸ��10��<br />����2���ܤ�1ʸ��5��<br />���ɲ������T����Ĥ˻����ʸ�������������������ꤷ�ޤ�����<br /><br />�������⡧���ʾ����<br />\r\n������°���ˤ����ʡ����Ϥ�<br /><br />��������ۡ��� 1����̾���쥨�ꥢ��<br />�����ץ����̾����̾�����1��<br />�������ץ����Υ����ס���TEXT<br />�����ƥ�����°���κ�Ĺ��ɽ��������<br />�������������ȡ�<br />����������1���ܤ������ʸ�������Ϥ��Ƥ�������������40ʸ���ޤǡˡ���<br />���������ԡ���1<br />��������ɽ������������40<br />����������Ĺ����80<br />�����ʥ��ץ����°�� �� ���ʤȽ���<br />����ʸ�����Ȥβ��ʡ�����10��<br />����̵����ʸ��������5ʸ��<br />����°���ե饰<br />��������°���ˤ�äƲ��ʤ��Ĥ�����Ȥ����ܲ��ʤ˴ޤ�롧���Ϥ�<br />���������ƥ��������Ϥ�ɬ�ܤˤ��롧���Ϥ�<br /><br />-----------------------<br />��������ۡ���2����̾���쥨�ꥢ��<br />�����ץ����̾����̾�����2��<br />�������ץ����Υ����ס���TEXT<br />�����ƥ�����°���κ�Ĺ��ɽ��������<br />�������������ȡ�<br />����������2���ܤ������ʸ�������Ϥ��Ƥ�������������40ʸ���ޤǡˡ���<br />���������ԡ���1<br />��������ɽ������������40<br />����������Ĺ����80<br />�����ʥ��ץ����°�� �� ���ʤȽ���<br />����ʸ�����Ȥβ��ʡ�����5��<br />����̵����ʸ��������0ʸ��<br />����°���ե饰<br />��������°���ˤ�äƲ��ʤ��Ĥ�����Ȥ����ܲ��ʤ˴ޤ�롧���Ϥ�<br />���������ƥ��������Ϥ�ɬ�ܤˤ��롧���Ϥ�<br /><br />','',7);
INSERT INTO products_description VALUES (144,1,'ATTR_DROPDOWN1','','',0);
INSERT INTO products_description VALUES (144,2,'��1�ۥ����������顼����','���ʥ��ץ����Υ����ס�DROPDOWN�ʥꥹ�Ȥ�������ˤ����RADIO�ʥ饸���ܥ���ˤγ��ѥ���ץ�Ǥ���<br /><br />T����Ĥ�����Ǥ褯�Ȥ�����Ȥ��ơ��������䥫�顼�������ˤ��ޤ�����<br />DROPDOWN��RADIO�Ǥϡ�ʣ�������������椫��1�Ĥ��������ǽ�Ǥ���<br /><br />�����ˤ�ä��ɲ���������ꤹ�뤳�Ȥ��ǽ�Ǥ���<br />�����Ǥ�XL��������DROPDOWN�ˤȥ֥�å���RADIO�ˤΤߡ�500�ߤ����ꤷ�ޤ�����<br /><br />���������<br />�����ץ����̾����������<br />�������ץ����Υ����ס���DROPDOWN<br />�������ץ�����͡���S��M��L��XL�ʡ�500�ߡˡ��֤����򤯤�������������<br />------------------------------<br />�����ץ����̾�������顼<br />�������ץ����Υ����ס���RADIO<br />�������ץ�����͡����ۥ磻�ȡ������������֥롼���֥�å��ʡ�500�ߡ�<br /><br />NOTE��<br /> �֤����򤯤������������ץ��ץ�����ͤ�°���ե饰����ϡ�<br />����ɽ���Τߡס�\"�Ϥ�\"�ˡ����ġ�°���ˤ�äƲ��ʤ��Ĥ�����Ȥ����ܲ��ʤ˴ޤ��ס�\"������\"�����ꤵ��Ƥ��롣 <br />������ˤ�ꡢ�֤����򤯤������������פ����򤷤����֤ǥ���������뤳�ȤϤǤ��ʤ����ᡢ�桼����ɬ��¾�Τ����줫��S�������Ȥ�M�������ˤ����֤��Ȥˤʤ롣<br /><br />\r\n\r\nNOTE��\r\n���顼����Υ饸���ܥ���ˡ����顼���åסʿ����ܡˤ�ź�����Ƥ��ޤ���������ϡ����ʥ��ץ����°����°���θ��ܲ��� �ǲ�������Ͽ�����ɽ������ޤ���<br /><br />\r\n�ʤ����饸���ܥ��󡢥��ץ����̾�����ܲ��������֤ϡ��֥��ץ����̾�δ����פˤơ�<br />\r\n����(Row)�������°������<br />\r\n���饸���ܥ��󡦥����å��ܥå�����°����������<br />\r\n���ѹ����뤳�Ȥ��Ǥ��ޤ���','',28);
INSERT INTO products_description VALUES (152,1,'ATTR_DROPDOWN2','','',0);
INSERT INTO products_description VALUES (152,2,'��2�ۥ����������顼����ʥ�����10�󥪥�Ŭ�ѡ�','���ʥ��ץ����Υ����ס�DROPDOWN�ʥꥹ�Ȥ�������ˤ����RADIO�ʥ饸���ܥ���ˤγ��ѥ���ץ�Ǥ���<br /><br />������ʡ�1�ۥ����������顼����ˤȥ��ץ�����������Ƥ�����Ʊ���Ǥ�����<br />\r\n���ξ��ʤϥ�����10��������оݤˤʤäƤ��������ۤʤ�ޤ���<br /><br />\r\n\r\n�����ˤ�ä��ɲ���������ꤹ�뤳�Ȥ��ǽ�ǡ�<br />\r\n���ξ�硢�����뤬�ɲ������Ŭ�Ѥ���뤫�ɤ����ϥ��ץ����°�������꼡��Ǥ���<br />\r\n\r\n�㤨��XL���������ɲ������500�ߤΤȤ���<br />\r\n�֥��ץ����°���ˤ�����Ŭ�Ѥ����Ϥ��פ����ꤷ�Ƥ���Τ�<br />\r\n�����ɲ�������Ф��Ƥ�10�������Ŭ�Ѥ���뤳�Ȥˤʤꡢ<br />\r\nXL������������μºݤ��ɲ�����ϡ�450�ߤǤ���<br /><br />\r\n\r\n������Ф��ƥ֥�å��ʥ��顼�ˤ�XL��������Ʊ���ɲ������500�ߤǤ�����<br />\r\n�֥��ץ����°���ˤ�����Ŭ�Ѥ���ᤤ�����פ����ꤷ�Ƥ���Τ�<br />\r\n10�������Ŭ�Ѥ��줺���ºݤ��ɲ�������500�ߤΤޤޤ�����ޤ���<br /><br />\r\n\r\n���������<br />�����ץ����̾����������<br />�������ץ����Υ����ס���DROPDOWN<br />�������ץ�����͡���S��M��L��XL�ʡ�500�ߡˡ��֤����򤯤�������������<br />�������ץ����°���ˤ�����Ŭ�Ѥ��롧���Ϥ�<br />------------------------------<br />�����ץ����̾�������顼<br />�������ץ����Υ����ס���RADIO<br />�������ץ�����͡����ۥ磻�ȡ������������֥롼���֥�å��ʡ�500�ߡ�<br />�������ץ����°���ˤ�����Ŭ�Ѥ��롧��������<br /><br />NOTE��<br /> �֤����򤯤������������ץ��ץ�����ͤ�°���ե饰����ϡ�<br />����ɽ���Τߡס�\"�Ϥ�\"�ˡ����ġ�°���ˤ�äƲ��ʤ��Ĥ�����Ȥ����ܲ��ʤ˴ޤ��ס�\"������\"�����ꤵ��Ƥ��롣 <br />������ˤ�ꡢ�֤����򤯤������������פ����򤷤����֤ǥ���������뤳�ȤϤǤ��ʤ����ᡢ�桼����ɬ��¾�Τ����줫��S�������Ȥ�M�������ˤ����֤��Ȥˤʤ롣<br /><br />\r\n\r\nNOTE��\r\n���顼����Υ饸���ܥ���ˡ����顼���åסʿ����ܡˤ�ź�����Ƥ��ޤ���������ϡ����ʥ��ץ����°����°���θ��ܲ��� �ǲ�������Ͽ�����ɽ������ޤ���<br /><br />\r\n�ʤ����饸���ܥ��󡢥��ץ����̾�����ܲ��������֤ϡ��֥��ץ����̾�δ����פˤơ�<br />\r\n����(Row)�������°������<br />\r\n���饸���ܥ��󡦥����å��ܥå�����°����������<br />\r\n���ѹ����뤳�Ȥ��Ǥ��ޤ���','',43);
INSERT INTO products_description VALUES (146,1,'ATTR_DROPDOWN3','','',0);
INSERT INTO products_description VALUES (146,2,'��3D�ۥ�ܥ���̤�����DROPDOWN��','���ʥ��ץ����Υ����ס�DROPDOWN�ʥꥹ�Ȥ�������ˤγ��ѥ���ץ�Ǥ���<br /><br />������ϥ�ܥ���̤����Ȥ�������Ǥ���<br />�桼����1�᡼�ȥ뤢�뤤��1������᡼�ȥ�ñ�̤ǹ����Ǥ����ΤȤ���<br />����ñ�̤�DROPDOWN�����פξ��ʥ��ץ�����Ȥä������ǽ�ˤ��Ƥ��ޤ���<br /><br />�᡼�ȥ�������ϡ�1��m�ˤ����� ��500�ߤǡ����ʽ��̤�100g�ʡ�0��1Kg�ˡ�<br />�����������ϡ�1��cm�ˤ�����  ��5�ߤǡ����ʽ��̤�1g�ʡ�0��001Kg�ˤΤ褦�ˡ�<br />����ñ�̤�����˱����ơ�ñ��Ĺ������������ʤȾ��ʽ��̤���ޤ�Ȥ����ߥ��Ǥ���<br /><br />�ޤ����Ǿ�����������ꤷ�Ƥ��ꡢ������10cm��m�ξ���10m�˰ʾ夫��Ȥʤ�ޤ���<br /><br />���������<br />�����ʾ���<br />��������°���ˤ����ʡ����Ϥ�<br />�������ʲ��� (�ͥå�)����0<br />�������ʤκǾ����̡���10<br />�������ʤο���ñ�̡�����1<br />�������ʽ��̡���0<br /><br />�����ץ����°��������<br />�����ץ����̾����ñ��Ĺ��<br />�����ץ����°���� <br />�����ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧���Ϥ�<br />����°���ˤ�äƲ��ʤ��Ĥ�����Ȥ����ܲ��ʤ˴ޤ�롧���Ϥ�<br /><br />�������ʤȽ���<br />�������ץ�����͡��������������ץ������ʡ��������ץ�������<br />����--------------------------------------------------------------<br />������1�˥᡼�ȥ롡�������� ������500�ߡ���������0��1��Kg��<br />������2�˥�����᡼�ȥ롡�� ����5�ߡ����������� 0��001��Kg��<br /><br />NOTE��<br />Ʊ�����ƥ���ˡ�����Ⱦ��ʥ��ץ�������Ƥ�RADIO�ʥ饸���ܥ���˥����פ����ꤷ�����Ǻܤ��Ƥ��ޤ��ʢ���3R�ۥ�ܥ���̤�����ñ������ˡˡ������ܤΰ㤤�ʤɤ���ǧ����������','',12);
INSERT INTO products_description VALUES (157,2,'��2�۾��ʥ��ץ��������ˤ⥻����Ŭ�Ѥ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />������Ǥϡ������뤬Ŭ�Ѥ��줿���ˡ����ץ��������ˤ⥻���뤬Ŭ�Ѥ����褦�����ꤷ�Ƥ��ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���������оݤΥ��ƥ��ꡧ���֥�����10��OFF�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�����10��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 �Ϥ�','',5);
INSERT INTO products_description VALUES (158,2,'��3�۾��ʥ��ץ��������ϥ������оݳ��ˤ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />���������ʡ�2�۾��ʥ��ץ������ɲ�����ˤ⥻���뤬Ŭ�Ѥ������ˤȰۤʤꡢ������Ǥϥ����뤬Ŭ�Ѥ��줿���ˡ����ץ��������ˤϥ����뤬Ŭ�Ѥ���ʤ�����ˤ��Ƥ��ޤ����Ĥޤꡢ��������⡢�̾��̤�Υ��ץ�������⤬������ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���������оݤΥ��ƥ��ꡧ���֥�����10��OFF�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�����10��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br /><br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 ������','',1);
INSERT INTO products_description VALUES (143,1,'ATTR_CHKBOX2','','',0);
INSERT INTO products_description VALUES (143,2,'��2�ۥե��ߥ꡼�������å�����','���ʥ��ץ����Υ����ס�CHECKBOX�ʥ����å��ܥå����ˤγ��ѥ���ץ�Ǥ���<br /><br />�����å��ܥå��������פˤ���ȡ�1���ʤ�����ʣ���Υ��ץ�����Ʊ������Ǥ��ޤ���<br />������Ǥϡ��ե��ߥ꡼�Ǥ�·����T����Ĥ��������褦�ʥ����������ꤷ�ơ�<br />�ѥ��Ѥ�L���������ޥޤ�S�����������������ˤϿ�Ĺ150cm�����������A�Ҥ����˿�Ĺ120cm�������������Τ褦�˥����������ӡ�<br />���åȹ����Ǥ���褦���ꤷ�ޤ�����<br /><br /><br />NOTE��<br />��������������Ȥ˲��ʤȾ��ʽ��̤��ۤʤꤽ���ϥ��ץ�������⡢���ץ������̤Ȥ������ꤷ�Ƥ��ޤ���<br />�����ϡ��ò�����/������ˤ�äƳ����Ŭ�Ѥ����Ϥ��פ�����ʤΤǡ�<br />�⤷���ξ��ʤ��ò���������Ԥ��Х��ץ��������γۤ��Ѳ����ޤ���<br /><br />���������<br />�����ץ����̾����������<br />�������ץ����Υ����ס���CHECKBOX<br />�����ץ�����͡���S, M, L, 110, 120, 130, 140, 150<br />�����ץ����°��<br />�����ץ�����͡��������������ץ������ʡ������ò�����/������ˤ�äƳ����Ŭ�Ѥ���<br />��--------------------------------------------------------------<br />��S���������������������������� +4000�ߡ��������Ϥ�<br />��M������ ����������������������+4000�ߡ��������Ϥ�<br />��L�������� ��������������������+4500�ߡ��������Ϥ�<br />��140��150cm���������������� +3500�ߡ��������Ϥ�<br />��110��120��130cm����������+3000�ߡ��������Ϥ�','',10);
INSERT INTO products_description VALUES (151,1,'ATTR_RADIO3','','',0);
INSERT INTO products_description VALUES (151,2,'��3R�ۥ�ܥ���̤�����RADIO��','���ʥ��ץ����Υ����ס�RADIO�ʥ饸���ܥ���ˡˤγ��ѥ���ץ�Ǥ���<br /><br />������ϥ�ܥ���̤����Ȥ�������Ǥ���<br />�桼����1�᡼�ȥ뤢�뤤��1������᡼�ȥ�ñ�̤ǹ����Ǥ����ΤȤ���<br />����ñ�̤�DROPDOWN�����פξ��ʥ��ץ�����Ȥä������ǽ�ˤ��Ƥ��ޤ���<br /><br />�᡼�ȥ�������ϡ�1��m�ˤ����� ��500�ߤǡ����ʽ��̤�100g�ʡ�0��1Kg�ˡ�<br />�����������ϡ�1��cm�ˤ�����  ��5�ߤǡ����ʽ��̤�1g�ʡ�0��001Kg�ˤΤ褦�ˡ�<br />����ñ�̤�����˱����ơ�ñ��Ĺ������������ʤȾ��ʽ��̤���ޤ�Ȥ����ߥ��Ǥ���<br /><br />�ޤ����Ǿ�����������ꤷ�Ƥ��ꡢ������10cm��m�ξ���10m�˰ʾ夫��Ȥʤ�ޤ���<br /><br />���������<br />�����ʾ���<br />��������°���ˤ����ʡ����Ϥ�<br />�������ʲ��� (�ͥå�)����0<br />�������ʤκǾ����̡���10<br />�������ʤο���ñ�̡�����1<br />�������ʽ��̡���0<br /><br />�����ץ����°��������<br />�����ץ����̾����ñ��Ĺ��<br />�����ץ����°���� <br />�����ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧���Ϥ�<br />����°���ˤ�äƲ��ʤ��Ĥ�����Ȥ����ܲ��ʤ˴ޤ�롧���Ϥ�<br /><br />�������ʤȽ���<br />�������ץ�����͡��������������ץ������ʡ��������ץ�������<br />����--------------------------------------------------------------<br />������1�˥᡼�ȥ롡�������� ������500�ߡ���������0��1��Kg��<br />������2�˥�����᡼�ȥ롡�� ����5�ߡ����������� 0��001��Kg��<br /><br /><br />NOTE��<br />Ʊ�����ƥ���ˡ�����Ⱦ��ʥ��ץ�������Ƥ�DROPDOWN�ʥꥹ������˥����פ����ꤷ�����Ǻܤ��Ƥ��ޤ��ʢ���3D�ۥ�ܥ���̤�����ñ������ˡˡ������ܤΰ㤤�ʤɤ���ǧ����������','',4);
INSERT INTO products_description VALUES (227,2,'��1�ۥ��ǡ������ե������ź�դ�����ʸ','���ʥ��ץ����Υ����ס�FILE�γ��ѥ���ץ�Ǥ���<br /><br />\r\n\r\nFILE�����פˤ���ȡ����åץ��ɥե�����λ�����ɽ�����졢�桼���ϥե������ź�դ�����ʸ���뤳�Ȥ��Ǥ��ޤ���<br />\r\n\r\n������ǰ����ԥ���Ĥϡ���Ҥ䥯��֤Υ��򥪥ꥸ�ʥ�ץ��ȤǤ��뾦�ʤǡ����Υǡ����ե�����ϥ桼�������餫���ᥤ�饹�ȥ졼���ʤɤǺ���������Τ򥢥åץ��ɤ��Ʊ��ļԤ��Ϥ��ޤ����ʤ������ץ��������Ȥ���1000�ߤ�����ޤ���<br /><br /><br />\r\n\r\n\r\n�ڥ��ץ����̾�������<br />\r\n��[���ץ����̾]����\"�����ǡ���ź��\"<br />\r\n��[���ץ����Υ�����]����FILE<br /><br />\r\n��FILE�����פξ��ϡ����ץ��������Ͽ�����פǤ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n��[���ʲ���]��4000��<br />\r\n��[����°���ˤ�����]���Ϥ�<br /><br />\r\n\r\n�������⡧���ץ����°����\"�����ǡ���ź��\"���ץ����<br />\r\n�����ץ������ʡ�+1000 ��<br />','',4);
INSERT INTO products_description VALUES (227,1,'ATTR_FILE','','',0);
INSERT INTO products_description VALUES (159,2,'��1�ۥ�����Ŭ�Ѥδ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�500�߰����Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����500��OFF<br />���Ͱ����ۡ���500�ʱߡ�<br />�������ס����Ͱ�����<br />���������оݤΥ��ƥ��ꡧ���֥����롧500��OFF�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥����롧500��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br />','',2);
INSERT INTO products_description VALUES (160,2,'��2�۾��ʥ��ץ��������ˤ⥻����Ŭ�Ѥ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />\r\n���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />\r\n\r\n���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />\r\n���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />\r\n������Ǥϡ������뤬Ŭ�Ѥ��줿���ˡ����ץ��������ˤ⥻���뤬Ŭ�Ѥ����褦�����ꤷ�Ƥ��ޤ���<br /><br />\r\n\r\n��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />\r\n��������̾����500��OFF<br />\r\n���Ͱ����ۡ���500�ʱߡ�<br />\r\n�������ס����Ͱ�����<br />\r\n���������оݤΥ��ƥ��ꡧ���֥����롧500��OFF�ץ��ƥ���<br /><br /><br />\r\n\r\n\r\n�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />\r\n�����ʥޥ��������ƥ��ꡧ���֥����롧500��OFF�ץ��ƥ���<br />\r\n�����ʲ��ʡ���10000��<br /><br /><br />\r\n\r\n\r\n�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />\r\n�����ץ����̾�������顼<br />\r\n�����ץ�����͡�����å�<br />\r\n�����ץ������ʡ�����2000��<br />\r\n���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 �Ϥ�<br /><br /><br />\r\n\r\n\r\n<strong>NOTE��</strong>\r\n���ºݤα��Ѥˤ����Ƥϡ�����ۤ��Ͱ���������򥪥ץ��������ˤ�Ŭ�Ѥ��������դ�ɬ�פǤ���<br />\r\n���Υ������Ǥϡ����ޤ��ޥ��ץ���������2000�ߡˤ���������Ͱ����ۡ�-500�ߡˤ����礭������������500�߰�����ȿ�Ǥ���Ƥ��ޤ������äˡ����ץ����������⥻������Ͱ����ۤ������礭��������������ǽ���ޤ��󡣸���ۤ��Ͱ�����̣��褯�ͤ���Ŭ�Ѥ���Ƥ���������<br /><br />','',5);
INSERT INTO products_description VALUES (161,2,'��3�۾��ʥ��ץ��������ϥ������оݳ��ˤ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />���������Ȱۤʤꡢ������ǤϾ��ʤؤΥ�����Ŭ�ѻ��ˡ����ץ��������ˤ�Ŭ�Ѥ���ʤ�����ˤ��Ƥ��ޤ����Ĥޤꡢ���ʼ��Τ���������ʤǤ⥪�ץ��������˴ؤ��Ƥ��̾��̤꤫����ޤ���<br /><br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����������500��OFF<br />���Ͱ����ۡ���500�ʱߡ�<br />�������ס����Ͱ�����<br />���������оݤΥ��ƥ��ꡧ���֥����롧500��OFF�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥����롧500��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br /><br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 ������','',1);
INSERT INTO products_description VALUES (162,2,'��1�ۥ�����Ŭ�Ѥδ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�8000�ߡʿ��������ʡˤˤ��륻�������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����������8000��<br />���Ͱ����ۡ���8000�ʱߡ�<br />�������ס�������������<br />���������оݤΥ��ƥ��ꡧ���֥����롧1���ߤ�8000�ߤˡץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥����롧1���ߤ�8000�ߤˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br />','',2);
INSERT INTO products_description VALUES (163,2,'��2�۾��ʥ��ץ��������ˤ⥻����Ŭ�Ѥ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />\r\n���Υ��ƥ�����Ф��ơ�8000�ߡʿ��������ʡˤˤ��륻�������꤬����Ƥ��ꡢ���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />\r\n\r\n���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />\r\n���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />\r\n������Ǥϡ������뤬Ŭ�Ѥ��줿���ˡ����ץ��������ˤ⥻���뤬Ŭ�Ѥ����褦�����ꤷ�Ƥ��ޤ���<br /><br />\r\n\r\n\r\n��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����������8000��<br />\r\n���Ͱ����ۡ���8000�ʱߡ�<br />\r\n�������ס�������������<br />\r\n���������оݤΥ��ƥ��ꡧ���֥����롧1���ߤ�8000�ߤˡץ��ƥ���<br /><br /><br />\r\n\r\n\r\n�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />\r\n�����ʥޥ��������ƥ��ꡧ���֥����롧1���ߤ�8000�ߤˡץ��ƥ���<br />\r\n�����ʲ��ʡ���10000��<br /><br /><br />\r\n\r\n\r\n�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />\r\n�����ץ����̾�������顼<br />\r\n�����ץ�����͡�����å�<br />\r\n�����ץ������ʡ�����2000��<br />\r\n���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 �Ϥ�<br /><br /><br />\r\n\r\n\r\n<strong>NOTE��</strong><br />\r\n�ºݤˤϥ�åɤ��Ф��륪�ץ��������ϳ��������ޤ���ʤ��⤽��2000�ߤΥ��ץ��������˿�����8000�ߥ������Ŭ�Ѥ��������������ʤˤʤäƤ��ޤ��ޤ����ˡ�<br />\r\n���Τ褦�ˡ��ɿ��������ʡɤǸ��ͤ��֤������륻��������򥪥ץ����ؤ�Ŭ�Ѥ��뤳�ȼ���̵��̣�ʾ�礬¿�����ᡢ���ץ����ؤ�Ŭ�Ѥ�̵�뤵�����ͤˤʤäƤ��ޤ���<br /><br />','',6);
INSERT INTO products_description VALUES (164,2,'��3�۾��ʥ��ץ��������ϥ������оݳ��ˤ�����','�����뵡ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�8000�ߡʿ��������ʡˤˤ��륻�������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />���������Ȱۤʤꡢ������ǤϾ��ʤؤΥ�����Ŭ�ѻ��ˡ����ץ��������ˤ�Ŭ�Ѥ���ʤ�����ˤ��Ƥ��ޤ����Ĥޤꡢ���ʼ��Τ���������ʤǤ⥪�ץ��������˴ؤ��Ƥ��̾��̤꤫����ޤ���<br /><br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����������8000��<br />���Ͱ����ۡ���8000�ʱߡ�<br />�������ס�������������<br />���������оݤΥ��ƥ��ꡧ���֥����롧1���ߤ�8000�ߤˡץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥����롧1���ߤ�8000�ߤˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br /><br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 ������<br />','',3);
INSERT INTO products_description VALUES (165,2,'��SP1-1���ò����ʤδ������1���ߤ�8000�ߤˡ�','�ò���ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤˤ��̾����10000�ߤΤȤ�����ò�8000�ߡʿ����ʡˤˤ����ò����꤬����Ƥ��ޤ���<br />�ò��Ͽ����ʡ����뤤�ϳ��Ψ�ǻ����ǽ�Ǥ���������Ͽ����ʤ����ꤷ����Ǥ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���8000��','',0);
INSERT INTO products_description VALUES (166,2,'��SP2-1���ò����ʤδ������50%����','�ò���ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤˤ��̾����10000�ߤΤȤ�����ò�8000�ߡʿ����ʡˤˤ����ò����꤬����Ƥ��ޤ���<br />�ò��Ͽ����ʡ����뤤�ϳ��Ψ�ǻ����ǽ�Ǥ���������ϳ��Ψ�����ꤷ����Ǥ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%','',0);
INSERT INTO products_description VALUES (167,2,'��SP2-2�۾��ʥ��ץ��������ˤ��ò�Ŭ�ѡ�50�����','�ò���ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤˤ��̾����10000�ߤΤȤ����50��������ò����꤬����Ƥ��ޤ���<br />�ò��Ͽ����ʡ����뤤�ϳ��Ψ�ǻ����ǽ�Ǥ���������ϳ��Ψ�����ꤷ����Ǥ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />������Ǥϡ����ʤؤ��ò�Ŭ�ѻ��ˡ����ץ��������ˤ��ò���Ŭ�Ѥ����褦�����ꤷ�Ƥ��ޤ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 �Ϥ�','',2);
INSERT INTO products_description VALUES (168,2,'��SP2-2�۾��ʥ��ץ����������ò��оݳ���50�����','�ò���ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤˤ��̾����10000�ߤΤȤ����50��������ò����꤬����Ƥ��ޤ���<br />�ò��Ͽ����ʡ����뤤�ϳ��Ψ�ǻ����ǽ�Ǥ���������ϳ��Ψ�����ꤷ����Ǥ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />���������Ȱۤʤꡢ������ǤϾ��ʤؤ��ò�Ŭ�ѻ��ˡ����ץ��������ˤ�Ŭ�Ѥ���ʤ�����ˤ��Ƥ��ޤ����Ĥޤꡢ���ʼ��Τ��ò��Ǥ⥪�ץ��������˴ؤ��Ƥ��̾��̤꤫����ޤ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 ������','',0);
INSERT INTO products_description VALUES (169,2,'��SP3�۴��ָ�����ò�����','�ò���ǽ�����򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤ��̾����10000�ߤΤȤ�����ò���Ⱦ�ۤˤ���<br />������ò��»ܴ��֤��ߤ��ޤ�����Ⱦǯ�֤����Ͱ�������ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br />���󶡳���������λ������2007/1/15 �� 2007/6/15','',0);
INSERT INTO products_description VALUES (170,2,'��������֤�Ŭ�Ѳ����ӡ�Ŭ�Ѥ���륱������','�����������Ǥϡ�������»ܴ��֤���ꤷ���ꡢ�������оݤ��ʲ����Ӥǹʤä��ꤹ�뵡ǽ������ޤ���<br />�㤨�С�8�����С����󥻡���פ�֥��ꥹ�ޥ�������פ�»ܤ��������ʤɤ˳��ѤǤ���Ǥ��礦��<br />����˲����ӵ�ǽ��Ȥ��С�5000�ߡ�10000�ߤξ��ʤ������Ͱ�������Ȥ��ä����Ȥ���ǽ�Ǥ���<br /><br />���Υ��ƥ���ϡ�10������Υ��������꤬����Ƥ��ޤ�����<br />����μ»ܴ��֤��ߤ��Ƥ��ޤ����ޤ���8000�߰ʾ�ξ��ʤˤ����������Ŭ�Ѥ���褦���ꤷ�Ƥ���ޤ���<br /><br />���ξ��ʤβ��ʤ�1���ߤʤΤǡ������뤬Ŭ�Ѥ���ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10�󥻡�����֤Ȳ����Ӹ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />������������10000�� ���� [���Ϥ��ʤ�]��<br />���������оݤΥ��ƥ��ꡧ���֥������Ϣetc�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥������Ϣetc�ץ��ƥ���<br />�����ʲ��ʡ���10000��','',1);
INSERT INTO products_description VALUES (171,2,'��������֤�Ŭ�Ѳ����ӡ�Ŭ�Ѥ���ʤ���������','�����������Ǥϡ�������»ܴ��֤���ꤷ���ꡢ�������оݤ��ʲ����Ӥǹʤä��ꤹ�뵡ǽ������ޤ���<br />�㤨�С�8�����С����󥻡���פ�֥��ꥹ�ޥ�������פ�»ܤ��������ʤɤ˳��ѤǤ���Ǥ��礦��<br />����˲����ӵ�ǽ��Ȥ��С�5000�ߡ�10000�ߤξ��ʤ������Ͱ�������Ȥ��ä����Ȥ���ǽ�Ǥ���<br /><br />���Υ��ƥ���ϡ�10������Υ��������꤬����Ƥ��ޤ�����<br />����μ»ܴ��֤��ߤ��Ƥ��ޤ����ޤ���8000�߰ʾ�ξ��ʤˤ����������Ŭ�Ѥ���褦���ꤷ�Ƥ���ޤ���<br /><br />���ξ��ʤβ��ʤ�7500�ߤǤ��Τǡ��������Ŭ���оݳ��Ȥʤ�ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10�󥻡�����֤Ȳ����Ӹ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />������������10000�� ���� [���Ϥ��ʤ�]��<br />���������оݤΥ��ƥ��ꡧ���֥������Ϣetc�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥������Ϣetc�ץ��ƥ���<br />�����ʲ��ʡ���7500��','',2);
INSERT INTO products_description VALUES (172,2,'��4�ۤ��ξ��ʤˤϥ����뤬Ŭ�Ѥ���ޤ���','���ξ��ʤϥ����뤬Ŭ�Ѥ���ޤ��󡣤ʤ��Ǥ��礦����<br />��ͳ�ϡ����ξ��ʤϥ�󥯾��ʤǡ��־��ʥޥ��������ƥ���פ��������оݳ��Υ��ƥ��������Ǥ���<br /><br /><strong>NOTE��</strong><br />ʣ���Υ��ƥ���˥�󥯤��줿���ʤξ�硢���ʥޥ��������ƥ���Υ��������꤬Ŭ�Ѥ���ޤ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֤��Υ��ƥ���ˤϥ��������ꤷ�Ƥ��ʤ��ץ��ƥ���<br />�����ʲ��ʡ���10000��','',2);
INSERT INTO products_description VALUES (173,2,'��SP1���ò����ʤ˥�����Ŭ�Ѥδ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />�ޤ���������Ȥ��̤�<br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ���<br /><br />�ò����ʤ��Ф��륻������������ò����ʤβ��ʤˤ���˥������Ͱ�����Ŭ�Ѥ���פˤ����Τ�<br />�ò����ʤ��餵���10��Υ������Ͱ�����Ŭ�Ѥ���ޤ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF���ò��ܥ������<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���ò����ʤβ��ʤˤ���˥������Ͱ�����Ŭ�Ѥ���<br />���������оݤΥ��ƥ��ꡧ���֥�������ò����ò����ʤ򤵤��10��OFF�ץ��ƥ���<br /><br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò����ò����ʤ򤵤��10��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br />','',2);
INSERT INTO products_description VALUES (174,2,'��SP2�۾��ʥ��ץ��������ˤ⥻���롦�ò�Ŭ�Ѥ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />�ޤ���������Ȥ��̤�<br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ���<br /><br /><br />�ò����ʤ��Ф��륻������������ò����ʤβ��ʤˤ���˥������Ͱ�����Ŭ�Ѥ���פˤ����Τ�<br />�ò����ʤ��餵���10��Υ������Ͱ�����Ŭ�Ѥ���ޤ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />������Ǥϡ������롦�ò���Ŭ�Ѥ��줿���ˡ����ץ��������ˤ⥻���롦�ò���Ŭ�Ѥ����褦�����ꤷ�Ƥ��ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF���ò��ܥ������<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���ò����ʤβ��ʤˤ���˥������Ͱ�����Ŭ�Ѥ���<br />���������оݤΥ��ƥ��ꡧ���֥�������ò����ò����ʤ򤵤��10��OFF�ץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò����ò����ʤ򤵤��10��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 �Ϥ�<br /><br />','',1);
INSERT INTO products_description VALUES (175,2,'��SP3�۾��ʥ��ץ��������ϥ����롦�ò��оݳ��ˤ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />�ޤ���������Ȥ��̤�<br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ���<br /><br /><br />�ò����ʤ��Ф��륻������������ò����ʤβ��ʤˤ���˥������Ͱ�����Ŭ�Ѥ���פˤ����Τ�<br />�ò����ʤ��餵���10��Υ������Ͱ�����Ŭ�Ѥ���ޤ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />���������Ȱۤʤꡢ������ǤϾ��ʤؤ��ò�Ŭ�ѻ��ˡ����ץ��������ˤ�Ŭ�Ѥ���ʤ�����ˤ��Ƥ��ޤ����Ĥޤꡢ���ʼ��Τ��ò��Ǥ⥪�ץ��������˴ؤ��Ƥ��̾��̤꤫����ޤ���<br /><br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF���ò��ܥ������<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���ò����ʤβ��ʤˤ���˥������Ͱ�����Ŭ�Ѥ���<br />���������оݤΥ��ƥ��ꡧ���֥�������ò����ò����ʤ򤵤��10��OFF�ץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò����ò����ʤ򤵤��10��OFF�ץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 ������<br />','',2);
INSERT INTO products_description VALUES (176,2,'��SP1���ò����ʤ˥�����Ŭ�Ѥδ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />�ޤ���������Ȥ��̤�<br />���ξ��ʤˤ��̾���ʤ�Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ�����<br />�ò����ʤ��Ф��륻������������ò����ʤβ��ʤ�̵�뤹��פˤ����Τ�<br />�̾���ʤ�10��Υ������Ͱ�����Ŭ�Ѥ��졢�ò����ʤ�̵�뤵��ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF�ʥ�����ͥ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���ò����ʤβ��ʤ�̵�뤹��<br />���������оݤΥ��ƥ��ꡧ���֥�������ò���������ͥ����ò�����̵��ˡץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò���������ͥ����ò�����̵��ˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%','',4);
INSERT INTO products_description VALUES (177,2,'��SP2�۾��ʥ��ץ��������ˤ⥻���롦�ò�Ŭ�Ѥ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />�ޤ���������Ȥ��̤�<br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ�����<br />�ò����ʤ��Ф��륻������������ò����ʤβ��ʤ�̵�뤹��פˤ����Τ�<br />�̾���ʤ�10��Υ������Ͱ�����Ŭ�Ѥ��졢�ò����ʤ�̵�뤵��ޤ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />������Ǥϡ������롦�ò���Ŭ�Ѥ��줿���ˡ����ץ��������ˤ⥻���롦�ò���Ŭ�Ѥ����褦�����ꤷ�Ƥ��ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF�ʥ�����ͥ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���ò����ʤβ��ʤ�̵�뤹��<br />���������оݤΥ��ƥ��ꡧ���֥�������ò���������ͥ����ò�����̵��ˡץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò���������ͥ����ò�����̵��ˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 �Ϥ�<br /><br />','',5);
INSERT INTO products_description VALUES (178,2,'��SP3�۾��ʥ��ץ��������ϥ����롦�ò��оݳ��ˤ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />�ޤ���������Ȥ��̤�<br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ�����<br />�ò����ʤ��Ф��륻������������ò����ʤβ��ʤ�̵�뤹��פˤ����Τ�<br />�̾���ʤ�10��Υ������Ͱ�����Ŭ�Ѥ��졢�ò����ʤ�̵�뤵��ޤ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />���������Ȱۤʤꡢ������ǤϾ��ʤؤΥ����롦�ò�Ŭ�ѻ��ˡ����ץ��������ˤ�Ŭ�Ѥ���ʤ�����ˤ��Ƥ��ޤ����Ĥޤꡢ���ʼ��Τ���������ʤǤ⥪�ץ��������˴ؤ��Ƥ��̾��̤꤫����ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF�ʥ�����ͥ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���ò����ʤβ��ʤ�̵�뤹��<br />���������оݤΥ��ƥ��ꡧ���֥�������ò���������ͥ����ò�����̵��ˡץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò���������ͥ����ò�����̵��ˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 ������','',6);
INSERT INTO products_description VALUES (179,2,'��SP1���ò����ʤ˥�����Ŭ�Ѥδ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ���<br /><br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���������ò����ʤ��Ф��륻����������֥������оݳ��פˤ����Τ�<br />�ò����ʤˤϥ�����10�������Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ�����<br />���ץ����ˤ��ɲ���������ꤷ�Ƥ��ʤ��ΤǤ�Ȥ�ȤɤΥ��顼�Ǥ�Ʊ����Ǥ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF���ò�ͥ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���������оݳ�<br />���������оݤΥ��ƥ��ꡧ���֥�������ò����ò�ͥ��ʥ������оݳ��ˡץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò���������ͥ��ʥ������оݳ��ˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%','',2);
INSERT INTO products_description VALUES (180,2,'��SP2�۾��ʥ��ץ��������ˤ⥻���롦�ò�Ŭ�Ѥ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ���<br /><br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���������ò����ʤ��Ф��륻����������֥������оݳ��פˤ����Τ�<br />�ò����ʤˤϥ�����10�������Ŭ�Ѥ���ޤ���<br /><br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />������Ǥϡ������롦�ò���Ŭ�Ѥ��줿���ˡ����ץ��������ˤ⥻���롦�ò���Ŭ�Ѥ����褦�����ꤷ�Ƥ��ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF���ò�ͥ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���������оݳ�<br />���������оݤΥ��ƥ��ꡧ���֥�������ò����ò�ͥ��ʥ������оݳ��ˡץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò����ò�ͥ��ʥ������оݳ��ˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 �Ϥ�<br />','',2);
INSERT INTO products_description VALUES (181,2,'��SP3�۾��ʥ��ץ��������ϥ����롦�ò��оݳ��ˤ�����','�ò����ʤ˥������Ŭ�Ѥ������Τդ�ޤ������򤹤뤿��Ρ���������ץ����Ǥ���<br /><br />���ξ��ʤˤ��̾����10000�ߤΤȤ����Ⱦ�ۤˤ����ò����꤬����Ƥ��ޤ���<br /><br />���Υ��ƥ�����Ф��ơ�10������Υ��������꤬����Ƥ��ꡢ<br />���Υ��ƥ����ޥ��������ƥ���Ȥ��������ʤ�Ŭ�Ѥ���ޤ���<br /><br />���������ò����ʤ��Ф��륻����������֥������оݳ��פˤ����Τ�<br />�ò����ʤˤϥ�����10�������Ŭ�Ѥ���ޤ���<br /><br />���ξ��ʤˤϾ��ʥ��ץ����ʥ��顼3����ˤ��Ĥ��Ƥ��ޤ���<br />���Τ�������åɤ����̿��Ȥ��ƥ��ץ��������ʡ�2000�ߡˤ����ꤵ��Ƥ��ޤ���<br />���������Ȱۤʤꡢ������ǤϾ��ʤؤ��ò�Ŭ�ѻ��ˡ����ץ��������ˤ�Ŭ�Ѥ���ʤ�����ˤ��Ƥ��ޤ����Ĥޤꡢ���ʼ��Τ��ò��Ǥ⥪�ץ��������˴ؤ��Ƥ��̾��̤꤫����ޤ���<br /><br />��������ۡ�������δ����������ƥ���ñ�̤�Ŭ�Ѥ����<br />��������̾����10��OFF���ò�ͥ���<br />���Ͱ����ۡ���10.0<br />�������ס���Ψ�ʡ��<br />���ò����ʤξ�硧���������оݳ�<br />���������оݤΥ��ƥ��ꡧ���֥�������ò����ò�ͥ��ʥ������оݳ��ˡץ��ƥ���<br /><br />�������⡧���ʾ���ۡ������ξ��ʤ˴ؤ�������<br />�����ʥޥ��������ƥ��ꡧ���֥�������ò����ò�ͥ��ʥ������оݳ��ˡץ��ƥ���<br />�����ʲ��ʡ���10000��<br />���ò����ʡ���50%<br /><br />�������⡧���ʥ��ץ����°���ۡ������ξ��ʤ˴ؤ�������<br />�����ץ����̾�������顼<br />�����ץ�����͡�����å�<br />�����ץ������ʡ�����2000��<br />���ò�����/������ˤ�äƳ����Ŭ�Ѥ��롧 ������<br />','',2);
INSERT INTO products_description VALUES (182,1,'Normal Product(6)','','',0);
INSERT INTO products_description VALUES (182,2,'����6��1������������ʾ�ʤ���','�������䥫�顼�ʤɤΥ��ץ����°������ľ��ʤˡ����̳���ʤ�����ܥ�塼��ǥ���������ȡˤ�Ŭ�Ѥ������ʣ����������Ǥ���<br />\r\n9�ĤޤǤ������10��20�Ĥ������10�������20��49�Ĥ�20�������50�İʾ��25������Ȥ����褦�ˡ����Ψ�ˤ����̳�������ꤷ�ޤ�����<br /><br />\r\n������Ǥϡ�1�ĤΥ��ץ������Ф��Ƶ����̰ʾ�����������˳�������Ŭ�Ѥ���ޤ���<br />\r\n�Ĥޤꡢ�ۥ磻�Ȥȥ֥�å���5�����Ĺ������Ƥ�������оݤˤϤʤ餺���ۥ磻�Ȥ��뤤�ϥ֥�å�ñ�Τ�10�İʾ�������ƤϤ���Ƴ���ˤʤ�ޤ���<br />\r\n����ϡ����ʲ��ʤδ����ˤ����ơ��ֿ��̤�Ʊ�쾦�ʤǤ���Х��ץ�����ͤ˴ط��ʤ��绻����ᤤ�����פ����ꤷ�Ƥ��뤫��Ǥ���<br /><br />\r\n\r\n\r\nNOTE������������ϡ־��ʲ��ʤδ����פ���Ԥ��ޤ���<br />�����ʤδ����侦�ʲ��ʤδ���������ƤӽФ��������뤤�ϴ������̤ξ��ʥꥹ�Ȥα�ü�ˤ���[��]�ܥ�����п��Υܥ���ˤ���ƤӽФ����Ȥ��Ǥ��ޤ���<br /><br />\r\n\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�ʲ�������ˤ�ꡢ�׻����ϡ��������������ߡ�1�ݿ��̳��Ψ�ˡѡ��ߡ��������Ȥʤ�ޤ���<br />\r\n���ǥ���������ȥ����ס������Ψ<br />\r\n�����β��ʤ���ǥ���������ȡ�������<br />\r\n���������<br /><br />\r\n���������̤�Ʊ�쾦�ʤǤ���Х��ץ�����ͤ˴ط��ʤ��绻���롧��������<br />\r\n��------------------------------------------<br />\r\n�������٥롡�������Ǿ��¤�ͭ�����̡������������<br />\r\n��------------------------------------------<br />\r\n�����3����������������10���ʸġˡ�����������������10.0���ʡ��<br />\r\n�����4����������������20���ʸġˡ�����������������20.0���ʡ��<br />\r\n�����5����������������50���ʸġˡ�����������������25.0���ʡ��<br />\r\n��-----------------------------------------<br /><br />\r\n\r\n�������⡧���ץ����°����<br />\r\n1�˥��顼�֥ۥ磻�ȡ�<br />\r\n���������ʡ� ��0��<br />\r\n�������ò�/����������Ŭ�Ѥ������ʤ�١������ʤȤ��ư��������Ϥ�<br />\r\n2�˥��顼�֥֥�å���<br />\r\n���������ʡ�����1000��<br />\r\n�������ò�/����������Ŭ�Ѥ������ʤ�١������ʤȤ��ư��������Ϥ�<br />\r\n������°���ˤ�����������١������ʤ˴ޤ�롧���Ϥ�','',7);
INSERT INTO products_description VALUES (183,1,'MIN','','',0);
INSERT INTO products_description VALUES (183,2,'��1��10�İʾ�Ǥ���ʸ��������','����ϡ��ֺ���10�Ĥ�����䤤�����ޤ��פʤɡ��Ǿ������������¤���������������Ǥ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n���Ǿ�����������10<br />','',14);
INSERT INTO products_description VALUES (184,1,'MIN_ATR1','','',0);
INSERT INTO products_description VALUES (184,2,'��OP1�ۥ��ץ������鷺���10�İʾ������','����ϡ����ʥ��ץ���󤢤�ξ��κǾ�������������Ǥ���<br />\r\n������Ǥϡ����ץ����򤤤����꺮���Ƥ褯�����ξ��ʤι�פ��Ǿ��������ʾ�Ǥ���Сʸġ��Υ��ץ�������򤬤ʤ�Ǥ���˹�����ǽ�Ǥ���<br />\r\n�Ĥޤꡢ�ۥ磻��5�����������졢³���ƥ֥롼��5�����������줿�����ǹ��10���ȸ��ʤ���ƹ�����ǽ�Ȥʤ�ޤ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n���Ǿ�����������10<br /><br />\r\n\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�������̤ȥ�˥å��̤��Ȥ߹�碌��Ŭ�����롧���Ϥ�','',7);
INSERT INTO products_description VALUES (185,1,'MIN_ATR2','','',0);
INSERT INTO products_description VALUES (185,2,'��OP2��1���ץ���󤢤���10�İʾ������','����ϡ����ʥ��ץ���󤢤�ξ��κǾ�������������Ǥ���<br />\r\n������Ǥϡ�1�ĤΥ��ץ���󤢤���ι������ǥ�����Ȥ���Ʊ�����ץ����ǺǾ���������ã���ʤ��ȷ�Ѥ˿ʤ�ޤ���<br />\r\n�Ĥޤꡢ�ۥ磻�Ȥȥ֥롼��5�����ĥ���������Ƥ����ǡ��ۥ磻�Ȥ��뤤�ϥ֥롼ñ�Τ�10�İʾ�ǤϤ���ƹ�����ǽ�Ȥʤ�ޤ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n���Ǿ�����������10<br /><br />\r\n\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�������̤ȥ�˥å��̤��Ȥ߹�碌��Ŭ�����롧��������','',4);
INSERT INTO products_description VALUES (187,1,'LIMIT-1','','',0);
INSERT INTO products_description VALUES (187,2,'��1�ۤ���ͤ���5���ޤǡ�','����ϡ��֤���ͤ���5���ޤǡ��פʤɡ���ʸ1�󤢤���ι����������¤���������������Ǥ���<br /><br />\r\n\r\n���������<br />\r\n�����ʤκǾ����̡���1<br />\r\n�����ʤκ�����̡���5<br />\r\n�����ʤο���ñ�̡���1<br /><br />','',8);
INSERT INTO products_description VALUES (188,1,'LIMIT_ATR1','','',0);
INSERT INTO products_description VALUES (188,2,'��OP1�ۥ��顼����鷺������5���ޤǡ�','����ϡ����ʥ��ץ���󤢤�ξ��κ��������������Ǥ���<br />\r\n������Ǥϡ����ץ����ˤ�����餺�����ξ��ʤ�������5���ޤǤ��������Ǥ��ޤ���<br />\r\n�Ĥޤꡢ�ۥ磻�Ȥȥ������Ƿ�5�����������äƤ����顢���ä����������ʤ��������ɲäϤǤ��ޤ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n���Ǿ�����������1<br />\r\n���������������5<br />\r\n\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�������̤ȥ�˥å��̤��Ȥ߹�碌��Ŭ�����롧���Ϥ�','',17);
INSERT INTO products_description VALUES (201,2,'��1��100��ñ�̤Ǥ���ʸ��������','����ϡ���100��ñ�̤Ǥ���ʸ���������פΤ褦�ˡ���˥å�ñ�̤������Ԥ���������������Ǥ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n��[�Ǿ�������]����100����<br />\r\n��[����ñ��]�� 100<br /><br />\r\n\r\n��������ˤ�����[�Ǿ�������]�����ɬ�ܤǤϤʤ������ɤΤߤ�100�Ĥ�����ꤿ���Τǰ�����ꤷ�Ƥ���','',0);
INSERT INTO products_description VALUES (189,1,'LIMIT_ATR2','','',0);
INSERT INTO products_description VALUES (189,2,'��OP2��1���ץ���󤢤���5���ޤǡ�','����ϡ����ʥ��ץ���󤢤�ξ��κ��������������Ǥ���<br /><br />\r\n������Ǥϡ��ƥ��ץ�������Ω�ǰ���졢���줾��ˤĤ���5���ޤǹ������뤳�Ȥ��Ǥ��ޤ���<br />\r\n�Ĥޤꡢ�ۥ磻��5���򥫥������줿�顢�ۥ磻�ȤϤ⤦�ɲäǤ��ޤ��󤬡�¾�ο��ʥ֥롼�䥤�����ˤʤ������ǽ�Ǥ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n���Ǿ�����������1<br />\r\n���������������5<br />\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�������̤ȥ�˥å��̤��Ȥ߹�碌��Ŭ�����롧��������','',12);
INSERT INTO products_description VALUES (202,1,'UNIT2','','',0);
INSERT INTO products_description VALUES (190,1,'TAXOUT','','',0);
INSERT INTO products_description VALUES (190,2,'���ʲ��ʤ���ȴ���ʳ��ǡˤǴ���������','���ʲ��ʤ��ǡ���ȴ�����ʡˤǴ���������Ǥ���<br /><br />\r\n\r\nɽ�����ʤˤϡ�����������¦�����Ϥ������ʲ��ʤ˾�����ʬ���褻������Τ�ɽ������ޤ������ץ��������ˤ�Ʊ���褦��Ŭ�Ѥ��ޤ���<br /><br />\r\n�ʤ�������ʬ�ϡ����餫���᥷��å����Τ������ͤȤ������ꤷ����Τ��Ȥ��ޤ��ʥǥե���Ȥ�5��ˤʤäƤ��ޤ��ˡ�<br /><br />\r\n\r\n�����åȡ�\r\n��������ʬ����ư�Ǿ�褻�����Τǡ�����¦�Ǥ���ȴ�����ʤǴ����Ǥ��롣�ޤ���������Ψ���Ѥ�ä����ˡ�����å����Τ���Ψ�����ͤ��ѹ���������ǺѤࡣ<br /><br />\r\n���ǥ��åȡ� 4,980�ߤʤɾ���奦�����ɤ�����ɽ���ˤ�������硢���椷�Ť餤<br /><br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[�Ǽ���]����������<br />\r\n��[���ʲ��ʡʥͥåȡ�]��10000�ߡ��ʾ�����ʬ��ޤ�ʤ���<br /><br />\r\n\r\n\r\n��������۾��ʥ��ץ����°��<br />\r\n��[���ץ�������] ��åɡʡ�0/�ɲ�����ʤ��ˡ��ۥ磻�ȡʡ�1000�ߡˡ��������ʡ�2000�ߡ�<br /><br />\r\n\r\n�ڥ���å����Τ�����ۡ��ϰ衦��Ψ�������Ψ���ꡡ<br />\r\n��[�����Ǥ���Ψ]����5��<br />','',9);
INSERT INTO products_description VALUES (191,1,'TAXIN-2','','',1);
INSERT INTO products_description VALUES (191,2,'���ʲ��ʤ��ǹ��ߡ����ǡˤǴ���������(2)','������ϡ����ʲ��ʤ����ǡ��ǹ��߲��ʡˤǴ���������Ǥ���<br />\r\n���Ǥξ�硢2�ĤΤ����������ޤ������������٤ƤߤƤ��������ˡ�<br />\r\n���Υ������Ǥ��Ǽ��̤�־����ǡפˤ��Ƥ��ޤ������ʲ��ʡʥ����ˤ��������ǲ��ʤ����Ϥ��ޤ���<br /><br />\r\n\r\n\r\n[�Ǽ���]������Ǥ˻��ꤷ�����ʲ��ʡʥ����ˤ����ǲ��ʤ����Ϥ���ȡ����ʲ��ʡʥͥåȡˤˤϼ�ư�׻����줿��ȴ�����ʤ�����ޤ�������å�¦��ɽ�������ΤϾ��ʲ��ʡʥ����ˤ����ʤΤǤĤޤ����ǲ��ʤ�ɽ�������Ȥ����櫓�Ǥ������ץ������ʤ������ͤ˾�����ʬ����褻�����ɽ�������Τ���դ��Ƥ���������<br /><br />\r\n\r\n\r\n������������ǤǴ������롧<br />\r\n��[�Ǽ���]����-- ������ --<br />\r\n��[���ʲ��ʡʥ�����]��10000�� ���ǹ��߲��ʤ����Ϥ����<br /><br />\r\n\r\n��������۾��ʥ��ץ����°��<br />\r\n��[���ץ�������] ��åɡʡ�0/�ɲ�����ʤ��ˡ��ۥ磻�ȡʡ�1000�ߡˡ��������ʡ�2000�ߡ�','',8);
INSERT INTO products_description VALUES (192,1,'ATTR_IMAGE1','','',0);
INSERT INTO products_description VALUES (192,2,'��OP1�۲����դ����ץ�������','�����դ����ʥ��ץ�������Ǥ��������Ǥϡ�2�����륫�顼�ʾ��ʥ��ץ����°���ˤΤ��줾��ˡ�������ź����ɽ�����Ƥ��ޤ���<br /><br />\r\n����ϡ����ʥ��ץ����°���θ��ܲ����ˡ������ե��������ꤹ�뤳�ȤǼ¸��Ǥ��ޤ���<br />\r\n\r\n��������۾��ʥ��ץ����°��<br />\r\n����[���ץ������]���Ф���<br />\r\n����[°���θ��ܲ���]�� �����ե�����ʤ������饢�åץ��ɲġ�<br />\r\n����[°���θ��ܲ����ǥ��쥯�ȥ�]�� \"attributes\" <br /><br />\r\n\r\n�ڻ��͡ۥ��ץ����̾<br />\r\n��[���ץ����̾]�������顼<br />\r\n��[���ץ����Υ�����]����RADIO<br />\r\n�����������ܲ���ɽ���ϥ����פ˰ͤ餺��ǽ<br /><br />\r\n\r\nNOTE��<br />\r\n�ʤ������ǡʥ饸���ܥ���ˡ����ץ����̾�����ܲ��������ִط��ϡ�������˥塼�ξ��ʤδ����䥪�ץ����̾�δ���������Ū�Υ��ץ����̾��[�Խ�]�ˤ�<br />\r\n����(Row)�������°������<br />\r\n���饸���ܥ��󡦥����å��ܥå�����°����������<br />\r\n��������Ѥ��뤳�Ȥ��Ǥ��ޤ���','',19);
INSERT INTO products_description VALUES (193,1,'ATTR_IMAGE2','','',0);
INSERT INTO products_description VALUES (193,2,'��OP2�۲����դ����ץ�������','�����դ����ʥ��ץ������㤽��2�Ǥ���<br />\r\n����ϡ����ʥ��ץ����°���θ��ܲ����ˡ������ե��������ꤹ�뤳�ȤǼ¸��Ǥ��ޤ���<br /><br />\r\n\r\n������ϡ����Ǻ�Ȥ���������ˡ�ס�READ ONLY�����פξ��ʥ��ץ�������ѡˤ˴ؤ��ơ�����ɽ���ȥ������β��٤�2���ץ���������դ��ˤ��Ƥ��ޤ���<br />\r\n\r\n��������۾��ʥ��ץ����°��<br />\r\n��[���ץ������]��\"��������\"�������  �ɥ������ϡ��� ���Ф��Ƥ��줾�첼���θ��ܲ�������ꤹ�롣<br />\r\n��[°���θ��ܲ���]�� �����餫�����Ѱդ������ܲ����Υե�����ʤ������饢�åץ��ɤǤ����<br />\r\n��[°���θ��ܲ����ǥ��쥯�ȥ�]�� \"attributes\" <br /><br />','',12);
INSERT INTO products_description VALUES (194,1,'IMAGE1','','',0);
INSERT INTO products_description VALUES (194,2,'��1��ʣ���ξ��ʲ�����Ǻܡʼ�ư�Ǻܡ�','�ᥤ��β�����¾�˴�Ϣ�����������Ǻܤ�������礬����ޤ���͡�<br />\r\n����ʻ��˺Ǥ��ñ�ʤΤ�������ˡ�ǡ�����Υ롼��ǲ����ե������̿̾����FTP���Ƥ����м�ư�Ǻܤ���ޤ���<br />\r\n����������ʸ�ΰ��ֲ��˲�����3���Ǻܤ���Ƥ��ޤ���<br /><br />\r\n\r\n�ڥ롼���<br />\r\n��2���ܰʹߤβ����ե�����̾��[�ᥤ������ե�����̾]��[����(_xx��]��[.Ʊ����ĥ��] �ǤĤ���<br />\r\n���ᥤ�������Ʊ���ǥ��쥯�ȥ�˥��åץ��ɤ���<br />\r\n��2���ܰʹߤβ����Ǻܽ�ϡ����֤ξ�������ˤʤ�<br /><br />\r\n\r\n����۾��ʾ���δ�����<br />\r\n��[���ʲ���]��[IMAGE1.jpg] <br />\r\n��[���åץ�����ǥ��쥯�ȥ�]������samples�ɤ�����<br />\r\n�Ȥ������ϡ�<br /><br />\r\n\r\n2���ܰʹߤβ���<br />\r\n��IMAGE1_01.jpg<br />\r\n��IMAGE1_02.jpg<br />\r\n��IMAGE1_03.jpg<br />\r\n��������<br />\r\n�򡢡ʥ���å����֥ǥ��쥯�ȥ��/images/samples/���۲���FTP����Ф褤��<br /><br />\r\n\r\nNOTE��<br />\r\n�����դ��β�������ư�Ǻܤ����Ȥ������Ȥϡ��դ˸����С����뾦��A�β����ե�����̾�������ޤ����̤ξ���B�β���̾_xx�ˤʤäƤ����顢����B�Υڡ����˼�ư�Ǻܤ���Ƥ��ޤ��Ȥ������Ȥ��̣���ޤ���<br /><br />\r\n������򤱤뤿��ˤ⡢�ᥤ������ˤĤ��Ƥ�̿̾�롼���褯�ͤ��Ʒ��ޤ��礦����������ϡ����ʷ��֤�Ʊ���ˤ��Ƥ������ȤǤ����̾ﾦ�ʷ��֤ϡ����ʤ��Ȥ˸�ͭ�Ǥ��礦����ˡ��ɤξ��ʤβ�������狼��䤹��������Ļ�Ǥ���','',18);
INSERT INTO products_description VALUES (195,1,'IMAGE2','','',0);
INSERT INTO products_description VALUES (195,2,'��2��ʣ���ξ��ʲ�����Ǻ�(�Ҳ�ʸ���HTMLľ�񤭡�','[��������]��ˡ�img�䥿����ľ�񤭤�����ˡ�⥢��Ǥ���<br /><br />\r\n\r\n������ˡ�ϡ�\r\n<ul>\r\n<li>�Ҳ�ʸ������˲����������ᡢ����ץ�����ź���뤳�Ȥ�Ǥ���ʤɥ쥤�����Ȥμ�ͳ�٤��⤤</li>\r\n<li>����̾���Х�Х���ä��ꡢ��ĥ�Ҥ��ۤʤ�����Ǥⰷ����</li>\r\n<li><a href=\"http://www.flickr.com/\">Flickr</a>�˥��åפ��������䡢<a href=\"http://www.youtube.com\">YouTube</a>���ư���Ǻܤ��뤳�Ȥ�Ǥ���</li>\r\n</ul>\r\n�ʤɤΥ��åȤ�����ޤ���<br />��������HTML���Τ�ʤ��ͤˤȤäƤϸ��������⤷��ޤ���<br /><br />\r\n\r\n��img src=\"������URL\" alt=\"����������\" /���񤱤Ф��β�����ɽ������ޤ���<br /><br />\r\n�����<br />\r\n<img src=\"http://okra.ark-web.jp/~shinchi/zenc/images/samples/IMAGE2_related.jpg\" alt=\"����T����ĤΥ�ǥ�ǭ�ؤ��ޤ�٤Ǥ�\" /><br />\r\n����T����ĤǤ�Ȥ��Ƥ��롢������å׼����Υ�ǥ�ǭ�ؤ��ޤ�٤Ǥ������Ѥ⤫�襤���Ǥ����*^o^*��b','',17);
INSERT INTO products_description VALUES (196,1,'DISCNTQTY_ATTR1','','',0);
INSERT INTO products_description VALUES (196,2,'��1�ۥ��顼�ǳ����郎�ۤʤ���̳����','���ץ���󤴤Ȥ˥ܥ�塼��ǥ���������Ȥγ����郎�ۤʤ�������Ǥ���<br />\r\n���̤Τ������͡�����ۤ򥪥ץ���󤴤Ȥ���Ω��������Ǥ��ޤ���<br /><br />\r\n\r\n������Ǥϡ��ۥ磻�Ȥι����Ŀ���9���ʲ��ʤ��Ͱ��ʤ��ǡ�10���ʤ��100�߰�����11���ʾ�ʤ��200�߰����Ǥ���<br />\r\n�Ф��륪��󥸤����ϡ�19���ޤǤϳ���ʤ��ǡ�20���ʾ�ʤ��150�߰����ˤʤ�ޤ���<br /><br /><br />\r\n\r\n<strong>���ץ����ο����Ͱ�����ν�</strong><br />\r\n[�������� N:�Ͱ����� D] ���󥻥åȤȤ��ơ�ɬ�ץ��å�ʬ������,��Ⱦ�ѥ���ޡˡפǷҤ��ޤ���<br /><br />\r\n\r\n�񼰡���N0:D0, N1:D1, N2:D2����, N(n-1):D(n-1), Nn:Dn<br /><br />\r\n��̣��1��N0�Ĥޤǡ� D0�߰���<br />\r\n������N1��N2�Ĥޤǡ� D1�߰���<br />\r\n��������<br />\r\n��������<br />\r\n������N(n-1)��Nn�Ĥޤǡ� D(n-1)�߰���<br />\r\n������N(n-1)+1�İʾ塧 Dn�߰���<br /><br />\r\n\r\n��n=1,2,������,N�μ��������Ǹ�Υ��åȤ�Nn�λ����ͤ˰�̣�Ϥʤ���Dn�Ͼ��N(n-1)+1�İʾ�λ����Ͱ��ۤȤ��ư����롣<br /><br />\r\n\r\n�ڼ���1��\"�ۥ磻��\"<br />\r\n[���ץ����ο����Ͱ�����]��9:-0,10:-100,11:-200<br />\r\n��̣������9���ޤǤ��Ͱ���0��10���ϡ�100�߰�����11���ʾ�ǡ�200�߰���<br /><br />\r\n\r\n�ڼ���1��\"�����\"<br />\r\n[���ץ����ο����Ͱ�����]��19:-0,20:-150<br />\r\n��̣������19���ޤǤ��Ͱ���0��20���ʾ��㤦�ȡ�150�߰���<br /><br />\r\n\r\nNOTE��<br />\r\nD���ͤ�Ƭ�ˡ�-�פ�Ĥ���-100�ʤ�100�߰����ˡ���+�פ�Ĥ���+100�Ȥʤ�100�������ˤʤ롣','',35);
INSERT INTO products_description VALUES (197,1,'DISCNTQTY_ATTR2','','',0);
INSERT INTO products_description VALUES (197,2,'��2�ۥ��顼���̾���ʤ���̳������ۤʤ���','���ץ���󤴤Ȥ˥ܥ�塼��ǥ���������Ȥγ����郎�ۤʤ�������Ǥ���<br />\r\nľ���Ρ�1�ۤ���Ȱۤʤ�Τϡ���1�ۤǤϾ��ʲ���¦�˴��ܲ���ʬ������������ץ����°���ǤϿ��̳��ʬ������ô�������Ƥ����Τ��Ф���������Ǥϡ����ʲ��ʤ�0�Ȥ��ơ����ץ��������¦�ǲ��ʤ򥻥åȤ��Ƥ������Ǥ���<br />\r\n�㤤���狼��褦���ۥ磻�Ȥ�����ʿ��̳��Ŭ�������ץ��������ˤ�4000�ߡ�����󥸤�5000�ߤˤ��Ƥ���ޤ���<br />\r\n\r\n���̳���ۤϡ���1�ۤ�Ʊ������ˤʤäƤ��ơ�<br />\r\n�ۥ磻�Ȥι����Ŀ���9���ʲ��ʤ��Ͱ��ʤ��ǡ�10���ʤ��100�߰�����11���ʾ�ʤ��200�߰����Ǥ���<br />\r\n�Ф��륪��󥸤����ϡ�19���ޤǤϳ���ʤ��ǡ�20���ʾ�ʤ��150�߰����ˤʤ�ޤ���<br /><br />\r\n\r\n�ƥ��ץ����°����[���ץ����ο����Ͱ�����]�ν񼰤ˤĤ��Ƥϡ�1�ۤ��������Ƥ��ޤ��ΤǤ�������������<br /><br />\r\n\r\n\r\n��������۾��ʾ���<br />\r\n��[����°���ˤ�����]���Ϥ�<br />\r\n��[���ʲ��� (�ͥå�)]��0��<br /><br />\r\n\r\n�ڥ��ץ�����������\"�ۥ磻��\"<br />\r\n��[���ץ����β���]��4000��<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[���ץ����ο����Ͱ�����]��9:-0,10:-100,11:-200<br />\r\n����̣������9���ޤǤ��Ͱ���0��10���ϡ�100�߰�����11���ʾ�ǡ�200�߰���<br /><br />\r\n\r\n�ڥ��ץ�����������\"�����\"<br />\r\n��[���ץ����β���]��5000��<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[���ץ����ο����Ͱ�����]��19:-0,20:-150<br />\r\n����̣������19���ޤǤ��Ͱ���0��20���ʾ��㤦�ȡ�150�߰���<br /><br /><br />\r\n\r\n<strong>NOTE1����[����°���ˤ�����]���Ϥ����ΰ�̣</strong><br /><br />\r\n����̾�β���ɽ����������� �� [���ʲ���] �� [���ץ������ʡʤκǰ���)] �ˤʤ�ޤ���<br />\r\n�������֤������פ��ȡ�[���ʲ���]������ɽ������ޤ��ʾ��ʲ��ʡ�0�ߤλ���ɽ�����ξ�ά�ˡ�<br />\r\n���������ȡ����ץ������ʤκǰ��ͤϥۥ磻�Ȥ�4000�ߤʤΤǡ�����̾�β���ɽ����������� ��0�ߡ�4000�ߤη�̤Ȥ���4000�ߤ�ɽ������Ƥ���櫓�Ǥ���<br /><br /><br />\r\n\r\n<strong>NOTE2��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ����ΰ�̣</strong><br /><br />\r\n���줬\"������\"�Υ��ץ����ϡ����Ȥ����Υ��ץ�������⤬���ץ����֤Ǻǰ��ͤ��ä��Ȥ��Ƥ�<br />\r\nNOTE1������������<br />\r\n������̾�β���ɽ����������� �� [���ʲ���] �� [���ץ������ʡʤκǰ���)] ��<br />\r\n���ͤȤ��ƤϻȤ��ޤ���','',13);
INSERT INTO products_description VALUES (198,1,'DSCNT_ONE1','','',0);
INSERT INTO products_description VALUES (198,2,'��OT1�ۥ�󥿥������㡧1��ʸ�ˤĤ�500�߰�����','���ץ����°����[��󥿥�����]��ǽ��Ȥäơ�Ʊ�쾦��Ʊ�쥫�顼�����̰ʾ�ʤ��1��ʸ������500�߰����פ�¸�������Ǥ������γ���ϥ��ץ���󤴤Ȥ�����ʤΤǡ����顼���Ȥ˳���ۤ��Ѥ��뤳�Ȥ��ǽ�Ǥ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[����°���ˤ�����]���Ϥ�<br />\r\n��[���ʲ��� (�ͥå�)]��0��<br /><br />\r\n\r\n�ڥ��ץ�����������\"�ۥ磻��\"<br />\r\n��[���ץ����β���]��4000��<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[��󥿥����Ͱ����Ͱ����]��-500�ʱߡˡ���Ƭ��\"-\"��Ĥ��뤳��<br /><br />\r\n\r\n�ڥ��ץ�����������\"�����\"<br />\r\n��[���ץ����β���]��5000��<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[��󥿥����Ͱ����Ͱ����]��-500�ʱߡˡ���Ƭ��\"-\"��Ĥ��뤳��<br /><br /><br />\r\n\r\n<strong>NOTE1����[����°���ˤ�����]���Ϥ����ΰ�̣</strong><br /><br />\r\n����̾�β���ɽ����������� �� [���ʲ���] �� [���ץ������ʡʤκǰ���)] �ˤʤ�ޤ���<br />\r\n�������֤������פ��ȡ�[���ʲ���]������ɽ������ޤ��ʾ��ʲ��ʡ�0�ߤλ���ɽ�����ξ�ά�ˡ�<br />\r\n���������ȡ����ץ������ʤκǰ��ͤϥۥ磻�Ȥ�4000�ߤʤΤǡ�����̾�β���ɽ����������� ��0�ߡ�4000�ߤη�̤Ȥ���4000�ߤ�ɽ������Ƥ���櫓�Ǥ���<br /><br /><br />\r\n\r\n<strong>NOTE2��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ����ΰ�̣</strong><br /><br />\r\n���줬\"������\"�Υ��ץ����ϡ����Ȥ����Υ��ץ�������⤬���ץ����֤Ǻǰ��ͤ��ä��Ȥ��Ƥ�<br />\r\nNOTE1������������<br />\r\n������̾�β���ɽ����������� �� [���ʲ���] �� [���ץ������ʡʤκǰ���)] ��<br />\r\n���ͤȤ��ƤϻȤ��ޤ���<br /><br /><br />','',7);
INSERT INTO products_description VALUES (199,1,'DSCNT_ONE2','','',0);
INSERT INTO products_description VALUES (199,2,'��OT2�ۥ�󥿥����\"��\"�㡧1��ʸ�ˤĤ�������Ѥ�û�','��󥿥�������ǽ�ϡ��Ȥ�������ǤϽ������Ū�ʻȤ�����Ǥ��ޤ���<br />\r\n�����ǽ�����Ѥȸ��äƤ���Τϡ�����ʸ�Ŀ��ˤ�����餺1�����ʸ������1�٤�������������פȤ�����̣�Ǥ���<br /><br />\r\n\r\n���ʤ��������Ǥ�������󥿥�������ǽ�ܥ��ץ����°���ο��̳����Ȥä�T����ĤΥ��ꥸ�ʥ�ץ��Ȥ���򤪤ߤ����ޤ��礦��<br /><br />\r\n\r\n������ϡ�̵��T����Ĥ˥����̾�ʤɤΥ��ꥸ�ʥ�ץ��Ȥ�ù����롢������\"������T�����\"���ʤǤ�������ϰʲ��Τ褦�˷�ޤ�ޤ���\r\n<ul>\r\n<li>�ץ��ȸ�������ǲ���ˤ�������ޤ������󥯤ο��������Ƿ�ޤ���ʸ���ˤ��ޤ���</li>\r\n<li>���Τۤ���T�����1�礢����Υץ�����ʲù���ˤ�������ޤ�������⥤�󥯤ο�����ñ�����㤤���������ʸ�������������ñ����������ޤ���</li>\r\n<li>������T��������Τ����ʤ����Ӥ�����ޤ�</li>\r\n</ul>\r\n\r\n��������۾��ʾ���<br />\r\n��[���ʲ���]����4000�ߡ���T��������Τβ��ʡ�<br /><br />\r\n\r\n��������ۥ��ץ����°��<br />\r\n[���ץ������]��[���ץ�������]��[��󥿥����Ͱ����Ͱ����]��[���ץ����ο����Ͱ�����]���ν��<br />\r\n���ץ���1������+ 600 �� +10000 ��49:-0,50:-200,100:-300<br />\r\n���ץ���2������+ 700 �� +20000 ��49:-0,50:-200,100:-300<br />\r\n���ץ���3������+ 800 �� +30000 ��49:-0,50:-200,100:-300<br /><br />\r\n\r\nNOTE��<br />\r\n��[���ʲ���]��̵��T�������<br />\r\n��[���ץ�������]��ù���<br />\r\n��[��󥿥����Ͱ����Ͱ����]��ץ��ȸ�����<br />\r\n�ˤ�����ޤ���<br /><br />\r\n\r\n��󥿥�������Ƭ��\"+\"���Ĥ��г����ʺ������ˤˡ�\"-\"���Ĥ��г���ʡ�1�ۤ���ˤȤ��Ƶ�ǽ���ޤ���','',10);
INSERT INTO products_description VALUES (201,1,'UNIT1','','',0);
INSERT INTO products_description VALUES (200,1,'LIMIT-2','','',0);
INSERT INTO products_description VALUES (200,2,'��2�ۤ���ͤ���1���¤ꡪ�ʿ�����������ɽ����','��ʸ1�󤢤���ι����������1�Ĥ����ꤹ��ȡ��������������ɽ���ˤʤꡢ1�����Ĥ��������Ȥ��ɲäǤ��ʤ��ʤ�ޤ���<br /><br />\r\n\r\n���������<br />\r\n�����ʤκǾ����̡���1<br />\r\n�����ʤκ�����̡���1<br />\r\n�����ʤο���ñ�̡���1<br /><br />','',1);
INSERT INTO products_description VALUES (202,2,'��2��2000�İʾ��100��ñ�̤Ǥ���ʸ��������','����ϡ�100��ñ�̤ǡ����ĺ���Ǥ�2000�İʾ夫�����ʸ�������������ʤɤΥ����������ꤷ����Ǥ�������������̹������оݤȤ�������ʤɤ����Ω�ĤȻפ��ޤ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n��[�Ǿ�������]����2000<br />\r\n��[����ñ��]�� 100<br /><br />\r\n\r\nNOTE��<br />\r\n�����[���������]�����ꤷ�Ƥ����ȡ���ʸ�ξ�¤����¤Ǥ��롣<br />','',0);
INSERT INTO products_description VALUES (203,1,'UNIT_ATR1','','',0);
INSERT INTO products_description VALUES (203,2,'��OP1��100��ñ�̤Ǥ���ʸ���������ʥ��ץ���󺮺�OK��','����ϡ����ʥ��ץ���󤢤�ξ���[���ʤο���ñ��]������Ǥ���<br />\r\n������Ǥϡ����ץ������Ȥ߹�碌���ɤ����졢�ǽ�Ū�ˤ��ξ��ʹ��������ñ�̿��̤��ܿ��Ǥ���й�����ǽ�Ǥ���<br />\r\n�Ĥޤꡢ�ۥ磻��50�����������졢³���ƥ֥롼��50�����������줿�����ǹ��100���ȸ��ʤ���ƹ�����ǽ�Ȥʤ�ޤ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n��[���ʤο���ñ��]����100<br /><br />\r\n\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�������̤ȥ�˥å��̤��Ȥ߹�碌��Ŭ�����롧���Ϥ�','',1);
INSERT INTO products_description VALUES (204,1,'UNIT_ATR2','','',0);
INSERT INTO products_description VALUES (204,2,'��OP2��1���ץ���󤢤���100��ñ�̤Ǥ���ʸ��������','����ϡ����ʥ��ץ���󤢤�ξ���[���ʤο���ñ��]������Ǥ���<br />\r\n������Ǥϡ�1�ĤΥ��ץ���󤢤���ι������ǥ�����Ȥ���Ʊ�����ץ�����ñ�̿��̤��ܿ��Ǥʤ��Ȥȷ�Ѥ˿ʤ�ޤ���<br />\r\n�Ĥޤꡢ�ۥ磻�Ȥȥ֥롼��50�����ĥ���������Ƥ����ǡ��ۥ磻�Ȥ��뤤�ϥ֥롼ñ�Τ�100�ĤȤ�200�ĤǤϤ���ƹ�����ǽ�Ȥʤ�ޤ���<br /><br />\r\n\r\n�������⡧���ʾ����<br />\r\n��[���ʤο���ñ��]����100<br /><br />\r\n\r\n�������⡧���ʲ��ʤδ�����<br />\r\n�������̤ȥ�˥å��̤��Ȥ߹�碌��Ŭ�����롧��������','',1);
INSERT INTO products_description VALUES (205,1,'PRCFACTOR','','',0);
INSERT INTO products_description VALUES (205,2,'��1�ۥץ饤���ե����������ƥ������åס��ݾڥ����ӥ������','�ץ饤���ե�����������Ǥ���<br />\r\n�ƥ������åפ����䤷�ޤ������Υƥ������åפˤϡ����ʲ��ʤβ��󤫤��ɲä�ʧ���ȹ�����ΰ�����֡���졦�礱����̵���򴹤��Ƥ������ݾڥ����ӥ��פ��Ѱդ���Ƥ��ޤ��������Ǥϡ������ݾڥ����ӥ��򡢥ץ饤���ե���������Ȥä����ꤷ�ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[���ʲ���]��20000 ��<br />\r\n��[����°���ˤ�����]�� �Ϥ�����1<br /><br />\r\n\r\n��������ۡ�5ǯ�ݾڡץ��ץ����<br />\r\n��[���ץ�������]�� 0��<br />\r\n��[�ץ饤���ե�������]�� 0.05 �����١������ʤ�5��<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]�� �Ϥ�����2<br /><br />\r\n\r\n��������ۡ�20ǯ�ݾڡץ��ץ����<br />\r\n��[�ץ饤���ե�������]�� 0.15 �����١������ʤ�15��<br />\r\n��¾������ϡ�5ǯ�ݾڡץ��ץ�����Ʊ����<br /><br /><br />\r\n\r\n<strong>NOTE�� �ץ饤���ե��������ˤĤ���</strong><br />\r\n�ץ饤���ե��������䥪�ե��åȤϡ����ץ������������ɲ�����˼��Τ褦�˺��Ѥ��ޤ���<br /><br />\r\n\r\n��<strong>���ץ������������ɲ�����<br />\r\n���� [���ץ�������] ��  <br />\r\n���� [�١�������] �ߡ�[�ץ饤���ե�������]��[���ե��å�]��</strong><br /><br />\r\n\r\n�����������嵭��1,2�Υե饰��ξ���Ȥ�\"�Ϥ�\"�ʤ�<br />\r\n��[�١�������] �� [���ʲ���]��[���ץ�������]<br /><br />\r\n\r\n���ɤ��餫�ʤ��뤤��ξ���ˤ�\"������\"�ʤ�<br /><br />\r\n��[�١�������] �� [���ʲ���]\r\n\r\n\r\n��������Ǥ�1��2�Υե饰�ϡ�ξ��\"�Ϥ�\"�ˤ��ޤ���������Ȥ�ȥ��ץ������ʤ�0�ߤȤ��Ƥ���Τ�\r\n�ºݤ�\"�Ϥ�\"�Ǥ�\"������\"�Ǥ�Ʊ����̤ˤʤ�ޤ���<br />','',69);
INSERT INTO products_description VALUES (206,1,'PRCFACTOR_OFFSET1','','',0);
INSERT INTO products_description VALUES (206,2,'��2�ۥץ饤���ե��������ȥ��ե��åȡ��ѥå���������','������Ǥϥץ饤���ե���������1�ʲ����͡ʲ��ʤ�5�����ˤ�Ȥ��ޤ����������٤ϥѥå������������ˤȤä��礭�������ͤ�Ȥ���򤪸������ޤ��礦��������Ǥϥ��ե��åȤ�ʻ�������Ѥ��ޤ���<br /><br />\r\n\r\n�ȼԸ�����T����Ĥ�ѥå��������䤹������Ǥ�������̾�β��ˤ�����ʪ��T����ġ�1��β��ʤ�ɽ������ޤ������ºݤ���ʸ��1�ѥå�100�������ѥå�����������ʸ���Ƥ�餤�ޤ���1�ѥå��������T�����100��ʬ�Ǥ���<br /><br />\r\n\r\n�����Ǥϡ�����1�ѥå�����������ʤ򥪥ץ��������ʡ�T�����ñ���ˡ��ץ饤���ե��������ʥ��å�����ˤȥ��ե��åȡ�̵�������ӥ�ʬ�ˤ�Ȥä����ꤷ�ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[���ʲ���]��0 ��<br />\r\n��[����°���ˤ�����]�� �Ϥ�����1<br /><br />\r\n\r\n��������ֶۡ�̳�ѥѥå���100������ˡץ��ץ����<br />\r\n��[���ץ�������]�� 4000��<br />\r\n��[�ץ饤���ե�������]�� 100 <br />\r\n��[���ե��å�]�� 1<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]�� �Ϥ�����2<br /><br />\r\n\r\n<strong>NOTE�� �ץ饤���ե��������ˤĤ���</strong><br />\r\n�ץ饤���ե��������䥪�ե��åȤϡ����ץ������������ɲ�����˼��Τ褦�˺��Ѥ��ޤ���<br /><br />\r\n\r\n��<strong>���ץ����������ι���ñ���ʾ���1���������<br />\r\n���� [���ʲ���] �� [���ץ�������]  <br />\r\n������ [�١�������] �ߡ�[�ץ饤���ե�������]��[���ե��å�]��</strong><br /><br />\r\n\r\n�����������嵭��1,2�Υե饰�ξ��֤�[�١�������]���Ѥ�ꡢ\r\n<ul>\r\n<li>2�ե饰�Ȥ�� \"�Ϥ�\" �ʤ顦��<br />\r\n[�١�������] �� [���ʲ���]��[���ץ�������]</li>\r\n<li>�����줫�����뤤��ξ�� \"������\" �ʤ顦��<br />\r\n[�١�������] �� [���ʲ���]</li>\r\n</ul>\r\n\r\n\r\n<strong>�����ե��å��ͤˤĤ���</strong><br />\r\n�����������ߤơ��֤ʤ�ǥ��ե��åȤ�1�ˤ����������פȻפ��ޤ���Ǥ����������ҤΡ֥��ץ������������ɲ�����פμ�����դ��Ƹ����ߤ����ΤǤ������ץ饤���ե���������100�ܤ��Ƥ���¾�ˡ�����1���ܤǤ⤦1��ʬ�β��ʡʡ�[���ʲ���] �� [���ץ�������]��  ���û�����Ƥ��ޤ���͡����ΤޤޤǤ�101��ʬ������ˤʤäƤ��ޤ���礬�����Τǡ����ե��å�¦��;ʬ��1��ʬ�򥭥�󥻥뤷�Ƥ���ΤǤ���<br />\r\n������Ȥ��ơ��嵭���100��Τ���5��ʬ�������̵�������ӥ��ˤ���ʤ顢[���ե��å�]��\"6\" �ʥ���󥻥�1��̵�������ӥ�5�ˤȤʤ�ޤ���<br /><br />\r\n\r\n<strong>NOTE�� �߸ˤ������ˤĤ���</strong><br />\r\n�߸ˤ������ˤĤ�����դ����ߤ����Τϡ�������Ǥ���1�ѥå��������������顢�߸ˤθ������Ȥ��Ƥ�1�ʥѥå�������ʬ�Ǥ��äơ�100��ʬ������ʪ�θĿ��ˤǤϤʤ��Ȥ������ȤǤ���<br />\r\n�⤷�߸˿�������ʪ�١����Ǵ����������ΤǤ���С��ץ饤���ե��������ǤϤʤ���[���ʤο���ñ��]��100�ˤ�����ˡ�ʤ��������100ñ�̤Ǥ�����ʸ�Ǥ��ʤ��ˤ��٥������⤷��ޤ���','',41);
INSERT INTO products_description VALUES (207,1,'PRCFACTOR_OFFSET_ONCE','','',0);
INSERT INTO products_description VALUES (207,2,'��3�ۥ�󥿥���ץ饤���ե��������ȥ��ե��å�','������Ǥϥץ饤���ե��������ȥ��ե��åȤ�Ȥä��ѥå������������򤪸������ޤ��������٤�̾���ϻ��Ƥ��ޤ�����1��ʸ������ˤ���������Ȥ��ƥ�󥿥���ץ饤���ե��������ȥ��ե��åȤˤĤ����������ޤ���<br /><br />\r\n\r\n�̾�Υץ饤���ե������������ե��åȤȡ���󥿥�����ΰ㤤�ϡ�<br />\r\n�����ɲ�ʬ������ñ���˲û�����뤫�ʥץ饤���ե���������N���㤨��N�ܤ�����ˡ�<br />\r\n������ʸ1�󤢤�������˲û�����뤫�ʥ�󥿥������������äƤ��ɲ�ʬ��1��ʸ���������ۡ�<br />\r\n�Ȥ������Ǥ���<br /><br />\r\n\r\n�����Ǥ�T����Ĥ����䤷�ޤ����֥��ե������ץ��ץ���󤬤��äơ�����ϸ��������ǤϤʤ��ʲ�����äƤ��1�ĸ��ǥ�åԥ󥰤����ΤȤ��ޤ����Ĥޤ�1��ʸ������1��åԥ󥰤Ȥ������Ȥǡ����Υ��ץ������ɲ����ѤȤ��ƾ���1�Ĥ����ʤ�20�󤤤��������Ȥˤ��ޤ�����������󥿥���ץ饤���ե��������Ǽ¸����ޤ���<br /><br /><br />\r\n\r\n\r\n��������۾��ʾ���<br />\r\n��[���ʲ���]��4000 ��<br />\r\n��[����°���ˤ�����]�� �Ϥ�����1<br /><br />\r\n\r\n��������ۥ��եȥ��ץ����<br />\r\n��[���ץ�������]�� 0��<br />\r\n��[��󥿥���ץ饤���ե�������]�� 0.3 <br />\r\n��[��󥿥��४�ե��å�]�� 0.1<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]�� �Ϥ�����2<br /><br />\r\n\r\n<strong>NOTE�� ��󥿥���ץ饤���ե�����������ӥ�󥿥��४�ե��åȤˤĤ���</strong><br />\r\n��󥿥���ץ饤���ե������������ե��åȤϡ����ץ������������ɲ�����˼��Τ褦�˺��Ѥ��ޤ���<br /><br />\r\n\r\n��<strong>���ץ����������ι���ñ���ʾ���1���������<br />\r\n���� [���ʲ���] �� [���ץ�������]</strong><br /><br />\r\n\r\n������¾�ˡ�1��ʸ�����꤫�������⤬���äơ�����<br />\r\n��<strong>���ץ������������ɲ������1��ʸ�������<br />\r\n���� [�١�������] �ߡ�[��󥿥���ץ饤���ե�������]��[��󥿥��४�ե��å�]��</strong><br /><br />\r\n\r\n�����������嵭��1,2�Υե饰�ξ��֤�[�١�������]���Ѥ�ꡢ\r\n<ul>\r\n<li>2�ե饰�Ȥ�� \"�Ϥ�\" �ʤ顦��<br />\r\n[�١�������] �� [���ʲ���]��[���ץ�������]</li>\r\n<li>�����줫�����뤤��ξ�� \"������\" �ʤ顦��<br />\r\n[�١�������] �� [���ʲ���]</li>','',18);
INSERT INTO products_description VALUES (209,1,'BASEPRICE1','','',0);
INSERT INTO products_description VALUES (209,2,'��1�ۥ١������ʡᾦ�ʲ��ʡܥ��ץ�������','�١������ʡ����ʲ��ʡ����ץ������ʤδط������򤹤��1��<br /><br />\r\n\r\n�١������ʤϡ����ץ���󤴤Ȥο��̳���䡢�ץ饤���ե���������Ŭ�Ѥ���ݤδ��ۤȤ��ƻȤ��ޤ���<br /><br />\r\n\r\n�١������ʤϡ�\r\n<ul>\r\n <li>[����°���ˤ�����]�ե饰�������ʾ���������1�������Τ˱ƶ������</li>\r\n <li>[°���ˤ�����������١������ʤ˴ޤ��]�ե饰�������ץ����°�����Ȥ�����ʤ��Υ��ץ��������˱ƶ������</li>\r\n</ul>\r\n��2�ե饰�ξ��֤��ƶ����ޤ����ط���ɽ�ˤ���ȡ�����<br /><br />\r\n\r\n<table border=\"1\">\r\n  <tr>\r\n    <th width=\"20%\">[����°���ˤ�����]</th>\r\n   <td colspan=\"2\" width=\"60%\"><b>\"�Ϥ�\"</b></td>\r\n   <td width=\"20%\"><b>\"������\"</b></td>\r\n  </tr>\r\n  <tr>\r\n   <th>[°���ˤ�����������١������ʤ˴ޤ��]</th>\r\n   <td width=\"40%\"><b>\"�Ϥ�\"</b></td>\r\n   <td width=\"20%\">\"������\"</td>\r\n   <td>��</td>\r\n  </tr>\r\n  <tr>\r\n   <th>[�١�������]</th>\r\n   <td style=\"background:#E6E68A;\">��[���ʲ���]��[���ץ�������]</td>\r\n   <td colspan=\"2\" style=\"background:#E6E68A;\">��[���ʲ���]</td>\r\n  </tr>\r\n  <tr>\r\n   <th>ɽ�����ʤ��оݡ�</th>\r\n   <td style=\"background:#E6E68A;\">YES�ʥ١���������Ǿ��ͤʤ�ɽ��������</td>\r\n   <td colspan=\"2\" style=\"background:#E6E68A;\">ɽ���оݳ�</td>\r\n  </tr>\r\n</table>\r\n<br />\r\n�����Ǥϡ��ɤ���Υե饰��\"�Ϥ�\"������󼨤��ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[���ʲ���]��4000��<br />\r\n��[����°���ˤ�����]���Ϥ�<br /><br />\r\n\r\n���������\"�ۥ磻��\"<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[���ץ�������]��500��<br /><br />\r\n\r\n���������\"�����\"<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[���ץ�������]��1000��<br /><br />\r\n\r\nNOTE:<br />\r\nɽ�����ʡʾ���̾�β���ɽ������Ƥ�����ʡˤˤϡ��١������ʤκǾ��ͤ�ɽ������ޤ����ۥ磻�ȤΥ١������ʤ���������󥸤�꾮�����Τǡ��ۥ磻�Ȥ��ͤ�ɽ������Ƥ���櫓�Ǥ���','',11);
INSERT INTO products_description VALUES (208,1,'DISCNTQTY_ATTR_ONCE','','',0);
INSERT INTO products_description VALUES (208,2,'��3�ۥ��顼�ǳ����郎�ۤʤ��󥿥�����̳����','[���ץ����Υ�󥿥�������Ͱ�����]��Ȥ���Ǥ���<br />\r\n����2��ǰ��ä�[���ץ����ο����Ͱ�����]��ñ���˺��Ѥ����Ͱ������ä��Τ��Ф��ơ������ǰ���[���ץ����Υ�󥿥�������Ͱ�����]�ϡ�1�����ʸ������ˤ������Ͱ����Ǥ��������ۤʤ�ޤ���<br /><br />\r\n\r\n�Ĥޤꡢ<br />\r\n���ʲ��ʤ�1000�ߡ�10�İʾ���ä���100�߰����������Ȥ���<br />\r\n\r\n[���ץ����ο����Ͱ�����] �����ꤷ����硧<br />\r\n������������[10��ʬ]���1000�� �� 100�ߡˡ�10�� ��9000��<br />\r\n������ñ����900�ߤˤʤ롣<br /><br />\r\n��\r\n�Ǥ�����Ʊ�����Ȥ�<br />\r\n[���ץ����Υ�󥿥�������Ͱ�����]�����ꤷ����硧<br />\r\n������������[10��ʬ]�� ��1000�� �� 10�ġˡ�100�� �� 9900��<br />\r\n������ñ�����Ѳ���������פ���100�߰������<br /><br />\r\n\r\n�Ȥ�����̤ˤʤ�ޤ���<br />\r\n�ʤ������̤Τ������͡�����ۤ򥪥ץ���󤴤Ȥ���Ω��������Ǥ������ʤɤ�Ʊ���Ǥ���<br /><br /><br />\r\n\r\n<strong>���ץ����Υ�󥿥�������Ͱ�����ν�</strong><br />\r\n[�������� N:�Ͱ����� D] ���󥻥åȤȤ��ơ�ɬ�ץ��å�ʬ������,��Ⱦ�ѥ���ޡˡפǷҤ��ޤ���<br /><br />\r\n\r\n�񼰡���N0:D0, N1:D1, N2:D2����, N(n-1):D(n-1), Nn:Dn<br /><br />\r\n��̣��1��N0�Ĥޤǡ� D0�߰���<br />\r\n������N1��N2�Ĥޤǡ� D1�߰���<br />\r\n��������<br />\r\n��������<br />\r\n������N(n-1)��Nn�Ĥޤǡ� D(n-1)�߰���<br />\r\n������N(n-1)+1�İʾ塧 Dn�߰���<br /><br />\r\n\r\n��n=1,2,������,N�μ��������Ǹ�Υ��åȤ�Nn�λ����ͤ˰�̣�Ϥʤ���Dn�Ͼ��N(n-1)+1�İʾ�λ����Ͱ��ۤȤ��ư����롣<br /><br />\r\n\r\n�ڼ���1��\"�ۥ磻��\"<br />\r\n[���ץ����Υ�󥿥�������Ͱ�����]��9:-0,10:-1000,11:-4000<br />\r\n��̣������9���ޤǤ��Ͱ���0��10���ʤ��פ���1000�߰�����11���ʾ�Ǥ�4000�ߤ��פ������<br /><br />\r\n\r\n�ڼ���1��\"�����\"<br />\r\n[���ץ����Υ�󥿥�������Ͱ�����]��19:-0,20:-5000<br />\r\n��̣������19���ޤǤ��Ͱ���0��20���ʾ��㤦�ȹ�פ���5000�߰���<br /><br />\r\n\r\nNOTE��<br />\r\nD���ͤ�Ƭ�ˡ�-�פ�Ĥ���-100�ʤ�100�߰����ˡ���+�פ�Ĥ���+100�Ȥʤ�100�������ˤʤ롣','',11);
INSERT INTO products_description VALUES (210,1,'BASEPRICE3','','',0);
INSERT INTO products_description VALUES (210,2,'��3�ۥ١������ʤ˴ޤ��/�ʤ� ����','�١������ʡ����ʲ��ʡ����ץ������ʤδط������򤹤��2��<br /><br />\r\n\r\n��1�ۤ��2�ۤ���Ȥۤ�Ʊ������Ǥ�����<br />\r\n\"�ۥ磻��\"�����ϡ�[°���ˤ�����������١������ʤ˴ޤ��]�ե饰��\"������\"�ˡ�<br />\r\n����\"�����\"�ϥե饰��\"�Ϥ�\"�Τ褦�˥��ץ����ˤ�äƺ��ߤ��Ƥ�����Ǥ���<br />\r\n\r\n��������۾��ʾ���<br />\r\n��[���ʲ���]��4000��<br />\r\n��[����°���ˤ�����]���Ϥ�<br /><br />\r\n\r\n���������\"�ۥ磻��\"<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]��������<br />\r\n��[���ץ�������]��500��<br /><br />\r\n\r\n���������\"�����\"<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[���ץ�������]��1000��<br /><br />\r\n\r\nNOTE:<br />\r\nɽ�����ʡʾ���̾�β���ɽ������Ƥ�����ʡˤˤϡ��̾�١������ʤκǾ��ͤ�ɽ������ޤ������������ۥ磻�Ȥ�[°���ˤ�����������١������ʤ˴ޤ��]�ե饰��\"������\"�ʤΤ��оݤ���Ϥ���ơ�����󥸤Υ١������ʤ�ɽ������ޤ���','',9);
INSERT INTO products_description VALUES (211,1,'BASEPRICE2','','',0);
INSERT INTO products_description VALUES (211,2,'��2�ۥ١������ʤ˥��ץ������ʤ�ޤ�ʤ�','�١������ʡ����ʲ��ʡ����ץ������ʤδط������򤹤��2��<br /><br />\r\n\r\n����ľ���Ρ�1�ۤȤۤ�Ʊ������Ǥ�����<br />\r\n������Ȥ�[����°���ˤ�����]�ե饰��\"������\"�ʤΤ�<br />\r\n\"�ۥ磻��\"\"�����\"���ץ����Ȥ��[�١�������]�ˤ�[���ץ��������]��ޤߤޤ���<br />\r\n\r\n��������۾��ʾ���<br />\r\n��[���ʲ���]��4000��<br />\r\n��[����°���ˤ�����]���Ϥ�<br /><br />\r\n\r\n���������\"�ۥ磻��\"<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[���ץ�������]��500��<br /><br />\r\n\r\n���������\"�����\"<br />\r\n��[°���ˤ�����������١������ʤ˴ޤ��]���Ϥ�<br />\r\n��[���ץ�������]��1000��<br /><br />\r\n\r\nNOTE:<br />\r\nɽ�����ʡʾ���̾�β���ɽ������Ƥ�����ʡˤ�١������ʡʥ��ץ���󤴤ȿ��̳���ʤɤδ��ܳۡˤ˴ޤޤ�ʤ������ǡ����Υ��ץ������������ɲ�����Ȥ��Ƥϵ�ǽ���ޤ���','',3);
INSERT INTO products_description VALUES (212,1,'Russ Tippins Band - The Hunter','The Product Music Type is specially designed for music media. This can offer a lot more flexibility than the Product','',0);
INSERT INTO products_description VALUES (212,2,'Russ Tippins Band - The Hunter','��Product - Music�פϲ��ڡʡ������˾��ʤ˺�Ŭ���������ʥ����פǤ���<br /><br />\r\n\r\n�������ʥ����פǾ�����Ͽ����ȡ�<br />\r\n�������ƥ�����<br />\r\n���쥳���ɲ��<br />\r\n�����ڥ�����<br />\r\n�ʤɤξ���򰷤����Ȥ��Ǥ���<br /><br />\r\n\r\n����ˡ��ߥ塼���å�����åס�mp3�ե��������ˤγ�����Ƥ���ǽ�ʤɡ����̤����ʥ����פ����������٤�Ǥ��ޤ���','',9);
INSERT INTO products_description VALUES (213,1,'Help!','','',0);
INSERT INTO products_description VALUES (213,2,'Help!','���ξ��ʤ��������Ʊ������Product - Music�׾��ʥ����פβ��ھ��ʤǤ���<br />\r\n�����㤬��CD��DVD�Τ褦�ʼ��ΤΤ��뾦�ʤ������оݤȤ��Ƥ����Τ��Ф������ξ��ʤϼ��ΤΤ��뾦�ʡ�CD�ˤȥ�������ɾ��ʡ�mp3�ե�����ˤΤɤ��餫����ǹ����Ǥ�������Ǥ���<br />\r\nmp3�ե��������������ϡ�������ޥ��ڡ��������������ɤǤ���褦�ˤʤ�ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[����������뾦��l]���������������轻������Ϥ�ɬ��<br />\r\n��[�������̵��]�����̾��ʤȥ�������ɾ��ʤΥ���ӥ͡������������轻�����Ͽ��ɬ�פǤ���<br />\r\n��[����]��0��Kg�ˡ�����������ɾ��ʤξ�礬���뤿�ᥪ�ץ����°��¦�����ꤹ��<br /><br />\r\n\r\n�ڥ��ץ����°��������ۥ�ǥ���������<br />\r\n�����ץ����°����\"CD\"���ץ������Ф�<br />\r\n��[���ץ�������]��1��Kg��<br /><br />\r\n\r\n�����ץ����°����\"mp3�ʥ�������ɡ�\"���Ф�<br />\r\n��[���ץ�������]��0��Kg��<br />\r\n��[��������ɾ��ʥե�����̾]��help.mp3<br />\r\n��[ͭ������(��)]��7 ������<br />\r\n��[�����������ɿ�]: 5 �ʲ��<br /><br />\r\n\r\nNOTE1��<br />\r\n���ļԤ�������ʸ��[��ʸ�������ơ�����]��\"��λ\"�ˤ���ȡ�<br />\r\n��ʸ�ԤΥޥ��ڡ����ˤ����ƥ�������ɤǤ�����֤ˤʤ�ޤ���<br /><br />\r\n\r\nNOTE2��<br />\r\n��������ɥե�����ϡ����餫����<br />\r\n���ʥ���å����֥ǥ��쥯�ȥ��/download<br />\r\n�۲���FTP���åץ��ɤ��Ƥ����ޤ���<br /><br />\r\n\r\n\r\nNOTE3��<br />\r\n��Product - Music�פϲ��ڡʡ������˾��ʤ˺�Ŭ���������ʥ����פǤ���<br /><br />\r\n\r\n�������ʥ����פǾ�����Ͽ����ȡ�<br />\r\n�������ƥ�����<br />\r\n���쥳���ɲ��<br />\r\n�����ڥ�����<br />\r\n�ʤɤξ���򰷤����Ȥ��Ǥ���<br /><br />\r\n\r\n����ˡ��ߥ塼���å�����åס�mp3�ե��������ˤγ�����Ƥ���ǽ�ʤɡ����̤����ʥ����פ����������٤�Ǥ��ޤ���','',21);
INSERT INTO products_description VALUES (214,1,'DOC_GENERAL','Document General Type is used for Products that are actually Documents. These cannot be added to the cart but can be configured for the Document Sidebox. If your Document Sidebox is not showing, go to the Layout Controller and turn it on for your template.','',0);
INSERT INTO products_description VALUES (214,2,'���̥ɥ�����ȡ������ʡˤ���','��������ʥ����פ�[Document - General]����Ͽ�����ɥ�����Ȥǡ����ɤ�Ǥ��뤳���[�ɥ�����Ȥ�����]���Τ�ΤǤ���<br /><br />\r\n\r\n[Document - General]�˻��ꤵ�줿�ɥ�����Ȥϡ������Ȥ�������ޤ��󡣤ޤ������侦�ʤǤϤʤ��Τǡ�[\r\n���ʷ���]�⤢��ޤ���<br /><br />\r\n\r\n���Τ����ˡ��ֽ���פ�̾�դ���줿���̤ʥ����ɥܥå����˷Ǻܤ���ޤ������ξ��ʥ����פϡ�ʸ���̤�ɥ�����ȤȤ��ơ����Υ����ȤΥ���饤��ޥ˥奢���FAQ�Ȥ��ƻȤ��ʤɤ����Ӥ��ͤ����ޤ���<br /><br />\r\n\r\n����������\r\n\r\n<p>WWW(World Wide Web)��, ��������CERN(������γ��ʪ�������)�ˤ�����, ����θ���Դ֤θ������̤ζ�ͭ��ٱ礹�뤳�Ȥ���Ū�Ȥ���, 1990ǯ��ʬ��������ϥ��ѥƥ����ȥ����ƥ�ι��ۤΤ���Υץ������Ȥˤ�ä���Ω���줿�����Υϥ��ѥƥ����ȤǤ�, �ƥ��������ϥƥ����Ȥν����ʬ�䤷�ƥΡ��ɤȤ���ñ�̤�ʬ��, �Ρ�����˥���(ü��)���������, ���󥫴֤δط��Ȥ��ƥϥ��ѥ�󥯤��ꤷ�Ƥ��롣</p> \r\n\r\n<p>WWW�Υץ������Ȥ��Ǥ��������, CERN�ˤ���������ޥ����Υ饤��⡼�ɥ֥饦�����Ѱդ��줿�����Ǥ��ä���, 1991ǯ�ˤ�CERN�ʳ��Ǥ�WWW�����Ѥ���ǽ�ˤʤ�, X������ɥ������ƥ��ѤΥ֥饦������ȯ���줿��1993ǯ�ˤʤ��, ����Υ���ؤ�MOSAIC��ȯɽ�����ʸ����β���ɽ������ǽ�ˤʤ�, Windows�Ǥ˲ä���MAC�Ǥ�ȯɽ���줿��1994ǯ��Netscape Navigator�Υ�꡼����, WWW����ȯŪ��ڤΤ��ä�����Ĥ���, ���줬����˥��󥿥ͥå����ѼԤ����䤹���Ȥˤʤä��� </p>\r\n\r\n<p>CERN�ǤΥϥ��ѥƥ����Ȥι�¤���ҵڤӤ��θ򴹼�³����, ��ȯ����ϸ������λ��ͤˤȤɤޤäƤ�����, WWW����ڤȶ��ˤ�����ɸ�ಽ�ؤΰռ�����ޤ�, IETF(Internet Engineering Task Force)�ˤ�����, HTML�ڤ�HTTP(Hypertext Transfer Protocol)�κ�ȥ��롼�פ���Ω������ܳ�Ū��ɸ�ಽ��Ȥ����Ϥ��줿��HTML 2.0��, IETF RFC1866[1]�Ȥ��Ƹ�ɽ����, ���θ�, HTML��ɸ�ಽ��Ȥ�, W3C(World Wide Web Consortium)�˰ܤ��줿�� </p>\r\n\r\n<p>W3C�Ǥν����HTML���Ǻ�Ȥ�, �֥饦���᡼�����ȼ��γ�ĥ��ۼ����ƥ�����������ޤ�¿���ε�ǽ������������ˤǹԤ�줿�����������θ�, HTML�������ʸ��������¤���Ҥθ���˰����ᤷ��, �����������ˤĤ��Ƥ��̤θ��ͼ����б�����Ȥ������ˤ���ή�Ȥʤ�, HTML 3.2[2], HTML 4.0[3]�ؤȲ��Ǥ���Ƥ�����</p>','',9);
INSERT INTO products_description VALUES (215,1,'Document - Product type','','',0);
INSERT INTO products_description VALUES (215,2,'���ʥɥ�����ȡ����侦�ʡˤ���','����Ͼ��ʤȤ������䤹��ɥ�����Ȥǡ����ʥ����פ�[Document - Product]�Ǥ���<br /><br />\r\n\r\n���ʥ����פ�[Document - General]���ä�ľ������Ȱۤʤꡢ�����ˤϥ����������ܥ���ɽ������Ƥ��ޤ���<br />\r\n\r\n���ʥɥ�����ȡ����侦�ʡ˥����פǤϡ����ʾ�������Ϲ��ܤʤɤϰ��̾��ʤȤ���ꤢ��ޤ��󡣤��������ֽ���פȤ������̤ʥ����ɥܥå�����ɽ�������ʤɡ��ɥ�����ȤȤ������̰�������ޤ���','',4);
INSERT INTO products_description VALUES (225,1,'Single Download','','',0);
INSERT INTO products_description VALUES (225,2,'��������ɾ������1�ե������','����ϥե����뤬1�Ĥ����ξ��Υ����������Ǥ���<br />\r\n���ץ�����������ե���������Υե�����1�����������ɲ�ǽ�Ǥ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[����������뾦��l]���Ϥ��������轻��򥹥��å�<br />\r\n��[�������̵��]�����ξ��ʤ��������Ʊ������Product - Music�׾��ʥ����פβ��ھ��ʤǤ���<br />\r\n�����㤬��CD��DVD�Τ褦�ʼ��ΤΤ��뾦�ʤ������оݤȤ��Ƥ����Τ��Ф������ξ��ʤϼ��ΤΤ��뾦�ʡ�CD�ˤȥ�������ɾ��ʡ�mp3�ե�����ˤΤɤ��餫����ǹ����Ǥ�������Ǥ���<br />\r\nmp3�ե��������������ϡ�������ޥ��ڡ��������������ɤǤ���褦�ˤʤ�ޤ���\r\n\r\n��������۾��ʾ���<br />\r\n��[����������뾦��l]���Ϥ��������轻��򥹥��å�<br />\r\n��[�������̵��]�����̾��ʤȥ�������ɾ��ʤΥ���ӥ͡������������轻�����Ͽ��ɬ�פǤ���<br /><br />\r\n\r\n�ڥ��ץ����°��������ۥ��ץ����̾��\"�ե��������\"<br />\r\n��[��������ɾ��ʥե�����̾]��\r\n��-\"mp3�ʥ�������ɾ��ʡ�\" ���ץ����ˤΤߡ�ms_word_sample.zip<br />\r\n��-\"CD��\"���ץ���󡧡����ꤷ�ʤ���<br />\r\n��[ͭ������(��)]��7 ������<br />\r\n��[�����������ɿ�]: 5 �ʲ��<br /><br />\r\n\r\nNOTE1��<br />\r\n���ļԤ�������ʸ��[��ʸ�������ơ�����]��\"��λ\"�ˤ���ȡ�<br />\r\n��ʸ�ԤΥޥ��ڡ����ˤ����ƥ�������ɤǤ�����֤ˤʤ�ޤ���<br /><br />\r\n\r\nNOTE2��<br />\r\n��������ɥե�����ϡ����餫����<br />\r\n���ʥ���å����֥ǥ��쥯�ȥ��/download\r\n�۲���FTP���åץ��ɤ��Ƥ����ޤ���<br /><br />\r\n\r\n\r\nNOTE3��<br />\r\n��Product - Music�פϲ��ڡʡ������˾��ʤ˺�Ŭ���������ʥ����פǤ���<br /><br />\r\n\r\n�������ʥ����פǾ�����Ͽ����ȡ�<br />\r\n�������ƥ�����<br />\r\n���쥳���ɲ��<br />\r\n�����ڥ�����<br />\r\n�ʤɤξ���򰷤����Ȥ��Ǥ���<br /><br />\r\n\r\n����ˡ��ߥ塼���å�����åס�mp3�ե��������ˤγ�����Ƥ���ǽ�ʤɡ����̤����ʥ����פ����������٤�Ǥ��ޤ���<br /><br />\r\n\r\n�ڥ��ץ����°��������ۥ��ץ����̾��\"�ޥ˥奢��\"<br />\r\n��[��������ɾ��ʥե�����̾]��<br />\r\n��-\"PDF�ե�����\"���ץ���� pdf_sample.zip<br />\r\n��-\"Word�ե�����\" ���ץ����ms_word_sample.zip<br />\r\n��[ͭ������(��)]��7 ������<br />\r\n��[�����������ɿ�]: 5 �ʲ��<br /><br />\r\n\r\nNOTE1��<br />\r\n���ļԤ�������ʸ��[��ʸ�������ơ�����]��\"��λ\"�ˤ���ȡ�<br />\r\n��ʸ�ԤΥޥ��ڡ����ˤ����ƥ�������ɤǤ�����֤ˤʤ�ޤ���<br /><br />\r\n\r\nNOTE2��<br />\r\n��������ɥե�����ϡ����餫����<br />\r\n���ʥ���å����֥ǥ��쥯�ȥ��/download<br />\r\n�۲���FTP���åץ��ɤ��Ƥ����ޤ���<br />','',4);
INSERT INTO products_description VALUES (217,1,'Sample of Product Free Shipping Type','<p>Product Free Shipping can be setup to highlight the Free Shipping aspect of the product. <br /><br />These pages include a Free Shipping Image on them. <br /><br />You can define the ALWAYS_FREE_SHIPPING_ICON in the language file. This can be Text, Image, Text/Image Combo or nothing. <br /><br />The weight does not matter on Always Free Shipping if you set Always Free Shipping to Yes. <br /><br />Be sure to have the Free Shipping Module Turned on! Otherwise, if this is the only product in the cart, it will not be able to be shipped. <br /><br />Notice that this is defined with a weight of 5lbs. But because of the Always Free Shipping being set to Y there will be no shipping charges for this product. <br /><br />You do not have to use the Product Free Shipping product type just to use Always Free Shipping. But the reason you may want to do this is so that the layout of the Product Free Shipping product info page can be layout specifically for the Free Shipping aspect of the product. <br /><br />This includes a READONLY attribute for Option Name: Shipping and Option Value: Free Shipping Included. READONLY attributes do not show on the options for the order.</p>','',0);
INSERT INTO products_description VALUES (217,2,'����̵�������׾��ʤ���','�����Ǥϡ����ʥ����פ��뤤�ϥ��ƥ����[Product - Free Shipping]�����פˤ������Τդ�ޤ����������ޤ���<br /><br />\r\n\r\n���ξ��ʤν�°���륫�ƥ���ϡ�[Product - Free Shipping]���ʥ����סʰʲ�������̵�������ס˸�������ꤵ��Ƥ��ޤ������Υ��ƥ����۲��ǿ��������ʤ���Ͽ����ȡ�����̵�������פξ��ʤȤ�����Ͽ����ޤ���<br /><br />\r\n\r\n����̵�������פξ��ʤϡ���ǽŪ�ˤϰ��̤ξ��ʤȤ����ޤ��󤬡����餫����[�������̵��]�ե饰��\"�Ϥ�\"�����ꤵ��Ƥ��ޤ���<br /><br /><br />\r\n\r\n����̵���ξ��ʤˤϡ�����̵�����ץޡ������Ĥ��ƥϥ��饤��ɽ������ޤ���<br /><br />\r\n\r\n[�������̵��]�ե饰��\"�Ϥ�\"�ʤ顢���ʽ��̤˴ط��ʤ����������̵���Ȥʤ�ޤ���<br /><br />\r\n�ʤ��������⥸�塼��Ρ�������̵���ץ⥸�塼���ͭ���ˤ��Ƥ������ȡ�����ʤ��ȡ������Ȥ����줿����̵�����ʤ��������Ǥ��ʤ��ʤäƤ��ޤ��ޤ���<br /><br />\r\n\r\nNOTE:<br />\r\n����̵���ˤʤ뤫�ɤ�����Ƚ�����5lbs����2Kg���ˤǤ���������[�������̵��]�ե饰��\"�Ϥ�\"�ˤʤäƤ���ȡ����Τ������ͤˤ�����餺������̵���Ǥ���<br /><br />\r\n\r\nNOTE��<br />\r\nLanguage file��Ρ�[ALWAYS_FREE_SHIPPING_ICON] �ѿ����ѹ����뤳�Ȥǡ�����̵���λ��Τդ�ޤ��ʥƥ����Ȥ�ɽ�����롿���᡼��������ɽ�����ƥ����ȤȲ������Ȥ߹�碌��ɽ�����ʤˤ�ɽ�����ʤ��ˤ�����Ǥ��ޤ���<br /><br />','',7);
INSERT INTO products_description VALUES (218,1,'Free Ship & Payment Virtual','Product Price is set to 0  <br /><br />    Payment weight is set to 2 ...  <br /><br />    Virtual is ON ... this will skip shipping address  <br /><br />','',0);
INSERT INTO products_description VALUES (218,2,'����3��̵�����ʡ�����̵�����������轻����������','���ʲ��ʤ�0�ߡ�̵�����ʡˤǡ����ʽ��̤�2Kg�ξ��ʤǤ������С�����뾦�ʰ��������ꤷ�����ᡢ����̵���Ǥ��Ϥ���ν������Ϥ򥹥��åפ��ޤ���<br />����ϰ츫�Լ���������˸����ޤ������㤨�Ф��Ϥ����桼����Ͽ����˸��ꤷ������¾�ν���ϻ���Ǥ��ʤ��˾��ʤɤ����Ѥ��ͤ����ޤ���<br />�ʤ���Ʊ����������¾�ξ��ʤ��٤Ƥ��ǥ⾦�ʤǤ���Ȥ�������������ȯ�����ޤ���<br /><br /><br /><br />���������<br /><br />��̵�����ʡ� �Ϥ�<br /><br />�����ʲ��ʡ� 0��<br /><br />�����С�����뾦�ʡ����Ϥ��������轻��򥹥��å�<br /><br />���������̵���������������̾�������Ŭ��<br />','',1);
INSERT INTO products_description VALUES (224,1,'FREESHIP3','','',0);
INSERT INTO products_description VALUES (224,2,'��3������̵���ʽ��̡ᣰKg�ξ��ʡ�','��3������̵���ʽ��̤�0Kg�ξ��ʡ�\r\n����ޤǤ�2��Ǥϡ�[�������̵��]�ե饰��\"�Ϥ�\"�����ꤹ�뤳�Ȥˤ��������̵�����ʤȤ��Ƽ�갷������򸫤Ƥ��ޤ�����<br /><br />\r\n������Ф��ơ������ǤϽ��̤�0�Ǥ����̤Ȥ���������̵���ˤʤ�����󼨤��ޤ���<br /><br />\r\n\r\n�����Ǥξ��ʽ��̤�0�Ǥ����ޤ����ץ���󥫥顼\"�ۥ磻��\"���ɲý��̤�0�Ǥ��Τǡ��ۥ磻�ȹ�������������̵���ˤʤ�ޤ���\r\n�����������������¾������ͭ�����ʤ����äƤ��ʤ����ȡ�\r\n\r\n����\"�����\"�Υ��ץ������̤�20Kg����ޤ������äơ�������������������̵���ˤʤ�ޤ���\r\n\r\n��������۾��ʾ���\r\n��[�������̵��]�����������̾�������Ŭ��\r\n��[���ʽ���]��0��Kg��\r\n\r\n��������۾��ʥ��ץ����°��\r\n��\"�ۥ磻��\"��[����]��0��Kg��\r\n��\"�����\"��[����]��20��Kg��','',6);
INSERT INTO products_description VALUES (226,1,'Multiple Download','<p>This product is set up to have multiple downloads.</p><p>The Product Price is $49.99</p><p>The attributes are setup with two Option Names, one for each download to allow for two downloads at the same time.</p><p>The first Download is listed under:</p><p>Option Name: Version<br />Option Value: Download Windows - English<br />Option Value: Download Windows - Spanish<br />Option Value: DownloadMAC - English<br /></p><p>The second Download is listed under:</p><p>Option Name: Documentation<br />Option Value: PDF - English<br />Option Value:MS Word- English</p>','',0);
INSERT INTO products_description VALUES (226,2,'��������ɾ������ʣ���ե������','�����ʣ���ե��������������ɾ��ʤ���Ǥ���<br /><br />\r\n�����Ǥϥ��ե����ΤȤ��Υޥ˥奢��򥻥åȤǥ�����������䤹������Ǥ������Τȥޥ˥奢�뤽�줾��Υե��������������ǡʾ��ʥ��ץ�������ʸ����ȡ�2�ե����뤬Ʊ���˥�������ɲ�ǽ�ˤʤ�ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[����������뾦��l]���Ϥ��������轻��򥹥��å�<br />\r\n��[�������̵��]�����ξ��ʤ��������Ʊ������Product - Music�׾��ʥ����פβ��ھ��ʤǤ���<br />\r\n�����㤬��CD��DVD�Τ褦�ʼ��ΤΤ��뾦�ʤ������оݤȤ��Ƥ����Τ��Ф������ξ��ʤϼ��ΤΤ��뾦�ʡ�CD�ˤȥ�������ɾ��ʡ�mp3�ե�����ˤΤɤ��餫����ǹ����Ǥ�������Ǥ���<br />\r\nmp3�ե��������������ϡ�������ޥ��ڡ��������������ɤǤ���褦�ˤʤ�ޤ���\r\n\r\n��������۾��ʾ���<br />\r\n��[����������뾦��l]���Ϥ��������轻��򥹥��å�<br />\r\n��[�������̵��]�����̾��ʤȥ�������ɾ��ʤΥ���ӥ͡������������轻�����Ͽ��ɬ�פǤ���<br /><br />\r\n\r\n�ڥ��ץ����°��������ۥ��ץ����̾��\"�ե��������\"<br />\r\n��[��������ɾ��ʥե�����̾]��\r\n��-\"mp3�ʥ�������ɾ��ʡ�\" ���ץ����ˤΤߡ�ms_word_sample.zip<br />\r\n��-\"CD��\"���ץ���󡧡����ꤷ�ʤ���<br />\r\n��[ͭ������(��)]��7 ������<br />\r\n��[�����������ɿ�]: 5 �ʲ��<br /><br />\r\n\r\nNOTE1��<br />\r\n���ļԤ�������ʸ��[��ʸ�������ơ�����]��\"��λ\"�ˤ���ȡ�<br />\r\n��ʸ�ԤΥޥ��ڡ����ˤ����ƥ�������ɤǤ�����֤ˤʤ�ޤ���<br /><br />\r\n\r\nNOTE2��<br />\r\n��������ɥե�����ϡ����餫����<br />\r\n���ʥ���å����֥ǥ��쥯�ȥ��/download\r\n�۲���FTP���åץ��ɤ��Ƥ����ޤ���<br /><br />\r\n\r\n\r\nNOTE3��<br />\r\n��Product - Music�פϲ��ڡʡ������˾��ʤ˺�Ŭ���������ʥ����פǤ���<br /><br />\r\n\r\n�������ʥ����פǾ�����Ͽ����ȡ�<br />\r\n�������ƥ�����<br />\r\n���쥳���ɲ��<br />\r\n�����ڥ�����<br />\r\n�ʤɤξ���򰷤����Ȥ��Ǥ���<br /><br />\r\n\r\n����ˡ��ߥ塼���å�����åס�mp3�ե��������ˤγ�����Ƥ���ǽ�ʤɡ����̤����ʥ����פ����������٤�Ǥ��ޤ���<br /><br />\r\n\r\n�ڥ��ץ����°���������<br />\r\n�����ץ����̾��\"���ե�����\"�˴ؤ�<br />\r\n��[��������ɾ��ʥե�����̾]��<br />\r\n��-\"Windows(en)��\": win-en.zip<br />\r\n��-\"Windows(jp)��\": win-jp.zip<br />\r\n��-\"Mac(jp)��\"��mac-jp.zip<br />\r\n��[ͭ������(��)]��7 ������<br />\r\n��[�����������ɿ�]: 5 �ʲ��<br /><br />\r\n\r\n�����ץ����̾��\"�ޥ˥奢��\"�˴ؤ���<br />\r\n��[��������ɾ��ʥե�����̾]��<br />\r\n��-\"PDF�ե�����\"���ץ���� pdf_sample.zip<br />\r\n��-\"Word�ե�����\" ���ץ����ms_word_sample.zip<br />\r\n��[ͭ������(��)]��7 ������<br />\r\n��[�����������ɿ�]: 5 �ʲ��<br /><br />\r\n\r\n\r\nNOTE1��<br />\r\n���ļԤ�������ʸ��[��ʸ�������ơ�����]��\"��λ\"�ˤ���ȡ�<br />\r\n��ʸ�ԤΥޥ��ڡ����ˤ����ƥ�������ɤǤ�����֤ˤʤ�ޤ���<br /><br />\r\n\r\nNOTE2��<br />\r\n��������ɥե�����ϡ����餫����<br />\r\n���ʥ���å����֥ǥ��쥯�ȥ��/download<br />\r\n�۲���FTP���åץ��ɤ��Ƥ����ޤ���<br />','',3);
INSERT INTO products_description VALUES (229,1,'CD and download file(mp3)','','',0);
INSERT INTO products_description VALUES (229,2,'��������ɾ��ʤȥꥢ�뾦�ʤκ��ߡ�CD��mp3�ե������','�����ޤǤ�2�㤬��������ɾ��ʤΤߤǹ�������Ƥ����Τ��Ф������ξ��ʤϼ��ΤΤ��뾦�ʡ�CD�ˤȥ�������ɾ��ʡ�mp3�ե�����ˤ����ߤ���������Ǥ����桼���Ϲ������˹��ߤ����Τ�����ǥ���������ޤ���<br />\r\nmp3�ե��������������ϡ�������ޥ��ڡ��������������ɤǤ���褦�ˤʤ�ޤ���<br /><br />\r\n\r\n��������۾��ʾ���<br />\r\n��[����������뾦��l]���������������轻������Ϥ�ɬ��<br />\r\n��[�������̵��]�����̾��ʤȥ�������ɾ��ʤΥ���ӥ͡������������轻�����Ͽ��ɬ�פǤ���<br />\r\n��[����]��0��Kg�ˡ�����������ɾ��ʤξ�礬���뤿�ᥪ�ץ����°��¦�����ꤹ��<br /><br />\r\n\r\n�ڥ��ץ����°��������ۥ�ǥ���������<br />\r\n�����ץ����°����\"CD\"���ץ������Ф�<br />\r\n��[���ץ�������]��1��Kg��<br /><br />\r\n\r\n�����ץ����°����\"mp3�ʥ�������ɡ�\"���Ф�<br />\r\n��[���ץ�������]��0��Kg��<br />\r\n��[��������ɾ��ʥե�����̾]��help.mp3<br />\r\n��[ͭ������(��)]��7 ������<br />\r\n��[�����������ɿ�]: 5 �ʲ��<br /><br />\r\n\r\nNOTE1��<br />\r\n���ļԤ�������ʸ��[��ʸ�������ơ�����]��\"��λ\"�ˤ���ȡ�<br />\r\n��ʸ�ԤΥޥ��ڡ����ˤ����ƥ�������ɤǤ�����֤ˤʤ�ޤ���<br /><br />\r\n\r\nNOTE2��<br />\r\n��������ɥե�����ϡ����餫����<br />\r\n���ʥ���å����֥ǥ��쥯�ȥ��/download\r\n�۲���FTP���åץ��ɤ��Ƥ����ޤ���<br /><br />\r\n\r\n\r\nNOTE3��<br />\r\n���ξ��ʤξ��ʥ����פϡ�Product - Music�פǤ�����Product - Music�ץ����פϲ��ڡʡ������˾��ʤ˺�Ŭ���������ʥ����פǤ���<br /><br />\r\n\r\n�������ʥ����פǾ�����Ͽ����ȡ�<br />\r\n�������ƥ�����<br />\r\n���쥳���ɲ��<br />\r\n�����ڥ�����<br />\r\n�ʤɤξ���򰷤����Ȥ��Ǥ���<br /><br />\r\n\r\n����ˡ��ߥ塼���å�����åס�mp3�ե��������ˤγ�����Ƥ���ǽ�ʤɡ����̤����ʥ����פ����������٤�Ǥ��ޤ���','',2);
INSERT INTO products_description VALUES (156,1,'SALE10%OFF-1','','',0);
INSERT INTO products_description VALUES (157,1,'SALE10%OFF-2','','',0);
INSERT INTO products_description VALUES (158,1,'SALE10%OFF-3','','',0);
INSERT INTO products_description VALUES (159,1,'SALE500yenOFF-1','','',0);
INSERT INTO products_description VALUES (160,1,'SALE500yenOFF-2','','',0);
INSERT INTO products_description VALUES (161,1,'SALE500yenOFF-3','','',0);
INSERT INTO products_description VALUES (162,1,'SALE set8000yen-1','','',0);
INSERT INTO products_description VALUES (163,1,'SALE set8000yen-2','','',0);
INSERT INTO products_description VALUES (164,1,'SALE set8000yen-3','','',0);
INSERT INTO products_description VALUES (165,1,'SPECIAL1-1','','',0);
INSERT INTO products_description VALUES (166,1,'SPECIAL2-1','','',0);
INSERT INTO products_description VALUES (167,1,'SPECIAL2-2','','',0);
INSERT INTO products_description VALUES (168,1,'SPECIAL2-3','','',0);
INSERT INTO products_description VALUES (169,1,'SPECIAL3','','',0);
INSERT INTO products_description VALUES (170,1,'SALE_ETC1','','',0);
INSERT INTO products_description VALUES (171,1,'SALE_ETC2','','',0);
INSERT INTO products_description VALUES (172,1,'NOSALE','','',0);
INSERT INTO products_description VALUES (173,1,'SALE_SPECIAL1-1','','',0);
INSERT INTO products_description VALUES (174,1,'SALE_SPECIAL1-2','','',0);
INSERT INTO products_description VALUES (175,1,'SALE_SPECIAL1-3','','',0);
INSERT INTO products_description VALUES (176,1,'SALE_SPECIAL2-1','','',0);
INSERT INTO products_description VALUES (177,1,'SALE_SPECIAL2-2','','',0);
INSERT INTO products_description VALUES (178,1,'SALE_SPECIAL2-3','','',0);
INSERT INTO products_description VALUES (179,1,'SALE_SPECIAL3-1','','',0);
INSERT INTO products_description VALUES (180,1,'SALE_SPECIAL3-2','','',0);
INSERT INTO products_description VALUES (181,1,'SALE_SPECIAL3-3','','',0);

#
# Dumping data for table `products_discount_quantity`
#

INSERT INTO products_discount_quantity VALUES (2,182,20,20.0000);
INSERT INTO products_discount_quantity VALUES (1,182,10,10.0000);
INSERT INTO products_discount_quantity VALUES (3,102,50,25.0000);
INSERT INTO products_discount_quantity VALUES (2,102,20,20.0000);
INSERT INTO products_discount_quantity VALUES (1,102,10,10.0000);
INSERT INTO products_discount_quantity VALUES (3,103,50,2000.0000);
INSERT INTO products_discount_quantity VALUES (2,103,20,1500.0000);
INSERT INTO products_discount_quantity VALUES (1,103,10,1000.0000);
INSERT INTO products_discount_quantity VALUES (3,104,50,8000.0000);
INSERT INTO products_discount_quantity VALUES (2,104,20,9000.0000);
INSERT INTO products_discount_quantity VALUES (1,104,10,9500.0000);
INSERT INTO products_discount_quantity VALUES (3,110,50,25.0000);
INSERT INTO products_discount_quantity VALUES (2,110,20,20.0000);
INSERT INTO products_discount_quantity VALUES (1,110,10,10.0000);
INSERT INTO products_discount_quantity VALUES (1,111,10,10.0000);
INSERT INTO products_discount_quantity VALUES (2,111,20,20.0000);
INSERT INTO products_discount_quantity VALUES (3,111,50,25.0000);
INSERT INTO products_discount_quantity VALUES (3,112,50,25.0000);
INSERT INTO products_discount_quantity VALUES (2,112,20,20.0000);
INSERT INTO products_discount_quantity VALUES (1,112,10,10.0000);
INSERT INTO products_discount_quantity VALUES (3,113,50,25.0000);
INSERT INTO products_discount_quantity VALUES (2,113,20,20.0000);
INSERT INTO products_discount_quantity VALUES (1,113,10,10.0000);
INSERT INTO products_discount_quantity VALUES (3,182,50,25.0000);

#
# Dumping data for table `products_options`
#

INSERT INTO products_options VALUES (1,1,'size',1,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (1,2,'������',1,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (2,1,'size for kids',2,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (2,2,'�������ʥ��å���',2,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (3,1,'color',100,2,32,'',32,0,0,0);
INSERT INTO products_options VALUES (3,2,'���顼',100,2,32,'���顼�����򤷤Ƥ�������',32,5,5,0);
INSERT INTO products_options VALUES (4,1,'Line1',500,1,80,'Enter your text up to 80 characters, punctuation and spaces.',60,5,0,1);
INSERT INTO products_options VALUES (4,2,'̾�����1��',500,1,80,'1���ܤ������ʸ�������Ϥ��Ƥ�������������40ʸ���ޤǡˡ�',60,5,0,1);
INSERT INTO products_options VALUES (5,1,'Line2',510,1,80,'Enter your text up to 80 characters, punctuation and spaces.',60,5,0,1);
INSERT INTO products_options VALUES (5,2,'̾�����2��',510,1,80,'2���ܤ������ʸ�������Ϥ��Ƥ�������������40ʸ���ޤǡˡ�',60,5,0,1);
INSERT INTO products_options VALUES (6,1,'How to care, materials',600,5,32,'',32,0,0,0);
INSERT INTO products_options VALUES (6,2,'�Ǻ�Ȥ���������ˡ',600,5,32,'',32,5,0,0);
INSERT INTO products_options VALUES (7,1,'Gift',700,3,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (7,2,'���եȥ��ץ����',700,3,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (8,1,'Size(for chckbox)',800,3,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (8,2,'����������͡����å���',800,3,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (9,1,'',0,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (9,2,'����ñ��',900,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (10,1,'',0,2,32,'',32,0,0,0);
INSERT INTO products_options VALUES (10,2,'����ñ��(radio)',1000,2,32,'',32,0,0,0);
INSERT INTO products_options VALUES (11,1,'wallpaper-size',2000,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (11,2,'�ɻ極����',2000,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (12,1,'print',2100,2,32,'',32,0,0,0);
INSERT INTO products_options VALUES (12,2,'���ꥸ�ʥ�ץ���',2100,2,32,'',32,0,0,0);
INSERT INTO products_options VALUES (13,1,'Package',2200,2,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (13,2,'�ѥå�����',2200,2,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (14,1,'guarantee',2300,2,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (14,2,'�ݾڥ����ӥ�',2300,2,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (15,1,'File Type(1)',3000,0,32,'',32,0,0,0);
INSERT INTO products_options VALUES (15,2,'�ޥ˥奢��',3000,0,32,'',32,0,0,0);
INSERT INTO products_options VALUES (16,1,'File Type(2)',3100,0,32,'',32,0,0,0);
INSERT INTO products_options VALUES (16,2,'���ե�����',3100,0,32,'',32,0,0,0);
INSERT INTO products_options VALUES (17,1,'Media Type',4000,0,32,'',32,0,0,0);
INSERT INTO products_options VALUES (17,2,'��ǥ���������',4000,0,32,'',32,0,0,0);
INSERT INTO products_options VALUES (18,1,'Attach file',5000,4,32,'',32,0,0,0);
INSERT INTO products_options VALUES (18,2,'�����ǡ���ź��',5000,4,32,'',32,0,0,0);
INSERT INTO products_options VALUES (19,1,'test',0,0,32,NULL,32,0,0,0);
INSERT INTO products_options VALUES (19,2,'�ƥ���',0,0,32,NULL,32,0,0,0);

#
# Dumping data for table `products_options_values`
#

INSERT INTO products_options_values VALUES (1,1,'Large',30);
INSERT INTO products_options_values VALUES (1,2,'�̥�����',30);
INSERT INTO products_options_values VALUES (2,1,'Midium',20);
INSERT INTO products_options_values VALUES (2,2,'�ͥ�����',20);
INSERT INTO products_options_values VALUES (3,1,'Small',10);
INSERT INTO products_options_values VALUES (3,2,'�ӥ�����',10);
INSERT INTO products_options_values VALUES (4,1,'red',110);
INSERT INTO products_options_values VALUES (4,2,'��å�',110);
INSERT INTO products_options_values VALUES (5,1,'yellow',120);
INSERT INTO products_options_values VALUES (5,2,'������',120);
INSERT INTO products_options_values VALUES (15,1,'COTTON 100��',600);
INSERT INTO products_options_values VALUES (7,1,'blue',130);
INSERT INTO products_options_values VALUES (7,2,'�֥롼',130);
INSERT INTO products_options_values VALUES (8,1,'blank',140);
INSERT INTO products_options_values VALUES (8,2,'�֥�å�',140);
INSERT INTO products_options_values VALUES (9,1,'',210);
INSERT INTO products_options_values VALUES (9,2,'110cm',210);
INSERT INTO products_options_values VALUES (10,1,'',220);
INSERT INTO products_options_values VALUES (10,2,'120cm',220);
INSERT INTO products_options_values VALUES (11,1,'',230);
INSERT INTO products_options_values VALUES (11,2,'130cm',230);
INSERT INTO products_options_values VALUES (12,1,'140cm',240);
INSERT INTO products_options_values VALUES (12,2,'140cm',240);
INSERT INTO products_options_values VALUES (13,1,'150cm',250);
INSERT INTO products_options_values VALUES (13,2,'150cm',250);
INSERT INTO products_options_values VALUES (14,1,'white',100);
INSERT INTO products_options_values VALUES (14,2,'�ۥ磻��',100);
INSERT INTO products_options_values VALUES (15,2,'�� 100��',600);
INSERT INTO products_options_values VALUES (16,1,'',610);
INSERT INTO products_options_values VALUES (16,2,'��.1����',610);
INSERT INTO products_options_values VALUES (17,1,'',620);
INSERT INTO products_options_values VALUES (17,2,'�������ʼ��ή�ˤޤ��ϼ�����',620);
INSERT INTO products_options_values VALUES (18,1,'',630);
INSERT INTO products_options_values VALUES (18,2,'���������油�ʡ�160��ˤޤ�',630);
INSERT INTO products_options_values VALUES (19,1,'X-Large',40);
INSERT INTO products_options_values VALUES (19,2,'XL������',40);
INSERT INTO products_options_values VALUES (20,1,'Select one...',50);
INSERT INTO products_options_values VALUES (20,2,'�����򤯤�����������',50);
INSERT INTO products_options_values VALUES (21,1,'Wrapping',700);
INSERT INTO products_options_values VALUES (21,2,'���ե�����',700);
INSERT INTO products_options_values VALUES (22,1,'Message Card',710);
INSERT INTO products_options_values VALUES (22,2,'��å�����������',710);
INSERT INTO products_options_values VALUES (23,1,'Prezent Keyholder',720);
INSERT INTO products_options_values VALUES (23,2,'���ꥸ�ʥ륭���ۥ����',720);
INSERT INTO products_options_values VALUES (24,1,'S',800);
INSERT INTO products_options_values VALUES (24,2,'�ӥ�����',800);
INSERT INTO products_options_values VALUES (25,1,'M',810);
INSERT INTO products_options_values VALUES (25,2,'�ͥ�����',810);
INSERT INTO products_options_values VALUES (26,1,'L',820);
INSERT INTO products_options_values VALUES (26,2,'�̥�����',820);
INSERT INTO products_options_values VALUES (27,1,'110cm',830);
INSERT INTO products_options_values VALUES (27,2,'110cm',830);
INSERT INTO products_options_values VALUES (28,1,'120cm',840);
INSERT INTO products_options_values VALUES (28,2,'120cm',840);
INSERT INTO products_options_values VALUES (29,1,'130cm',850);
INSERT INTO products_options_values VALUES (29,2,'130cm',850);
INSERT INTO products_options_values VALUES (30,1,'140cm',860);
INSERT INTO products_options_values VALUES (30,2,'140cm',860);
INSERT INTO products_options_values VALUES (31,1,'150cm',870);
INSERT INTO products_options_values VALUES (31,2,'150cm',870);
INSERT INTO products_options_values VALUES (32,1,'m',900);
INSERT INTO products_options_values VALUES (32,2,'�᡼�ȥ��m��',900);
INSERT INTO products_options_values VALUES (33,1,'cm',910);
INSERT INTO products_options_values VALUES (33,2,'������᡼�ȥ��cm��',910);
INSERT INTO products_options_values VALUES (34,1,'m',1000);
INSERT INTO products_options_values VALUES (34,2,'�᡼�ȥ��m��',1000);
INSERT INTO products_options_values VALUES (35,1,'cm',1010);
INSERT INTO products_options_values VALUES (35,2,'������᡼�ȥ��cm��',1010);
INSERT INTO products_options_values VALUES (36,1,'midium',2000);
INSERT INTO products_options_values VALUES (36,2,'��500px',2000);
INSERT INTO products_options_values VALUES (37,1,'Large',2010);
INSERT INTO products_options_values VALUES (37,2,'��1024px',2010);
INSERT INTO products_options_values VALUES (38,1,'orange',150);
INSERT INTO products_options_values VALUES (38,2,'�����',150);
INSERT INTO products_options_values VALUES (39,1,'print1',2100);
INSERT INTO products_options_values VALUES (39,2,'�ץ���1��',2100);
INSERT INTO products_options_values VALUES (40,1,'print2',2120);
INSERT INTO products_options_values VALUES (40,2,'�ץ���2��',2120);
INSERT INTO products_options_values VALUES (41,1,'',2130);
INSERT INTO products_options_values VALUES (41,2,'�ץ���3��',2130);
INSERT INTO products_options_values VALUES (42,1,'package5',2200);
INSERT INTO products_options_values VALUES (42,2,'����ѥå���5�������',2200);
INSERT INTO products_options_values VALUES (43,1,'package100',2210);
INSERT INTO products_options_values VALUES (43,2,'��̳�ѥѥå���100�������',2210);
INSERT INTO products_options_values VALUES (44,1,'none',2300);
INSERT INTO products_options_values VALUES (44,2,'�ʤ�',2300);
INSERT INTO products_options_values VALUES (45,1,'5 years',2310);
INSERT INTO products_options_values VALUES (45,2,'5ǯ�ݾڡ��ݾ����Ͼ��ʤ�5��ʬ��',2310);
INSERT INTO products_options_values VALUES (46,1,'20 years',2320);
INSERT INTO products_options_values VALUES (46,2,'20ǯ�ݾڡ��ݾ����Ͼ��ʤ�15��ʬ��',2320);
INSERT INTO products_options_values VALUES (47,2,'������ѡ�ɽ�����ʤ�20��˹���',2140);
INSERT INTO products_options_values VALUES (47,1,'initial cost 20%',2140);
INSERT INTO products_options_values VALUES (48,1,'white(NOT add to base price)',160);
INSERT INTO products_options_values VALUES (48,2,'�ۥ磻�ȡʥ١������ʤ˴ޤ�ʤ���',160);
INSERT INTO products_options_values VALUES (49,1,'white (add to base price)',170);
INSERT INTO products_options_values VALUES (49,2,'�ۥ磻�ȡʥ١������ʤ˴ޤ���',170);
INSERT INTO products_options_values VALUES (50,1,'orange',180);
INSERT INTO products_options_values VALUES (50,2,'����󥸡ʥ١������ʤ˴ޤ���',180);
INSERT INTO products_options_values VALUES (51,1,'orange(NOT add to base price)',190);
INSERT INTO products_options_values VALUES (51,2,'����󥸡ʥ١������ʤ˴ޤ�ʤ���',190);
INSERT INTO products_options_values VALUES (52,1,'Adobe PDF',3000);
INSERT INTO products_options_values VALUES (52,2,'PDF�ե�����',3000);
INSERT INTO products_options_values VALUES (53,1,'microsoft Word',3010);
INSERT INTO products_options_values VALUES (53,2,'Word�ե�����',3010);
INSERT INTO products_options_values VALUES (54,1,'Windows(en)',3100);
INSERT INTO products_options_values VALUES (54,2,'Windows(en)��',3100);
INSERT INTO products_options_values VALUES (55,1,'Windows(jp)',3110);
INSERT INTO products_options_values VALUES (55,2,'Windows(jp)��',3110);
INSERT INTO products_options_values VALUES (56,1,'Mac(jp)',3120);
INSERT INTO products_options_values VALUES (56,2,'Mac(jp)��',3120);
INSERT INTO products_options_values VALUES (57,1,'CD',4000);
INSERT INTO products_options_values VALUES (57,2,'CD',4000);
INSERT INTO products_options_values VALUES (58,1,'mp3',4010);
INSERT INTO products_options_values VALUES (58,2,'mp3�ʥ�������ɾ��ʡ�',4010);
INSERT INTO products_options_values VALUES (59,1,'gold',160);
INSERT INTO products_options_values VALUES (59,2,'�������',160);

#
# Dumping data for table `products_options_values_to_products_options`
#

INSERT INTO products_options_values_to_products_options VALUES (1,1,1);
INSERT INTO products_options_values_to_products_options VALUES (2,1,2);
INSERT INTO products_options_values_to_products_options VALUES (3,1,3);
INSERT INTO products_options_values_to_products_options VALUES (4,3,4);
INSERT INTO products_options_values_to_products_options VALUES (5,3,5);
INSERT INTO products_options_values_to_products_options VALUES (15,4,0);
INSERT INTO products_options_values_to_products_options VALUES (7,3,7);
INSERT INTO products_options_values_to_products_options VALUES (8,3,8);
INSERT INTO products_options_values_to_products_options VALUES (9,2,9);
INSERT INTO products_options_values_to_products_options VALUES (10,2,10);
INSERT INTO products_options_values_to_products_options VALUES (11,2,11);
INSERT INTO products_options_values_to_products_options VALUES (12,2,12);
INSERT INTO products_options_values_to_products_options VALUES (13,2,13);
INSERT INTO products_options_values_to_products_options VALUES (14,3,14);
INSERT INTO products_options_values_to_products_options VALUES (16,5,0);
INSERT INTO products_options_values_to_products_options VALUES (17,6,15);
INSERT INTO products_options_values_to_products_options VALUES (18,6,16);
INSERT INTO products_options_values_to_products_options VALUES (19,6,17);
INSERT INTO products_options_values_to_products_options VALUES (20,6,18);
INSERT INTO products_options_values_to_products_options VALUES (21,1,19);
INSERT INTO products_options_values_to_products_options VALUES (22,1,20);
INSERT INTO products_options_values_to_products_options VALUES (23,7,21);
INSERT INTO products_options_values_to_products_options VALUES (24,7,22);
INSERT INTO products_options_values_to_products_options VALUES (25,7,23);
INSERT INTO products_options_values_to_products_options VALUES (26,8,24);
INSERT INTO products_options_values_to_products_options VALUES (27,8,25);
INSERT INTO products_options_values_to_products_options VALUES (28,8,26);
INSERT INTO products_options_values_to_products_options VALUES (29,8,27);
INSERT INTO products_options_values_to_products_options VALUES (30,8,28);
INSERT INTO products_options_values_to_products_options VALUES (31,8,29);
INSERT INTO products_options_values_to_products_options VALUES (32,8,30);
INSERT INTO products_options_values_to_products_options VALUES (33,8,31);
INSERT INTO products_options_values_to_products_options VALUES (34,9,32);
INSERT INTO products_options_values_to_products_options VALUES (35,9,33);
INSERT INTO products_options_values_to_products_options VALUES (36,10,34);
INSERT INTO products_options_values_to_products_options VALUES (37,10,35);
INSERT INTO products_options_values_to_products_options VALUES (38,11,36);
INSERT INTO products_options_values_to_products_options VALUES (39,11,37);
INSERT INTO products_options_values_to_products_options VALUES (40,3,38);
INSERT INTO products_options_values_to_products_options VALUES (41,12,39);
INSERT INTO products_options_values_to_products_options VALUES (42,12,40);
INSERT INTO products_options_values_to_products_options VALUES (43,12,41);
INSERT INTO products_options_values_to_products_options VALUES (44,13,42);
INSERT INTO products_options_values_to_products_options VALUES (45,13,43);
INSERT INTO products_options_values_to_products_options VALUES (46,14,44);
INSERT INTO products_options_values_to_products_options VALUES (47,14,45);
INSERT INTO products_options_values_to_products_options VALUES (48,14,46);
INSERT INTO products_options_values_to_products_options VALUES (50,12,47);
INSERT INTO products_options_values_to_products_options VALUES (51,3,48);
INSERT INTO products_options_values_to_products_options VALUES (52,3,49);
INSERT INTO products_options_values_to_products_options VALUES (53,3,50);
INSERT INTO products_options_values_to_products_options VALUES (54,3,51);
INSERT INTO products_options_values_to_products_options VALUES (55,15,52);
INSERT INTO products_options_values_to_products_options VALUES (56,15,53);
INSERT INTO products_options_values_to_products_options VALUES (57,16,54);
INSERT INTO products_options_values_to_products_options VALUES (58,16,55);
INSERT INTO products_options_values_to_products_options VALUES (59,16,56);
INSERT INTO products_options_values_to_products_options VALUES (60,17,57);
INSERT INTO products_options_values_to_products_options VALUES (61,17,58);
INSERT INTO products_options_values_to_products_options VALUES (62,18,0);
INSERT INTO products_options_values_to_products_options VALUES (63,3,59);

#
# Dumping data for table `products_to_categories`
#

INSERT INTO products_to_categories VALUES (1,2);
INSERT INTO products_to_categories VALUES (1,21);
INSERT INTO products_to_categories VALUES (2,4);
INSERT INTO products_to_categories VALUES (2,21);
INSERT INTO products_to_categories VALUES (3,2);
INSERT INTO products_to_categories VALUES (4,2);
INSERT INTO products_to_categories VALUES (5,4);
INSERT INTO products_to_categories VALUES (6,5);
INSERT INTO products_to_categories VALUES (6,21);
INSERT INTO products_to_categories VALUES (7,7);
INSERT INTO products_to_categories VALUES (8,8);
INSERT INTO products_to_categories VALUES (9,5);
INSERT INTO products_to_categories VALUES (10,8);
INSERT INTO products_to_categories VALUES (11,5);
INSERT INTO products_to_categories VALUES (11,21);
INSERT INTO products_to_categories VALUES (12,7);
INSERT INTO products_to_categories VALUES (12,80);
INSERT INTO products_to_categories VALUES (13,8);
INSERT INTO products_to_categories VALUES (13,27);
INSERT INTO products_to_categories VALUES (14,5);
INSERT INTO products_to_categories VALUES (14,80);
INSERT INTO products_to_categories VALUES (15,9);
INSERT INTO products_to_categories VALUES (16,10);
INSERT INTO products_to_categories VALUES (17,11);
INSERT INTO products_to_categories VALUES (17,27);
INSERT INTO products_to_categories VALUES (18,8);
INSERT INTO products_to_categories VALUES (19,12);
INSERT INTO products_to_categories VALUES (20,7);
INSERT INTO products_to_categories VALUES (21,13);
INSERT INTO products_to_categories VALUES (21,21);
INSERT INTO products_to_categories VALUES (22,13);
INSERT INTO products_to_categories VALUES (22,21);
INSERT INTO products_to_categories VALUES (23,14);
INSERT INTO products_to_categories VALUES (24,14);
INSERT INTO products_to_categories VALUES (24,96);
INSERT INTO products_to_categories VALUES (25,11);
INSERT INTO products_to_categories VALUES (26,7);
INSERT INTO products_to_categories VALUES (26,30);
INSERT INTO products_to_categories VALUES (27,12);
INSERT INTO products_to_categories VALUES (28,7);
INSERT INTO products_to_categories VALUES (29,14);
INSERT INTO products_to_categories VALUES (29,21);
INSERT INTO products_to_categories VALUES (30,7);
INSERT INTO products_to_categories VALUES (31,14);
INSERT INTO products_to_categories VALUES (32,14);
INSERT INTO products_to_categories VALUES (33,13);
INSERT INTO products_to_categories VALUES (34,13);
INSERT INTO products_to_categories VALUES (35,9);
INSERT INTO products_to_categories VALUES (35,27);
INSERT INTO products_to_categories VALUES (36,10);
INSERT INTO products_to_categories VALUES (37,9);
INSERT INTO products_to_categories VALUES (38,9);
INSERT INTO products_to_categories VALUES (38,21);
INSERT INTO products_to_categories VALUES (38,31);
INSERT INTO products_to_categories VALUES (39,10);
INSERT INTO products_to_categories VALUES (40,9);
INSERT INTO products_to_categories VALUES (41,10);
INSERT INTO products_to_categories VALUES (42,13);
INSERT INTO products_to_categories VALUES (43,12);
INSERT INTO products_to_categories VALUES (44,12);
INSERT INTO products_to_categories VALUES (44,30);
INSERT INTO products_to_categories VALUES (45,13);
INSERT INTO products_to_categories VALUES (46,13);
INSERT INTO products_to_categories VALUES (47,11);
INSERT INTO products_to_categories VALUES (48,13);
INSERT INTO products_to_categories VALUES (48,21);
INSERT INTO products_to_categories VALUES (49,13);
INSERT INTO products_to_categories VALUES (49,96);
INSERT INTO products_to_categories VALUES (50,15);
INSERT INTO products_to_categories VALUES (51,16);
INSERT INTO products_to_categories VALUES (52,7);
INSERT INTO products_to_categories VALUES (53,16);
INSERT INTO products_to_categories VALUES (53,30);
INSERT INTO products_to_categories VALUES (54,12);
INSERT INTO products_to_categories VALUES (54,21);
INSERT INTO products_to_categories VALUES (55,7);
INSERT INTO products_to_categories VALUES (55,29);
INSERT INTO products_to_categories VALUES (56,12);
INSERT INTO products_to_categories VALUES (57,17);
INSERT INTO products_to_categories VALUES (57,80);
INSERT INTO products_to_categories VALUES (57,95);
INSERT INTO products_to_categories VALUES (58,12);
INSERT INTO products_to_categories VALUES (58,21);
INSERT INTO products_to_categories VALUES (59,17);
INSERT INTO products_to_categories VALUES (60,12);
INSERT INTO products_to_categories VALUES (60,21);
INSERT INTO products_to_categories VALUES (61,17);
INSERT INTO products_to_categories VALUES (62,16);
INSERT INTO products_to_categories VALUES (63,12);
INSERT INTO products_to_categories VALUES (63,80);
INSERT INTO products_to_categories VALUES (64,16);
INSERT INTO products_to_categories VALUES (65,2);
INSERT INTO products_to_categories VALUES (65,29);
INSERT INTO products_to_categories VALUES (70,20);
INSERT INTO products_to_categories VALUES (71,20);
INSERT INTO products_to_categories VALUES (72,20);
INSERT INTO products_to_categories VALUES (73,20);
INSERT INTO products_to_categories VALUES (74,20);
INSERT INTO products_to_categories VALUES (75,20);
INSERT INTO products_to_categories VALUES (76,22);
INSERT INTO products_to_categories VALUES (77,22);
INSERT INTO products_to_categories VALUES (78,22);
INSERT INTO products_to_categories VALUES (79,22);
INSERT INTO products_to_categories VALUES (80,22);
INSERT INTO products_to_categories VALUES (81,22);
INSERT INTO products_to_categories VALUES (82,22);
INSERT INTO products_to_categories VALUES (83,22);
INSERT INTO products_to_categories VALUES (84,22);
INSERT INTO products_to_categories VALUES (85,22);
INSERT INTO products_to_categories VALUES (86,22);
INSERT INTO products_to_categories VALUES (87,22);
INSERT INTO products_to_categories VALUES (88,23);
INSERT INTO products_to_categories VALUES (89,23);
INSERT INTO products_to_categories VALUES (89,27);
INSERT INTO products_to_categories VALUES (90,23);
INSERT INTO products_to_categories VALUES (91,23);
INSERT INTO products_to_categories VALUES (92,40);
INSERT INTO products_to_categories VALUES (93,40);
INSERT INTO products_to_categories VALUES (95,40);
INSERT INTO products_to_categories VALUES (98,40);
INSERT INTO products_to_categories VALUES (99,41);
INSERT INTO products_to_categories VALUES (100,41);
INSERT INTO products_to_categories VALUES (101,41);
INSERT INTO products_to_categories VALUES (101,64);
INSERT INTO products_to_categories VALUES (102,45);
INSERT INTO products_to_categories VALUES (103,45);
INSERT INTO products_to_categories VALUES (104,45);
INSERT INTO products_to_categories VALUES (110,45);
INSERT INTO products_to_categories VALUES (111,45);
INSERT INTO products_to_categories VALUES (112,45);
INSERT INTO products_to_categories VALUES (113,45);
INSERT INTO products_to_categories VALUES (115,58);
INSERT INTO products_to_categories VALUES (116,58);
INSERT INTO products_to_categories VALUES (139,60);
INSERT INTO products_to_categories VALUES (140,60);
INSERT INTO products_to_categories VALUES (141,61);
INSERT INTO products_to_categories VALUES (142,62);
INSERT INTO products_to_categories VALUES (143,62);
INSERT INTO products_to_categories VALUES (144,63);
INSERT INTO products_to_categories VALUES (146,63);
INSERT INTO products_to_categories VALUES (151,63);
INSERT INTO products_to_categories VALUES (152,63);
INSERT INTO products_to_categories VALUES (152,64);
INSERT INTO products_to_categories VALUES (155,40);
INSERT INTO products_to_categories VALUES (156,67);
INSERT INTO products_to_categories VALUES (156,72);
INSERT INTO products_to_categories VALUES (157,67);
INSERT INTO products_to_categories VALUES (158,67);
INSERT INTO products_to_categories VALUES (159,68);
INSERT INTO products_to_categories VALUES (160,68);
INSERT INTO products_to_categories VALUES (161,68);
INSERT INTO products_to_categories VALUES (162,69);
INSERT INTO products_to_categories VALUES (163,69);
INSERT INTO products_to_categories VALUES (164,69);
INSERT INTO products_to_categories VALUES (165,70);
INSERT INTO products_to_categories VALUES (166,70);
INSERT INTO products_to_categories VALUES (167,70);
INSERT INTO products_to_categories VALUES (168,70);
INSERT INTO products_to_categories VALUES (169,70);
INSERT INTO products_to_categories VALUES (170,71);
INSERT INTO products_to_categories VALUES (171,71);
INSERT INTO products_to_categories VALUES (172,67);
INSERT INTO products_to_categories VALUES (172,72);
INSERT INTO products_to_categories VALUES (173,73);
INSERT INTO products_to_categories VALUES (174,73);
INSERT INTO products_to_categories VALUES (175,73);
INSERT INTO products_to_categories VALUES (176,74);
INSERT INTO products_to_categories VALUES (177,74);
INSERT INTO products_to_categories VALUES (178,74);
INSERT INTO products_to_categories VALUES (179,75);
INSERT INTO products_to_categories VALUES (180,75);
INSERT INTO products_to_categories VALUES (181,75);
INSERT INTO products_to_categories VALUES (182,45);
INSERT INTO products_to_categories VALUES (183,76);
INSERT INTO products_to_categories VALUES (184,76);
INSERT INTO products_to_categories VALUES (185,76);
INSERT INTO products_to_categories VALUES (187,78);
INSERT INTO products_to_categories VALUES (188,78);
INSERT INTO products_to_categories VALUES (189,78);
INSERT INTO products_to_categories VALUES (190,81);
INSERT INTO products_to_categories VALUES (191,81);
INSERT INTO products_to_categories VALUES (192,82);
INSERT INTO products_to_categories VALUES (193,82);
INSERT INTO products_to_categories VALUES (194,82);
INSERT INTO products_to_categories VALUES (195,82);
INSERT INTO products_to_categories VALUES (196,83);
INSERT INTO products_to_categories VALUES (197,83);
INSERT INTO products_to_categories VALUES (198,85);
INSERT INTO products_to_categories VALUES (199,85);
INSERT INTO products_to_categories VALUES (200,78);
INSERT INTO products_to_categories VALUES (201,86);
INSERT INTO products_to_categories VALUES (202,86);
INSERT INTO products_to_categories VALUES (203,86);
INSERT INTO products_to_categories VALUES (204,86);
INSERT INTO products_to_categories VALUES (205,87);
INSERT INTO products_to_categories VALUES (206,87);
INSERT INTO products_to_categories VALUES (207,87);
INSERT INTO products_to_categories VALUES (208,83);
INSERT INTO products_to_categories VALUES (209,89);
INSERT INTO products_to_categories VALUES (210,89);
INSERT INTO products_to_categories VALUES (211,89);
INSERT INTO products_to_categories VALUES (212,91);
INSERT INTO products_to_categories VALUES (213,91);
INSERT INTO products_to_categories VALUES (214,93);
INSERT INTO products_to_categories VALUES (215,93);
INSERT INTO products_to_categories VALUES (215,97);
INSERT INTO products_to_categories VALUES (217,79);
INSERT INTO products_to_categories VALUES (217,98);
INSERT INTO products_to_categories VALUES (218,40);
INSERT INTO products_to_categories VALUES (222,79);
INSERT INTO products_to_categories VALUES (223,79);
INSERT INTO products_to_categories VALUES (224,79);
INSERT INTO products_to_categories VALUES (225,100);
INSERT INTO products_to_categories VALUES (226,100);
INSERT INTO products_to_categories VALUES (227,101);
INSERT INTO products_to_categories VALUES (229,100);

#
# Dumping data for table `record_artists`
#

INSERT INTO record_artists VALUES (1,'The Russ Tippins Band','sooty.jpg','2007-01-26 10:42:36',NULL);

#
# Dumping data for table `record_artists_info`
#

INSERT INTO record_artists_info VALUES (1,1,'',0,NULL);
INSERT INTO record_artists_info VALUES (1,2,'',0,NULL);

#
# Dumping data for table `record_company`
#

INSERT INTO record_company VALUES (1,'HMV Group',NULL,'2007-01-26 10:43:16','2007-01-26 10:43:59');

#
# Dumping data for table `record_company_info`
#

INSERT INTO record_company_info VALUES (1,1,'www.hmvgroup.com',0,NULL);
INSERT INTO record_company_info VALUES (1,2,'www.hmvgroup.com',0,NULL);

#
# Dumping data for table `reviews`
#

INSERT INTO reviews (reviews_id, products_id, customers_id, customers_name, reviews_rating, date_added, last_modified, reviews_read, status) VALUES (1, 19, 0, 'Bill Smith', 5, '2003-12-23 03:18:19', '0001-01-01 00:00:00', 11, 1);

#
# Dumping data for table `reviews_description`
#

INSERT INTO reviews_description (reviews_id, languages_id, reviews_text) VALUES (1, 1, 'This really is a very funny but old movie!');

#
# Dumping data for table `salemaker_sales`
#

INSERT INTO salemaker_sales VALUES (1,1,'10%OFF',10.0000,1,0.0000,0.0000,2,'64,67',',64,67,','0001-01-01','0001-01-01','2007-01-17','2007-01-18','2007-01-17');
INSERT INTO salemaker_sales VALUES (2,1,'500��OFF',500.0000,0,0.0000,0.0000,2,'68',',68,','0001-01-01','0001-01-01','2007-01-18','2007-01-19','2007-01-18');
INSERT INTO salemaker_sales VALUES (3,1,'������8000��',8000.0000,2,0.0000,0.0000,2,'69',',69,','0001-01-01','0001-01-01','2007-01-18','2007-01-19','2007-01-18');
INSERT INTO salemaker_sales VALUES (4,1,'10��OFF���ò��ܥ������',10.0000,1,0.0000,0.0000,2,'73',',73,','0001-01-01','0001-01-01','2007-01-18','2007-01-18','2007-01-18');
INSERT INTO salemaker_sales VALUES (5,1,'10��OFF�ʥ�����ͥ���',10.0000,1,0.0000,0.0000,0,'74',',74,','0001-01-01','0001-01-01','2007-01-18','2007-01-18','2007-01-18');
INSERT INTO salemaker_sales VALUES (6,1,'10��OFF���ò�ͥ���',10.0000,1,0.0000,0.0000,1,'75',',75,','0001-01-01','0001-01-01','2007-01-18','2007-01-18','2007-01-18');
INSERT INTO salemaker_sales VALUES (7,1,'10�󥻡�����֤Ȳ����Ӹ���',10.0000,1,10000.0000,0.0000,2,'71',',71,','2007-01-15','2007-06-15','2007-01-18','2007-01-18','2007-01-18');

#
# Dumping data for table `specials`
#

INSERT INTO specials VALUES (1,1,4050.0000,'2007-01-16 00:29:45',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (2,17,3800.0000,'2007-01-16 00:31:09','2007-01-16 00:31:50','0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (3,79,2000.0000,'2007-01-16 00:34:02',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (4,93,7500.0000,'2007-01-16 15:11:23','2007-01-16 15:50:07','0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (7,101,9000.0000,'2007-01-16 17:24:53',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (27,212,450.0000,'2007-01-26 11:08:19',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (11,111,5000.0000,'2007-01-16 20:38:12','2007-01-16 21:13:28','0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (10,110,9500.0000,'2007-01-16 20:38:12','2007-01-16 21:10:17','0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (12,113,5000.0000,'2007-01-16 21:03:43','2007-01-16 21:14:42','0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (13,165,8000.0000,'2007-01-18 14:08:42','2007-01-18 14:13:02','0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (14,166,5000.0000,'2007-01-18 14:28:21',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (15,167,5000.0000,'2007-01-18 14:28:40',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (16,168,5000.0000,'2007-01-18 14:28:51',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (17,169,5000.0000,'2007-01-18 14:29:19','2007-01-18 14:29:48','2007-06-15',NULL,1,'2007-01-15');
INSERT INTO specials VALUES (18,173,5000.0000,'2007-01-18 14:30:15',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (19,174,5000.0000,'2007-01-18 14:30:26',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (20,175,5000.0000,'2007-01-18 14:30:35',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (21,176,5000.0000,'2007-01-18 14:30:53',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (22,177,5000.0000,'2007-01-18 14:31:03',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (23,178,5000.0000,'2007-01-18 14:31:11',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (24,179,5000.0000,'2007-01-18 14:34:01',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (25,180,5000.0000,'2007-01-18 14:34:11',NULL,'0001-01-01',NULL,1,'0001-01-01');
INSERT INTO specials VALUES (26,181,5000.0000,'2007-01-18 14:34:24',NULL,'0001-01-01',NULL,1,'0001-01-01');

#
# Dumping data for table `meta_tags_categories_description`
#

INSERT INTO meta_tags_categories_description VALUES (58,1,'','','');
INSERT INTO meta_tags_categories_description VALUES (58,2,'���Υ��ƥ���ˤ�����Ū��title���������ꤷ�ޤ�����','���Υ��ƥ���ˤ�����Ū��META��keyword�ˤ����ꤷ�Ƥ��ޤ�,�������1,�������2,�������3','���Υ��ƥ���ˤ�����Ū��META��description�ˤ����ꤷ�Ƥ��ޤ���Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus sit amet velit������');

#
# Dumping data for table `meta_tags_products_description`
#

INSERT INTO meta_tags_products_description VALUES (115,1,'','','');
INSERT INTO meta_tags_products_description VALUES (115,2,'���ξ��ʥڡ����ˤ�����Ū��title���������ꤷ�ޤ�����','���ξ��ʥڡ����ˤ�����Ū��META��keyword�ˤ����ꤷ�Ƥ��ޤ�,���ʥ������1,���ʥ������2,���ʥ������3','���ξ��ʥڡ����ˤ�����Ū��META��description�ˤ����ꤷ�Ƥ��ޤ���Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus sit amet velit������');

#
# Initial setup for Japanese demo
#

# `configuration` setup

UPDATE configuration SET configuration_value='true' WHERE configuration_key='DOWNLOAD_ENABLED';
UPDATE configuration SET configuration_value='107' WHERE configuration_key='SHIPPING_ORIGIN_COUNTRY';
UPDATE configuration SET configuration_value='100-0000' WHERE configuration_key='SHIPPING_ORIGIN_ZIP';
UPDATE configuration SET configuration_value='1' WHERE configuration_key='ORDER_WEIGHT_ZERO_STATUS';
UPDATE configuration SET configuration_value='�߸��ڤ�Ǥ�' WHERE configuration_key='STOCK_MARK_PRODUCT_OUT_OF_STOCK';
UPDATE configuration SET configuration_value='False' WHERE configuration_key='SKIP_SINGLE_PRODUCT_CATEGORIES';

# shipping module install ( freeshipper and yamato )

INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('̵������', 'MODULE_SHIPPING_FREESHIPPER_STATUS', 'True', '̵���������󶡤��ޤ�����', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('̵������������', 'MODULE_SHIPPING_FREESHIPPER_COST', '0', '̵�������ˤ����륳����', '6', '6', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('�����', 'MODULE_SHIPPING_FREESHIPPER_HANDLING', '0', '̵�������ˤ���������.', '6', '0', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) VALUES ('�Ǽ���', 'MODULE_SHIPPING_FREESHIPPER_TAX_CLASS', '0', '��������Ŭ�Ѥ�����Ǽ��̤����򤷤Ƥ���������', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) VALUES ('�����ϰ�', 'MODULE_SHIPPING_FREESHIPPER_ZONE', '0', '�����ϰ�����򤹤�����򤵤줿�ϰ�Τߤ����Ѳ�ǽ�ˤʤ�ޤ���.', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('ɽ���������', 'MODULE_SHIPPING_FREESHIPPER_SORT_ORDER', '0', 'ɽ��������������Ǥ��ޤ����������������ۤɾ�̤�ɽ������ޤ���', '6', '0', now());

INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('������ؤ�������ͭ���ˤ���', 'MODULE_SHIPPING_YAMATO_STATUS', 'True', '��ޥȱ�͢(�����)���������󶡤��ޤ���?', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('�谷�������', 'MODULE_SHIPPING_YAMATO_HANDLING', '0', '������Ŭ�Ѥ���谷�����������Ǥ��ޤ�.', '6', '1', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('����̵������', 'MODULE_SHIPPING_YAMATO_FREE_SHIPPING', 'False', '����̵�������ͭ���ˤ��ޤ���? [��ץ⥸�塼��]-[����]-[����̵������]��ͥ�褹����� False ������Ǥ�������.', '6', '2', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('������̵���ˤ�������������', 'MODULE_SHIPPING_YAMATO_OVER', '5000', '�����۰ʾ�򤴹����ξ���������̵���ˤ��ޤ�.', '6', '3', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('�������Ͱ�Ψ', 'MODULE_SHIPPING_YAMATO_DISCOUNT', '0', '�������Ͱ�Ψ����ꤷ�ޤ�.(��)', '6', '4', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) VALUES ('�����ϰ�', 'MODULE_SHIPPING_YAMATO_ZONE', '0', '�����ϰ�����򤹤�����򤵤줿�ϰ�Τߤ����Ѳ�ǽ�Ȥʤ�ޤ�.', '6', '5', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now());
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) VALUES ('ɽ���������', 'MODULE_SHIPPING_YAMATO_SORT_ORDER', '0', 'ɽ��������������Ǥ��ޤ�. �������������ۤɾ�̤�ɽ������ޤ�.', '6', '6', now());
