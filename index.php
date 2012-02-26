<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Paul Dijou | pTools</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/prettify.css">
	<link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/ptools.js"></script>

</head>

<body onload="prettyPrint()">
	<?php
		if(isset($_GET["page"])) {
			$page = $_GET["page"];
		}
		else {
			$page = "index";
		}
		
		function is_active($menu_page) {
			global $page;
			
			return ($page == $menu_page);
		}
	?>
	
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="?page=index">Paul Dijou - pTools</a>
				<ul class="nav">
					<li class="<?php if(is_active("escaper")) { echo('active'); } ?>">
						<a href="?page=escaper">Code Escaper</a>
					</li>
				</ul>
			</div>
		</div>
    </div>
	
	<div class="container well" style="margin-top:50px;">
		<?php
			include('pages/'.$page.'.php');
		?>
	</div>
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="span12">
					Powered by <a href="http://www.pauldijou.fr">Paul Dijou</a>, using <a href="http://twitter.github.com/bootstrap/index.html">Bootstrap from Twitter</a>.
				</div>
			</div>
		</div>
	</footer>
	
	<script>
		$("[rel='tooltip']").tooltip({
			placement:'right'
		});
	</script>
</body>

</html>