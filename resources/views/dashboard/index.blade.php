@extends('layouts.dashboard')

@section('dashboard', 'active')

@section('breadcrumb')

	<ol class="breadcrumb float-sm-right">
         <li class="breadcrumb-item">
			<a href="{{ url('/dashboard') }}">Home</a>
		</li>
     </ol>

@endsection

@section('content')

	<!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pesan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          Selamat Datang di aplikasi pengaduan masyarakat!
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

@endsection