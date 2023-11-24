<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;
use Illuminate\Support\Facades\Http;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($index = 0; $index < 20; $index++) {
            $response = Http::withoutVerifying()->get('https://www.thecocktaildb.com/api/json/v1/1/random.php');
            $data = $response->json();
            $randomCocktail = $data['drinks'][0];

            $cocktail = new Cocktail();

            //Da Rivedere
            $cocktail->category_id = rand(1, 5);

            $cocktail->name = $randomCocktail['strDrink'];
            $cocktail->instructions = $randomCocktail['strInstructions'];
            $cocktail->thumb = $randomCocktail['strDrinkThumb'];

            /* tags */
            $tagstr = $randomCocktail['strTags'];
            $tag = $tagstr ? explode(",", $tagstr) : null;
            $cocktail->tags = $tag;
            /* end tag */

            $cocktail->glass_type = $randomCocktail['strGlass'];

            $ingredients = [];

            for ($i = 1; $i <= 15; $i++) {
                $ingredient = 'strIngredient' . $i;
                $measure = 'strMeasure' . $i;

                if ($randomCocktail[$ingredient] && $randomCocktail[$measure]) {
                    $ingredients[] = [
                        'name' => $randomCocktail[$ingredient],
                        'measure' => $randomCocktail[$measure]
                    ];
                }
            }

            $cocktail->ingredients = $ingredients;
            $alcoholic = $randomCocktail['strAlcoholic'];
            if ($alcoholic == 'Alcoholic') {
                $alcoholic = 1;
            } else {
                $alcoholic = 0;
            }

            $cocktail->is_alcoholic = $alcoholic;

            $cocktail->save();
        }
    }
}
