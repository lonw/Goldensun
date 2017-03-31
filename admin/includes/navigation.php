    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.php">Admin Panel</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $_SESSION['username'] ?><i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="functions/logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                     <ul class="nav">
                        <li class="active">
                            <a href="../index.php">Goldensun Capital</a>
                        </li>

                        <!-- <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Language <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="user.php">中文</a>
                                    <a tabindex="-1" href="user.php">English</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
