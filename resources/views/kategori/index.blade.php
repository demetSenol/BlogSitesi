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
                        <thead class="table-dark ">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Kategori Adı</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategoriler as $kategori)
                            <tr>
                                <td>{{ $kategori->id }}</td>
                                <td>{{ $kategori->kategoriAdi }}</td>
                                <td>
                                    <form class="d-inline" action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" onsubmit="return confirm('Kategoriyi silmek istediğinize emin misiniz?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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


