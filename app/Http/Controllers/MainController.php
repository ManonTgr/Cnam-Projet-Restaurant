<?php

namespace App\Http\Controllers;


use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $actus = Actu::all();

        return view('home', [
            'actus' => $actus,
        ]);
    }

    public function menu()
    {
        $categories = Categorie::all();

        return view('menu', [
            // variables qui peuvent être utilisées dans le template
            'categories' => $categories,
        ]);

        
    }
    public function plat(int $id)
    {
        $plat = Plat::find($id);

        return view('plat', [
            'plat' => $plat,
        ]);
    }

    public function reservation()
    {
        return view('reservation');
    }


    public function reservationStore(Request $request)
    {


        $validated = $request->validate([
            'nom' => 'required',
            'couverts' => 'required',
            'heure' => 'required',
            'jour' => 'required',
            'telephone' => 'required',
            'commentaires' => '',

        ]);

        dd($validated);
    }
}
