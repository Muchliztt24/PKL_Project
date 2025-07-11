<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'is_admin' => true,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Asep Suherman',
            'email' => 'asep@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Maman Supratman',
            'email' => 'maman@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Suherman',
            'email' => 'suherman@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Ali Darmawan',
            'email' => 'ali@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Sucipto Prabowo',
            'email' => 'sucipto@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Sandi Prasetya',
            'email' => 'sandi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Kasep Setyawan',
            'email' => 'kasep@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Rizki Pratama',
            'email' => 'rizki@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Wendy Kurniawan',
            'email' => 'wendy@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Wahyu Prabowo',
            'email' => 'wahyu@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Dina Pratiwi',
            'email' => 'dina@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Amin Setiawan',
            'email' => 'amin@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Citra Dewi',
            'email' => 'citra@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Dedi Wijaya',
            'email' => 'dedi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Eka Lestari',
            'email' => 'eka@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Fajar Pratama',
            'email' => 'fajar@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Gina Amalia',
            'email' => 'gina@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Hadi Saputra',
            'email' => 'hadi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Intan Permata',
            'email' => 'intan@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Joko Wibowo',
            'email' => 'joko@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Kiki Maulana',
            'email' => 'kiki@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Lina Anggraini',
            'email' => 'lina@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Mira Sari',
            'email' => 'mira@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Niko Ardian',
            'email' => 'niko@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Oni Septian',
            'email' => 'oni@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Putri Ayu',
            'email' => 'putri@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Qori Salma',
            'email' => 'qori@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Rendi Kurniawan',
            'email' => 'rendi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Sari Indah',
            'email' => 'sari@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Taufik Hidayat',
            'email' => 'taufik@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Umi Khalsum',
            'email' => 'umi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Vina Rahayu',
            'email' => 'vina@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Wawan Setiaji',
            'email' => 'wawan@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Xena Nurhaliza',
            'email' => 'xena@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Yoga Prasetyo',
            'email' => 'yoga@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Zahra Amira',
            'email' => 'zahra@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Agus Suryanto',
            'email' => 'agus@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Bella Fitriani',
            'email' => 'bella@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Cahya Ramadhan',
            'email' => 'cahya@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Diah Utami',
            'email' => 'diah@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Erlangga Setyo',
            'email' => 'erlangga@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Farah Rizky',
            'email' => 'farah@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Galang Firmansyah',
            'email' => 'galang@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Hana Syifa',
            'email' => 'hana@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Irfan Mahendra',
            'email' => 'irfan@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Jihan Nabila',
            'email' => 'jihan@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Kevin Jonathan',
            'email' => 'kevin@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Lutfi Hidayat',
            'email' => 'lutfi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Maya Hasanah',
            'email' => 'maya@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Nanda Putra',
            'email' => 'nanda@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Olivia Kartika',
            'email' => 'olivia@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Panji Seto',
            'email' => 'panji@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Qiana Prameswari',
            'email' => 'qiana@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Rizky Fadillah',
            'email' => 'rizky@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Sinta Maharani',
            'email' => 'sinta@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Tomi Gunawan',
            'email' => 'tomi@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Ujang Rohmat',
            'email' => 'ujang@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Vera Oktaviani',
            'email' => 'vera@gmail.com',
            'is_admin' => false,
            'password' => bcrypt('password'),
        ]);
    }
}
