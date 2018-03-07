<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProjectTableSeeder extends Seeder
{

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0; ');
        DB::table('projects')->truncate();

        DB::table('projects')->insert([
            'name'        => 'Eu do sunt',
            'description' => 'Irure minim duis sit nisi non.',
            'user_id'     => 1,
            'company_id'  => 1,
            'days'        => 10,
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s')
            ]);

        DB::table('projects')->insert([
            'name'        => 'In sint irure',
            'description' => 'Adipisicing aute minim quis exercitation minim proident.',
            'user_id'     => 1,
            'company_id'  => 1,
            'days'        => 30,
            'created_at'  => Carbon::now()->format('Y-m-d H:i:s')
            ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1; ');
    }
}
