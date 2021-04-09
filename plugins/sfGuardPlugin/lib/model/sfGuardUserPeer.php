<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserPeer.php 9999 2008-06-29 21:24:44Z fabien $
 */
class sfGuardUserPeer extends PluginsfGuardUserPeer
{
	static public $position = array(
    'System Admin' => ' System Admin ',
	'Supervisor' => ' Supervisor ',
    'Cashier' => ' Cashier ',
	'Sales Assistant' => ' Sales Assistant ',
	'Job Order Clerk' => ' Job Order Clerk ',
	'Discount' => ' Discount ',
    'Inventory Clerk' => ' Inventory Clerk ',
    'Void' => ' Void ',
  );
    static public $terminal = array(
    'TRML 01' => ' TRML 01 ',
    'TRML 02' => ' TRML 02 ',
    'TRML 03' => ' TRML 03' ,
    'TRML 04' => ' TRML 04 ',
    'TRML 05' => ' TRML 05 ',
    'TRML 06' => ' TRML 06' ,
    'TRML 07' => ' TRML 07 ',
    'TRML 08' => ' TRML 08 ',
    'TRML 09' => ' TRML 09' ,
    'TRML 10' => ' TRML 10 ',
    'TRML 11' => ' TRML 11 ',
    'TRML 12' => ' TRML 12 ',
    'TRML 13' => ' TRML 13' ,
    'TRML 14' => ' TRML 14 ',
    'TRML 15' => ' TRML 15 ',
    'TRML 16' => ' TRML 16' ,
    'TRML 17' => ' TRML 17 ',
    'TRML 18' => ' TRML 18 ',
    'TRML 19' => ' TRML 19' ,
    'TRML 20' => ' TRML 20 ',
    'SERVER' => ' SERVER ',
  );
  static public $gender = array(
    'Male' => ' Male ',
    'Female' => ' Female ',
  );


  static public function getCategory(Criteria $criteria = null)
{
  if (is_null($criteria))
  {
    $criteria = new Criteria();
  }
 
  $criteria->addAscendingOrderByColumn(self::LASTNAME);
 
  return self::doSelect($criteria);
}
static public $city = array(
    'Caloocan City' => ' Caloocan ',
    'Las Pinas City' => ' Las Pinas ',
    'Makati City' => ' Makat ',
    'Malabon City' => ' Malabon ',
    'Mandaluyong City' => ' Mandaluyong ',
    'Manila' => ' Manila ',
    'Marikina City' => ' Marikina ',
    'Muntinlupa City' => ' Muntinlupa ',
    'Paranaque City' => ' Paranaque ',
    'Pasay City' => ' Pasay ',
    'Pasig City' => ' Pasig ',
    'Pateros' => ' Pateros ',
    'Quezon City' => ' Quezon City ',
    'San Juan City' => ' San Juan ',
    'Taguig City' => ' Taguig ',
    'Valenzuela City' => ' Valenzuela',
    'Navotas City' => ' Novatas ',
'Butuan' => 'Butuan', 	       
'Cabadbaran' => 'Cabadbaran', 	
'Bayugan' => 'Bayugan', 	
'Legazpi' => 'Legazpi', 	
'Ligao' => 'Ligao', 	
'Tabaco' => 'Tabaco', 	
'Isabela' => 'Isabela', 	
'Lamitan' => 'Lamitan', 
'Balanga' => 'Balanga', 	
'Batangas City' => 'Batangas City', 
'Lipa' => 'Lipa', 	
'Tanauan' => 'Tanauan', 
'Baguio' => 'Baguio', 	
'Tagbilaran' => 'Tagbilaran', 
'Malaybalay' => 'Malaybalay', 	
'Valencia' => 'Valencia', 	
'Malolos' => 'Malolos', 	
'Meycauayan' => 'Meycauayan', 	
'San Jose del Monte' => 'San Jose del Monte', 	
'Tuguegarao' => 'Tuguegarao', 	
'Iriga' => 'Iriga', 	
'Naga' => 'Naga', 	
'Roxas' => 'Roxas', 	
'Bacoor' => 'Bacoor', 
'Cavite City' => 'Cavite City', 	
'Dasmarinas' => 'Dasmarinas', 	
'Imus' => 'Imus', 	
'Tagaytay' => 'Tagaytay', 	
'Trece Martires' => 'Trece Martires', 	
'Bogo' => 'Bogo', 	
'Carcar' => 'Carcar', 	
'Cebu City' => 'Cebu City', 
'Danao' => 'Danao', 	
'Lapu-Lapu' => 'Lapu-Lapu', 
'Mandaue' => 'andaue', 	
'Naga' => 'Naga', 	
'Talisay' => 'Talisay', 	
'Toledo' => 'Toledo', 	
'Kidapawan' => 'Kidapawan', 	
'Panabo' => 'Panabo', 	
'Samal' => 'Samal', 	
'Tagum' => 'Tagum', 	
'Mati' => 'Mati', 	
'Digos' => 'Digos', 	
'Borongan' => 'Borongan', 	
'Batac' => 'Batac', 	
'Laoag' => 'Laoag', 	
'Candon' => 'Candon', 	
'Vigan' => 'Vigan', 	
'Iloilo City' => 'Iloilo City', 	
'Passi' => 'Passi', 	
'Cauayan' => 'Cauayan', 
'Ilagan' => 'Ilagan', 	
'Santiago' => 'Santiago', 	
'Tabuk' => 'Tabuk', 	
'San Fernando' => 'San Fernando', 
'Binan' => 'Binan', 	
'Cabuyao' => 'Cabuyao', 	
'Calamba' => 'Calamba', 	
'San Pablo' => 'San Pablo', 	
'Santa Rosa' => 'Santa Rosa', 
'Iligan' => 'Iligan', 
'Marawi' => 'Marawi', 
'Baybay' => 'Baybay', 
'Ormoc' => 'Ormoc' , 	
'Tacloban' => 'Tacloban', 	
'Cotabato City' => 'Cotabato City', 
'Masbate City' => 'Masbate City', 
'Oroquieta' => 'Oroquieta', 	
'Ozamiz' => 'Ozamiz', 	
'Tangub' => 'Tangub', 	
'Cagayan de Oro' => 'Cagayan de Oro', 	
'El Salvador' => 'El Salvador', 	
'Gingoog' => 'Gingoog', 	
'Bacolod' => 'Bacolod', 	
'Bago' => 'Bago', 	
'Cadiz' => 'Cadiz', 	
'Escalante' => 'Escalante', 
'Himamaylan' => 'Himamaylan', 	
'Kabankalan' => 'Kabankalan', 	
'La Carlota' => 'La Carlota', 	
'Sagay' => 'Sagay', 	
'San Carlos' => 'San Carlos',
'Silay' => 'Silay', 	
'Sipalay' => 'Sipalay', 	
'Talisay' => 'Talisay', 	
'Victorias' => 'Victorias', 	
'Bais' => 'Bais', 	
'Bayawan' => 'Bayawan', 	
'Canlaon' => 'Canlaon', 	
'Dumaguete' => 'Dumaguete', 	
'Guihulngan' => 'Guihulngan', 	
'Tanjay' => 'Tanjay', 	
'Cabanatuan' => 'Cabanatuan', 	
'Gapan' => 'Gapan', 	
'Munoz' => 'Munoz', 	
'Palayan' => 'Palayan', 
'San Jose' => 'San Jose', 	
'Calapan' => 'Calapan', 	
'Puerto Princesa' => 'Puerto Princesa', 	
'Angeles' => 'Angeles', 	
'Mabalacat' => 'Mabalacat', 	
'San Fernando' => 'San Fernando', 	
'Alaminos' => 'Alaminos', 	
'Dagupan' => 'Dagupan', 	
'San Carlos' => 'San Carlos', 	
'Urdaneta' => 'Urdaneta', 	
'Tayabas' => 'Tayabas', 	
'Lucena' => 'Lucena', 	
'Antipolo City' => 'Antipolo City', 	
'Calbayog' => 'Calbayog', 	
'Catbalogan' => 'Catbalogan', 
'Sorsogon City' => 'Sorsogon City', 	
'General Santos' => 'General Santos', 	
'Koronadal' => 'Koronadal', 	
'Maasin' => 'Maasin', 	
'Tacurong' => 'Tacurong', 	
'Surigao City' => 'Surigao City', 	
'Bislig' => 'Bislig', 	
'Tandag' => 'Tandag', 	
'Tarlac City' => 'Tarlac City', 	
'Olongapo' => 'Olongapo', 	
'Dapitan' => 'Dapitan', 	
'Dipolog' => 'Dipolog', 	
'Pagadian' => 'Pagadian', 	
'Zamboanga City' => 'Zamboanga City',
  );
}



