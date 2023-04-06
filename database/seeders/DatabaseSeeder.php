<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
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
        $user = User::factory()->create([
            'name'=> 'emu',
            'email' => 'emu@gmail.com'
        ]);

        Listing::factory(8)->create([
            'user_id' => $user->id
        ]);
        // Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravel first project',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme corp',
        //     'locatios' => 'Boston MA',
        //     'email' => 'xyz@email.com',
        //     'website' => 'dummyweb.com',
        //     'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
        //     like Aldus PageMaker including versions of Lorem Ipsum.'

        // ]);

        // Listing::create([
        //     'title' => 'Laravel second project',
        //     'tags' => 'php, python',
        //     'company' => 'BBL',
        //     'locatios' => 'Dhaka Gulshan',
        //     'email' => 'abcd@email.com',
        //     'website' => 'bdjobs.com',
        //     'description' => ' Aldus PageMaker including versions of Lorem Ipsum.Aldus PageMaker including versions of Lorem Ipsum.Aldus PageMaker including versions of Lorem Ipsum.Aldus PageMaker including versions of Lorem Ipsum.'

        // ]);
    }
}
