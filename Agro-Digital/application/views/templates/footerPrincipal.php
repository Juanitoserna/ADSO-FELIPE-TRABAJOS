<!-- Modal siempre va a el final-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 400px;">
        <div class="modal-content" style="background-color: rgba(17, 26, 35, 1); border: none; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">

            <div class="modal-body ">

                <h1 class="modal-title fs-5 text-light " id="exampleModalLabel">Inicia Sesión</h1>


                <!-- Codigo para mostrarle que los campos ingresados estan vacios -->
                <?php if (isset($vacios)) : ?>
                    <script>
                        Swal.fire(
                            'Campos Vacios',
                            'Intenta Nuevamente',
                            'error'
                        )
                    </script>
                <?php endif; ?>
                <?php
                if (isset($error)) {
                ?>
                    <script>
                        Swal.fire(
                            'Correo o contraseña incorrecto',
                            'Intente nuevamente',
                            'error'
                        )
                    </script>
                <?php
                }
                ?>
                <!-- Este  es en el caso que el usuario no tenga rol especifio-->
                <?php if (!empty($warning)) : ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $warning; ?>
                    </div>
                <?php endif; ?>


                <!-- Formulario de inicio de sesión -->
                <form action="<?= base_url('index.php/Login/ValidarIngreso') ?>" method="POST">
                    <div class="input-group mb-3">
                        <!-- aqui es donde validamos que los datos existan -->

                        <input type="email" class="form-control" placeholder="Email" name="correo">
                        <!-- esto es lo que mandamos al controlador  -->
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <!-- aqui es donde validamos que los datos existan -->
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <!-- esto se lo mandamos al controlador -->
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block ">Iniciar Sesión</button>
                </form>
                <p class="mb-1">
                    <a href="forgot-password.html">Olvidaste tu contraseña?</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/dist/js/principal.js'); ?>"></script>
</body>

</html>