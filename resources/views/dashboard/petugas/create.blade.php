@extends('layouts.dashboard')

@section('petugas', 'active')

@section('breadcrumb')

	<ol class="breadcrumb float-sm-right">
         <li class="breadcrumb-item">
			<a href="{{ url('/dashboard') }}">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{{ route('petugas.index') }}">Petugas</a>
		</li>
		<li class="breadcrumb-item active">Tambah</li>
     </ol>

@endsection

@section('content')

	<!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Petugas</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          
			<form method="post" action="{{ route('petugas.store') }}">
			
				@csrf
				
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama">
				</div>
				
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="number" class="form-control" name="telp">
				</div>
				
				<div class="form-group">
					<label>Level</label>
					<select class="form-control" name="level">
						<option val="">Silahkan Pilh Level</option>
						<option value="admin">Admin</option>
						<option value="petugas">Petugas</option>
					</select>
				</div>
				
				<button class="btn btn-success">
					<i class="fas fa-success"></i> Tambah
				</button>
			
			</form>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

@endsection