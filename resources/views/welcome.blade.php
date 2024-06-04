<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
    }
  }
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="br">
<meta name="description" content="Kingz4da e Kiuope ©">
<title>Dark Skulls</title>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../css/style.css"/>
	<script src="../js/script.js"></script>
	<link rel="shortcut icon" href="../img/icon.png"/>
</head>
<body class="banner">
	<header id="header">
		<div class="container">

			<div class="flex">
				<a href="#"><i class="bi bi-filter-left"></i></a>

				<nav>
					<ul>
						<li><a href="#">ÍNICIO</a></li>
						<li><a href="#">SOBRE NÓS</a></li>
						<li><a href="#">PROJETOS</a></li>
					</ul>
				</nav>

				<div class="btn-contato">
					<a href="#"><button>CONTATO</button></a>
				</div>

			</div> <!-- Flex -->

		</div> <!-- Container -->
	</header>


	<script src="../js/menu.js">
		
	</script>

</body>
</html>