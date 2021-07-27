<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Registros</h2>
            </div>
        </div>
        <div class="row">
            <div class="conteiner">
                <div class="head-box">
                    <div class="category">
                        <h4>Nombre</h4>
                    </div>
                    <div class="category">
                        <h4>Apellido</h4>
                    </div>
                    <div class="category">
                        <h4>Vacuna</h4>
                    </div>
                    <div class="category">
                        <h4>Provincia</h4>
                    </div>
                </div>
                <?php
                while ($cen = $resultado->fetch_array()) {
                    $cedula  = $cen['cedula'];
                ?>

                    <a href="view-registro.php?registro=<?php echo $cedula; ?>">
                        <div class="body-box">
                            <div class="contenido"><label><?php echo $cen['nombre']; ?></label></div>
                            <div class="contenido"><label><?php echo $cen['apellido']; ?></label></div>
                            <div class="contenido"><label><?php echo $cen['vacuna']; ?></label></div>
                            <div class="contenido"><label><?php echo $cen['provincia']; ?></label></div>
                        </div>
                    </a>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>