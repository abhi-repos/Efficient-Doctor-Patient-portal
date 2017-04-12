@extends('doctor_layout')
@section('content1')
<style type="text/css">

.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px ;
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


</style>
@stop
@section('content2')
@foreach($users as $value)	
	<div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
             <div class="panel-heading">
                <h3 class="panel-title">{{ $value->username}}</h3>
            </div>
         <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                                
            <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>{{ $value->speciality }}</td>
                      </tr>
                     
                     <tr>
                        <td>Password:</td>
                        <td>{{ $value->password }}</td>
                      </tr>

                        <tr>
                        <td>ContactNumber</td>
                        <td>{{  $value->contact_number }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{ $value->email }}</td>
                      </tr>

                      <tr>
                      <td>Qualification</td>
                        <td>{{ $value->qualification }}</td>
                      </tr>

                       <tr>
                      <td>Address</td>
                        <td>{{ $value->address }}</td>
                      </tr>

                        <tr>
                        <td>Fees</td>
                        <td>Rs.{{ $value->Fees}}  </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>




   @endforeach

                  
                  
                  <a href='/doctorUpdate/{{ $value->doctor_id}}' class="btn btn-primary">Edit</a>
                </div>
              </div>
            </div>
   
            
          </div>
        </div>
      </div>
    </div>
@stop