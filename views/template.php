<html>
	<head>
		<meta charset="UTF-8">
		<title>Padrão MVC</title>
	<!--	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One|IBM+Plex+Mono" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/template.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 bar-left">
					<div class="internal-bar">
						<div class="logo">
							<img src="<?php echo BASE; ?>assets/img/img-default.png" />
						</div>
						<div class="menu-list">
							<ul>
								<li class="active"><a  href="#">Home</a></li>
								<li ><a  href="#">Sobre</a></li>
								<li ><a  href="#">Portfolio</a></li>
								<li ><a href="#">Contato</a></li>
							</ul>
						</div>
					</div>
					<div class="footer">
						Todos os diretos reservados
					</div>
				</div>
				<div class="col-sm-10">
						<?php $this->loadViewInTemplate($viewName, $viewData); ?>
				</div>
			</div>
		</div>
		</div>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>
		<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
	</body>
</html>
		
