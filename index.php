<html>
  <head>
    <title>Form | Registration</title>
  </head>
  <style>
    body {
      font-family: "Circular Std Bold", sans-serif;
    }
  </style>
  <body>
    <h1>Form | Add Data</h1>
    <form action="includes/index.inc.php" method="POST">
      <label class="label" id="full">Full Name</label>
      <input type="text" required class="input" id="inp1" name="name" /><br />
      <label class="label" id="mail"> E-mail</label>
      <input type="text" required class="input" id="inp2" name="email" /><br />
      <label class="label" id="phone"> Phone</label>
      <input type="text" required class="input" id="inp3" name="phone" /><br />
      <label class="label" id="address"> Address</label>
      <input
        type="text"
        required
        class="input"
        id="inp4"
        name="address"
      /><br />
      <label class="label" id="house"> House No.</label>
      <input type="text" required class="input" id="inp5" name="house" /><br />
      <label class="label" id="job"> Job Title</label>
      <input type="text" required class="input" id="inp6" name="job" /><br />
      <button type="submit" name="submit" class="btn">Sign up</button>
    </form>
  </body>
</html>
