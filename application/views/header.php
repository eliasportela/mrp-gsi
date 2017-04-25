<!DOCTYPE html>
<html ng-app="contatooh">
<head>
	<title><?=$page?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/bootstrap/css/font-awesome.min.css')?>">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	 <!-- Navigation -->
  <header class="navbar navbar-light navbar-toggleable-md bd-navbar">
  <nav class="container">
    

    <div class="d-flex justify-content-between hidden-lg-up">
      <a class="navbar-brand" href="/">
        MRP
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bd-main-nav" aria-controls="bd-main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bd-main-nav">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-item nav-link " href="#/"><?=$page?></a>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="https://blog.getbootstrap.com">Sobre o Projeto</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<div class="jumbotron" style="background-color:#0275d8; color: white;">
    <h1 class="text-center">
      <?=$page?>
    </h1>
  </div>
          

	<script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/vendor/tether/js/tether.min.js')?>"></script>
	<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
  
</body>
</html>