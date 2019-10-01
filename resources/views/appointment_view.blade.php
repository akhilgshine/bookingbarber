<!DOCTPE html>
<html>
<head>
<title>View appointments for admin</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Barber Name</td>
<td>Booking Time</td>
<a href="{{ URL::to('logout') }}">Logout</a>
</tr>
@foreach ($barbers as $barber)
<tr>

<td>{{ $barber->barber_name }}</td>
<td>{{ $barber->booking_time }}</td>

</tr>
@endforeach
</table>
</body>
</html>