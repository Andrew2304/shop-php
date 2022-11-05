<section class="pt-page pt-page-8" data-id="product-detail">
    <div class="portfolio-nav">
        <div id="portfolio-close-button" class="portfolio-close-button">
            <a href="#portfolio"><i class="fa fa-close"></i></a>
        </div>
    </div>

    <div class="portfolio-title">
        <h1>{{ detail_product.name}}</h1>
    </div>

    <div class="row">
        <div class="col-sm-4 col-md-4 portfolio-block">
            <!-- Project Description -->
            <div class="block-title">
                <h3>Description</h3>
            </div>
            <ul class="project-general-info">
                <li><p><span class="title">Year:</span> {{ detail_product.year}}</p></li>
                <li><p><span class="title">Time:</span> {{ detail_product.time}}</p></li>
                <li><p><span class="title">Member:</span> {{ detail_product.member}}</p></li>
                <li><p><span class="title">Position:</span> {{ detail_product.position}}</p></li>
                <li><p><a href="#" target="_blank">{{ detail_product.link}}</a></p></li>
            </ul>

            <p class="text-justify">{{ detail_product.description}}</p>
            <!-- /Project Description -->

            <!-- Technology -->
            <div class="tags-block">
                <div class="block-title">
                    <h3>Technology</h3>
                </div>
                <ul class="tags">
                    <li ng-repeat="item in detail_product.technologies"><a>{{ item}}</a></li>
                </ul>
            </div>
            <!-- /Technology -->
        </div>

        <div class="col-md-8" style="margin-top: 30px">
            <div class="block-title">
                <h3>Images</h3>
            </div>
            <div class="demo-gallery" style="margin-top: -15px;">
                <ul id="image-gallery">
                    <li ng-repeat="(index, image) in detail_product.images track by index"
                        ng-data-src="{{ getImage(image_url) }}"
                        data-sub-html="">
                        <a href="{{ url + 'assets/images/products/' + image }}" data-fancybox="gallery">
                            <img class="img-responsive" ng-src="{{ url + 'assets/images/products/' + image }}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        
    </div>
</section>