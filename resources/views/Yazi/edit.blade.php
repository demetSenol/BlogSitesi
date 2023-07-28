@extends('layouts.master')
@section('title', 'Add Post')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Yazı Ekleme</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Yazı</li>
<li class="breadcrumb-item active">Yazı Ekleme</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Yazı Düzenle</div>

                <div class="card-body">
                    <form action="{{ route('yazi.update', ['yazi' => $yazi->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="baslik">Başlık</label>
                            <input type="text" name="baslik" id="baslik" class="form-control" value="{{ $yazi->baslik }}" required>
                        </div>

                        <div class="form-group">
                            <label for="icerik">İçerik</label>
                            <textarea name="icerik" id="icerik" class="form-control" rows="6" required>{{ $yazi->icerik }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="kategoriID">Kategori</label>
                            <select name="kategoriID" id="kategoriID" class="form-control" required>
                                <option value="" disabled>Seçiniz</option>
                                @foreach ($kategoriler as $kategori)
                                    <option value="{{ $kategori->id }}" @if ($yazi->kategoriID === $kategori->id) selected @endif>{{ $kategori->ad }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('script')
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
@endsection
