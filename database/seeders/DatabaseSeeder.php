<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            Company::factory()->count(10)->create()->each(function($company){
                $company->contacts()->saveMany(
                    Contact::factory()->count(50)->create()
                );
            });

    }
}
