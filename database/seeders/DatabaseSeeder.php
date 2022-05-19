<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\organization;
use App\Models\portfolio;
use App\Models\User;
use App\Models\service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\HttpFoundation\ServerBag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Banner::factory(10)->create();
        organization::factory(10)->create();
        portfolio::factory(10)->create();
        service::factory(10)->create();
    }
}
