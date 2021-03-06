<?php

use Carbon\Carbon;
use App\Base\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        Permission::insert([
            [
                'action'        => 'view',
                'resource'      => 'project',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'project',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'project',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'project',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'team',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'team',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'team',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'team',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'office',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'office',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'office',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'office',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'task',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'task',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'task',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'task',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'discussion',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'discussion',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'discussion',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'discussion',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'message',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'message',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'message',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'message',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'event',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'event',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'event',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'event',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'file',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'upload',
                'resource'      => 'file',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'file',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'comment',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'comment',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'comment',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'comment',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'cycle',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'cycle',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'cycle',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'cycle',
                'group_related' => true,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'tag',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'create',
                'resource'      => 'tag',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'update',
                'resource'      => 'tag',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'delete',
                'resource'      => 'tag',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'attach',
                'resource'      => 'tag',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'detach',
                'resource'      => 'tag',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'add',
                'resource'      => 'member',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'remove',
                'resource'      => 'member',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'assign',
                'resource'      => 'permission',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'revoke',
                'resource'      => 'permission',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'invite',
                'resource'      => 'user',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'action'        => 'view',
                'resource'      => 'admin',
                'group_related' => false,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);
    }
}
