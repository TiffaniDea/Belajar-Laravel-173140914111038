
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
<table width='100%' height="500px">
<tr>
<th>@include('layouts.sidebar')</th>
<th><center>@yield('content')</center></th>
</tr>
</table>


</body>
</html>