<!--<script type="text/javascript" src="<?php echo URL_JS; ?>paciente/jsPacientePanel.js"></script>-->
<script type="text/javascript" src="<?php echo URL_JS; ?>paciente/listarpacientes/jsPacienteQry.js"></script>
<br/>

<table id="qry_lista_pacientes"  cellspacing="0" class="display" width="60%">
    <thead>
        <tr>
            <th></th>
            <th>vCodigoPaciente</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>DNI</th>
            <th>Ocupación</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $contador = 1;
        foreach ($listado as $fila) {
            ?>
            <tr class='todoMayuscula'>           
                <td><?php echo $contador; ?></td>
                <td><?php echo $fila["vCodigoPaciente"]; ?></td>
                <td><?php echo $fila["vNombre"]; ?></td>
                <td><?php echo $fila["vApellidosPaterno"]; ?></td>
                <td><?php echo $fila["vApellidosMaterno"]; ?></td>
                <td><?php echo $fila["vDNI"]; ?></td>
                <td><?php echo $fila["vOcupacion"]; ?></td>
                <td><?php echo $fila["vCorreo"]; ?></td>
                <td>
                    <a id="btnoptEditar" class="optEditar btn btn-sm btn-primary" data-pid="<?php echo $fila['nCodigoPaciente'] ?>" title="Editar"><i class="fa fa-edit"></i> 
                    </a>
                </td>
            </tr>
            <?php
            $contador++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th>vCodigoPaciente</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>DNI</th>
            <th>Ocupación</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>