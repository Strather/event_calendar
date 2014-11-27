<?php

include_once('GeneralTags.php');

function showPriceBracketAlterGui($mode, $data, $message) {
	$id = 0;
	$name = '';
	$price = 0;
	
	if($data != null) {
		$id = $data->getId();
		$name = $data->getName();
		$price  = $data->getPrice();
	}
?>
<html>
<head>
	<?php getHeadTags(); ?>
</head>
<body>
<?php getHeader(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php getNavMenu(NAVBAR_SELECTION_PRICE_BRACKET); ?>
		</div>
		<div class="col-sm-9">
			<h1 class="page-header">Preisgruppen</h1>
<?php
	if($message != null) {
?>
			<div class="<?php echo $message->getClassAlert(); ?>"><?php echo $message->getText(); ?></div>
<?php
	}
?>
			<form method="post" action="../domain/PriceBracket.php">
				<input type="hidden" name="mode" value="<?php echo $mode; ?>" />
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
				<table class="table">
					<tr>
						<td class="col-sm-2 text-right no-border">
							Name:
						</td>
						<td class="col-sm-4 no-border">
							<input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required="required" maxlength="50" <?php if($mode === MODE_DELETE){ echo 'readonly="readonly"'; } ?> />
						</td>
						<td class="col-sm-6 no-border"></td>
					</tr>
					<tr>
						<td class="col-sm-2 text-right no-border">
							Preis:
						</td>
						<td class="col-sm-4 no-border">
							<input type="number" class="form-control" name="price" min="0" max="900" step="0.05" value="<?php echo $price; ?>" required="required" <?php if($mode === MODE_DELETE){ echo 'readonly="readonly"'; } ?> />
						</td>
						<td class="col-sm-6 no-border"></td>
					</tr>
					<tr>
						<td class="col-sm-2 text-right no-border"><?php if($mode === MODE_DELETE){ echo 'Wirklich löschen?'; } ?></td>
						<td class="col-sm-4 no-border">
							<p>
<?php 						
							if ($mode === MODE_NEW) {
?>
								<input type="submit" class="btn btn-success" name="price_bracket_save" value="Speichern"/>
								<!--<input type="submit" class="btn btn-danger" name="price_bracket_cancel" value="Abbrechen"/>-->
								<a class="btn btn-danger" href="../domain/PriceBracket.php">Abbrechen</a>
<?php 						
							} else if($mode === MODE_EDIT) {
?>
								<input type="submit" class="btn btn-success" name="price_bracket_save" value="Speichern"/>
								<a class="btn btn-danger" href="../domain/PriceBracket.php">Abbrechen</a>
<?php
							} else if($mode === MODE_DELETE) {
?>
								<input type="submit" class="btn btn-success" name="price_bracket_save" value="Ja"/>
								<a class="btn btn-danger" href="../domain/PriceBracket.php">Nein</a>
<?php 						
							}
?>
							</p>
						</td>
						<td class="col-sm-6 no-border"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
<?php
	}
?>