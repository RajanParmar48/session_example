<?php
session_start();
$error = $_SESSION['error'] ?? "";
$success = $_SESSION['success']??"";
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="style.css">
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <h1>Log in with your email account</h1>
                    
                    <?php if(!empty($error)){?>
                    <div class="alert alert-danger" role="alert">
                      <strong><?=$error?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   <?php }?>
                    
                    <?php if(!empty($success)){?>
                    <div class="alert alert-success" role="alert">
                        <?=$success?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php }?>
                    <form role="form" action="login.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in" name="login">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                    <hr>
                </div>
                </div> <!-- /.col-xs-12 -->
                </div> <!-- /.row -->
                </div> <!-- /.container -->
            </section>
            <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title">Recovery password</h4>
                        </div>
                        <div class="modal-body">
                            <p>Type your email account</p>
                            <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-custom">Recovery</button>
                        </div>
                        </div> <!-- /.modal-content -->
                        </div> <!-- /.modal-dialog -->
                        </div> <!-- /.modal -->
                        <footer id="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p>Page © - 2014</p>
                                        <p>Powered by <strong><a href="http://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a></strong></p>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <script type="text/javascript" charset="utf-8" async defer>
                        function showPassword() {
                        
                        var key_attr = $('#key').attr('type');
                        
                        if(key_attr != 'text') {
                        
                        $('.checkbox').addClass('show');
                        $('#key').attr('type', 'text');
                        
                        } else {
                        
                        $('.checkbox').removeClass('show');
                        $('#key').attr('type', 'password');
                        
                        }
                        
                        }
                        </script>
                        <?php
                        if(!empty($error)){
                        session_unset($_SESSION['error']);
                        session_destroy();
                        }
                        if(!empty($success)){
                        session_unset($_SESSION['success']);
                        session_destroy();    
                        }