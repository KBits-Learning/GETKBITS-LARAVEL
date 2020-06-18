
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login Kbits</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">


</head>

<body id="indexLogin">

<nav class="navbar fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#">Kbits</a>
  <form class="form-inline my-2 my-lg-0">

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  Launch demo modal
</button>

    </form>
</nav>



<div class="form-signin">
<!---sign in--->
    <form  action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="text-center mb-4">
            <img class="mb-4" src="kbits.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Kbits</h1>
              </div>

        <div class="form-label-group">
            <input type="text" id="Usu" class="form-control" name="user" placeholder="Usuario" required />
            <label for="inputUsu">User</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="pas" name="pass" class="form-control" placeholder="Contraseña" required />
            <label for="inputPas">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <button type="submit" name="ingresar" class="btn btn-lg btn-primary btn-block">
            <i class="ace-icon fa fa-key"></i>
            <span class="bigger-110">Login</span>
        </button>


            <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <i class="fas fa-user-circle"></i>
            <span class="bigger-110">Create account!</span>
            </button>
    </form>


         <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Join our team</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!---sign up-->
                        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                            <fieldset>
                                <label>
                                    <span>
                                        Name:
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required />
                                    </span>
                                </label>

                                <label>
                                    <span>
                                        EMAIL:
                                        <input type="email" class="form-control" name="correo" placeholder="Email" required />
                                    </span>
                                </label>
                                <label>
                                    <span>
                                        USER:
                                        <input type="text" class="form-control" name="user" placeholder="Usuario" required />
                                    </span>
                                </label>
                                <label>
                                    <span>
                                        PASSWORD:
                                        <input type="password" class="form-control" name="pass" placeholder="Password" required />
                                    </span>
                                </label>

                                <label>
                                    <span>
                                        PASSWORD:
                                        <input type="password" class="form-control" name="passr" placeholder="Repetir password" />

                                    </span>
                                </label>

                                <label class="block">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl">
                                        Acepto los<a href="#">Terminos de Uso</a>
                                    </span>
                                </label>

                                <div class="space-50"></div>

                                <button type="submit" name="registrar" class="width-65 pull-right btn btn-sm btn-success">
                                    <span class="bigger-110">SIGN UP</span>
                                </button>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                    </div>

                    </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>

      <!-----modalCo--->

       <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">One more step Let's your teamup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!---SINGUP CO--->

        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                            <fieldset>
                                <label>
                                    <span>
                                        Company Name:
                                        <input type="text" class="form-control" name="0" placeholder="0" required />
                                    </span>
                                </label>

                                <label>
                                    <span>
                                        Company size:
                                        <input type="email" class="form-control" name="0" placeholder="0" required />
                                    </span>
                                </label>
                                <label>
                                    <span>
                                        Industry:
                                        <input type="text" class="form-control" name="0" placeholder="0" required />
                                    </span>
                                </label>
                                <label>




                                <div class="space-50"></div>

                                <button type="submit" name="registrar" class="width-65 pull-right btn btn-sm btn-success">
                                    <span class="bigger-110">CREATE TEAM</span>
                                </button>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                    </div>

                    </fieldset>
                    </form>


      <!--SING END--->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

      <!----modal end--->


    </div>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</body>

</html>