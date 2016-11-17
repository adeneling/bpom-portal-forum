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
						</div>						
					</div>
				</div>
			</div>
			<!--/ profile-page-header -->

			<div id="profile-page-content" class="row">
				<div id="profile-page-sidebar" class="col s6">
					<div class="card">
						<div class="card-content white-text">
							<span class="card-title"><font color="black"><center>Ubah Profile</center></font></span>
							<div class="row">
								<div class="input-field col s9">
									{!! Form::text('name', null, ['class'=>'validate']) !!}
									<label for="name">Nama</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s9">
									{!! Form::text('email', null, ['class'=>'validate']) !!}
									<label for="email">E-Mail</label>
								</div>
							</div>
							<div class="row">
								<div class="col s6">
									<div class="file-field input-field">
										<div class="btn">
											<span>Avatar</span>
											{!! Form::file('avatar', null) !!}
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text">
										</div>
									</div>
								</div>
							</div>
							<br><br>
							<div class="row">
								<center>
									<button class="btn waves-effect waves-light indigo" type="submit" name="action">Submit
										<i class="mdi-content-send right"></i>
									</button>
								</center>
							</div>
						</div>                  
					</div>					
				</div>
				<div id="profile-page-sidebar" class="col s6">
					<div class="card">
						<div class="card-content white-text">
							<span class="card-title"><font color="black"><center>Ubah Password</center></font></span>
							<div class="row">
								<div class="input-field col s9">
									{!! Form::text('old_password', null, ['class'=>'validate']) !!}
									<label for="old_password">Password Lama</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s9">
									{!! Form::text('password', null, ['class'=>'validate']) !!}
									<label for="password">Password Baru</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s9">
									{!! Form::text('password_confirmation', null, ['class'=>'validate']) !!}
									<label for="password_confirmation">Konfirmasi password</label>
								</div>
							</div>
							<br><br>
							<div class="row">
								<center>
									<button class="btn waves-effect waves-light Cyan" type="submit" name="action">Submit
										<i class="mdi-content-send right"></i>
									</button>
								</center>
							</div>
						</div>                  
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection