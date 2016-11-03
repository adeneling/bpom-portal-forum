<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\PasarAman\PasarAman;
use App\Models\PasarAman\MonitoringPasar;

class PasarAmanBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Banda Aceh';
		$pasarAman->nama_pasar = 'Pasar Rukoh';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Balai';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'Jl. Rukoh Utama (Jembatan Lamnyong) Banda Aceh';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Medan';
		$pasarAman->nama_pasar = 'Pasar Pangururan';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2013';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'Jl. Dr. Hadrianus Sinaga, Kec. Pangururan, Kab. Samosir, Sumatera Utara ';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 11.00;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 2.00;
		$monitorPasar->tahap2 = 22.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 2.00;
		$monitorPasar->tahap2 = 1.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Medan';
		$pasarAman->nama_pasar = 'Pasar Petisah';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Benny Harianto Sihotang, SE, MM';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2013';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '4 Los/800 Kios';
		$pasarAman->alamat_pasar = 'Jl Rajak Baru No. 1A Medan';
		$pasarAman->presentase_jawaban = 39.39;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 3.00;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Medan';
		$pasarAman->nama_pasar = 'Pasar Pusat Pasar';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Jusman Lumbantoruan';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2013';
		$pasarAman->tahun_survey = '2016';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '148 Los/202 Pedagang';
		$pasarAman->alamat_pasar = 'Jl. Pusat Pasar, Medan';
		$pasarAman->presentase_jawaban = 30.3;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 1.02;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 11.00;
		$monitorPasar->tahap2 = 11.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Medan';
		$pasarAman->nama_pasar = 'Pasar Titipapan';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2013';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'Jl. KL Yos Sudarso,  Kota Medan, Sumatera Utara';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Medan';
		$pasarAman->nama_pasar = 'Pasar Aek Kanopan';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'JL. Lintas Timur Sumatera,  Kabupaten Labuhanbatu Utara, Sumatera Utara';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Medan';
		$pasarAman->nama_pasar = 'Pasar Tanggo Rajo';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Nasrul Efendi';
		$pasarAman->sumber_data_intervensi = 'Balai';
		$pasarAman->tahun_mulai_intervensi = '2015';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '230 Kios';
		$pasarAman->alamat_pasar = 'Jl. Tanggo Rajo Ilir Parit II Kuala Tungkal';
		$pasarAman->presentase_jawaban = 21.21;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Jambi';
		$pasarAman->nama_pasar = 'Pasar Bungur Pasar Atas Muara Bungo';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Jambi';
		$pasarAman->nama_pasar = 'Pasar Sarolangun';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = '';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Palembang';
		$pasarAman->nama_pasar = 'Pasar Bukit Sulap';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Balai';
		$pasarAman->tahun_mulai_intervensi = '2015';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 28.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Palembang';
		$pasarAman->nama_pasar = 'Pasar Cinde';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Asril';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '281 Los/561 Kios';
		$pasarAman->alamat_pasar = 'Jl. Jend. Sudirman No. 275, Palembang';
		$pasarAman->presentase_jawaban = 57.6;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 9.00;
		$monitorPasar->tahap2 = 1.96;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 3.00;
		$monitorPasar->tahap2 = 1.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Palembang';
		$pasarAman->nama_pasar = 'Pasar Lemabang';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '0823-7405-1514';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'alan Yos Sudarso, 3 Ilir, Ilir Timur II, Kota Palembang, Sumatera Selatan 30116';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = '';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Palembang';
		$pasarAman->nama_pasar = 'Pasar 10 Ulu';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Bambang Irawan';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '2016';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '336 los/86 kios/ 400 pedagang';
		$pasarAman->alamat_pasar = ' Jl. K.H.A. Azhari, Kota Palembang, Sumatera Selatan';
		$pasarAman->presentase_jawaban = 78.8;
		$pasarAman->hasil_survey = 'Cukup';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Pangkal Pinang';
		$pasarAman->nama_pasar = 'Pasar Rumput';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'Kecamatan Pangkal balam, Bangka Belitung';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Surabaya';
		$pasarAman->nama_pasar = 'Pasar Tambahrejo';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2013';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'JL Tambak Sari, Kota SBY, Jawa Timur';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 48.00;
		$monitorPasar->tahap2 = 7.14;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 17.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Denpasar';
		$pasarAman->nama_pasar = 'Pasar Nyanggelan';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'Jl. Banjar Peken, Serangan, Denpasar Sel., Kota Denpasar, Bali';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kupang';
		$pasarAman->nama_pasar = 'Pasar Oebobo';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'PD Pasar Kota Kupang';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '9 Los';
		$pasarAman->alamat_pasar = 'Jl. Robert Wolter Monginsidi';
		$pasarAman->presentase_jawaban = 27.59;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 1.47;
		$monitorPasar->tahap2 = 2.50;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kupang';
		$pasarAman->nama_pasar = 'Pasar Oeba';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'Jl. Alor, Kota Kupang';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = '';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 3.33;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kupang';
		$pasarAman->nama_pasar = 'Pasar Alok';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'UPTD Pasar';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '2016';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '57 Los/137 Kios';
		$pasarAman->alamat_pasar = 'Maumere, Kab Sikka';
		$pasarAman->presentase_jawaban = 7.41;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kupang';
		$pasarAman->nama_pasar = 'Pasar Kasih Naikoten';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = 'Jl. Fetor Foenay Kupang';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = '';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 9.38;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kupang';
		$pasarAman->nama_pasar = 'Pasar Baru';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Balai';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kupang';
		$pasarAman->nama_pasar = 'Pasar Mbongawani';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Balai';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Palangka Raya';
		$pasarAman->nama_pasar = 'Pasar PPM';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Zulkiflan';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '2016';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '6 Los/400 Kios';
		$pasarAman->alamat_pasar = 'Jalan Iskandar Sampit, Kalimantan Tengah';
		$pasarAman->presentase_jawaban = 70;
		$pasarAman->hasil_survey = 'Cukup';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Samarinda';
		$pasarAman->nama_pasar = 'Pasar Pagi';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'UPTD Dinas Pasar Pagi';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '1040 Los/1040 Kios';
		$pasarAman->alamat_pasar = 'Jl. Gajah Mada Samarinda';
		$pasarAman->presentase_jawaban = 39.4;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 6.00;
		$monitorPasar->tahap2 = 6.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 4.00;
		$monitorPasar->tahap2 = 15.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Samarinda';
		$pasarAman->nama_pasar = 'Pasar Arum Termindung';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'H. Idham Cholid';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '2016';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '100 Kios';
		$pasarAman->alamat_pasar = 'Jl. D.I Pandjaitan ';
		$pasarAman->presentase_jawaban = 56.67;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Samarinda';
		$pasarAman->nama_pasar = 'Pasar Segiri ';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Balai';
		$pasarAman->tahun_mulai_intervensi = '2015';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Samarinda';
		$pasarAman->nama_pasar = 'Pasar Tangga Arung (tidak jadi?)';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = 'Balai';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = 'Belum di Survei';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Palu';
		$pasarAman->nama_pasar = 'Masomba';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Muh. Irwan, SE';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '440 Los/1410 Pedagang';
		$pasarAman->alamat_pasar = 'Jl. Bayam No. 123 Palu';
		$pasarAman->presentase_jawaban = 66.7;
		$pasarAman->hasil_survey = 'Cukup';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 2.30;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kendari';
		$pasarAman->nama_pasar = 'Pasar Sentral Kota';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Drs. Nasaruddin Saud';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '1032 Kios';
		$pasarAman->alamat_pasar = 'Jl. Cakalang Kota Kendari, Sultra';
		$pasarAman->presentase_jawaban = 66.67;
		$pasarAman->hasil_survey = 'Cukup';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Kendari';
		$pasarAman->nama_pasar = 'Pasar Lacaria';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'A.Misbahuddin';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2016';
		$pasarAman->tahun_survey = '2016';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '483 Los/Kios/600 Pedagang';
		$pasarAman->alamat_pasar = 'Jl. By Passs Kecamatan Lasusua, Kendari, Sulawesi Tenggara';
		$pasarAman->presentase_jawaban = 32;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = 'Ambon';
		$pasarAman->nama_pasar = 'Pasar Mardika';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = 'Vicky Maruanaja';
		$pasarAman->sumber_data_intervensi = 'Pusat';
		$pasarAman->tahun_mulai_intervensi = '2014';
		$pasarAman->tahun_survey = '2015';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '475 Los/981 Kios';
		$pasarAman->alamat_pasar = 'Jl. Pantai Mardika Kel Rijali, Kota Ambon, Maluku';
		$pasarAman->presentase_jawaban = 33.33;
		$pasarAman->hasil_survey = 'Kurang';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0.00;
		$monitorPasar->tahap2 = 0.00;
		$monitorPasar->save();

		$pasarAman = new PasarAman;
		$pasarAman->user_id = 1;
		$pasarAman->balai_pom = '';
		$pasarAman->nama_pasar = '';
		$pasarAman->kepala_pasar = '';
		$pasarAman->petugas_pasar = '';
		$pasarAman->sumber_data_intervensi = '';
		$pasarAman->tahun_mulai_intervensi = '';
		$pasarAman->tahun_survey = '';
		$pasarAman->contact_person = '';
		$pasarAman->los_kios = '';
		$pasarAman->alamat_pasar = '';
		$pasarAman->presentase_jawaban = 0;
		$pasarAman->hasil_survey = '';
		$pasarAman->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2013';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2014';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();

		$monitorPasar = new MonitoringPasar;
		$monitorPasar->user_id = 1;
		$monitorPasar->pasar_aman_id = $pasarAman->id;
		$monitorPasar->tahun_survey = '2015';
		$monitorPasar->tahap1 = 0;
		$monitorPasar->tahap2 = 0;
		$monitorPasar->save();
    }
}
