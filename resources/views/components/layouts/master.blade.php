<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $title }} </title>
    <title>  </title>

    <!-- Style css -->
    <link href="{{asset('master/css/style.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('master/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet"> --}}
    <script src="https://kit.fontawesome.com/60cd01b8da.js" crossorigin="anonymous"></script>

    {{-- Multilanguage --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @stack('styles')

</head>

<body>
    <div id="main-wrapper">

        <x-partials.leftheader/>
        <x-partials.chatbox/>
        <x-partials.rightheader/>
        <x-partials.leftbar/>

        <div class="content-body">
			<div class="container-fluid">

                <h1 class="text-center mt-5"> {{ __('messages.title') }} </h1>
				{{$slot}}

			</div>
        </div>

        <div class="footer">
            <div class="copyright">
               <p>Copyright © Developed by <a href="#" target="_blank">A & A Consulting Ltd. </a> {{date('Y')}}</p>
            </div>
        </div>
	</div>



    <!-- Required vendors -->
    <script src="{{asset('master/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('master/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<!-- Dashboard 1 -->

	<!-- Vectormap -->
    <script src="{{asset('master/js/custom.js')}}"></script>
	<script src="{{asset('master/js/deznav-init.js')}}"></script>
	<script src="{{asset('master/js/demo.js')}}"></script>
    {{-- <script src="{{asset('master/js/styleSwitcher.js')}}"></script> --}}

    {{-- Multilanguage --}}

    <script type="text/javascript">
        var url = "{{ route('change.lang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>


    @stack('scripts')

</body>

</html>
