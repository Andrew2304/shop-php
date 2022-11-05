<section class="pt-page pt-page-3" data-id="skill">
    <div class="section-title-block">
        <h2 class="section-title">{{ data.category.skills}}</h2>
        <h5 class="section-description">{{ data.introduce.experienceYear}}</h5>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 subpage-block" >
            <div ng-repeat-start="skill in data.skills" ng-if="skill.position == 'left'">
                <div class="block-title" >
                    <h3>{{ skill.name}}</h3>
                </div>
                <div class="skills-info {{ item.name}}">
                    <span ng-repeat-start="item in skill.technologies">{{ item.name}} </span>
                    <span style="float:right">{{ item.level}}/{{ skill.level_max}}</span>                              
                    <div class="skill-container">
                        <div class="skill-percentage skill-{{ item.level}}"></div>
                    </div>
                    <div ng-repeat-end></div>
                </div>
            </div>
            <div ng-repeat-end></div>
        </div>

        <div class="col-sm-6 col-md-6 subpage-block" >
            <div ng-repeat-start="skill in data.skills" ng-if="skill.position == 'right'">
                <div class="block-title" >
                    <h3>{{ skill.name}}</h3>
                </div>
                <div class="skills-info {{ item.name}}">
                    <span ng-repeat-start="item in skill.technologies">{{ item.name}} </span>
                    <span style="float:right">{{ item.level}}/{{ skill.level_max}}</span>                              
                    <div class="skill-container">
                        <div class="skill-percentage skill-{{ item.level}}"></div>
                    </div>
                    <div ng-repeat-end></div>
                </div>
            </div>
            <div ng-repeat-end></div>
        </div>
    </div>
</section>