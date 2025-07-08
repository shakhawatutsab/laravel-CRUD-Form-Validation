<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'name' => 'Smartphone'
        ];

        DB::table("categories")->insert($category);

        $category = [
            'name' => 'Cloth'
        ];

        DB::table("categories")->insert($category);

        $category = [
            'name' => 'Gadget'
        ];

        DB::table("categories")->insert($category);

        $category = [
            'name' => 'Others'
        ];

        DB::table("categories")->insert($category);
    }
}