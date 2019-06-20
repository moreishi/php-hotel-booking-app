<?php

use Illuminate\Database\Seeder;
use App\Floor;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $floors_count = 0;

        while($floors_count < 10) {
            $floors_count++;
            $floor = new Floor();
            $floor->name = 'Floor #' . $floors_count;
            $floor->save();
        }

    }
}
