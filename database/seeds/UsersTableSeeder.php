<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Juan',
            'email'=> 'correo@correo.com',
            'password'=> 'secret'
        ]);
    }*/

    //factoria para crear datos en 2 tablas relacionadas
    public function run(){
        \proyectojp\User::truncate();
        \proyectojp\Post::truncate();
        factory(proyectojp\User::class, 10)->create()->each(function ($user){
            $tabla = factory(proyectojp\Post::class)->make();
            $user->posts()->save($tabla);
        });
    }
}
