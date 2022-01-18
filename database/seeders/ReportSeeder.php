<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_guards = User::where('role_id',3)->get();
        //dd($users_guards);
        //dd(count($users_guards));

        //por cada guradias se asignan dos reportes
        $users_guards->each(function($user)
        {
            Report::factory()->count(2)->for($user)->create();
        });

    }
}
