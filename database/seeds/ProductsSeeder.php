<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'The Witcher 3 Wild Hunt',
            'price' => '30',
            'details' => 'The Witcher® 3: Wild Hunt is a story-driven, next-generation open world role-playing game,
             set in a visually stunning fantasy universe, full of meaningful choices and impactful consequences. You play as Geralt of Rivia, 
             a monster hunter tasked with finding a child from an ancient prophecy.',
        ]);

        DB::table('products')->insert([
            'name' => 'Arma 3',
            'price' => '35',
            'details' => 'Experience true combat gameplay in a massive military sandbox. Deploying a wide variety of single- and multiplayer content, 
            over 20 vehicles and 40 weapons, and limitless opportunities for content creation, this is the PC’s premier military game. 
            Authentic, diverse, open - Arma 3 sends you to war.',
        ]);

        DB::table('products')->insert([
            'name' => 'Arma 2',
            'price' => '20',
            'details' => 'Building on 10 years of constant engine development, ARMA II boasts the most realistic combat environment in the world. 
            It models real world ballistics & round deflection, materials penetration, features a realtime day/night cycle and dynamic wind, 
            weather and environmental effects.',
        ]);

        DB::table('products')->insert([
            'name' => 'Fallout 4',
            'price' => '30',
            'details' => 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, 
            welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming.',
        ]);

        DB::table('products')->insert([
            'name' => 'Fallout 3',
            'price' => '20',
            'details' => 'Prepare for the Future™ With Fallout 3: Game of the Year Edition, experience the most acclaimed game of 2008 like never before. 
            Create a character of your choosing and descend into an awe-inspiring, post-apocalyptic world where every minute is a fight for survival.',
        ]);

        DB::table('products')->insert([
            'name' => 'The Elder Scrolls V: Skyrim Special Edition',
            'price' => '40',
            'details' => 'Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail. 
            The Special Edition includes the critically acclaimed game and add-ons with all-new features like remastered art and effects, volumetric god rays, 
            dynamic depth of field, screen-space and much more.',
        ]);

    }
}
