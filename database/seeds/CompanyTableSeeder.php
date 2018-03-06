<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CompanyTableSeeder extends Seeder
{

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0; ');
        DB::table('companies')->truncate();

        DB::table('companies')->insert([
            'name' => 'Deserunt proident',
            'description' => 'Ad nostrud excepteur enim aliquip.',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

        DB::table('companies')->insert([
            'name' => 'Lorem mollit',
            'description' => 'Ex laboris aliquip duis tempor occaecat.',
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1; ');
    }
}
