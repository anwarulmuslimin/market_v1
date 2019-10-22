<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to 'column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public function getStokBarang($id)
	{
		$crs 		    = new CDbCriteria;
		$crs->condition = "harga_barang_id='".$id."'";
		$HargaBarang    = BarangHarga::model()->find($crs);
		
		return $HargaBarang->harga_barang_stok;
	}

	public function uang($angka)
	{
		$hasil =number_format($angka,0,',','.'); // format Rupiah Rp. 100.000
		return $hasil;
	}

	public function Rupiah($value) {
		$value=number_format($value, '0', ",","" );
		$duit = (string)$value;
		$duit = trim($duit);
		if (strlen($duit) == 0) return "";

		if (strstr($duit,"E"))
			return "Rp ".$duit;


		$posmin = strpos($duit, "-");
		if ($posmin === false)
			$negatif = 0;
		else
			$negatif = 1;

		if ($negatif)
			$duit = str_replace("-", "", $duit);

		$len = strlen($duit);
		$nPoint = (int)($len / 3);
		if (($len % 3) == 0)
			$nPoint--;

		$rp = "";
		for ($i = 0; $i < $nPoint; $i++) {
			$j = 0;
			$temp = "";
			while((strlen($duit) >= 0) && ($j++ < 3)) {
				$temp = substr($duit, strlen($duit) - 1, 1) . $temp;
				if (strlen($duit) >= 2)
					$duit = substr($duit, 0, strlen($duit) - 1);
				else
					$duit = "";
			}
			if (strlen($rp) > 0)
				$rp = $temp . "." . $rp;
			else
				$rp = $temp;
		}
		if (strlen($duit) > 0)
			$rp = $duit . "." . $rp;

		if ($negatif)
			return "(Rp " . $rp . ")";
		else
			return "Rp " . $rp;

	}
}