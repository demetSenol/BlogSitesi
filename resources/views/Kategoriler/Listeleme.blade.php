@extends('layouts.master')
@section('title', 'Bootstrap Basic Tables')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Kategori Listeleme</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Kategoriler</li>
<li class="breadcrumb-item active">Listeleme</li>
@endsection

@section('content')
<div class="col-sm-12">
    <div class="card">
      <div class="card-header">
      </div>
      <div class="card-block row">
        <div class="col-sm-12 col-lg-12 col-xl-12">
          <div class="table-responsive">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Kategori Adı</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
  @section('script')
  @endsection
