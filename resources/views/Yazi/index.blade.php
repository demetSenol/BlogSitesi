@extends('layouts.master')
@section('title', 'Product list')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/rating.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Product list</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Ecommerce</li>
<li class="breadcrumb-item active">Product list</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
     <!-- Individual column searching (text inputs) Starts-->
     <div class="col-sm-12">
       <div class="card">
         <div class="card-header">
          <h4>Yazi Listeleme</h4>
         </div>
         <div class="card-body">
           <div class="table-responsive product-table">
             <table class="display" id="basic-1">
               <thead>
                 <tr>
                   <th>Resim</th>
                   <th>Başlık</th>
                   <th>İcerik</th>
                   <th>Üye</th>
                   <th>Kategori</th>
                   <th>Durum</th>
                   <th>Ekleme Tarihi</th>
                   <th>İşlemler</th>
                 </tr>
               </thead>
               @foreach ($yazi as $yazi)
               <tbody>
                 <tr>
                   <td><img src="{{ asset('assets/images/ecommerce/product-table-1.png') }}" alt=""></td>
                   <td>
                     {{ $yazi->baslik }}
                   </td>
                   <td>{{ $yazi->icerik }}</td>
                   <td>{{ $yazi->uyeID }}</td>
                   <td>{{ $yazi->kategoriID }}</td>
                   <td class="font-primary" value="0">Onay Bekliyor</td>
                   <td>{{ $yazi->created_at }}</td>
                   <td>
                     <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" >Delete</button>
                     <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" >Edit</button>
                   </td>
                 </tr>

               </tbody>
               @endforeach
             </table>
           </div>
         </div>
       </div>
     </div>
     <!-- Individual column searching (text inputs) Ends-->
   </div>
 </div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
<script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/ecommerce.js')}}"></script>
<script src="{{asset('assets/js/product-list-custom.js')}}"></script>
@endsection
