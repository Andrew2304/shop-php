<section class="pt-page pt-page-4" data-id="portfolio">
    <div class="section-title-block">
        <h2 class="section-title">{{ data.category.products}}</h2>
    </div>

    <!-- Portfolio Content -->
    <div class="portfolio-content">

        <!-- Portfolio Grid -->
        <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

            <!-- Portfolio Item 1 -->
            <figure class="item" ng-repeat="item in data.products">
                <a href="javascript:;" ng-click="showDetailProduct(item)">
                    <img ng-src="{{ 'assets/images/products/' + item.thumbnail }}" alt="">
                    <div>
                        <h5 class="name">{{ item.name}}</h5>
                        <p style="color: white">
                            <span class="text-bold">Year:</span> {{ item.year}}
                        </p>
                        <p style="color: white">
                            <span class="text-bold">Time:</span> {{ item.time}}
                        </p>
                        <p style="color: white">
                            <span class="text-bold">Position:</span> {{ item.position}}
                        </p>
                        <p style="color: white">
                            <span class="text-bold">Members:</span> {{ item.member}}
                        </p>
                        <p style="color: white">
                            <span class="text-bold">Technologies Used:</span>
                            <span ng-repeat="technology in item.technologies">{{ technology}}, </span>
                        </p>
                        <!-- <small>Read more</small> -->
                    </div>
                </a>
                <p class="title">{{ item.name}}</p>
            </figure>
            <!-- /Portfolio Item 1 -->

        </div>
        <!-- /Portfolio Grid -->

    </div>
    <!-- /Portfolio Content -->

</section>