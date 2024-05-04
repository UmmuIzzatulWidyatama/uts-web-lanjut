<?php
namespace App\Controllers;

class about_me extends BaseController
{
    public function index(): string
    {
        return view('about_me');
    }
}