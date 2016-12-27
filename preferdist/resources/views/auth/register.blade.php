<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/register">
    {!! csrf_field() !!}

    <p>
        {{ $errors->first('name') }}
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
        {{ $errors->first('role') }}
  
    </p>

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
        <!-- <input type="text" name="role" value="employee"> -->
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div> 
     <div>
        Role
        <select type="text" name="role">
            <option value="admin">Admin</option>
            <option value="employee">Employee</option>
        </select>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>