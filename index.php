<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- bootstrap 4-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- font awesome 5 -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!--  font awesome 4 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- style custom -->
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body class="bg-dark">
        <!-- container main -->
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 730px; height: 500px;">
                 <!-- container -->
                <div class="d-flex area-container">
                     <!-- brand -->
                    <div class="area-brand bg-info d-flex flex-column text-center">
                        <div class="brand">
                            <div class="p-2 text-white"><span><b>Image Brand</b></span></div>
                            <div class="p-2"><i class="far fa-image text-white"></i></div>
                        </div>
                    </div><!-- end brand -->

                    <!-- form login -->
                    <div class="form-login text-center col-sm-6">
                        <!-- title -->
                        <div class="p-2 text-secondary">
                            <h2>Login</h2>
                        </div>
                        <!-- form -->
                        <form action="" method="post">
                            <!-- input login -->
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark">
                                        <i class="fas fa-user-circle text-white"></i>
                                    </span>
                                </div>
                                <input type="text"class="form-control" placeholder="login" id="username" name="username">
                            </div><!-- end input login-->

                            <!-- input password -->
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark">
                                        <i class="fas fa-lock text-white"></i>
                                    </span>
                                </div>
                                <input type="password"class="form-control" placeholder="senha" id="userpass" name="userpass">
                            </div><!-- end input password-->

                            <!-- button submit -->
                            <button class="btn btn-info btn-block" type="submit">Entrar</button>
                            <div class="p-2 row">
                                <div class="col-sm-5">    
                                    <a href="signup.php">cadastrar-se</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="forgotpassword.php">esquece a senha</a>
                                </div>
                            </div>
                        </form><!-- end form -->
                    </div><!-- end form login -->

                </div><!-- end container-->
            </div>
        </div><!-- end container main-->
      
        <footer class="container-fluid text-center text-secondary p-3">
            <span>&copy;Felipe Cassiano - <script>document.write(new Date().getFullYear());</script></span>
        </footer>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- script -->
        <script>
    
        </script>
    
    </body>
</html>