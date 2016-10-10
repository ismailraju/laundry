<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>UserId</td>
            <td>UserName</td>
            <td>Password</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->UserId }}</td>
            <td>{{ $user->UserName }}</td>
            <td>{{ $user->Password }}</td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>