



<!-- Log In page -->
<div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="#" class="logo logo-admin">
                                            <?= $this->Html->image('logo.png', ["style"=>"width:60%", "class"=>"auth-logo"]) ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                        <?= $this->Form->create() ?>

                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Username</label>
                                                    <?= $this->Form->control('username', ["class"=>"form-control", "placeholder"=>"Enter username", "label"=>false]) ?>
                                                </div><!--end form-group-->

                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>
                                                    <?= $this->Form->control('password', ["class"=>"form-control", "placeholder"=>"Enter password", "label"=>false]) ?>
                                                </div><!--end form-group-->

                                                <div class="form-group row my-3">
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                            <label class="form-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-sm-6 text-end">
                                                        <a href="#" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                                                    </div><!--end col-->
                                                </div><!--end form-group-->

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <?= $this->Form->button(__('Log In'), ["class"=>["btn btn-primary w-100 waves-effect waves-light"], "escape"=>false]); ?>
                                                    </div><!--end col-->
                                                </div> <!--end form-group-->
                                                <?= $this->Form->end() ?><!--end form-->
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Solutic Tech © <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->
