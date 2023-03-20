@extends('backend.layouts.app')
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action', renderAction(@$module['action']))
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <form action="{{ route('member.update', $data->id) }}" method="POST">
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
                                    <input type="text" class="form-control" value="{{ $data->full_name }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{ $data->email }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" class="form-control" value="{{ $data->phone }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Tên tài khoản</label>
                                    <input type="text" class="form-control" value="{{ $data->user_name }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Số dư</label>
                                    <input type="text" class="form-control" value="{{ formatPrice($data->account_balance) }}" disabled>
                                </div>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Nạp tiền cho tài khoản
                                </button>


                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit">
                                    Cập nhật thông tin
                                </button>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="text-uppercase text-center">Lịch sử đơn hàng</h3>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tổng số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data->orders ?? [] as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->code }}</td>
                                                <td>{{ $item->total_item }}</td>
                                                <td>{{ formatPrice($item->total) }}</td>
                                                <td>
                                                    <span class="label label-success">{{ \App\Models\Orders\Order::getStatus()[$item->status] }}</span>
                                                </td>
                                                <td>
                                                    <a href="{{  route('order.show', ['id' => $item->id]) }}" title="Sửa">
                                                        <i class="fa fa-pencil fa-fw"></i> Chi tiết
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-sm-12">
                                <h3 class="text-uppercase text-center">Lịch sử đơn nạp</h3>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã giao dịch</th>
                                        <th>Nguồn nạp</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data->recharge ?? [] as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->transaction_code }}</td>
                                            <td>{{ \App\Models\BillPayments::getSource()[$item->source] }}</td>
                                            <td>{{ formatPrice($item->amount) }}</td>
                                            <td>
                                                <span class="label label-success">{{ \App\Models\BillPayments::getStatus()[$item->status] }}</span>
                                            </td>
                                            <td>
                                                <a href="{{  route('recharge.show', ['id' => $item->id]) }}" title="Sửa">
                                                    <i class="fa fa-pencil fa-fw"></i> Chi tiết
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('member.recharge', $data->id) }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nạp thêm tiền vào tài khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nhập số tiền</label>
                            <input type="number" value="" name="amount" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng lại</button>
                        <button type="submit" class="btn btn-primary">Nạp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalEdit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('member.update', $data->id) }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin tài khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tài khoản</label>
                            <input type="text" class="form-control" value="{{ $data->user_name }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">Họ</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $data->first_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $data->last_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ $data->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" value="{{ $data->phone }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <select name="status" class="form-control">
                                @foreach(\App\Models\Member::getSatus() as $key => $item)
                                    <option value="{{ $key }}" {{ $key == $data->status ? 'selected' : null }}>{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">Mật khẩu (Bỏ trống nếu không muốn cập nhật)</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop