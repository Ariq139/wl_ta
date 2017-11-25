@extends('layouts.master-admin')

@section('sidebar')
    <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="admin">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">directions_railway</i>
                <span>Data Kereta Api</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="ka-input">Input Jadwal</a>
                </li>
                <li>
                    <a href="ka-list">Lihat Data KA</a>
                </li>
            </ul>
        </li>
        <li class="active">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">description</i>
                <span>Berita</span>
            </a>
            <ul class="ml-menu">
                <li class="active">
                    <a href="berita-input">Tulis Berita</a>
                </li>
                <li>
                    <a href="berita-list">Lihat Berita</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="reserve-list">
                <i class="material-icons">insert_chart</i>
                <span>Reservasi</span>
            </a>
        </li>
        <li class="header">LABELS</li>
        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-red">donut_large</i>
                <span>Important</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-amber">donut_large</i>
                <span>Warning</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-light-blue">donut_large</i>
                <span>Information</span>
            </a>
        </li>
@endsection

@section('content')
	<div class="container-fluid">
        <div class="block-header">
            <h2>TULIS BERITA BARU</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Berita Baru
                            <small>Masukkan judul dan isi berita yang ingin diterbitkan</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <h2 class="card-inside-title">Judul</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Judul" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <h2 class="card-inside-title">Deskripsi</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Deskripsi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-block btn-lg btn-info waves-effect">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->
    </div>
@endsection