<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            'Arredamento',
            'Elettronica',
            'Abbigliamento',
            'Libri',
            'Sport',
            'Giocattoli',
            'Auto e moto',
            'Casa e giardino',
            'Musica',
            'Collezionismo',
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category]);
        }
    }
}
