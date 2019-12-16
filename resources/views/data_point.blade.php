@extends('parent')

@section('main')


@if($message = Session::get('sukses'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<br />
<h2 align="center">Perolehan Point</h2>
<br />
<a>Total point: {{$point}}</a>
<table class="table table-bordered table-hover">
 <tr>
  <th width="35%">Deskripsi</th>
  <th width="30%">Rating</th>
  <th width="35%">Date</th>
 </tr>
 @foreach($data_feedback as $row)
  <tr>
   <td>{{ $row->deskripsi }}</td>
   <td>{{ $row->rate }}</td>
   <td>{{Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
  </tr>
 @endforeach
</table>
{!! $data_feedback->links() !!}
@endsection