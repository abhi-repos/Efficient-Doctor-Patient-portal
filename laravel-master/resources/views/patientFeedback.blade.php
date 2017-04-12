 @extends('patient_layout')
@section('content2')

<form action="/add_feedback" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }} 
    </br>
    </br>

    <p>Select Doctor :
    <select name="doctor_name" class="button1"  id="feedback" >
     @foreach($name as $value)
                      
        <option value={{$value}}>{{$value}}</option>
        @endforeach
    </select></p>
</br>
 <textarea rows="8" cols="100" name="content" placeholder="Write Review on Doctor">

</textarea> 

 </br>
</br>

                        <input type="submit" name="Add new Problem">
                        <input type="reset" name="Reset">
                   </br>

        </form>

@stop