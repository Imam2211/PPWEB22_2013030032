<?php  
	/*$_FILES["fileToUpload"]["tmp_name"];*/
	$target_dir = "foto/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	//cek tipe file
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	if($imageFileType=='jpg'){
		//cek ukuran file
		if ($_FILES["fileToUpload"]["size"] < 1024000){
			//ubah nama file
			$target_file = $target_dir . 'foto.jpg';

			//Upload File
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
				echo "Upload File Berhasil" ;
				echo "<script>alert('Upload File Berhasil');history.go(1);</script>";
				//MENAMPILKAN FOTO
			 	echo "<img src='". $target_dir. "foto.jpg'>" ;	
			}
			else
				echo "Upload File Gagal";
		}
			else
				echo "Upload File Gagal. Ukuran File Melebihi 1Mb" ;
	}
			else
				echo "Upload File Gagal. File Harus dalam format JPG ";
			
	
?>