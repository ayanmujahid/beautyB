{{-- -----------------------------------Links to Change----------------------------------- --}}

<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/js/jquery.nivo.slider.pack.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>



{{-- -----------------------------------Links to Change----------------------------------- --}}


<script src="{{ asset('dash/js/jquery.toast.js') }}"></script>
@if (Auth::guard('admin'))
    <script src="{{ asset('admin/js/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/content-management.js') }}"></script>
@endif





