<header>
    <div class="header-menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-6 col-sm-6">
                    <div class="logo"><a href="{{ asset('/') }}"><img src="{{ $site_info->logo }}" class="img-fluid" alt="{{ $site_info->name_company }}"></a></div>
                </div>
                <div class="col-md-9 col-6 col-sm-6">
                    <div class="btn-bar text-right d-none"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/bar.svg" class="img-fluid" alt="{{ $site_info->name_company }}"></a></div>
                    <div class="h-menu">
                        <div class="close-menu d-none"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/close.svg" class="img-fluid" alt="{{ $site_info->name_company }}"></a></div>
                        <ul>
                            @foreach($menuMain as $item)
                            <li>
                                <a href="{{ asset($item->url) }}"><img src="{{ $item->icon }}" class="img-fluid" alt="{{ $item->title }}">{{ $item->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>