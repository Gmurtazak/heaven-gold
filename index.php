<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .dashboard {
      display: grid;
      grid-template-columns: repeat(2, 200px);
      gap: 20px;
      margin-bottom: 50px; /* space before footer */
    }
    .dashboard button {
      padding: 20px;
      font-size: 18px;
      border: none;
      border-radius: 10px;
      background: #007bff;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }
    .dashboard button:hover {
      background: #0056b3;
    }
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <a target="_blank" href="application-form.php"><button>Application Form</button></a>
    <a target="_blank" href="receipt-form.php"><button>Receipt Form </button></a>
    <a target="_blank" href="allotment-Letter.php"><button>Allotment Letter</button></a>
    <a target="_blank" href="booking-form.php"><button>Booking Form</button></a>
    <!-- <a target="_blank" href="form5.html"><button>Form 5</button></a> -->
  </div>

  <footer>
    Software design by Ghulam Murtaza | 0323-2054415
  </footer>
</body>
</html>
