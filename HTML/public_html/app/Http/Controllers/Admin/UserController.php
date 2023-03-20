<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use App\Http\Requests\UserRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;  
use App\Http\Requests\UserEditRequest;

class UserController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!\Auth::user()->can('users.index')){
            abort(404);
        }
        $data = User::all();
        return view('backend.users.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\Auth::user()->isSuperAdmin()){
            $roles = Role::all();
            $permission = Permission::all();
        }else{
            $permission = Permission::where('id','!=',2)->get();
            $roles = Role::where('id','>',1)->get();
        }

        return view('backend.users.add', compact( 'roles', 'permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->user_name = $request->user_name;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = $request->status;
        $user->level = $request->level;
        $user->image = $request->image;
        $user->save();
        $user->assignRole($request->input('roles'));
        flash('Thêm mới thành công.')->success();
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(\Auth::user()->isSuperAdmin()){
            $roles = Role::all();
            $permission = Permission::all();
        }else{
            $permission = Permission::where('id','!=',2)->get();
            $roles = Role::where('id','>',1)->get();
        }
        if($id == 1){
            abort(404);
        }
        $data = User::findOrFail($id);
        $selected_p = $data->getPermissionNames()->toArray();
        $userRole = $data->roles->pluck('name','id')->first();
        return view('backend.users.edit', compact('data', 'roles', 'userRole', 'selected_p', 'permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user = User::find($id);
        $user->user_name = $request->user_name;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if ($request->input('repassword')) {
            $this->validate($request,
            [
                'repassword' => 'same:password'
            ],
            [
                'password.same' => 'Mật khẩu nhập lại không giống !'
            ]);
            $pass = $request->input('password');
            $user->password = Hash::make($pass);
        }
        if($user->id > 1){
            $user->status = $request->status;
        }
        
        
        if (!empty($request->level)) {
            $user->level = $request->level;
        }
        $user->image = $request->image;
        $user->save();
        $user->revokePermissionTo($user->getAllPermissions());
        $user->assignRole($request->input('roles'));
        $user->givePermissionTo($request->input('permission'));
        flash('Cập nhật thành công.')->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id == 1){
            abort(404);
        }
        $user = User::findOrFail($id);
        $user->destroy($id);
        flash('Xóa thành công.')->success();
        return back();
    }
}
