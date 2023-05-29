@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Data Wisata Anda</h3>
					<div class="row">
						<div class="col-md-8">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
      
									<h3 class="panel-title">Nama Wisata : {{auth()->user()->wisata->nama_wisata}}</h3>
									<p class="panel-subtitle">Tanggal publish : {{auth()->user()->wisata->update_at}}</p>
								</div>
								<div class="panel-body">
									<h4>Jenis Wisata : {{auth()->user()->wisata->jenis_wisata}}</h4>
                  <h5>Deskripsi Wisata</h5>
									<p>{{auth()->user()->wisata->deskripsi_wisata}}</p>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
						<div class="col-md-4">
							<!-- PANEL NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Pemilik Wisata</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding bg-primary text-center">
									<div class="padding-top-30 padding-bottom-30">
										<i class="fa fa-thumbs-o-up fa-5x"></i>
										<h3>{{auth()->user()->Pengelola->nama_depan}} {{auth()->user()->pengelola->nama_belakang}}</h3>
									</div>
								</div>
							</div>
							<!-- END PANEL NO PADDING -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<!-- PANEL DEFAULT -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel Default</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body" style="display: block;">
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
								</div>
							</div>
							<!-- END PANEL DEFAULT -->
						</div>
						<div class="col-md-4">
							<!-- PANEL NO CONTROLS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel No Right Controls</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body" style="display: block;">
                  <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                </div>
							</div>
							<!-- END PANEL NO CONTROLS -->
						</div>
						<div class="col-md-4">
							<!-- PANEL WITH FOOTER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel With Footer</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array.</p>
								</div>
							</div>
							<!-- END PANEL WITH FOOTER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<!-- PANEL SCROLLING -->
							<div id="panel-scrolling-demo" class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Panel Scrolling</h3>
								</div>
								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 175px;"><div class="panel-body" style="overflow: hidden; width: auto; height: 175px;">
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
								</div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 61.744px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
							</div>
							<!-- END PANEL SCROLLING -->
						</div>
					</div>
				</div>
			</div>


			<!-- END MAIN CONTENT -->
		<!-- </div>
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Data Wisata Anda</h3>
								</div>
                </div>
								<div class="panel-body">
                  <ul class="list-unstyled list-justify">
                    <li>{{auth()->user()->Pengelola->nama_depan}} {{auth()->user()->pengelola->nama_belakang}}</li>
                    <li>{{auth()->user()->wisata->nama_wisata}}</li>
                  </ul>
									<table class="table table-hover">
										<thead>
											<tr>
                        <th>Pengelola</th>
                        <th>Nama wisata</th>
                        <th>Alamat Wisata</th>
                        <th>Jenis Wisata</th>
                        <th>Status Wisata</th>
                        <th>Detail Wisata</th>
											</tr>
										</thead>
										<tbody>
                      <tr>
                        <td></a></td>
                        <td></a></td>
                        <td><a href="#" class="btn btn-primary btn-sm">LihatKTP</a></td>
                      </tr>
										</tbody>
									</table>
								</div>
							</div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

@stop
