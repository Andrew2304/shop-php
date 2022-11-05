<section class="pt-page pt-page-3" data-id="resume">
                        <div class="section-title-block">
                            <h2 class="section-title">{{ data.category.education_and_experience}}</h2>
                            <h5 class="section-description">{{ data.introduce.experienceYear}}</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 subpage-block">
                                <div class="block-title">
                                    <h3>{{ data.category.education}}</h3>
                                </div>
                                <div class="timeline">
                                    <!-- Single event -->
                                    <div class="timeline-event te-primary" ng-repeat="item in data.educations">
                                        <h5 class="event-date">{{item.year}}</h5>
                                        <h4 class="event-name">{{item.school}}</h4>
                                        <p>{{item.major}}</p>
                                        <p>{{item.gpa}}</p>
                                    </div>
                                    <!-- Single event -->
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 subpage-block">
                                <div class="block-title">
                                    <h3>Experience</h3>
                                </div>
                                <div class="timeline">
                                    <!-- Single event -->
                                    <div class="timeline-event te-primary" ng-repeat="item in data.experiences">
                                        <h5 class="event-date">{{ item.time}}</h5>
                                        <h4 class="event-name">{{ item.position}}</h4>
                                        <span class="event-description">{{ item.company}}</span>
                                        <p ng-repeat="task in item.tasks">{{ task}}</p>
                                    </div>
                                    <!-- Single event -->
                                </div>
                            </div>
                        </div>
                    </section>