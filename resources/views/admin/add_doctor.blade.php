<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
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
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
           
            <div class="container text-center pt-5">

            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{session()->get('message')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>



            @endif

                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1 p-2 ">
                        <label class="form-label" for="doctor_name">Name</label>
                        <input style="color: black;"  type="text" id="form3Example1q"  name="name" placeholder="doctor's name"/>

                    </div>
                    <div class="mb-1 p-2">
                        <label class="form-label" for="phone1">Phone</label>
                        <input style="color: black;" type="number" id="phone1"  name="phone" placeholder="phone  number"/>

                    </div>
                    <div class="mb-1 p-2">
                        <label  class="form-label" for="speciallity">Speciallity</label>
                       <select style="color: black;" name="spec_sele" id="speciallity">
                        <option value="">--select doctor--</option>
                        <option value="Skin_Doctor">Skin_Doctor</option>
                        <option value="Heart_Doctor">Heart_Doctor</option>
                        <option value="Eye_Doctor">Eye_Doctor</option>
                        <option value="Nose_Doctor">Nose_Doctor</option>
                       </select>

                    </div>
                    <div class="mb-1 p-2">
                        <label class="form-label" for="roomnum">Room_Number</label>
                        <input style="color: black;" type="text" id="roomnum"  name="room" placeholder="room_num"/>

                    </div>
                    <div class="mb-1 p-2">
                        <label class="form-label" for="docimg">Doctor Image</label>
                       <input type="file" name="file" id="">

                    </div>
                    <div class="mb-1 p-2">
                        <input type="submit" class="btn btn-success"  value="Submit">
                    </div>

                </form>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>