
@extends('admin.layout.index')
<style>
    .errors {
        border: 1px solid red!important;
    }
</style>
@section('content')
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <div class="search-box">
        <div class="row mt-4">
            <div class="col-md-12">
                <form method="POST" action="{{route('addCategory')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-md-6 pull-left">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Tên danh mục</label>
                            <input name="categoryName" type="text" class="form-control {{ $errors->has('categoryName') ? 'errors' : '' }}" id="formGroupExampleInput2" placeholder="Tên danh mục">
                        </div>
                    </div>
                    <div class="col-md-6 pull-left">
                        <div class="form-group">
                            <select name="status" class="form-control form-control-category">
                                <option>Trạng thái</option>
                                <option value="1">Hoạt động</option>
                                <option value="2">Bị cấm</option>
                            </select>
                        </div>
                        <div class="search-button">
                            <button class="btn btn-primary">Thêm</button>
                            <button class="btn btn-danger">Xóa bỏ</button>
                        </div>

                    </div>

            </div>
            </form>
        </div>
    </div><!--end search box-->




@endsection()
