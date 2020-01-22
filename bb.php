<?php 
class bmi{

	function hitung($bmi, $kelamin){
		if ($kelamin=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi." = Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo $bmi." = Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." = Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." = Obesitas";
			}
		} elseif ($kelamin=="Perempuan") {
			if ($bmi<18) {
				echo $bmi." = Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi." = Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." = Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." = Obesitas";
			}
		}
	}

}
$bbi = new bmi(); 
if (isset($_POST['submit'])) {
	$nama =$_POST['nama'];
	$bb = $_POST['bb'];
	$tb = $_POST['tb'];
	$kelamin = $_POST['kelamin'];
	$bmi = $bb/($tb*$tb/10000);
	$bbi->hitung($bmi, $kelamin);
}
 ?>