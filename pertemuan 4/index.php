<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Submission</title>
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat Datang di Perpustakaan SST-NF</h2>
        <p class="text-center">Silahkan isi Buku Tamu di bawah ini</p>
        <hr>

        <form method="post" action="kunjungan.php">
            <div class="form-group">
                <label for="fullname">Nama Lengkap</label> 
                <input id="fullname" name="fullname" type="text" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="email">Email</label> 
                <input id="email" name="email" type="text" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="message">Keperluan</label> 
                <textarea id="message" name="message" cols="40" rows="5" class="form-control" required="required"></textarea>
            </div> 
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
