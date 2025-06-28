<!DOCTYPE html>
<html>
  <head> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.css')

    <style type="text/css">
      .title_deg
      {
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 30px;
        text-align: center;
      }
      .table_deg
      {
        border: 1px solid white;
        width: 80%;
        text-align: center;
        margin-left: 30px;
      }
      .th_deg{
        background-color: skyblue;
      }
      .img_deg{
        height: 70px;
        width:100px;
        padding:10px;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if(session()->has('message'))
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
{{session()->get('message')}}
</div>
        @endif
        <h1 class="title_deg">About Us</h1>
        <div class="text-center">
       <p class="text-white mx-auto" style="max-width: 1000px;">Welcome to Blog Point – your personal corner on the internet to share thoughts, experiences, and stories. Whether it’s an opinion, a reflection, or just something you feel like expressing, Blog Point gives everyone a voice. Here, we believe that every thought matters and every perspective adds value. Write freely, read widely, and be part of a growing community of people who love to express themselves through words.</p>
      </div>
      <!-- footer -->
      @include('admin.footer')
      <script type="text/javascript">
        function confirmation(ev){
          ev.preventDefault();
          var urlToRedircet = ev.currentTarget.getAttribute('href');

          console.log(urlToRedircet);
          swal({
             title:"Are you sure to delete this " ,
             text : "You won't be able to revert this delete ",
             icon : "warning",
             buttons : true,
             dangerMode : true
          })

          .then((willCancel)=>
          {
              if(willCancel){
                window.location.href=urlToRedircet;
              }
          });
        }
      </script>
  </body>
</html>