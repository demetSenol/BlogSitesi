@extends('layouts.master')
@section('title', 'Edit Kategori')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Kategori Düzenleme</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Kategoriler</li>
<li class="breadcrumb-item active">Düzenleme</li>
@endsection

@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-block row">
            <div class="col-sm-12 col-lg-12 col-xl-12">
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kategoriAdi">Kategori Adı:</label>
                        <input type="text" name="kategoriAdi" class="form-control" value="{{ $kategori->kategoriAdi }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </form>
            </div>
        </div>
    </div>
</div>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@endsection

@section('script')
@endsection
