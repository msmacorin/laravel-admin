<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = App\User::create([
                    'name' => 'Marcelo S. Macorin',
                    'email' => 'marcelo@macor.in',
                    'password' => bcrypt('123456'),
                    'remember_token' => str_random(10),
        ]);
        $admin = Artesaos\Defender\Facades\Defender::findRole('admin');
        $user->attachRole($admin);
    }

}
