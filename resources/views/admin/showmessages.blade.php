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
                
        <table>
                    <tr style="background-color:rgb(120, 154, 255);">
                    <th style="padding:15px;  font-size:20px;  color:white;"></th>
                        <th style="padding:15px;  font-size:20px;  color:white;">Name</th>
                        <th style="padding:15px;  font-size:20px;  color:white;" >Status</th>
                        <th style="padding:15px;  font-size:20px;  color:white;" >Time</th>
                        <th style="padding:15px;  font-size:20px;  color:white;" >Read</th>

                        
                      

                    </tr>

                @foreach($data as $message)
                <tr align="center" style="background-color:white;">
                <td style="color:black;">
                <input type="checkbox" name="checkbox" <?php if ($message->admin_status == 'Seen') echo 'checked'; ?>>
                </td> 
                <td style="color:black;">{{$message->name}}</td> 
                <td style="color:black;">{{$message->admin_status}}</td> 
                <td style="color:black;">{{$message->created_at}}</td> 
                <td>
                         <a class="btn btn-primary" onclick="return  !window.open(this.href,'','top=50 left=100 width=900 height=500')" href="{{url('seen',$message->id)}}" >Read</a>
                       </td>


               
             </tr>


                       

                @endforeach



                       

        
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>
    
