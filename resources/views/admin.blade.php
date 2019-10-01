<!-- app/views/admin.blade.php --><

<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body><

{{ Form::open(array('url' => 'appointment_view')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('user_name') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('user_name', 'User Name') }}
    {{ Form::text('user_name', Input::old('user_name') }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}