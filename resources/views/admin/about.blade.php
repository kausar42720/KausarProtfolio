@extends('admin.home-index')
@section('title')
   Kausar Hosen About
@endsection
@section('content')
<div class="" style="margin-top: 15px;">
    <h3 class="font-weight-bold text-danger text-center text-uppercase"> This is Kausar hosen about page </h3>
</div> <br>
<hr>


<div class="row">

    <div class="col-md-12">
        <div class="">
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">
           <i class="fa fa-plus" style="font-size:1rem;"></i> Add data
            </button>

            <!-- Central Modal Small -->
            <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-lg" role="document">


                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="myModalLabel">Add about data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('aboutPostData') }}">
                        @csrf
                        <label class=" text-uppercase" for="first_id" style="color:black;">First Name:</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" style="background-color:transparent; color:#000;">
                        
                        <label class=" text-uppercase" for="last_id" style="color:black;">Last Name:</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" style="background-color:transparent; color:#000;">

                        <label class=" text-uppercase" for="full_address" style="color:black;">Full address :</label>
                        <input class="form-control" type="text" name="full_address" id="full_address" style="background-color:transparent; color:#000;">
                        
                        <label class=" text-uppercase" for="contact_no" style="color:black;">Contact No</label>
                        <input class="form-control" type="text" name="contact_no" id="contact_no" style="background-color:transparent; color:#000;">

                        <label class=" text-uppercase" for="email_no" style="color:black;">Email:</label>
                        
                        <input class="form-control" type="text" name="email_no" id="email_no" style="background-color:transparent; color:#000;">

                        <label class=" text-uppercase" for="my-textarea" style="color:black;">About Details</label>
                        <textarea id="my-textarea" class="form-control" name="details" id="details" rows="3" style="background-color:transparent; color:#000;"></textarea>

                        <label class=" text-uppercase" for="social_media_link" style="color:black;">Social Media link</label>
                        <input class="form-control" type="text" name="social_media_links" id="social_media_links" style="background-color:transparent; color:#000;">
                        <div class="form-group">
                        </div>
                        <a id="saveAboutData" class="btn btn-primary btn-block">Submit</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
                </div>
            </div>
            </div>
            <!-- Central Modal Small -->
        </div>
    </div>


    <script>
    $(document).on('click', '#saveAboutData', function () {
            

                var frist_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var full_address = $('#full_address').val();
                var contact_no = $('#contact_no').val();
                var email_no = $('#email_no').val();
                var details = $('#details').val();
                var social_media_link = $('#social_media_links').val();
                
                $.ajax({
                    type:"get",
                    url:"{{ route('aboutPostData') }}",
                    headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')},
                    data: {
                       
                        'first_name' : first_name,
                        'last_name' : last_name,
                        'full_address' : full_address,
                        'contact_no' : contact_no,
                        'email_no' : email_no,
                        'details' : details,
                        'social_media_link' : social_media_link
                    },
                    success:function(data){
                        console.log(data);
                        alert('success-aboutPost data');
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
    });

</script>



    <div class="col-md-12">
       
        <table class="table table-light table-responsive-md">
            <thead class="thead-light">
                <tr >
                    <th scope="row"  class="text-light">Id</th>
                    <th scope="row"  class="text-light">First Name</th>
                    <th scope="row"  class="text-light">Last Name</th>
                    <th scope="row"  class="text-light">Full Address</th>
                    <th scope="row"  class="text-light">Contact No </th>
                    <th scope="row"  class="text-light">Email no</th>
                    <th scope="row"  class="text-light">Social Media Links</th>
                    <th scope="row"  class="text-light"># Action</th>
                    <!-- <th scope="row"  class="text-light"><a href="" class="btn btn-danger  btn-sm waves-effect">Delete</a></th> -->
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td class="text-light font-weight-bold">{{$row->about_id}}</td>
                    <td class="text-light font-weight-bold">{{$row->first_name}}</td>
                    <td class="text-light font-weight-bold">{{$row->last_name}}</td>
                    <td class="text-light font-weight-bold">{{$row->full_address}}</td>
                    <td class="text-light font-weight-bold">{{$row->contact_no}}</td>
                    <td class="text-light font-weight-bold">{{$row->email_no}}</td>
                    <td class="text-light font-weight-bold">{{$row->social_media_links}}</td>
                    <td class="text-light font-weight-bold">
                        <div  class="row">
                            <div class="col-md-4"><a href="" class="btn btn-primary btn-sm  waves-effect">view</a></div>
                            <div class="col-md-4"><a href="" class="btn btn-primary btn-sm  waves-effect">Edit</a></div>
                            <div class="col-md-4"><a href="" class="btn btn-danger  btn-sm waves-effect p-0">Delete</a></div>
                        </div>
                    </td>
                   
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-md-12" id="spinnerborder">




  
    </div>

</div>



<!-- 
<script>
        $(document).ready(function(){
            $(".successMsg").hide();
            $("#postFormData").on('submit', function(e){  

                e.preventDefault();

                // var frist_name = $('#first_name').val();
                // var last_name = $('#last_name').val();
                // var full_address = $('#full_address').val();
                // var contact_no = $('#contact_no').val();
                // var email_no = $('#email_no').val();
                // var details = $('#details').val();
                // var social_media_link = $('#social_media_links').val();
                
                $.ajax({
                    type:"POST",
                    url:"{{ route('aboutPostData') }}",
                    headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')},
                    data: $("#postFormData").serialize(),
                    success:function(data){
                        var html='';
                        html+='<h3 class="" style="color:#5dea5f;">Data successfully Sended into the database...</h3>';
                        $(".successMsg").html(html).show(1000);
                        console.log(data);
                        // alert('success-aboutPost data');
                        location.reload();

                    },
                    error: function(data){
                        console.log(data);
                        alert('Sorry!! data not saved');

                    }
                });
            });    
        });

</script> -->
@endsection