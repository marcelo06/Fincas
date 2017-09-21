<body>
<h1 align="center">Inicia Sesion </h1>
 <div class="container">
 <?= form_open('login/autenticar')  ?>

 <?php 
 	$usuario = array('class' => 'form-control',
 					 'placeholder' => 'Username',
 					 'id' => 'username',
 					 'type' => 'text',
 					 'name' => 'usuario');

 	$password = array('class' => 'form-control',
 					 'placeholder' => 'Password',
 					 'id' => 'password',
 					 'type' => 'password',
 					 'name' => 'password');
  ?>

            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <div class="row-fluid user-row">
                                <img src="http://icon-icons.com/icons2/37/PNG/512/cow_animal_4447.png" class="img-responsive" alt="Conxole Admin"/>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form" class="form-signin">
                                <fieldset>
                                    <label class="panel-login">
                                        <div class="login_result"></div>
                                    </label>
                                    <!-- 
                                    <input class="form-control" placeholder="Username" id="username" type="text">
                                    <input class="form-control" placeholder="Password" id="password" type="password"> 
                                    -->
									<?= form_input($usuario) ?>
									<?= form_input($password) ?>

                                    <br></br>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
	<?= form_close() ?>    
    </div>
</body>
</html>