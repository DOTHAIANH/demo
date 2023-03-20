    <!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
        ul {
            list-style: none outside;
        }
        ol, ul {
            padding-left: 0 !important;
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        strong {
            font-weight: bold;
        }

        h1 {
            font-size: 2.25em;
            margin: 0.67em 0 0.5em;
            line-height: 1.25;
            letter-spacing: -.02em;
        }

        h2 {
            font-size: 1.75em;
            margin: 0.83em 0 0.5em;
            line-height: 1.35;
        }

        em, i {
            font-style: italic;
        }

        ul {
            list-style-type: none;
        }

        .page-tnam1 {
            background:url('/frontend/images/betrai.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        .page-tnu1 {
            background:url('/frontend/images/begai.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        .page-t2 {
            background:url('/frontend/images/chung.png');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        .page-tnam3 {
            background:url('/frontend/images/nam.png');
            background-size:100% 100%;
            background-repeat:no-repeat;
        }

        .page-tnu3 {
            background:url('/frontend/images/nu.png');
            background-size:100% 100%;
            background-repeat:no-repeat;
        }

        .page-1 {
            position: relative;
        }

        .page-1 .author .name {
            text-transform: uppercase;
            font-size: 25px;
            color: #ffde32;
            position: absolute;
            bottom: 56%;
            right: 32.5%;
            letter-spacing: 1.5px;
        }

        .page-1 .author .number {
            text-transform: uppercase;
            font-size: 55px;
            color: #ffde32;
            line-height: 2;
            padding-left: 167px !important;
            margin-left: 167px !important;
            margin-top: 270px !important;
            padding-top: 275px !important;
        }

        .c00000 {
            color: #c00000 !important;
        }

        .ffc000 {
            color: #ffc000 !important;
        } 

        .mg-page .content-page div .c00000 {
            color: #c00000 !important;
            font-weight: bold;
        }

        p, ul, label {
            font-size: 18px;
            line-height: 1.2;
        }

        .title-page-1 {
            text-align: center;
            color: #630;
            text-transform: uppercase;
        }

        .title-page p {
            font-size: 24px;
            text-transform: uppercase;
            text-align: center;
            color: #630;
            border-bottom: 10px solid #ffc000;
            font-weight: 700;
            width: 75%;
            margin: auto;
            line-height: 1.2;
        }

        .page-3 .content-page .img-left {
            width: 40%;
            float: left;
            margin-right: 20px;
        }

        .page-3 .content-page .img-left img {
            width: 100%;
        }

        .size-number {
            font-size: 70px;
        }

     

        .logo-page {
            width: 50%;
            margin: auto;
        }

        .logo-page p {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            border-bottom: 3px solid #c00000;
        }

        .content-page .box-image {
            width: 50%;
            margin: auto;
            padding: 10px 0;
        }

        .content-page .box-image img {
            width: 100%;
        }

        .ending-page {
            text-align: center;
        }

        /*.page-5 {
            background: no-repeat url('data:image/png;base64,{{ base64_encode(file_get_contents(public_path("/frontend/pdf/img/bgpage5.png"))) }}');
            background-size:100% 100%;
        }*/

        .pagetnam1 {
            background:url('/frontend/images/bgpage2.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        .pagetnu1 {
            background:url('/frontend/images/bgpage3.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        .paget2 {
            background:url('/frontend/images/bgpage4.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        .pagetnam3 {
            background:url('/frontend/images/bgpage1.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        .pagetnu3 {
            background:url('/frontend/images/bgpage5.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
        }

        /* .bg-page-1 {
            background:url('data:image/png;base64,{{ base64_encode(file_get_contents(public_path("/frontend/images/zenway.png"))) }}');
            background-repeat:no-repeat;
            background-size:100% 100%;
        } */

        .page-5 .name-user,
        .text-main-col {
            display: flex;
            text-transform: uppercase;
            font-size: 20px;
        }

        .name-user,.text,.text-main-col {
            color: #630;
        }

        .text-main-col {
            border-bottom: 3px solid #630;
        }

        .number {
            color: #c00000 !important;
        }


        .col-table .text {
            font-size: 20px;
            padding-left: 10px;
        }

        .col-table .number {
            font-size: 32px;
            padding-right: 10px;
        }
        .col-table ul li {
            display: flex;
            border-bottom: 3px solid #ffffff;
        }

        body {
            font-family: 'Philosopher';
        }

        .cot-moc li {
            padding: 0 20px;
            position: relative;
            text-align: center;
        }

        .cot-moc li {
            display: block !important;
        }

        .col-lg-8 {
            width: 66.67%;
            margin: auto;
        }

        .col-lg-12 {
            width: 100%;
        }

        .flex {
            display: flex;
        }

        .col-lg-6 {
            width: 50%;
            padding: 0 15px;
        }

        .column {
            float: left;
            width: 50%;
            height: 250px;
        }

        .column2 {
            float: left;
            width: 50%;
            height: 50px;
        }

        .column3 {
            float: left;
            width: 25%;
            height: 150px;
        }

        .row:after {
            clear: both;
        }
        
        .page-break {
            page-break-after: always;
        }

        .old {
            position: relative;
        }

        .old span {
            position: relative;
            display: block;
            text-align: center;
            left: 0;
            top: -20px;
            margin-top: -25px;
        }
        

        /* css biểu đồ*/


        /* mũi tên hướng lên trên */
        .to-top-all {
            position: absolute;
            top: 70px;
        }

        .to-top-1 {
            left: 130px;
        }

        .to-top-2 {
            left: 180px;
        }

        .to-top-3 {
            left: 230px;
        }

        /* mũi tên hướng sang phải */
        .to-right-all {
            position: absolute;
            left: 80px;
        }

        .to-right-1 {
            top: 105px;
        }

        .to-right-2 {
            top: 155px;
        }

        .to-right-3 {
            top: 205px;
        }

        /* mũi tên chéo hướng trái */
        .to-top-left {
            position: absolute;
            top: 86px;
            left: 111px;
        }

        /* mũi tên chéo hướng phải */
        .to-top-right {
            position:absolute;
            top: 86px;
            left: 111px;
        }

        .table-birthday,.table-name {
            margin-left: 10px;
        }

        .table-birthday .inner-border {
            margin-left:20px;
            position: relative;
        }

        .table-name .inner-border {
            margin-left:20px;
            position: relative;
        }

        .table-birthday .inner-border .local-number,
        .table-name .inner-border .local-number {
            margin: 50px;
            color: #ffffff;
        }

        /* css số 1 */
        .table-birthday .inner-border .inner-border-tr .local-n-1,
        .table-name .inner-border .inner-border-tr .local-n-1 {
            padding-top: 25px;
            padding-left: 101px;
        }

        /* css số 2 */
        .table-birthday .inner-border .inner-border-tr .local-n-2,
        .table-name .inner-border .inner-border-tr .local-n-2 {
            padding-top: 25px;
            padding-left: 101px;
        }

        /* css số 3 */
        .table-birthday .inner-border .inner-border-tr .local-n-3 {
            padding-top: 44px;
            padding-left: 101px;
        }

        .table-name .inner-border .inner-border-tr .local-n-3 {
            padding-top: 24px;
            padding-left: 101px;
        }

        /* css số 4 */
        .table-name .inner-border .inner-border-tr .local-n-4 {
            padding-top: 25px;
            padding-left: 23px;
        }

        .table-birthday .inner-border .inner-border-tr .local-n-4 {
            padding-top: 25px;
            padding-left: 23px;
        }


        /* css số 5 */
        .table-name .inner-border .inner-border-tr .local-n-5 {
            padding-top: 25px;
            padding-left: 23px;
        }

        .table-birthday .inner-border .inner-border-tr .local-n-5 {
            padding-top: 25px;
            padding-left: 23px;
        }

        /* css số 6 */
        .table-name .inner-border .inner-border-tr .local-n-6 {
            padding-top: 24px;
            padding-left: 23px;
        }

        .table-birthday .inner-border .inner-border-tr .local-n-6 {
            padding-top: 24px;
            padding-left: 23px;
        }

        /* css số 7 */
        .table-name .inner-border .inner-border-tr .local-n-7 {
            padding-top: 25px;
            padding-left: 23px;
        }

        .table-birthday .inner-border .inner-border-tr .local-n-7 {
            padding-top: 25px;
            padding-left: 23px;
        }

        /* css số 8 */
        .table-name .inner-border .inner-border-tr .local-n-8 {
            padding-top: 25px;
            padding-left: 23px;
        }

        .table-birthday .inner-border .inner-border-tr .local-n-8 {
            padding-top: 25px;
            padding-left: 23px;
        }

        /* css số 9 */
        .table-name .inner-border .inner-border-tr .local-n-9 {
            padding-top: 24px;
            padding-left: 23px;
        }

        .table-birthday .inner-border .inner-border-tr .local-n-9 {
            padding-top: 24px;
            padding-left: 23px;
        }

    </style>
</head>
<body>
    @if($data['age'] < 13)
        @if($data['sex'] == 1)
            <div class="page-1 page-tnu1 mg-page">
        @else
            <div class="page-1 page-tnam1 mg-page">
        @endif
    @elseif($data['age'] > 12 && $data['age'] < 30)
    <div class="page-1 page-t2 mg-page">
    @elseif($data['age'] > 29)
        @if($data['sex'] == 1)
            <div class="page-1 page-tnu3 mg-page">
        @else
            <div class="page-1 page-tnam3 mg-page">
        @endif
    @endif 
        <div class="author" style="height: 920px;"><p class="name">{!! $data_name !!}</p><p class="number">{{ $data['consoduongdoi'] }}</p></div>
        
    </div>

    <div class="page-break"></div>
    <div class="page-34 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway</p>
                    </div>
                    <div class="title-page-1">
                        <p>LỜI MỞ ĐẦU</p>
                    </div>
                    <div class="content-page">
                        <p>Chào mừng bạn đến với cuốn sách số học của bạn được zenway thiết kế riêng dựa trên những thông tin mà bạn đã cung cập về ngày sinh và họ tên đầy đủ của bạn. Tại sao bản đồ số học zenway này không chỉ quan trọng với zenway mà zenway tin rằng cũng sẽ quan trọng và hữu ích đối với bạn </p>
                        <p>Môt cách tự nhiên khi chúng ta sinh ra đời thì chúng ta lớn lên, sẽ trưởng thành và chết theo một quy luật tự nhiên, dù tự nhiên nhưng không phải ngẫu nhiên mà chúng ta lại sinh ra ở ngày đó, giờ đó, trong gia đình đó, tất cả đều có nguyên nhân, khi tất cả duyên đầy đủ thì sẽ cho ra 1 kết quả là chúng ta được sinh ra dưới thời gian và được đặt cho cái tên khai sinh mà chúng ta đang mang hiện tại </p>
                        <p>Vậy chúng ta khi đến với thế giới hiện tại để mang một thông điệp gì, chúng ta có sứ mệnh gì được giao phó hay những bài học nào là quan trọng nhất cần được chúng ta hoàn thành? zenway chắc hẳn bạn cũng như zenway chúng ta đôi khi cũng có những phút lặng lại và tự đặt cho mình câu hỏi về mình là ai ? ý nghĩa mình tới với cuộc sống này là gì? </p>
                        <p>Hiện tại trên thế giới có khá nhiều công cụ để giúp chúng ta bắt đầu tìm hiểu về bản thân mình, ở phương đông có tử vi, có nhân tướng học, ở phương tây thì có chiêm tinh, có sinh trắc vân tay, trong cùng khoảng thời gian 2500 năm trước thì nhà toán học, nhà triết học nổi tiếng pythagoras đã cùng nghiên cứu và cho ra đời học thuyết mang tên ông, học thuyết nghiên cứu về ảnh hưởng của các tần số của những con số, chỉ số mà một người khi sinh ra ở trong ngày sinh, họ tên có ảnh hưởng đến tiềm năng cũng như các chỉ số liên quan đến các sự kiện trong cuộc sống của người đó </p>
                        <p>Sau thời gian dài học thuyết được rất nhiều các nhà khoa học, tiến sĩ cũng kế thừa và phát triển để có thể hoàn thiện được bộ chỉ số đầy đủ hơn như hiện tại, Zenway và bạn chúng ta may mắn đến thời điểm hiện tại đã có thể tự tra cứu và đọc hiểu những cái nhìn từ tổng quan đến chi tiết các chỉ số ảnh hưởng đến chúng ta</p>
                        <p>Bạn cũng sẽ tự nghiên cứu , rồi kết hợp, đối chiếu đến các chỉ số mà zenway cung cấp để tự phân tích và đưa ra các lựa chọn tốt nhất cho mình, bởi suy cho cùng thì zenway cũng chỉ có thể cung cấp đến bạn bộ chỉ báo, là công cụ để bạn có thể khai mở để thấu hiểu bản thân mình ở mức độ đọc hiểu, còn lại để có thể chuyển hoá bản thân, từ phiên bản có thể đi từ chưa đúng với năng lượng với sứ mệnh mình có đến khi đạt được thành tựu cao, đạt được đúng với năng lượng con số mà bạn sở hữu là cả một hành trình dài, ở đó bạn không chỉ biết, hiểu ở lý thuyết mà cần có sự thực hành, có sự quyết tâm và sự lựa chọn đúng đắn </p>
                        <p>Bởi tất cả các bộ môn dự báo hiện có cũng chỉ là công cụ còn nền tảng mọi sự việc trong cuộc sống đều là nhân duyên, nhân quả, khi có đủ nhân, đủ duyên thì sẽ trổ quả, đầu tiên hãy trở thành một “ NH N “ tốt, đến khi duyên chỉ cần một thời điẻm vừa đủ là sẽ cho ra “ Quả" là bạn một phiên bản nâng cấp hoàn thiện, thành công và hạnh phúc hơn với chính mình </p>
                        <p>Còn bây giờ hãy thả lỏng và cùng đi qua bộ chỉ số của bạn xem bộ chỉ số nói lên những điều gì về bạn nhé !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    @if($data['age'] < 13)
        @if($data['sex'] == 1)
            <div class="page-5 pagetnu1 mg-page">
        @else
            <div class="page-5 pagetnam1 mg-page">
        @endif
    @elseif($data['age'] > 12 && $data['age'] < 30)
    <div class="page-5 paget2 mg-page">
    @elseif($data['age'] > 29)
        @if($data['sex'] == 1)
            <div class="page-5 pagetnu3 mg-page">
        @else
            <div class="page-5 pagetnam3 mg-page">
        @endif
    @endif 
        <div class="title-page">
            <p style="border: none;color: #fff;">Tổng quan<br> Báo cáo số học</p>
        </div>
        <div class="row" style="text-align: center;">
            <div class="column2">
                <p style="color: #fff;">{!! $data_name !!}</p>
            </div>
            <div class="column2">
                <p style="color: #fff;">{{ $data['day'] }}/{{ $data['month'] }}/{{ $data['year'] }}</p>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="column3">
                <label style="color: #fff;">{{ $data['thachthuc1'] }}</label>
                <div class="old">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/old.png'))) }}" alt="">
                    <span style="color: #fff;">0 -> 29 tuổi</span>
                </div>
                <label style="color: #fff;">{{ $data['dinhcao1'] }}</label>
            </div>
            <div class="column3">
                <label style="color: #fff;">{{ $data['thachthuc2'] }}</label>
                <div class="old">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/old.png'))) }}" alt="">
                    <span style="color: #fff;">30 -> 38 tuổi</span>
                </div>
                <label style="color: #fff;">{{ $data['dinhcao2'] }}</label>
            </div>
            <div class="column3">
                <label style="color: #fff;">{{ $data['thachthuc3'] }}</label>
                <div class="old">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/old.png'))) }}" alt="">
                    <span style="color: #fff;">39 -> 48 tuổi</span>
                </div>
                <label style="color: #fff;">{{ $data['dinhcao3'] }}</label>
            </div>
            <div class="column3">
                <label style="color: #fff;">{{ $data['thachthuc4'] }}</label>
                <div class="old">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/old.png'))) }}" alt="">
                    <span style="color: #fff;">49 -> 56 tuổi</span>
                </div>
                <label style="color: #fff;">{{ $data['dinhcao4'] }}</label>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="column">
                <p style="color: #fff;" class="text-main-col">
                    Chân dung cá nhân
                </p>
                <table>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Nội tâm</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consolinhhon'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Nội cảm</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['chisonoicam'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Tương tác</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consotinhcach'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Thái độ</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consosolap'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Số lặp</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consosolap'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Kết nối nội tâm và Tương tác</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['ketnoinoitamvatinhcach'] }}</td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <p class="text-main-col" style="color: #fff;">
                    Chân dung sự nghiệp
                </p>
                <table>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Đường đời</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consoduongdoi'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Sứ mệnh</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['chisosumenh'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Ngày sinh</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consongaysinh'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Trưởng thành</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consotruongthanh'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Kết nối đường đời và Sứ mệnh</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['ketnoiduongdoivasumenh'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="text-align: center;height: 430px;">
            <div class="column">
                <p class="text-main-col" style="color: #fff;">
                    Phát triển bản thân
                </p>
                <table>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Bổ sung</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consobosung'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Cân bằng</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ chisocanbang(str_slug(request('name'),' ', 'en')) }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Nợ nghiệp</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consononghiep'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Mức độ biểu hiện</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['chisomucdobieuhien'] }}</td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <p class="text-main-col" style="color: #fff;">
                    Cột mốc quan trọng
                </p>
                <table>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Năm cá nhân</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['consonamcanhan'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Tháng cá nhân</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['thangcanhan'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Đỉnh cao</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['dinhcao1'] }}, {{ $data['dinhcao2'] }}, {{ $data['dinhcao3'] }}, {{ $data['dinhcao4'] }}</td>
                    </tr>
                    <tr>
                        <td class="text" style="padding-left: 10px;color: #fff;">Thách thức chặng</td>
                        <td class="number" style="padding-left: 40px;width: 100px;color: #fff !important;">{{ $data['thachthuc1'] }}, {{ $data['thachthuc2'] }}, {{ $data['thachthuc3'] }}, {{ $data['thachthuc4'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="text-align: center;height: 430px;"> 
            <div class="column table-birthday">
                <p class="text-main-col" style="color: #fff;">
                    Biểu đồ ngày sinh
                </p>
                <table class="inner-border">
                    <tr class="inner-border-tr">
                        <td id="td3" class="local-number local-n-3 cell animated pulse infinite">{{ str_repeat("3",getnumber($data['full_number'],3)) }}</td>
                        <td id="td6" class="local-number local-n-6 cell animated pulse infinite">{{ str_repeat("6",getnumber($data['full_number'],6)) }}</td>
                        <td id="td9" class="local-number local-n-9 cell animated pulse infinite">{{ str_repeat("9",getnumber($data['full_number'],9)) }}</td>
                    </tr>
                    <tr class="inner-border-tr">
                        <td id="td2" class="local-number local-n-2 cell animated pulse infinite">{{ str_repeat("2",getnumber($data['full_number'],2)) }}</td>
                        <td id="td5" class="local-number local-n-5 cell animated pulse infinite">{{ str_repeat("5",getnumber($data['full_number'],5)) }}</td>
                        <td id="td8" class="local-number local-n-8 cell animated pulse infinite">{{ str_repeat("8",getnumber($data['full_number'],8)) }}</td>
                    </tr>
                    <tr class="inner-border-tr">
                        <td id="td1" class="local-number local-n-1 cell animated pulse infinite">{{ str_repeat("1",getnumber($data['full_number'],1)) }}</td>
                        <td id="td4" class="local-number local-n-4 cell animated pulse infinite">{{ str_repeat("4",getnumber($data['full_number'],4)) }}</td>
                        <td id="td7" class="local-number local-n-7 cell animated pulse infinite">{{ str_repeat("7",getnumber($data['full_number'],7)) }}</td>
                    </tr>
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr1.png'))) }}" class="to-top-right arrow animated pulse infinite {{$data['stt_ns_th1'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr2.png'))) }}" class="to-right-all to-right-1 arrow animated pulse infinite {{$data['stt_ns_th2'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr2.png'))) }}" class="to-right-all to-right-2 arrow animated pulse infinite {{$data['stt_ns_th3'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr2.png'))) }}" class="to-right-all to-right-3 arrow animated pulse infinite {{$data['stt_ns_th4'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr3.png'))) }}" class="to-top-all to-top-1 arrow animated pulse infinite {{$data['stt_ns_th5'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr3.png'))) }}" class="to-top-all to-top-2 arrow animated pulse infinite {{$data['stt_ns_th6'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr3.png'))) }}" class="to-top-all to-top-3 arrow animated pulse infinite {{$data['stt_ns_th7'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr4.png'))) }}" class="to-top-left arrow animated pulse infinite {{$data['stt_ns_th8'] == 1 ? '' : 'd-none'}}" />
                </table>
            </div>
            <div class="column table-name">
                <p class="text-main-col" style="color: #fff;">
                    Biểu đồ tên
                </p>
                <table class="inner-border">
                    <tr class="inner-border-tr">
                        <td id="tdt3" class="local-number local-n-3 cell animated pulse infinite">{{ str_repeat("3",getnumberName($data['full_name'],3)) }}</td>
                        <td id="tdt6" class="local-number local-n-6 cell animated pulse infinite">{{ str_repeat("6",getnumberName($data['full_name'],6)) }}</td>
                        <td id="tdt9" class="local-number local-n-9 cell animated pulse infinite">{{ str_repeat("9",getnumberName($data['full_name'],9)) }}</td>
                    </tr>
                    <tr class="inner-border-tr">
                        <td id="tdt2" class="local-number local-n-2 cell animated pulse infinite">{{ str_repeat("2",getnumberName($data['full_name'],2)) }}</td>
                        <td id="tdt5" class="local-number local-n-5 cell animated pulse infinite">{{ str_repeat("5",getnumberName($data['full_name'],5)) }}</td>
                        <td id="tdt8" class="local-number local-n-8 cell animated pulse infinite">{{ str_repeat("8",getnumberName($data['full_name'],8)) }}</td>
                    </tr>
                    <tr class="inner-border-tr">
                        <td id="tdt1" class="local-number local-n-1 cell animated pulse infinite">{{ str_repeat("1",getnumberName($data['full_name'],1)) }}</td>
                        <td id="tdt4" class="local-number local-n-4 cell animated pulse infinite">{{ str_repeat("4",getnumberName($data['full_name'],4)) }}</td>
                        <td id="tdt7" class="local-number local-n-7 cell animated pulse infinite">{{ str_repeat("7",getnumberName($data['full_name'],7)) }}</td>
                    </tr>
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr1.png'))) }}" class="to-top-right arrow animated pulse infinite {{$data['stt_name_th1'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr2.png'))) }}" class="to-right-all to-right-1 arrow animated pulse infinite {{$data['stt_name_th2'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr2.png'))) }}" class="to-right-all to-right-2 arrow animated pulse infinite {{$data['stt_name_th3'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr2.png'))) }}" class="to-right-all to-right-3 arrow animated pulse infinite {{$data['stt_name_th4'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr3.png'))) }}" class="to-top-all to-top-1 arrow animated pulse infinite {{$data['stt_name_th5'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr3.png'))) }}" class="to-top-all to-top-2 arrow animated pulse infinite {{$data['stt_name_th6'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr3.png'))) }}" class="to-top-all to-top-3 arrow animated pulse infinite {{$data['stt_name_th7'] == 1 ? '' : 'd-none'}}" />
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/arr4.png'))) }}" class="to-top-left arrow animated pulse infinite {{$data['stt_name_th8'] == 1 ? '' : 'd-none'}}" />
                </table>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-6 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung sự ngiệp</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số đường đời<br> <span class="c00000 size-number">{{ $data['consoduongdoi'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Con số đường đời là con số tiết lộ nơi bạn sẽ tìm thấy thành công, sức mạnh và năng lượng của mình. tiết lộ bài học lớn nhất trong cuộc sống và là điều mà bạn cố gắng để đạt được sự tinh thông, tiết lộ những hướng sống viên mãn nhất của bạn và những bài học chính mà bạn đến với thế giới này để học, tiết lộ những cơ hội và thách thức dành cho bạn và những đặc điểm tính cách độc đáo của bạn sẽ trợ giúp bạn trên hành trình của mình 
                                </li>
                                <li class="box-image">
                                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/cschudao.png'))) }}" alt="">
                                </li>
                            </ul>
                            {!! $data['duongdoi'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-7 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung sự ngiệp</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số sứ mệnh<br> <span class="c00000 size-number">{{ $data['chisosumenh'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    con số vận mệnh tiết lộ những tài năng và khả năng bẩm sinh của bạn mà nhiều khi bạn còn không nghĩ đến hay biết mình đã có, và những gì bạn muốn đạt trong cuộc đời này, cũng thể hiện thành tựu bạn đã đạt được trong kiếp trước và hình mẫu năng lượng bạn đang thiết lập trong kiếp này. mỗi chữ cái trong họ tên bạn là một năng lượng, 1 bức tranh nhỏ trong toàn bộ họ tên thể hiện được bạn là ai và bạn muốn trở thành ai, và điều mà bạn cần cống hiến cho thế giới này
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sosumenh.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['sumenh'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-26 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung sự nghiệp</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số kết nối đường đời và sứ mệnh<br> <span class="c00000 size-number">{{ $data['ketnoiduongdoivasumenh'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <ul>
                            <li>
                                Chỉ số kết nối đường đời và mệnh là cách để phát huy nhất tiềm năng cũng như cách để có sự hoà hợp với 2 con số quan trọng nhất trong biểu đồ số học theo học thuyết pythagoras
                                Sứ mệnh là mục đích là nhiệm vụ mà vũ trụ giao phó tới bạn còn cuộc đời là con đường chính bạn cần phải đi

                            </li>
                            <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/duongdoisumenh.png'))) }}" alt=""></li>
                        </ul>
                        {!! $data['ketnoiduongdoivasumenh'] !!}   
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-break"></div>
    <div class="page-21 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung sự nghiệp</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số trưởng thành<br> <span class="c00000 size-number">{{ $data['consotruongthanh'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Đây là con số bạn chỉ có thể cảm nhận khi bắt đầu bước vào chặng 4 của đỉnh cao cuộc đời, tầm từ 40 tuổi trở lên bạn sẽ bắt đầu cảm nhận nhưng sau năm 50 tuổi thì năng lượng của con số thành tựu mới ảnh hưởng nhiều tới bạn. con số thành tựu sẽ tiết lộ nơi bạn tìm thấy con người thật của mình và cuối cùng, bạn có thể thoải mái là chính mình
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sotruongthanh.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['truongthanh'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-20 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung sự nghiệp</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số ngày sinh<br> <span class="c00000 size-number">{{ $data['consongaysinh'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Chúng ta đến với thế giới này là những linh hồn và hoàn toàn không có ký ức về kiếp trước của mình .sự dẫn dắt của tâm linh giúp chúng ta có ký vào 1 thoả thuận tạm gọi là “ hợp đồng linh hồn “ ở đây chúng ta được soạn thảo cẩn thận đẻ mang đến những bài học những trải nghiệm, những khao khát để giúp cho linh hồn chúng ta tiến hoá tối đa trong thời gian chúng ta có mặt ở kiếp này , chúng ta được tự do ý chí, tự do lựa chọn cá nhân, lựa chọn phát huy hết tiềm năng của bản thân mình hay lựa chọn an toàn không dám mạo hiểm để lỡ mất sứ mệnh mà mình được giao phó 
                                    Con số ngày sinh tiết lộ tới bạn một khả năng hoặc một tài năng đặc biệt của bạn sẽ ảnh hưởng lớn đến cuộc sống của bạn
                                    Năng lượng con số ngày sinh sẽ hỗ trợ cho năng lượng con số sứ mệnh trên hành trình hoàn thành sứ mệnh của bạn 
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/songaysinh.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['ngaysinh'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-8 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung cá nhân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số nội tâm<br> <span class="c00000 size-number">{{ $data['consolinhhon'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Con số thể hiển các quyết định cho trái tim đưa ra, do trái tim mong muốn. tiết lộ phần con người riêng tư nhất chỉ những người thân thiết nhất của bạn thấy được. Nơi chứa đựng ước mơ, khao khát, động lực thực sự bên trong, điều khiến bạn hạnh phúc nhất. Con số cũng tiết lộ về độ nhạy bén, sức mạnh về mặt tinh thần hay tâm linh
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sonoitam.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['sumenh'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-9 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung cá nhân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số nội cảm<br> <span class="c00000 size-number">{{ $data['chisonoicam'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Số nội cảm là những gì ẩn chứa bên trong một con người. Nếu nhìn qua tờ giấy khai sinh của một ai đó, bạn sẽ thấy ngày sinh của họ, biết được tên của họ, và điều này thật thú vị, nhưng nếu bạn cảm thấy còn thiếu thiếu điều gì, thì bạn sẽ thấy điều [ẩn chứa] đó ở số Nội cảm. Đó có thể sẽ là điều ẩn dấu bên trong. ở đây khi khám phá về số nội cảm bạn sẽ hiểu được những tính cách tuyệt vời hay nội trổi nhất ở bên trong của bạn 
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sonoicam.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['noicam'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-27 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung cá nhân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số kết nối nội tâm và tương tác<br> <span class="c00000 size-number">{{ $data['ketnoinoitamvatinhcach'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <ul>
                            <li>
                                Số kết nối nội tâm và tính cách là con số chỉ ra cách để bạn có thể tìm thấy sự hoà hợp giữa nội tâm những điều mong muốn của trái tim bạn với thế giới bên ngoài để tạo thành một chỉnh thể hài hoà và hoàn hảo hơn
                            </li>
                            <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/noitamtuongtac.png'))) }}" alt=""></li>
                        </ul>
                        {!! $data['ketnoinoitamvatuongtac'] !!}   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-13 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung cá nhân</p>
                    </div>
                    <div class="title-page-1">
                        <p>SỐ TƯƠNG TÁC<br> <span class="c00000 size-number">{{ $data['consotinhcach'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Con số quyết định ấn tượng đầu tiên của bạn đối với người khác. giúp bạn hiểu rõ cách người khác nhìn nhận về bạn, tiết lộ cách mà bạn chọn thể hiện ra bên ngoài thông qua cách ứng xử, hành vi và phản ứng của mình. con số tính cách là người gác cổng cho bản chất thật của bạn
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sotuongtac.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['tinhcach'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-14 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung cá nhân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số thái độ<br> <span class="c00000 size-number">{{ $data['consothaido'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Con số này cho biết cách bạn hiện diện trên thế giới. là cách bạn tiếp cận và phản ứng lại một cách tự nhiên các tình huống xảy ra trong cuộc sống, con số thể hiển việc người khác thấu hiểu bạn bằng trực giác chứ không phải bằng suy nghĩ
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sothaido.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['thaido'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-15 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Chân dung cá nhân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số lặp<br> <span class="c00000 size-number">{{ $data['consosolap'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Con số lặp lại là những con số kết quả có mặt trong bộ những chỉ số cốt lõi được lặp lại từ 2 lần trở lên, khi đó năng lượng của những con số lặp lại thể hiện sự tăng cường mức độ ảnh hưởng tới bạn
                                    Những cơ hội và thách thức mà con số lặp mang lại sẽ mạnh mẽ hơn, khi bạn nhận biết và hiểu về nó, bạn sẽ có được gợi ý về cách đón nhận, xử lý những thách thức cũng như phát huy tiềm năng lớn của con số đó mang lại cho bạn 
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/solap.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['solap'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-16 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Phát triển bản thân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Bổ sung<br> <span class="c00000 size-number">{{ $data['consobosung'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <p>
                                Ý nghĩa con số bổ sung - hay còn tên gọi khác là bài học nghiệp
                                Tiết lộ những kiến thức, kỹ năng mà bẩm sinh ngay khi bạn sinh ra bạn bị thiếu sót và cần
                                được bổ sung trong quá trình phát triển ở kiếp sống hiện tại
                            </p>
                            <p class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sobosung.png'))) }}" alt=""></p>
                            {!! $data['bosung'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-18 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Phát triển bản thân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số cân bằng<br> <span class="c00000 size-number">{{ $data['consocanbang'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Con số cân bằng: tiết lộ cách có thể giúp bạn vượt qua những chông chênh, những tình huống khó khăn mang tính bước ngoặt trong cuộc đời theo gợi ý của học thuyết pythagoras
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/socanbang.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['canbang'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-19 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Phát triển bản thân</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số nợ nghiệp<br> <span class="c00000 size-number">{{ $data['consononghiep'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Ai trong chúng ta cũng có những tiền kiếp, và trong quá khứ có những hành động, lời nói của chúng ta dù vô tình hay cố ý tạo những nghiệp nổi trội mà trong kiếp này chúng ta cần có những bài học để chúng ta hoàn thành nợ nghiệp với ngân hàng vũ trụ ở trong kiếp sống này
                                    Con số nợ nghiệp mang 2 ý nghĩa cũng như góc nhìn, nếu hiểu về các con số nợ nghiệp bạn sẽ học cách chấp nhận những điểm thiếu đó của mình và chỉ cần bạn vượt qua được những bài học, thử thách do con số nợ nghiệp mang lại thì bạn sẽ trở nên mạnh mẽ, hoàn thiện hơn, hãy đón nhận với một góc nhìn tích cực từ đó bạn có thể biến những con số nợ nghiệp trở thành bàn đạp để bạn thành công và hạnh phúc hơn tại kiếp sống hiện tại
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sononghiep.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['nonghiep'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-22 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Cột mốc quan trọng</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số tháng cá nhân hiện tại  <?= date('m/Y'); ?><br> <span class="c00000 size-number">{{ $data['thangcanhan'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Nếu chỉ số năm cá nhân tiết lộ những dự báo về cả năm, thì chỉ số tháng cá nhân cho biết những dự báo đối với từng tháng trong 12 tháng của năm đó. Mặc dù chỉ số năm cá nhân có ảnh hưởng lớn hơn đến cuộc sống của bạn trong năm đó, nhưng bạn cũng cần biết chỉ số tháng cá nhân của từng tháng để hiểu rõ hơn về những hoàn cảnh và cơ hội ở xung quanh mình.
                                    Chìa khóa để có cái nhìn sâu sắc nhất về một tháng cụ thể là kết hợp số năm cá nhân và số tháng cá nhân năng lượng cùng nhau và sử dụng để đánh giá kết hợp này có ý nghĩa gì.
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sothangcanhan.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['contentthangcanhan'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-22 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                  
                    <div class="title-page-1">
                        <p>Số tháng cá nhân <?= date('m') == 12 ? '1/'.date('Y') : date('m/Y',strtotime('first day of +1 month')); ?><br> <span class="c00000 size-number">{{ $data['thangcanhantiep'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            {!! $data['contentthangcanhantiep'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-24 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Cột mốc quan trọng</p>
                    </div>
                    <div class="title-page-1">
                        <p>Số năm cá nhân <?= date('Y'); ?><br> <span class="c00000 size-number">{{ $data['consonamcanhan'] }}</span></p>
                    </div>
                    <div class="content-page">
                        <div>
                            <ul>
                                <li>
                                    Đây là phần để bạn ứng dụng bản đồ vào thực tế cho việc lên kế hoạch cho cuộc sống của mình. mỗi năm, mỗi tháng đều mang một năng lượng khác nhau dành cho bạn, dòng chảy năng lượng tự nhiên này nếu bạn thuận theo khi áp dụng vào cuộc sống sẽ tiếp thêm hiệu quả cho bạn 
                                </li>
                                <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/sonamcanhan.png'))) }}" alt=""></li>
                            </ul>
                            {!! $data['namcanhan'] !!}   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-break"></div>
    <div class="page-28 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Cột mốc quan trọng</p>
                    </div>
                    <div class="title-page-1">
                        <p>Thách thức</p>
                    </div>
                    <div class="content-page">
                        <ul>
                            <li>
                                Nếu như con số đường đời tiết lộ bài học chính cho cả cuộc đời thì con số đỉnh cao là con số bổ trợ cho con số đường đời nhằm tiết lộ bài học chính cho mỗi một giai đoạn nhất định của bạn, tiết lộ tới bạn hướng đi mà vũ trụ muốn gửi năng lượng nhiều nhất tới bạn trong 1 giai đoạn cụ thể , đây có thể coi là một gợi ý dành để bạn tham khảo và lựa chọn,
                            </li>
                            <li class="box-image"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('frontend/pdf/img/duongdoithachthuc.png'))) }}" alt=""></li>
                        </ul>
                    </div>
                    <div class="title-page-2">
                        <p>Đỉnh cao thứ nhất <span class="ffc000">{{ $data['dinhcao1'] }} , 0-29 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['condinhcao1'] !!}   
                    </div>
                    <div class="title-page-2">
                        <p>Đỉnh cao thứ hai <span class="ffc000">{{ $data['dinhcao2'] }} , 30-38 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['condinhcao2'] !!}   
                    </div>

                    <div class="title-page-2">
                        <p>Đỉnh cao thứ ba <span class="ffc000">{{ $data['dinhcao3'] }} , 39-48 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['condinhcao3'] !!}   
                    </div>

                    <div class="title-page-2">
                        <p>Đỉnh cao thứ tư <span class="ffc000">{{ $data['dinhcao4'] }} , 49-56 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['condinhcao4'] !!}   
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-29 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway - Cột mốc quan trọng</p>
                    </div>
                    <div class="title-page-2">
                        <p>Thách thức chặng <span class="ffc000">4</span></p>
                    </div>
                    <div class="content-page">
                        <ul>
                            <li>
                                Con số thách thức là chỉ số đi song hành với con số đỉnh cao cho từng giai đoạn, với con số đỉnh cao chỉ ra năng lượng vũ trự gửi tới bạn bài học hay trường năng lượng lớn nhất trong giai đoạn đó thì chỉ số thách thức đại diện cho thử thách lớn nhất, bạn cần đối mặt và vượt qua, khi bạn vượt qua được thử thách này cũng là bàn đạp để có thể giúp bạn đạt tới đỉnh cao chặng trong giai đoạn này 
                            </li>
                        </ul>
                    </div>
                    <div class="title-page-2">
                        <p>Thách thức thứ nhất <span class="ffc000">{{ $data['thachthuc1'] }} , 0-29 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['thachthucchang1'] !!}   
                    </div>
                    <div class="title-page-2">
                        <p>Thách thức thứ hai <span class="ffc000">{{ $data['thachthuc2'] }} , 30-38 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['thachthucchang2'] !!}   
                    </div>

                    <div class="title-page-2">
                        <p>Thách thức thứ ba <span class="ffc000">{{ $data['thachthuc3'] }} , 39-48 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['thachthucchang3'] !!}   
                    </div>

                    <div class="title-page-2">
                        <p>Thách thức thứ tư <span class="ffc000">{{ $data['thachthuc4'] }} , 49-56 tuổi</span></p>
                    </div>
                    <div class="content-page">
                        {!! $data['thachthucchang4'] !!}   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-34 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway</p>
                    </div>
                    <div class="content-page">
                        <p>Bạn đã cùng với zenway cùng nhau khám phá ra bộ 26 chỉ số, là 26 chỉ báo, 26 gợi ý để bạn có thể tham khảo làm dữ liệu để phân tích và lựa chọn cho các khía cạnh, các quyết định quan trọng và cũng như có thể sử dụng để biết và thấu hiểu cách bạn tạo dựng các mối quan hệ xung quanh</p>
                        <p>Từ các dữ liệu và bộ chỉ số đó theo phương pháp thần số học có nhiều cách khác nhau để có thể sắp xếp và kết hợp, có trường phái thì dựa vào dữ liệu ngày sinh là điểm khởi đầu để bắt đầu hiểu về bản thân, có trường phái thì dựa vào tên gọi để bắt đầu, ở zenway thì cũng tham khảo và đưa ra cho bạn một hướng để bạn có thể dựa vào để có thể tự nghiên cứu và luận ra cho mình những góc nhìn và quyết định mà bạn cảm thấy an lành nhất bởi suy cho cùng mọi lời khuyên của người khác, đều chỉ nên coi đó là dữ liệu để tham khảo chứ như lời đức phật là đừng tin bất cứ điều gì nếu như bạn chưa thực sự là người kiểm chứng, hay coi các dữ liệu là lời khuyên hữu ích còn khi bạn quyết định vẫn phải dựa 100% vào chính mình</p>
                        <p>Nào hãy xem gợi ý luận giải theo các bước sau bạn nhé</p>
                        <p><strong>Bước 1</strong>: Tìm hiểu các thói quen của bản thân được giữ lại từ tiền kiếp, đây là các thói quen thâm căn cố đế, các thói quen này được tiết lệ qua các con số nào?
                        con số nội cảm, con số cân bằng, con số bổ sung ,con số nợ nghiệp</p>
                        <p>Khi chúng ta nhận diện được những thói quen xấu hay những nỗi sợ hãi đó thì liệu chúng ta có can đảm bước tiếp hay sẽ bị những thói quen đó vùi dập, tất cả tùy thuộc vào sự lựa chọn của bạn trong kiếp này, có mạnh dạn trải nghiệp sự thú vị mà kiếp này mang lại, kể cả trải nghiệm sự lo lắng và sợ hãi? </p>
                        <p><strong> Bước 2</strong>: Đọc con số đường đời , vì là 1 chu kỳ suốt đời nên con số đường đời có ý nghĩa rất lớn, bạn cần đảm bảo một tinh thần lạc quan khi đọc hiểu về con số này, sau đó trả lời câu hỏi: khi nhìn con số đường đời hãy nghĩ về ý nghĩa của nó đối với bạn ? </p>
                        <p><strong> Bước 3</strong>: Đọc các chỉ số thách thức và đỉnh cao, quét qua các chu kỳ trong quá khứ, dành nhiều thời gian cho các chu kỳ hiện tại. để ý tính tương thích các con số đó rồi nhìn chu kỳ tương lai, đồng thời hãy xem xét mức độ tương thích các chỉ số đường đời, thách thức, đỉnh cao với các thói quen tiền kiếp mà đã đọc ở bước 1 </p>
                        <p><strong> Bước 4</strong>: Tiếp theo hãy đến với chỉ số linh hồn, tính cách và vận mênh. xem xét mức độ tương thích với chỉ số đường đời </p>
                        <p><strong> Bước 5</strong>: Xem xét mức độ tương thích thói quen tiền kiếp ở bước 1 với các chỉ số linh hồn, tính cách, vận mệnh. tìm kiếm khu vực tương thích </p>
                        <p><strong> Bước 6</strong>: Đọc các chỉ số mức độ biểu hiển để xem cách bạn thể hiện mức độ biểu hiện tâm trí, hành động, cảm xúc và trực giác </p>
                        <p><strong> Bước 7</strong>: Bạn có thể tham khảo ý nghĩa cũng như cách ứng dụng các mũi tên sức mạnh có trong ngày sinh để có thể hiểu được cách phát huy cũng như khắc phục trong đó </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page-34 mg-page bg-page-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-page">
                        <p>Zenway</p>
                    </div>
                    <div class="title-page-1">
                        <p>Lời kết</p>
                    </div>
                    <div class="content-page">
                        <h3>Zenway.vn cùng bạn thấu hiểu và chuyển hoá </h3>
                        <ul>
                            <li>
                                 Như vậy Zenway đã cùng bạn đi qua chặng đầu của hành trình giúp bạn biết và hiểu về bản thân dưới góc nhìn của thần số học để giúp bạn tìm ra những câu trả lời chính cho bạn về : Bạn là ai, bạn đến với cuộc đời với sứ mệnh gì hay bài học chính nhất của bạn ở kiếp sống này là gì.
                            </li>
                            <li>
                                Chặng đường tiếp theo là giai đoạn cực kỳ quan trọng, vì những dữ liệu mà thần số học hay zenway cung cấp hiện tại cho bạn mới ở dạng thông tin, là kiến thức, để xác thực, để thấu hiểu trọn vẹn bản thân bạn một cách trọn vẹn thì bạn nên coi thần số học là công cụ gợi mở, bước đầu, tiếp theo nếu có thể bạn hãy dành thời gian thực hành THIỀN VIPASSANA để có thể nhìn sâu vào bên trong tâm của bạn, khi bạn thực hành thành thạo bạn sẽ thấy, tin và biết cách sử dụng bản đồ số học zenway một cách hiệu quả nhất 
                                Bạn có thể tham gia nhóm và được tham dự khoá đào tạo THIỀN VIPASSANA Hoàn Toàn Miễn Phí , cũng như có thẻ thực hành cùng với các anh chị, em khác. tại link : 
                            </li>
                            <li>
                                <a href="https://www.facebook.com/groups/thienvipassanasuthu">https://www.facebook.com/groups/thienvipassanasuthu</a>
                            </li>
                            <li>
                                Giai đoạn tiếp theo là giai đoạn chuyển hoá : để bạn trở thành một phiên bản hoàn hảo thành công nhất của chính mình, bạn có thể truy cập thêm mục chuyển hoá ở zenway.vn
                            </li>
                            <li>
                                Việc bạn trở thành một phiên bản mới của chính mình, có thể chuyển hoá mọi khó khăn thử thách thành những cơ hội những góc nhìn giúp bạn phát triển, thành công và hạnh phúc hơn, đó là điều mà Zenway cảm thấy hạnh phúc nhất
                            </li>
                            <li>
                                Hy vọng những điều Zenway chia sẻ có thể giúp ích được cho bạn và nếu có thể nhận được những góp ý hay đóng góp của bạn để Zenway có thể phát triển và mang nhiều điều tích cực đến hơn với cộng đồng thì rất tuyệt vời,
                                
                            </li>
                        </ul>
                    </div>
                    <div class="ending-page">
                        <p>
                            Cảm ơn bạn đã dành thời gian !
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>