<?php

class PagesController
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        $company = 'Kuressaare Ametikool';
        return view('about', ['company' => $company]);
    }
    public function contact()
    {
        $company = 'Kuressaare Ametikool';
        return view('contact', ['company' => $company]);
    }
    public function addmaterial()
    {
        return view('add-material');
    }
    public function feedback()
    {
        return view('feedback');
    }
} 