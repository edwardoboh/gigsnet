<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Listing::factory(10)->create();

        // Listing::create([
        //     'title' => 'Senior FE React Dev',
        //     'tags' => 'React',
        //     'company' => 'NanoTek',
        //     'description' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.',
        //     'email' => 'testmail@gmail.com',
        //     'location' => 'Boston, Texas',
        //     'website' => 'NanoTek.xyz'
        // ]);

        // Listing::create([
        //     'title' => 'Junior Nodejs Dev',
        //     'tags' => 'Nodejs',
        //     'company' => 'NanoTek',
        //     'description' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.',
        //     'email' => 'testmail@gmail.com',
        //     'location' => 'Boston, Texas',
        //     'website' => 'NanoTek.xyz'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
