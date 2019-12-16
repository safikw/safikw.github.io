@extends('parent')

@section('main')


@if($message = Session::get('sukses'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<br />
<h2 align="center">Data Laporan Masyarakat</h2>
<br />
<table class="table table-bordered table-hover">
 <tr>
  <th width="10%">Foto</th>
  <th width="35%">Deskripsi</th>
  <th width="30%">Lokasi</th>
  <th width="35%">Opsi</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->deskripsi }}</td>
   <td>{{ $row->lokasi }}</td>
   <td>
      <form action="{{ route('laporan.destroy', $row->id) }}" method="post">
      <a href="{{ route('laporan.show', $row->id) }}" class="btn btn-primary">Data</a><!-- 
      <a href="{{ route('laporan.edit', $row->id) }}" class="btn btn-warning inline">Edit</a> -->
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger inline" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ???')">Hapus</button>
      </form>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection