<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class BurgerController extends Controller
{
    public function list() {
        
        $ingredients = Ingredient::all();

        return view('create.index', [
            'ingredients' => $ingredients
        ]);
    }

    public function store() {

        request()->validate([
            'iName' => 'required',
            'iType' => 'required',
            'iPrice' => 'required',
        ]);

        $iName = request('iName');
        $ingredient = new Ingredient();

        $ingredient->name = $iName;
        $ingredient->save();

        return back();
    }
}
