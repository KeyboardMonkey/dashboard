
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php
          $allUsers = $this -> user -> get();
      ?>
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> User Management</h3>
            <div class="row mt">
                <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> User List</h4>
                            <a href="">Add New User</a>
                            <hr>
                              <thead>
                              <tr>
                                  
                                  <th><i class="fa fa-bullhorn"></i> Username</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email Address</th>
                                  <th><i class="fa fa-bookmark"></i> Last Login</th>
                                  <th><i class=" fa fa-edit"></i> Account Type</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                                  foreach ($allUsers as $key => $user) {
                                  
                                  
                              ?>
                              <tr>
                                  <td><a href="<?=base_url();?>index.php/users/view/<?=$user->user_id;?>"><?=$user->username;?></a></td>
                                  
                                  <td class="hidden-phone"><?=$user->email;?></td>
                                  <td><?=$user->last_login;?> </td>
                                  <td><span class="label label-info label-mini"><?=$user->type;?></span></td>
                                  <td>
                                      <a href="<?=base_url();?>index.php/users/view/<?=$user->user_id;?>"  class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                      <a href="<?=base_url();?>index.php/users/edit/<?=$user->user_id;?>"  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="<?=base_url();?>index.php/users/delete/<?=$user->user_id;?>"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a> 
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

            </div>
      
    </section><!-- /wrapper -->
      </section><!-- /MAIN CONTENT -->

     
    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>