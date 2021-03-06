<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Usuarios
      Permission::create([
         'name'        => 'Navegar usuarios',
         'slug'        => 'users.index',
         'description' => 'Lista y navega todos los usuarios del sistema',
      ]);

      Permission::create([
        'name'        => 'Ver detalles de usuario',
        'slug'        => 'users.show',
        'description' => 'Ver en datalle cada usuario del sistema',
      ]);

      Permission::create([
        'name'        => 'Editación de usuarios',
        'slug'        => 'users.edit',
        'description' => 'Editar cualquier dato de un usuario del sistema',
      ]);

      Permission::create([
       'name'        => 'Eliminar usuario',
       'slug'        => 'users.destroy',
       'description' => 'Eliminar cualquier dato de un usuario del sistema',
      ]);

       //ROLES
       Permission::create([
        'name'        => 'Navegar roles',
        'slug'        => 'roles.index',
        'description' => 'Lista y navega todos los roles del sistema',
      ]);

      Permission::create([
       'name'        => 'Ver detalles de rol',
       'slug'        => 'roles.show',
       'description' => 'Ver en datalle cada rol del sistema',
      ]);

      Permission::create([
        'name'        => 'Creación de roles',
        'slug'        => 'roles.create',
        'description' => 'Crea un rol del sistema',
      ]);
 
      Permission::create([
       'name'        => 'Editación de roles',
       'slug'        => 'roles.edit',
       'description' => 'Editar cualquier dato de un rol del sistema',
      ]);

     Permission::create([
      'name'        => 'Eliminar roles',
      'slug'        => 'roles.destroy',
      'description' => 'Eliminar cualquier dato de un rol del sistema',
     ]);


      //PRODUCTOS
      Permission::create([
        'name'        => 'Navegar productos',
        'slug'        => 'products.index',
        'description' => 'Lista y navega todos los productos del sistema',
      ]);

      Permission::create([
       'name'        => 'Ver detalles de producto',
       'slug'        => 'products.show',
       'description' => 'Ver en datalle cada producto del sistema',
      ]);

      Permission::create([
        'name'        => 'Creación de productos',
        'slug'        => 'products.create',
        'description' => 'Crea un producto del sistema',
      ]);
 
      Permission::create([
       'name'        => 'Editación de productos',
       'slug'        => 'products.edit',
       'description' => 'Editar cualquier dato de un producto del sistema',
      ]);

     Permission::create([
      'name'        => 'Eliminar productos',
      'slug'        => 'products.destroy',
      'description' => 'Eliminar cualquier dato de un producto del sistema',
     ]);

  }
}
