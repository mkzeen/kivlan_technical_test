
<!-- Left side column. contains the logo and sidebar -->

    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Mokhamad Kivlan Zein</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="

        <?php
    if ($tampilan == "home") {
        # code...
        echo "active";
    }
    ?>
        ">
            <a href="<?=base_url()?>">
                <i class="fa fa-th"></i> <span>Data Pegawai</span>
                <span class="pull-right-container"></span>
            </a>
        </li>

        <li class="
        <?php
    if ($tampilan == "poli") {
        # code...
        echo "active";
    }
    ?>
        ">
            <a href="<?=base_url()?>poli">
                <i class="fa fa-th"></i> <span>Data Poli</span>
                <span class="pull-right-container"></span>
            </a>
        </li>

        <li class="<?php
        
    if ($tampilan == "jadwal") {
        # code...
        echo "active";
    }
    ?>">
            <a href="<?=base_url()?>jadwal">
                <i class="fa fa-th"></i> <span>Atur Jadwal</span>
                <span class="pull-right-container"></span>
            </a>
        </li>

        

    </ul>