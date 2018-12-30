<?php 
class Kirim{
	
	public $email,
	       $subject,
	       $pesan;
	       
	public function __construct($email,$subject,$pesan){
		$this->email = $email;
		$this->subject = $subject;
		$this->pesan = $pesan;
	} 
	function getinfo(){
		if( mail($this->email,$this->subject,$this->pesan) ){
		echo "\nemail succes dikirim";
	}
	else{
		echo "\nemail gagal dikirim";
	}
	  
	}
	
}
$kirim1 = new kirim("elafgaming@gmail.com","Aktivasi","Heloo Word");
$kirim2 = new kirim("anggasayogosm@gmail.com","Aktivasi","coli Word");
$kirim3 = new kirim("ruangnime@gmail.com","Aktivasi","Heloo Word");
$kirim4 = new kirim("anggsayogosm@yahoo.com","Aktivasi","Heloo Word");
$kirim5 = new kirim("ajutsiteror@gmail.com","Aktivasi","Moorning Word");
echo $kirim1->getinfo();
echo $kirim2->getinfo();
echo $kirim3->getinfo();
echo $kirim4->getinfo();
echo $kirim5->getinfo();
?>