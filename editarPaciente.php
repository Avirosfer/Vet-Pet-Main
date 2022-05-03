<?php 
include("tempade/cabecera.php");
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/pas.css">
<section>

<div class="condenedorform">

<form action="guardarPaciente.php" method="POST"> 
<h2>Datos Paciente</h2>
<div class="contenedor-imagen flex">

                                                               <figure >
                                                                     <img  class="fotoMascota" src="data:image/jpg;base64,<?php echo base64_encode($registro->fotPac); ?>">
                                                                </figure>

                                                        </div>

                                                        <div class="campo1">
                                                            <label>Nombre:</label>
                                                            <input class="input-text" type="text" name="nomPac" id="pacNom" value="<?php echo $registro->nomPac;  ?>" autofocus>
                                                        </div>

                                                        <div class="campo1">
                                                            <label>Especie:</label>
                                                            <input class="input-text" type="text" name="espPac" value="<?php echo $registro->espPac;  ?>">
                                                        </div>
                                                        <div class="campo1">
                                                            <label>Raza:</label>
                                                            <input class="input-text" type="text" name="razPac" value="<?php echo $registro->razPac;  ?>">
                                                        </div>
                                                        <div class="campo1">
                                                            <label>Sexo:</label>
                                                            <input class="input-text" type="text" name="sexPac" value="<?php echo $registro->sexPac;  ?>">
                                                        </div>
                                                        <div class="campo1">
                                                            <label>Fecha de Nacimiento:</label>
                                                            <input class="input-text" type="date" name="fecNam" value="<?php echo $registro->fecNam;  ?>">
                                                        </div>
                                                        <div class="campo1">
                                                            <label>Color:</label>
                                                            <input class="input-text" type="text" name="colPac" value="<?php echo $registro->colPac;  ?>">
                                                        </div>
                                                        <div class="campo1">
                                                            <label>Última atención:</label>
                                                            <input class="input-text" type="date" name="ultAte" value="<?php echo $registro->ultAte;  ?>">
                                                        </div>

</div>
</section>

<section>
<div class="condenedorform">
<h2>Datos Propietario</h2>
<div class="campo2">
                                                                <label>Nombres:</label>
                                                                <input class="input-text" type="text" name="nomPro" value="<?php echo $register->nomPro;  ?>">
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Apellidos:</label>
                                                                <input class="input-text" type="text" name="apePro" value="<?php echo $register->apePro;  ?>">
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Tipo de documento:</label>
                                                                <input class="input-text" type="text" name="tipDoc" value="<?php echo $register->tipDoc;  ?>">
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Número de documento:</label>
                                                                <input class="input-text" type="text" name="docPro"value="<?php echo $register->docPro;  ?>">
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Dirección:</label>
                                                                <input class="input-text" type="text" name="dirPro" value="<?php echo $register->dirPro;  ?>">
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Municipio:</label>
                                                                <input class="input-text" type="text" name="munPro" value="<?php echo $register->munPro;  ?>">
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Celular:</label>
                                                                <input class="input-text" type="text" name="celPro" value="<?php echo $register->celPro;  ?>">
                                                            </div>

                                                            <div class="campo2">
                                                                <label>E-mail:</label>
                                                                <input class="input-text" type="text" name="emaPro" value="<?php echo $register->emaPro;  ?>">
                                                            </div>
                                                            
</form>
</div>
</section>
<section>


</section>

</form> 
                           