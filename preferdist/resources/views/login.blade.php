<html>
   
   <head>
      <title>Login Form</title>


   </head>

   <body>


   <div class="container">

      <div class="row">
         <div class="col-sm-5">
            
            <input type="text" class="username form-control" id="usernameid" name="username" placeholder="username">
         </div>
      </div>

      <div class="row">
         <div class="col-sm-5">
            
            <input type="password" class="password form-control" id="passwordid" name="password" placeholder="password">
         </div>
      </div>



   </div>

      
      @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      
      <?php
         echo Form::open(array('url'=>'/validation'));
      ?>
      
      <table border = '1'>
         <tr>
            <td align = 'center' colspan = '2'>Login</td>
         </tr>
         
         <tr>
            <td>Username</td>
            <td><?php echo Form::text('username'); ?></td>
         </tr>
         
         <tr>
            <td>Password</td>
            <td><?php echo Form::password('password'); ?></td>
         </tr>
         
         <tr>
            <td align = 'center' colspan = '2'>
               <?php echo Form::submit('Login'); ?  ></td>
         </tr>
      </table>
      
      <?php
         echo Form::close();
      ?>
   





   </body>
</html>