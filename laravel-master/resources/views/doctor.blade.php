@extends('doctor_layout')
@section('content1')

<style type="text/css">
	#op_background{ /* For IE8 and earlier */
    
    background-image:url('{{ asset('images/abc.png') }}');
    opacity: 1;
    background-size: 100%;
    background-repeat: no-repeat;
    
}
</style>
@stop
@section('content2')
</body>

<body id="op_background">
<h1><b>Article<b></h1>
@foreach($article as $value)
<h2><b><p>{{$value->department}} : {{$value->topic}}</b></p></h2>
<h3><p>{{$value->content}}</p></h3>
<p>Dated:{{$value->time}}</p>

</br>
@endforeach


@stop