<script src="{{asset('assets/admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/node_modules/pace-progress/pace.min.js')}}"></script>
<script src="{{asset('assets/admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin/node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
<!-- Plugins and scripts required by this view-->
<script src="{{asset('assets/admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script
    src="{{asset('assets/admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}">
</script>
<script src="{{asset('assets/admin/js/main.js')}}"></script>

<script src="{{asset('assets/admin/vendors/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/popper.js/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/pace-progress/js/pace.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/@coreui/coreui-pro/js/coreui.min.js')}}"></script>

<script src="{{asset('assets/admin/js/jquery.min.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function () { // Ketika halaman sudah diload dan siap    
        $("#btn-tambah-form").click(function () { // Ketika tombol Tambah Data Form di klik      
            var jumlah = parseInt($("#jumlah-form")
                .val());    
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

@yield('scripts')