<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>


      <style>
      

          body {
            background-image: url("{{ URL::to('img/1.jpg')}}");
          }
         
                  
             
         .inputfld{

         }    
         #emaillbl,#passwordlbl{
         width: 100px;
         color: green;
         }
      #loginpage{

        /*padding: 10px 10px 10px 10px ;*/
        padding: 10% 30% 10% 30%;
        /*background-color: powderblue;*/
      }
      #intologinpage{

        background-color: #FF8C00;
        padding: 8px;
         border-radius: 15px;
      }

      </style>

        <link rel="stylesheet" href="{{ URL::to('src/bootstrap-3.3.6-dist/css/bootstrap.min.css')}}">
        <script src="{{ URL::to('src/bootstrap-3.3.6-dist/js/bootstrap.min.js')}}"></script>
</head>
<body>



<div id="loginpage" class="">

<div class="" id="intologinpage">

<form method="POST" action="/login"  role="form">
    {!! csrf_field() !!}
    <p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
    </p>

    <div class="container-fluid">
    
        <div class="row">
            <!-- <div class="col-sm-12"> -->
                <div class="inputlbll"><label id="emaillbl" class="">Email</label> </div>
                <input type="email" class="form-control inputfld" name="email" value="{{ old('email') }}" placeholder="Email">
            <!-- </div> -->
        </div>

        <div class="row">
            <!-- <div class="col-sm-12"> -->
                 <div class="inputlbll"><label id="passwordlbl" class="">Password</label></div>
                <input type="password" class="form-control inputfld" name="password" id="password" placeholder="Password">
            <!-- </div> -->
        </div>
        
        <div class="row">
            <input id="rememberchkbx" type="checkbox" name="remember">
            <label for="rememberchkbx">Remember Me</label> 
        </div>

        <div class="row">
             <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </div>

   <!--  <div>
        <label id="emaillbl">Email</label> 
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div> -->
</form>


</div>
</div>

</body>
</html>

