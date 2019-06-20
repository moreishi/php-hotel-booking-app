<?php

use Illuminate\Database\Seeder;
use App\Floor;
use App\Room;
use App\Type;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $floors_count = Floor::count();

        for ($i = 1; $i < $floors_count; $i++) {
            $rooms = 50;
            for($j = 1; $j < $rooms;$j++) {
                Room::create([
                    'name' => $i.$j,
                    'maintenance' => false,
                    'golf_view' => false,
                    'occupied' => false,
                    'floor_id' => $i
                ]);
            }
        }

        // Room Types
        $standard = Type::where(['name' => 'standard'])->first();
        $deluxe = Type::where(['name' => 'deluxe'])->first();
        $queen = Type::where(['name' => 'queen'])->first();
        $king = Type::where(['name' => 'king'])->first();

        $floors = Floor::with('rooms')->get();

        foreach ($floors as $floor) {
            $counter = 1;
            foreach ($floor->rooms as $room) {
                if($counter < 20) {
                    $room->types()->attach($standard);
                }
                elseif ($counter >= 20 && $counter < 30) {
                    $room->types()->attach($deluxe);
                }
                elseif ($counter >= 30 && $counter < 40) {
                    $room->types()->attach($queen);
                } else {
                    $room->types()->attach($king);
                }
                $counter++;
            }

        }

    }
}
