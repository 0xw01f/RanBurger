<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class BurgerController extends Controller
{

    public function update($isVeggie) {

        // Maybe improve this mess with a __construct ??...
        
        // If = 1
        if($isVeggie) {
            $breads = Ingredient::inRandomOrder()->where('type' , '=', 'bread')->where('veggie' , '=', '1')->limit(1)->get();
            $meatFishEggs = Ingredient::inRandomOrder()->where('type' , '=', 'mfe')->where('veggie' , '=', '1')->limit(rand(1,2))->get();
            $vegetables = Ingredient::inRandomOrder()->where('type' , '=', 'vegetable')->where('veggie' , '=', '1')->limit(rand(1,3))->get();
            $sauces = Ingredient::inRandomOrder()->where('type' , '=', 'sauce')->where('veggie' , '=', '1')->limit(1)->get();
            $cheeses = Ingredient::inRandomOrder()->where('type' , '=', 'cheese')->where('veggie' , '=', '1')->limit(rand(1,2))->get();
            $extras = Ingredient::inRandomOrder()->where('type' , '=', 'extra')->where('veggie' , '=', '1')->limit(1)->get();
        } else {
            $breads = Ingredient::inRandomOrder()->where('type' , '=', 'bread')->limit(1)->get();
            $meatFishEggs = Ingredient::inRandomOrder()->where('type' , '=', 'mfe')->limit(rand(1,2))->get();
            $vegetables = Ingredient::inRandomOrder()->where('type' , '=', 'vegetable')->limit(rand(1,3))->get();
            $sauces = Ingredient::inRandomOrder()->where('type' , '=', 'sauce')->limit(1)->get();
            $cheeses = Ingredient::inRandomOrder()->where('type' , '=', 'cheese')->limit(rand(1,2))->get();
            $extras = Ingredient::inRandomOrder()->where('type' , '=', 'extra')->limit(1)->get();
        }
         

        
        $ingredients = [
            $breads,
            $extras,
            $vegetables,
            $cheeses,
            $meatFishEggs,
            $sauces,
        ];
         return $ingredients;

    }


    public function list() {

        // Maybe improve this mess with a __construct ??...
        
        $breads = Ingredient::inRandomOrder()->where('type' , '=', 'bread')->limit(1)->get();
        $meatFishEggs = Ingredient::inRandomOrder()->where('type' , '=', 'mfe')->limit(rand(1,2))->get();
        $vegetables = Ingredient::inRandomOrder()->where('type' , '=', 'vegetable')->limit(rand(1,3))->get();
        $sauces = Ingredient::inRandomOrder()->where('type' , '=', 'sauce')->limit(1)->get();
        $cheeses = Ingredient::inRandomOrder()->where('type' , '=', 'cheese')->limit(rand(1,2))->get();
        $extras = Ingredient::inRandomOrder()->where('type' , '=', 'extra')->limit(1)->get();
        
        $ingredients = [
            $breads,
            $extras,
            $vegetables,
            $cheeses,
            $meatFishEggs,
            $sauces,
        ];
        
        return response()->view('create.index', [
            'breads' => $breads,
            'meatfisheggs' => $meatFishEggs,
            'vegetables' => $vegetables,
            'sauces' => $sauces,
            'cheeses' => $cheeses,
            'extras' => $extras,
            'ingredients' => $ingredients,
        ]);
    }

    public function stats() {

        $ingredientsCount = Ingredient::count();

        return view('welcome', [
            'ingredientsCount' => $ingredientsCount,
        
        ]);

    }

    public function store() {

        request()->validate([
            'name' => 'required|min:2|max:25',
            'type' => 'required|min:2|max:15',
            'price' => 'required|max:50|numeric|regex:(\d*\.?\d{1,2})',
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
