<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Nasi Goreng',
                'category' => 'Makanan Utama',
                'cook_time' => 20,
                'image' => 'nasi goreng.jpg',
                'ingredients' => 'Nasi putih, telur, bawang putih, kecap manis, garam.',
                'steps' => 'Tumis bawang putih, masukkan telur dan nasi. Tambahkan kecap dan garam, lalu aduk hingga matang.',
            ],
            [
                'name' => 'Rendang Sapi',
                'category' => 'Makanan Utama',
                'cook_time' => 180,
                'image' => 'rendang sapi.jpg',
                'ingredients' => 'Daging sapi, santan, cabai, bawang merah, bawang putih, dan rempah.',
                'steps' => 'Masak daging bersama santan dan bumbu hingga empuk dan bumbu mengental.',
            ],
            [
                'name' => 'Soto Ayam',
                'category' => 'Sup',
                'cook_time' => 60,
                'image' => 'soto ayam.jpg',
                'ingredients' => 'Ayam, bawang putih, kunyit, serai, daun jeruk, dan bihun.',
                'steps' => 'Rebus ayam, tumis bumbu, masukkan ke kuah, lalu sajikan bersama bihun.',
            ],
            [
                'name' => 'Sate Ayam',
                'category' => 'Makanan Utama',
                'cook_time' => 40,
                'image' => 'sate ayam.jpg',
                'ingredients' => 'Daging ayam, kecap manis, bawang putih, kacang tanah, dan tusuk sate.',
                'steps' => 'Potong ayam, beri bumbu, tusuk, lalu panggang hingga matang. Sajikan dengan saus kacang.',
            ],
            [
                'name' => 'Gado-Gado',
                'category' => 'Sayuran',
                'cook_time' => 30,
                'image' => 'gado gado.jpg',
                'ingredients' => 'Kangkung, tauge, kentang, tahu, tempe, dan saus kacang.',
                'steps' => 'Rebus sayuran, siapkan tahu dan tempe, lalu sajikan dengan saus kacang.',
            ],
            [
                'name' => 'Pisang Goreng',
                'category' => 'Camilan',
                'cook_time' => 15,
                'image' => 'pisang goreng.jpg',
                'ingredients' => 'Pisang, tepung terigu, gula, air, dan minyak goreng.',
                'steps' => 'Campur tepung, gula, dan air. Celupkan pisang, lalu goreng hingga keemasan.',
            ],
            [
                'name' => 'Bakso Sapi',
                'category' => 'Makanan Utama',
                'cook_time' => 45,
                'image' => 'bakso sapi.jpg',
                'ingredients' => 'Daging sapi, tepung tapioka, bawang putih, garam, merica, kaldu sapi.',
                'steps' => 'Campurkan daging sapi giling dengan bumbu dan tepung. Bentuk bulat, lalu rebus hingga bakso mengapung dan matang.',
            ],
            [
                'name' => 'Mie Goreng',
                'ingredients' => 'Mie, telur, sawi, wortel, bawang putih, kecap manis, garam.',
                'steps' => 'Tumis bawang putih, masukkan telur dan sayuran. Tambahkan mie serta bumbu, lalu aduk hingga matang.',
                'cook_time' => 20,
                'image' => 'mie goreng.jpg',
                'category' => 'Makanan Utama',
            ],
            [
                'name' => 'Ayam Bakar',
                'ingredients' => 'Ayam, bawang merah, bawang putih, kecap manis, ketumbar, garam.',
                'steps' => 'Ungkep ayam bersama bumbu hingga matang. Olesi kecap, lalu bakar sambil dibolak-balik hingga harum.',
                'cook_time' => 50,
                'image' => 'ayam bakar.jpg',
                'category' => 'Makanan Utama',
            ],
            [
                'name' => 'Martabak Telur',
                'ingredients' => 'Kulit martabak, telur, daun bawang, daging cincang, garam, merica.',
                'steps' => 'Campurkan telur, daun bawang, daging dan bumbu. Isi kulit martabak, lipat, lalu goreng hingga matang.',
                'cook_time' => 30,
                'image' => 'martabak telur.jpg',
                'category' => 'Camilan',
            ],
            [
                'name' => 'Klepon',
                'ingredients' => 'Tepung ketan, gula merah, air pandan, kelapa parut, sedikit garam.',
                'steps' => 'Campurkan tepung dengan air pandan. Isi adonan dengan gula merah, bentuk bulat, lalu rebus sampai mengapung. Baluri kelapa parut.',
                'cook_time' => 35,
                'image' => 'klepon.jpg',
                'category' => 'Camilan',
            ],
            [
                'name' => 'Es Cendol',
                'ingredients' => 'Cendol, santan, gula merah, air, es batu.',
                'steps' => 'Larutkan gula merah dengan air. Siapkan cendol dan santan dalam gelas, tambahkan larutan gula merah serta es batu.',
                'cook_time' => 15,
                'image' => 'es cendol.jpg',
            'category' => 'Minuman',
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}