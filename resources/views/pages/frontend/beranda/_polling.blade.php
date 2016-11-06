{!! Form::open(['class' => 'form-horizontal', 'name' => 'formPolling', 'id' => 'formPolling']) !!}
	{!! Form::hidden('ip', encrypt(Request::ip())) !!}
	<div class="form-group">
		<label class="col-md-1 control-label">Rate </label>
		<div class="col-md-11">
			<div class="stars" style="float:left;">
				<input type="radio" name="rating-input-1" class="star-1" id="star-1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="rating-input-2" class="star-2" id="star-2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="rating-input-3" class="star-3" id="star-3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="rating-input-4" class="star-4" id="star-4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="rating-input-5" class="star-5" id="star-5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>

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
		<div class="col-md-12">
			<textarea name="masukan" id="masukan" class="form-control" placeholder="Saran dan masukan" rows="3"></textarea>
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