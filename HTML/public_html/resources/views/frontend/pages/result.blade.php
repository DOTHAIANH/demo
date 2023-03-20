@extends('frontend.master')
@section('main')
<main>
    <section class="result-banner screen-result">
        @if($age < 13)
        <div class="old-res old-1"><img src="{{ __BASE_URL__ }}/images/bn-result-1.png" class="img-fluid w-100" alt=""></div>
        @elseif($age > 12 && $age < 19)
        <div class="old-res old-2"><img src="{{ __BASE_URL__ }}/images/bn-result-2.png" class="img-fluid w-100" alt=""></div>
        @elseif($age > 18 && $age < 30)
        <div class="old-res old-3"><img src="{{ __BASE_URL__ }}/images/bn-result-3.png" class="img-fluid w-100" alt=""></div>
        @elseif($age > 29 && $age < 50)
        <div class="old-res old-4"><img src="{{ __BASE_URL__ }}/images/bn-result-4.png" class="img-fluid w-100" alt=""></div>
        @elseif($age > 49)
        <div class="old-res old-5"><img src="{{ __BASE_URL__ }}/images/bn-result-5.png" class="img-fluid w-100" alt=""></div>
        @endif        
        <div class="result-step">
            <div class="container">
                <div class="content-home text-center">
                    <div class="slide-result">
                        <div class="item-slide">
                            <div class="txt-result">
                                <div class="title-result text-center" data-aos="fade-up">
                                    <h3>Kết Quả Tra Cứu</h3>
                                    <ul>
                                        <li>Họ và tên: <span>{{ request('name') }}</span></li>
                                        <li>Ngày sinh: <span>{{ request('day') }}/{{ request('month') }}/{{ request('year') }}</span></li>
                                    </ul> 
                                </div>
                                
                                <div class="content-result text-center">
                                    <div class="box-number-result">
                                        <div class="add-number">
                                            <ul>
                                                <li data-aos="fade-left" data-aos-delay="100"><input type="text" class="txt_number_result" value="Ngày {{ request('day') }}" readonly></li>
                                                <li data-aos="fade-left" data-aos-delay="300"><input type="text" class="txt_number_result" value="{{ $data_day }}" readonly></li>
                                                <li data-aos="fade-left" data-aos-delay="500"><input type="text" class="txt_number_result" value="{{ $kq_day }}" readonly></li>
                                            </ul>
                                            <ul>
                                                <li data-aos="fade-left" data-aos-delay="700"><input type="text" class="txt_number_result" value="Tháng {{ request('month') }}" readonly></li>
                                                <li data-aos="fade-left" data-aos-delay="900"><input type="text" class="txt_number_result" value="{{ $data_month }}" readonly></li>
                                                <li data-aos="fade-left" data-aos-delay="1100"><input type="text" class="txt_number_result" value="{{ $kq_month }}" readonly></li>
                                            </ul>
                                            <ul>
                                                <li data-aos="fade-left" data-aos-delay="1300"><input type="text" class="txt_number_result" value="{{ request('year') }}" readonly></li>
                                                <li data-aos="fade-left" data-aos-delay="1500"><input type="text" class="txt_number_result" value="{{ $data_year }}" readonly></li>
                                                <li data-aos="fade-left" data-aos-delay="1700"><input type="text" class="txt_number_result" value="{{ $kq_year }}" readonly></li>
                                            </ul>
                                        </div>
                                        <div class="total-result">
                                            <div class="numb-total" data-aos="fade-left" data-aos-delay="1900"><input type="text" class="txt_total" readonly value="{{ $consoduongdoi }}"></div>
                                        </div>
                                    </div>
                                    <div class="desc-numb-total">
                                        <div class="icon-audio">
                                            <div class="icon mp3-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/play.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/pause.svg" class="img-fluid aud-abs" alt=""></a></div>
                                            <div class="icon vol-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/vol.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/muted.svg" class="img-fluid aud-abs" alt=""></a></div>
                                        </div>
                                        <div class="desc-aud">
                                            {!! @$content[0] !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-slide">
                            <div class="txt-result star-txt">
                                <div class="title-result text-center">
                                    <h3>Con số đường đời</h3>
                                </div>
                                <div class="content-result text-center">
                                    <div class="center-result step-1">
                                        <div class="cicle-rel"><img src="{{ __BASE_URL__ }}/images/circle-1.png" class="img-fluid" alt=""></div>
                                        <div class="cicle-abs"><img src="{{ __BASE_URL__ }}/images/circle-2.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><span style="color: #f1c40f;">{{ checktotal([$kq_year,$kq_month,$kq_day]) }}</span></div>
                                    </div>
                                    <div class="desc-numb-total">
                                        <div class="icon-audio">
                                            <div class="icon mp3-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/play.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/pause.svg" class="img-fluid aud-abs" alt=""></a></div>
                                            <div class="icon vol-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/vol.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/muted.svg" class="img-fluid aud-abs" alt=""></a></div>
                                        </div>
                                        <div class="desc-aud">{!! @$content[0] !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-slide">
                            <div class="txt-result star-txt">
                                <div class="title-result text-center">
                                    <h3>Con Số Sứ Mệnh</h3>
                                </div>
                                <div class="content-result text-center">
                                    <div class="center-result step-1">
                                        <div class="cicle-rel"><img src="{{ __BASE_URL__ }}/images/circle-1.png" class="img-fluid" alt=""></div>
                                        <div class="cicle-abs"><img src="{{ __BASE_URL__ }}/images/circle-2.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><img src="{{ __BASE_URL__ }}/images/rel-1.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><span style="color: #f1c40f;">{{ $chisosumenh }}</span></div>
                                    </div>
                                    <div class="desc-numb-total">
                                        <div class="icon-audio">
                                            <div class="icon mp3-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/play.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/pause.svg" class="img-fluid aud-abs" alt=""></a></div>
                                            <div class="icon vol-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/vol.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/muted.svg" class="img-fluid aud-abs" alt=""></a></div>
                                        </div>
                                        <div class="desc-aud">{!! @$content[0] !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-slide">
                            <div class="txt-result star-txt">
                                <div class="title-result text-center">
                                    <h3>Chỉ Số Linh Hồn</h3>
                                </div>
                                <div class="content-result text-center">
                                    <div class="center-result step-1">
                                        <div class="cicle-rel"><img src="{{ __BASE_URL__ }}/images/circle-1.png" class="img-fluid" alt=""></div>
                                        <div class="cicle-abs"><img src="{{ __BASE_URL__ }}/images/circle-2.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><img src="{{ __BASE_URL__ }}/images/rel-2.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><span style="color: #f1c40f;">{{ $consolinhhon }}</span></div>
                                    </div>
                                    <div class="desc-numb-total">
                                        <div class="icon-audio">
                                            <div class="icon mp3-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/play.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/pause.svg" class="img-fluid aud-abs" alt=""></a></div>
                                            <div class="icon vol-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/vol.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/muted.svg" class="img-fluid aud-abs" alt=""></a></div>
                                        </div>
                                        <div class="desc-aud">{!! @$content[0] !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-slide">
                            <div class="txt-result star-txt">
                                <div class="title-result text-center">
                                    <h3>Chỉ Số Tính Cách</h3>
                                </div>
                                <div class="content-result text-center">
                                    <div class="center-result step-1">
                                        <div class="cicle-rel"><img src="{{ __BASE_URL__ }}/images/circle-1.png" class="img-fluid" alt=""></div>
                                        <div class="cicle-abs"><img src="{{ __BASE_URL__ }}/images/circle-2.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><img src="{{ __BASE_URL__ }}/images/rel-3.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><span style="color: #f1c40f;">{{ $consotinhcach }}</span></div>
                                    </div>
                                    <div class="desc-numb-total">
                                        <div class="icon-audio">
                                            <div class="icon mp3-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/play.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/pause.svg" class="img-fluid aud-abs" alt=""></a></div>
                                            <div class="icon vol-action"><a href="javascript:void(0)"><img src="{{ __BASE_URL__ }}/images/vol.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/muted.svg" class="img-fluid aud-abs" alt=""></a></div>
                                        </div>
                                        <div class="desc-aud">{!! @$content[0] !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="item-slide slide-last">
                            <div class="txt-result star-txt">
                                <div class="title-result text-center">
                                    <h3>Chỉ Số Ngày Sinh</h3>
                                </div>
                                <div class="content-result text-center">
                                    <div class="center-result step-1">
                                        <div class="cicle-rel"><img src="{{ __BASE_URL__ }}/images/circle-1.png" class="img-fluid" alt=""></div>
                                        <div class="cicle-abs"><img src="{{ __BASE_URL__ }}/images/circle-2.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><img src="{{ __BASE_URL__ }}/images/rel-4.png" class="img-fluid" alt=""></div>
                                        <div class="numb-center"><span style="color: #f1c40f;">{{ checktotal([$kq_year,$kq_month,$kq_day]) }}</span></div>
                                    </div>
                                    <div class="desc-numb-total">
                                        <div class="icon-audio">
                                            <div class="icon" >
                                                <a href="javascript:void(0)">
                                                    <img src="{{ __BASE_URL__ }}/images/play.svg" onclick="play();" class="img-fluid aud-rel" alt="">
                                                    <img src="{{ __BASE_URL__ }}/images/pause.svg" class="img-fluid aud-abs" alt="">
                                                </a>
                                            </div>
                                            <div class="icon"><a href="javascript:void(0)" ><img src="{{ __BASE_URL__ }}/images/vol.svg" class="img-fluid aud-rel" alt=""><img src="{{ __BASE_URL__ }}/images/muted.svg" class="img-fluid aud-abs" alt=""></a></div>
                                        </div>
                                        <div class="desc-aud">{!! @$content[0] !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="result-end">
            <div class="container">
                <div class="title-res-end text-center">
                    <p>Bạn vừa trải nghiệm xong <span>Bài Số Học Miễn Phí 5 Chỉ Số</span></p>
                    <p>Để có bức tranh tổng quan hơn về cuộc đời bạn, vui lòng mua <span>Bài Số Học đầy đủ 26 Chỉ Số</span> dưới đây!</p>
                    <div class="btn-buy"><a href="">ĐĂNG KÝ NGAY</a></div>
                </div>
                <div class="content-old-result">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="avarta-old-step">
                                <div class="avarta">
                                    @if($age < 13)
                                    <img src="{{ __BASE_URL__ }}/images/betrai.png" class="img-fluid d-none" alt="" data-sex="Nam">
                                    <img src="{{ __BASE_URL__ }}/images/begai.png" class="img-fluid d-none" alt="" data-sex="Nữ">
                                    @elseif($age > 12 && $age < 30)
                                    <img src="{{ __BASE_URL__ }}/images/chung.png" class="img-fluid" alt="">
                                    @elseif($age > 29)
                                    <img src="{{ __BASE_URL__ }}/images/nam.png" class="img-fluid d-none" alt="" data-sex="Nam">
                                    <img src="{{ __BASE_URL__ }}/images/nu.png" class="img-fluid d-none" alt="" data-sex="Nữ">
                                    @endif 
                                </div>
                                <div class="avs-abs text-center" style="top: 35%;">
                                    <ul>
                                        <li class="name-text">{{ request('name') }}</li>
                                        {{-- <li>{{ request('day') }}/{{ request('month') }}/{{ request('year') }}</li> --}}
                                    </ul>
                                </div>
                                <div class="circle-cal">
                                    <div class="numb-cir numb-text" style="font-size: 65px;top: 270px;">{{ $consoduongdoi }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content-calculations">
                                <div class="top text-center">
                                    <ul>
                                        <li>
                                            <p>{{ $thachthuc1 }}</p>
                                            <div class="old"><img src="{{ __BASE_URL__ }}/images/old.png" class="img-fluid w-100" alt=""><span>0-29 tuổi</span></div>
                                            <label>{{ $dinhcao1 }}</label>
                                        </li>
                                        <li>
                                            <p>{{ $thachthuc2 }}</p>
                                            <div class="old"><img src="{{ __BASE_URL__ }}/images/old.png" class="img-fluid w-100" alt=""><span>30-38 tuổi</span></div>
                                            <label>{{ $dinhcao2 }}</label>
                                        </li>
                                        <li>
                                            <p>{{ $thachthuc3 }}</p>
                                            <div class="old"><img src="{{ __BASE_URL__ }}/images/old.png" class="img-fluid w-100" alt=""><span>39-48 tuổi</span></div>
                                            <label>{{ $dinhcao3 }}</label>
                                        </li>
                                        <li>
                                            <p>{{ $thachthuc4 }}</p>
                                            <div class="old"><img src="{{ __BASE_URL__ }}/images/old.png" class="img-fluid w-100" alt=""><span>49-56 tuổi</span></div>
                                            <label>{{ $dinhcao4 }}</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-per">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="item-per">
                                                <div class="title-per w-100 text-center justify-content-center">Chân Dung Cá Nhân</div>
                                                <ul>
                                                    <li>
                                                        <p>Nội tâm</p>
                                                        <span>{{ $consolinhhon }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Nội cảm</p>
                                                        <span>{{ $chisonoicam }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Tương tác</p>
                                                        <span>{{ $consotinhcach }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Thái độ</p>
                                                        <span>{{ $consothaido }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Số lặp</p>
                                                        <span>{{ $consosolap }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Kết nối nội tâm & Tương tác</p>
                                                        <span>{{ $ketnoinoitamvatinhcach }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item-per">
                                                <div class="title-per w-100 text-center justify-content-center">Chân Dung Sự Nghiệp</div>
                                                <ul>
                                                    <li>
                                                        <p>Đường đời</p>
                                                        <span>{{ $consoduongdoi }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Sứ mệnh</p>
                                                        <span>{{ $chisosumenh }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Ngày sinh</p>
                                                        <span>{{ $consongaysinh }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Trưởng thành</p>
                                                        <span>{{ $consotruongthanh }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Kết nối đường đời & Sứ mệnh</p>
                                                        <span>{{ $ketnoiduongdoivasumenh }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item-per">
                                                <div class="title-per w-100 text-center justify-content-center">Phát Triển Bản Thân</div>
                                                <ul>
                                                    <li>
                                                        <p>Bổ sung</p>
                                                        <span>{{ empty(consobossung(str_slug(request('name'),' ', 'en'))) ? 0 : consobossung(str_slug(request('name'),' ', 'en')) }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Cân bằng</p>
                                                        <span>{{ chisocanbang(str_slug(request('name'),' ', 'en')) }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Nợ nghiệp</p>
                                                        <span>{{ $consononghiep }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Mức độ biểu hiện</p>
                                                        <span>{{ $chisomucdobieuhien }}</span>
                                                    </li>
                                                   <!--  <li>
                                                        <p>Biểu đồ và mũi tên sức mạnh</p>
                                                        <span></span>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item-per">
                                                <div class="title-per w-100 text-center justify-content-center">Cột Mốc Quan Trọng</div>
                                                <ul>
                                                    <li>
                                                        <p>Năm cá nhân</p>
                                                        <span>{{ $consonamcanhan }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Tháng cá nhân</p>
                                                        <span>{{ $thangcanhan }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Đỉnh cao</p>
                                                        <span>{{ $dinhcao1 }}, {{ $dinhcao2 }}, {{ $dinhcao3 }}, {{ $dinhcao4 }}</span>
                                                    </li>
                                                    <li>
                                                        <p>Thách thức chặng</p>
                                                        <span>{{ $thachthuc1 }}, {{ $thachthuc2 }}, {{ $thachthuc3 }}, {{ $thachthuc4 }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item-per">
                                                <div class="title-per w-100 text-center justify-content-center mb-3">Biểu đồ ngày sinh</div>
                                                <div class="tb-wrap">
                                                    <div class="tb-div">
                                                        <table class="inner-border">
                                                            <tr class="inner-border-tr">
                                                                <td id="td3" class="cell animated pulse infinite">{{ str_repeat("3",getnumber($full_number,3)) }}</td>
                                                                <td id="td6" class="cell animated pulse infinite">{{ str_repeat("6",getnumber($full_number,6)) }}</td>
                                                                <td id="td9" class="cell animated pulse infinite">{{ str_repeat("9",getnumber($full_number,9)) }}</td>
                                                            </tr>
                                                            <tr class="inner-border-tr">
                                                                <td id="td2" class="cell animated pulse infinite">{{ str_repeat("2",getnumber($full_number,2)) }}</td>
                                                                <td id="td5" class="cell animated pulse infinite">{{ str_repeat("5",getnumber($full_number,5)) }}</td>
                                                                <td id="td8" class="cell animated pulse infinite">{{ str_repeat("8",getnumber($full_number,8)) }}</td>
                                                            </tr>
                                                            <tr class="inner-border-tr">
                                                                <td id="td1" class="cell animated pulse infinite">{{ str_repeat("1",getnumber($full_number,1)) }}</td>
                                                                <td id="td4" class="cell animated pulse infinite">{{ str_repeat("4",getnumber($full_number,4)) }}</td>
                                                                <td id="td7" class="cell animated pulse infinite">{{ str_repeat("7",getnumber($full_number,7)) }}</td>
                                                            </tr>
                                                        </table>
                                                        <img src="https://nhansohocvn.com/images/arr1.png" class="arrow animated pulse infinite {{$stt_ns_th1 == 1 ? '' : 'd-none'}}" id="arr1"/>
                                                        <img src="https://nhansohocvn.com/images/arr2.png" class="arrow animated pulse infinite {{$stt_ns_th2 == 1 ? '' : 'd-none'}}" id="arr2"/>
                                                        <img src="https://nhansohocvn.com/images/arr2.png" class="arrow animated pulse infinite {{$stt_ns_th3 == 1 ? '' : 'd-none'}}" id="arr3"/>
                                                        <img src="https://nhansohocvn.com/images/arr2.png" class="arrow animated pulse infinite {{$stt_ns_th4 == 1 ? '' : 'd-none'}}" id="arr4"/>
                                                        <img src="https://nhansohocvn.com/images/arr3.png" class="arrow animated pulse infinite {{$stt_ns_th5 == 1 ? '' : 'd-none'}}" id="arr5"/>
                                                        <img src="https://nhansohocvn.com/images/arr3.png" class="arrow animated pulse infinite {{$stt_ns_th6 == 1 ? '' : 'd-none'}}" id="arr6"/>
                                                        <img src="https://nhansohocvn.com/images/arr3.png" class="arrow animated pulse infinite {{$stt_ns_th7 == 1 ? '' : 'd-none'}}" id="arr7"/>
                                                        <img src="https://nhansohocvn.com/images/arr4.png" class="arrow animated pulse infinite {{$stt_ns_th8 == 1 ? '' : 'd-none'}}" id="arr8"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item-per">
                                                <div class="title-per w-100 text-center justify-content-center mb-3">Biểu đồ tên</div>
                                                <div class="tb-wrap">
                                                    <div class="tb-div">
                                                        <table class="inner-border">
                                                            <tr class="inner-border-tr">
                                                                <td id="td3" class="cell animated pulse infinite">{{ str_repeat("3",getnumberName($full_name,3)) }}</td>
                                                                <td id="td6" class="cell animated pulse infinite">{{ str_repeat("6",getnumberName($full_name,6)) }}</td>
                                                                <td id="td9" class="cell animated pulse infinite">{{ str_repeat("9",getnumberName($full_name,9)) }}</td>
                                                            </tr>
                                                            <tr class="inner-border-tr">
                                                                <td id="td2" class="cell animated pulse infinite">{{ str_repeat("2",getnumberName($full_name,2)) }}</td>
                                                                <td id="td5" class="cell animated pulse infinite">{{ str_repeat("5",getnumberName($full_name,5)) }}</td>
                                                                <td id="td8" class="cell animated pulse infinite">{{ str_repeat("8",getnumberName($full_name,8)) }}</td>
                                                            </tr>
                                                            <tr class="inner-border-tr">
                                                                <td id="td1" class="cell animated pulse infinite">{{ str_repeat("1",getnumberName($full_name,1)) }}</td>
                                                                <td id="td4" class="cell animated pulse infinite">{{ str_repeat("4",getnumberName($full_name,4)) }}</td>
                                                                <td id="td7" class="cell animated pulse infinite">{{ str_repeat("7",getnumberName($full_name,7)) }}</td>
                                                            </tr>
                                                        </table>
                                                        <img src="https://nhansohocvn.com/images/arr1.png" class="arrow animated pulse infinite {{$stt_name_th1 == 1 ? '' : 'd-none'}}" id="arr1"/>
                                                        <img src="https://nhansohocvn.com/images/arr2.png" class="arrow animated pulse infinite {{$stt_name_th2 == 1 ? '' : 'd-none'}}" id="arr2"/>
                                                        <img src="https://nhansohocvn.com/images/arr2.png" class="arrow animated pulse infinite {{$stt_name_th3 == 1 ? '' : 'd-none'}}" id="arr3"/>
                                                        <img src="https://nhansohocvn.com/images/arr2.png" class="arrow animated pulse infinite {{$stt_name_th4 == 1 ? '' : 'd-none'}}" id="arr4"/>
                                                        <img src="https://nhansohocvn.com/images/arr3.png" class="arrow animated pulse infinite {{$stt_name_th5 == 1 ? '' : 'd-none'}}" id="arr5"/>
                                                        <img src="https://nhansohocvn.com/images/arr3.png" class="arrow animated pulse infinite {{$stt_name_th6 == 1 ? '' : 'd-none'}}" id="arr6"/>
                                                        <img src="https://nhansohocvn.com/images/arr3.png" class="arrow animated pulse infinite {{$stt_name_th7 == 1 ? '' : 'd-none'}}" id="arr7"/>
                                                        <img src="https://nhansohocvn.com/images/arr4.png" class="arrow animated pulse infinite {{$stt_name_th8 == 1 ? '' : 'd-none'}}" id="arr8"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="progress-result text-center">
                                <div class="title-per">ZENWAY luận giải gợi ý con đường phát triển</div>
                                <div class="list-prog">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="item-prog text-center">
                                                <div class="avr-prg"><img src="{{ __BASE_URL__ }}/images/pg-1.png" class="img-fluid w-100" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="item-prog text-center">
                                                <div class="avr-prg"><img src="{{ __BASE_URL__ }}/images/pg-2.png" class="img-fluid w-100" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="item-prog text-center">
                                                <div class="avr-prg"><img src="{{ __BASE_URL__ }}/images/pg-3.png" class="img-fluid w-100" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="item-prog text-center">
                                                <div class="avr-prg"><img src="{{ __BASE_URL__ }}/images/pg-4.png" class="img-fluid w-100" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="item-prog text-center">
                                                <div class="avr-prg"><img src="{{ __BASE_URL__ }}/images/pg-5.png" class="img-fluid w-100" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<audio id="audio" src="{{ @$mp3[0] }}"></audio>
<div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hãy nhập thêm thông tin để nghe tiếp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <div class="col-md-12 col-sm-12 col-12"><input required name="email" type="text" placeholder="Email" class="txt_field form-control email" /></div>
                <div class="col-md-12 col-sm-12 col-12 mt-3"><input required name="text" type="text" placeholder="Số điện thoại" class="txt_field form-control phone" /></div>
                <div class="col-md-6 col-sm-6 col-6 mt-3">
                    <select class="txt_field sex form-control">
                        <option value="Nữ">Nữ</option>
                        <option value="Nam">Nam</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-6 col-6 mt-3">
                    <select class="txt_field tinhtrang form-control">
                        <option value="0"> Tình trạng</option>
                        <option value="Độc thân">Độc thân</option>
                        <option value="Đã kết hôn">Đã kết hôn</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary formmp3">Xem Tiếp</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $( document ).ready(function() {
        var mp3 =  {!! json_encode($mp3) !!};
        var content =  {!! json_encode($content) !!};
        var slide =  {!! json_encode($slide) !!};
        var total = {{ count($mp3) }};
        end(1,total,mp3,content,slide) 
    });

    function end(count,total,mp3,content,slide) {
        $('#audio').on('ended', function() {
            if (count == slide[0] || count == slide[1] || count == slide[2] ) {
                $(".slide-result").slick('slickNext');
            }
            if (count == total) {
                $('#popup1').modal('show');
                loadmore();
                count = 100000;
            }
            if (count < total) {
                $("#audio").attr("src", mp3[count]);
                var audio = document.getElementById("audio");
                $(".desc-aud").html('');
                if(content[count]){
                    $(".desc-aud").html(content[count]);
                }
                audio.play();
                count++;
            }
        });
    }
    function loadmore() {
        $('.formmp3').click( function() {
            if (isEmail($('.email').val()) && $('.email').val() !== '' && $('.phone').val() !== '' && $('.tinhtrang').val() != 0 && $('.sex').val() != 0) {
                $.ajax({
                    url: '{{ route("result.form") }}',
                    type: "GET",
                    data: {
                        day: '{{ request("day") }}',
                        month: '{{ request("month") }}',
                        year: '{{ request("year") }}',
                        name: '{{ request("name") }}',
                        tinhtrang: $('.tinhtrang').val(),
                        sex: $('.sex').val(),
                        email: $('.email').val(),
                        phone: $('.phone').val(),
                    }, 
                    success:function(data){
                        $('#popup1').modal('hide');
                        $('.modal-backdrop').remove();
                        var datamp3 =  data.data.mp3;
                        var datacontent =  data.data.content;
                        var dataslide =  data.data.slide;
                        var datatotal = data.data.total;
                        $("#audio").attr("src", datamp3[0]);
                        var audio = document.getElementById("audio");
                        $(".desc-aud").html('');
                        audio.play();
                        if(datacontent[0]){
                            $(".desc-aud").html(datacontent[0]);
                        }
                        endform(1,datatotal,datamp3,datacontent,dataslide) 
                    }
                });
            }else{
                alert('Kiểm tra lại thông tin');
            }
            
        });
    }
    function endform(count,total,mp3,content,slide) {
        $('#audio').on('ended', function() {
            if (count == slide[0] ) {
                $(".slide-result").slick('slickNext');
            }
            if (count == total) {
                var name = $('.sex').val();
                $('.avarta img[data-sex='+name+']').removeClass('d-none');
                $('.result-step').hide();
                $('.result-end').show();
            }
            if (count < total) {
                $("#audio").attr("src", mp3[count]);
                var audio = document.getElementById("audio");
                $(".desc-aud").html('');
                if(content[count]){
                    $(".desc-aud").html(content[count]);
                }
                audio.play();
                count++;
            }
        });
    }
    // $( document ).ready(function() {
    //     $.ajax({
    //         url: '/tuvi/uploads/a.php?file={{ $file_name }}',
    //         type: "GET",
    //         data: {}, 
    //         success:function(data){
    //             $("#audio").attr("src", '/tuvi/uploads/{{ $file_name }}.mp3');
    //             end(1);
    //         }
    //     });

    // });
    // function end(count) {
    //     $('#audio').on('ended', function() {
    //         if (count == 7) {
    //             $('#popup1').modal('show');
    //             loadmore();
    //         }
    //         count++;
    //     });
    // }
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    // function loadmore() {
    //     $('.formmp3').click( function() {
    //         if (isEmail($('.email').val()) && $('.email').val() !== '' && $('.phone').val() !== '' && $('.tinhtrang').val() != 0 && $('.sex').val() != 0) {
    //             $.ajax({
    //                 url: '{{ route("result.form") }}',
    //                 type: "GET",
    //                 data: {
    //                     day: '{{ request("day") }}',
    //                     month: '{{ request("month") }}',
    //                     year: '{{ request("year") }}',
    //                     name: '{{ request("name") }}',
    //                     tinhtrang: $('.tinhtrang').val(),
    //                     sex: $('.sex').val(),
    //                     email: $('.email').val(),
    //                     phone: $('.phone').val(),
    //                 }, 
    //                 success:function(data){
    //                     var file = data.data;
    //                     $.ajax({
    //                         url: '/tuvi/uploads/a.php?file='+file,
    //                         type: "GET",
    //                         data: {}, 
    //                         success:function(data){
    //                             $('#popup1').modal('hide');
    //                             $('.modal-backdrop').remove();
    //                             // $('#popup1').remove();
    //                             $("#audio").attr("src", '/tuvi/uploads/'+file+'.mp3');
    //                             var audio = document.getElementById("audio");
    //                             audio.play();
    //                         }
    //                     });
    //                 }
    //             });
    //         }else{
    //             alert('Kiểm tra lại thông tin');
    //         }
            
    //     });
    // }
</script>
@endsection
