<?php
	include("koneksi.php");
	if(isset($_POST['edit'])){
	    $id=$_POST['id_penyewa'];
	    $nama_penyewa=$_POST['nama_penyewa'];
	    $alamat=$_POST['alamat'];
	    $genre_film=$_POST['genre_film'];
	    $judl_film=$_POST['judl_film'];
	    $tahun_film=$_POST['tahun_film'];
	    $tanggal_sewa=$_POST['tanggal_sewa'];
	    $tanggal_kembali=$_POST['tanggal_kembali'];
	    $harga=$_POST['harga'];
	
	
	    $sql = "UPDATE tb_penyewa SET nama_penyewa='$nama_penyewa', alamat='$alamat' WHERE id_penyewa='$id'";
	    $query= mysqli_query($koneksi,$sql);
	
	    $sql = "UPDATE tb_dvd SET genre_film='$genre_film', judl_film='$judl_film', tahun_film='$tahun_film', tanggal_sewa='$tanggal_sewa', tanggal_kembali='$tanggal_kembali', harga='$harga' WHERE id_dvd='$id'";
	    $query= mysqli_query($koneksi,$sql);
	
	    
	    if($query){
	        header('Location:tampil.php');
	    }else{
	        die ("gagal mengedit");
	    }}
	    else{
	        die ("akses dilarang");
	    }
	?>