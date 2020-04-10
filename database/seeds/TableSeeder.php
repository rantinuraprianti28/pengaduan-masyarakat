<?php

use Illuminate\Database\Seeder;
use App\Masyarakat;
use App\Petugas;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
	        'nik' => '0012968575758686',
		   'nama' => 'Ranti Nurprianti',
		   'username' => 'Ranti',
		   'password' => Hash::make('ranti'),
		   'telp' => '087765876987'
	   ]);
	
	  Petugas::create([
		   'nama_petugas' => 'admin',
		   'username' => 'admin',
		   'password' => Hash::make('admin'),
		   'telp' => '089876543210',
		    'level' => 'admin'
	   ]);
	
	   Petugas::create([
		   'nama_petugas' => 'petugas',
		   'username' => 'petugas',
		   'password' => Hash::make('petugas'),
		   'telp' => '082256876543',
		    'level' => 'petugas'
	   ]);
    }
}
