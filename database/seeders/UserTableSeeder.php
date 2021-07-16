<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userData = [
            [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
            ],
            [
                'name' => 'thienth',
                'email' => 'thienth@gmail.com',
                'password' => Hash::make('123456')
            ],
        ];

        foreach($userData as $u){
            $model = new User();
            $model->fill($u);
            $model->save();
        }

    }
}
