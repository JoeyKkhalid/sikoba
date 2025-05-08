<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>SIKOBA - Dashboard</title>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    main {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../../assets/image/gedung_bps_updated.jpg') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      color: white;
      padding: 20px;
    }

    .welcome h1 {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
      line-height: 1.5;
      animation: slideUpFade 1.5s ease forwards;
      opacity: 0;
    }

    .btn-more a {
      background-color: #0d47a1;
      color: white;
      padding: 12px 30px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      transition: background-color 0.3s ease;
      opacity: 0;
      animation: fadeIn 1.5s ease forwards;
      animation-delay: 1.2s;
    }

    .btn-more a:hover {
      background-color: #08306b;
    }

    @keyframes slideUpFade {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @media (max-width: 768px) {
      .welcome h1 {
        font-size: 22px;
      }

      .btn-more a {
        padding: 10px 20px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <?php include '../../components/user/header.php'; ?>

  <main>
    <div class="welcome">
      <h1>Selamat Datang Di Website<br>Sistem Kontrak dan Berita Acara</h1>
    </div>
    <div class="btn-more">
      <a href="#">Selengkapnya</a>
    </div>
  </main>
</body>
</html>
