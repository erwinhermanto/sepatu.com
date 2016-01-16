<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

# Cek login
if ( ! function_exists('convert_rupiah'))
{
	function convert_rupiah($number)
	{
		$rupiah = number_format($number, 2, ',', '.');
		$rupiah2 = 'Rp. '.str_pad($rupiah, 20, '#', STR_PAD_LEFT);
		
		return str_replace('#', '&nbsp;', $rupiah2);
	}
}

if ( ! function_exists('convert_rupiah_non_rp'))
{
	function convert_rupiah_non_rp($number)
	{
		$rupiah = number_format($number, 2, ',', '.');
		$rupiah2 = str_pad($rupiah, 20, '#', STR_PAD_LEFT);
		//return $rupiah2;
		return str_replace('#', '', $rupiah2);
	}
}


if ( ! function_exists('convert_rupiah_non_rp2'))
{
	function convert_rupiah_non_rp2($number)
	{
		$rupiah = number_format($number, 2, '.', ',');
		$rupiah2 = str_pad($rupiah, 20, '#', STR_PAD_LEFT);
		//return $rupiah2;
		return str_replace('#', '', $rupiah2);
	}
}

if ( ! function_exists('convert_date_mysql_indo'))
{
	function convert_date_mysql_indo($in)
	{
		$ci=&get_instance();
		$ci->load->library('konversi');
		$tgl = substr($in,8,2);
		$bln = substr($in,5,2);
		$thn = substr($in,0,4);
		if(checkdate($bln,$tgl,$thn))
		{
		   //$out=substr($in,8,2)." ".$this->konversi->bulan2(substr($in,5,2))." ".substr($in,0,4);
		   $out=substr($in,8,2)."-".substr($in,5,2)."-".substr($in,0,4);
		}
		else
		{
		   $out = "<span class='error'>-error-</span>";
		}
		return $out;
	}
}


if ( ! function_exists('convert_bulan_indo'))
{
	function convert_bulan_indo($rrr)
	{
		if($rrr=='1' || $rrr=='01'){$ttt='Januari';}
		if($rrr=='2' || $rrr=='02'){$ttt='Februari';}
		if($rrr=='3' || $rrr=='03'){$ttt='Maret';}
		if($rrr=='4' || $rrr=='04'){$ttt='April';}
		if($rrr=='5' || $rrr=='05'){$ttt='Mei';}
		if($rrr=='6' || $rrr=='06'){$ttt='Juni';}
		if($rrr=='7' || $rrr=='07'){$ttt='Juli';}
		if($rrr=='8' || $rrr=='08'){$ttt='Agustus';}
		if($rrr=='9' || $rrr=='09'){$ttt='September';}
		if($rrr=='10'){$ttt='Oktober';}
		if($rrr=='11'){$ttt='November';}
		if($rrr=='12'){$ttt='Desember';}
		 
		if($ttt)
		{
		   //$out=substr($in,8,2)." ".$this->konversi->bulan2(substr($in,5,2))." ".substr($in,0,4);
		   $out=$ttt;
		}
		else
		{
		   $out = "<span class='error'>-error-</span>";
		}
		return $out;
	}
}
 
if ( ! function_exists('tgl_indo'))
{
	function tgl_indo($tgl)
	{
		//$ubah = gmdate($tgl, time());
		$ubah = $tgl;
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[2];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
}

if ( ! function_exists('tgl_ymd'))
{
	function tgl_ymd($tgl)
	{
		$ubah = gmdate($tgl, time());
		$pecah = explode("/",$ubah);
		$tanggal = $pecah[0];
		$bulan = $pecah[1];
		$tahun = $pecah[2];
		return $tahun.'/'.$bulan.'/'.$tanggal;
	}
}
if ( ! function_exists('tgl_ymd2'))
{
	function tgl_ymd2($tgl)
	{
		$ubah = gmdate($tgl, time());
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[0];
		$bulan = $pecah[1];
		$tahun = $pecah[2];
		return '19'.$tahun.'/'.$bulan.'/'.$tanggal;
	}
}
if ( ! function_exists('tgl_jam_indo'))
{
	function tgl_jam_indo($tgl)
	{ 
		if($tgl)
		{
			$ubah = gmdate($tgl, time());
			$pecah2 = explode(" ",$ubah); 
			$pecah = explode("-",$pecah2[0]);  
			
			$tanggal = $pecah[2];
			$bulan = bulan($pecah[1]);
			$tahun = $pecah[0];
			$hari = nama_hari($tgl);
			return $hari.', '.$tanggal.' '.$bulan.' '.$tahun;
		}
	}
}

if ( ! function_exists('bulan'))
{
	function bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}

if ( ! function_exists('nama_hari'))
{
	function nama_hari($tanggal)
	{ 
		$ubah = gmdate($tanggal, time());
		$pecah2 = explode(" ",$ubah); 
		$pecah = explode("-",$pecah2[0]);
		$tgl = $pecah[2]; 
		$bln = bulan($pecah[1]);
		$thn = $pecah[0]; 
		

		$nama = date("l", mktime(0,0,0,$pecah[1],$tgl,$thn));
		$nama_hari = "";
		if($nama=="Sunday") {$nama_hari="Minggu";}
		else if($nama=="Monday") {$nama_hari="Senin";}
		else if($nama=="Tuesday") {$nama_hari="Selasa";}
		else if($nama=="Wednesday") {$nama_hari="Rabu";}
		else if($nama=="Thursday") {$nama_hari="Kamis";}
		else if($nama=="Friday") {$nama_hari="Jumat";}
		else if($nama=="Saturday") {$nama_hari="Sabtu";}
		return $nama_hari;
	}
}

if ( ! function_exists('hitung_mundur'))
{
	function hitung_mundur($wkt)
	{
		$waktu=array(	365*24*60*60	=> "tahun",
						30*24*60*60		=> "bulan",
						7*24*60*60		=> "minggu",
						24*60*60		=> "hari",
						60*60			=> "jam",
						60				=> "menit",
						1				=> "detik");

		$hitung = strtotime(gmdate ("Y-m-d H:i:s", time () +60 * 60 * 8))-$wkt;
		$hasil = array();
		if($hitung<5)
		{
			$hasil = 'kurang dari 5 detik yang lalu';
		}
		else
		{
			$stop = 0;
			foreach($waktu as $periode => $satuan)
			{
				if($stop>=6 || ($stop>0 && $periode<60)) break;
				$bagi = floor($hitung/$periode);
				if($bagi > 0)
				{
					$hasil[] = $bagi.' '.$satuan;
					$hitung -= $bagi*$periode;
					$stop++;
				}
				else if($stop>0) $stop++;
			}
			$hasil=implode(' ',$hasil).' yang lalu';
		}
		return $hasil;
	}
}


