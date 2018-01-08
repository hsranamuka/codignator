<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->

        <section style="height: auto;" class="sidebar">

          <!-- Sidebar user panel -->

          <div class="user-panel">

            <div class="pull-left image">

              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            </div>

      

          </div>

  

          <!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">

            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview">

              <a href="<?php echo base_url() ?>index.php/dashboard/index">

                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 

              </a>

 

            </li>

           <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Student Manager</span> <i class="fa fa-angle-left pull-right"></i> </a><ul class="treeview-menu">

              <li><a href="<?php echo base_url() ?>index.php/student/dashboard/student_save"><i class="fa fa-circle-o"></i>New Student</a></li>

              <li><a href="<?php echo base_url() ?>index.php/student/dashboard/student_search"><i class="fa fa-circle-o"></i>Search Student</a></li>

              

                    <li><a href="<?php echo base_url() ?>index.php/student/dashboard/old_to_new"><i class="fa fa-circle-o"></i>Data Transfer</a></li>

            

             <li><a href="<?php echo base_url() ?>index.php/student/dashboard/suspend_student"><i class="fa fa-circle-o"></i>Suspend Student</a></li>

            </ul>

          </li>

      

             <li><a href="<?php echo base_url() ?>index.php/student/dashboard/attendance"><i class="fa fa-circle-o"></i>Attendance</a></li>

               <li><a href="<?php echo base_url() ?>index.php/student/dashboard/fee"><i class="fa fa-circle-o"></i>Cashier</a></li>

                <li><a href="<?php echo base_url() ?>index.php/student/dashboard/Revision"><i class="fa fa-circle-o"></i>Revision</a></li>

                <li><a href="<?php echo base_url() ?>index.php/report/dashboard/students_report"><i class="fa fa-circle-o"></i>Report</a></li>

          		<?php  if($this->session->userdata('user_name')=="Krishan@Bandara"){ ?>    

                 <li><a href="<?php echo base_url() ?>index.php/account/dashboard/account"><i class="fa fa-circle-o"></i>Account</a></li>

                 

                 

                 

          		<?php   }   ?>

          </li>
          
            <li><a href="<?php echo base_url() ?>index.php/report/dashboard/download_cards"><i class="fa fa-circle-o"></i>Student Cards</a></li>

          </ul>

        </section>

        <!-- /.sidebar -->

      </aside>
