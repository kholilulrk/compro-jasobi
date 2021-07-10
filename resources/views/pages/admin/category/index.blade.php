@extends('layouts.admin.master-admin')
@section('content')
<div id="ui-view">
    <div>
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i> Categorys
                    <div class="pull-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal-tambah">
                            Create Category
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-6 col-md-2">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show <select name="DataTables_Table_0_length"
                                            aria-controls="DataTables_Table_0"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm"
                                            placeholder="" aria-controls="DataTables_Table_0"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered datatable dataTable no-footer"
                                    id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                                    style="border-collapse: collapse !important">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                Nama</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 185.6px;"
                                                aria-label="Actions: activate to sort column ascending">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_category as $data)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                {{ $data->nama }}
                                            </td>
                                            <td>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#Modal-{{ $data->id }}" class="btn btn-success">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#Modal-update-{{ $data->id }}" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <a>
                                                    <a class="btn btn-danger"
                                                        onclick="confirm('Yakin Data Akan Dihapus ?')"
                                                        href="/admin/category/{{ $data->id }}/delete">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </a>
                                                <a class="btn btn-warning" href="#">
                                                    Tambah Sub Kategori
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $data_category->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>
</div>



    {{-- =======================Modal Lihat Category --}}
@foreach ($data_category as $data)
<div class="modal fade" id="Modal-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action=" {{ route('admin.category.store') }} " method="POST">
                <div class="modal-body">
                    <table class="table table-striped table-bordered datatable dataTable no-footer"
                                    id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                                    style="border-collapse: collapse !important">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 214.367px;" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending">
                                                Sub Category
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->children as $data_children)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                {{ $data_children->nama}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach



{{-- =======================Modal Tambah Category --}}

<div class="modal fade" id="Modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Categorys</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/category/store" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input class="form-control" id="" type="text" name="nama[]" placeholder="" autocomplete="off" required>
                    </div>
                    <div id="insert-form"></div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-7">
                        <button type="button" class="btn btn-success" id="btn-tambah-form">
                            +
                        </button>
                        <button type="button" class="btn btn-success" id="btn-reset-form">
                            reset
                        </button>
                    </div>
                    <div class="col-md-5">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
            <input type="hidden" id="jumlah-form" value="1">
        </div>
    </div>



    <script>
		$(document).ready(function () { // Ketika halaman sudah diload dan siap    
			$("#btn-tambah-form").click(function () { // Ketika tombol Tambah Data Form di klik      
				var jumlah = parseInt($("#jumlah-form")
					.val()); // Ambil jumlah data form pada textbox jumlah-form      
				//   var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya  

				// Kita akan menambahkan form dengan menggunakan append      
				// pada sebuah tag div yg kita beri id insert-form     
				$("#insert-form").append(
					"<div class='form-group'>" +
					"<label for='exampleInputEmail1'>Category Name</label>" +
					"<input class='form-control' id='' type='text' name='nama[]' placeholder='' autocomplete='off' required>" +
					"</div>"
				);

				$("#jumlah-form").val(
					nextform); // Ubah value textbox jumlah-form dengan variabel nextform    
			});

			// Buat fungsi untuk mereset form ke semula
			$("#btn-reset-form").click(function () {
				$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
				$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
			});
		});

	</script>
    @endsection
