<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f4f8fb;
            font-family: 'Roboto', sans-serif;
        }
        .dashboard-container {
            max-width: 600px;
            margin: 80px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 24px rgba(4, 79, 160, 0.08);
            padding: 40px 32px 32px 32px;
            text-align: center;
        }
        .dashboard-title {
            color: #044FA0;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 18px;
        }
        .dashboard-greeting {
            color: #044FA0;
            font-size: 1.3rem;
            font-weight: 500;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-title">Dashboard</div>
        <div class="dashboard-greeting">
            Halo, {{ Auth::user()->nama }}!
        </div>
        <p>Selamat datang di dashboard aplikasi.</p>
    </div>
</body>
</html>
