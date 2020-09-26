
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">

            <?php 
              foreach ($log as $key => $value) {?>

            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>gambar_petugas/<?php echo $value->img;?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $value->nama; ?></h3>

              <p class="text-muted text-center">Petugas Perpus</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><?php echo $value->id_petugas; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Password</b> <a class="pull-right"><?php echo $value->password; ?></a>
                </li>
                <li class="list-group-item">
                  <b>No Hp</b> <a class="pull-right"><?php echo $value->hp; ?></a>
                </li>
              </ul>

              <a href="http://www.Facebook.com" class="btn btn-primary btn-block"><b><i class="fa fa-facebook"></i> Facebook</b></a>
            </div>
            <!-- /.box-body -->
          <?php 
                    }
                    ?>
          </div>
           
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <?php foreach ($log as $key => $value) {?>

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">About Me</a></li>
              

            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>gambar_petugas/<?php echo $value->img;?>" alt="user image">
                        <span class="username">
                          <a href=""><?php echo $value->nama; ?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description"><?php echo $value->alamat; ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    <?php echo $value->ket; ?>
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                  </ul>

                </div>
                <!-- /.post -->

              </div>

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        <?php } ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    
