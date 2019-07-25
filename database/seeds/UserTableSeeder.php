<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Role;
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
        $role_admin = Role::where('name', 'admin')->first();
     
        $user = new User();
        $user->name = 'Vasil Pupkin';
        $user->email = 'pupkin@example.com';
        $user->password = Hash::make('secret');
        $user->save();
        
       
        $admin = new User();
        $admin->name = 'Admin Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('secret');
        $admin->save();
        
        $admin->roles()->attach($role_admin);
    }
}
