@extends('admin.admin_master')
@section('admin')
<h1 align="center">Ini Adalah Data Pelanggan</h1>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pelanggan</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th><b>No</b></th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                  </tr>
                </thead>
                <tbody>
                    @php $no=1 @endphp
                    @foreach($pelanggan as $plg)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$plg->nama}}</td>
                    <td>{{$plg->alamat}}</td>
                    <td>{{$plg->telepon}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->


@endsection