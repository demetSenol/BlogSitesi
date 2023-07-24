@extends('layouts.master')
@section('title', 'User Profile')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Yazi Detayı</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Yazı</li>
    <li class="breadcrumb-item active">Detay</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 user-name">JOHAN DIO</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>10 Hours ago</small></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 col-xl-4">
                                    <div class="my-gallery" id="aniimated-thumbnials-3" itemscope="">
                                        <figure itemprop="associatedMedia" itemscope=""><a
                                                href="{{ asset('assets/images/blog/img.png') }}" itemprop="contentUrl"
                                                data-size="1600x950"><img class="img-fluid rounded"
                                                    src="{{ asset('assets/images/blog/img.png') }}" itemprop="thumbnail"
                                                    alt="gallery"></a>
                                            <figcaption itemprop="caption description">Image caption 1</figcaption>
                                        </figure>
                                    </div>
                                    <div class="like-comment mt-4 like-comment-sm-mb">
                                        <ul class="list-inline">
                                            <li class="list-inline-item border-right pe-3">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-heart"></i></a>  Like</label><span
                                                    class="ms-2 counter">2659</span>
                                            </li>
                                            <li class="list-inline-item ms-2">
                                                <label class="m-0"><a href="#"><i
                                                            class="fa fa-comment"></i></a>  Comment</label><span
                                                    class="ms-2 counter">569</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                        up one of the more obscure Latin words, consecteturContrary to popular belief, Lorem
                                        Ipsum is not simply random text. It has roots in a piece of classical Latin
                                        literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                        Latin words, consectetur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
@endsection
