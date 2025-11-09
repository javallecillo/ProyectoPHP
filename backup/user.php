<?php
  include "header.php";

  use models\User as User;
  $user = new User();

  use models\UserCategory as UserCategory;
  $userCategory = new UserCategory();
  $ListUserCategory = $userCategory->toList();
  //echo json_encode($ListUserCategory);

  $id = isset($_GET['id']) ? $_GET['id'] : "";
    $UserName="";
    $Password="";
    $NameFull="";
    $Phone="";
    $Email="";
    $Category_Id="";
  
  if ($_POST) {
    
    //echo json_encode($_POST);
    foreach ($_POST as $key => $value) {
        echo $key;
    }

  } else {

    if($id !="") {
        $data = $user->getForId($id);
        $UserName = $data->UserName;
        $Password = $data->Password;
        $NameFull = $data->NameFull;
        $Phone = $data->Phone;
        $Email = $data->Email;
        $Category_Id = $data->Category_Id;
    }
  }

?>

<h1>User Registry</h1>

<hr>

<form action="" method="post">
<fieldset>
    <legend>User</legend>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="txtId">Id: </label>
                <input type="number" id="" name="" class="form-control" readonly value="<?php echo $id; ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="UserName">UserName: </label>
                <input type="text" id="UserName" name="UserName" class="form-control" placeholder="Example: USER" value="<?php echo $UserName; ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="txtName">NameFull: </label>
                <input type="text" id="" name="" class="form-control" placeholder="Example: USUARIO" value="<?php echo $NameFull; ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="Password">Password: </label>
                <input type="password" id="Password" name="Password" class="form-control" placeholder="Example: 123456" value="<?php echo $Password; ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="Email">Email: </label>
                <input type="text" id="Email" name="Email" class="form-control" placeholder="Example: email@info.com" value="<?php echo $Email; ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="Phone">Phone: </label>
                <input type="text" id="Phone" name="Phone" class="form-control" placeholder="Example: 9999-9999" value="<?php echo $Phone; ?>">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="Category_Id">User Category: </label>
                <select class="form-control" name="Category_Id" id="Category_Id" placeholder="Select...">
                    <option value="">--Select an option by default--</option>
                    <?php
                        foreach($ListUserCategory as $key => $value) {
                            $selected = $Category_Id == $value->Id ? "selected" : "";
                            echo '<option value="'.$value->Id.'" '.$selected.'>'.$value->Description.'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>

</fieldset>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
</div>

</form>

<?php
  require("footer.php");
?>