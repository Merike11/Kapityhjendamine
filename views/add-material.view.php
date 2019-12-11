<?php

require('partials/head.php'); ?>

<?php foreach($ingredients as $ingredient) : ?>
	<li><?= $ingredient->name; ?></li>
<?php endforeach; ?>

	<h1>Materjali lisamine</h1>

<form method= "POST" action= "material">
<input name= "material_name">
</form>

<?php require('partials/footer.php'); ?>