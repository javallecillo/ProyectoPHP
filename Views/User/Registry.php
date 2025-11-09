<?php
 //echo json_encode($JData);
?>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-grid">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-header-title">Registro de Usuario</div>
            </div>

            <div class="card-body collapse show">
                <form action="" method="POST">

                    <input type="hidden" name="Registrar" id="Registrar" value="1">

                    <div class="form-group">
                        <label for="Id" class="form-label">Id</label>
                        <input type="text" name="Id" id="Id" class="form-control" value="<?php echo $JData->Id; ?>">
                    </div>

                    <div class="form-group">
                        <label for="UserName" class="form-label">Usuario</label>
                        <input type="text" name="UserName" id="UserName" class="form-control" value="<?php echo $JData->UserName; ?>">
                    </div>

                    <div class="form-group">
                        <label for="NameFull" class="form-label">Nombre Completo</label>
                        <input type="text" name="NameFull" id="NameFull" class="form-control" value="<?php echo $JData->NameFull; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Password" class="form-label">Contraseña</label>
                        <input type="password" name="Password" id="Password" class="form-control" value="<?php echo $JData->Password; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Email" class="form-label">Correo</label>
                        <input type="text" name="Email" id="Email" class="form-control" value="<?php echo $JData->Email; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Phone" class="form-label">Teléfono</label>
                        <input type="text" name="Phone" id="Phone" class="form-control" value="<?php echo $JData->Phone; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Category_Id" class="form-label">Id Categoria</label>
                        <input type="text" name="Category_Id" id="Category_Id" class="form-control" value="<?php echo $JData->Category_Id; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Aceptar</button>

                </form>
            </div>
        </div>
    </div>
</div>