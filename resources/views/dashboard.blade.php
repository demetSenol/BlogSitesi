@extends('layouts.app')
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
	<div class="row">
	  <div class="col-sm-12">
		<div class="card">
		  <div class="card-header">
			<h5>Yazı Ekleme</h5>
		  </div>
		  <div class="card-body add-post">
			<form class="row needs-validation" action="{{ route('yazi.store') }}" method="POST">
                @csrf
			  <div class="col-sm-12">
				<div class="mb-3">
				  <label for="validationCustom01">Title:</label>
				  <input class="form-control" id="validationCustom01" name="baslik" placeholder="Post Title" required="">
				  <div class="valid-feedback">Looks good!</div>
				</div>



				<div class="mb-3">
				  <div class="col-form-label" >Category:
					<select class="js-example-placeholder-multiple col-sm-12" multiple="multiple" name="kategoriID[]">
                        @foreach($kategoriler as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->kategoriAdi }}</option>
                        @endforeach

					</select>
				  </div>
				</div>


				<div class="email-wrapper">
				  <div class="theme-form">
					<div class="mb-3">
					  <label>Content:</label>
					  <textarea id="text-box" name="icerik" cols="10" rows="2"></textarea>
					</div>
				  </div>
				</div>
			  </div>
			</form>
			<form class="dropzone" id="singleFileUpload" action="/upload.php">
			  <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
				<h6 class="mb-0">Drop files here or click to upload.</h6>
			  </div>
			</form>
			<div class="btn-showcase text-end">
			  <button class="btn btn-primary" type="submit">Post</button>
			  <input class="btn btn-light" type="reset" value="Discard">
			</div>
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
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
@endsection
