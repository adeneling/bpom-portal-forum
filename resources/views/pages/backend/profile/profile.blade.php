@extends('layouts/backend/backend')

@section('title', $title)

@section('content')

<section id="content">        

	<!--start container-->
	<div class="container">

		<div id="profile-page" class="section">
			<!-- profile-page-header -->
			<div id="profile-page-header" class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{ asset('assets/backend/images/user-profile-bg.jpg') }}" alt="user background">                    
				</div>
				<figure class="card-profile-image">
					<img src="{{ asset('assets/backend/images/avatar.png') }}" alt="profile image" class="circle z-depth-2 responsive-img activator">

				</figure>
				<div class="card-content">
					<div class="row">                    
						<div class="col s3 offset-s2">                        
							<h4 class="card-title grey-text text-darken-4">{{ Auth::user()->name }}</h4>
							<a href="{{ route('admin.profile.edit', encrypt(Auth::user()->id) ) }}" class="btn btn-primary">
								Ubah Profile
							</a>
						</div>						
					</div>
				</div>
			</div>
			<!--/ profile-page-header -->

			<!-- profile-page-content -->
			<div id="profile-page-content" class="row">
				<!-- profile-page-sidebar-->
				<div id="profile-page-sidebar" class="col s5">
					<!-- Profile About  -->
					<div class="card light-blue">
						<div class="card-content white-text">
							<span class="card-title">Badan Pengawas Obat dan Makanan</span>
							<p align="justify">
								Badan Pengawas Obat dan Makanan. Badan Pengawas Obat dan Makanan atau disingkat Badan POM adalah sebuah lembaga di Indonesia yang bertugas mengawasi peredaran obat-obatan dan makanan di Indonesia.
							</p>
						</div>                  
					</div>
					<!-- Profile About  -->

					<!-- Profile About Details  -->
					<ul id="profile-page-about-details" class="collection z-depth-1">
						<li class="collection-item">
							<div class="row">
								<div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Nama</div>
								<div class="col s7 grey-text text-darken-4 right-align">{{ Auth::user()->name }}</div>
							</div>
						</li>
						<li class="collection-item">
							<div class="row">
								<div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> E-Mail</div>
								<div class="col s7 grey-text text-darken-4 right-align">{{ Auth::user()->email }}</div>
							</div>
						</li>
						<li class="collection-item">
							<div class="row">
								<div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Tanggal Daftar</div>
								<div class="col s7 grey-text text-darken-4 right-align">{{ Auth::user()->created_at }}</div>
							</div>
						</li>
					</ul>
					<!--/ Profile About Details  -->
				</div>
				<!-- profile-page-sidebar-->
			</div>
		</div>
	</div>
</div>
<!--end container-->
</section>
<!-- END CONTENT -->



@endsection