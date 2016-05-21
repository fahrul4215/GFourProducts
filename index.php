<?php
    session_start();

    if (isset($_SESSION['User_name'])) {
        echo "<script type='text/javascript'>location.href = 'Halaman/Player/avatar.php';</script>";
    }
    else {
?>
<html>
    <head>
        <title>LatihOtak</title>
    	<meta charset="utf-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    	<meta name="description" content="Latih Otak"/>
        <meta name="author" content="Latih Otak"/>
        <meta property="og:site_name" content="Latih Otak"></meta>
    	<meta property="og:title" content="Latih Otak"></meta>
    	<meta property="og:type" content="website"></meta>
    	<meta property="og:url" content=""></meta>
    	<meta property="og:image" content=""></meta>
    	<meta property="og:locale" content="id_ID"></meta>
    	
    	<link rel="shortcut icon" href="">

    	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="assets/css/mj.css">

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            function Hilang() {
                $("#Logo_LO").fadeOut(500);
                // $("#Logo_LO").css("position", "absolute");
                // $("#Login_LO").css("margin-top", "250");
                // $("#Login_LO").css("margin-bottom", "67");
                // $("#Login_LO").css("position", "relative");
            }

            function Pindah() {
                $("#Logo_LO").css("z-index", "-10");
                $("#Login_LO").css("z-index", "10");
            }

            function Ada() {
                $("#Logo_LO").fadeIn(500);
                $("#Logo_LO").css("z-index", "10");
                $("#Login_LO").css("z-index", "-10");
                // $("#Logo_LO").css("position", "relative");
                // $("#Login_LO").css("margin-top", "-400px");
                // $("#Login_LO").css("margin-bottom", "0");
                // $("#Login_LO").css("position", "absolute");
            }
    	</script>
        <style>        
            body {
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAUElEQVQYV2NkYGAwBuKzQAwDID4IoIgxIikAMZE1oRiArBDdZBSNMIXoJiFbDZYDKcSmCOYimDuNSVKIzRNYrUYOFuQgweoZbIoxgoeoAAcAEckW11HVTfcAAAAASUVORK5CYII=) repeat;
                background-color: #54b4eb;
                color: white;
                padding-bottom: 20px;
            }

            .wrapper-logo-login {
                width: 100%;
                height: 510px;
            }
    		
    		.wrap-t-form{
    			width: 90%;
    			padding-left:65px;
    			margin-top:-12px;
    			
    		}
            .logo-login {
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAUElEQVQYV2NkYGAwBuKzQAwDID4IoIgxIikAMZE1oRiArBDdZBSNMIXoJiFbDZYDKcSmCOYimDuNSVKIzRNYrUYOFuQgweoZbIoxgoeoAAcAEckW11HVTfcAAAAASUVORK5CYII=) repeat;
                background-color: #54b4eb;
                position: absolute;
                margin: auto 31.8%;
                width: 500px;
                height: 500px;
    		}		
    		.wrap-s-t{
    			position:relative;
    			text-align:center;
    			margin : auto 15%;
    			top:5px;
    			width:70%;
    		}
        </style>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="wrapper-logo-login">
                        <div id="Logo_LO" class="logo-login" style="z-index:10;" onmouseover="Hilang()" onmouseout="Pindah()">
                           <img src="assets/image/Logo.png" id="logo">
                        </div>
                        <div id="Login_LO" class="row logo-login" style="z-index:-10;" onmouseleave="Ada()">
        					<img src="assets/image/BorderLogo.png" id="logo" style="z-index:-11; position:absolute;">
        					<div class="wrap-t-form">
                                <form name="login" id="login" novalidate="" class="form-login" action="http://localhost/GFour_Products/LatihOtak2/Halaman/Proses/Login.php" method="post" style="padding:0px 42px 0px 42px;">
                                    <div class="row control-group" >
                                        <div class="form-group floating-label-form-group controls">
                                            <p class="help-block text-danger"></p>
                                            <label>Nama Pengguna</label>
                                            <input type="text" name="username" class="form-control" placeholder="Nama Pengguna" data-validation-required-message="Masukkan Username Anda" aria-invalid="false" maxlength="15" required>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group floating-label-form-group controls">
                                            <label>Kata Sandi</label>
                                            <input type="password" name="password" class="form-control" placeholder="Kata Sandi" data-validation-required-message="Masukkan Password Anda" aria-invalid="false" maxlength="15" required>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group" style=" text-align:center; margin-right:5px;">
                                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Ingat saya</label>&nbsp;&nbsp;|&nbsp;&nbsp;<label><a href="Halaman/daftar.php" style="color:#FFF;">Belum punya akun?</a></label>
                                    </div>
                                    <div id="success"></div>
                                    <div class="row">
                                        <div class="form-group" style=" text-align:center;">
                                            <button type="submit" class="btn btn-success btn-lg" style="margin-right:15px;">Masuk</button>
                                        </div>
                                    </div>
                                </form>
        					</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="navbar">
                    <div class="row">
                        <a data-toggle="tab" href="#bd">
                            <div class="col-md-4 menu">
                                Beranda
                            </div>
                        </a>
                        <a data-toggle="tab" href="#cm">
                            <div class="col-md-4 menu">
                                Cara Main
                            </div>
                        </a>
                        <div class="clearfix visible-xs-block"></div>
                        <a data-toggle="tab" href="#tk">
                            <div class="col-md-4 menu">
                                Tentang Kami
                            </div>
                        </a>
                    </div>
    			</div>
        		<div class="row">
        			<div class="tab-content">
                        <div id="bd" class="tab-pane fade in active">
        	               <div class="flexslider wrap-s-t">
        	                	<ul class="slides">
        	                  		<li class="logo_quotes">
        	                  			<h2>Admin Upah</h2>
        			                    <h5>Kebijaksanaan bukanlah dilihat dari usia, tapi dilihat dari pengalaman dan pengetahuannya</h5>
        		    				</li>
        		    				<li class="logo_quotes">
        				    	        <h2>Admin CrazzHole</h2>
        			                    <h5>Satu-satunya kegagalan didunia ini adalah ketika kita berhenti untuk belajar</h5>
        		    				</li>
        		    				<li class="logo_quotes">
        				    	    	<h2>Admin Thogx</h2>
        				            	<h5>Kualitas latihan anda menentukan kualitas prestasi anda</h5>
        		    				</li>
        	      				</ul>
        	               </div>
                        </div>
                        <div id="cm" class="tab-pane fade">
                            <div class="wrap-t-t" onfocus="this">
            					<h3>Cara Main</h3>
                            </div>
                        </div>
                        <div id="tk" class="tab-pane fade">
                            <div class="wrap-t-t" onfocus="this">
                                <h3 style="color: black;">Latih Otak</h3>
                                <img src="assets/image/Logo.png" style="width:125px;height:125px;left:0;">
                                <p style="color: black;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                        </div>
        			</div>
        		</div>
            </div>
        </header>
    	
    	<br>
    	<center>
            <div style="width:720px;height:90px;background-color:#8c8c8c; font-family:Rampung;">
        		<h2 style="color:black;padding: 34px;">720 x 90</h2>
        	</div>
        	<!--Q-ot-->
        	<div class="qu-ot">
        		<h2>Latih Otak</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante venenatis.</p>
        	</div>
        	<div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <ul class="social">
                    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    	<li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    	<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
            	</div>
            	<div class="col-md-4"></div>
        	</div>
        	
            <footer class="row w-t-foo">
                <p class="col-md-12 col-sm-12 col-xs-12">Latih Otak &copy; 2016</p>
        	</footer>
    	</center>
    	
    	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="assets/js/mj.js"></script>
    	<script defer src="assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
    	$(function(){
    	      SyntaxHighlighter.all();
    	    });
    	    $(window).load(function(){
    	      $('.flexslider').flexslider({
    	        animation: "slide",
    	        start: function(slider){
    	          $('body').removeClass('loading');
    	        }
    	      });
    	    });
        </script>
    </body>
</html>
<?php
}
?>