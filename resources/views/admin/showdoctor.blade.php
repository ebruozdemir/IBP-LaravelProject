<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

<div  style="padding-top:100px;">

 </div>
<table>
         <tr style="background-color:rgb(120, 154, 255);">
             <th style="padding:15px;  font-size:20px;  color:white;">Name</th>
             <th style="padding:15px;  font-size:20px;  color:white;">Email</th>
             <th style="padding:15px;  font-size:20px;  color:white;">Phone</th>
             <th style="padding:15px;  font-size:20px;  color:white;">Speciality</th>
             <th style="padding:15px;  font-size:20px;  color:white;">Room</th>
             <th style="padding:15px;  font-size:20px;  color:white;">Image</th>
             <th style="padding:15px;  font-size:20px;  color:white;">Update</th>
             <th style="padding:15px;  font-size:20px;  color:white;">Delete</th>
          </tr>

         @foreach($data as $doctors)
          <tr align="center" style="background-color:white;">
             <td style="color:black;">{{$doctors->name}}</td>
             <td style="color:black;">{{$doctors->email}}</td>
             <td style="color:black;">{{$doctors->phone}}</td>
             <td style="color:black;">{{$doctors->speciality}}</td>
             <td style="color:black;">{{$doctors->room}}</td>
             <td style="color:black;"><img  height="100" width="100" src="doctorimage/{{$doctors->image}}"></td>
             <td>
              <a class="btn btn-primary" href="{{url('updatedoctor',$doctors->id)}}">Update</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="return confirm('Are you sure delete this doctor?')" href="{{url('deletedoctor',$doctors->id)}}">Delete</a>
            </td>
         </tr>
         @endforeach
</div>


    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>