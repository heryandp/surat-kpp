</head>
<body class="fixed skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="#" class="logo"><b>SIAP</b></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                         <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url('assets/upload/profil/thumb/'.$this->session->userdata('avatar')) ?>" class="user-image" alt="User Image"/>
                                <span class="hidden-xs">Selamat datang, <?php echo $this->session->userdata('firstname')?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url('assets/upload/profil/thumb/'.$this->session->userdata('avatar')) ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $this->session->userdata('fullname')?>
                                        <small><?php if($this->ion_auth->is_admin()){ echo 'Administrator'; } else { echo 'Member';} ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="!#" class="btn btn-default btn-flat" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#gantiprofil">Foto Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-default btn-flat">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->