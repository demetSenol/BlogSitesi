@extends('layouts.master')
@section('title', 'Bootstrap Basic Tables')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Onaysız Yorumlar</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Yorumlar</li>
<li class="breadcrumb-item active">Onaysiz Yorumlar</li>
@endsection

@section('content')
 <div class="container-fluid basic_table">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table">
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Kaydet</button>
                          </div>
                      <thead>
                        <tr class="border-bottom-primary">
                            <th scope="col">Id</th>
                            <th scope="col">Üye Adı</th>
                            <th scope="col">Yazı Adı</th>
                            <th scope="col">Yorum</th>
                            <th scope="col">Status</th>
                            <th scope="col">Onay</th>
                            <th scope="col">Tarihi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="border-bottom-secondary">
                            <th scope="row">1</th>
                            <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/1.jpg') }}" alt="profile">Ram Jacob</td>
                            <td>Wolfe</td>
                            <td>RamJacob@twitter</td>
                            <td>0</td>
                            <td>
                                <input type="checkbox" name="userCheckbox[]" value="1">
                            </td>
                          <td>24.07.2023</td>
                          </tr>
                          <tr class="border-bottom-success">
                            <th scope="row">2</th>
                            <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/2.jpg') }}" alt="profile">John Deo</td>
                            <td>Gummer</td>
                            <td>JohnDeo@twitter	</td>
                            <td>0</td>
                            <td>
                                <input type="checkbox" name="userCheckbox[]" value="1">
                            </td>
                          <td>24.07.2023</td>
                          </tr>
                          <tr class="border-bottom-info">
                            <th scope="row">3</th>
                            <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/3.jpg') }}" alt="profile">Elana John</td>
                            <td>Cazale	</td>
                            <td>ElanaJohn@twitter</td>
                            <td>0</td>
                            <td>
                                <input type="checkbox" name="userCheckbox[]" value="1">
                            </td>
                          <td>24.07.2023</td>
                          </tr>
                          <tr class="border-bottom-warning">
                            <th scope="row">4</th>
                            <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/7.jpg') }}" alt="">Meryl Streep</td>
                            <td>Roberts</td>
                            <td>MerylStreep@twitter</td>
                            <td>0</td>
                            <td>
                                <input type="checkbox" name="userCheckbox[]" value="1">
                            </td>
                          <td>24.07.2023</td>
                          </tr>
                          <tr class="border-bottom-danger">
                            <th scope="row">5</th>
                            <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/2.png') }}" alt="">Emma Stone</td>
                            <td>Stone</td>
                            <td>EmmaStone@twitter	</td>
                            <td>0</td>
                            <td>
                                <input type="checkbox" name="userCheckbox[]" value="1">
                            </td>
                          <td>24.07.2023</td>
                          </tr>
                          <tr class="border-bottom-light">
                            <th scope="row">6</th>
                            <td> <img class="img-30 me-2" src="{{ asset('assets/images/user/3.png') }}" alt="">Eliana Jons</td>
                            <td>Jons</td>
                            <td>ElianaJons@twitter</td>
                            <td>0</td>
                            <td>
                                <input type="checkbox" name="userCheckbox[]" value="1">
                            </td>
                          <td>24.07.2023</td>
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
