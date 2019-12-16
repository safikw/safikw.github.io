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
<h2 align="center">Form Laporan Kerusakan</h2>
<br />
<form method="post" action="{{ route('laporan.store') }}" enctype="multipart/form-data">

	@csrf

	<input type="hidden" name="point" value="50">
	<div class="form-group">
		<label class="col-md-3 text-right">Deskripsi</label>
		<div class="col-md-6">
			<input type="text" name="deskripsi" class="form-control input-lg"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-3 text-right">Lokasi</label>
		<div class="col-md-6">
			<input type="text" name="lokasi" class="form-control input-lg"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-3 text-right">Foto</label>
		<div class="col-md-6">
			<input type="file" name="image"/>
		</div>
	</div>
	<br /><br /><br />
	<div  class="form-group text-right">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Kirim" />
	</div>
</form>
@endsection