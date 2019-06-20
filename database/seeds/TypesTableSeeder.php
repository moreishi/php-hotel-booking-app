<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $standard = Type::create(['name' => 'standard','description' => 'A standard room size']);
        $deluxe = Type::create(['name' => 'deluxe','description' => 'A deluxe room size']);
        $queen = Type::create(['name' => 'queen','description' => 'A queen room size']);
        $king = Type::create(['name' => 'king','description' => 'A king room size']);
    }
}
