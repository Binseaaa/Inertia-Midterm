<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CreditorController extends Controller
{
    public function index() {
        return Inertia::render('Creditors/Index');
    }

    public function create() {
        return Inertia::render('Creditors/Create');
    }
}
