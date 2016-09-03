<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body class="fondo">
	
	<script src="js/bootstrap.js"></script>
	<header>
		<div class="jumbotron transparente">
			<div class="container">
				<div class="row">
					<div class="col-md--offset-1">
						<img class="logo-cuc" src="images/LogoCUC.png">
							
					</div>
					<div class="col-md-9">
						<h1 class="text-center ">Software Gestión de Visitas</h1>	
					</div>	
				</div>
			</div>
		</div>
	</header>

	<div class="container-fluid body">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card img-responsive" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recuerdame
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar Sesión</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste tu Contraseña?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->

	

	
</body>
</html>