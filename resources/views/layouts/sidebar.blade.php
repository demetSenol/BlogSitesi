<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
      <div class="logo-wrapper"><a href="{{ route('home')}}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="{{ route('home')}}"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('home')}}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>

                </svg><span>Yönetim Merkezi</span></a>
            </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                </svg>
                <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                </svg><span>Yazı</span></a>
            <ul class="sidebar-submenu">
                <li><a  href="{{ route('yazi.edit', ['yazi' => $id]) }}">Yazı Ekleme</a></li>
                {{-- <li><a href="{{route('yazi.details')}}">Detay</a></li> --}}
                <li ><a href="{{route('yazi.index')}}">Yazı Listesi</a></li>
                {{-- <li><a href="{{route('yazi.Onay')}}">Yazı Onay İşlemi</a></li> --}}
            </ul>
        </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                </svg><span>Üyeler</span></a> <ul class="sidebar-submenu">
                    {{-- <li><a href="{{route('uyeListesi')}}">Üye Listesi</a></li> --}}
                </ul>
            </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                </svg>
                <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                </svg><span>Yorumlar</span></a>
            <ul class="sidebar-submenu">
                <li><a>Onaylı Yorumlar</a></li>
                <li><a>Onaysız Yorumlar</a></li>
            </ul>
        </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                </svg>
                <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                </svg><span>Galeri</span></a>
            <ul class="sidebar-submenu">
                <li><a>Üye Resimleri</a></li>
                <li><a>Yazı Resimleri</a></li>
            </ul>
        </li>


        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
            </svg>
            <svg class="fill-icon">
                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
            </svg><span>Kategori</span></a>
        <ul class="sidebar-submenu">
             <li><a href="{{route('kategori.index')}}">Kategori Listeleme</a></li>
            <li><a href="{{route('kategori.create')}}">Kategori Ekleme</a></li>

        </ul>

    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
        <svg class="stroke-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
        </svg>
        <svg class="fill-icon">
            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
        </svg><span>Yorumlar</span></a>
    <ul class="sidebar-submenu">
         {{--  <li><a href="{{route('yorum.Onaylı')}}">Onaylı Yorumlar</a></li>
        <li><a href="{{route('yorum.Onaysiz')}}">Onaysız Yorumlar</a></li>  --}}
    </ul>
</li>

          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>
