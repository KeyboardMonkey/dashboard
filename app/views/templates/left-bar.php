 <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?=base_url();?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">AR Malik</h5>
              	  <h6 class="centered" style="color:#fff;"><?=strtoupper($this -> session -> userdata('type'));?></h6>
              	  	
                  <li class="mt">
                      <a href="<?=base_url();?>index.php/home">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=base_url();?>index.php/users/view">User List</a></li>
                          <li><a  href="<?=base_url();?>index.php/users/add">New User</a></li>
                          <li><a  href="#">Privileges</a></li>
                          <li><a  href="#">Bans</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Courses</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=base_url();?>index.php/courses/view">Course List</a></li>
                          <li><a  href="<?=base_url();?>index.php/courses/add">New Course </a></li>
                          <li><a  href="<?=base_url();?>index.php/courses/add">Show/Hide Course </a></li>
                          <li><a  href="<?=base_url();?>index.php/courses/add">Course Categories</a></li>
                          <li><a  href="<?=base_url();?>index.php/courses/add">Upcoming Courses</a></li>
                      </ul>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Learning Tracks</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">View Tracks</a></li>
                          <li><a  href="<?=base_url();?>index.php/tracks/add">Add New Track</a></li>
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Course Summaries</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=base_url();?>index.php/summary/mark">Mark Summaries</a></li>
                          <li><a  href="">Marked Summaries</a></li>
                      </ul>
                  </li> 

                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>System Cofigurations</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">Quiz Criteria</a></li>
                          <li><a  href="#">Course Criteria</a></li>
                          <li><a  href="#">Points Criteria</a></li>
                          <li><a  href="#">Course Categories</a></li>
                          <li><a  href="#">Maintainance Mode</a></li>
                         
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->