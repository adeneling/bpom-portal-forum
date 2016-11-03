@extends('layouts.frontend.app')

@section('title', 'Bahan Berbahaya')

@section('content')


<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">@yield('title')</h1>
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<!-- TOP FAQs -->
		<h2>PROGRAM PASAR AMAN DARI BAHAN BERBAHAYA</h2>
		<div class="panel-group panel-group-faq top-faq">
			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq1" class="collapsed"><span class="number pull-left">1</span> Apa yang dimaksud dengan bahan berbahaya?</a>
					</h4>
				</div>
				<div id="top-faq1" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">Bahan berbahaya adalah bahan kimia baik dalam bentuk tunggal maupun campuran yang dapat membahayakan kesehatan dan lingkungan hidup secara langsung atau tidak langsung yang mempunyai sifat racun, karsinogenik, teratogenik, mutagenik, korosif dan iritasi <strong>(Peraturan Menteri Kesehatan Nomor 472/Menkes/Per/V/1996 tentang Pengamanan Bahan Berbahaya Bagi Kesehatan).</strong><br>
						Sesungguhnya bahan kimia bersifat esensial dalam peningkatan kesejahteraan manusia, dan penggunaannya sedemikian luas di berbagai sektor antara lain industri, pertanian, pertambangan dan lain sebagainya. Namun hal yang perlu kita waspadai adalah adanya kecenderungan penggunaan yang salah sejumlah bahan berbahaya pada pangan.
						</p>
					</div>
				</div>
			</div>

			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq2" class="collapsed"><span class="number pull-left">2</span> Apa saja yang termasuk bahan berbahaya yang ditemukan dalam pangan?</a>
					</h4>
				</div>
				<div id="top-faq2" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">
							Pada dasarnya ada banyak bahan berbahaya yang tidak boleh ditambahkan kedalam makanan, namun dari hasil pengawasan, ada 4 bahan berbahaya yang sering ditemukan disalahgunakan dalam makanan yaitu Boraks, Formalin, Rhodamin B, dan Kuning metanil.
							<br>
							<center>
								<img src="{{ asset('assets/frontend/faq/bahan-berbahaya.png') }}" class="img-responsive">
							</center>
						</p>
					</div>
				</div>
			</div>

			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq3" class="collapsed"><span class="number pull-left">3</span> Apa fungsi sebenarnya dari keempat bahan tersebut?</a>
					</h4>
				</div>
				<div id="top-faq3" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">
							Boraks merupakan senyawa dengan nama kimia natrium tetraborat yang berbentuk kristal lunak. Boraks digunakan untuk campuran pembuatan gelas, pengawet kayu, salep kulit, campuran pupuk tanaman, dll.<br>
							Formalin termasuk kelompok aldehid dengan rumus kimia HCHO, biasanya berbentuk larutan yang tidak berwarna dan berbau sangat menyengat. Di dalam larutan formalin terkandung sekitar 37% formaldehid dalam air dan. Formalin dipakai untuk mengawetkan mayat, membunuh kuman, pengawet kosmetika dan pengeras kuku, serta perekat kayu lapis.<br>
							Rhodamin B dan Kuning metanil dipakai untuk pewarna tekstil, kertas serta cat. 
						</p>
					</div>
				</div>
			</div>

			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq4" class="collapsed"><span class="number pull-left">4</span>Apa saja contoh penyalahgunaan bahan berbahaya dalam pangan dan apa ciri-cirinya?</a>
					</h4>
				</div>
				<div id="top-faq4" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">
							<ol type="a">
								<li>Contoh pangan yang banyak ditemukan mengandung formalin: tahu, mie basah, ayam potong, ikan segar, ikan asin. <br>
									<strong>Ciri – cirinya:</strong> Tekstur makanan lebih kenyal, tidak mudah hancur, lebih tahan lama, ada aroma yang cukup menyengat.</li>
								<li>Contoh pangan yang banyak ditemukan mengandung borak/bleng/pijer : mie basah, bakso, lontong, kerupuk gendar. <br>
									<strong>Ciri – cirinya:</strong> tekstur makanan lebih kenyal, untuk mie basah : lebih mengkilap, tidak mudah putus, tidak lengket, kerupuk : lebih renyah.</li>
								<li>Contoh pangan yang diduga mengandung rhodamin B : kerupuk merah, terasi, sirup dan arumanis berwarna merah. <br>
									<strong>Ciri – cirinya:</strong> Warna merah mencolok, rasa pahit, jika dipegang warna merah akan menempel di kulit.</li>
								<li>Contoh pangan yang banyak ditemukan mengandung kuning metanil : kerupuk berwarna kuning, mie basah, tahu kuning. <br>
									<strong>Ciri – cirinya:</strong> warna kuning mencolok, rasa pahit, jika dipegang warna kuning akan menempel di kulit.</li>

							</ol>
						</p>
					</div>
				</div>
			</div>

			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq5" class="collapsed"><span class="number pull-left">5</span> Apa akibatnya jika kita mengkonsumsi bahan berbahaya?</a>
					</h4>
				</div>
				<div id="top-faq5" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">
							<ol type="a">
								<li>Boraks dapat menyebabkan gangguan otak, hati, dan ginjal</li>
								<li>Formalin dapat menyebabkan mulut, tenggrokkan dan perut terasa terbakar (jangka pendek), kerusakan jantung, hati, otak, system saraf pusat.</li>
								<li>Kuning metanil  dan rhodamin B jika terakumulasi dapat menyebabkan kanker.</li>

							</ol>
						</p>
					</div>
				</div>
			</div>

			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq6" class="collapsed"><span class="number pull-left">6</span> Kenapa bahan berbahaya tersebut disalahgunakan dalam pangan?</a>
					</h4>
				</div>
				<div id="top-faq6" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">
							Terdapat berbagai faktor yang mendorong banyak pihak untuk melakukan praktek penggunaan yang salah bahan kimia terlarang untuk pangan. Pertama, bahan kimia tersebut mudah diperoleh di pasaran. Kedua, harganya relatif murah. Ketiga, pangan yang mengandung bahan tersebut menampakkan tampilan fisik yang memikat. Keempat, tidak menimbulkan efek negatif seketika. Kelima, informasi bahan berbahaya tersebut relatif terbatas, dan pola penggunaannya telah dipraktekkan secara turun-temurun.
						</p>
					</div>
				</div>
			</div>



		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->


@stop