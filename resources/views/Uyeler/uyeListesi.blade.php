@extends('layouts.master')
@section('title', 'Autofill Datatables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-extension.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>ÜYE LİSTESİ</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Üyeler</li>
    <li class="breadcrumb-item active">Üye Listesi</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h3>Üye Listesi</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ad Soyad</th>
                                        <th>Kullanıcı Adı</th>
                                        <td>Resim</td>
                                        <th>E-Posta</th>
                                        <th>Üyelik Tarihi</th>
                                        <th>Durum</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/1.jpg') }}"
                                                alt="profile"></td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#">
                                                    <i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#">
                                                    <i class="icon-trash"></i></a>
                                                </li>
                                                    <button class="btn btn-primary btn-xs" type="button">Takip Detayı</button>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/2.png') }}"
                                                alt=""></td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/2.png') }}"
                                                alt=""></td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/2.jpg') }}"
                                                alt=""></td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/3.jpg') }}"
                                                alt=""></td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/3.png') }}"
                                                alt=""></td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td> <span class="badge rounded-pill badge-warning"> in process</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/6.jpg') }}"
                                                alt="profile"></td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td> <span class="badge rounded-pill badge-success">hired</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/7.jpg') }}"
                                                alt="profile"></td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/9.jpg') }}"
                                                alt="profile"></td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Kullanıcı adi</td>
                                        <td> <img class="img-fluid table-avtar" src="{{ asset('assets/images/user/10.jpg') }}"
                                                alt="profile"></td>
                                        <td>23</td>
                                        <td>2008/12/13</td>

                                        <td> <span class="badge rounded-pill badge-danger">Pending</span></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i
                                                            class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Ad Soyad</th>
                                        <th>Kullanıcı Adı</th>
                                        <th>Resim</th>
                                        <th>E-Posta</th>
                                        <th>Üyelik Tarihi</th>
                                        <th>Durum</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
@endsection
