<?php

use Illuminate\Database\Seeder;

use App\Models\Berita\Berita;

class BeritaSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		Storage::makeDirectory('berita/foto');

		// 1
		$path = public_path('seeder/berita/1.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = '2020, Pasar 23 Maret Bebas Bahan Berbahaya';
		$berita->konten = '<p><strong>TRIBUNMANADO.CO.ID, KOTAMOBAGU</strong>&nbsp;- Dinas Perindustrian Perdagangan Koperasi dan Penanaman Modal (Disperindagkop-PM)&nbsp;<a href="http://manado.tribunnews.com/tag/kotamobagu/" title="Kotamobagu">Kotamobagu</a>&nbsp;menargetkan pada tahun 2020&nbsp;<a href="http://manado.tribunnews.com/tag/pasar-23-maret/" title="Pasar 23 Maret">Pasar 23 Maret</a>bebas bahan berbahaya.</p>

<p>Untuk itu, Disperindagkop-PM akan melakukan pemeriksaan intensif di pasar tersebut mulai September ini dan terus dilakukan setiap bulan selanjutnya.</p>

<p>&quot;Dan apabila pada 2019 sudah tidak terdeteksi lagi bahan berbahaya maka akan dicanangkan oleh BPOM pasar 23 Maret sebagai pasar bebas bahan berbahaya,&quot; ujar Kepala Seksi Pasar Disperindagkop PM Syahrul Syafii, Sabtu (17/9/2016).</p>

<p>Sebanyak tiga aparatur sipil negara (ASN) dipersiapkan Disperindagkop-PM Kotamogu sebagai petugas pemeriksa di<a href="http://manado.tribunnews.com/tag/pasar-23-maret/" title="Pasar 23 Maret">Pasar 23 Maret</a>. Mereka akan mendapat pelatihan dari Balai Besar Pengawasa Obat dan Makanan (BBPOM) Manado.</p>

<p>&quot;Ada tiga orang saya satu di antaranya telah mendapat pelatihan pada 11 dan 12 Agustus lalu. Pelatihan tersebut langsung dilaksanakan di&nbsp;<a href="http://manado.tribunnews.com/tag/pasar-23-maret/" title="Pasar 23 Maret">Pasar 23 Maret</a>&nbsp;dan kini sudah mendapat surat rekomendasi untuk pemeriksaan,&quot; ujar Syahrul.</p>

<p>Selain surat rekomendasi, tiga orang tersebut dilengkapi dengan berbagai alat pemeriksaan bahan berbahaya dalam makanan.</p>

<p>&quot;Ada wadah tempat mengkur, dan beberapa bahan kimia untuk menimbulkan reaksi apabila makanan mengandung bahan berbahaya seperti borak dan formalin. Kita gunakan sampel,&quot; ujar dia.</p>

<p>September ini, Disperindagkop-PM sudah melaksanakan pemeriksaan dan hasilnya belum ditemukan bahan berbahaya terkandung dalam makanan di&nbsp;<a href="http://manado.tribunnews.com/tag/pasar-23-maret" title="Pasar 23 Maret">Pasar 23 Maret</a>.</p>

<p>&quot;Kami mengambil sampel makanan tahu, ikan putih, ikan asin, kue berwarna, gorengan, gula merah, ikan fufu, bakso, dan mie. Hasilnya semuanya aman dan tidak mengandung bahan berbahaya,&quot; ujarnya.</p>

<p>Selanjutnya pemeriksaan akan dilaksanakan lagi pada awal Oktober. &quot;Kita akan turun lagi pada awal Oktober, masih dengan didampingi petugas dari BPOM ada sekitar tujuh orang. Jika ditemukan bahan berbahaya akan kita laporkan ke pimpinan,&quot; kata Syharul.</p>

<p>Kepala Disperindagkop-PM&nbsp;<a href="http://manado.tribunnews.com/tag/kotamobagu" title="Kotamobagu">Kotamobagu</a>&nbsp;Herman Aray mengatakan untuk pemilik makanan yang ditemukan mengandung bahan berbahaya akan diberikan teguran dan secara bertahap sampai sanksi penutupan tempat usaha.</p>

<p>&quot;Kalau baru pertama kali kita berikan teguran. Jika sudah tiga kali akan diberikan sanksi tegas seperti penutupan tempat usaha. Namun kita akan berkoordinasi dengan dinas terkait perizinan,&quot; ujarnya.&nbsp;<strong>(handhika dawangi)</strong></p>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = 'Inde-inde atau perempuan pedagang di Pasar 23 Maret lebih berdagang di luar gedung pasar. ';
		$berita->save();

		// 2
		$path = public_path('seeder/berita/2.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = 'Komunitas Pasar Bulili Petobo di Palu Antusias Hadiri BIMTEK Pasar Aman Dari Bahan Berbahaya';
		$berita->konten = '<p>Program Pasar Aman dari Bahan Berbahaya Oleh Badan POM RI sejak tahun 2013 &ndash; 2015 telah secara nyata menurunkan tingkat penemuan penggunaan bahan berbahaya di Pasar Tradisional di Indonesia termasuk di Pasar-Pasar Tradisional di Sulawesi Tengah dan diharapkan setiap petugas pasar yang telah diBIMTEK dan peserta&nbsp; penyuluhan/komunitas pasar dapat menjadi duta-duta dalam pengawasan bahan berbahaya di pasar-pasar Tradisional yang ada di daerah. Demikian antara lain isi sambutan Kepala Balai POM di Palu (Drs. Safriansyah, Apt., M.Kes) pada saat pembukaan kegiatan.</p>

<p>Kegiatan BIMTEK Pasar Aman dari Bahan Berbahaya kepada Petugas Pasar pada tanggal 20 Juli 2016, dengan melatih petugas pasar menggunakan&nbsp;<em>Rapid Tes Kit&nbsp;</em>untuk uji Formalin, Boraks, Rhodamin B dan Methanil Yellow. Kegiatan Penyuluhan Kepada Komunitas Pasar yang dihadiri oleh 50 orang peserta dilaksanakan pada tanggal 21 Juli 2016 di Ruang &lsquo;Posintomu&rsquo; Balai POM di Palu. Materi penyuluhan disampaikan oleh &nbsp;Yudhi Riani Firman, S.Sos., M.Si (Kabid.Pasar Dinas Perindagkop); Suanda, SKM., M.Kes (Kasie. Penyehatan Lingkungan Dinas Kesehatan); Dalam kegiatan ini juga dilaksanakan penyerahan Rompi Pengawas Bahan Berbahaya dan Paket&nbsp;<em>Rapid Test Kit</em>&nbsp;Bahan Berbahaya kepada Petugas Pasar Bulili Petobo.</p>

<p>Peserta penyuluhan dengan antusias menyampaikan pertanyaan, saran dan harapan-harapan mereka agar pengawasan Bahan Berbahaya benar-benar bisa dilakukan bersama-sama oleh masyarakat dan pemerintah (lintas sektor terkait) pada akhirnya dapat menghentikan suplai bahan berbahaya dari sales kanvas dengan cara melaporkan ke Balai POM di Palu apabila menemukan penggunaan bahan berbahaya ke dalam produk pangan maupun suplai bahan berbahaya oleh sales kanvas ke Kios-Kios di Pasar-Pasar Tradisional.</p>

<p>Peningkatan&nbsp;<em>Awareness</em>&nbsp;oleh Balai POM di Palu dan Lintas Sektor terkait Program Pasar Aman dari Bahan Berbahaya dan pemberdayaan komunitas/petugas pasar tradisional diharapkan dapat menghentikan peredaran, suplai bahan berbahaya di pasar-pasar tardisional dan penggunaan bahan berbahaya yang ditambahkan ke dalam makanan.</p>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = '';
		$berita->save();

		// 3
		$path = public_path('seeder/berita/3.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = 'BPOM Gandeng 108 Pasar Tradisional Cegah Bahan Berbahaya';
		$berita->konten = '<p><strong>TEMPO.CO</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;- Badan Pengawas Obat dan Makanan (BPOM) mencatat telah mengembangkan kerja sama pengawasan dan penyediaan sarana mini laboratorium dengan 108 pasar tradisional hingga saat ini.<br />
<br />
Kerja sama pengawasan dan penyediaan sarana mini laboratorium tersebut diharapkan dapat menjadi langkah awal untuk mencegah masuknya bahan-bahan berbahaya di pasar tradisional.<br />
<br />
&ldquo;Ini adalah langkah awal, tentu saja kami harus bertindak dari hulu hingga hilirnya. Tetapi, setidaknya, kerja sama semacam ini bisa diteruskan hingga ke level pembinaan pedagang pasar supaya mereka sadar bahan-bahan apa saja yang berbahaya bagi kesehatan,&rdquo; kata Kepala BPOM Roy Alexander Sparringa di Tangerang, Senin (11 April 2016).<br />
<br />
Tak terbatas pada pasar tradisional saja, kali ini BPOM menggandeng pengelola pasar modern BSD City, Sinar Mas Land, untuk membina pedagang pasar sekaligus menyediakan mini laboratorium.</p>

<p>Nantinya, laboratorium ini dapat dimanfaatkan untuk mengetes kandungan zat yang dilarang pada bahan pangan tertentu sehingga pemerintah terkait bisa langsung memberikan aksi lebih lanjut.<br />
<br />
Roy mengungkapkan, pemerintah daerah bisa mereplikasi kerja sama BPOM dengan pasar tradisional dan modern agar upaya pencegahan dan penindakan terhadap bahan-bahan berbahaya yang beredar di pasar bisa segera diatasi.<br />
<br />
&ldquo;Sudah banyak pemda yang kerja sama dengan kami, sehingga rekomendasi BPOM terkait komponen-komponen kimia yang berbahaya bisa segera ditindaklanjuti misalnya Jakarta, Depok, dan Surabaya,&rdquo; tuturnya.<br />
<br />
Di lain pihak, Kepala BPOM Serang Mohamad Kashuri mengungkapkan kerja sama tersebut merupakan upaya pihaknya untuk membina pedagang hingga pengelola pasar agar mampu mandiri dalam hal pengawasan bahan pangan yang dijualnya.<br />
<br />
&ldquo;Kemampuan kami sangat terbatas, apalagi mini laboratorium yang berupa mobil saat ini terus bergerak dari satu tempat ke tempat lainnya, mulai dari sekolah sampai ke pasar-pasar,&rdquo; katanya.<br />
<br />
Berdasarkan catatan BPOM, dari ribuan rekomendasi yang dikeluarkan BPOM terhadap sejumlah temuan, pemerintah daerah setempat hanya menindaklanjuti sekitar 12% dari total rekomendasi pada tahun lalu.<br />
<br />
Menurutnya, jumlah tersebut meningkat dibandingkan angka penindaklanjutan oleh pemerintah daerah yang masih berada di bawah 7% pada dua tahun lalu.<br />
<br />
Sepanjang Januari-September 2015, BPOM menyatakan aduan konsumen terhadap produk pangan menempati urutan teratas dengan proporsi 44,9% atau sebanyak 9.437 laporan.</p>

<p>Pada periode yang sama, laporan sektor pangan berkontribusi sebesar 47,93% atau sebanyak 6.803 laporan, diikuti oleh kosmetika (15,01%), obat tradisional (10,28%), dan lainnya.</p>

<p>Sementara itu, terkait penemuan produk ilegal Januari-November 2015, BPOM melakukan pemusnahan atas produk ilegal dengan nilai mencapai Rp47,8 miliar dari total temuan produk yang telah diamankan senilai Rp140 miliar.</p>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = 'Makanan yang diperiksa oleh petugas BPOM karena berpotensi mengandung bahan berbahaya dalam makanan dalam acara peluncuran Mobil Pangan dan Gizi Hero (MOGI Hero) di SDN Cipinang Muara 05 Pagi, Jakarta, 17 Maret 2016. TEMPO/Wisnu Agung Prasetyo';
		$berita->save();

		// 4
		$path = public_path('seeder/berita/4.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = 'BPOM Temukan Makanan Kandung Bahan Berbahaya di Pasar Wadai Pulpis';
		$berita->konten = '<p>Pulang Pisau (Antara Kalteng) - Kepala Balai Pengawasan Obat dan Makanan (BPOM) Palangka Raya Kalimantan Tengah, Trikoranti Mustikawati menyebutkan dari sebanyak 29 sampel makanan dan minuman yang dijual di Pasar Wadai Ramadan Pulang Pisau (Pulpis), dua diantaranya mengandung bahan formalin dan rodhamin B yang berbahaya bagi kesehatan.&nbsp;<br />
<br />
&quot;Ada dua sampel pangan yang mengandung mengandung formalin dan rodhamin B setelah kita lakukan uji laboratorium,&acirc;&euro; kata Trikoranti di Pulang Pisau, Selasa sore.<br />
<br />
Dikatakannya, bahwa untuk bahan Formalin ditemukan pada makanan mie yang dijual oleh pedagang di pasar setempat. Sementara untuk bahan rodhamin B ditemukan pada bahan campuran minuman es. Pedagang yang menjual pangan olahan tersebut sudah peringatkan agar tidak menggunakan lagi bahan yang dijual oleh produsen dan mengandung bahan berbahaya bagi kesehatan itu.<br />
<br />
Terkait dengan ditemukannya bahan-bahan berbahaya dalam makanan dan minuman yang dijual oleh pedagang di Pasar Wadai Ramadan setempat, Kepala Dinas Kesehatan (Dinkes) Kabupaten Pulang Pisau Muliyanto Budihardjo mengatakan bahwa pedagang yang bersangkutan sudah diberikan pembinaan. Yang perlu digarisbawahi, kata dia, pedagang juga tidak mengetahui bahwa bahan-bahan dasar yang dibelinya untuk diolah menjadi makanan itu sudah mengandung formalin dan rodhamin B. Semua hanya karena ketidaktahuan pedagang dan bukan ada unsur kesengajaan.<br />
<br />
Pihaknya juga telah mengingatkan kepada pedagang untuk tidak membeli bahan-bahan berbahaya itu,&nbsp; setelah ada hasil uji laboratorium yang dilakukan oleh BPOM Palangka Raya.&nbsp;<br />
<br />
Menurut dia, dengan adanya uji laboratorium ini, masyarakat tidak perlu lagi menjadi was-was karena Ia menjamin produk makanan dan minuman yang beredar dan dijual di Pasar Wadai Ramadan sekarang sudah aman untuk dikonsumsi oleh masyarakat.<br />
<br />
Muliyanto mengungkapkan pengujian sampel makanan ini sebagai antisipasi bagi pedagang dan masyarakat selaku konsumen terhadap penggunaan bahan-bahan berbahaya, sekaligus dalam rangka&nbsp; untuk meningkatkan derajat kesehatan masyarakat. Bulan Ramadan, kata dia, sangat rentan terhadap masalah kesehatan dan beredarnya barang kadaluwarsa. Untuk itu, kerjasama antar lintas sektor terkait hingga menjelang Hari Raya Idul Fitri ini diharapkan dapat mencegah dan memberikan rasa aman kepada masyarakat terhadap berbagai produk barang kebutuhan pokok yang beredar di sejumlah pasar, ucap Muliyanto<br />
&nbsp;<br />
Pengujian terhadap aneka produk pangan olahan ini dilakukan Dinkes bekerjasama dengan BPOM Palangka Raya, Disperindagkop dan UMKM dan Satpol PP setempat. Selain ditemukan penggunaan bahan berbahaya dalam makanan dan minuman di Pasar Wadai Ramadan, BPOM juga menemukan sejumlah bahan minuman yang sudah masa &quot;expired&quot; atau kadaluwarsa di Pasar Patanak. Lagi-lagi beredarnya barang tersebut, dikarenakan ketidaktahuan pedagang dan lemahnya kontrol sebelum barang-barang dipasarkan.</p>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = 'Kepala Dinas Kesehatan Muliyanto Budihardjo (berkacamata) bersama Kepala SatPol PP Hans Kenedison, dan Kabid Perdagangan Disperindagkop dan UMKM Fitriadie melakukan pemeriksaan terhadap sejumlah barang yang dijual pedagang di Pasar Patanak. (Foto Antara Kalteng/Adi Waskito)';
		$berita->save();

		// 5
		$path = public_path('seeder/berita/5.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = 'Cegah Masuknya Bahan Berbahaya, BPOM Gandeng 108 Pasar Tradisional';
		$berita->konten = '<p><strong>Bisnis.com</strong>, TANGERANG - Badan Pengawas Obat dan Makanan (BPOM) mencatat telah mengembangkan kerja sama pengawasan dan penyediaan sarana mini laboratorium dengan 108 pasar tradisional hingga saat ini.<br />
<br />
Kerja sama pengawasan dan penyediaan sarana mini laboratorium tersebut diharapkan dapat menjadi langkah awal untuk mencegah masuknya bahan-bahan berbahaya di pasar tradisional.<br />
<br />
&ldquo;Ini adalah langkah awal, tentu saja kami harus bertindak dari hulu hingga hilirnya. Tetapi, setidaknya, kerja sama semacam ini bisa diteruskan hingga ke level pembinaan pedagang pasar supaya mereka sadar bahan-bahan apa saja yang berbahaya bagi kesehatan,&rdquo; kata Kepala BPOM Roy Alexander Sparringa di Tangerang, Senin (11/4/2016).<br />
<br />
Tak terbatas pada pasar tradisional saja, kali ini BPOM menggandeng pengelola pasar modern BSD City, Sinar Mas Land, untuk membina pedagang pasar sekaligus menyediakan mini laboratorium.</p>

<p>Nantinya, laboratorium ini dapat dimanfaatkan untuk mengetes kandungan zat yang dilarang pada bahan pangan tertentu sehingga pemerintah terkait bisa langsung memberikan aksi lebih lanjut.<br />
<br />
Roy mengungkapkan, pemerintah daerah bisa mereplikasi kerja sama BPOM dengan pasar tradisional dan modern agar upaya pencegahan dan penindakan terhadap bahan-bahan berbahaya yang beredar di pasar bisa segera diatasi.<br />
<br />
&ldquo;Sudah banyak pemda yang kerja sama dengan kami, sehingga rekomendasi BPOM terkait komponen-komponen kimia yang berbahaya bisa segera ditindaklanjuti misalnya Jakarta, Depok, dan Surabaya,&rdquo; tuturnya.<br />
<br />
Di lain pihak, Kepala BPOM Serang Mohamad Kashuri mengungkapkan kerja sama tersebut merupakan upaya pihaknya untuk membina pedagang hingga pengelola pasar agar mampu mandiri dalam hal pengawasan bahan pangan yang dijualnya.<br />
<br />
&ldquo;Kemampuan kami sangat terbatas, apalagi mini laboratorium yang berupa mobil saat ini terus bergerak dari satu tempat ke tempat lainnya, mulai dari sekolah sampai ke pasar-pasar,&rdquo; katanya.<br />
<br />
Berdasarkan catatan BPOM, dari ribuan rekomendasi yang dikeluarkan BPOM terhadap sejumlah temuan, pemerintah daerah setempat hanya menindaklanjuti sekitar 12% dari total rekomendasi pada tahun lalu.<br />
<br />
Menurutnya, jumlah tersebut meningkat dibandingkan angka penindaklanjutan oleh pemerintah daerah yang masih berada di bawah 7% pada dua tahun lalu.<br />
<br />
Sepanjang Januari-September 2015, BPOM menyatakan aduan konsumen terhadap produk pangan menempati urutan teratas dengan proporsi 44,9% atau sebanyak 9.437 laporan.</p>

<p>Pada periode yang sama, laporan sektor pangan berkontribusi sebesar 47,93% atau sebanyak 6.803 laporan, diikuti oleh kosmetika (15,01%), obat tradisional (10,28%), dan lainnya.</p>

<p>Sementara itu, terkait penemuan produk ilegal Januari-November 2015, BPOM melakukan pemusnahan atas produk ilegal dengan nilai mencapai Rp47,8 miliar dari total temuan produk yang telah diamankan senilai Rp140 miliar.</p>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = 'Ilustrasi: Petugas Balai POM menguji contoh makanan';
		$berita->save();

		// 6
		$path = public_path('seeder/berita/6.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = 'Razia di Pasar Pagi Jakbar, BPOM Sita 225 Ribu Kosmetik Ilegal';
		$berita->konten = '<p><strong>Jakarta</strong>&nbsp;- Satgas Pemberantasan obat dan Makanan Ilegal Badan Pengawas Obat dan Makanan (BPOM) melakukan penggerebekan di lantai 3 Pasar Asemka, Tambora, Jakarta Barat. 225 ribu dari 144 merek kosmetik ilegal disita petugas dalam razia ini.<br />
<br />
&quot;Barang bukti 225 ribu item dari 144 merek,&quot; ujar kepala Balai Besar POM Jakarta Dewi Prawitasari kepada wartawan di lokasi penggerebekan, Selasa (20/9/2016).<br />
<br />
Razia sendiri dilakukan sejak pukul 10.00 WIB, bersama Reskrimsus Polda Metro Jaya, Bareskrim Mabes Polri, Dinas Kesehatan Provinsi DKI dan Direktorat Barang Beredar dan Jasa Kementerian Perdagangan.<br />
<br />
Dewi mengatakan tahun 2016 ini penindakan seperti ini telah dilakukan 2 kali sejak bulan April. Dari penindakan, total produk yang dirazia mencapai Rp 7 miliar, dengan distributor terbanyak berasal dari Jakarta Barat dan Jakarta Selatan.<br />
<br />
&quot;Ini merupakan operasi gabungan besar di seluruh Indonesia, di semua balai besar POM. Ada 7 gudang dan satu pemilik berinisial HH yang diamankan,&quot; jelas Dewi.<br />
<br />
Pasar Asemka memang dikenal sebagai sentra aksesoris dan kosmetik murah. Namun sayang banyak sekali kosmetik ilegal dan tanpa izin edar.<br />
<br />
&quot;Di sini kosmetik ilegal banyak. Kosmetik di Jakarta ini distribusikan bukan hanya Jakarta. Jadi yang banyak ini (barang bukti) belum tentu di konsumsi masyarakat Jakarta,&quot; kata Dewi.&nbsp;</p>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = 'BPOM Sidak Pasar Pagi Asemka (Foto: Mei Amelia / Detikcom)';
		$berita->save();

		// 7
		$path = public_path('seeder/berita/7.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = 'Razia Pasar, BPOM Banten Temukan Bahan Takjil Berbahaya';
		$berita->konten = '<p><strong>Liputan6.com, Tangerang -</strong>&nbsp;Badan Pengawas Obat dan Makanan (<a href="http://ramadan.liputan6.com/read/2531685/sidak-makanan-berbuka-puasa-bpom-pekanbaru-temukan-zat-berbahaya" title="BPOM">BPOM</a>) Provinsi Banten bersama Bupati Tangerang Ahmed Zaki Iskandar sidak ke Pasar Modern Citra Raya dan Giant Citra Raya Kecamatan Cikupa hari ini. Hasilnya, beberapa bahan makanan mengandung berformalin dan kedaluwarsa.<br />
<br />
Sejumlah makanan dari dua tempat tersebut diuji sampel oleh petugas BPOM. Hasilnya, ditemukan kandungan formalin pada mi dan pewarna Rodamin B pada pacar cina yang dijual di City Market.<br />
<br />
Sementara makanan dari Giant tidak mengandung zat berbahaya, hanya saja untuk makanan kiloan seperti nugget tidak dilengkapi tanggal kedaluwarsa.<br />
<br />
&quot;Ada sejumlah makanan yang ditemukan mengandung pewarna tekstil, bahan makanan yang biasa digunakan untuk membuat takjil. Bahkan, kita temukan juga makanan berformalin yang terdapat pada mi kuning,&quot; kata Bupati Tangerang Ahmed Zaki Iskandar usai mengikuti razia, Rabu (15/6/2016).<br />
<br />
Mendapati temuan bahan berbahaya tersebut, Zaki mengaku pihaknya terus memantau makanan di pasar tradisional dan modern selama bulan&nbsp;<a href="http://news.liputan6.com/read/2532163/lapak-takjil-di-ciganjur-dibongkar-satpol-pp-warga-blokir-jalan" title="puasa">puasa</a>&nbsp;ini. Hal itu agar masyarakat aman dari makanan yang mengandung zat berbahaya.<br />
&nbsp;<br />
&quot;Untuk makanan yang tidak ada tanggal kedaluwarsanya, kita tegur pengelolanya dan kita minta agar tidak dijual dulu sampai tanggal kedaluwarsanya dicantumkan,&quot; ujar dia.<br />
<br />
Sedangkan untuk makanan yang mengandung zat berbahaya, pihaknya langsung memberi pembinaan kepada pedagang dan menelusuri asal barangnya.<br />
<br />
&quot;Kalau cuma pedagangnya yang ditindak, kita tidak akan tahu hulunya. Jadi penjual asalnya juga kita tindak,&quot; kata Zaki.<br />
<br />
Kepala Badan Pengawasan Obat dan Makanan Provinsi Banten Muhammad Kasuri mengatakan, pihaknya dan Dinas Kesehatan Kabupaten Tangerang akan melakukan penelusuran dan pendataan para pedagang.&nbsp;<br />
<br />
&quot;Kerja sama ini dalam arti meningkatkan sosialisasi kepada masyarakat, pentingnya memilih makanan yang aman dikonsumsi. Bukan sekadar murah,&quot; ucap Kasuri.</p>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = 'Petugas melakukan pemeriksaan makanan saat inspeksi mendadak BPOM di Bendungan Hilir, Jakarta, (10/6). Bagi pedagang yang melakukan kecurangan akan diberi sangsi tegas untuk tidak berjualan. (Liputan6.com/Gempur M Surya)';
		$berita->save();

		// 8
		$path = public_path('seeder/berita/8.jpg');
		$filename = 'berita/foto/'.str_random(10).'.'.explode('.', $path)[1];
		Storage::put($filename, file_get_contents($path));
		$berita = new Berita;
		$berita->user_id = 1;
		$berita->judul = 'Strategi Pengendalian Bahan Berbahaya Melalui Program Pasar Aman';
		$berita->konten = '<p>Program Pasar Aman dari Bahan Berbahaya dilaksanakan oleh Badan POM melalui Direktorat Pengawasan Produk dan Bahan Berbahaya karena hasil pengawasan yang dilakukan khususnya dipasar tradisional menunjukkan masih ditemukannya penyalahgunaan bahan berbahaya pada pangan. Bahan berbahaya yang masih sering disalahgunakan antara lain formalin, boraks, dan pewarna non pangan (misalnya kuning metanil, rodamin b) masih mudah diperoleh dan diperjualbelikan secara bebas dengan harga relatif murah. Hal tersebut merupakan cerminan dari pengendalian peredaran bahan berbahaya yang belum optimal dan menyebabkan potensi praktek penyalahgunaan bahan berbahaya meningkat. Berdasarkan fakta tersebut, pengendalian peredaran bahan berbahaya di pasar merupakan hal penting yang harus dilakukan dalam upaya penurunan potensi penyalahgunaan bahan berbahaya pada pangan.</p>

<p>Dalam rangka mendukung program Pasar Sehat dari Kementerian Kesehatan, Badan POM telah memprakarsai Program Pasar Aman dari Bahan Berbahaya yang Disalahgunakan dalam Pangan dengan tujuan agar goal dari program pasar sehat bisa tercapai yaitu pasar yang nyaman, aman, bersih dan sehat. Pada pelaksanaan program ini, telah dilakukan intervensi terhadap pasar contoh yang melibatkan lintas sektor terkait. Hal tersebut tertuang dalam kebijakan Badan POM tahun 2013&ndash;2015 dalam rangka mencapai sasaran &ldquo;Menurunnya Makanan yang Mengandung Bahan Berbahaya&rdquo; melalui salah satu indikator kinerja yaitu &ldquo;Jumlah Pasar yang Diintervensi Menjadi Pasar Aman dari Bahan Berbahaya&rdquo;.</p>

<p><strong>TUJUAN</strong></p>

<p>Tujuan dari program ini adalah terwujudnya Pasar Aman dari Bahan Berbahaya yang Disalahgunakan dalam Pangan dengan komitmen dan dukungan penuh dari unsur yaitu PEMDA/lintas sektor; pemangku kepentingan (<em>Stakeholder)</em>&nbsp;yang terdiri dari pihak swasta/lembaga swadaya masyarakat dan komunitas pasar (pedagang, pekerja, pengelola, asosiasi, pemasok, masyarakat). Tujuan tersebut akan dicapai dengan pengendalian peredaran bahan berbahaya yang disalahgunakan dalam pangan atau pengendalian pangan yang berpotensi mengandung bahan berbahaya. Hasil akhir yang ingin dicapai adalah: pasar yang bersih, aman, nyaman dan sehat. Sasaran yang ingin dicapai dalam kurun waktu selama 3 (tiga) tahun, (2013-2015) di 108 (seratus delapan) pasar contoh yang tersebar pada 31 (tiga puluh satu) propinsi adalah membangun kemandirian komunitas pasar untuk membebaskan pasar dari peredaran bahan berbahaya yang disalahgunakan pada pangan.</p>

<p>&nbsp;</p>

<p><strong>STRATEGI PENGENDALIAN BAHAN BERBAHAYA</strong></p>

<ol>
	<li>Peningkatan komitmen PEMDA/lintas sektor,&nbsp;<em>stakeholder&nbsp;</em>dan komunitas pasar terkait lainnya, dengan melakukan advokasi pada PEMDA/lintas sektor di daerah dan inisiasi penyediaan peralatan pendukung dalam rangka pengawasan bahan berbahaya di pasar contoh. Diharapkan kegiatan serupa di pasar lain dapat dilanjutkan dan dikembangkan oleh PEMDA setempat.</li>
	<li>Peningkatan pengetahuan komunitas pasar dengan melakukan penyuluhan kepada pedagang pangan dan pedagang bahan pangan; serta melakukan peyebaran informasi kepada masyarakat. Penyebaran informasi kepada masyarakat dilakukan antara lain dengan pemutaran film layanan masyarakat dan pemutaran spot iklan di radio. Penyuluhan dan penyebaran informasi ini diharapkan dapat memberikan pemahaman dan merubah perilaku para pedagang supaya tidak lagi menjual bahan berbahaya yang disalahgunakan dalam pangan. Namun tetap disadari bahwa penyuluhan ini membutuhkan waktu dan harus terus menerus dilakukan. Dengan demikian diharapkan masyarakat dapat mengenali ciri&ndash;ciri pangan yang mengandung bahan berbahaya serta timbulnya kesadaran akan bahaya penyalahgunaan bahan berbahaya pada pangan dan akibatnya pada kesehatan. Dengan demikian, konsumen akan lebih teliti dalam memilih pangan yang aman dan sehat yang pada akhirnya rantai peredaran bahan berbahya di pasar dapat terputus dan menghilang.</li>
	<li>Peningkatan pengetahuan dan keterampilan pengelola pasar yang dalam hal ini adalah petugas Dinas Pasar atau petugas pasar untuk melakukan pengawasan bahan berbahaya pada pangan melalui Bimbingan Teknis/BIMTEK. Kepada para peserta BIMTEK diberikan rompi &ldquo;Pengawas Bahan Berbahaya. Melalui kegiatan ini, diharapkan petugas pasar memiliki bekal pengetahuan dan ketrampilan yang cukup untuk melaksanakan pengawasan bahan berbahaya pada pangan yang berpotensi mengandung bahan berbahaya.</li>
	<li>Pemantapan model pasar contoh yang merupakan replikasi pasar aman dari bahan berbahaya. Program ini dilaksanakan dengan pemberdayaan fasilitator yang ada di daerah serta membangun kemitraan dengan PEMDA serta pelaku usaha yang memiliki program corporate social responsibility (CSR) bidang sosial kemasyarakatan agar turut serta melakukan replikasi model pasar contoh.</li>
	<li>Pengembangan monitoring dan evaluasi terhadap implementasi pasar aman. Program ini dilakukan melalui pelaksanaan monitoring dan evaluasi yang berkesinambungan oleh gugus tugas yang dibentuk di pusat dan daerah. Pelaksanaan tugasnya mengacu pada Pedoman Monitoring dan Evaluasi yang diperbaharui secara terus menerus agar intervensi yang dilakukan dapat lebih optimal.</li>
</ol>

<p><strong>HASIL PELAKSANAAN</strong></p>

<p>Realisasi program yang sudah dilaksanakan pada tahun 2013 telah diintervensi 62 (enam puluh dua) pasar contoh di 16 (enam belas) propinsi di Indonesia dan tahun 2014 ditetapkan lagi 15 (lima belas) pasar yang akan diintervensi di 15 (lima belas) propinsi yang belum diintervensi pada tahun 2013.</p>

<p>Berikut hasil yang sudah dilakukan dan dicapai pada tahun 2013 :</p>

<ol>
	<li>Telah dilakukan Advokasi Komitmen PEMDA dan Lintas Sektor pada 16 (enam belas) propinsi.</li>
	<li>Telah disusun Modul Juknis cara identifikasi bahan berbahaya dan pangan yang diduga mengandung bahan berbahaya.</li>
	<li>Telah dilaksanakan Bimbingan Teknis terhadap petugas pengelola pasar dari 62 (enam puluh dua) pasar yang menjadi pasar target pada 16 (enam belas) Setiap pasar mengirimkan 2 (dua) orang petugas untuk mengikuti pelatihan atau bimbingan teknis.</li>
	<li>Telah dilaksanakan Penyuluhan kepada Pedagang Pasar di 35 (tiga puluh lima) pasar dari 62 (enam puluh dua) pasar yang menjadi target intervensi.</li>
	<li>Telah dilakukan Kampanye Pasar Aman dari Bahan Berbahaya di 47 (empat puluh tujuh) Pasar dari 62 (enam puluh dua) pasar target.</li>
</ol>

<p>Dari rangkaian kegiatan Pasar Aman dari Bahan Berbahaya telah dilakukan Monitoring dan Evaluasi terhadap kegiatan sampling dan pengujian, dilakukan dalam 2 (dua) tahap dengan rencana target sampel 200 (dua ratus) dari tiap pasar. Hasil akhir sampling yang dilakukan oleh petugas pasar di 62 (enam puluh dua) pasar contoh hanya bisa dilaksanakan pengambilan sebanyak 8705 (delapan ribu tujuh ratus lima) sampel.&nbsp;<strong>&nbsp;</strong></p>

<p><strong>&nbsp;</strong><strong>HASIL PELAKSANAAN</strong></p>

<p><strong>&nbsp;</strong>Pemilihan pasar contoh Pasar Aman dari Bahan Berbahaya antara lain berdasarkan adanya antusiasme/dukungan dari PEMDA dan pimpinan pasar setempat; pasar tersebut ditemukan adanya potensi peredaran bahan berbahaya yang disalahgunakan dalam pangan berdasarkan hasil survei/observasi Balai Besar/Balai POM baik yang menggunakan Mobil Laboratorium Keliling (Mobling) atau berdasarkan hasil sampling dan uji laboratorium; pasar yang menjadi pilot pasar sehat Kementerian Kesehatan menjadi prioritas sebagai Pasar Contoh untuk Pasar Aman dari Bahan Berbahaya</p>

<p><strong>PERMASALAHAN</strong></p>

<ol>
	<li>Koordinasi dengan lintas sektor terkait masih belum optimal karena terkendala oleh permasalahan kewenangan penanganan bahan berbahaya. Belum semua PEMDA/Lintas Sektor terkait merealisasikan rekomendasi tindak lanjut yang telah disepekati sewaktu dilakukan advokasi, ini terlihat dari program yang dilakukan belum menganggarkan secara khusus terhadap kesinambungan program pasar aman dari bahan berbahaya.</li>
	<li>Pada saat perencanaan program tersebut belum diketahui lokasi pasar-pasar yang akan menjadi target sehingga lokasi pasar terutama yang jauh di Kabupaten masih ada yang belum terjamah untuk kegiatan.</li>
	<li>Parameter uji yang digunakan untuk jenis sampel yang sama tidak konsisten, misalnya sampel mie ada yang diuji hanya boraks, ada yang diuji boraks dan formalin, ada yang diuji hanya formalin dan kuning metanil. Ada juga sampel yang diuji dengan parameter uji yang tidak sesuai misalnya tempe diuji dengan parameter uji formaldehid.</li>
</ol>

<p><strong>SARAN</strong></p>

<ol>
	<li>Koordinasi lintas sektor dan pendekatan terhadap pemangku kepentingan di daerah perlu ditingkatkan</li>
	<li>Perlu perencanaan pasar dan penganggaran yang matang untuk menunjang pelaksanaan kegiatan di tahun yang akan datang khususnya pasar-pasar yang lokasinya jauh di Kabupaten</li>
	<li>Perlu dilakukan bimbingan dan pelatihan kepada petugas pasar oleh Balai besar /Balai POM sehingga parameter uji yang digunakan sesuai dengan sampel yang akan di uji dan diperoleh hasil sampling yang lebih baik</li>
</ol>

<p><strong>PENUTUP</strong></p>

<p>Kunci keberhasilan Implementasi pasar aman dari bahan berbahaya adalah adanya komitmen yang solid dari komunitas pasar serta dukungan kebijakan dari pemerintah sehingga tingkat kepercayaan masyarakat terhadap pasar sebagai sumber utama suplai pangan yang aman dari bahan berbahaya meningkat.</p>

<p>&nbsp;</p>

<p><u>Penulis :&nbsp;</u><u>Dra.&nbsp;</u><u>Yohana Sente Limbu</u><u>, Apt</u></p>

<p>Direktorat Pengawasan Produk dan Berbahaya.</p>

<ul>
</ul>
';
		$berita->foto = Storage::url($filename);
		$berita->ket_foto = '';
		$berita->save();
		
	}
}
