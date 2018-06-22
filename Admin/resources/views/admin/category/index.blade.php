
@extends('admin.layout.index')

@section('content')
    <div class="search-box">
        <div class="row mt-4">
            <div class="col-md-12">
                <form>
                    <div class="col-md-6 pull-left">
                        <div class="form-group">
                            <label for="formGroupExampleInput">ID</label>
                            <input name="ID" type="text" class="form-control" id="formGroupExampleInput" placeholder="ID">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Tên danh mục</label>
                            <input name="categoryName" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <div class="date-picker-title">
                                <label for="formGroupExampleInput2">Ngày tạo</label>
                            </div>
                            <div class="date-picker-input-1" style="width: 45%;float: left;">
                                <input name="dateFrom" type="text" class="form-control"  placeholder="" id="datepicker">
                            </div>
                            <div class="date-picker-input-2" style="width: 45%;float: left">
                                <input name="dateTo" type="text" class="form-control"  placeholder="" id="datepicker_2">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 pull-left">
                        <div class="form-group">
                            <select class="form-control form-control-category">
                                <option>Trạng thái</option>
                                <option>Hoạt động</option>
                                <option>Bị cấm</option>
                            </select>
                        </div>
                        <div class="search-button">
                            <button class="btn btn-primary"> Tìm kiếm</button>
                            <button class="btn btn-danger"> Xóa bỏ</button>
                        </div>

                    </div>

            </div>
            </form>
        </div>
    </div><!--end search box-->
    <div class="row list ml-0 mr-0">
        <div class="col-md-12">
            <div class="col-md-4">
                <a class="btn btn-primary" href="{{route('addCategory')}}">Thêm mới</a>
            </div>
            <div class="col-md-8">
                <ul class="list-inline pull-right">
                    <li class="list-inline" style="margin-top: 7px">Tổng số 20 người</li>
                    <li class="list-inline">
                        <select class="form-control">
                            <option>10</option>
                            <option>20</option>
                        </select>
                    </li>
                    <li class="list-inline"> <nav aria-label="..." class="pull-right">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </li>

                </ul>
            </div>


        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Danh Mục</th>
                    <th scope="col">Ngày Tạo</th>
                    <th scope="col">Người Tạo</th>
                    <th scope="col">Ngày Chỉnh Sửa</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Thao tác</th>


                </tr>
                </thead>
                <tbody>
                @for($i = 1;$i<10;$i++)
                    <tr>
                        <td>CT-001</th>
                        <td>Áo Câu Lạc Bộ</th>
                        <td>12/06/2018 14:09:06</td>
                        <td>Trần Nhân Sáng</td>
                        <td>12/06/2018 14:09:06</td>
                        <td>Active</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline"><button class="btn btn-primary">Sửa</button></li>
                                <li class="list-inline"><button class="btn btn-danger"  data-toggle="modal" data-target="#exampleModalCenter">Xóa</button></li>
                            </ul>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận xóa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn xóa Danh mục này
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-primary">Xóa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection()
