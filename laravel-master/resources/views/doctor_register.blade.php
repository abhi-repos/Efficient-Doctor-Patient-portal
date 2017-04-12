@extends('admin_layout')
@section('content2')

<div class="form" style="max-width: 50%;margin: 5%">
           <div class="form" style="max-width: 50%;margin: 5%">
            <form action="/add_doctor" method="post" enctype="multipart/form-data">
               {{ csrf_field() }} 
                    
                  <input type="text" name="username" id="username" placeholder="Username">
                    </br> 
                    </br>
                   
                  <input type="text" name="contact_number" id="contact_number" placeholder="Contact_number">
                    </br> 
                    </br>           
                   
                
                  <textarea name="qualification" rows=1 cols=60 id="qualification"
                   placeholder="Qualification"></textarea>
                  <br/>
                  </br>

                  <textarea name="email" rows=1 cols=60 id="email" placeholder="Email"></textarea>
                  <br/>
                  </br>
                  <textarea name="address" rows=3 cols=60 id="address" placeholder="Address" ></textarea>
                  <br/>
                  </br>
                    <p>Speciality
                  <select name="speciality" class="button1"  id="speciality" >
                        <option value="Cardiology">Cardiology</option>
                        <option value="Dentistr">Dentistry</option>
                        <option value="Neurology">Neurology</option> 
                        <option value="Urology">Urology</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Dermatalogy">Dermatalogy</option>
                        <option value="Gastrology">Gastrology</option>  
                        <option value="Bone">Bone</option>

                </select></p>
                </br>
 <input type="text" name="Fees" id="fee" placeholder="Fees-RS.100">
                    </br> 
                    </br>
                </br>
                  
                   
                        <input type="submit" name="add_doctor">
                        <input type="reset" name="Reset">
                   </br>
        </form>
    @stop