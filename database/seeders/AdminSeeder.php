<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\admin::insert([
            [
                'username' => 'Admin',
                'password' => bcrypt('mealplan123'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
