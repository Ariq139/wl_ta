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
                <li>
                    <a href="ka-input">Input Jadwal</a>
                </li>
                <li class="active">
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
         <h1>Daftar Kereta Api
         </h1>
         </center>
     </div>
     <div class="panel-body">
         <a href="{{ URL('ka-input') }}" class="btn btn-raised btn-primary pull-right">Tambah</a>
         {{-- part alert --}}
        
             {{-- Kita cek, jika sessionnya ada maka tampilkan alertnya, jika tidak ada maka tidak ditampilkan alertnya --}}
        
         @if (Session::has('after_update'))
             <div class="row">
                 <div class="col-md-12">
                     <div class="alert alert-dismissible alert-{{ Session::get('after_update.alert') }}">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ Session::get('after_update.title') }}</strong>
                       <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_update.text-1') }}</a> {{ Session::get('after_update.text-2') }}
                     </div>
                 </div>
             </div>
         @endif
         {{-- end part alert --}}
         <table class="table table-bordered table-hover ">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Nama Kereta</th>
                     <th>Jenis Kereta</th>
                     <th>Jurusan</th>
                     <th>Kapasitas</th>
                     <th>Admin</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($keretas as $kereta)
                     <tr>
                         <td>{{ $kereta->id_ka }}</td>
                         <td>{{ $kereta->nama }}</td>
                         <td>{{ $kereta->jenis }}</td>
                         <td>{{ $kereta->jurusan }}</td>
                         <td>{{ $kereta->kapasitas }}</td>
                         <td>{{ $kereta->username_adm }}</td>
                         <td>
                             <center>
                                 <a href="{{ URL('ka-edit') }}/{{ $kereta->id }}" class="btn btn-sm btn-raised btn-info">Edit</a>
                                 <a href="{{ URL('ka-delete') }}/{{ $kereta->id }}" class="btn btn-sm btn-raised btn-danger">Hapus</a>
                             </center>
                         </td>
                     </tr>
                 @endforeach
                 {{-- // end loop --}}
             </tbody>
         </table>
     </div>
 </div>
 
@endsection