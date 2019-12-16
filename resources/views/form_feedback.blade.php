@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $errors)
		<li>{{ $errors }}</li>
		@endforeach
	</ul>
</div>
@endif
<br />
<h2 align="center">Form Point</h2>
<br />
<form method="POST" action="submit" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-3 text-right">Deskripsi</label>
		<div class="col-md-7">
		<select size="1" class="form-control tinggi" name="deskripsi">
		@foreach ($classname as $a)
			<option>
				{{$a->deskripsi}}
			</option>
		@endforeach
		</select>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-3 text-right">Point</label>
			<div class="col-md-7">
				<div  class="rate">
				    <input type="radio" id="star5" name="rate" value="5" />
				    <label for="star5" title="text">5 stars</label>
				    <input type="radio" id="star4" name="rate" value="4" />
				    <label for="star4" title="text">4 stars</label>
				    <input type="radio" id="star3" name="rate" value="3" />
				    <label for="star3" title="text">3 stars</label>
				    <input type="radio" id="star2" name="rate" value="2" />
				    <label for="star2" title="text">2 stars</label>
				    <input type="radio" id="star1" name="rate" value="1" />
				    <label for="star1" title="text">1 star</label>
			  	</div>
			</div>
	</div>
	<br /><br /><br />
	<div  class="form-group text-right">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Kirim" />
	</div>
</form>
@endsection