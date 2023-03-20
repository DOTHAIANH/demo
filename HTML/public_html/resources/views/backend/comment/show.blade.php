@extends('backend.layouts.app')
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action', renderAction(@$module['action']))
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <form action="{{ route('comment.update', $data->id) }}" method="POST">
            @csrf
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Họ tên</label>
                                    <input type="text" class="form-control" value="{{ $data->member_id == -1 ? 'Administrator' : $data->member->full_name }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{ $data->member_id == -1 ? 'Administrator' : $data->member->email }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" class="form-control" value="{{ $data->member_id == -1 ? 'Administrator' : $data->member->phone }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" class="form-control" value="{{ $data->member_id == -1 ? 'Administrator' : $data->member->user_name }}" disabled>
                                </div>


                                <div class="form-group">
                                    <label for="">Sản phẩm: </label>
                                    <a href="{{ route('home.product.single', $data->product->slug) }}" target="_blank">{{ $data->product->name }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <form action="{{ route('comment.update', $data->id)  }}" method="POST">
                                @csrf
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Nội dung</label>
                                        <textarea name="content" class="form-control" cols="30" rows="10">{{ $data->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Trạng thái</label>
                                        <select name="status" class="form-control">
                                            @foreach(\App\Models\Comment::getStatus() as $key => $value)
                                                <option value="{{ $key }}" {{ $key == $data->status ? 'selected' : null }}>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Lưu lại</button>
                                </div>
                            </form>
                        </div>

                        <hr>
                        <div class="row" style="margin-top: 20px">
                            <h3 class="text-center text-uppercase">Trả lời</h3>
                            <form action="{{ route('comment.store')  }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $data->product_id }}">
                                <input type="hidden" name="parent_id" value="{{ empty($data->parent_id) ? $data->id : $data->parent_id }}">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Nội dung</label>
                                        <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Trả lời</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@stop