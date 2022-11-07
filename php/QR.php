<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>QR page</title>
    <link rel="stylesheet" href="/css/QR.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    padding: 0 10px;
    min-height: 100vh;
    align-items: center;
    background: url(/my_first_project.html/hero-abstract-background-03.jpg); 
    background-repeat: no-repeat; 
    background-size: 1830px 890px;
    justify-content: center;
}

.wrapper {
    height: 265px;
    max-width: 410px;
    background: rgba(0, 0, 0, 0.63);
    border-radius: 7px;
    padding: 20px 25px 0;
    transition: height 0.2s ease;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.wrapper.active {
    height: 530px;
}

header h1 {
    font-size: 21px;
    font-weight: 500;
    color: white; 
    font-weight: bold;
}

header p {
    margin-top: 5px;
    color: #ffffff;
    font-size: 16px; 
}

.wrapper .form {
    margin: 20px 0 25px;
}

.form :where(input, button) {
    width: 100%;
    height: 55px;
    border: none;
    outline: none;
    border-radius: 5px;
    transition: 0.1s ease;
}

.form input {
    font-size: 18px;
    padding: 0 17px;
    border: 1px solid #999;
}

.form input:focus {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
}

.form input::placeholder {
    color: #999;
}

.form button {
    color: #fff;
    cursor: pointer;
    margin-top: 20px;
    font-size: 17px;
    background: #3498DB;
}

.qr-code {
    opacity: 0;
    display: flex;
    padding: 33px 0;
    border-radius: 5px;
    align-items: center;
    pointer-events: none;
    justify-content: center;
    border: 1px solid #ccc;
}

.wrapper.active .qr-code {
    opacity: 1;
    pointer-events: auto;
    transition: opacity 0.5s 0.05s ease;
}

.qr-code img {
    width: 170px;
}

@media (max-width: 430px) {
    .wrapper {
        height: 255px;
        padding: 16px 20px;
    }

    .wrapper.active {
        height: 510px;
    }

    header p {
        color: #696969;
    }

    .form :where(input, button) {
        height: 52px;
    }

    .qr-code img {
        width: 160px;
    }
}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1>Welcome to the QR Code</h1>
        <p>User please enter your bank account ID</p>
      </header>
      <div class="form">
        <input type="text" spellcheck="false" placeholder="Enter bank ID">
        <button>Get your QR Code</button>
        <button>Download</button>
      </div>
      <div class="qr-code">
        <img src="" alt="qr-code">
      </div>
    </div>
    <script src="/js/QR.js"></script>
  </body>
</html>