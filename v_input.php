<!DOCTYPE html>
<html>
<head>
	<title>Vandevapp</title>
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>asset/css/bootstrap.min.css" type="text/css">
 <script src="<?php echo base_url()?>asset/css/bootstrap.js" type="text/javascript"></script>
</head>
<body>

<!-- INI ADALAH HEADER -->
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Vandevapp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Beranda</a></li>
            <li><a href="#">CodeIgniter</a></li>
            <li><a href="#">Php</a></li>
   <li><a href="#">Java</a></li>
   <li><a href="#">Android Studio</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <br><br><br><br><br>
<body>
	<center>
		<h1>Belajar CRUD Dengan CodeIgniter</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>