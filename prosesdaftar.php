<html class="no-js">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    </style>
</head>
    <body>
    <?php
    include 'koneksi.php';
    function autonumber($tabel, $kolom, $lebar=0, $awalan=''){
    $host = "localhost";
    $usr = "root";
    $pwd = "";
    $dbname = "kuislogin";
    $koneksi = mysqli_connect($host, $usr, $pwd, $dbname);
    if(mysqli_connect_error()){
        echo 'database gagal dikoneksikan!'.mysqli_connect_error();
    }

    $auto = mysqli_query($koneksi,"select $kolom from $tabel order by $kolom desc limit 1") or die(mysqli_error());
    $jumlah_record = mysqli_num_rows($auto);
    if($jumlah_record == 0)
    $nomor = 1;
   
    else{
        $row = mysqli_fetch_array($auto);
        $nomor = intval(substr($row[0], strlen($awalan)))+1;
    }
    if($lebar>0)
        $angka = $awalan.str_pad ($nomor, $lebar, "0", STR_PAD_LEFT);
    else
        $angka=$awalan.$nomor;
    return $angka;
}
?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="prosesdaftar.php" class="brand">DAFTAR AJA DULU</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav pull-right">
                            <li>
                                <a href="prosesdaftar.php">Daftar</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="body-container">
                    <div id="body-content">
            <div class='container'>
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin" align="center">
                            <legend>Daftarkan Anda</legend>
                             <input class="btn btn-primary" type='button' id="mitra" data-toggle="modal" data-target="#b" value='Dafar'/>
                            <footer class="signin-actions">
                                    <h3>Jadilah Bagian Dari Kami</h3>
                                </footer>
                        <!-- Modal -->
    <!-- Modal -->
	<div id="b" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Daftar</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
                <form action='daftar.php' method='POST'>
                                    <div class="input-prepend">
                                        <span class="add-on" rel="tooltip" title="Username" data-placement="top"><a>ID :<a></span>
                                        <input type='text' class='span4' id='id' name='id' readonly value='<?= autonumber("pemakai", "id", "", "")?>'/>
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on" rel="tooltip" title="Username" data-placement="top"><a>Nama Lengkap :<a></span>
                                        <input type='text' class='span4' id='nama' name='nama' placeholder="Nama Lengkap"/>
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on" rel="tooltip" title="Username" data-placement="top"><a>USERNAME :<a></span>
                                        <input type='text' class='span4' id='username' name='username' placeholder="username"/>
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on" rel="tooltip" title="Username" data-placement="top"><a>Password :<a></span>
                                        <input type='password' class='span4' id='pass' name='pass' placeholder="poassword"/>
                                    </div>
                                    <div class="input-prepend">
                                        <select id='jabatan' name='jabatan'>
                                        <option value="mahasiswa">MAHASISWA</option>
                                        <option value="dosen">DOSEN</option>
                                        </select>
                                    </div>                
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' id="submit" value='Daftar'/>
                                </footer>
                            </form>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
				</div>
			</div>
		</div>
	</div>
   </div>
                        </div>
                        </div>
                        
              
            

                </div>
            </div>
    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
               
            </div>
        </footer>
        <script src="js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="js/jquery/virtual-tour.js" type="text/javascript" ></script>
        

	</body>
</html>
