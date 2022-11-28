@extends('header')
@section('footer')
<section class="tracking__work">
    <div class="container">
        <div class="title__tracking">
            <h3>
                Tracking work
            </h3>
        </div>
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <div class="row">
            @foreach ($wishlist as $row)
            <div class="col-md-4">
                <div class="item__company">
                    <div class="row">
                        <div class="col-5">
                            <div class="item__company__logo">
                                <a href="#">
                                    <img class="item__company__logo__img" src="{{url('img')}}/{{$row->image}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-7" style="height: 220px;">
                            <h5 class="title__item__company">
                                <a href="{{route('employer.show',$row->id)}}" style="text-decoration: none;">{{$row->name_company}}</a>
                            </h5>
                            <div class="address__item__company">
                                <p>{{$row->address}}</p>
                            </div>
                            <div class="price__item__company">
                                <form action="{{route('wishlist.destroy', $row->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="{{$row->job_posting_id}}" name="job_posting_id">
                                    <a href="{{route('employer.show',$row->id)}}"><i class="fa-solid fa-money-bill"></i> {{$row->salary}}</a>
                                    <button class="btn__like" style="border: none;background: transparent;"><i class="fa-solid fa-heart" style="color: #d34229;"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tracking__work__status">
                    <a href="{{route('employer.show',$row->id)}}">Còn hạn-Ứng tuyển ngay</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<br><br><br><br>
@endsection