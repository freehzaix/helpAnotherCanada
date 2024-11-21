<!DOCTYPE HTML>
<html lang="fr">
<head>
	<title>S'inscrire - Portail des membres</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Se connecter - Portail des membres" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="{{ asset('login-membre/css/style.css') }}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{ asset('login-membre/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1>Portail des membres</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="{{ asset('login-membre/images/user.png') }}" alt="" />
				</div>
				<form action="{{ route('register.membre.post') }}" method="post">
                    @csrf
					<p class="legend">Création d'un compte<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="nom" placeholder="Nom" name="nom" required />
						<span class="fa fa-user"></span>
					</div>
					<div class="input">
						<input type="email" placeholder="Adresse mail" name="email" required />
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Mot de passe" name="password" required />
						<span class="fa fa-lock"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				<a href="{{ route('login') }}" class="bottom-text-w3ls">Se connecter maintenant.</a>
			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2024 Portail des membres. All rights reserved | Design by
				<a href="#" target="_blank">AP2S Technologie</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>
</body>

</html>