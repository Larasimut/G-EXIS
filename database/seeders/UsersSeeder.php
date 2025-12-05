<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        // Daftar ekskul
        $ekskul = [
            'voli',
            'basket',
            'futsal',
            'tata_rias',
            'coding',
            'aksara',
            'tata_boga',
            'tata_busana',
            'karawitan',
            'kir',
            'irma',
            'seni_tari',
            'drumband',
            'pramuka',
            'paskibra',
            'karate',
            'fotografi',
            'english_club',
            'paduan_suara',
            'pencak_silat',
            'pmr',
            'design_printing'
        ];

        // Buat pembina sesuai daftar ekskul
        foreach ($ekskul as $item) {

            // Untuk email hilangkan underscore agar rapi
            $emailName = str_replace('_', '', $item);

            User::create([
                'name' => 'pembina' . $item,                          // contoh: pembinavoli
                'email' => 'pembina' . $emailName . '@example.com',   // contoh: pembinavoli@example.com
                'password' => Hash::make('pembina' . $item),          // contoh: pembinavoli
                'role' => 'pembina',
            ]);
        }

        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    }
}
