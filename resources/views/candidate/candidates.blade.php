
@extends('app')
@section('main')
<!-- Our Candidate List -->
<section class="our-faq bgc-fa mt50">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-xl-3 dn-smd">
        <div class="faq_search_widget mb30">
          <h4 class="fz20 mb15">Search Keywords</h4>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Find Your Question" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-search"></span></button>
            </div>
          </div>
        </div>
        <div class="faq_search_widget mb30">
          <h4 class="fz20 mb15">Location</h4>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Find Your Question" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-location-pin"></span></button>
            </div>
          </div>
        </div>
        <div class="faq_search_widget mb30">
          <h4 class="fz20 mb15">Category</h4>
          <div class="candidate_revew_select">
            <select class="selectpicker w100 show-tick">
              <option>All Categories</option>
              <option>Recent</option>
              <option>Old Review</option>
            </select>
          </div>
        </div>
        <div class="cl_latest_activity mb30">
          <h4 class="fz20 mb15">Last Activity</h4>
          <div class="ui_kit_radiobox">
            <div class="radio">
              <input id="radio_one" name="radio" type="radio" checked="">
              <label for="radio_one"><span class="radio-label"></span> Last Hour</label>
            </div>
            <div class="radio">
              <input id="radio_two" name="radio" type="radio">
              <label for="radio_two"><span class="radio-label"></span> Last 24 hours</label>
            </div>
            <div class="radio">
              <input id="radio_three" name="radio" type="radio">
              <label for="radio_three"><span class="radio-label"></span> Last 7 days</label>
            </div>
            <div class="radio">
              <input id="radio_four" name="radio" type="radio">
              <label for="radio_four"><span class="radio-label"></span> Last 14 days</label>
            </div>
            <div class="radio">
              <input id="radio_five" name="radio" type="radio">
              <label for="radio_five"><span class="radio-label"></span> Last 30 days</label>
            </div>
            <a class="text-thm2 pl30" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
          </div>
        </div>
        <div class="cl_pricing_slider mb30">
          <h4 class="fz20 mb20">Hourly Rate</h4>
          <div id="slider-range"></div>
          <p class="text-center">
            <input class="sl_input" type="text" id="amount">
          </p>
        </div>
        <div class="cl_skill_checkbox mb30">
          <h4 class="fz20 mb20">Skills</h4>
          <div class="content ui_kit_checkbox text-left">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">HTML 5</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">Javascript</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3">
              <label class="custom-control-label" for="customCheck3">PHP</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck4">
              <label class="custom-control-label" for="customCheck4">jQuery</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck5">
              <label class="custom-control-label" for="customCheck5">UX/UI Design</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck6">
              <label class="custom-control-label" for="customCheck6">Design</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck7">
              <label class="custom-control-label" for="customCheck7">Web Design</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck8">
              <label class="custom-control-label" for="customCheck8">Graphic Design</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck9">
              <label class="custom-control-label" for="customCheck9">Sketch App</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck10">
              <label class="custom-control-label" for="customCheck10">UI Design</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck11">
              <label class="custom-control-label" for="customCheck11">Graphic Design</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck12">
              <label class="custom-control-label" for="customCheck12">Sketch App</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck13">
              <label class="custom-control-label" for="customCheck13">UI Design</label>
            </div>
          </div>
        </div>
        <div class="cl_carrer_lever mb20">
          <div id="accordion" class="accordion">
              <div class="link mb10">Career Level<i class="fa fa-caret-up"></i></div>
              <div class="cl_submenu">
              <div class="ui_kit_checkbox">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck14">
                  <label class="custom-control-label" for="customCheck14">Intermediate</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck15">
                  <label class="custom-control-label" for="customCheck15">Normal</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck16">
                  <label class="custom-control-label" for="customCheck16">Special</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck17">
                  <label class="custom-control-label" for="customCheck17">Experienced</label>
                </div>
              </div>
              </div>
          </div>
        </div>
        <div class="cl_carrer_lever mb20">
          <div id="accordion" class="accordion">
              <div class="link mb10">Experince<i class="fa fa-caret-up"></i></div>
              <div class="cl_submenu">
              <div class="ui_kit_checkbox">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck18">
                  <label class="custom-control-label" for="customCheck18">1Year to 2Year</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck19">
                  <label class="custom-control-label" for="customCheck19">2Year to 3Year</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck20">
                  <label class="custom-control-label" for="customCheck20">3Year to 4Year</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck21">
                  <label class="custom-control-label" for="customCheck21">4Year to 5Year</label>
                </div>
              </div>
              </div>
          </div>
        </div>
        <div class="cl_carrer_lever">
          <div id="accordion" class="accordion">
              <div class="link mb10">Gender<i class="fa fa-caret-up"></i></div>
              <div class="cl_submenu">
              <div class="ui_kit_checkbox">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck22">
                  <label class="custom-control-label" for="customCheck22">Male</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck23">
                  <label class="custom-control-label" for="customCheck23">Female</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck24">
                  <label class="custom-control-label" for="customCheck24">Others</label>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-xl-9">
        
        <div class="row">
          <div class="col-sm-6 col-lg-6">
            <div class="candidate_job_alart_btn">
              <h4 class="fz20 mb15">20 Candidates Found</h4>
              <a class="btn btn-thm" href="#"><span class="flaticon-mail"></span> Get Job Alerts</a>
              <button class="btn btn-thm btns dn db-991 float-right">Show Filter</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-6">
            <div class="candidate_revew_select text-right mt50">
              <ul>
                <li class="list-inline-item">Sort by:</li>
                <li class="list-inline-item">
                  <select class="selectpicker show-tick">
                    <option>Newest</option>
                    <option>Recent</option>
                    <option>Old Review</option>
                  </select>
                </li>
              </ul>
            </div>

            <div class="content_details">
              <div class="details">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>Hide Filter</span><i>×</i></a>
                <div class="faq_search_widget mb30">
                  <h4 class="fz20 mb15">Search Keywords</h4>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Find Your Question" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-search"></span></button>
                    </div>
                  </div>
                </div>
                <div class="faq_search_widget mb30">
                  <h4 class="fz20 mb15">Location</h4>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Find Your Question" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-location-pin"></span></button>
                    </div>
                  </div>
                </div>
                <div class="faq_search_widget mb30">
                  <h4 class="fz20 mb15">Category</h4>
                  <div class="candidate_revew_select">
                    <select class="selectpicker w100 show-tick">
                      <option>All Categories</option>
                      <option>Recent</option>
                      <option>Old Review</option>
                    </select>
                  </div>
                </div>
                <div class="cl_latest_activity mb30">
                  <h4 class="fz20 mb15">Date Posted</h4>
                  <div class="ui_kit_radiobox">
                    <div class="radio">
                      <input id="radio_one" name="radio" type="radio" checked="">
                      <label for="radio_one"><span class="radio-label"></span> Last Hour</label>
                    </div>
                    <div class="radio">
                      <input id="radio_two" name="radio" type="radio">
                      <label for="radio_two"><span class="radio-label"></span> Last 24 hours</label>
                    </div>
                    <div class="radio">
                      <input id="radio_three" name="radio" type="radio">
                      <label for="radio_three"><span class="radio-label"></span> Last 7 days</label>
                    </div>
                    <div class="radio">
                      <input id="radio_four" name="radio" type="radio">
                      <label for="radio_four"><span class="radio-label"></span> Last 14 days</label>
                    </div>
                    <div class="radio">
                      <input id="radio_five" name="radio" type="radio">
                      <label for="radio_five"><span class="radio-label"></span> Last 30 days</label>
                    </div>
                    <a class="text-thm2 pl30" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
                  </div>
                <div class="cl_latest_activity mb30">
                </div>
                  <h4 class="fz20 mb15">Job Type</h4>
                  <div class="ui_kit_whitchbox">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1">Freelance</label>
                    </div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2">Full Time</label>
                    </div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3">Part Time</label>
                    </div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch4">
                      <label class="custom-control-label" for="customSwitch4">Internship</label>
                    </div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch5">
                      <label class="custom-control-label" for="customSwitch5">Temporary</label>
                    </div>
                  </div>
                </div>
                <div class="cl_pricing_slider mb30">
                  <h4 class="fz20 mb20">Hourly Rate</h4>
                  <div id="slider-range"></div>
                  <p class="text-center">
                    <input class="sl_input" type="text" id="amount">
                  </p>
                </div>
                <div class="cl_skill_checkbox mb30">
                  <h4 class="fz20 mb20">Skills</h4>
                  <div class="content ui_kit_checkbox text-left">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">HTML 5</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                      <label class="custom-control-label" for="customCheck3">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                      <label class="custom-control-label" for="customCheck4">jQuery</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck5">
                      <label class="custom-control-label" for="customCheck5">UX/UI Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck6">
                      <label class="custom-control-label" for="customCheck6">Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck7">
                      <label class="custom-control-label" for="customCheck7">Web Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck8">
                      <label class="custom-control-label" for="customCheck8">Graphic Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck9">
                      <label class="custom-control-label" for="customCheck9">Sketch App</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck10">
                      <label class="custom-control-label" for="customCheck10">UI Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck11">
                      <label class="custom-control-label" for="customCheck11">Graphic Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck12">
                      <label class="custom-control-label" for="customCheck12">Sketch App</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck13">
                      <label class="custom-control-label" for="customCheck13">UI Design</label>
                    </div>
                  </div>
                </div>
                <div class="cl_carrer_lever mb30">
                  <div id="accordion" class="accordion">
                      <div class="link mb10">Career Level<i class="fa fa-caret-up"></i></div>
                      <div class="cl_submenu">
                      <div class="ui_kit_checkbox">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck14">
                          <label class="custom-control-label" for="customCheck14">Intermediate</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck15">
                          <label class="custom-control-label" for="customCheck15">Normal</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck16">
                          <label class="custom-control-label" for="customCheck16">Special</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck17">
                          <label class="custom-control-label" for="customCheck17">Experienced</label>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
                <div class="cl_carrer_lever mb30">
                  <div id="accordion" class="accordion">
                      <div class="link mb10">Experince<i class="fa fa-caret-up"></i></div>
                      <div class="cl_submenu">
                      <div class="ui_kit_checkbox">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck18">
                          <label class="custom-control-label" for="customCheck18">1Year to 2Year</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck19">
                          <label class="custom-control-label" for="customCheck19">2Year to 3Year</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck20">
                          <label class="custom-control-label" for="customCheck20">3Year to 4Year</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck21">
                          <label class="custom-control-label" for="customCheck21">4Year to 5Year</label>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
                <div class="cl_carrer_lever mb30">
                  <div id="accordion" class="accordion">
                      <div class="link mb10">Gender<i class="fa fa-caret-up"></i></div>
                      <div class="cl_submenu">
                      <div class="ui_kit_checkbox">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck22">
                          <label class="custom-control-label" for="customCheck22">Male</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck23">
                          <label class="custom-control-label" for="customCheck23">Female</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck24">
                          <label class="custom-control-label" for="customCheck24">Others</label>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
                <div class="cl_carrer_lever mb30">
                  <div id="accordion" class="accordion">
                      <div class="link mb10">Industry<i class="fa fa-caret-up"></i></div>
                      <div class="cl_submenu">
                      <div class="ui_kit_checkbox">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck25">
                          <label class="custom-control-label" for="customCheck25">Development</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck26">
                          <label class="custom-control-label" for="customCheck26">Management</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck27">
                          <label class="custom-control-label" for="customCheck27">Finance</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck28">
                          <label class="custom-control-label" for="customCheck28">HTML Department</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck29">
                          <label class="custom-control-label" for="customCheck29">Seo</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck30">
                          <label class="custom-control-label" for="customCheck30">Banking</label>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
                <div class="cl_carrer_lever">
                  <div id="accordion" class="accordion">
                      <div class="link mb10">Qualification<i class="fa fa-caret-up"></i></div>
                      <div class="cl_submenu">
                      <div class="ui_kit_checkbox">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck31">
                          <label class="custom-control-label" for="customCheck31">Certificate</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck32">
                          <label class="custom-control-label" for="customCheck32">Diploma</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck33">
                          <label class="custom-control-label" for="customCheck33">Associate</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck34">
                          <label class="custom-control-label" for="customCheck34">Degree Bachelor</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck35">
                          <label class="custom-control-label" for="customCheck35">Associate</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck36">
                          <label class="custom-control-label" for="customCheck36">Master's Degree</label>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-12">
            <div class="candidate_list_view">
              <div class="thumb">
                <img class="img-fluid rounded-circle" src="{{ url('assets/images/team/c1.jpg') }}" alt="c1.jpg">
                <div class="cpi_av_rating"><span>4.5</span></div>
              </div>
              <div class="content">
                <h4 class="title">Lori Ramos</h4>
                <p>UX/UI Designer</p>
                <ul class="review_list">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>
                <ul class="address_list">
                  <li class="list-inline-item"><a href="#"><h4>Location</h4> <span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Rate</h4> <span class="flaticon-price"></span> $18.00 hour</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Job Success</h4> 95%</a></li>
                </ul>
              </div>
              <a class="btn btn-transparent float-right fn-lg" href="{{ url('/candidate/detail') }}">View Profile <span class="flaticon-right-arrow"></span></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="candidate_list_view">
              <div class="thumb">
                <img class="img-fluid rounded-circle" src="{{ url('assets/images/team/c2.jpg') }}" alt="c2.jpg">
                <div class="cpi_av_rating"><span>4.5</span></div>
              </div>
              <div class="content">
                <h4 class="title">Kathleen Moreno</h4>
                <p>iOS Expert + Node Dev</p>
                <ul class="review_list">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>
                <ul class="address_list">
                  <li class="list-inline-item"><a href="#"><h4>Location</h4> <span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Rate</h4> <span class="flaticon-price"></span> $18.00 hour</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Job Success</h4> 95%</a></li>
                </ul>
              </div>
              <a class="btn btn-transparent float-right fn-lg" href="{{ url('/candidate/detail') }}">View Profile <span class="flaticon-right-arrow"></span></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="candidate_list_view">
              <div class="thumb">
                <img class="img-fluid rounded-circle" src="{{ url('assets/images/team/c3.jpg') }}" alt="c3.jpg">
                <div class="cpi_av_rating"><span>4.5</span></div>
              </div>
              <div class="content">
                <h4 class="title">Ralph Johnson</h4>
                <p>iOS Expert + Node Dev</p>
                <ul class="review_list">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>
                <ul class="address_list">
                  <li class="list-inline-item"><a href="#"><h4>Location</h4> <span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Rate</h4> <span class="flaticon-price"></span> $18.00 hour</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Job Success</h4> 95%</a></li>
                </ul>
              </div>
              <a class="btn btn-transparent float-right fn-lg" href="{{ url('/candidate/detail') }}">View Profile <span class="flaticon-right-arrow"></span></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="candidate_list_view">
              <div class="thumb">
                <img class="img-fluid rounded-circle" src="{{ url('assets/images/team/c4.jpg') }}" alt="c4.jpg">
                <div class="cpi_av_rating"><span>4.5</span></div>
              </div>
              <div class="content">
                <h4 class="title">Peter Hawkins</h4>
                <p>iOS Expert + Node Dev</p>
                <ul class="review_list">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>
                <ul class="address_list">
                  <li class="list-inline-item"><a href="#"><h4>Location</h4> <span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Rate</h4> <span class="flaticon-price"></span> $18.00 hour</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Job Success</h4> 95%</a></li>
                </ul>
              </div>
              <a class="btn btn-transparent float-right fn-lg" href="{{ url('/candidate/detail') }}">View Profile <span class="flaticon-right-arrow"></span></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="candidate_list_view">
              <div class="thumb">
                <img class="img-fluid rounded-circle" src="{{ url('assets/images/team/c5.jpg') }}" alt="c5.jpg">
                <div class="cpi_av_rating"><span>4.5</span></div>
              </div>
              <div class="content">
                <h4 class="title">Randall Warren</h4>
                <p>iOS Expert + Node Dev</p>
                <ul class="review_list">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>
                </ul>
                <ul class="address_list">
                  <li class="list-inline-item"><a href="#"><h4>Location</h4> <span class="flaticon-location-pin"></span> Bothell, WA, USA</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Rate</h4> <span class="flaticon-price"></span> $18.00 hour</a></li>
                  <li class="list-inline-item"><a href="#"><h4>Job Success</h4> 95%</a></li>
                </ul>
              </div>
              <a class="btn btn-transparent float-right fn-lg" href="{{ url('/candidate/detail') }}">View Profile <span class="flaticon-right-arrow"></span></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mbp_pagination mt30">
              <ul class="page_navigation">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">45</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next <span class="flaticon-right-arrow"></span></a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection