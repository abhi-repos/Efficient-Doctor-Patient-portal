@extends('patient_layout')
@section('content2')
 
  <table id="mytable" class="table table-bordred table-striped" style="max-width: 65%;margin: 2%">                      <thead>
        <tr><th>DONOR</th><th>EMAIL</th><th>CONTACT</th><th>ADDRESS</th><th>Apply</th></thead>
        <tbody>
          
                @foreach($users as $value)
                      
     <tr>
     <td>{{$value->username}}</td><td>{{$value->email}}</td><td>{{$value->contact_number}}</td><td>{{$value->address}}</td><td> <a href='apply/{{ $value->id}}'> apply</a></td>
     </tr>
          @endforeach
        </tbody>
        
</table>
            @stop
