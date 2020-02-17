<?php

use Illuminate\Database\Seeder;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $management = new \App\Management();
        $management->firstName = 'Bui';
        $management->lastName = 'Hoang';
        $management->phone = '0862096685';
        $management->email = 'hoang@gmail.com';
        $management->address = 'Quang Tri';
        $management->avatar = 'dadasd.jpg';
        $management->save();
    }
}
