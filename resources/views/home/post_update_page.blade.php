<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <base href="/public">

   @include('home.homecss')

   <style type="text/css">
      .div_deg {
         text-align: center;
         background-color: black;
      }

      .img_deg {
         height: 250px;
         width: 250px;
         margin: auto;
      }

      label {
         font-size: 18px;
         font-weight: bold;
         width: 200px;
         color: white;
      }

      .input_deg {
         padding: 30px;
      }

      .title_deg {
         padding: 30px;
         font-size: 30px;
         font-weight: bold;
         color: white;
      }
   </style>
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      @include('home.header')

      @if(session()->has('message'))
      <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">x</button>
         {{session()->get('message')}}
      </div>

      @endif

      <div class=div_deg>
         <h1 class="title_deg">Update Post</h1>
         <form action="{{url('update_post_data',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input_deg">
               <label>Title</label>
               <input type="text" name="title" value="{{$data->title ?? ''}}">
            </div>
            <div class="input_deg">
               <label>Title</label>
               <textarea name="description">{{ $data->description ?? '' }}</textarea>
            </div>
            <div class="input_deg">
               <label>Current Image</label>
               <img class="img_deg" src="/postimage/{{$data->image}}" alt="Current Image">
               </img>
            </div>
            <div class="input_deg">
               <label>Change Current Image</label>
               <input type="file" name="image">
            </div>
            <div class="input_deg">
               <input type="submit" class="btn btn-outline-secondary" value="Update">
            </div>
         </form>
      </div>
   </div>
   @include('home.footer')
</body>

</html>