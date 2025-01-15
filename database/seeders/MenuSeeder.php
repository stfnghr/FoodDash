<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        //non-vegetarian
        Menu::create([
            'name' => 'Daily Protein',
            'price' => '1200000',
            'categories' => 'Non-Vegetarian',
            'description' => 'Sumber protein seimbang untuk aktivitas harian. 
                            Membantu menjaga energi dan stamina sepanjang hari.',
            'details' => [
                'Nasi putih atau nasi cokelat.',
                'Ayam panggang bumbu madu.',
                'Tumis buncis wortel saus teriyaki.',
                'Telur dadar gulung isi sayur.',
                'Buah potong (semangka dan melon).'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Nusantara Feast',
            'price' => '1500000',
            'categories' => 'Non-Vegetarian',
            'description' => 'Cita rasa khas Indonesia dengan rempah yang kaya. 
                            Cocok untuk Anda yang menyukai hidangan autentik Nusantara.',
            'details' => [
                'Nasi uduk atau nasi kuning.',
                'Rendang daging sapi lembut.',
                'Ayam goreng lengkuas.',
                'Perkedel kentang.',
                'Sambal tomat dan lalapan segar.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Seafood Lover',
            'price' => '1650000',
            'categories' => 'Non-Vegetarian',
            'description' => 'Segar dan spesial untuk pecinta makanan laut. 
                            Cocok untuk Anda yang menyukai rasa laut yang autentik.',
            'details' => [
                'Nasi putih atau nasi cokelat.',
                'Udang saus mentega atau saus padang.',
                'Ikan fillet bakar dengan sambal dabu-dabu.',
                'Tumis kangkung terasi.',
                'Es kelapa muda.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Western Treat',
            'price' => '1350000',
            'categories' => 'Non-Vegetarian',
            'description' => 'Sederhana namun lezat dengan gaya ala barat. 
                            Hidangan ini cocok untuk pecinta rasa praktis dan nikmat.',
            'details' => [
                'Nasi putih atau mashed potato.',
                'Chicken steak panggang dengan saus mushroom.',
                'Salad sayuran dengan saus thousand island.',
                'Roti garlic bread.',
                'Puding cokelat.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'BBQ Delight',
            'price' => '1500000',
            'categories' => 'Non-Vegetarian',
            'description' => 'Gurih dan manis dengan sensasi BBQ panggang. 
                            Pilihan terbaik untuk Anda yang ingin makanan lezat dan memuaskan.',
            'details' => [
                'Nasi jagung atau nasi putih.',
                'Sate ayam bumbu kecap manis.',
                'Iga bakar BBQ dengan saus spesial.',
                'Jagung manis bakar.',
                'Salad coleslaw segar.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Japanese Bento',
            'price' => '1800000',
            'categories' => 'Non-Vegetarian',
            'description' => 'Komplit dan menarik dengan hidangan khas Jepang. 
                            Sangat cocok untuk Anda yang menyukai makanan bento dengan cita rasa autentik.',
            'details' => [
                'Nasi putih dengan taburan nori.',
                'Salmon teriyaki panggang.',
                'Tempura udang dan sayur (wortel, terong).',
                'Tamagoyaki (telur gulung Jepang).',
                'Salad hijau dengan saus wijen.',
                'Mochi sebagai hidangan penutup.'
            ],
            'image' => ''
        ]);


        //vegetarian
        Menu::create([
            'name' => 'Green Energy',
            'price' => '900000',
            'categories' => 'Vegetarian',
            'description' => 'Kaya serat, sehat, dan cocok untuk memulai hari. 
                            Menu ini membantu melancarkan pencernaan sekaligus memberikan energi sepanjang hari.',
            'details' => [
                'Nasi merah atau quinoa.',
                'Tumis kacang panjang, wortel, dan jamur shiitake dengan saus bawang putih.',
                'Tempe goreng gurih dengan bumbu ketumbar.',
                'Salad sayur segar (selada, tomat, jagung manis, alpukat) dengan vinaigrette lemon.',
                'Potongan buah segar (melon, semangka, dan anggur).'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Spicy Herbivore',
            'price' => '1050000',
            'categories' => 'Vegetarian',
            'description' => 'Vegan pedas untuk pecinta rasa berani dan lezat. 
                            Cocok untuk Anda yang suka makanan dengan sentuhan rasa pedas menggugah selera.',
            'details' => [
                'Nasi merah atau nasi putih organik.',
                'Tumis daun singkong pedas.',
                'Sambal goreng kentang tahu tempe.',
                'Tumis jamur tiram balado.',
                'Es jeruk nipis segar.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Asian Delight',
            'price' => '1200000',
            'categories' => 'Vegetarian',
            'description' => 'Lezat dengan cita rasa Asia yang menggugah selera. 
                            Hidangan ini seimbang dan cocok untuk Anda yang menyukai masakan Asia Timur.',
            'details' => [
                'Nasi putih atau mi jagung.',
                'Sayur capcay ala oriental (kol, wortel, jamur kuping).',
                'Tahu goreng cabai garam.',
                'Gyoza sayur kukus (isi wortel, jamur, dan kol).',
                'Smoothie pisang-bayam dengan susu almond.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Mediterranean Bowl',
            'price' => '1350000',
            'categories' => 'Vegetarian',
            'description' => 'Sehat dan bergizi dengan aroma khas Mediterania. 
                            Hidangan ini memberikan cita rasa eksotis yang menyehatkan tubuh.',
            'details' => [
                'Nasi couscous atau bulgur.',
                'Hummus (kacang chickpea) dan sayuran panggang (zucchini, paprika, tomat).',
                'Falafel krispi dengan saus tahini.',
                'Salad tabbouleh (peterseli, tomat, dan lemon).',
                'Puding chia seed dengan topping buah berry.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Plant Protein',
            'price' => '1050000',
            'categories' => 'Vegetarian',
            'description' => 'Tinggi protein nabati untuk tubuh bertenaga sepanjang hari. 
                            Cocok untuk menjaga stamina dan memenuhi kebutuhan protein harian.',
            'details' => [
                'Nasi putih organik atau nasi jagung.',
                'Pepes tahu dan tempe dengan daun pisang.',
                'Tumis brokoli dan kembang kol dengan saus teriyaki vegan.',
                'Sayur bayam bening dengan jagung manis.',
                'Jus alpukat tanpa gula.'
            ],
            'image' => ''
        ]);

        Menu::create([
            'name' => 'Fit Vegan',
            'price' => '900000',
            'categories' => 'Vegetarian',
            'description' => 'Rendah kalori, seimbang untuk menjaga tubuh ideal. 
                            Paket ini cocok untuk gaya hidup sehat.',
            'details' => [
                'Nasi shirataki atau kentang rebus.',
                'Sayur lodeh santan almond (labu siam, kacang panjang, wortel).',
                'Tempe panggang dengan bumbu kecap manis.',
                'Tumis kangkung bawang putih.',
                'Potongan buah naga dan kiwi.'
            ],
            'image' => ''
        ]);
    }
}