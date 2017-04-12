@extends('patient_layout')
@section('content1')
       <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
       <script type="text/javascript" src="{{ URL::asset('js/date/jquery-1.8.3.min.js') }}"></script>
       <script type="text/javascript" src="{{ URL::asset('js/date/bootstrap-datetimepicker.js') }}">  
       </script>
       <script type="text/javascript" src="{{ URL::asset('js/date/bootstrap-datetimepicker.fr.js') }}">
       </script>
 
@stop
@section('content2')
    <div class="form" style="max-width: 50%;margin: 10%">
            <form action="do_add.php" method="post" enctype="multipart/form-data">
                {{ csrf_field() }} 
                  <b><i>Enter Event Name</i></b>
                   <input type="text"  name="prblm_name" id="prblm_name">
                    </br> 
                    </br>
                    <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                </br>
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> <div class="input-group date form_datetime col-md-5" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>             
            </br>


                        <input type="submit" name="Add new Problem">
                        <input type="reset" name="Reset">
                   </br>

        </form>
        </div>
        <script type="text/javascript">

    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    
    
</script>

        @stop