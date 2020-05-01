<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole=Role::where('name','admin')->first();
        $authorRole=Role::where('name','author')->first();
        $userRole=Role::where('name','user')->first();

        $admin=User::create([
            'name'      => 'Utilisateur Admin',
            'email'     => 'admin@gmail.com',
            'tel'       => '97569701',
            'genre'     => 'Masculin',
            'password'  => Hash::make('12345678')
        ]);

        $user=User::create([
            'name'      => 'Utilisateur Standard',
            'email'     => 'user@gmail.com',
            'tel'       => '91264308',
            'genre'     => 'Féminin',
            'password'  => Hash::make('12345678')
        ]);

        $author=User::create([
            'name'      => 'Utilisateur Auteur',
            'email'     => 'author@gmail.com',
            'tel'       => '95564701',
            'genre'     => 'Masculin',
            'password'  => Hash::make('12345678')
        ]);

         $admin->roles()->attach($adminRole);
         $author->roles()->attach($authorRole);
         $user->roles()->attach($userRole);

    }
}
