<html lang="en">
<head>
<meta charset="UTF-8">
<title>Learning Laravel Website </title>
<script type="text/javascript" src="{{ URL::asset('js/neddna.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/neddna.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/docs.css') }}">
<style type="text/css">
	#op_background{ /* For IE8 and earlier */
    
    background-image:url('{{ asset('images/abcpng') }}');
    opacity: 0.9;
    
    
}
</style>
@yield('content1')
</head>
<body id="op_background">
<b>
 <ul class="nav nav-tabs" >
  <li class="active"><a href="{{ url('/doctor_layout') }}">HOME</a></li>
  <li><a href="{{ url('/View_profile') }}">PROFILE</a></li>
  <li><a href="{{ url('/view_doctor_Appointment') }}">APPOINTMENT</a></li>
  <li><a href="{{ url('/login') }}">LOGOUT</a></li>
</ul>
</b>
@yield('content2');
</body>
</html>