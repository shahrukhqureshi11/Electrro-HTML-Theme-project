<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h1>Dashboard </h1>
        <h1>Welcome {{session('firstname')}}</h1>
        <h1>Welcome {{session('SRK')}}</h1>
    </div>
</body>
</html>
