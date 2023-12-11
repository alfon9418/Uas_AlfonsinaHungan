<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("pages.admin.index");
    }
    public function about()
    {
        return view("pages.admin.about");
    }
    public function products()
    {
        return view("pages.admin.products");
    }
    public function store()
    {
        return view("pages.admin.store");
    }
}