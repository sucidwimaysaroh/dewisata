@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
            <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Masukkan Data Wisata</h3>
								</div>
								<div class="panel-body">
                  <form action="#" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <label class="fancy-checkbox"> <span> Nama Wisata </span> </label>
									<input type="text" class="form-control" placeholder="Nama Wisata" name="nama_wisata">
									<br>
                  <label class="fancy-checkbox"> <span> Alamat Wisata </span> </label>
									<input type="text" class="form-control" placeholder="Alamat Wisata" name="alamat_wisata">
									<br>
                  <label class="fancy-checkbox"> <span> Jenis Wisata </span> </label>
									<input type="text" class="form-control" placeholder="Jenis Wisata" name="jenis_wisata">
									<br>
                  <label class="fancy-checkbox"> <span> Jam Operasional </span> </label>
									<input type="text" class="form-control" placeholder="Jam Operasional Wisata" name="jam_operasional">
									<br>
                  <label class="fancy-checkbox"> <span> Deskripsi Wisata </span> </label>
									<textarea class="form-control" placeholder="Deskripsi Wisata" rows="4" name="deskripsi_wisata"></textarea>
									<br>
                  <label class="fancy-checkbox"> <span> Scan Surat Keterangan Desa </span> </label>
									<input type="file" class="form-control" name="surat_desa">
									<br>
                  <label class="fancy-checkbox"> <span> Foto Daerah Wisata </span> </label>
									<input type="file" class="form-control" name="foto_wisata">
									<br>
                  <a href="#" class="btn btn-primary" >Simpan</a>
                </form>
								</div>
							</div>
            </div>
          </div>
        </div>
@stop
