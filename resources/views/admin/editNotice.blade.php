@extends('admin.app')
@section('editNotice')
    <div class="container">
        <div class="row mb-4 ">
            <div class="col-sm-6" style="font-size: 1.5em;">
                Total Post: {{sizeof($data)}}
            </div>
            <a href="{{url('/')}}/PostNotice" class="col-sm-6" style="text-align: end;">
                <button class="btn btn-primary">New Post</button>
            </a>
            
        </div>
        <h1>Recent Post</h1>
        <div class="row">
            @forelse ($data as $item)
                <div class="col-sm-12">
                    <div class="card mb-4" style="width: 100%; ">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Last Updated: {{$item->post_date}}</h6>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-sm-12 card">
                    <div style="text-align: center;" >No Post Found</div>
                </div>
            @endforelse
            

        
        </div>
    </div>
@endsection