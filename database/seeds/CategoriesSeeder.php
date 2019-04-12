    <?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'RPG',
            'details' => 'Role-Playing Game.',
        ]);
        DB::table('categories')->insert([
            'name' => 'MMO',
            'details' => 'Massively Multiplayer  Online game.',
        ]);
        DB::table('categories')->insert([
            'name' => 'Horror',
            'details' => 'an intense feeling of fear, shock, or disgust.',
        ]);
        DB::table('categories')->insert([
            'name' => 'Indie',
            'details' => 'Game made by a small studio.',
        ]);
        DB::table('categories')->insert([
            'name' => 'FPS',
            'details' => 'First Person Shooter.',
        ]);
    }
}
