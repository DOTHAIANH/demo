<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\PostCategory;
use Carbon\Carbon;

class PostController extends Controller
{

    private $type = 'blog';
    protected function fields()
    {
        return 
            [
                'name' => 'required',
                'image'     => 'required',
                'category' => 'required',
        ];
    }

    protected function messages()
    {
        return 
            [
                'name.required' => 'Bạn chưa nhập tên bài viết',
                'image.required' => 'Bạn chưa chọn ảnh bài viết',
                'category.required' => 'Bạn chưa chọn danh mục',
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
            $list_post = Post::orderBy('created_at', 'DESC')->where('type', $request->type)->get();
            $type = $request->type;
            return Datatables::of($list_post)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
                })->addColumn('image', function ($data) {
                    return '<img src="' . $data->image . '" class="img-thumbnail" width="50px" height="50px">';
                })->addColumn('name', function ($data) use ($type){
                        return $data->name . ' <br><a href="' . asset($type.'/' . $data->slug) . '" target="_black">
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i> Link:
                        ' . asset($type.'/'.$data->slug) . '
                      </a>';
                })->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $status = ' <span class="label label-success">Hiển thị</span>';
                    } elseif ($data->status == 2) {
                        $status = ' <span class="label label-danger">Bản nháp</span>';
                    } else {
                        $status = ' <span class="label label-danger">Chờ duyệt</span>';
                    }
                    return $status;
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('post.edit', ['id' => $data->id, 'type' => $data->type]) . '" title="Sửa">
                            <i class="fa fa-pencil fa-fw"></i> Sửa
                        </a> &nbsp; &nbsp; &nbsp;
                            <a href="javascript:;" class="btn-destroy"
                            data-href="' . route('post.destroy', $data->id) . '"
                            data-toggle="modal" data-target="#confim">
                            <i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                        ';
                })->rawColumns(['checkbox', 'image', 'status', 'action', 'name', 'author'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.post.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Categories::where('type', $request->type)->get();
        return view('backend.post.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->type == 'blog') {
            $this->validate($request, $this->fields(), $this->messages());
        }else{
            $this->validate($request,
                [
                    'name' => 'required',
                ],
                [
                    'name.required' => 'Bạn chưa nhập tên bài viết',
                ]
            );
        }
        
        $data = [
            'name'             => $request->name,
            'slug'             => $this->createSlug(str_slug($request->name)),
            'desc'             => $request->desc,
            'type'             => $request->type,
            'content'          => $request->input('content'),
            'status'           => $request->status,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
            'image'          => $request->image,
            'view_count'       => 0,
        ];
        $post = Post::create($data);

        if (!empty($request->tags)) {
            $post->tag(explode(',', $request->tags));
        }

        if (!empty($request->category)) {
            foreach ($request->category as $item) {
                PostCategory::create(['id_category' => $item, 'id_post' => $post->id]);
            }
        }

        flash('Thêm mới thành công.')->success();


        return redirect()->route('post.index', ['type' => $request->type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Post::findOrFail($id);
        $categories = Categories::where('type', $request->type)->get();
        return view('backend.post.edit', compact('data', 'categories'));
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
        if($request->type == 'blog') {
            $this->validate($request, $this->fields(), $this->messages());
        }else{
            $this->validate($request,
                [
                    'name' => 'required',
                ],
                [
                    'name.required' => 'Bạn chưa nhập tên bài viết',
                ]
            );
        }
        $post = Post::findOrFail($id);

        $data = [
            'name'          => $request->name,
            'desc'          => $request->desc,
            'image'          => $request->image,
            'content'       => $request->input('content'),
            'status'           => $request->status,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
        ];

        $post = $post->update($data);
        if (!empty($request->category)) {
            PostCategory::where('id_post', $id)->delete();
            foreach ($request->category as $item) {
                PostCategory::create(['id_category' => $item, 'id_post' => $id]);
            }
        }
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
        Post::destroy($id);
        flash('Xóa thành công.')->success();
        return redirect()->back();
    }

    public function deleteMuti(Request $request)
    {
        if ($request->has('chkItem')) {
            foreach ($request->chkItem as $id) {
                Post::destroy($id);
            }
            flash('Xóa thành công.')->success();
            return redirect()->back();
        } else {
            flash('Bạn chưa chọn dữ liệu để xóa.')->error();
            return redirect()->back();
        }
    }

    public function getAjaxSlug(Request $request)
    {
        $slug = str_slug($request->slug);
        $id = $request->id;
        $post = Post::find($id);
        $post->slug = $this->createSlug($slug, $id);
        $post->save();
        return $this->createSlug($slug, $id);
    }

    public function createSlug($slugPost, $id = null)
    {
        $slug = $slugPost;
        $index = 1;
        $baseSlug = $slug;
        while ($this->checkIfExistedSlug($slug, $id)) {
            $slug = $baseSlug . '-' . $index++;
        }

        if (empty($slug)) {
            $slug = time();
        }

        return $slug;
    }

    public function checkIfExistedSlug($slug, $id = null)
    {
        $type = $this->type;
        if ($id != null) {
            $count = Post::where('type', $type)->where('id', '!=', $id)->where('slug', $slug)->count();
            return $count > 0;
        } else {
            $count = Post::where('type', $type)->where('slug', $slug)->count();
            return $count > 0;
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $type = $request->type;
        $data = Post::whereStatus(1)->where('type',$type)->where('name', 'like', '%'.$keyword.'%')->get()->map(function ($data){
            return [
                'id' => $data->id,
                'text' => $data->name,
            ];
        });

        return response()->json($data);
    }
}
