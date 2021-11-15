<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user -> first_name = 'Akhsan';
        $user -> last_name = 'Nasution';
        $user -> username = 'akhsannasution';
        $user -> email = 'nasutionalta@gmail.com';
        $user -> level = 'admin';
        $user -> password = \Hash::make("bismillahpkl2022sukses");
        $user -> save();

    }
}
