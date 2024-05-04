<?php
namespace App\Controllers;

class education extends BaseController
{
    public function index(): string
    {
        return view('education');
    }
}