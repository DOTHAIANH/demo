<?php

namespace App\Http\Controllers\Admin;

use App\Models\Orders\TransactionLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Models\Member;

class MemberController extends Controller
{
    protected function module()
    {
        return [
            'name'   => 'Thành viên',
            'module' => 'member',
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

                'user_name' => [
                    'title' => 'Tên tài khoản',
                    'with'  => '',
                ],

                'total' => [
                    'title' => 'Số dư tài khoản',
                    'with'  => '',
                ],

                'status' => [
                    'title' => 'Trạng thái',
                    'with'  => '200px',
                ],
            ]
        ];
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $list_post = Member::orderBy('created_at', 'DESC');
            return Datatables::of($list_post)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('status', function ($data) {
                    if ($data->status == Member::STATUS_ACTIVE){
                        return '<span class="label label-success">Hoạt động</span>';
                    }
                    return '<span class="label label-danger">Khóa</span>';

                })->addColumn('name', function ($data) {
                    return $data->full_name;
                })->addColumn('total', function ($data) {
                    return formatPrice($data->account_balance);
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('member.show', ['id' => $data->id]) . '" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Chi tiết
                        </a> &nbsp; &nbsp;                           
                        ';
                })->rawColumns(['checkbox', 'image', 'status', 'action', 'name', 'author'])
                ->addIndexColumn()
                ->make(true);
        }
        $data['module'] = $this->module();
        return view('backend.member.index', $data);
    }

    public function show($id)
    {
        $data['data'] = Member::findOrFail($id);
        $data['module'] = $this->module();
        return view('backend.member.show', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'unique:members,email,'.$id,
            'phone' => 'unique:members,phone,'.$id
        ],[
            'email.unique' => 'Email bị trùng',
            'phone.unique' => 'Số điện thoại bị trùng',
        ]);
        $member = Member::findOrFail($id);
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
        ];

        if(!empty($request->input('password'))){
            $data = array_merge($data,[
                'password' => \Hash::make($request->password),
            ]);
        }
        $member->update($data);
        flash('Cập nhập thành công')->success();
        return back();
    }

   
}
