
<!DOCTYPE html>
<html>
<head>
   
    <title>Page Title</title>
    <style>
    body{
        background:linear-gradient(to right, #348f50, #56b4d3);
        color: white;
    }
    </style>
  
</head>
<body>
<table width='100%'>
<tr>
<td>@include('layouts.sidebar')<td>
<td>@yield('content')</td>
</tr>
</table>


</body>
</html>