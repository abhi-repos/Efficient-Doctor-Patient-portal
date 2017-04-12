@extends('admin_layout')
@section('content2')

<form action="/add_article" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }} 
    

    
    <p>Select Department :
    <select name="department" class="button1"  id="speciality" >
        <option value="Cardiology">Cardiology</option>
        <option value="Dentistry">Dentistry</option>
        <option value="Neurology">Neurology</option>
        <option value="Urology">Urology</option>
        <option value="Surgery">Surgery</option>
        <option value="Dermatalogy">Dermatalogy</option>
        <option value="Gastrology">Gastrology</option>
        <option value="Bone">Bone</option>

    </select></p>
</br>
<p>Article's Topic</p>
 <textarea rows="1" cols="20" name="topic" placeholder="Article's Topic">

</textarea> 
</br>
 </br>

<p>Write Description on the Article</p>
 <textarea rows="8" cols="100" name="content" placeholder="Write Description on the Article">

</textarea> 
</br>
</br>
                        <input type="submit" name="Add new Problem">
                        <input type="reset" name="Reset">
                   </br>

        </form>

@stop