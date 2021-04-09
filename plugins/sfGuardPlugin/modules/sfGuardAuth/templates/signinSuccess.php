<div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Kintoz POS</h1>
                  </div>
				  <font color="red"><?php echo $form['username']->renderError() ?></font>
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="user">
<?php $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin'); ?>
<?php $form = new $class(); ?>
                    <div class="form-group" style="text-align:center;">
					<?php echo $form['username']->render(array('size' => '20','placeholder' => 'USERNAME','class' => "form-control-login form-control-user")) ?>
                    </div>
                    <div class="form-group" style="text-align:center;">
                    <?php echo $form['password']->render(array('size' => '20','placeholder' => 'PASSWORD','class' => "form-control-login form-control-user"))?>
                    </div>
					<input type="submit" onclick="myFunction()" value="LOGIN" class="btn btn-primary btn-user btn-block">
  
                    <hr>
                    <a href="http://www.posphilippines.com/" class="btn btn-info btn-user btn-block">
                      <b class="fas fa-info-circle fa-fw"></b> Kintoz POS Website
                    </a>
                    <a href="https://www.facebook.com/kintozpos/" class="btn btn-facebook btn-user btn-block">
                      <b class="fab fa-facebook-f fa-fw"></b> Chat with us
                    </a>
                  </form>