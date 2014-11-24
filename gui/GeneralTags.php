<?php function getHeadTags() { ?>
	<!--Meta-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Rosario Brancato" />
	
	<!--Google jQuery csn-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!--My CSS-->
	<link rel="stylesheet" href="../css/stile.css" type="text/css" />
	
	<!--Titel-->
	<title>Event-Kalender</title>
<?php 
}
 
    function getHeader() {
?>
        <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
				<div class="navbar-header">
					<a class="navbar-brand logo" href="../index.php"><strong>Event-Kalender</strong></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
					   <span class="icon-bar glyphicon glyphicon-list"></span>
					</button>
				</div>	
<?php
        if(isset($_SESSION['username'])) {
?>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<p class="navbar-text">Hallo <?php echo $_SESSION['username']; ?></p>
						</li>
						<li>
							<form method="post" action="../domain/LogOut.php" class="navbar-form">
								<input type="submit" class="btn btn-warning" name="log_out" value="Abmelden"/>
							</form>
						</li>
					</ul>
				</div>
<?php
        }
?>
			</div>
        </nav>
<?php  
    }
	
	function getNavMenu($activeNode) {
?>
	<div class="collapse navbar-collapse" id="navigationbar">
		<ul class="nav nav-pills nav-stacked">
			<li role="presentation" class="sidebar-text <?php if($activeNode === NAVBAR_SELECTION_EVENT) { echo 'active'; } ?>"><a href="../domain/Event.php">Veranstaltungen</a></li>
			<li role="presentation" class="sidebar-text <?php if($activeNode === NAVBAR_SELECTION_PRICE_BRACKET) { echo 'active'; } ?>"><a href="../domain/PriceBracket.php">Preisgruppen</a></li>
			<li role="presentation" class="sidebar-text <?php if($activeNode === NAVBAR_SELECTION_GENRE) { echo 'active'; } ?>"><a href="../domain/Genre.php">Genre</a></li>
			<li role="presentation" class="sidebar-text <?php if($activeNode === NAVBAR_SELECTION_PERFORMANCE) { echo 'active'; } ?>"><a href="../domain/Genre.php">Vorstellungen</a></li>    				
			<li role="presentation" class="sidebar-text <?php if($activeNode === NAVBAR_SELECTION_LINK) { echo 'active'; } ?>"><a href="../domain/Link.php">Links</a></li>
		</ul>
		<ul class="nav nav-pills nav-stacked">
			<li role="presentation">
				<form method="post" action="../domain/LogOut.php" class="navbar-form">
					<input role="presentation" type="submit" class="btn btn-warning visible-xs" name="log_out" value="Abmelden"/>
				</form>
			</li>
		</ul>
    </div>
<?php
	}
?>