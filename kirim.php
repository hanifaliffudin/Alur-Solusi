<?php
if(isset($_POST['submit'])){
	$admin = 'support@alursolusi.com'; //ganti email dg email admin (email penerima pesan)
	
	$name	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$subject	= 'Contact Us Website';
	$message	= "Nama: ". $name ."\nEmail: ".$email. "\nPesan: ".htmlentities($_POST['message']);" " ;

	$pengirim .= 'From: <'.$email.'>' . "\r\n";
	
	if(mail($admin, $subject, $message, $pengirim)){
		header("Location: /");
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="/">Kembali</a>';
	}
}else{
	echo "Error";
	// header("Location: index.php");
}
?>