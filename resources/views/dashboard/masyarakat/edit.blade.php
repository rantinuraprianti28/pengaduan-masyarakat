@extends('layouts.dashboard')

@section('nasyarakat', 'active')

@section('breadcrumb')

	<ol class="breadcrumb float-sm-right">
         <li class="breadcrumb-item">
			<a href="{{ url('/dashboard') }}">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{{ route('masyarakat.index') }}">Masyarakat</a>
		</li>
		<li class="breadcrumb-item active">Edit</li>
     </ol>

@endsection

@section('content')

	<!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Data Masyarakat</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          
			<form method="post" action="{{ route('masyarakat.update', $data->id) }}">
			
				@csrf
				@method('put')
				
				<div class="form-group">
					<label>NIK</label>
					<input type="number" class="form-control" name="nik" value="{{ $data->nik }}">
				</div>
				
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
				</div>
				
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" value="{{ $data->username }}">
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Opsional">
				</div>
				
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="number" class="form-control" name="telp" value="{{ $data->telp }}">
				</div>
				
				<button class="btn btn-primary">
					<i class="fas fa-edit"></i> Edit
				</button>
			
			</form>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

@endsection