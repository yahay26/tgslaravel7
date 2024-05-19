@extends('admin.admin_master')
@section('admin')
<h1 align="center">Ini Adalah Data Lapangan</h1>
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
              <h5 class="card-title">Data Lapangan</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th><b>No</b></th>
                    <th>Id Lapangan</th>
                    <th>Jenis Lapangan</th>
                    <th>Tarif Perjam</th>
                  </tr>
                </thead>
                <tbody>
                    @php $no=1 @endphp
                    @foreach($lapangan as $lp)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$lp->idlapangan}}</td>
                    <td>{{$lp->jenis_lapangan}}</td>
                    <td>Rp.{{$lp->tarif_perjam}}</td>
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