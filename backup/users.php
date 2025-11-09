<?php
  include "header.php";

  use models\User as User;
  $user = new User();
  $result = $user->toList();
  echo json_encode($result);

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">UserName</th>
            <th scope="col">NameFull</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($result as $key => $value) {
                echo '<tr>
                        <td scope="row" width="5%">'.$value->Id.'</td>
                        <td scope="row" width="10%">'.$value->UserName.'</td>
                        <td scope="row" width="20%">'.$value->NameFull.'</td>
                        <td scope="row" width="10%">'.$value->Phone.'</td>
                        <td scope="row" width="10%">'.$value->Email.'</td>
                        <td scope="row" width="20%">
                            <a class="btn btn-success" href="User.php?id='.$value->Id.'" style="color: #fff">Edit</a>
                            <a class="btn btn-danger" href="UserDelete.php?id='.$value->Id.'" style="color: #fff">Delete</a></td>
                      </tr>';
            }
        ?>
        
    </tbody>
</table>


<?php
  require("footer.php");
?>