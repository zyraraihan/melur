<?php
    require_once 'dbConfig.php';
    require_once 'global_vars.php';

    $search_kp = $_POST["search_kp"];

    $servename = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iks";
    
    $namapenuh = ''; $nokp = ''; $jantina = ''; $namasyarikat = ''; $no_pendaftaransyarikat = ''; $tarikhluputpendaftaran = '';
        $alamatsuratmenyurat = ''; $poskod = ''; $daerah = ''; $negeri = ''; $dun = ''; $parlimen = ''; $no_tel = ''; $no_faks= '';
            $email = '';

    //Create Connection
    $conn = new mysqli(HOST, USER, '', DBNAME);
    //Check Connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    if (isset($_POST["search"])) {
        if (!empty($_REQUEST['search_kp'])) {
        $search_kp = mysqli_real_escape_string($conn, $_REQUEST['search_kp']);
        $sql = "SELECT * FROM user WHERE ic LIKE '%".$search_kp."%'";
        $r_query = $conn->query($sql);
        
        while ($row = $r_query->fetch_assoc()) {
            $namapenuh  = $row["nama_penuh"];
            $nokp  = $row['ic'];
            $jantina  = $row['jantina'];
            $namasyarikat  = $row['nama_syarikat'];
            $no_pendaftaransyarikat  = $row['no_pendaftaran_syarikat'];
            $tarikhluputpendaftaran  = $row['tarikh_luput_pendaftaran'];
            $alamatsuratmenyurat  = $row['alamat_surat_menyurat'];
            $poskod  = $row['poskod'];
            $daerah  = $row['daerah'];
            $negeri  = $row['negeri'];
            $dun  = $row['dun'];
            $parlimen  = $row['parlimen'];
            $no_tel  = $row['no_telefon'];
            $no_faks  = $row['no_faks'];
            $email  = $row['email'];
        }
    }
       $conn->close();
    }
    
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
    
     <style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA   ;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button2:hover {
    background-color: #f44336;
    color: white;
}

</style>
    
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html"> Admin </a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
                        
                        
	                  <div class="input-group form">
                           
          
	                  </div>
	                </div>
                 </div>
	           </div>
	           <div class="col-md-2">
                   
                   <div class="navbar navbar-inverse" role="banner">
                       
                              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="glyphicon glyphicon-bell"></i>
            <span class="d-lg-none">
              <span class="badge badge-pill badge-warning">New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Nama Company</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small"><button class="button button1">Accept</button><button class="button button2">Reject</button></div>
           
            <div class="dropdown-divider"></div>
            
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Nama Company</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small"><button class="button button1">Accept</button><button class="button button2">Reject</button></div>
            
           
          </div>
        </li>
                       
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                          
	                    <ul class="nav navbar-nav">
                            
                            <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="login.php">Logout</a></li>
                              <li><a href="login.php">Setting</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.php"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="tables.php"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                 
                   
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			
		  		</div>

		  		<div class="col-md-6">
		  			
		  				
		  			
		  			<div class="row">
		  				<div class="col-md-12">
		  					
				  			
		  				</div>
		  			</div>
		  		</div>
		  	</div>

              <body>
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Daftar Pengguna</div>	
		  			</div>
                     <div class="content-box-large box-with-header">
			  			<br />
							<form class="form-horizontal" role="form" method="post">
								<div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">NAMA PENUH :</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputText" placeholder="Nama MYKAD" name="namapenuh" value="<?php echo $namapenuh; ?>" />
								    </div>
								</div>

								<div class="form-group">
									<label for="nokp" class="col-sm-2 control-label">NO KP :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="nokp" value="<?php echo $nokp; ?>" />
										</div>
								</div>

                                <div class="form-group">
								    <label class="col-sm-2 control-label">JANTINA :</label>
								    <div class="col-sm-10">
										<input type="radio" name="jantina" value = "Lelaki" <?= strtolower($jantina) == "lelaki" ? 'checked' : '' ?>/>Lelaki<br>
                                        <input type="radio" name="jantina" value = "Perempuan" <?= strtolower($jantina) == "perempuan" ? 'checked' : '' ?>/>Perempuan<br>
								    </div>
								</div>
								
								<div class="form-group">
									<label for="namasyarikat" class="col-sm-2 control-label">NAMA SYARIKAT :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="namasyarikat" value="<?php echo $namasyarikat; ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="nopendaftaransyarikat" class="col-sm-2 control-label">NO PENDAFTARAN SYARIKAT :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="nopendaftaransyarikat"  value="<?php echo $no_pendaftaransyarikat ; ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="tarikhluputsyarikat" class="col-sm-2 control-label">TARIKH LUPUT SYARIKAT :</label>
										<div class="col-sm-10">
										  <input type="date" class="form-control" id="inputText" placeholder="" name="tarikhluputsyarikat" value="<?php echo $tarikhluputpendaftaran; ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="alamatsyarikat" class="col-sm-2 control-label">ALAMAT SURAT MENYURAT :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="alamatsyarikat" value = "<?php echo $alamatsuratmenyurat ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="poskod" class="col-sm-2 control-label">POSKOD :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="poskod" value = "<?php echo $poskod ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="daerah" class="col-sm-2 control-label">DAERAH :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="daerah" value = "<?php echo $daerah ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="negeri" class="col-sm-2 control-label">NEGERI :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="negeri" value = "<?php echo $negeri ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="dun" class="col-sm-2 control-label">DUN :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="dun" value = "<?php echo $dun ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="parlimen" class="col-sm-2 control-label">PARLIMEN :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="parlimen" value = "<?php echo $parlimen ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="notel" class="col-sm-2 control-label">NO. TEL :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="notel" value = "<?php echo $no_tel ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="nofaks" class="col-sm-2 control-label">NO. FAKS :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="nofaks" value = "<?php echo $no_faks ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">EMAIL :</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" id="inputText" placeholder="" name="email" value = "<?php echo $email ?>" />
										</div>
								</div>
								
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">KATA LALUAN :</label>
										<div class="col-sm-10">
										  <input type="password" class="form-control" id="inputText" placeholder="" name="katalaluan" value = "<?php echo $katalaluan ?>" />
										</div>
								</div>
                                
								<hr class="divider"></hr>
									<center>
									SEARCH: <input type="text" name="search_kp"  placeholder="NO KP">
									<br><br><input type="submit" name="search" value="SEARCH" class="btn">
								</center>
							</form>
		  		</div>
		  	</div>

		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
                                                  
                                                  
