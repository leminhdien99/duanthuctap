@extends('Admin.Layout.master')


{{-- css --}}
@push('link')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
@endpush
@section('title')
   Quản lý danh mục
@endsection


@section('main')
    <div class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <x-admin.buttom.add router="addCategory" name="Thêm danh mục"></x-admin.buttom.add>

                        <table id="example1" class="table table-bordered table-striped">
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>@endif
                            <thead>
                            <tr>

                                <th>Tên danh mục</th>
                                <th>Slug</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Trạng thái</th>
                                <th>Nghiệp vụ</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($query as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <a href="{{route('StatusCategory', $item->id)}}"
                                       class="btn btn-sm btn-{{$item->status ? 'success':'danger'}}">
                                        {{$item->status ? 'Hiện':'Ẩn'}}
                                    </a>
                                </td>
                                <td><a href="{{route('editCategory',$item->slug)}}">Sửa</a> /
                                    <a href="{{route('deleteCategory',$item->slug)}}">Xóa</a></td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                        <div class="mt-3">{{ $query->links() }}</div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
@endpush
<!-- HTML !-->

<style>
	/* CSS */
	.button-86 {
		all: unset;
		width: 100px;
		height: 30px;
		font-size: 16px;
		background: transparent;
		border: none;
		position: relative;
		color: #f0f0f0;
		cursor: pointer;
		z-index: 1;
		padding: 10px 20px;
		display: flex;
		align-items: center;
		justify-content: center;
		white-space: nowrap;
		user-select: none;
		-webkit-user-select: none;
		touch-action: manipulation;
	}

	.button-86::after,
	.button-86::before {
		content: '';
		position: absolute;
		bottom: 0;
		right: 0;
		z-index: -99999;
		transition: all .4s;
	}

	.button-86::before {
		transform: translate(0%, 0%);
		width: 100%;
		height: 100%;
		background: #28282d;
		border-radius: 10px;
	}

	.button-86::after {
		transform: translate(10px, 10px);
		width: 35px;
		height: 35px;
		background: #ffffff15;
		backdrop-filter: blur(5px);
		-webkit-backdrop-filter: blur(5px);
		border-radius: 50px;
	}

	.button-86:hover::before {
		transform: translate(5%, 20%);
		width: 110%;
		height: 110%;
	}

	.button-86:hover::after {
		border-radius: 10px;
		transform: translate(0, 0);
		width: 100%;
		height: 100%;
	}

	.button-86:active::after {
		transition: 0s;
		transform: translate(0, 5%);
	}
</style>