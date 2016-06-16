<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $chRole = Role::create([
        'name' => 'Clearing House',
        'slug' => 'clearing.house',
      ]);

      $researcherRole = Role::create([
        'name' => 'Researcher',
        'slug' => 'researcher',
      ]);

      $companyRole = Role::create([
        'name' => 'Company',
        'slug' => 'company',
      ]);
    }
}
