<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Eclesiastic;

class ClasseController extends Controller
{
    public function details(Classe $classe)
    {
        $eclesiastics = Eclesiastic::where('classe_id', $classe->id)->get();

        return view('admin.classe.details', compact('classe', 'eclesiastics'));
    }
}
