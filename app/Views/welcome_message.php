<!DOCTYPE html>
<html>

<head>
  <title>Perkenalan Diri</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom, #3498db, #3498db);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      padding: 30px;
      text-align: center;
    }

    h1 {
      font-size: 36px;
      color: #333;
      margin: 0 0 20px;
    }

    p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
    }

    .highlight {
      color: #007BFF;
      font-weight: 500;
    }

    .container::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(52, 152, 219, 0.5);
      border-radius: 10px;
      z-index: -1;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Selamat Datang</h1>
    <p>Halo, nama saya <span class="highlight"><?php echo $nama; ?></span>. Saya adalah seorang <span class="highlight"><?php echo $profesi; ?></span> yang tinggal di <span class="highlight"><?php echo $lokasi; ?></span>. Usia saya saat ini <span class="highlight"><?php echo $usia; ?></span> tahun. Saya tertarik dalam <span class="highlight"><?php echo $minat; ?></span>.</p>
  </div>
</body>

</html>