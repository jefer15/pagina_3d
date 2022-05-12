<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Organization;
use App\Models\Portfolio;
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
        Organization::factory(10)->create();
        Portfolio::factory(10)->create();
        Service::factory(10)->create();
    }
}
