@extends('doctor_layout')
@section('content2')

@foreach($users as $value)
</br>
<p><b>AppointmentId : </b>{{ $value->appointment_id}}</p>
<p><b>PatientName : </b>{{ $value->patient_name}}</p>
<p><b>DoctorName : </b>{{ $value->doctor_id}}</p>
 @endforeach


<form action="/updateTreatment/{{ $value->appointment_id}}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }} 
    
 </br>
<p>Write Treatment Details</p>
<textarea rows="8" cols="100" name="content" placeholder="Write Treatment Details">
</textarea> 
</br>
</br>
                        <input type="submit" name="Add new Problem">
                        <input type="reset" name="Reset">
                   </br>

        </form>

@stop