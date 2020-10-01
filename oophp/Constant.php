<?php 

define('NAMA', 'Tamzid Anas Yudistira');
echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR;
class Coba {
const NAMA = 'Anas';
}

echo Coba::NAMA;

function Coba() {
	return __FUNCTION__;
}

echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>