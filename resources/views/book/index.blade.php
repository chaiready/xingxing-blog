@extends('layouts.app')

@section('title', '教程列表')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($books as $key=>$vo)
                    <div class="card"  style="margin-top:20px;">
                        <div class="card-body row">
                            <div class="col-md-3">
                                <img style="width:100%;box-shadow: #ccc 3px 3px 8px;" src="{{ \Storage::url($vo->cover) }}">
                            </div>
                            <div class="col-md-9">
                                <h3>{{ $vo->title }}</h3>
                                <p>{{ $vo->description }}</p>
                                <p>
                                    <i class="fa fa-clock-o"></i> {{ $vo->created_at->format('Y-m-d H:i:s') }}</p>
                                <div>
                                    <a href="{{ route('book.show',['id'=>$vo->id]) }}" target="_blank" class="btn btn-sm btn-primary">阅读教程</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection