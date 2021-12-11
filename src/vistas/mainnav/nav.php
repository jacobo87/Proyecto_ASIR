<?php
/* Preguntamos por la sesión */
    if ($_SESSION["rol_tipo"]=='usuario'){
        ?>
        <!-- Si es del tipo usuario nos muestra el siguiente menú -->
        <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="..\home\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="magenta with-sub">
                <a href="..\nueva_entrada\">
                <span>
                    <span class="glyphicon glyphicon-list-alt"></span>
                    <span class="lbl">Nuevo Caso</span>
                </span>
            </a>
            </li>
            <li class="magenta with-sub">
                <a href="..\consultar_entrada\index2.php">
                <span>
                    <span class="glyphicon glyphicon-list-alt"></span>
                    <span class="lbl">Consultar Caso</span>
                </span>
            </a>
            </li>
        </ul>
    </nav>
    <?php
    }else{
        ?>
        <!-- Si no, nos muestra el panel para el soporte -->
        <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="..\home\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Inicio</span>
                </a>
            <li class="magenta with-sub">
                <a href="..\consultar_entrada\">
                <span>
                    <span class="glyphicon glyphicon-list-alt"></span>
                    <span class="lbl">Consultar Caso</span>
                </span>
            </a>
            </li>
        </ul>
    </nav>
    <?php
    }
?>