<?php

class MaterialController
{
    public function index()
    {
        global $app;
        $ingredients = $app['database']->selectAll('ingredients');
        return view('material', compact('ingredients'));
    }

    public function store()
    {
        global $app;
        $app['database']->insert('ingredients', [
            'name' => $_POST['material_name']
        ]);
        header('Location: /addmaterial');
    }
    public function edit()
    {
        global $app;
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $ingredient = $app['database']->selectById('ingredients', $id);
        return view('material_edit', compact('ingredient')); 
             
    }    
    public function editingredient()
    {
        global $app;
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $ingredient = $app['database']->selectById('ingredients', $id);
        $app['database']->updateById('ingredients', $id, [
            'name' => $_POST['material_name']
        ]);
        header('Location: /addmaterial');
    }
    public function delete()
    {
        global $app;
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $ingredient = $app['database']->selectById('ingredients', $id);
        if (is_object($ingredient))
        {
            $dbresult = $app['database']->deleteById('ingredients', $ingredient->ID);
            $result = 'saab kustutada';
        }
        $result = empty($result) ? 'Mida pole, seda ei saa kustutada!' : $result;
        //header('Location: /addmaterial?message='.$result);
        ?><meta http-equiv= "refresh" content= "0; URL='/addmaterial?message=<?php echo $result; ?>'"/><?php        
    }
        
        //header('Location: /addmaterial');
    
}    
