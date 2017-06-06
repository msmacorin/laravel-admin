<?php

use Illuminate\Database\Seeder;
use Artesaos\Defender\Facades\Defender;

class BasicRolesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Defender::createRole('admin');
        Defender::createRole('user');
    }

}
