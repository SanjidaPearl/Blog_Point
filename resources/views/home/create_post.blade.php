<!DOCTYPE html>
<html lang="en">
   <head>
   @include('home.homecss')
      <!-- basic -->
     <style type="text/css">
        .div_deg
        {
            text-align: center;
        }
        .title_deg
        {
            font-size: 30px;
            font-weight:bold;
            color: white;
            padding: 30px;
        }
        label{
            display: inline-block;
            width: 200px;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        .field_deg
        {
            padding: 25px;
        }
     </style>
     
   </head>
   <body>
      <!-- header section start -->
      @include('home.header')
   
      <div class="div_deg">
       @if(session()->has('message'))
         <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert"
           aria-hidden="true">x </button>
         {{session()->get('message')}}
          </div>
         @endif
        <h3 class="title_deg">Add Post</h3>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="field_deg">
            <label>Title</label>
            <input type="text" name="title">
           </div>
           <div class="field_deg">
            <label>Description</label>
            <textarea name="description"></textarea>
           </div>
           <div class="field_deg">
            <label>Add Image</label>
            <input type="file" name="image">
           </div>
           <div>
            <input type="submit" value="Add Post" class="btn btn-outline-secondary">
           </div>
        </form>
      </div>
      @include('home.footer')
   </body>
</html>