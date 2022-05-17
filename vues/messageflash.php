<?php
  if(!empty($_SESSION['message']))
  {
      $mesmsg=$_SESSION['message'];
      foreach($mesmsg as $key=>$message)
      {
          echo '<div class="container pt-5 mt-5" >
                  <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">'.$message.'
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>';
      }
      $_SESSION['message']=[];
  } ?>