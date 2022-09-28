<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="/css/auth.css">
</head>

<body>
  <div class="intro-text">
    <h1>TodoList</h1>
    <p>Lorem ipsum dolor sit amet consectetur.</p>
  </div>
  <div class="login">
    <form action="" method="POST">
      @csrf
      <h1>Register</h1>
      <div>
        <!-- <span>username wrong</span> -->
        <input type="text" placeholder="Username" name="name">
      </div>
      <div>
        <!-- <span>username wrong</span> -->
        <input type="email" placeholder="Email" name="email">
      </div>
      <div>
        <!-- <span>password wrong</span> -->
        <input type="password" placeholder="Password" name="password">
      </div>
      <button type="submit">Register</button>
    </form>
    <h5>Sudah punya akun? <a href="/login">Login</a> </h5>
  </div>
</body>

</html>