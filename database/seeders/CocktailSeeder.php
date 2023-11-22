<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = [
            [
                'name' => "Horse's Neck",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/006k4e1504370092.jpg",
                'category' => "Ordinary Drink",
                'instructions' => "Pour brandy and ginger ale directly into highball glass with ice cubes. Stir gently. Garnish with lemon zest. If desired, add dashes of Angostura Bitter."
            ],
            [
                'name' => "Pink Panty Pulldowns",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/squsuy1468926657.jpg",
                'category' => "Ordinary Drink",
                'instructions' => "Shake well"
            ],
            [
                'name' => "Hot Toddy",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/ggx0lv1613942306.jpg",
                'category' => "Cocktail",
                'instructions' => "STEP 1\r\nWhisk the whisky and honey together and split between 2 heatproof glasses. Add half of the cinnamon stick to each, then top up with 200ml boiling water.\r\n\r\nSTEP 2\r\nAdd a splash of lemon juice to each, then taste and add more to your preference. Finish each with a slice of lemon, studded with a clove, and serve immediately."
            ],
            [
                'name' => "Dark Caipirinha",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/uwstrx1472406058.jpg",
                'category' => "Cocktail",
                'instructions' => "Muddle the sugar into the lime wedges in an old-fashioned glass.\r\nFill the glass with ice cubes.\r\nPour the cachaca into the glass.\r\nStir well."
            ],
            [
                'name' => "Horse's Neck",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/006k4e1504370092.jpg",
                'category' => "Ordinary Drink",
                'instructions' => "Pour brandy and ginger ale directly into highball glass with ice cubes. Stir gently. Garnish with lemon zest. If desired, add dashes of Angostura Bitter."
            ],
            [
                'name' => "Pink Panty Pulldowns",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/squsuy1468926657.jpg",
                'category' => "Ordinary Drink",
                'instructions' => "Shake well"
            ],
            [
                'name' => "Hot Toddy",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/ggx0lv1613942306.jpg",
                'category' => "Cocktail",
                'instructions' => "STEP 1\r\nWhisk the whisky and honey together and split between 2 heatproof glasses. Add half of the cinnamon stick to each, then top up with 200ml boiling water.\r\n\r\nSTEP 2\r\nAdd a splash of lemon juice to each, then taste and add more to your preference. Finish each with a slice of lemon, studded with a clove, and serve immediately."
            ],
            [
                'name' => "Dark Caipirinha",
                'thumb' => "https://www.thecocktaildb.com/images/media/drink/uwstrx1472406058.jpg",
                'category' => "Cocktail",
                'instructions' => "Muddle the sugar into the lime wedges in an old-fashioned glass.\r\nFill the glass with ice cubes.\r\nPour the cachaca into the glass.\r\nStir well."
            ],
        ];

        foreach ($cocktails as $cocktail) {
            Cocktail::create($cocktail);
        }
    }
}
