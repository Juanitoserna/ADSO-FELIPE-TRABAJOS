<?php
$this->load->view('templates/nav');
?>
<div class="container" style="margin-top: 120px;"> <!-- Puedes ajustar el valor según sea necesario -->

    <!-- Aqui podemos poner cualquier contenido publicitario que queramos  -->
</div>

<div class="container-fluid text-light">
    <div class="row">
        <div class="col-12 col-md-8 ">
            <h4 style="margin-left: 45px;">Temario del curso</h4>
            <div class="row">
                <!-- aqui hacemos un for para traer el contenido del curso -->

                <!-- aqui verifcamos si tiene cursos -->


                <div class="accordion mt-4" id="outerAccordion">
                    <div class="accordion-item border-0" style="background-color: #221B32; color: #FFFFFF;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed border-0" style="background-color: #221B32; color: #FFFFFF;" type="button" data-bs-toggle="collapse" data-bs-target="#innerAccordion1" aria-expanded="false" aria-controls="innerAccordion1">
                                <?php echo (isset($datosCursos) ? $datosCursos->descripcion : 'NO DEFINIDO') ?>
                            </button>
                        </h2>
                        <div id="innerAccordion1" class="accordion-collapse collapse">
                            <div class="accordion-body" style="background-color: #221B32;">
                                <div class="accordion" id="innerAccordion1">
                                    <div class="accordion-item border-0" style="background-color: #221B32;">
                                        <h2 class="accordion-header">
                                            <!-- en este enlace le mandamos el curso para que lo dirija a el contenido  -->
                                            <?php $validacion = $this->session->has_userdata('sesion_persona'); ?>
                                            <?php foreach ($info as $curso) : ?>
                                                <?php if (isset($curso)) : ?>

                                                    <?php foreach ($curso as $tema) :
                                                        if ($validacion) {
                                                    ?>
                                                            <a href="#" class="accordion-button collapsed border mt-3" style="background-color: #221B32; color: #FFFFFF;">
                                                                <?php echo $tema->titulo; ?>
                                                            </a>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a class="accordion-button collapsed border mt-3" style="background-color: #221B32; color: #FFFFFF;" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><?php echo $tema->titulo; ?></a>
                                                        <?php
                                                        }
                                                        ?>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 ">
            <h2>COMO TAN MUCHACHOS</h2>
        </div>
    </div>
</div>

<?php
$this->load->view('templates/footerPrincipal');
?>
