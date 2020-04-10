@extends('layouts.dashboard')

@section('nasyarakat', 'active')

@section('breadcrumb')

	<ol class="breadcrumb float-sm-right">
         <li class="breadcrumb-item">
			<a href="{{ url('/dashboard') }}">Home</a>
		</li>
		<li class="breadcrumb-item active">
			Masyarakat
		</li>
     </ol>

@endsection

@section('content')

	<!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Masyarakat</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">

		<a href="{{ route('masyarakat.create') }}" class="btn btn-success">
			<i class="fas fa-plus"></i> Tambah
		</a>

          <table class="table table-striped table-responsive-md">
			<thead>
				<tr>
					<th>NO</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Telepon</th>
					<th>Aksi</th>
				</tr>
			</thead>
			@php
			$i=1;
			@endphp
			<tbody>
				@foreach($masyarakat as $data)
					<tr>
						<td> {{ $i }} </td>
						<td> {{ $data->nik }}</td>
						<td> {{ $data->nama }}</td>
						<td> {{ $data->username }}</td>
						<td> {{ $data->telp }}</td>
						<td>
							<a href="{{ route('masyarakat.edit', $data->id) }}" class="btn btn-primary float-left mr-2 mt-1">
								<i class="fas fa-edit"></i>
							</a>
							
							<form method="post" action="{{ route('masyarakat.destroy', $data->id) }}">
							
								@csrf
								@method('delete')
								
								<button type="submit" class="btn btn-danger mt-1">
									<i class="fas fa-trash"></i>
								</button>
							
							</form>
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

@endsection