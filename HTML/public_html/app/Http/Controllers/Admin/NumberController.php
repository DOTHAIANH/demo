<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Number;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class NumberController extends Controller
{

    protected function fields()
    {
        return 
            [
                'name' => 'required',
        ];
    }

    protected function messages()
    {
        return 
            [
                'name.required' => 'Bạn chưa nhập tên bài viết',
            ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $list_post = Number::orderBy('created_at', 'DESC')->get();
            $type = $request->type;
            return Datatables::of($list_post)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('name', function ($data) use ($type){
                        return $data->name;
                })->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $status = ' <span class="label label-success">Hiển thị</span>';
                    }else{
                        $status = ' <span class="label label-danger">Không hiển thị</span>';
                    }
                    return $status;
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('number.edit', ['id' => $data->id, 'type' => $data->type]) . '" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Sửa
                        </a> &nbsp; &nbsp; &nbsp;
                            <a href="javascript:;" class="btn-destroy"
                            data-href="' . route('number.destroy', $data->id) . '"
                            data-toggle="modal" data-target="#confim">
                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                        ';
                })->rawColumns(['checkbox', 'image', 'status', 'action', 'name', 'author'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.number.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('backend.number.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->fields(), $this->messages());
        $data = [
            'name'             => $request->name,
            'slug'             => $request->slug,
            'type'             => $request->type,
            'content'          => $request->input('content'),
            'desc'          => json_encode($request->input('desc')),
            'status'           => $request->status,
            'conso'           => $request->conso,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
            'image'          => $request->image,
        ];
        $post = Number::create($data);

        flash('Thêm mới thành công.')->success();

        $content = $request->input('content');
        $pdf = PDF::loadView('frontend.pdf', compact('content'))->setWarnings(false)->save('tuvi/uploads/PDF/'.$request->type.'_'.$request->conso.'.pdf');
        $post = $post->update($data);
        return redirect()->route('number.index', ['type' => $request->type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Number::findOrFail($id);
        return view('backend.number.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->fields(), $this->messages());
        $post = Number::findOrFail($id);

        $data = [
            'name'          => $request->name,
            'image'          => $request->image,
            'content'       => $request->input('content'),
            'desc'          => json_encode($request->input('desc')),
            'status'           => $request->status,
            'conso'           => $request->conso,
            'type'           => $request->type,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
        ];

        $content = $request->input('content');
        $pdf = PDF::loadView('frontend.pdf', compact('content'))->setWarnings(false)->save('tuvi/uploads/PDF/'.$request->type.'_'.$request->conso.'.pdf');
        $post = $post->update($data);
        
        flash('Cập nhật thành công.')->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Number::destroy($id);
        flash('Xóa thành công.')->success();
        return redirect()->back();
    }

    public function deleteMuti(Request $request)
    {
        if ($request->has('chkItem')) {
            foreach ($request->chkItem as $id) {
                Number::destroy($id);
            }
            flash('Xóa thành công.')->success();
            return redirect()->back();
        } else {
            flash('Bạn chưa chọn dữ liệu để xóa.')->error();
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $type = $request->type;
        $data = Number::whereStatus(1)->where('type',$type)->where('name', 'like', '%'.$keyword.'%')->get()->map(function ($data){
            return [
                'id' => $data->id,
                'text' => $data->name,
            ];
        });

        return response()->json($data);
    }
}
