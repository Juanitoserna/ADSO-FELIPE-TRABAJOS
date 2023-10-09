<?php
    $this->load->view('layouts/header');
?>
<?php
    $this->load->view('layouts/sidebar');
?>

 
<div class="content-wrapper">
    <div class="col-12 m-0 p-3">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-6">
                
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username"><?php echo explode(" " , $session['email'])[0]  ?></h3>
                            
                            <h5 class="widget-user-desc">Founder & CEO</h5>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="<?php echo base_url()?>assets/dist/img/user1-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            <!-- /.col -->
                            </div>
                            <div class="row mt-5">
                                <div class="col-sm-4 border-right description-block">
                                    <h5 class="description-header">Cedula:</h5> 
                                    <h3 class="widget-user-username"><?php echo explode(" " , $session['cedula'])[0]  ?></h3>
                                </div>
                                <div class="col-sm-4 border-right description-block">
                                    <h5 class="description-header">Tipo:</h5> 
                                    <h3 class="widget-user-username"><?php echo explode(" " , $session['tipo'])[0]  ?></h3>
                                </div>
                                <div class="col-sm-4  border-right description-block">
                                    <h5 class="description-header ">Estado:</h5> 
                                    <h3 class="widget-user-username"><?php echo explode(" " , $session['estado'])[0]  ?></h3>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div class="col-md-6">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                        <img class="img-circle" src="<?php echo base_url() ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                        <span class="description">Shared publicly - 7:30 PM Today</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" title="Mark as read">
                            <i class="far fa-circle"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <img class="img-fluid pad" src="<?php echo base_url() ?>assets/dist/img/photo2.png" alt="Photo">

                        <p>I took this photo this morning. What do you guys think?</p>
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <span class="float-right text-muted">127 likes - 3 comments</span>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer card-comments">
                        <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="<?php echo base_url() ?>assets/dist/img/user3-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                            Maria Gonzales
                            <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                        <div class="card-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="<?php echo base_url() ?>assets/dist/img/user4-128x128.jpg" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                            Luna Stark
                            <span class="text-muted float-right">8:03 PM Today</span>
                            </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                        </div>
                        <!-- /.card-comment -->
                    </div>
                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <form action="#" method="post">
                        <img class="img-fluid img-circle img-sm" src="<?php echo base_url() ?>assets/dist/img/user4-128x128.jpg" alt="Alt Text">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                            <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                        </div>
                        </form>
                    </div>
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                
                <!-- /.col -->
            </div>
        </div>
    </div>
  </div>


<?php
    $this->load->view('layouts/footer');
?>