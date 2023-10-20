@extends('Admin.Layout.master')

@section('link')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}">


@endsection
@section('title')
    @if ($page == 'addVoucher')
        Thêm mã giảm giá
    @else
        Sửa mã giảm giá
    @endif
@endsection
{{-- endtitle --}}

@section('main')
    <div class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                <form action="{{ $page == 'addVoucher' ? route('addVoucher') : route('editFormVoucher' , $data->slug ) }}" enctype="multipart/form-data" method="post" class="mx-5 pt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên mã giảm giá</label>
                        <input type="text" class="form-control" value="{{ $page == 'addVoucher' ? old('name') : $data->name }}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <x-admin.user.images></x-admin.user.images>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mã code</label>
                        <input type="text" class="form-control" value="{{ $page == 'addVoucher' ? old('code') : $data->code }}" name="code" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('code')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="textAreaExample6">Điều kiện giảm</label>
                        <select class="form-select" name="condition" aria-label="Default select example">
                            <option value="1"
                            @if ($page == 'addVoucher')
                                {{ old('condition') == 1 ? 'selected' : '' }}
                                    @else
                                {{ $data['condition'] ?? '' == 1 ? 'selected' : '' }}
                                    @endif>
                                Giảm khi mua combo 3 món ăn trưa
                            </option>
                            <option value="2"
                            @if ($page == 'addVoucher')
                                {{ old('condition') == 2 ? 'selected' : '' }}
                                    @else
                                {{ $data['condition'] ?? '' == 2 ? 'selected' : '' }}
                                    @endif>
                                Giảm khi lần đầu mua ở shop
                            </option>
                            <option value="3"
                            @if ($page == 'addVoucher')
                                {{ old('condition') == 3 ? 'selected' : '' }}
                                    @else
                                {{ $data['condition'] ?? '' == 3 ? 'selected' : '' }}
                                    @endif>
                                Giảm khi mua full 5 món ăn trưa
                            </option>
                            <option value="4"
                            @if ($page == 'addVoucher')
                                {{ old('condition') == 4 ? 'selected' : '' }}
                                    @else
                                {{ $data['condition'] ?? '' == 4 ? 'selected' : '' }}
                                    @endif>
                                Giảm cho khách hàng mua nhiều nhất ở shop
                            </option>
                        </select>
                        @error('condition')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số tiền được giảm</label>
                        <input type="text" class="form-control" value="{{ $page == 'addVoucher' ? old('discount') : $data->discount }}" name="discount" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('discount')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngày hết hạn</label>
                        <input type="date" class="form-control" value="{{ $page == 'addVoucher' ? old('expiration_date') : $data->expiration_date }}" name="expiration_date" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('expiration_date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="textAreaExample6">Nội dung (Nếu Có)</label>
                        <textarea class="form-control" name="content" id="textAreaExample6" rows="3">{{ $page == 'addVoucher' ? old('content') : $data->content }}</textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        @if ($page == 'addVoucher')
                            Thêm mã giảm giá
                        @else
                            Sửa mã giảm giá
                        @endif
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 30px;"></div>
@endsection

        {{-- javascript --}}
        @section('js')
           {{--            --}}
            <script>
                document.getElementById("imageUpload").addEventListener("change", function (event) {
                    var imagePreview = document.getElementById("imagePreview");
                    imagePreview.innerHTML = "";

                    var files = event.target.files;
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            var img = document.createElement("img");
                            img.setAttribute("src", e.target.result);
                            img.setAttribute("class", "img-thumbnail mt-3 thumbnail-image");
                            imagePreview.appendChild(img);
                        };

                        reader.readAsDataURL(file);
                    }
                });
            </script>

            <script src="../../plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Select2 -->
            <script src="../../plugins/select2/js/select2.full.min.js"></script>
            <!-- Bootstrap4 Duallistbox -->
            <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
            <!-- InputMask -->
            <script src="../../plugins/moment/moment.min.js"></script>
            <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
            <!-- date-range-picker -->
            <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
            <!-- bootstrap color picker -->
            <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- BS-Stepper -->
            <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
            <!-- dropzonejs -->
            <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../../dist/js/demo.js"></script>
            <!-- Page specific script -->
            <script>
                $(function () {
                    //Initialize Select2 Elements
                    $('.select2').select2()

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    })

                    //Datemask dd/mm/yyyy
                    $('#datemask').inputmask('dd/mm/yyyy', {
                        'placeholder': 'dd/mm/yyyy'
                    })
                    //Datemask2 mm/dd/yyyy
                    $('#datemask2').inputmask('mm/dd/yyyy', {
                        'placeholder': 'mm/dd/yyyy'
                    })
                    //Money Euro
                    $('[data-mask]').inputmask()

                    //Date picker
                    $('#reservationdate').datetimepicker({
                        format: 'L'
                    });

                    //Date and time picker
                    $('#reservationdatetime').datetimepicker({
                        icons: {
                            time: 'far fa-clock'
                        }
                    });

                    //Date range picker
                    $('#reservation').daterangepicker()
                    //Date range picker with time picker
                    $('#reservationtime').daterangepicker({
                        timePicker: true,
                        timePickerIncrement: 30,
                        locale: {
                            format: 'MM/DD/YYYY hh:mm A'
                        }
                    })
                    //Date range as a button
                    $('#daterange-btn').daterangepicker({
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                                    'month').endOf('month')]
                            },
                            startDate: moment().subtract(29, 'days'),
                            endDate: moment()
                        },
                        function (start, end) {
                            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                                'MMMM D, YYYY'))
                        }
                    )

                    //Timepicker
                    $('#timepicker').datetimepicker({
                        format: 'LT'
                    })

                    //Bootstrap Duallistbox
                    $('.duallistbox').bootstrapDualListbox()

                    //Colorpicker
                    $('.my-colorpicker1').colorpicker()
                    //color picker with addon
                    $('.my-colorpicker2').colorpicker()

                    $('.my-colorpicker2').on('colorpickerChange', function (event) {
                        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                    })
                })
                // BS-Stepper Init
                document.addEventListener('DOMContentLoaded', function () {
                    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
                })

                // DropzoneJS Demo Code Start
                Dropzone.autoDiscover = false

                // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
                var previewNode = document.querySelector("#template")
                previewNode.id = ""
                var previewTemplate = previewNode.parentNode.innerHTML
                previewNode.parentNode.removeChild(previewNode)

                var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                    url: "/target-url", // Set the url
                    thumbnailWidth: 80,
                    thumbnailHeight: 80,
                    parallelUploads: 20,
                    previewTemplate: previewTemplate,
                    autoQueue: false, // Make sure the files aren't queued until manually added
                    previewsContainer: "#previews", // Define the container to display the previews
                    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
                })

                myDropzone.on("addedfile", function (file) {
                    // Hookup the start button
                    file.previewElement.querySelector(".start").onclick = function () {
                        myDropzone.enqueueFile(file)
                    }
                })

                // Update the total progress bar
                myDropzone.on("totaluploadprogress", function (progress) {
                    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
                })

                myDropzone.on("sending", function (file) {
                    // Show the total progress bar when upload starts
                    document.querySelector("#total-progress").style.opacity = "1"
                    // And disable the start button
                    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
                })

                // Hide the total progress bar when nothing's uploading anymore
                myDropzone.on("queuecomplete", function (progress) {
                    document.querySelector("#total-progress").style.opacity = "0"
                })

                // Setup the buttons for all transfers
                // The "add files" button doesn't need to be setup because the config
                // `clickable` has already been specified.
                document.querySelector("#actions .start").onclick = function () {
                    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
                }
                document.querySelector("#actions .cancel").onclick = function () {
                    myDropzone.removeAllFiles(true)
                }
                // DropzoneJS Demo Code End
            </script>
@endsection
{{-- endjavascript --}}


{{-- main page --}}

