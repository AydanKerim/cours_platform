<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
        }

        .wrapper{
            display:flex;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            background:#2c3e50;
            color:white;
            padding:20px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            margin:15px 0;
        }

        .content{
            flex:1;
            padding:30px;
        }

        .navbar{
            background:#34495e;
            color:white;
            padding:15px;
        }
    </style>
</head>
<body>

<div class="navbar">
    Admin Panel
</div>

<div class="wrapper">

    <div class="sidebar">
        <h3>Menu</h3>

        <a href="/dashboard">Dashboard</a>
        <a href="/courses">Courses</a>
        <a href="/lessons">Lessons</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>