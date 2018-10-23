<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'unit_id' => 1,
            'key'     => 'oooo',
            'name'    => 'Admin',
            'email'   => 'admin_troca@gmail.com',
            'password'=> bcrypt('admin'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 1,
            'key'     => 'fnaz',
            'name'    => 'Elencar',
            'email'   => 'gerente_troca@gmail.com',
            'password'=> bcrypt('gerente'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 1,
            'key'     => 'fnbf',
            'name'    => 'Anderson',
            'email'   => 'supervisor_troca@gmail.com',
            'password'=> bcrypt('supervisor'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 1,
            'key'     => 'fab6',
            'name'    => 'Fernando',
            'email'   => 'supervisor_troca@gmail.com',
            'password'=> bcrypt('supervisor'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 1,
            'key'     => 'fna2',
            'name'    => 'Creso',
            'email'   => 'supervisor_troca@gmail.com',
            'password'=> bcrypt('supervisor'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 2,
            'key'     => 'fab2',
            'name'    => 'Claudia',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 2,
            'key'     => 'be31',
            'name'    => 'Rubem',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 2,
            'key'     => 'znjf',
            'name'    => 'Amilton',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 2,
            'key'     => 'fnau',
            'name'    => 'Claudio',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 2,
            'key'     => 'znjy',
            'name'    => 'Durval',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 3,
            'key'     => 'faag',
            'name'    => 'Cleber',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 3,
            'key'     => 'znq0',
            'name'    => 'Josenilson',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 3,
            'key'     => 'fawj',
            'name'    => 'Lourival',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 3,
            'key'     => 'fnb4',
            'name'    => 'Sergio',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 3,
            'key'     => 'faah',
            'name'    => 'Denilson',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 4,
            'key'     => 'znqx',
            'name'    => 'Joaquim',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 4,
            'key'     => 'znhi',
            'name'    => 'Giovanne',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 4,
            'key'     => 'znr2',
            'name'    => 'Stevenson',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 4,
            'key'     => 'fae2',
            'name'    => 'Papa',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 4,
            'key'     => 'znqz',
            'name'    => 'Walmir',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 5,
            'key'     => 'fadz',
            'name'    => 'Herval',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 5,
            'key'     => 'faat',
            'name'    => 'Ivo',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 5,
            'key'     => 'pab9',
            'name'    => 'Paulo Bastos',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 5,
            'key'     => 'znp8',
            'name'    => 'Sturaro',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
        User::create([
            'unit_id' => 5,
            'key'     => 'uoh1',
            'name'    => 'Matheus',
            'email'   => 'operador_troca@gmail.com',
            'password'=> bcrypt('operador'),
            'active'  => true,
        ]);
    }
}
