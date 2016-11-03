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
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq7" class="collapsed"><span class="number pull-left">1</span> Apa saja yang termasuk bahan berbahaya yang ditemukan dalam pangan?</a>
					</h4>
				</div>
				<div id="top-faq7" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">Pada dasarnya ada banyak bahan berbahaya yang tidak boleh ditambahkan ke dalam makanan, namun dari hasil pengawasan, ada 4 bahan berbahaya yang sering ditemukan disalahgunakan dalam makanan yaitu Boraks (sering disebut pijer/bleng), formalin. Rhodamin B, dan Kuning metanil.</p>
					</div>
				</div>
			</div>

			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq11" class="collapsed"><span class="number pull-left">2</span> Berikan beberapa contoh pangan yang diduga mengandung bahan berbahaya dan sebutkan ciri – ciri pangan yang diduga mengandung bahan berbahaya</a>
					</h4>
				</div>
				<div id="top-faq11" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">
							<ul>
								<li>Contoh pangan yang diduga mengandung formalin: tahu, mie basah, ayam potong, ikan segar, ikan asin. Ciri – cirinya : Tekstur makanan lebih kenyal, tidak mudah hancur, lebih tahan lama, ada aroma yang cukup menyengat.</li>
								<li>Contoh pangan yang diduga mengandung borak/bleng/pijer : mie basah, bakso, lontong, kerupuk gendar. Ciri –cirinya : tekstur makanan lebih kenyal, untuk mie basah : lebih mengkilap, tidak mudah putus, tidak lengket, kerupuk : lebih renyah.</li>
								<li>Contoh pangan yang diduga mengandung rhodamin B : kerupuk merah, terasi, sirup dan arumanis berwarna merah. Ciri – ciri nya : Warna merah mencolok, rasa pahit, jika dipegang warna merah akan menempel di kulit.</li>
								<li>Contoh pangan yang diduga mengandung kuning metanil : kerupuk berwarna kuning, mie basah, tahu kuning. Ciri – cirinya : warna kuning mencolok, rasa pahit, jika dipegang warna kuning akan menempel di kulit.</li>
							</ul>
						</p>
					</div>
				</div>
			</div>

			<div class="panel panel-minimal">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#top-faq12" class="collapsed"><span class="number pull-left">2</span> Apa akibatnya jika kita mengkonsumsi bahan berbahaya?</a>
					</h4>
				</div>
				<div id="top-faq12" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p align="justify">
							<ul>
								<li>Boraks dapat menyebabkan gangguan otak, hati, dan ginjal</li>
								<li>Formalin dapat menyebabkan mulut, tenggorokkan dan perut terasa terbakar ( jangka pendek), kerusakan jantung, hati, otak, sistem saraf pusat.</li>
								<li>Kuning metanil  dan rhodamin B jika terakumulasi dapat menyebabkan kanker.</li>
							</ul>
						</p>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->


@stop