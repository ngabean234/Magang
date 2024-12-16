<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryGallery;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'title' => 'Menara Air Minum',
                'description' => 'Dibangun pada masa Pemerintahan Kolonial Hindia Belanda',
                'image_path' => 'gallery/1.jpg',
                'author' => 'Thomas Kartsen',
                'date_taken' => '1920-11-01',
                'location' => 'Jl. Alun-alun Kota Magelang',
                'category_gallery_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Komplek Rumah Sakit Umum Tidar',
                'description' => 'RSU TIdar dulu milik Zeding yang dikepalai oleh dr Drick Meyr (Belanda) dibukak oleh Zeding pada
                                tanggal 25 Mei 1932.',
                'image_path' => 'gallery/RSU tidar.jpg',
                'author' => 'Dr Drick Meyr',
                'date_taken' => '1932-11-02',
                'location' => 'Jl Tidar Magelang',
                'category_gallery_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ]);
    }
}
