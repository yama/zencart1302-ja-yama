<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
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
/*
  $Id$

  Nittsu Shipping Calculator.
  Calculate shipping costs.

  2002/03/29 written by TAMURA Toshihiko (tamura@bitscope.co.jp)
  2003/04/10 modified for ms1
  2004/02/27 modified for ZenCart by HISASUE Takahiro ( hisa@flatz.jp )
  2005/02/04 modified for ZenCart ver1.2 by Yatts (info@yatts.jp)
 */
/*
	$rate = new _Nittsu('nittsu','�̾���');
	$rate->SetOrigin('�̳�ƻ', 'JP');   // �̳�ƻ����
	$rate->SetDest('�����', 'JP');     // ����Ԥޤ�
	$rate->SetWeight(10);           // kg
	$quote = $rate->GetQuote();
	print $quote['type'] . "<br>";
	print $quote['cost'] . "\n";
*/
class _Nittsu {
	var $quote;
	var $OriginZone;
	var $OriginCountryCode = 'JP';
	var $DestZone;
	var $DestCountryCode = 'JP';
	var $Weight = 0;
	var $Length = 0;
	var $Width  = 0;
	var $Height = 0;

	// ���󥹥ȥ饯��
	// $id:   module id
	// $titl: module name
	// $zone: ��ƻ�ܸ������� '01'��'47'
	// $country: country code
	function _Nittsu($id, $title, $zone = NULL, $country = NULL) {
		$this->quote = array('id' => $id, 'title' => $title);
		if($zone) {
			$this->SetOrigin($zone, $country);
		}
	}
	// ȯ�����򥻥åȤ���
	// $zone: ��ƻ�ܸ������� '01'��'47'
	// $country: country code
	function SetOrigin($zone, $country = NULL) {
		$this->OriginZone = $zone;
		if($country) {
			$this->OriginCountryCode = $country;
		}
	}
	function SetDest($zone, $country = NULL) {
		$this->DestZone = $zone;
		if($country) {
			$this->DestCountryCode = $country;
		}
	}
	function SetWeight($weight) {
		//$this->Weight = $weight;
		$this->Weight = $weight;
	}
	function SetSize($length = NULL, $width = NULL, $height = NULL) {
		if($length) {
			$this->Length = $length;
		}
		if($width) {
			$this->Width = $width;
		}
		if($height) {
			$this->Height = $height;
		}
	}
	// ��������ʬ(0��4)���֤�
	// ���ʳ��ξ���9���֤�
	//
	// ��ʬ  ������̾  ���շ�   ����
	// ----------------------------------
	// 0     60������  60cm�ޤ�  2kg�ޤ�
	// 1     80������  80cm�ޤ�  5kg�ޤ�
	// 2    100������ 100cm�ޤ� 10kg�ޤ�
	// 3    120������ 120cm�ޤ� 15kg�ޤ�
	// 4    140������ 140cm�ޤ� 20kg�ޤ�
	// 5    170������ 170cm�ޤ� 30kg�ޤ�
	// 9    ���ʳ�    
	function GetSizeClass() {
		$a_classes = array(
			array(0,  60,  2),  // ��ʬ,���շ�,����
			array(1,  80,  5),
			array(2, 100, 10),
			array(3, 120, 15),
			array(4, 140, 20),
			array(5, 170, 30)
		);

		$n_totallength = $this->Length + $this->Width + $this->Height;

		while (list($n_index, $a_limit) = each($a_classes)) {
			if ($n_totallength <= $a_limit[1] && $this->Weight <= $a_limit[2]) {
				return $a_limit[0];
			}
		}
		return -1;  // ���ʳ�
	}
	// ���ո��������褫�饭�����������
	//
	function GetDistKey() {
		$s_key = '';
		$s_z1 = $this->GetLZone($this->OriginZone);
		$s_z2 = $this->GetLZone($this->DestZone);
		if ( $s_z1 && $s_z2 ) {
			// ���ӥ����ɤ򥢥�ե��٥åȽ��Ϣ�뤹��
			if ( ord($s_z1) < ord($s_z2) ) {
				$s_key = $s_z1 . $s_z2;
			} else {
				$s_key = $s_z2 . $s_z1;
			}
		}
		return $s_key;
	}
	// ��ƻ�ܸ������ɤ������ӥ����ɤ��������
	// $zone: ��ƻ�ܸ�������
	function GetLZone($zone) {
		// ��ƻ�ܸ������ɤ����ӥ�����('A'��'M')���Ѵ�����
		//  �̳�ƻ��:'A' = �̳�ƻ
		//  ���̡���:'B' = �Ŀ���,��긩,���ĸ�,�ܾ븩,������,ʡ�縩
		//  ���쿮��:'C' = ��븩,���ڸ�,���ϸ�,��̸�,���ո�,�����,�����,������,���㸩,Ĺ�
		//  ������Φ:'D' = ���츩,�Ų���,���θ�,���Ÿ�,�ٻ���,���,ʡ�温
		//  ����  ��:'E' = ���츩,������,�����,ʼ�˸�,���ɸ�,�²λ���
		//  ���  ��:'F' = Ļ�踩,�纬��,������,���縩,������
		//  �͹�  ��:'G' = ���縩,���,��ɲ��,���θ�
		//  �彣����:'H' = ʡ����,���츩,Ĺ�긩,��ʬ��,���ܸ�,�ܺ긩,�����縩
		//  ���� �� :'I' = ���츩 (�̾��ؤ���ã��賰)
		$a_zonemap = array(
		'�̳�ƻ'=>'A',  
		'�Ŀ���'=>'B',  
		'��긩'=>'B',  
		'�ܾ븩'=>'B',  
		'���ĸ�'=>'B',  
		'������'=>'B',  
		'ʡ�縩'=>'B',  
		'��븩'=>'C',  
		'���ڸ�'=>'C',  
		'���ϸ�'=>'C',  
		'��̸�'=>'C',  
		'���ո�'=>'C',  
		'�����'=>'C',  
		'�����'=>'C',  
		'���㸩'=>'C',  
		'�ٻ���'=>'D',  
		'���'=>'D',  
		'ʡ�温'=>'D',  
		'������'=>'C',  
		'Ĺ�'=>'C',  
		'���츩'=>'D',  
		'�Ų���'=>'D',  
		'���θ�'=>'D',  
		'���Ÿ�'=>'D',  
		'���츩'=>'E',  
		'������'=>'E',  
		'�����'=>'E',  
		'ʼ�˸�'=>'E',  
		'���ɸ�'=>'E',  
		'�²λ���'=>'E',  
		'Ļ�踩'=>'F',  
		'�纬��'=>'F',  
		'������'=>'F',  
		'���縩'=>'F',  
		'������'=>'F',  
		'���縩'=>'G',  
		'���'=>'G',  
		'��ɲ��'=>'G',  
		'���θ�'=>'G',  
		'ʡ����'=>'H',  
		'���츩'=>'H',  
		'Ĺ�긩'=>'H',  
		'���ܸ�'=>'H',  
		'��ʬ��'=>'H',  
		'�ܺ긩'=>'H',  
		'�����縩'=>'H',  
		'���츩'=>'I'   
		);
		return $a_zonemap[$zone];
	}

	function GetQuote() {
		// ��Υ�̤β��ʥ��: ��󥯥����� => ����(60,80,100,120,140,170)
		$a_pricerank = array(
		'N01'=>array( 740, 950,1160,1370,1580,1790), // �̾���(01) ���Υ
		'N02'=>array( 840,1050,1260,1470,1680,1890), // �̾���(02)   $,1vq(B
		'N03'=>array( 950,1160,1370,1580,1790,2000), // �̾���(03)
		'N04'=>array(1050,1260,1470,1680,1890,2100), // �̾���(04)
		'N05'=>array(1160,1370,1580,1790,2000,2210), // �̾���(05)
		'N06'=>array(1260,1470,1680,1890,2100,2310), // �̾���(06)
		'N07'=>array(1370,1580,1790,2000,2210,2420), // �̾���(07)
		'N08'=>array(1470,1680,1890,2100,2310,2520), // �̾���(08)
		'N09'=>array(1580,1790,2000,2210,2420,2630), // �̾���(09)
		'N10'=>array(1680,1890,2100,2310,2520,2730), // �̾���(10)
		'N11'=>array(1790,2000,2210,2420,2630,2840), // �̾���(11)
	'N12'=>array(1160,1680,2210,2730,3260,3780), // �̾���(12)
	'N13'=>array(1260,1790,2310,2840,3360,3890), // �̾���(13)
	'N14'=>array(1470,2000,2520,3050,3570,4100), // �̾���(14)   $,1vs(B
	'N15'=>array(1890,2420,2940,3470,3990,4520)  // �̾���(15) ���Υ
		);
		// ���� - ���Ӵ֤β��ʥ��
		// (����) http://www.nittsu.co.jp/pelican/fare/index.htm
		$a_dist_to_rank = array(
	'AA'=>'N01',
	'AB'=>'N03','BB'=>'N01',
	'AC'=>'N05','BC'=>'N01','CC'=>'N01',
	'AD'=>'N06','BD'=>'N02','CD'=>'N01','DD'=>'N01',
	'AE'=>'N08','BE'=>'N03','CE'=>'N02','DE'=>'N01','EE'=>'N01',
	'AF'=>'N09','BF'=>'N05','CF'=>'N03','DF'=>'N02','EF'=>'N01','FF'=>'N01',
	'AG'=>'N10','BG'=>'N06','CG'=>'N04','DG'=>'N03','EG'=>'N02','FG'=>'N02','GG'=>'N01',
	'AH'=>'N11','BH'=>'N07','CH'=>'N05','DH'=>'N03','EH'=>'N02','FH'=>'N01','GH'=>'N02','HH'=>'N01',
	'AI'=>'N15','BI'=>'N14','CI'=>'N13','DI'=>'N13','EI'=>'N13','FI'=>'N13','GI'=>'N13','HI'=>'N12','II'=>''
		);

		$s_key = $this->GetDistKey();
		if ( $s_key ) {
			$s_rank = $a_dist_to_rank[$s_key];
			if ( $s_rank ) {
				$n_sizeclass = $this->GetSizeClass();
				if ($n_sizeclass < 0) {
					$this->quote['error'] = MODULE_SHIPPING_NITTSU_TEXT_OVERSIZE;
				} else {
					$this->quote['cost'] = $a_pricerank[$s_rank][$n_sizeclass];
				}
			  //$this->quote['DEBUG'] = ' zone=' . $this->OriginZone . '=>' . $this->DestZone   //DEBUG
			  //              . ' cost=' . $a_pricerank[$s_rank][$n_sizeclass];           //DEBUG
			} else {
				$this->quote['error'] = MODULE_SHIPPING_NITTSU_TEXT_OUT_OF_AREA . '(' . $s_key .')';
			}
		} else {
			$this->quote['error'] = MODULE_SHIPPING_NITTSU_TEXT_ILLEGAL_ZONE . '(' . $this->OriginZone . '=>' . $this->DestZone . ')';
		}
		return $this->quote;
	}
}
?>
