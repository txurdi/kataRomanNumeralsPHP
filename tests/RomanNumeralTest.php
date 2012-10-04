<?php
include "../RomanNumeral.php";

class RomanNumeralTest extends PHPUnit_Framework_TestCase {
	
   /**
     * @dataProvider bateria
     */
    public function testaRomano($a, $b)
    {
		$obj = new RomanNumeral();
        $this->assertEquals($b, $obj->aRomano($a));
    }
 
    public function bateria()
    {
        return array(
          array(1, 'I'),
          array(2, 'II'),
			 array(3, 'III'),
			 array(4, 'IV'),
			 array(5, 'V'),
			 array(6, 'VI'),
			 array(7, 'VII'),
			 array(8, 'VIII'),
			 array(9, 'IX'),
			 array(10, 'X'),
			 array(11, 'XI'),
			 array(12, 'XII'),
			 array(13, 'XIII'),
			 array(14, 'XIV'),
			 array(15, 'XV'),
			 array(17, 'XVII'),
			 array(19, 'XIX'),
			 array(28, 'XXVIII'),
			 array(34, 'XXXIV'),
			 array(39, 'XXXIX'),
			 array(40, 'XL'),
			 array(49, 'XLIX'),
			 array(56, 'LVI'),
			 array(76, 'LXXVI'),
			 array(93, 'XCIII'),
			 array(112, 'CXII'),
			 array(149, 'CXLIX'),
			 array(163, 'CLXIII'),
			 array(195, 'CXCV'),
			 array(199, 'CXCIX'),
			 array(304, 'CCCIV'),
			 array(458, 'CDLVIII'),
			 array(792, 'DCCXCII'),
			 array(901, 'CMI'),
			 array(1030, 'MXXX'),
			 array(1553, 'MDLIII'),
			 array(2769, 'MMDCCLXIX'),
			 array(1400, 'MCD'),
			 array(2999, 'MMCMXCIX')
        );
    }
}
?>