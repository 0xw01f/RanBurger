<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class BurgerController extends Controller
{
    public function list() {
        
        $breads = Ingredient::inRandomOrder()->where('type' , '=', 'bread')->limit(1)->get();
        $meatFishEggs = Ingredient::inRandomOrder()->where('type' , '=', 'mfe')->limit(rand(1,2))->get();
        $vegetables = Ingredient::inRandomOrder()->where('type' , '=', 'vegetable')->limit(1)->get();
        $sauces = Ingredient::inRandomOrder()->where('type' , '=', 'sauce')->limit(1)->get();
        $cheeses = Ingredient::inRandomOrder()->where('type' , '=', 'cheese')->limit(rand(1,2))->get();
        $extras = Ingredient::inRandomOrder()->where('type' , '=', 'extra')->limit(1)->get();
        
        $ingredients = Ingredient::inRandomOrder()->limit(2)->get();
        
        return view('create.index', [
            'breads' => $breads,
            'meatfisheggs' => $meatFishEggs,
            'vegetables' => $vegetables,
            'sauces' => $sauces,
            'cheeses' => $cheeses,
            'extras' => $extras,
        ]);
    }

    public function store() {

        request()->validate([
            'name' => 'required|min:2|max:25',
            'type' => 'required|min:2|max:15',
            'price' => 'required|max:50|numeric|regex:(\d+\.?\d{1,2})',
            'veggie' => 'boolean',
        ]);



        $name = request('name');
        $type = request('type');
        $price = request('price');
        $veggie = request('veggie');

        if (!$veggie == 1) {
            $veggie = '0';
        }

        $ingredient = new Ingredient();

        $ingredient->name = $name;
        $ingredient->type = $type;
        $ingredient->price = round($price,2);
        $ingredient->veggie = $veggie;

        $ingredient->save();

        return back();
    }
}
