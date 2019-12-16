@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" ></div>


				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
					
					<h2>Data User dan Admin</h2>
					
					<table  class="table table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
							<th width="5">No</th>
							<th>Nama</th>
							<th>Email</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $key => $value)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->email }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
