<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('a-propos', [
            'auteur' => 'Prenom Nom',
            'groupe' => 'MDW32',
        ]);
    }
    public function time()
    {
        $heure = now()->format('H:i');
        $date = now()->format('d/m/Y');

        return view('heure', compact('heure', 'date'));
    }
}