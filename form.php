<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel = "icon" href = "images\favicon-removebg-preview.png" type = "image/x-icon">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=tel],input[type=Number] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color:green;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }

      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {

    </style>

    <title>Donation form</title>
  </head>
  <body bgcolor="powderblue">
    <form action="pay.php" method="post" accept-charset="utf-8">
    <h1>Enter Details</h1>

      <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="user" required>
        <label for="mail"><strong>E-mail</strong></label>
        <input type="text" placeholder="Enter E-mail" name="email" required>
        <label for="psw"><strong>Phone Number</strong></label>
        <input type="tel" placeholder="Enter Phone no." name="num" required>
        <label for="amount"><strong>Amount</strong></label>
        <input type="Number" placeholder="Enter the amount" name="amt" required>
      </div>
      <button type="submit"><strong>Donate</strong></button>

    </form>
  </body>
</html>
