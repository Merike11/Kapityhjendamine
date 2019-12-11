<?php

class MaterialController
{
    public function index()
    {
        return view('material');
        {
            global $app;
            $ingredients = $app['database']->selectAll('ingredients');
            return view('material', compact('material'));
        }
    }

    public function store()
    {
        $app['database']->insert('ingredients', [
            'name' => $_POST['material_name']
        ]);
        return redirect('addmaterial');
    }
}    
