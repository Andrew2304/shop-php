<header id="site_header" class="header mobile-menu-hide">
    <div class="my-photo">
        <img src="assets/images/my_photo.jpg" alt="image">
        <div class="mask"></div>
    </div>

    <div class="site-title-block">
        <h1 class="site-title">{{ data.introduce.full_name.value}}</h1>
        <p class="site-description">{{ data.about.work}}</p>
    </div>

    <!-- Navigation & Social buttons -->
    <div class="site-nav">
        <!-- Main menu -->
        <ul id="nav" class="site-main-menu">
            <li>
                <a class="pt-trigger" href="#home" data-animation="58" data-goto="1">{{ data.category.introduce}}</a><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
            </li>
            <!-- <li>
                <a class="pt-trigger" href="#about" data-animation="59" data-goto="2">{{ data.category.about}}</a>
            </li> -->
            <li>
                <a class="pt-trigger" href="#resume" data-animation="60" data-goto="3">{{ data.category.education_and_experience}}</a>
            </li>
            <li>
                <a class="pt-trigger" href="#skill" data-animation="61" data-goto="4">{{ data.category.skills}}</a>
            </li>
            <li>
                <a class="pt-trigger" href="#portfolio" data-animation="62" data-goto="5">{{ data.category.products}}</a>
            </li>
            <li>
                <a class="pt-trigger" href="#contact" data-animation="63" data-goto="6">{{ data.category.contact}}</a>
            </li>
            <li class="hide">
                <a class="pt-trigger" href="#product-detail" data-animation="64" data-goto="7">{{ data.category.contact}}</a>
            </li>
        </ul>
        <!-- /Main menu -->

        <!-- Social buttons -->
        <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
        <!-- <ul class="social-links">
            <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
        </ul> -->
        <!-- /Social buttons -->
    </div>
    <!-- Navigation & Social buttons -->
</header>
<!-- /Header -->

<!-- Mobile Header -->
<div class="mobile-header mobile-visible">
    <div class="mobile-logo-container">
        <div class="mobile-site-title">{{ data.introduce.full_name.value}}</div>
    </div>

    <a class="menu-toggle mobile-visible">
        <i class="fa fa-bars"></i>
    </a>
</div>