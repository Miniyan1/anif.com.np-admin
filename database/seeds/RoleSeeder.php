<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleArr = ['User','Admin'];
        foreach ($roleArr as $role){

            Role::create(['name' => $role]);

    }

    }
}
