<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('books')->insert([
            'id' => '1',
            'user_id' => '1',
            'judul' => 'Buku Sejarah Perjuangan MASYARAKAT KOTA MAGELANG',
            'slug' => 'Buku Sejarah Perjuangan MASYARAKAT KOTA MAGELANG',
            'cover' => '2.jpg',
            'file_path' => 'Buku Sejarah Perjuangan MASYARAKAT KOTA MAGELANG Dimasa Perjuangan Phisik Tahun 1945 - 1950 Penerbit DHC Angakatan 45 Kota Magelang Tahun 1998.pdf',
            'ringkasan' => 'Dengan mengucap syukur kepada Tuhan Yang Maha Pengasih lagi Maha Penyayang yang telah memberikan kekuatan dan kemampuan kepada kami Generasi 45, untuk
                            menulis dan menerbitkan buku Sejarah Pejungan Masyarakat Kota Magelang dan sekitarnya pada masa-masa pejuangan physik melawan penjajah tahun 1945 - 1950.',
            'penulis' => 'nama penulis',
            'penerbit' => 'nama penerbit',
            'category_id' => '1',
            'jml_halaman' => '52',
            'created_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'id' => '2',
            'user_id' => '1',
            'judul' => 'Buku Pembangunan Magelang Kota Inda',
            'slug' => 'Buku Pembangunan Magelang Kota Inda',
            'cover' => '2.jpg',
            'file_path' => 'Buku Pembangunan Magelang Kota Inda ( The Central of Java ) Dulu dan Sekarang oleh Drs. Sukimin Adi Wiratmoko.pdf',
            'ringkasan' => 'Kutulis Magelang Indah ini untuk anak-anakku juga para Generasi Muda Magelang umumnya, agar apabila mau membaca, akan
                            mengetahui sedikit-sedikit tentang Kotanya pada masa yang lampau maupun masa sekarang, dan dapat menggambarkan akar
                            bagaimana kelayak kemudian harinya.',
            'penulis' => 'nama penulis',
            'penerbit' => 'nama penerbit',
            'category_id' => '2',
            'jml_halaman' => '40',
            'created_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'id' => '3',
            'user_id' => '1',
            'judul' => 'September 24',
            'slug' => 'September 24',
            'cover' => 'September 24.jpg',
            'file_path' => 'September 24.pdf',
            'ringkasan' => 'Pemkot Magelang dinobatkan sebagai Pemerintah Daerah dengan Kinerja dan Governasi baiik Tingkat Kota unruk Kategori umum pada Anugerah Pandu Negeri(APN)
                            tahun 2024.',
            'penulis' => 'JAWA POS Hal 4rm',
            'penerbit' => 'Radar Magelang',
            'category_id' => '3',
            'jml_halaman' => '42',
            'created_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'id' => '4',
            'user_id' => '1',
            'judul' => 'BACA YUK 10 oke',
            'slug' => 'BACA YUK 10 oke',
            'cover' => 'baca 10.jpg',
            'file_path' => 'BACA YUK 10 oke.pdf',
            'ringkasan' => 'Pertama-tama yang tidak boleh terlupakan yaitu kita penjatkan puji syukur ke Hadirat Tuhan Yang Maha Esa, karena atas rahmat-Nya Buletin Baca Yuk...!! Perpustakaan
                            Kota Magelang edisi 10 Tahun 2023 dapat diterbitkan.',
            'penulis' => 'Perpus Kota Magelang',
            'penerbit' => 'Liputan Utama',
            'category_id' => '4',
            'jml_halaman' => '20',
            'created_at' => Carbon::now(),
        ]);
    }
}
