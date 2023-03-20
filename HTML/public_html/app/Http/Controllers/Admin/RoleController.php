<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;  
use Spatie\Permission\Models\Permission;
use DataTables;

class RoleController extends Controller
{
    protected function module()
    {
        return [
            'name'   => 'Quyền',
            'module' => 'role',
            'table'  => [

                'name' => [
                    'title' => 'Quyền',
                    'with'  => '',
                ],

            ]
        ];
    }

    public function index(Request $request)
    {
        if(!\Auth::user()->can('roles.index')){
            abort(404);
        }
        if ($request->ajax()) {
            $role = Role::orderBy('created_at', 'DESC')->get();
            return Datatables::of($role)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('name', function ($data) {
                    return $data->name;
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('role.edit', ['id' => $data->id]) . '" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Sửa
                        </a> &nbsp; &nbsp; 
                        <a href="javascript:;" class="btn-destroy"
                            data-href="' . route('role.destroy', $data->id) . '"
                            data-toggle="modal" data-target="#confim">
                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>                          
                        ';
                })->rawColumns(['checkbox', 'action', 'name'])
                ->addIndexColumn()
                ->make(true);
        }
        $data['module'] = $this->module();
        return view('backend.role.index', $data);
    }

    public function create()
    {
        $data['module'] = $this->module();
        $data['permission'] = Permission::all();
    	$data['role'] = Role::all();
        return view("backend.{$this->module()['module']}.create", $data);
    }

    public function store(Request $request)
    {
		$this->validate($request,[
    		'name' => 'required|unique:roles,name',
            'permission' => 'required',
    	],[
    		'name.required'=>'Bạn chưa nhập tên bộ phận',
    		'name.unique'=>'Bạn nhập tên đã trùng',
    		'permission.required'=>'Bạn chưa chọn quyền',
    	]);
    	$role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        flash('Thêm mới thành công.')->success();
        return redirect()->route('role.index');
    }

    public function edit($id)
    {
        if($id == 1){
            // abort(404);
        }
        $data['rolePermissions'] = \DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        $data['module'] = array_merge($this->module(),[
            'action' => 'update'
        ]);
        $data['permission'] = Permission::get();
        $data['role'] = Role::find($id);
        return view("backend.{$this->module()['module']}.edit", $data);    
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        flash('Cập nhật thành công.')->success();
        return back();
       
    }

    public function destroy($id)
    {
        if($id > 1) { 
            $role = Role::find($id);
            $role->syncPermissions([]);
            $role->delete();
            flash('Xóa thành công')->success();
            return redirect()->back();
        }else{
            abort(404);
        }
    }

    public function deleteMuti(Request $request)
    {
        if(!empty($request->chkItem)){
            foreach ($request->chkItem as $id) {
                if($id > 1) { 
                    $role = Role::find($id);
                    $role->syncPermissions([]);
                    $role->delete();
                }
            }
            flash('Xóa thành công.')->success();
            return back();
        }
        flash('Bạn chưa chọn dữ liệu cần xóa.')->error();
        return back();

    }
}
