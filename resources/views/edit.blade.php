@extends('parent')

@section('main')
<form method="post" action="{{ route('laporan.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Deskripsi</label>
		<div class="col-md-8">
			<input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control input-lg"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Lokasi</label>
		<div class="col-md-8">
			<input type="text" name="lokasi" value="{{ $data->lokasi }}" class="form-control input-lg"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Foto</label>
		<div class="col-md-8">
			<input type="file" name="image"/>
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	
	<div  class="form-group text-right">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection