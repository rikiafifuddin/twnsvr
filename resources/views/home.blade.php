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
                <a href='#'>Add new post</a>
            </div>
            <div class="d-flex">
                <div class=pr-5><strong>24</strong> post</div>
                <div class=pr-5><strong>1399</strong> follower</div>
                <div class=pr-5><strong>424</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title ?? " "}}</div>
            <div class="">{{$user->profile->description ?? " "}}</div>
            <div> <a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
      </div>
  </div>

  <div class="row pt-5">
    <div class="col-4">
        <img src="https://instagram.fcgk5-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.100.799.799a/s640x640/81116425_2818131341576258_1890257252299299906_n.jpg?_nc_ht=instagram.fcgk5-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=BeDaQ_9pD8wAX-vbadQ&oh=7a4b8df6cd7672e153d3699031e2b391&oe=5E79FED4" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://instagram.fcgk4-3.fna.fbcdn.net/v/t51.2885-15/e35/c140.0.360.360a/73480811_248885909416940_2478682517410761577_n.jpg?_nc_ht=instagram.fcgk4-3.fna.fbcdn.net&_nc_cat=108&_nc_ohc=noDEbqeAoSQAX-fcTa-&oh=b9602644980ecc345590dd451f9263e2&oe=5E8C4681" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://instagram.fcgk4-1.fna.fbcdn.net/v/t51.2885-15/e35/74904255_159650485393152_3423377874443357705_n.jpg?_nc_ht=instagram.fcgk4-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=lePwio6BsrgAX_7wLYh&oh=58b646baf0b670a9dd4d7b68fdd2148e&oe=5E7A258B" class="w-100">
    </div>
  </div>
</div>
@endsection

<div class="col"></div>