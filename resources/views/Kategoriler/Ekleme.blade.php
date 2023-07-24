@extends('layouts.master')
@section('title', 'Base Inputs')
@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Kategori Ekleme</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Kategoriler</li>
    <li class="breadcrumb-item active">Ekleme</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <form class="form theme-form">
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputName">Kategori Adı</label>
                                    <input class="form-control" id="exampleInputName" type="text"
                                        placeholder="KategoriAdi">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Ekle</button>
                            <input class="btn btn-light" type="reset" value="İptal">
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
@section('script')
@endsection
