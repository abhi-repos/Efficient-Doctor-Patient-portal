@extends('admin_layout')
@section('content2')
 <div class="table-responsive">
        <table class="table" border="0" align="center" style="max-width: 65%;margin: 2%" >
       
      
        <thead class="thead-inverse">
        <tr><th>FeedbackId</th><th>DoctorName</th><th>Feedback</th><th>Time</th></tr></thead>
        <tbody>
          
                @foreach($name as $value)
                      
     <tr>
     <td>
     {{$value->id}}</td><td>{{$value->doctorName}}</td><td>{{$value->content}}</td><td>{{$value->time}}
     </td>

     </tr>
          @endforeach
        </tbody>
        </table>
            </div>
            @stop