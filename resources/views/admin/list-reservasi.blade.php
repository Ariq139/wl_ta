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
        <li class="active">
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
            <h2>
                EDITABLE TABLE
                <small>Taken from <a href="https://github.com/mindmup/editable-table" taget="_blank">github.com/mindmup/editable-table</a></small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXAMPLE
                            <small>You can edit any columns except header/footer</small>
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
                        <table id="mainTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Cost</th>
                                    <th>Profit</th>
                                    <th>Fun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Car</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Bike</td>
                                    <td>330</td>
                                    <td>240</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Plane</td>
                                    <td>430</td>
                                    <td>540</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Yacht</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Segway</td>
                                    <td>330</td>
                                    <td>240</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><strong>TOTAL</strong></th>
                                    <th>1290</th>
                                    <th>1420</th>
                                    <th>5</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection