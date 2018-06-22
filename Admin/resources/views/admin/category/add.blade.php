
@extends('admin.layout.index')

@section('content')
    <div class="search-box">
        <div class="row mt-4">
            <div class="col-md-12">
                <form>
                    <div class="col-md-6 pull-left">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Tên danh mục</label>
                            <input name="categoryName" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tên danh mục">
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




@endsection()
