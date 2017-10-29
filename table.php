<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'iks'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}


require('TableValidate.php');
?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="table.php">

                     <img src="assets/img/Picture.png" />
                </a>

            </div>

            <div class="left-div">
               
                    

                        
                           <img src="assets/img/logo.gif" width="130" height="100"> 
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        


                    
                
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="halaman.php">Halaman Utama</a></li>
                            <li><a href="pelancongan.php">Pelancongan</a></li>
                            <li><a class="menu-top-active" href="table.php">Senarai IKS</a></li>
                            <li><a href="register.php">Daftar</a></li>
                             <li><a href="login.php">Log Masuk</a></li>
                            

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    
    <style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 3px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('simg src="assets/img/search-12-xxl.png" width="256" height="256"');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 3px 30px 5px 30px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
    
    
    
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data IKS Batu Pahat</h1>
                    </div>
                </div>
                <div class="row">
                    <form action="table.php" method="post">
                         <input type="text" name="valueToSearch"  placeholder="Search..">
                         <input type="submit" name="search" value="Submit"><br><br>
                    </form>
                  <!--   Kitchen Sink -->
    
  
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Senarai IKS Batu Pahat
                        </div>
                 <div class="panel-body">
                     
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Nama Penuh</th>
                                            <th>Nama Syarikat</th>
                                            <th>Alamat Syarikat</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                    <?php while($row = mysqli_fetch_array($search_result)):?>   
                                    <tr>
					                   <td><?php echo $row['id'];?></td>
					                   <td><?php echo $row['nama_penuh'];?></td>
					                   <td><?php echo $row['nama_syarikat'];?></td>
                                       <td><?php echo $row['alamat_surat_menyurat'];?></td>
					                   <td class="center"><button class="btn success"><a href="display.php">Butiran</a></button></td>
                                    </tr>
			                 <?php endwhile;?>
                                        
                                        
                    <?php
		              $no 	= 1;
		
		                  while ($row = mysqli_fetch_array($search_result))
		                       {
			
			                     echo '<tr>
					                   <td>'.$no.'</td>
					                   <td>'.$row['nama_penuh'].'</td>
					                   <td>'.$row['nama_syarikat'].'</td>
                                       <td>'.$row['alamat_surat_menyurat'].'</td>
					                   <td class="center"><button class="btn success"><a href="display.php">Butiran</a></button></td>
                                    </tr>';
			
			                     $no++;
		                      }?>
                            
                                        
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                     
                        </div>
                    </div>
                                          

                     <!-- End  Kitchen Sink -->
                </div>
       
                <div class="row">
               
                    <!-- End  Hover Rows  -->
                </div>
                <div class="col-md-6">
         
            </div>

        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>


