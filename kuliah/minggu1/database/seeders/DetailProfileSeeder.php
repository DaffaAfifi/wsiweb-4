<?php

namespace Database\Seeders;

use App\Models\DetailProfile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailProfile::create([
            'address' => 'Jember',
            'nomor_tlp' => '089532617633',
            'ttl' => '2003-07-05',
            'foto' => 'me.jpeg'
        ]);
    }
}
