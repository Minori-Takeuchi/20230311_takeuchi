@extends('layouts.default')

@section('browser-ttl','お問い合わせ')

@section('content')


<div class="thanks">
    <h3 class="thanks-ttl">以下のお問い合わせフォームよりご連絡ください。</h3>
    <button type="button" class="button" onclick="location.href='{{ route('contact.index') }}' ">お問い合わせフォームへ</button>
</div>

@endsection