<?php

namespace App\Http\Controllers\Admin;

use App\Models\Orders\TransactionLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;
use Barryvdh\DomPDF\Facade as PDF;
use DataTables;
use App\Models\Daily;
use App\Models\Number;

class DailyController extends Controller
{
    protected function module()
    {
        return [
            'name'   => 'Khách hàng',
            'module' => 'daily',
            'table'  => [

                'name' => [
                    'title' => 'Họ tên',
                    'with'  => '',
                ],

                'phone' => [
                    'title' => 'Số điện thoại',
                    'with'  => '',
                ],

                'email' => [
                    'title' => 'Email',
                    'with'  => '',
                ],

                'sex' => [
                    'title' => 'Giới tính',
                    'with'  => '',
                ],

                'birthday' => [
                    'title' => 'Ngày sinh',
                    'with'  => '',
                ],

                'address' => [
                    'title' => 'Địa chỉ',
                    'with'  => '',
                ],

            ]
        ];
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $list_post = Daily::orderBy('created_at', 'DESC')->where('member_id',\auth::user()->id)->get();
            return Datatables::of($list_post)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('name', function ($data) {
                    return $data->name;
                })->addColumn('phone', function ($data) {
                    return $data->phone;
                })->addColumn('email', function ($data) {
                    return $data->email;
                })->addColumn('address', function ($data) {
                    return $data->address;
                })->addColumn('sex', function ($data) {
                    return $data->sex == 1 ? 'Nữ' : 'Nam';
                })->addColumn('birthday', function ($data) {
                    return date('d-m-Y',strtotime($data->birthday));
                })->addColumn('action', function ($data) {
                     return '<a href="javascript:;" class="btn-destroy"
                            data-href="' . route('daily.destroy', $data->id) . '"
                            data-toggle="modal" data-target="#confim">
                            <i class="fa fa-trash-o fa-fw"></i> </a>
                            <a href="/tuvi/uploads/be.php?file='.$data->file_name.'" class="">
                            <i class="fa fa-file-audio-o"></i> </a>
                            <a href="/tuvi/uploads/'.$data->pdf.'" class="">
                            <i class="fa fa-file-pdf-o"></i> </a>
                        ';
                })->rawColumns(['checkbox', 'action', 'name', 'phone', 'email', 'sex', 'address', 'birthday'])
                ->addIndexColumn()
                ->make(true);
        }
        $data['module'] = $this->module();
        return view('backend.daily.index', $data);
    }

    public function create(Request $request)
    {
        return view('backend.daily.add');
    }

    public function store(Request $request)
    {
        $now = new \DateTime();
        $day = date('d',strtotime($request->birthday));
        $month = date('m',strtotime($request->birthday));
        $year = date('Y',strtotime($request->birthday));
        $age = 0;
        $date = new \DateTime($year.'/'.$month.'/'.$day);
        $diff = $now->diff($date);
        $age = $diff->y + 1;

        $tach_year = tachkytu($year);
        $data_year = pheptinh($tach_year);
        $kq_year = ketquapheptinh($year,$tach_year);

        $tach_day = tachkytu($day);
        $data_day = pheptinh($tach_day);
        $kq_day = ketquapheptinh($day,$tach_day);

        $tach_month = tachkytu($month);
        $data_month = pheptinh($tach_month);
        $kq_month = ketquapheptinh($month,$tach_month);

        $consoduongdoi = checktotal([$kq_year,$kq_month,$kq_day]);
        $chisosumenh = chisosumenh(str_slug(request('name'),' ', 'en'));
        $consotruongthanh = checktotal($consoduongdoi + $chisosumenh);
        $consothaido = consothaido($day,$month);
        $consonamcanhan = checktotal($consothaido + checktotal($now->format('Y')));
        $consolinhhon = consolinhhon(str_slug(request('name'),' ', 'en'));
        $consotinhcach = consotinhcach(str_slug(request('name'),' ', 'en'));
        $ketnoinoitamvatinhcach = abs(checktotal($consolinhhon - $consotinhcach));
        $ketnoiduongdoivasumenh = abs(checktotal($consoduongdoi - $chisosumenh));
        $consongaysinh = $kq_day ;

        $data_solap = array($consongaysinh,$consoduongdoi,$chisosumenh,$consolinhhon,$consotinhcach, $consotruongthanh);
        $checklap = array_count_values($data_solap);
        $loc_mot = array_diff( $checklap, [1] );
        $get_number = array_keys($loc_mot);
        $consosolap = implode(', ',$get_number);

        $thachthuc1 = checksovua(abs(total($day) - total($month)));
        $thachthuc2 = checksovua(abs(total($year) - total($day)));
        $thachthuc3 = checksovua(abs($thachthuc1 - $thachthuc2));
        $thachthuc4 = checksovua(abs(total($year) - total($month)));

        $dinhcao2 = total(total($year) + total($day));
        $dinhcao1 = total(total($month) + total($day));
        $dinhcao3 = totalDinhCao($dinhcao2 + $dinhcao1);
        $dinhcao4 = totalDinhCao(total($month) + total($year));

        $thangcanhan = thangcanhan($consonamcanhan + checktotal($now->format('m')));
        $thangcanhantiep = thangcanhan($consonamcanhan + checktotal($now->format('m') == 12 ? 1 : $now->format('m') + 1));
        $chisomucdobieuhien = implode(', ',chisomucdobieuhien(str_slug(request('name'),' ', 'en')));

        $consononghiep = consononghiep([$kq_year,$kq_month,$kq_day],str_slug(request('name'),' ', 'en'),$day);
        $chisonoicam = chisonoicam(str_slug(request('name'),' ', 'en'));
        $consobosung = empty(consobossung(str_slug(request('name'),' ', 'en'))) ? 0 : consobossung(str_slug(request('name'),' ', 'en'));
        $consocanbang = chisocanbang(str_slug(request('name'),' ', 'en'));


        $number = Number::where(function ($query) use ($consoduongdoi){
            $query->where('type','duongdoi')->whereIn('conso',array_map('trim',explode(',',$consoduongdoi)));
        })->orWhere(function ($query) use ($chisosumenh){
            $query->where('type','sumenh')->whereIn('conso',array_map('trim',explode(',',$chisosumenh)));
        })->orWhere(function ($query) use ($consolinhhon){
            $query->where('type','noitam')->whereIn('conso',array_map('trim',explode(',',$consolinhhon)));
        })->orWhere(function ($query) use ($consothaido){
            $query->where('type','thaido')->whereIn('conso',array_map('trim',explode(',',$consothaido)));
        })->orWhere(function ($query) use ($consotinhcach){
            $query->where('type','tuongtac')->whereIn('conso',array_map('trim',explode(',',$consotinhcach)));
        })->orWhere(function ($query) use ($consosolap){
            $query->where('type','solap')->whereIn('conso',array_map('trim',explode(',',$consosolap)));
        })->orWhere(function ($query) use ($chisonoicam){
            $query->where('type','noicam')->whereIn('conso',array_map('trim',explode(',',$chisonoicam)));
        })->orWhere(function ($query) use ($consobosung){
            $query->where('type','bosung')->whereIn('conso',array_map('trim',explode(',',$consobosung)));
        })->orWhere(function ($query) use ($consocanbang){
            $query->where('type','canbang')->whereIn('conso',array_map('trim',explode(',',$consocanbang)));
        })->orWhere(function ($query) use ($consononghiep){
            $query->where('type','nonghiep')->whereIn('conso',array_map('trim',explode(',',$consononghiep)));
        })->orWhere(function ($query) use ($consongaysinh){
            $query->where('type','ngaysinh')->whereIn('conso',array_map('trim',explode(',',$consongaysinh)));
        })->orWhere(function ($query) use ($consotruongthanh){
            $query->where('type','truongthanh')->whereIn('conso',array_map('trim',explode(',',$consotruongthanh)));
        })->orWhere(function ($query) use ($thangcanhan,$thangcanhantiep){
            $query->where('type','thangcanhan')->whereIn('conso',array_map('trim',array($thangcanhantiep,$thangcanhan)));
        })->orWhere(function ($query) use ($consonamcanhan){
            $query->where('type','namcanhan')->whereIn('conso',array_map('trim',explode(',',$consonamcanhan)));
        })->orWhere(function ($query) use ($consotinhcach){
            $query->where('type','tuongtac')->whereIn('conso',array_map('trim',explode(',',$consotinhcach)));
        })->orWhere(function ($query) use ($ketnoiduongdoivasumenh){
            $query->where('type','ketnoiduongdoivasumenh')->whereIn('conso',array_map('trim',explode(',',$ketnoiduongdoivasumenh)));
        })->orWhere(function ($query) use ($ketnoinoitamvatinhcach){
            $query->where('type','ketnoinoitamvatuongtac')->whereIn('conso',array_map('trim',explode(',',$ketnoinoitamvatinhcach)));
        })->orWhere(function ($query) use ($dinhcao1,$dinhcao2,$dinhcao3,$dinhcao4){
            $query->where('type','dinhcao')->whereIn('conso',array_map('trim',explode(',',$dinhcao1.','.$dinhcao2.','.$dinhcao3.','.$dinhcao4)));
        })->orWhere(function ($query) use ($thachthuc1,$thachthuc2,$thachthuc3,$thachthuc4){
            $query->where('type','thachthucchang')->whereIn('conso',array_map('trim',explode(',',$thachthuc1.','.$thachthuc2.','.$thachthuc3.','.$thachthuc4)));
        })->get();
        $number1 = $number->groupBy('type')->toArray();
        $number2 = $number->groupBy(['type','conso'])->toArray();
        $data['duongdoi'] = isset($number1['duongdoi']) ? implode('<br>',array_column ($number1['duongdoi'],'content')) : '';
        $data['sumenh'] = isset($number1['sumenh']) ? implode('<br>',array_column ($number1['sumenh'],'content')) : '';
        $data['noitam'] = isset($number1['noitam']) ? implode('<br>',array_column ($number1['noitam'],'content')) : '';
        $data['thaido'] = isset($number1['thaido']) ? implode('<br>',array_column ($number1['thaido'],'content')) : '';
        $data['tinhcach'] = isset($number1['tuongtac']) ? implode('<br>',array_column ($number1['tuongtac'],'content')) : '';
        $data['noicam'] = isset($number1['noicam']) ? implode('<br>',array_column ($number1['noicam'],'content')) : '';
        $data['solap'] = isset($number1['solap']) ? implode('<br>',array_column ($number1['solap'],'content')) : '';
        $data['bosung'] = isset($number1['bosung']) ? implode('<br>',array_column ($number1['bosung'],'content')) : '';
        $data['canbang'] = isset($number1['canbang']) ? implode('<br>',array_column ($number1['canbang'],'content')) : '';
        $data['nonghiep'] = isset($number1['nonghiep']) ? implode('<br>',array_column ($number1['nonghiep'],'content')) : '';
        $data['ngaysinh'] = isset($number1['ngaysinh']) ? implode('<br>',array_column ($number1['ngaysinh'],'content')) : '';
        $data['truongthanh'] = isset($number1['truongthanh']) ? implode('<br>',array_column ($number1['truongthanh'],'content')) : '';

        $data['contentthangcanhan'] = isset($number2['thangcanhan'][$thangcanhan]) ? $number2['thangcanhan'][$thangcanhan][0]['content'] : '';
        $data['contentthangcanhantiep'] = isset($number2['thangcanhan'][$thangcanhantiep]) ? $number2['thangcanhan'][$thangcanhantiep][0]['content'] : '';

        $data['namcanhan'] = isset($number1['namcanhan']) ? implode('<br>',array_column ($number1['namcanhan'],'content')) : '';
        $data['ketnoiduongdoivasumenh'] = isset($number1['ketnoiduongdoivasumenh']) ? implode('<br>',array_column ($number1['ketnoiduongdoivasumenh'],'content')) : '';
        $data['ketnoinoitamvatuongtac'] = isset($number1['ketnoinoitamvatuongtac']) ? implode('<br>',array_column ($number1['ketnoinoitamvatuongtac'],'content')) : '';
        $data['condinhcao1'] = isset($number2['dinhcao'][$dinhcao1]) ? $number2['dinhcao'][$dinhcao1][0]['content'] : '';
        $data['condinhcao2'] = isset($number2['dinhcao'][$dinhcao2]) ? $number2['dinhcao'][$dinhcao2][0]['content'] : '';
        $data['condinhcao3'] = isset($number2['dinhcao'][$dinhcao3]) ? $number2['dinhcao'][$dinhcao3][0]['content'] : '';
        $data['condinhcao4'] = isset($number2['dinhcao'][$dinhcao4]) ? $number2['dinhcao'][$dinhcao4][0]['content'] : '';

        $data['thachthucchang1'] = isset($number2['thachthucchang'][$thachthuc1]) ? $number2['thachthucchang'][$thachthuc1][0]['content'] : '';
        $data['thachthucchang2'] = isset($number2['thachthucchang'][$thachthuc2]) ? $number2['thachthucchang'][$thachthuc2][0]['content'] : '';
        $data['thachthucchang3'] = isset($number2['thachthucchang'][$thachthuc3]) ? $number2['thachthucchang'][$thachthuc3][0]['content'] : '';
        $data['thachthucchang4'] = isset($number2['thachthucchang'][$thachthuc4]) ? $number2['thachthucchang'][$thachthuc4][0]['content'] : '';

        $full_number = array_merge($tach_year,$tach_month, $tach_day);
        $data['full_number'] = $full_number;

        $ns_th1 = array_intersect(array_unique($full_number) , [1,5,9]);
        if (count($ns_th1) == 0 || count($ns_th1) == 3) {
            $stt_ns_th1 = 1;
        }else{
            $stt_ns_th1 = 0;
        }
        $ns_th2 = array_intersect(array_unique($full_number) , [1,4,7]);
        if (count($ns_th2) == 0 || count($ns_th2) == 3) {
            $stt_ns_th2 = 1;
        }else{
            $stt_ns_th2 = 0;
        }
        $ns_th3 = array_intersect(array_unique($full_number) , [2,5,8]);
        if (count($ns_th3) == 0 || count($ns_th3) == 3) {
            $stt_ns_th3 = 1;
        }else{
            $stt_ns_th3 = 0;
        }
        $ns_th4 = array_intersect(array_unique($full_number) , [3,6,9]);
        if (count($ns_th4) == 0 || count($ns_th4) == 3) {
            $stt_ns_th4 = 1;
        }else{
            $stt_ns_th4 = 0;
        }
        $ns_th5 = array_intersect(array_unique($full_number) , [4,5,6]);
        if (count($ns_th5) == 0 || count($ns_th5) == 3) {
            $stt_ns_th5 = 1;
        }else{
            $stt_ns_th5 = 0;
        }
        $ns_th6 = array_intersect(array_unique($full_number) , [7,8,9]);
        if (count($ns_th6) == 0 || count($ns_th6) == 3) {
            $stt_ns_th6 = 1;
        }else{
            $stt_ns_th6 = 0;
        }
        $ns_th7 = array_intersect(array_unique($full_number) , [1,2,3]);
        if (count($ns_th7) == 0 || count($ns_th7) == 3) {
            $stt_ns_th7 = 1;
        }else{
            $stt_ns_th7 = 0;
        }
        $ns_th8 = array_intersect(array_unique($full_number) , [3,5,7]);
        if (count($ns_th8) == 0 || count($ns_th8) == 3) {
            $stt_ns_th8 = 1;
        }else{
            $stt_ns_th8 = 0;
        }


        $name_slug = str_slug(request('name'),' ', 'en');
        $full_name = getArrayName($name_slug);

        $name_th1 = array_intersect(array_keys($full_name) , [1,5,9]);
        if (count($name_th1) == 0 || count($name_th1) == 3) {
            $stt_name_th1 = 1;
        }else{
            $stt_name_th1 = 0;
        }
        $name_th2 = array_intersect(array_keys($full_name) , [1,4,7]);
        if (count($name_th2) == 0 || count($name_th2) == 3) {
            $stt_name_th2 = 1;
        }else{
            $stt_name_th2 = 0;
        }
        $name_th3 = array_intersect(array_keys($full_name) , [2,5,8]);
        if (count($name_th3) == 0 || count($name_th3) == 3) {
            $stt_name_th3 = 1;
        }else{
            $stt_name_th3 = 0;
        }
        $name_th4 = array_intersect(array_keys($full_name) , [3,6,9]);
        if (count($name_th4) == 0 || count($name_th4) == 3) {
            $stt_name_th4 = 1;
        }else{
            $stt_name_th4 = 0;
        }
        $name_th5 = array_intersect(array_keys($full_name) , [4,5,6]);
        if (count($name_th5) == 0 || count($name_th5) == 3) {
            $stt_name_th5 = 1;
        }else{
            $stt_name_th5 = 0;
        }
        $name_th6 = array_intersect(array_keys($full_name) , [7,8,9]);
        if (count($name_th6) == 0 || count($name_th6) == 3) {
            $stt_name_th6 = 1;
        }else{
            $stt_name_th6 = 0;
        }
        $name_th7 = array_intersect(array_keys($full_name) , [1,2,3]);
        if (count($name_th7) == 0 || count($name_th7) == 3) {
            $stt_name_th7 = 1;
        }else{
            $stt_name_th7 = 0;
        }
        $name_th8 = array_intersect(array_keys($full_name) , [3,5,7]);
        if (count($name_th8) == 0 || count($name_th8) == 3) {
            $stt_name_th8 = 1;
        }else{
            $stt_name_th8 = 0;
        }

        $data['full_name'] = $full_name;
        $data['stt_name_th8'] = $stt_name_th8;
        $data['stt_name_th7'] = $stt_name_th7;
        $data['stt_name_th6'] = $stt_name_th6;
        $data['stt_name_th5'] = $stt_name_th5;
        $data['stt_name_th4'] = $stt_name_th4;
        $data['stt_name_th3'] = $stt_name_th3;
        $data['stt_name_th2'] = $stt_name_th2;
        $data['stt_name_th1'] = $stt_name_th1;

        $data['stt_ns_th8'] = $stt_ns_th8;
        $data['stt_ns_th7'] = $stt_ns_th7;
        $data['stt_ns_th6'] = $stt_ns_th6;
        $data['stt_ns_th5'] = $stt_ns_th5;
        $data['stt_ns_th4'] = $stt_ns_th4;
        $data['stt_ns_th3'] = $stt_ns_th3;
        $data['stt_ns_th2'] = $stt_ns_th2;
        $data['stt_ns_th1'] = $stt_ns_th1;

        $data['name'] = $request->name;
        $data['day'] = $day;
        $data['month'] = $month;
        $data['year'] = $year;
        $data['data_day'] = $data_day;
        $data['kq_day'] = $kq_day;
        $data['data_month'] = $data_month;
        $data['kq_month'] = $kq_month;
        $data['data_year'] = $data_year;
        $data['kq_year'] = $kq_year;
        $data['consocanbang'] = $consocanbang;
        $data['consobosung'] = $consobosung;
        $data['consoduongdoi'] = $consoduongdoi;
        $data['thachthuc1'] = $thachthuc1;
        $data['thachthuc2'] = $thachthuc2;
        $data['thachthuc3'] = $thachthuc3;
        $data['thachthuc4'] = $thachthuc4;
        $data['dinhcao1'] = $dinhcao1;
        $data['dinhcao2'] = $dinhcao2;
        $data['dinhcao3'] = $dinhcao3;
        $data['dinhcao4'] = $dinhcao4;
        $data['consolinhhon'] = $consolinhhon; 
        $data['consotinhcach'] = $consotinhcach; 
        $data['consothaido'] = $consothaido; 
        $data['consosolap'] = $consosolap; 
        $data['ketnoinoitamvatinhcach'] = $ketnoinoitamvatinhcach; 
        $data['chisosumenh'] = $chisosumenh; 
        $data['consongaysinh'] = $consongaysinh; 
        $data['consotruongthanh'] = $consotruongthanh; 
        $data['ketnoiduongdoivasumenh'] = $ketnoiduongdoivasumenh; 
        $data['consononghiep'] = empty($consononghiep) ? 0 : $consononghiep; 
        $data['chisomucdobieuhien'] = $chisomucdobieuhien; 
        $data['consonamcanhan'] = $consonamcanhan; 
        $data['thangcanhan'] = $thangcanhan; 
        $data['thangcanhantiep'] = $thangcanhantiep; 
        $data['chisonoicam'] = $chisonoicam;
        $data['age'] = $age;
        $data['sex'] = $request->sex;

        $file_name = str_slug($request->name).$day.$month.$year;
        $text = "file 'mp3/intro.mp3'"."\r\n".get_name('duongdoi',$consoduongdoi)."file 'mp3/intro_sumenh.mp3'"."\r\n".get_name('sumenh',$chisosumenh)."file 'mp3/intro_noitam.mp3'"."\r\n".get_name('noitam',$consolinhhon);
        Storage::disk('data')->put($file_name.'.txt', $text);

        $pdf = PDFMerger::init();
        $data_name = request('name');

        // page 1
        PDF::loadView('frontend.page1', compact('data_name','data'))->setWarnings(true)->save('tuvi/uploads/PDF/'.str_slug(request('name'),' ', 'en').'.pdf', 'UTF-8');
        $pdf->addPDF('tuvi/uploads/PDF/'.str_slug(request('name'),' ', 'en').'.pdf', 'all');
        // end page 1
        // if (Storage::disk('data')->exists('PDF/'.get_namepdf('duongdoi',$consoduongdoi))) {
        //     $pdf->addPDF('tuvi/uploads/PDF/'.get_namepdf('duongdoi',$consoduongdoi), 'all');
        // }
        // if (Storage::disk('data')->exists('PDF/'.get_namepdf('sumenh',$chisosumenh))) {
        //     $pdf->addPDF('tuvi/uploads/PDF/'.get_namepdf('sumenh',$chisosumenh), 'all');
        // }
        $fileName = time().'.pdf';
        $pdf->merge();
        $pdf->save("tuvi/uploads/".$fileName, 'UTF-8');


        $daily = new Daily;
        $daily->member_id = \auth::user()->id;
        $daily->name = $request->name;
        $daily->phone = $request->phone;
        $daily->email = $request->email;
        $daily->address = $request->address;
        $daily->sex = $request->sex;
        $daily->file_name = $file_name;
        $daily->pdf = $fileName;
        $daily->birthday = date('Y-m-d',strtotime($request->birthday));
        $daily->save();
        flash('Thêm mới thành công.')->success();
        return redirect()->route('daily.index');
    }

    public function destroy($id)
    {
        $daily = Daily::findOrFail($id);
        $daily->destroy($id);
        flash('Xóa thành công.')->success();
        return back();
    }

    public function deleteMuti(Request $request)
    {
        if ($request->has('chkItem')) {
            foreach ($request->chkItem as $id) {
                Daily::destroy($id);
            }
            flash('Xóa thành công.')->success();
            return redirect()->back();
        } else {
            flash('Bạn chưa chọn dữ liệu để xóa.')->error();
            return redirect()->back();
        }
    }
}
