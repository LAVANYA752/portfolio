@extends('app')
@section('title')
<title>My portfolio</title>
@endsection

@section('style')
@vite('resources/scss/editor.css')
@endsection

@section('content')
<section class="mainBlock">
    <div class="mainBlockInner">
        <div class="container z-index-5">
            <div class="headerSection">
                <div class="headerLogo">
                    
                </div>
                <div class="themeIcon">
                    @include('InnerBlock.themeSvg')
                </div>
            </div>
        </div>
        <div class="container z-index-3">
            <div class="firstFold">
                <div class="d-flex">
                    <div class="stickyBlock">
                        <div class="stickyBlockInner">
                            <div class="profileImage">
                                <img src="" alt="#">
                            </div>
                            <div class="font-32px headingBlock">Lavanya</div>
                            <div class="bgLight btnBlock">
                                UI/UX Designer
                            </div>
                            <div class="d-flex socialIconBlock">
                                <div class="bgLight socialIcon vAlignMiddle">
                                    @include('InnerBlock.themeSvg')
                                </div>
                                <div class="bgLight socialIcon vAlignMiddle">
                                    @include('InnerBlock.themeSvg')
                                </div>
                                <div class="bgLight socialIcon vAlignMiddle">
                                    @include('InnerBlock.themeSvg')
                                </div>
                                <div class="bgLight socialIcon vAlignMiddle">
                                    @include('InnerBlock.themeSvg')
                                </div>
                            </div>
                            <div class="detailedBlock">
                                <div class="detailContent">
                                     <div class="d-flex">
                                        <div class="iconsBlock">

                                        </div>
                                        <div>
                                            <div class="subText">

                                            </div>
                                            <div class="mainText">

                                            </div>
                                        </div>

                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightSideBlock">
                        <div class="topNavBlock">
                           
                            <ul class="nav  mb-3 topNavInnerBlock" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <div class="topNavInner active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <div class="contentBlock">
                                        <span class="d-flex">@include('InnerBlock.themeSvg')</span>
                                        <span>About</span>
                                    </div>
                                </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <div class="topNavInner" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <div class="contentBlock">
                                        <span class="d-flex">@include('InnerBlock.themeSvg')</span>
                                        <span>Resume</span>
                                    </div>
                                </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <div class="topNavInner" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <div class="contentBlock">
                                        <span class="d-flex">@include('InnerBlock.themeSvg')</span>
                                        <span>Contact</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                        
                        </div>
                        <div class="bottomBlock">
                            
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="afterHeaderBlock">
                                        <span>About</span>
                                        <span class="afterHeaderBlockEle"></span>
                                    </div>
                                    <div class="d-flex subText mb-15px">
                                        <span class="mb-15px">A passionate front-end developer with 2.3 years of experience in a
                                            startup environment, specializing in developing highperformance websites. Skilled in
                                            creating user-friendly, responsive, and adaptive websites with enhanced crossbrowser
                                            compatibility and runtime efficiency. </span>
                                        <span class="">
                                            Expertise in design, installation, testing, and maintenance of web systems.
                                            Proficient in HTML, CSS, Bootstrap, SCSS, JavaScript, jQuery, and AngularJS. Seeking an
                                            opportunity to join a front-end
                                            team to extend my expertise while working with experienced web development teams.
                                        </span>
                                    </div>
                                    <div class="subHeading mt-30px">What I DO!</div>
                                    <div class="gridBlockParent">
                                        <div class="designBlockContent d-flex">
                                            <div class="icon-26px designIcon">@include('InnerBlock.themeSvg')</div>
                                            <div class="titleBlock">
                                                <div class="titleText">
                                                    UI designer
                                                </div>
                                                <p class="descriptionText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed diam euismod tincidunt volutpat.</p>
                                            </div>
                                        </div>
                                        <div class="designBlockContent d-flex">
                                            <div class="icon-26px designIcon">@include('InnerBlock.themeSvg')</div>
                                            <div class="titleBlock">
                                                <div class="titleText">
                                                    App Development
                                                </div>
                                                <p class="descriptionText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed diam euismod tincidunt volutpat.</p>
                                            </div>
                                        </div>
                                        <div class="designBlockContent d-flex">
                                            <div class="icon-26px designIcon">@include('InnerBlock.themeSvg')</div>
                                            <div class="titleBlock">
                                                <div class="titleText">
                                                    Photography
                                                </div>
                                                <p class="descriptionText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed diam euismod tincidunt volutpat.</p>
                                            </div>
                                        </div>
                                        <div class="designBlockContent d-flex">
                                            <div class="icon-26px designIcon">@include('InnerBlock.themeSvg')</div>
                                            <div class="titleBlock">
                                                <div class="titleText">
                                                    Web Development
                                                </div>
                                                <p class="descriptionText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed diam euismod tincidunt volutpat.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="afterHeaderBlock">
                                        <span>Resume</span>
                                        <span class="afterHeaderBlockEle"></span>
                                    </div>
                                    <div class="gridBlockParent pt-4">
                                        <div class="d-flex flex-column gap-20px">
                                            <div class="d-flex">
                                                <span class="iconBlock mr-20px bgLight">@include('InnerBlock.themeSvg')</span>
                                                <span class="subHeading mb-0">Education</span>
                                            </div>
                                            <div class="designBlockContent">
                                                <div class="titleBlock">
                                                    <div class="subText">2018 - 2021</div>
                                                    <div class="titleText">
                                                        Bachelor's Degree
                                                    </div>
                                                    <p class="descriptionText">Government College of engineering Thanjavur, Tamil Nadu.</p>
                                                    <p class="subText">CGPA: 7.5</p>
                                                </div>
                                            </div>
                                            <div class="designBlockContent d-flex">
                                                <div class="titleBlock">
                                                    <div class="subText">2016 - 2018</div>
                                                    <div class="titleText">
                                                        Higher Secondary
                                                    </div>
                                                    <p class="descriptionText">Sowdambika metric girls higher secondary school.</p>
                                                    <p class="subText">Percentage: 91.16</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column gap-20px">
                                            <div class="d-flex">
                                                <span class="iconBlock mr-20px bgLight">@include('InnerBlock.themeSvg')</span>
                                                <span class="subHeading mb-0">Experience</span>
                                            </div>
                                            <div class="designBlockContent">
                                                <div class="titleBlock">
                                                    <div class="subText">2021 - 2024</div>
                                                    <div class="titleText">
                                                        Web designer
                                                    </div>
                                                    <p class="descriptionText">Netaxis IT Solution - Pvt</p>
                                                    <p class="subText">Experience : 2.3</p>
                                                </div>
                                            </div>
                                            <div class="designBlockContent d-flex">
                                                <div class="icon-26px designIcon">@include('InnerBlock.themeSvg')</div>
                                                <div class="titleBlock">
                                                    <div class="titleText">
                                                        App Development
                                                    </div>
                                                    <p class="descriptionText">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                        sed diam euismod tincidunt volutpat.</p>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="afterHeaderBlock">
                                        <span>Contact</span>
                                        <span class="afterHeaderBlockEle"></span>
                                    </div>
                                     <div class="formContainer pt-4">
                                          <div class="formContainerInner">
                                               <div class="titleBlock">I'm Always Open To Discussing Produuct</div>
                                               <div class="mainText">design work or partnerships.</div>

                                               <form action="">
                                                   <div class="custamizeInput">
                                                       <label for="" class="labelText"></label>
                                                       <input type="text" class="inputBlock">
                                                   </div>


                                               </form>

                                          </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>

<h1 class="lavan">

</h1>
@endsection
@section('script')
<script src='./js/editor.js'></script>
<script src="/js/bootstrap.min.js"></script>
@vite('resources/js/app.js')
@endsection