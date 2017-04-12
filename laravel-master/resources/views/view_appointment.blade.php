
@extends('patient_layout')
@section('content2')
 <div class="table-responsive">
        <table class="table" border="0" align="center" style="max-width: 65%;margin: 2%">
        <col width="20%">
      
        <thead class="thead-inverse">
        <tr><th>AppointmentId</th><th>StartTime</th><th>EndTime</th><th>DoctorName</th><th>Delete</th></tr></thead>
        <tbody>
          
                @foreach($appoint as $value)
                      
     <tr>
     <td>{{$value->appointment_id}}</td><td>{{$value->start_time}}</td><td>{{$value->end_time}}</td><td>{{$value->doctor_id}}</td><td> <a href='delete/{{ $value->appointment_id}}'> Delete</a></td>

     </tr>
          @endforeach
        </tbody>
        </table>
            </div>
            @stop
