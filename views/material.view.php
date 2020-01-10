<?php require('partials/head.php'); ?>

<?php $message = filter_input(INPUT_GET, 'message', FILTER_SANITIZE_STRING); ?>
<?php echo empty($message) ? "" : '<div class="alert alert-info">' . $message . '</div>'; ?>
<h1>Materjal</h1>

<table class="table" border="1">
<tr>
	<th>Nimetus</th>
	<th>Lisatud</th>
	<th>Muudetud</th>
	<th>Kustutatud</th>
</tr>

<?php if (!empty($ingredients)) : foreach($ingredients as $ingredient) : ?>
	<tr>
	<td><?= $ingredient->name; ?></td>
	<td><?= $ingredient->added; ?></td>
	<td><a href= "/material/edit?id=<?= $ingredient->ID; ?>">Muuda</a></td>
	<td><a href= "/material/delete?id=<?= $ingredient->ID; ?>">Kustuta</a></td>
	</tr>
<?php endforeach; endif; ?>
</table>
	
<?php if($_SESSION["is_logged_in"]) :?> 
	<h1>Materjali lisamine</h1>
	<form method= "POST" action= "addmaterial">
		<input name= "material_name">
	</form> 
<?php endif; ?>



<?php require('partials/footer.php'); ?>