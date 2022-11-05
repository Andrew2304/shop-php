<section class="pt-page pt-page-1 section-with-bg section-paddings-0" style="background-image: url('assets/images/home_page_bg_2.jpeg');" data-id="home">
    <div class="home-page-block-bg">
        <div class="mask"></div>
    </div>
    <div class="home-page-block">
        <div class="v-align">
            <h2>{{ data.introduce.full_name.value}}</h2>
            <div id="rotate" class="text-rotate">
                <div>
                    <p class="home-page-description">{{ data.introduce.work.key}}</p>
                </div>
                <div>
                    <p class="home-page-description">{{ data.introduce.font_end.key}}:
                        <span ng-repeat="skill in data.skills[0].technologies">{{skill.name}}, </span>
                    </p>
                </div>
                <div>
                    <p class="home-page-description">{{ data.introduce.back_end.key}}: 
                        <span ng-repeat="skill in data.skills[1].technologies">{{skill.name}}, </span>
                    </p>
                </div>
                <div>
                    <p class="home-page-description">{{ data.introduce.database.key}}:
                        <span ng-repeat="skill in data.skills[3].technologies">{{skill.name}}, </span>
                    </p>
                </div>
                <div>
                    <p class="home-page-description">{{ data.introduce.tool.key}}:
                        <span ng-repeat="skill in data.skills[2].technologies">{{skill.name}}, </span>
                    </p>
                </div>
            </div>

            <div class="block end about">
                <ul class="info-list">
                    <li ng-repeat="item in data.introduce" ng-if="item.isShow">
                        <span class="title">{{ item.key}}</span><span class="value">{{item.value}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>