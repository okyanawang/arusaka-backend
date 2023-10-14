<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('courses')->delete();

        DB::table('courses')->insert(array (
            0 =>
            array (
                'name' => 'Belajar Alat Musik Rinding',
                'slug' => 'belajar-alat-musik-rinding',
                'description' => 'Belajar memainkan alat musik rinding, alat musik khas daerah Jawa Barat.',
                'status' => 'ACTIVE',
                'image' => 'https://res.cloudinary.com/dz2arrelg/image/upload/v1695472522/Rinding_course_i2dwbx.jpg',
                'price' => 35000,
                'categories_id' => 3,
                'partners_id' => 3,
            ),
            1 =>
            array (
                'name' => 'Belajar Alat Musik Demung',
                'slug' => 'belajar-alat-musik-demung',
                'description' => 'Demung adalah alat musik tradisional Jawa Tengah yang masih termasuk di dalam keluarga balungan. Dalam pagelaran musik gamelan, biasanya terdapat dua jenis demung, yaitu demung dengan nada pelog dan slendro. Meskipun bentuknya cukup besar, namun demung justru menghasilkan nada oktaf terendah dalam alat musik balungan.',
                'status' => 'ACTIVE',
                'image' => 'https://res.cloudinary.com/dz2arrelg/image/upload/v1695472522/Demung_cuag4i.jpg',
                'price' => 30000,
                'categories_id' => 2,
                'partners_id' => 2,
            ),
            2 =>
            array (
                'name' => 'Belajar Alat Musik Kendang',
                'slug' => 'belajar-alat-musik-kendang',
                'description' => 'Kendang atau gendang adalah alat musik tradisional Indonesia yang dibuat dari batang pohon yang bagian dalamnya dibuang. Untuk kepalanya, digunakan kulit hewan seperti sapi atau kambing.',
                'status' => 'ACTIVE',
                'image' => 'https://res.cloudinary.com/dz2arrelg/image/upload/v1695472521/Kendang_Course_vdtvn6.jpg',
                'price' => 30000,
                'categories_id' => 2,
                'partners_id' => 2,
            ),
        ));

    }
}
