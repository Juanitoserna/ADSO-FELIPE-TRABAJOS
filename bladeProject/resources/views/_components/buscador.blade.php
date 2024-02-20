<div class="container mt-3">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Buscar...">

                </div>
                <div class="col-3">
                    <img src="{{asset('assets/img/search.png')}}" alt="img_buscador" width="50px">

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-8">
                    
                </div>
                <div class="col-4">
                    <a href="" class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <img src="{{asset('assets/img/notification.png')}}" alt="" width="40px"> 
        
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>