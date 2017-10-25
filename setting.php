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
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Admin</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Setting </h6>
                            
                            <form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail" class="col-sm-2 control-label">NAMA PENGGUNA:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputText" placeholder="Nama Pengguna">
								    </div>
								  </div>
                               </form>
                            
                             <form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail" class="col-sm-2 control-label">KATA LALUAN:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputText" placeholder="Kata Laluan Lama">
								    </div>
								  </div>
                               </form>
                            
                             <form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail" class="col-sm-2 control-label">KATA LALUAN BARU:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputText" placeholder="Kata Laluan Baru">
								    </div>
								  </div>
                               </form>
                            
                            
			                
			                <div class="action">
			                    <a class="btn btn-primary signup" href="login.php">Hantar</a>
			                </div>                
			            </div>
			        </div>

			        
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>