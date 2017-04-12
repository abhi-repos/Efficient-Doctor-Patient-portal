@extends('patient_layout')
@section('content2')


<div class="form" style="max-width: 50%;margin: 5%">
           <div class="form" style="max-width: 50%;margin: 5%">
            <form action="/check_donor" method="post" enctype="multipart/form-data">
               {{ csrf_field() }} 
                    
     <p>Select Organ Group :                
  <select name="Organ" class="button1"  id="Organ" >
    <option value="Eye">Eye</option>
<option value="Kidney">Kidney</option>
<option value="Blood">Blood</option>
<option value="Body">Body</option>


</select></p>
</br>
        <p>Select Blood Group :

    <select name="Blood" class="button1"  id="Blood" >
    <option value="A-">A-</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="O-">O-</option>

</select></p></br>   <input type="submit" name="add_patient">
                        
                   </br>
        </form>
    @stop