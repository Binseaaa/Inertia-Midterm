<?php

namespace App\Http\Controllers;

use App\Models\Creditor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CreditorController extends Controller
{
    public function index() {
        $creditor = Creditor::orderBy('id')->get();

        return Inertia::render('Creditors/Index', [
            'creditor' => $creditor
        ]);
    }

    public function create() {
        return Inertia::render('Creditors/Create');
    }

    function Show(Creditor $creditor) {
        // sleep(3);
        return inertia('Creditors/Show', ['creditor' => $creditor]);
    }
}
