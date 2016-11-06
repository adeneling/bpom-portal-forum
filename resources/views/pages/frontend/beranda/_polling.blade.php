{!! Form::open(['class' => 'form-horizontal', 'name' => 'formPolling', 'id' => 'formPolling']) !!}
	{!! Form::hidden('ip', encrypt(Request::ip())) !!}
	<div class="form-group">
		<label class="col-md-1 control-label">Rate </label>
		<div class="col-md-11">
			<span class="rating">
				<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-5"/>
				<label for="rating-input-1-5" class="rating-star"></label>
				<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-4"/>
				<label for="rating-input-1-4" class="rating-star"></label>
				<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-3"/>
				<label for="rating-input-1-3" class="rating-star"></label>
				<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-2"/>
				<label for="rating-input-1-2" class="rating-star"></label>
				<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
				<label for="rating-input-1-1" class="rating-star"></label>
			</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-1 control-label">Hasil </label>
		<div class="col-md-11">
			<span class="label label-success">{{ round($star1, 1) }}%</span>
			<i class="fa fa-star" aria-hidden="true"></i>
			<br>
			<span class="label label-success">{{ round($star2, 1) }}%</span>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<br>
			<span class="label label-success">{{ round($star3, 1) }}%</span>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<br>
			<span class="label label-success">{{ round($star4, 1) }}%</span>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<br>
			<span class="label label-success">{{ round($star5, 1) }}%</span>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
		</div>		
	</div>
	<div class="form-group">
		<label class="col-md-1 control-label">Masukkan</label>
		<div class="col-md-11">
			<textarea name="masukan" id="masukan" class="form-control" placeholder="Saran dan masukan" rows="4"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12">
			<center>
				<button class="btn btn-primary" type="submit">SUBMIT</button>
			</center>								
		</div>
	</div>
{!! Form::close() !!}