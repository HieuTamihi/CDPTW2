@extends('header')
@section('footer')
<section class="manage__cv">
    <div class="container">
        <div class="title__manage">
            <div class="row">
                <div class="col-md-8">
                    <h3>Manage CV</h3>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <a href="{{url('createCV')}}" style="text-decoration: none;">
                                <div class="add__cv">Tạo CV mới</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <div class="table__manage">
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name CV</th>
                        <th>CV status</th>
                        <th>Last edited</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cv as $item)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$item->namecv}}</td>
                        <td>@if($item->status == 0)
                            Chưa dùng để ứng tuyển
                            @if($item->status == 1)
                            Đã dùng để ứng tuyển
                            @endif
                            @endif
                        </td>
                        <td>{{$item->updated_at}}</td>
                        <td class="option__manage">
                            <a href="{{route('viewCV', $item->id)}}"><i class="fa-solid fa-eye"></i></a>
                            <form action="{{route('cv.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none;background: transparent;"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            <a href="{{route('cv.edit',$item->id)}}"><i class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection