<!DOCTYPE html>
<html>
 <head>
  <title>{{config('app.name', 'laravel')}}</title>
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style> --}}
  
  @include('partials.login.header')
  @include('partials.login.inc_top')
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box">
   <h1 class="text-dark text-bold" align="center">Send {{config('app.name')}} an Email</h1><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" placeholder="Your Full name" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" placeholder="put your email here Eg.example@yourname.com" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Message</label>
     <textarea name="message" placeholder="Kindly place your message here" class="form-control form-floating" style="height: 100px"></textarea>
     
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
   
  </div>
  

  @include('partials.login.footer')

  <main class="py-4">
            @yield('content')
        </main>
 </body>
</html>