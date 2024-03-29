<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *@return void
     */
    public function run()
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $teacherRole = Role::firstOrCreate(['name' => 'teacher']);

        /*Add Permission Accoridng to Respected Module 
        First Create Varible like " $testPermission " give syntax like 
          $testPermission = [
            ['name' => 'dashboard'],
           ];
         Run A foreach loop for adding permission like
         foreach ($testPermission as $item) {
         Permission::firstOrCreate($item);
           }
        Its done 
        then run command php artisan migrate:refresh --seed
         done your permission is mapp with permission table
         */


        $testPermission = [
            ['name' => 'dashboard'],
        ];

        foreach ($testPermission as $item) {
            Permission::firstOrCreate($item);
        }

        $rolePermissions = [
            ['name' => 'view_roles_menu'],
            ['name' => 'add_roles'],
            ['name' => 'edit_roles'],
        ];

        foreach ($rolePermissions as $item) {
            Permission::firstOrCreate($item);
        }

        $branchPermissions = [
            ['name' => 'view_courses_menu'],
            ['name' => 'add_courses'],
            ['name' => 'add_standards']
        ];
        foreach ($branchPermissions as $item) {
            Permission::firstOrCreate($item);
        }

        $classPermission = [
            ['name' => 'add_class'],
            ['name' => 'edit_class'],
        ];

        foreach ($classPermission as $item) {
            Permission::firstOrCreate($item);
        }

        $questionPermission = [
            ['name' => 'view_question'],
            ['name' => 'upload_question'],
            ['name' => 'add_queston'],
        ];
        foreach ($questionPermission as $item) {
            Permission::firstOrCreate($item);
        }

        $studentsPermission = [
            ['name' => 'add_students'],
            ['name' => 'view_students'],
            ['name' => 'upload_students'],
            
        ];
        foreach ($studentsPermission as $item) {
            Permission::firstOrCreate($item);
        }

        $teachersPermission = [
            ['name' => 'add_teachers'],
            ['name' => 'view_teachers'],
            ['name' => 'delete_teachers'],
            
        ];
        foreach ($teachersPermission as $item) {
            Permission::firstOrCreate($item);
        }

        $FacultyPermission = [
            ['name' => 'upload_faculty'],
            ['name' => 'view_faculty'],
            ['name' => 'delete_faculty'],
            ['name' => 'see_faculty'],
            
        ];
        foreach ($FacultyPermission as $item) {
            Permission::firstOrCreate($item);
        }
        
        $teacherPermissions = [
            ['name' => 'view_question'],
            ['name' => 'view_students'],

            // Add more permissions related to teachers here
        ];
        // Fetch teacher users from the database
        $teacherUsers = User::where('name', 'teacher')->get();

// Assign the 'teacher' role to each teacher user
        foreach ($teacherUsers as $teacherUser) {
            $teacherUser->assignRole('teacher');
        }

        
        foreach ($teacherPermissions as $item) {
            Permission::firstOrCreate($item);
        }
        $teacherRole->syncPermissions(Permission::whereIn('name', ['view_question', 'view_students'])->get());

        // $teacherRole->givePermissionTo(self::add_students);

        $adminRole->syncPermissions(Permission::all());
        $user = User::where('email', 'admin@gmail.com')->first();
        $user->assignRole('admin');
        
        
    }

}