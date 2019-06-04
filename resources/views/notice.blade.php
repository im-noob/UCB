@extends('master')
@section('notice')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <section id="top-select">
        <div class="container mb-4">
            <select class="form-control" id="select-notice-type">
                <option hidden>Select Notice Type</option>
                <option value="1">News & Events</option>
                <option value="2">Appointments</option>
                <option value="3">Exam Update</option>
                <option value="4">Admission</option>
                <option value="5">Tender</option>
                <option value="6">Vacancies</option>
                <option value="7">Seminar</option>
            </select>
        </div>
    </section>
    <section id="noticeSection">
        <div class="container" style="margin-bottom: 1em;" id="notice-container">
            



            {{-- Place Holder:START --}}
            <div class="timeline-wrapper">
                <div class="timeline-item">
                   <div class="animated-background">
                      <div class="background-masker header-top"></div>
                      <div class="background-masker header-left"></div>
                      <div class="background-masker header-right"></div>
                      <div class="background-masker header-bottom"></div>
                      <div class="background-masker subheader-left"></div>
                      <div class="background-masker subheader-right"></div>
                      <div class="background-masker subheader-bottom"></div>
                      <div class="background-masker content-top"></div>
                      <div class="background-masker content-first-end"></div>
                      <div class="background-masker content-second-line"></div>
                      <div class="background-masker content-second-end"></div>
                      <div class="background-masker content-third-line"></div>
                      <div class="background-masker content-third-end"></div>
                   </div>
                </div>
             </div>
            {{-- Place Holder:END --}}

            
            
            <div class="card" style="border:none">
                <div class="card-body" style="border: thin solid #dadce0;border-radius: .5rem;    padding: 2rem;">
                    <div class="row card-title">
                        <h1 style=" font-weight: 600;font-size: 2rem; line-height: 2.5rem; margin: 0 0 .5rem;">
                            This is Header
                        </h1>
                    </div>
                    <div class="row card-text" style="color: #3c4043; font-family: Roboto, 'Helvetica Neue', Helvetica, sans-serif; line-height: 1.25rem;">
                        Article Goes Here the great Article.
                    </div>
                </div>                
                <div class="card-footer text-muted">
                    Published on : 23 june 2018
                </div>
            </div>



        </div>
    </section>
    
    
    
    
    
    
    <script>
        
        $(function(){
            //removign tranparency on start
            $("#header").addClass('header-scrolled');
            //revmoing tranparency on scroll
            $(window).scroll(function(){
                $("#header").addClass('header-scrolled');
            
            })

            // Taking out from overlapping
            $("#top-select").css('margin-top','100px');


            //on Selected Something
            $("#select-notice-type").on('change',function(){
            
                // Placeholder effet
                let selectedValue = this.value; 
                console.log(selectedValue);
                //Making empty the list
                $("#notice-container").empty();

                //puting place holder in list 
                $("#notice-container").append(''+
                    '<div class="timeline-wrapper">'+
                    '    <div class="timeline-item">'+
                    '        <div class="animated-background">'+
                    '            <div class="background-masker header-top"></div>'+
                    '            <div class="background-masker header-left"></div>'+
                    '            <div class="background-masker header-right"></div>'+
                    '            <div class="background-masker header-bottom"></div>'+
                    '            <div class="background-masker subheader-left"></div>'+
                    '            <div class="background-masker subheader-right"></div>'+
                    '            <div class="background-masker subheader-bottom"></div>'+
                    '            <div class="background-masker content-top"></div>'+
                    '            <div class="background-masker content-first-end"></div>'+
                    '            <div class="background-masker content-second-line"></div>'+
                    '            <div class="background-masker content-second-end"></div>'+
                    '            <div class="background-masker content-third-line"></div>'+
                    '            <div class="background-masker content-third-end"></div>'+
                    '    </div>'+
                    '    </div>'+
                    '</div>'+
                '');



            });
            
        })
    </script>
@endsection