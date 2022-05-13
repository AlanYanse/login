<?php
  require_once "inc/config.php";
?>
<!doctype html>
 <html>
   <?php include_once "inc/head.php";?>
   <body>
     <div class= "container">
       <div class= "row d-flex justify-content-around mt-5">
         <div class="card col-md-6 col-md-offset-6">
         <article class="card-body">
          <h4 class="card-title mb-4 mt-1 text-center">Registro</h4>
            <form action="POST" class="form_registro">
              <div class="form-group">
                  <label>Email</label>
                  <input id="email" type="email" class="form-control" placeholder="email" require>
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input id="password" type="password" class="form-control" placeholder="******" require>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
              </div>
            </form> 
          <div id="msg_error" class="alert alert-danger" role="alert" style="display: none">
          </div>
         </article>
         </div>
       </div>
     </div>
    <?php include_once "inc/footer.php";?>
   </body>

 </html>
