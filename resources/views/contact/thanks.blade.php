@extends('layouts.default')

@section('browser-ttl','ありがとうございました')

@section('content')


<div class="thanks">
  <h4 class="thanks-ttl">ご意見いただきありがとうございました。</h4>
  <button type="button" class="button" onclick="location.href='{{ url('/') }}' ">トップページへ</button>
</div>


@endsection