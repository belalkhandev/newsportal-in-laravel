<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perm1 = new Permission();
        $perm1->name = 'manage_admin'; // for super admin
        $perm1->display_name = 'Manage Admin';
        $perm1->description = 'Can create, edit or delete an admin';
        $perm1->save();

        $perm2 = new Permission();
        $perm2->name = 'manage_module'; // for super admin
        $perm2->display_name = 'Manage Modules';
        $perm2->description = 'Can manage modules';
        $perm2->save();

        $perm3 = new Permission();
        $perm3->name = 'manage_settings'; // for admin
        $perm3->display_name = 'Manage Settings';
        $perm3->description = 'Can manage settings';
        $perm3->save();

        $perm4 = new Permission();
        $perm4->name = 'manage_accounts';
        $perm4->display_name = 'Manage Accounts';
        $perm4->description = 'Can CRUD and Approve any payment issues';
        $perm4->save();

        $perm6 = new Permission();
        $perm6->name = 'manage_email';
        $perm6->display_name = 'Manage Email';
        $perm6->description = 'Can send email';
        $perm6->save();

        $perm7 = new Permission();
        $perm7->name = 'manage_reports';
        $perm7->display_name = 'Manage Reports';
        $perm7->description = 'Can generate and export reports';
        $perm7->save();

        $perm8 = new Permission();
        $perm8->name = 'manage_notice';
        $perm8->display_name = 'Manage Notices';
        $perm8->description = 'Can CRUD notices';
        $perm8->save();

        $perm9 = new Permission();
        $perm9->name = 'manage_promotion';
        $perm9->display_name = 'Manage Promotions';
        $perm9->description = 'Can promote students from one class/section to another class/section';
        $perm9->save();

        $perm10 = new Permission();
        $perm10->name = 'view_user';
        $perm10->display_name = 'View Users';
        $perm10->description = 'Can view users';
        $perm10->save();
        
        $perm11 = new Permission();
        $perm11->name = 'manage_user';
        $perm11->display_name = 'Manage User';
        $perm11->description = 'Can CRUD user\'s informations';
        $perm11->save();

        $perm12 = new Permission();
        $perm12->name = 'view_user_role';
        $perm12->display_name = 'View User Roles';
        $perm12->description = 'Can view user roles';
        $perm12->save();
        
        $perm13 = new Permission();
        $perm13->name = 'manage_user_role';
        $perm13->display_name = 'Manage User Roles';
        $perm13->description = 'Can CRUD user roles';
        $perm13->save();

    }
}
