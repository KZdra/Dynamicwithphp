<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Lelang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: lightcoral;
      margin: 0;
      padding: 0;
    }
    
    .container {
        max-width: 100%;
      margin: 0 auto;
      padding: 20px;
      background-color: lightcoral;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }
    
    h1 {
      text-align: center;
      margin-top: 0;
    }
    
    .h2{
      color: black;
    }
    
    .p{
      color: black;
    }

    .auction-item {
      margin-bottom: 20px;
      padding: 20px;
      
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    
    .auction-item h2 {
      margin-top: 0;
    }
    
    .auction-item p {
      margin-bottom: 0;
    }
    
    .timer {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: red;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    
    .button:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Halaman Lelang <i class="fas fa-hammer    "></i></h1>
    <div class="auction-item">
      <h2>ROUTER DEWA KIPAS <i class="fas fa-network-wired"></i></h2>
      <p>Deskripsi barang yang dilelang.</p>
      <p>Tawaran tertinggi:Rp <span id="highest-bid">-</span></p>
      <p>Waktu tersisa: <span id="countdown">-</span></p>
      <button id="bid-button" class="button">Tawar</button>
    </div>
  </div>

  <script>
    var highestBid = 100;
    var bidButton = document.getElementById("bid-button");
    var highestBidElement = document.getElementById("highest-bid");
    var countdownElement = document.getElementById("countdown");

    function updateBid() {
      highestBid += 1000;
      highestBidElement.innerText = highestBid;
    }

    function countdown() {
      var endTime = new Date("2023-06-10 23:59:59").getTime(); // Tanggal dan waktu lelang berakhir

      var countdownInterval = setInterval(function() {
        var now = new Date().getTime();
        var distance = endTime - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownElement.innerText = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        if (distance <= 0) {
          clearInterval(countdownInterval);
          countdownElement.innerText = "Lelang telah berakhir";
          bidButton.disabled = true;
        }
      }, 1000);
    }

    bidButton.addEventListener("click", function() {
      updateBid();
    });

    countdown();
  </script>
</body>
</html>
