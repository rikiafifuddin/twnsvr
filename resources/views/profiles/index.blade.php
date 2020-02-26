@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
        <img src="https://instagram.fcgk4-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83986915_846199862473686_8488581279439126528_n.jpg?_nc_ht=instagram.fcgk4-1.fna.fbcdn.net&_nc_ohc=SuER8QQeJIEAX_qC3Yh&oh=c403de72879747a51826568abb6eca7e&oe=5E8C23A3" class="rounded-circle">
      </div>
      <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href='/p/create'>Add new post</a>
            </div>
            <div class="d-flex">
                <div class=pr-5><strong>{{ $user->posts->count() }}</strong> post</div>
                <div class=pr-5><strong>1399</strong> follower</div>
                <div class=pr-5><strong>424</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title ?? " "}}</div>
            <div class="">{{$user->profile->description ?? " "}}</div>
            <div> <a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
      </div>
  </div>

  <div class="row pt-5">
    @foreach($user->posts as $post)
    <div class="col-4 pb-4">
        <img src="/storage/{{$post->image}}" class="w-100">
    </div>
    @endforeach
    
  </div>
</div>
@endsection

<div class="col"></div>