@extends('admin_layout')
@section('content1')
<style type="text/css">
/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      width:10%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    </style>
@stop
@section('content2')

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
<ul class="nav nav-pills nav-stacked">
<li><a href="{{ url('/table_doctor') }}">Doctor</a></li>
   <li><a href="{{ url('/table') }}">Patient</a></li>

</ul>
</div>
<div class="col-sm-9">




<div class="table-responsive">
        <table class="table" border="0" align="center">
            <col width="10%">
            <col width="10%">
            <thead class="thead-inverse" style="color: black">
<tr>
<th>Doctor_id </th>
<th> Username </th>
<th> Password </th>
<th> Email </th>
<th> Contact_Number </th>
<th> Address </th>
<th>Qualification</th>
<th>Speciality</th>
</tr>
</thead>
<tbody>
@foreach($doctor as $value)
 <tr> 
 <td> {{ $value-> doctor_id}} </td> 
 <td> {{ $value-> username}} </td> 
 <td> {{ $value-> password}}  </td>
 <td> {{ $value-> email}}  </td> 
 <td> {{ $value-> contact_number}}  </td> 
 <td> {{ $value-> address}} </td> 
 <td>{{ $value->qualification}}</td>
 <td> {{ $value->speciality }}
 </tr>
 @endforeach

</tbody>
</div>
     
</table>

           			 </div>
   			 </div>
		 </div>
    </div>
 </div>
@stop