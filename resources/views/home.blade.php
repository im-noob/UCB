@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-4  mb-4">
            <div class="card">
                <div class="card-header">Galary</div>

                <a href="{{url('/')}}/editGalary" style="text-decoration: none;">
                    <div class="card-body">
                        Add, update or delete photos in galary
                    </div>
                </a>
            </div>
        </div>
        

        <div class="col-md-4  mb-4">
            <div class="card">
                <div class="card-header">Home page Slider</div>

                <a href="{{url('/')}}/editSlider" style="text-decoration: none;">
                    <div class="card-body">
                        Add, update or delete photos in Home page Slider
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4  mb-4">
            <div class="card">
                <div class="card-header">Team</div>

                <a href="{{url('/')}}/editTeamMembers" style="text-decoration: none;">
                    <div class="card-body">
                        Add, update or delete Team Members
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4  mb-4">
            <div class="card">
                <div class="card-header">TESTIMONIALS</div>

                <a href="{{url('/')}}/editTestimonials" style="text-decoration: none;">
                    <div class="card-body">
                        Add, update or delete  TESTIMONIALS
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-4  mb-4">
            <div class="card">
                <div class="card-header">Notice</div>

                <a href="{{url('/')}}/editNotice" style="text-decoration: none;">
                    <div class="card-body">
                        Publish a Notice!
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
