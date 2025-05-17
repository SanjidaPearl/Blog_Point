<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      <!-- basic -->
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      @include('home.header')
     
      <div>
      <div style="text-align:center;"class="col-md-12">
                     <div><img style="padding: 20px; height:400px; width: 550px; margin:auto" src="/postimage/{{$post->image}}"></div>
                     <h3><b>{{$post->title}}</b></h3>
                     <h4>{{$post->description}}</h4>
                     <p>Post by <b>{{$post->name}}</b></p>
                  </div>
      </div>
      
      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>