<?php

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
        \App\Models\Admin::insert([
            [
                'nama'=>"Administrator",
                'email'=>"admin@gmail.com",
                'password'=>bcrypt('123'),
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
