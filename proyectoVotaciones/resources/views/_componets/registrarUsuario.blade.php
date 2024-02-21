<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row">
    <div class="col-6">
        <img src="{{asset('assets/img/perfil.png')}}" alt="">
    </div>
    <div class="col-6">
        <div class="container" id="principal" >
            <div class="mt-5 p-3" style="border: 1px solid rgb(48, 159, 233); box-shadow: 0px 0px 15px 0px rgb(48, 159, 233);">
                <h1>Regristro de usuarios</h1>
                <form action="">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-1">
                                <svg style="width: 20px; margin-top: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M528 160V416c0 8.8-7.2 16-16 16H320c0-44.2-35.8-80-80-80H176c-44.2 0-80 35.8-80 80H64c-8.8 0-16-7.2-16-16V160H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM272 256a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zm104-48c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z"/></svg>
        
                            </div>
                            <div class="col-11">
                                <label for="InputNombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="InputNombre" >
        
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-1">
                                <svg style="width: 20px; margin-top: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z"/></svg>
                            </div>
                            <div class="col-11">
                                <label for="InputApellido" class="form-label">Apellido:</label>
                                <input type="text" class="form-control" id="InputApellido" >
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-1">
                                <svg style="width: 20px; margin-top: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                            </div>
                            <div class="col-11">
                                <label for="inputTelefono" class="form-label">Telefono:</label>
                                <input type="text" class="form-control" id="inputTelefono" >
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-1">
                                <svg style="width: 18px; margin-top: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            </div>
                            <div class="col-11">
                                <label for="inputDireccion" class="form-label">Direccion:</label>
                                <input type="text" class="form-control" id="inputDireccion" >
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-1">
                                <svg style="width: 18px; margin-top: 35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/></svg>
                            </div>
                            <div class="col-11">
                                <label for="inputCorreo" class="form-label">Correo:</label>
                                <input type="email" class="form-control" id="inputCorreo" aria-describedby="emailHelp" >
                                <div id="emailHelp" class="form-text">Ingrese un correo electronico valido "example@gmail.com"</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="inputCorreo" class="form-label">Zona:</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Cuba</option>
                                    <option value="1">Belmonte</option>
                                    <option value="2">Providencia</option>
                                    <option value="3">Centro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="inputCentro" class="form-label">Centro:</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>I.E carlota</option>
                                    <option value="1">I.E Matecaña</option>
                                    <option value="2">I.E Aquilino Bedoya</option>
                                    <option value="3">I.E La Julita</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="inputPuesto" class="form-label">Puesto:</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>4D</option>
                                <option value="1">4C</option>
                                <option value="2">4B</option>
                                <option value="3">4A</option>
                                <option value="3">3D</option>
                                <option value="3">3C</option>
                                <option value="3">3B</option>
                                <option value="3">3A</option>
                                <option value="3">2D</option>
                                <option value="3">2C</option>
                                <option value="3">2B</option>
                                <option value="3">2A</option>
                                <option value="3">1D</option>
                                <option value="3">1C</option>
                                <option value="3">1B</option>
                                <option value="3">1A</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-info ">Enviar</button>
            
                    </div>
        
                </form>
            </div>
        
        </div>
    </div>
    
</div>

{{-- aria-describedby="emailHelp" --}}
{{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}