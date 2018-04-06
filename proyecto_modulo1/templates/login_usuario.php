<div class="container my-5">  
    <?php if(isset($error)){?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?></p>
    </div> 
    <?php } ?>
    <div class="row">
        <div class="col mt-1 text-center">
            <h5>Te estás logeando como Usuario</h5>
        </div>    
    </div>
    <form method="POST" action="<?php echo $root?>loginUsuario/auth.php" id="login">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input id="email" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input id="password" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    $(document).ready(function(){
        $("#login").validate({
            rules: {
               email: "required",
               password: "required"
            },
            messages: {
                email: "Debes introducir un email válido",
                password: "Debes introducir una contraseña válida"
            }
        })
    })
</script>