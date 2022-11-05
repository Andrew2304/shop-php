<?php include 'layouts/css.php';?>

<body ng-app="app" ng-controller="bodyController">
    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page hide js-load">
        <?php include 'layouts/header.php';?>

        <!-- Main Content -->
        <div id="main" class="site-main">
            <!-- Page changer wrapper -->
            <div class="pt-wrapper">
                <!-- Subpages -->
                <div class="subpages">
                    <?php include 'components/home.php';?>
                    <?php include 'components/about.php';?>
                    <?php include 'components/resume.php';?>
                    <?php include 'components/kill.php';?>
                    <?php include 'components/portfolio.php';?>
                    <?php include 'components/contact.php';?>
                    <?php include 'components/project_detail.php';?>
                </div>
            </div>
            <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->

    </div>
    <?php include 'layouts/js.php';?>
</body>
</html>
