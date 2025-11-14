<h1>Lista de Usuarios</h1>

<div class="card mb-grid">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="card-header-title">Lista de Usuarios</div>

        <div class="pulleft">
            <a href='/User/Registry/' class="btn btn-sm btn-primary">Agregar Usuario</a>
        </div>
    </div>

    <div class="table-responsive-md">
        <table class="table table-actions table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th width="10%">Id</th>
                    <th width="10%">Usuario</th>
                    <th>Nombre Completo</th>
                    <th width="20%">Correo</th>
                    <th width="10%">Teléfono</th>
                    <th width="10%">ID Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($JData as $Key => $Value)
                {
                    echo "<tr>";
                        echo "<td>".$Value-> Id."</td>";
                        echo "<td>".$Value-> UserName."</td>";
                        echo "<td>".$Value-> NameFull."</td>";
                        echo "<td>".$Value-> Email."</td>";
                        echo "<td>".$Value-> Phone."</td>";
                        echo "<td>".$Value-> Category_Id."</td>";
                        echo "<td>
                        <a href='/User/Registry/".$Value->Id."' class='btn btn-sm btn-primary'>Editar</a>
                        <a href='javascript:eliminar(".$Value->Id.");' class='btn btn-sm btn-danger'>Eliminar</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function eliminar(id) {
        if(confirm("¿Está seguro de eliminar este usuario?")) {
            var data = {id:id, table:'user'};

            $.post("/API?method=Delete", data, function(dat) {
                console.log(dat);
                if(dat.success) {
                    alert(dat.message);
                    location.reload();
                } else {
                    alert("Error: " + dat.message);
                }
            })
        }
    }


    // data = {id:'1', table:'user'};

    // $.post( "/API?method=Delete",data , function(dat){
    //     console.log(dat);
    // } );
</script>