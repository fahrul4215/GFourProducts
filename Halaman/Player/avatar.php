<?php
	session_start();

	if (!isset($_SESSION['User_name'])) {
		echo "<script type='text/javascript'>location.href = '../../';</script>";
	}
	else {
		include('../../assets/koneksi.php');

		$SQL_Player = "SELECT * FROM tb_player WHERE user_name_pl = '" .$_SESSION['User_name'] ."'";
		$CMD_Player = mysql_query($SQL_Player);
		if($DR = mysql_fetch_array($CMD_Player)) {
			$User_name = $DR['user_name_pl'];
			$Koin = $DR['_koin'];
			$Nama = $DR['nama_player'];
			$Style = $DR['_avatar'];
		}
?>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buat Avatarmu !!</title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/css/mj.css" rel="stylesheet">

   <style>
	body {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAUElEQVQYV2NkYGAwBuKzQAwDID4IoIgxIikAMZE1oRiArBDdZBSNMIXoJiFbDZYDKcSmCOYimDuNSVKIzRNYrUYOFuQgweoZbIoxgoeoAAcAEckW11HVTfcAAAAASUVORK5CYII=) repeat;
            background-color: #54b4eb;
            color: white;
            padding-bottom: 20px;
        }
.form-bottom form .input-error {
	border-color: #19b9e7;
}
	</style>

	<!-- jQuery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/js/mj.js"></script>
</head>

<body id="page-top" class="index">
<!-- navbar atas -->
	<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><img src="../../assets/image/best.png"/></a>
            </div>

           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
				<ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="page-top"></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#profil">Profil</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#liga">Liga</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#ranking">Ranking</a>
                    </li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<div class="t-ok-cash">
						<img src="../../assets/image/avatar/chip.png" style="display:inline-block;"/>&nbsp;<p style="display:inline-block;"><?php echo $Koin; ?></p>
						</div>
					</li>			
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<img src="../../assets/image/avatar/bandmember.html" class="img-circle person" alt="Random Name" width="25" height="25">
						<?php echo $Nama; ?>
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="../Proses/Logout.php">Keluar</a></li>
						</ul>
					</li>
				</ul>
				
            </div>
            
        </div>

    </nav>
<!-- Avatar -->
	<div class="container">
            <div class="row">
			<div class="w-t-avatar">
				<div class="preview">
					<div class="bold-avatar">
						
					</div>
				<div class="acak">
				<img src="../../assets/image/avatar/dice.png" width="32" height="32"/>
				</div>
				</div>
				<div class="menu">
						<!-- <div class="row">
						<div class="t-ok-cash">
						<img src=""/>&nbsp;<p>1,000,000</p>
						</div>
						</div> -->
					<div class="row">
					<ul class="nav nav-pills">
						<li><a data-toggle="tab" href="#tu">Tubuh</a></li>
						<li><a data-toggle="tab" href="#ra">Rambut</a></li>
						<li><a data-toggle="tab" href="#at">Atasan</a></li>
						<li><a data-toggle="tab" href="#ba">Bawahan</a></li>
						<li><a data-toggle="tab" href="#ak">Aksesoris</a></li>
						<li><a data-toggle="tab" href="#la">latar</a></li>
					</ul>
					</div>
					<div class="row">
						<div class="row">
							<div class="tab-content">
								<div id="tu" class="tab-pane fade in active">
									<div  class="cat-to-cat">
									<ul>
									<li><a data-toggle="tab" href="#kul">Kulit</a></li>
									<li><a data-toggle="tab" href="#mat">Mata</a></li>
									<li><a data-toggle="tab" href="#mul">Mulut</a></li>
									<li><a data-toggle="tab" href="#eks">Ekspresi</a></li>
									<li><a data-toggle="tab" href="#fea">Tambahan</a></li>
									</ul>
									</div>
									
									<div class="w-t-cat" onfocus="this">
									<div class="item">
									<div id="lock"></div>
									<img src="../../assets/image/avatar/1.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/2.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/3.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/4.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/5.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/6.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/7.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/8.png"/>
									</div>
									<div class="item">
									<img src="../../assets/image/avatar/9.png"/>
									</div>
									<div class="item">
									<div id="lock"></div>
									<img src="../../assets/image/avatar/10.png"/>
									</div>
								</div>
								</div>
								<div id="ra" class="tab-pane fade">
									<div  class="cat-to-cat">
									<ul>
									<li><a data-toggle="tab" href="#akep">Area Kepala</a></li>
									<li><a data-toggle="tab" href="#amul">Area Mulut</a></li>
									<li><a data-toggle="tab" href="#aali">Alis</a></li>
									</ul>
									</div>
        							<div class="w-t-cat" onfocus="this">
									</div>
								</div>
								<div id="at" class="tab-pane fade">
									<div  class="cat-to-cat">
									<ul>
									<li><a data-toggle="tab" href="#jaket">Jaket</a></li>
									<li><a data-toggle="tab" href="#kaos">Kaos</a></li>
									<li><a data-toggle="tab" href="#gaun">Gaun</a></li>
									<li><a data-toggle="tab" href="#sarung-t">Sarung Tangan</a></li>
									<li><a data-toggle="tab" href="#pakaian-d">Pakaian Dalam</a></li>
									</ul>
									</div>
		        					<div class="w-t-cat" onfocus="this">
									</div>
								</div>
								<div id="ba" class="tab-pane fade">
									<div  class="cat-to-cat">
									<ul>
									<li><a data-toggle="tab" href="#rok">Rok</a></li>
									<li><a data-toggle="tab" href="#celana">Celana</a></li>
									<li><a data-toggle="tab" href="#kaos-k">Kaos Kaki</a></li>
									<li><a data-toggle="tab" href="#sepatu">Sepatu</a></li>
									<li><a data-toggle="tab" href="#celana-d">Celana Dalam</a></li>
									</ul>
									</div>
		        					<div class="w-t-cat" onfocus="this">
									</div>
								</div>
								<div id="ak" class="tab-pane fade">
									<div  class="cat-to-cat">
									<ul>
									<li><a data-toggle="tab" href="#acc-kepala">Kepala</a></li>
									<li><a data-toggle="tab" href="#acc-wajah">Wajah</a></li>
									<li><a data-toggle="tab" href="#acc-belakang">Belakang</a></li>
									<li><a data-toggle="tab" href="#acc-leher">Leher</a></li>
									<li><a data-toggle="tab" href="#acc-tangan">Tangan</a></li>
									</ul>
									</div>
		        					<div class="w-t-cat" onfocus="this">
									</div>
								</div>
								<div id="la" class="tab-pane fade">
		        					<div class="w-t-cat" onfocus="this">
									</div>
								</div>
								<div class="w-t-ck"><a href="#" class="icon-left-open-big" id=""></a></div>
								<div class="w-t-cka"><a href="#" class="icon-right-open-big" id=""></a></div>
								<div class="hal">
										Halaman 1/9
								</div>
								
							</div>
							
						</div>
						<div class="row">
						<div class="warna-color">
										5 Warna
						</div>
						</div>
						<div class="row">
						<button class="butt SSimRRes sim">Simpan</button>
						<button class="butt SSimRRes res">Reset</button>
						</div>
					</div>
				</div>
			</div>
			</div>
	</div>
</body>
</html>
<?php
}
?>