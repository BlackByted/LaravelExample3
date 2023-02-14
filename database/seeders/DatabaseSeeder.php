<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\objectos;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $names=['David','Fernando','Agustin','Pedro','Jose','Miguel','Nicolas','Edison','Julieta','Sandia'];
        for ($i=0; $i < sizeof($names) ; $i++) {
            User::factory()->create([
                'name'=>$names[$i],
                'email'=>'test'.$names[$i].'@example.com',
            ]);
        }

    }
}
