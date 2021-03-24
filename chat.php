<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrasp.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <?php
      session_start();
      if (!$_SESSION['isLoggedIn'])
        header("Location: index.html");
    ?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    
  </head>
  <body class="text-center">
    <main class="form-signin">
        <form method="get" action="log-out.php" class="btn-signout-wrapper" >
        <button class="w-30 btn btn-md btn-primary mb-3 mt-n5 btn-signout" type="submit">Signout</button>
        </form>
        <div class="form-floating mb-3">
            <textarea class="form-control" id="chat" style="height: 300px; background-color: white; resize: none;" readonly></textarea>
            <label for="floatingTextarea2">Chats</label>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" id="name" name="name" class="form-control" placeholder="Type your name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="message" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
              <input type="text" id="message" name="message" class="form-control" placeholder="Type your message">
            </div>
        </div>
        <script src="chat.js"></script>
    </main>
  </body>
</html>
