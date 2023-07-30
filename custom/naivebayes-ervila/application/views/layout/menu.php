<?php
$role = "admin";
$menu = [
  array(
    "name"=>"Dashboard",
    "icon"=>"remixicon-dashboard-line",
    "link"=>base_url()."kmeanselbow",
    "role"=>"all"
),
array(
    "name"=>"Dataset",
    "icon"=>"remixicon-honour-line",
    "link"=>base_url()."naivebayes/dataset",
    "role"=>"admin"
),
array(
    "name"=>"Naivebayes",
    "icon"=>"remixicon-honour-line",
    "link"=>base_url()."naivebayes/process",
    "role"=>"all"
),array(
    "name"=>"Logout",
    "icon"=>"remixicon-honour-line",
    "link"=>base_url()."auth/logout",
    "role"=>"all"
)];
?>
<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
            <?php
                foreach ($menu as $key) {
                  if($role==$key['role'] || $key['role']=="all"){
                    ?>
                    <li class="has-submenu">
                        <a href="<?=$key['link']?>">
                            <i class="<?=$key['icon']?>"></i><?=$key['name']?>
                        </a>
                    </li>
                    <?php
                  }
                }
            ?>
            </ul>
            <!-- End navigation menu -->
            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
