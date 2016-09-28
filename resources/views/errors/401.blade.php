@extends('layouts.frontend.app')

@section('title', '401')

@section('content')
	<div class="page-content page-error text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1>401</h1>
					<h2>OOPS! UNAUTHORIZED EXCEPTION</h2>
					<hr />
					<div class="error-description">
						<p>The request was a legal request, but the server is refusing to respond to it. For use when authentication is possible but has failed or not yet been provided</p>
					</div>
					<form class="form-horizontal">
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-btn">
							<input type="submit" class="btn btn-default" value="SEARCH">
						</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop