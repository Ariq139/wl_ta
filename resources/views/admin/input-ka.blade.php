@extends('layouts.master-admin')

@section('sidebar')
    <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="admin">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li class="active">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">directions_railway</i>
                <span>Data Kereta Api</span>
            </a>
            <ul class="ml-menu">
                <li class="active">
                    <a href="ka-input">Input Jadwal</a>
                </li>
                <li>
                    <a href="ka-list">Lihat Data KA</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">description</i>
                <span>Berita</span>
            </a>
            <ul class="ml-menu">
                <li>
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
	<div class="panel panel-info">
     <div class="panel-heading">
         <center>
         <h1>
         Input Data Kereta Api Baru
         </h1>
         </center>
     </div>
     <div class="panel-body">
         <a href="{{ URL('admin') }}" class="btn btn-raised btn-danger pull-left">Kembali</a>
         {{-- part alert --}}
         @if (Session::has('after_save'))
             <div class="row">
                 <div class="col-md-12">
                     <div class="alert alert-dismissible alert-{{ Session::get('after_save.alert') }}">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ Session::get('after_save.title') }}</strong>
                       <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_save.text-1') }}</a> {{ Session::get('after_save.text-2') }}
                     </div>
                 </div>
             </div>
         @endif
         {{-- end part alert --}}
         <div class="row">
             <div class="col-md-12"><hr>
                 <div class="col-md-2"></div>
                 <div class="col-md-8">
                     <form class="form-horizontal" action="{{ URL('ka-store') }}" method="POST">
                     {{ csrf_field() }}
                       <fieldset>
                         <legend>FORM TAMBAH DATA KERETA API</legend>
                             <div class="form-group label-floating">
                               <label class="control-label" for="focusedInput2">ID Kereta</label>
                               <input class="form-control" id="focusedInput2" type="text" name="id_ka" style="border-bottom-style: inset;">
                             </div>

                             <div class="form-group label-floating">
                               <label class="control-label" for="focusedInput2">Nama Kereta</label>
                               <input class="form-control" id="focusedInput2" type="text" name="nama" style="border-bottom-style: inset;">
                             </div>

                             <div class="form-group label-floating">
                               <label class="control-label" for="focusedInput2">Jenis Kereta</label>
                               <div class="demo-radio-button">
                                    <input name="jenis" type="radio" id="radio_1" value="Ekonomi" checked />
                                    <label for="radio_1">Ekonomi</label>
                                    <input name="jenis" type="radio" id="radio_2" value="Eksekutif"/>
                                    <label for="radio_2">Eksekutif</label>
                                    <input name="jenis" type="radio" id="radio_3" value="Bisnis"/>
                                    <label for="radio_3">Bisnis</label>
                                </div>
                             </div>

                             <div class="form-group label-floating">
                               <label class="control-label" for="focusedInput2">Jurusan</label>
                               <input class="form-control" id="focusedInput2" type="text" name="jurusan" style="border-bottom-style: inset;">
                             </div>

                             <div class="form-group label-floating">
                               <label class="control-label" for="focusedInput2">Kapasitas</label>
                               <input class="form-control" id="focusedInput2" type="text" name="kapasitas" style="border-bottom-style: inset;">
                             </div>

                             <div class="form-group label-floating">
                               <label class="control-label" for="focusedInput2">Username Admin</label>
                               <input class="form-control" id="focusedInput2" type="text" name="username_adm" style="border-bottom-style: inset;">
                             </div>

                             <div class="form-group">
                               <div class="col-md-12">
                                 <button type="submit" class="btn btn-raised btn-primary pull-right">Submit</button>
                                 <button type="reset" class="btn btn-raised btn-warning pull-right">Reset</button>
                               </div>
                             </div>
                         </fieldset>
                     </form>
                 </div>
                 <div class="col-md-2"></div>
             </div>
         </div>
     </div>
 </div>
@endsection