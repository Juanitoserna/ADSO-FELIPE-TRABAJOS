<?php
// aqui cargamos el header
$title['titulo'] = "Agro-Digital";
$this->load->view('templates/admin/header', $title);
?>
<!-- ahora cargamos el sidebar del estudiante -->

<?php
// mandamos los datos de inicio de sesion a aqui a usuario


$this->load->view('templates/admin/sidebar');
?>
<!-- aqui va toco el contenido del estudiante -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <form action="../Cursos/registrarCurso" method="POST">
                    <div class="container-fluid px-4">
                        <div class="text-center pb-4">
                            <h1>REGISTRO DE CURSOS</h1>
                        </div>	
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="form-label">Nombres:</label>
                                <input type="text" class="form-control" name="nombres" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="form-label">Duracion:</label>
                                <input type="text" class="form-control" name="duracion" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="form-label">Descripcion:</label>
                                <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" required></textarea>
                            </div>                            
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="form-label">Precio:</label>
                                <input type="number" class="form-control" name="precio" required>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="form-label">Categoria:</label>
                                <input type="number" class="form-control" name="categoria" required>
                            </div>                            
                            <div class="col-6">
                                <label for="" class="form-label">Material De Estudio:</label>
                                <input type="text" class="form-control" name="material_estudio" required>
                            </div>
                        </div>
                        <!-- CAMBIAR ESTE CODIGO PARA QUE SEA UN SELECT CON EL ID DEL PROFESOR -->
                        <div class="row">
                            <div class="col-12">
                                <label for="selectDatos">Profesor:</label>
                                <input type="number" class="form-control" name="docente_id" requiered>
                        </div>
                        <button  class="btn btn-primary mt-3 ">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- LO MISMO ACA DEBERIA AGREGARLE UNA OPCION DE VOLVER ATRAS Y OBVIAMENTE AGREGARLE VALIDACIONES O MENSAJES DE ALERTA  -->
</div>
<!-- cargamos el footer -->
<?php
$this->load->view('templates/admin/footer');
?>


