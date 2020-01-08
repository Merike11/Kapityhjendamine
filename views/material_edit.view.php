<?php 
print_r($ingredient);?>

    <h1>Materjali andmete muutmine:</h1>
    <h2>muudetav:</h2>

<form method= "POST" action= "editingredient">
    <input name= "material_name" value= "<?= $ingredient->name; ?>">
    <input type= "hidden" name= "id" value="<?= $ingredient->ID; ?>">
    <input type= "submit" name= "submit" value= "Salvesta">
    
</form>




