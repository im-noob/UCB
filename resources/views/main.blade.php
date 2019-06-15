@extends('master')
@section('main')
      <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          @php $i = 0; @endphp

          @forelse ($slider_pics as $slider)
          @php $i++ @endphp
              <div class="carousel-item @if ($i == 1) active @endif ">
                <div class="carousel-background"><img src="{{url('/')}}/{{$slider->pic}}" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>{{$slider->title}}</h2>
                    <h2><small>{{$slider->subtitle}}</small></h2>
                    <p><BIG>{{$slider->short_desc}}</BIG></p>
                    <a href="#contact" class="btn-get-started scrollto">Contact US Now</a>
                  </div>
                </div>
              </div>
          @empty
              <div class="carousel-item">
                <div class="carousel-background"><img src="img/intro-carousel/2.jpeg" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2>UNIVERSITY CENTER OF BIO-INFORMATICS</h2>
                    <h2><small>SUB DIV (BIO-INFORMATICS)</small></h2>
                    <p><BIG>TILKAMANJHI BHAGALPUR UNIVERSITY</BIG></p>
                    <a href="#contact" class="btn-get-started scrollto">Contact US Now</a>
                  </div>
                </div>
              </div>
          @endforelse


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a class="linkNotClickable">Simplicity</a></h4>
            <p class="description">An organisation structure should be basically simple. It implies that the structure should have the simplest possible framework which will fulfil the purposes intended with due emphasis on economical and effective means of accomplishing the objective of the enterprise.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a class="linkNotClickable">Flexibility and Continuity</a></h4>
            <p class="description">The organizer should build the structure not for today or tomorrow, but for the distant future. As such, continuity must be maintained in the organisa­tion structure over the period of time. However, since organisation structure is based on cir­cumstances and these are not fixed but change over the period of time, there is a need for incorporating the changes in the organisation structure also.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a class="linkNotClickable">Proper Delegation of Authority</a></h4>
            <p class="description">The concept of ultimate authority will be effective only when there is proper delegation of authority at various levels of the organisation. Delega­tion of authority refers to authorisation of a manager to make certain decisions. A common problem in the organisational life is that the managers often fail to delegate adequate authority and suffer from various problems.</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Services we provide</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a class="linkNotClickable">BCA</a></h4>
            <p class="description"> BCA is a three year undergraduate degree course generally for students who wish to delve into the world of Computer languages. The course is one of the most popular options to get started with a career in Information Technology.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a class="linkNotClickable">PGDIB (1 Year)</a></h4>
            <p class="description">PG Diploma in International Business [PGDIB]is a 1-year diploma level international business course. The candidates who are willing to take up this course must have the minimum eligibility criteria as they must possess their bachelor’s degree from a recognized university. Admission process of this course is carried out based on the candidate’s performance in their bachelor's degree. </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a class="linkNotClickable">PDDIB (1.5 Year)</a></h4>
            <p class="description">PGDIB is a programme specially designed to build a strong foundation in international business management and to provide options for specialization in focused functional areas. This programme has been customized for the young managers with only a few years of work experience.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a class="linkNotClickable">PGDCA</a></h4>
            <p class="description">Post Graduate Diploma in Computer Applications (PGDCA) is designed for graduate students who are interested in computer applications. This program allows students to seek professional knowledge in computer applications.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a class="linkNotClickable">Research Methology</a></h4>
            <p class="description"> A research method is a systematic plan for conducting research. Sociologists draw on a variety of both qualitative and quantitative research methods, including experiments, survey research, participant observation, and secondary data.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a class="linkNotClickable">Certificate Course in Bio Information</a></h4>
            <p class="description"><strong>Certificate Course in Bioinformatics</strong>&nbsp;is certified Bioinformatic course. Bioinformatics is a discipline of computer science and information technology to the field of biology and medicine. During the various aspects of Bioinformatics are to be taken such as its fundamentals, analysis methods, programming and genomics.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->





    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Lets Introduce about us what we do.. what we serve...</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a class="linkNotClickable">Our Mission</a></h2>
              <p>
                University Centre of Bioinformatics, T.M. Bhagalpur University, Bhagalpur was established in 2005 with motto to provide learning opportunity in the field of Bioinformatics and funded by Department of Biotechnology, Ministry of Science & Technology, Govt. of India under BTISNet (Biotechnology Information System Network) Program. It is a matter of great pride for our University that this is the only Sub-DIC Bioinformatics Centre in the State of Bihar.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a class="linkNotClickable">Our Plan</a></h2>
              <p>
                The Centre is an established unit of T.M. Bhagalpur University and it has been engaging regular classes on Computer application & Bioinformatics for Post & Under graduate students of Science faculty and also providing information to the teachers & research scholars for Ph.D. works since its inception. As such it has been acting as an integrated information hub on all aspects of biological researches and Data Mining of Biological resource. 
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a class="linkNotClickable">Our Vision</a></h2>
              <p>
                  Centre has two air conditioned class room with Multimedia Projector and Computer Lab with 30 nodes in network. The Centre has also high speed broad band connection to all nodes in the dry lab. Library is reach with relevant books. Students are encouraged to take live project training program in different companies.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->


    
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> If there is any query you have for us just make a call in our office time we will feel better to server you best.</p>
        <a class="cta-btn" href="tel:0641-2501382">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Organizational skills are some of the most important and transferable job skills an employee can acquire. They encompass a set of capabilities that help a person to plan, prioritize, and achieve his or her goals.</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Teamwork <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Executing <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Organising <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Planning <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Facts about us.. That you should know...</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Student</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12</span>
            <p>Employee</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counte r-up">1,364</span>
            <p>Books</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
  				</div>

  			</div>

        {{-- <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div> --}}

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galery</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <!-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> -->
          </div>
        </div>

        <div class="row portfolio-container">




          @forelse ($galary_pics  as $pics)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="{{url('/')}}/{{$pics->pic}}" class="img-fluid" alt="">
                    <a href="{{url('/')}}/{{$pics->pic}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="{{url('/')}}/{{$pics->pic}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4><a class="linkNotClickable">{{$pics->title}}</a></h4>
                    <p>{{$pics->short_desc}}</p>
                  </div>
                </div>
              </div>
          @empty
              <div style="text-align: center">
                No Image Found
              </div>
          @endforelse




        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>--><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          
          @forelse ($testimonials as $item)
              <div class="testimonial-item">
                <img src="{{url('/')}}/{{$item->pic}}" class="testimonial-img" alt="">
                <h3>{{$item->name}}</h3>
                <h4>{{$item->degination}}</h4>
                <p>
                  <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                  {{$item->message}}
                  <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>
          @empty
              <div style="text-align: center">
                No Record Found
              </div>
          @endforelse

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          


          @forelse ($team as $member)
              <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                  <img src="{{url('/')}}/{{$member->pic}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>{{$member->name}}</h4>
                      <span>{{$member->degination}}</span>
                      
                    </div>
                  </div>
                </div>
          </div>
          @empty
            <div style="text-align: center">
              No Member Found
            </div>
          @endforelse
          {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a class="linkNotClickable"><i class="fa fa-twitter"></i></a>
                    <a class="linkNotClickable"><i class="fa fa-facebook"></i></a>
                    <a class="linkNotClickable"><i class="fa fa-google-plus"></i></a>
                    <a class="linkNotClickable"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}


        </div>

      </div>
    </section><!-- #team -->



@endsection