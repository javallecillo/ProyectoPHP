<?php
    session_start();

    require_once "Define.php";
    require_once "Config\Conexion.php";
    require_once 'Entity\eUser.php';
    require_once "Models\User.php";

    use Models\User as User;
    $user = new User();

    $username = "";

    if(isset($_GET["op"])) {
      if($_GET["op"]=="exit"){
        session_destroy();
        header("Location: /Login");
      }
    }

    if(isset($_POST) && isset($_POST['UserName'])){
        $username = $_POST['UserName'];
        $password = $_POST['Password'];

        $data = $user->forUserName($username, $password);
        echo json_encode($data);

        if($data) {
          $_SESSION["system"]["UserName"]=$data->UserName;
          $_SESSION["system"]["NameFull"]=$data->NameFull;
        }

        
    }

    if(isset($_SESSION["system"]["UserName"])) {
      //echo "Sesión iniciada";
      header("Location: /");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="/Content/dist/css/adminx.css" media="screen" />
  </head>
  <body>
    <div class="adminx-container d-flex justify-content-center align-items-center">
      <div class="page-login">
        <div class="text-center">
          <a class="navbar-brand mb-4 h1" href="login.html">
            <img src="/Content/demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          </a>
        </div>

        <div class="card mb-0">
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label for="UserName" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Usuario" value="<?php echo $username?>">
              </div>
              <div class="form-group">
                <label for="Password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="Password" name="Password" placeholder="Contraseña">
              </div>
              <button type="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="/Content/dist/js/vendor.js"></script>
    <script src="/Content/dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="/Content/dist/js/vendor.js"></script>
    <script src="/Content/dist/js/adminx.vanilla.js"></script-->
  </body>
</html>