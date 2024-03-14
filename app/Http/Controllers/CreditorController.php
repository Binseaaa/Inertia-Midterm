<?php

namespace App\Http\Controllers;

use App\Models\Creditor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CreditorController extends Controller
{
    public function index() {
        $creditor = Creditor::orderBy('id')->get();

        return inertia('');
    }

    public function create() {
        return Inertia::render('Creditors/Create');
    }
}
