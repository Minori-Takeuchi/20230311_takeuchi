@extends('layouts.default')

@section('browser-ttl','管理システム')

@section('title','管理システム')

@section('content')
<div class="management">
  <!-- 検索機能 -->
  <form action="/management/search" method="get" class="search-form">
    @csrf
    <table class="search">
      <tr>
        <th class="search-label">お名前</th>
        <td class="flex">
          <input type="text" name="name" class="search-txt">
          <table class="search__gender">
            <tr>
              <th class="search-label__gender">性別</th>
              <td>
                <input type="radio" name="gender" checked="checked" value="">全て
                <input type="radio" name="gender" value="1">男性
                <input type="radio" name="gender" value="2">女性
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <th class="search-label">登録日</th>
        <td>
          <input type="date" name="from" class="search-txt">~
          <input type="date" name="until" class="search-txt">
        </td>
      </tr>
      <tr>
        <th class="search-label">メールアドレス</th>
        <td><input type="text" name="email" class="search-txt">
        </td>
      </tr>
    </table>
    <button type="submit" class="button">検索</button>
    <a class="reset-nav" href="{{ route('management.index') }}">リセット</a>
  </form>

  <!-- ページネーション -->
  <div class="paginate">
    @if (count($contacts) > 0)
    <p class="paginate-item">全{{ $contacts->total() }}件中
      {{ $contacts->firstItem() }} ~
      {{ $contacts->lastItem() }}件
    </p>
    @else
    <p>データがありません。</p>
    @endif
    @if (session('flash_message'))
    <div class="flash_message">
      {{ session('flash_message') }}
    </div>
    @endif
    <div class="paginate-nav">{{ $contacts->appends(request()->query())->links('vendor.pagination.default') }}</div>
  </div>
  <!-- 検索結果表示 -->
  <table class="search-result">
    <tr class="search-result-item">
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th class="option-view">ご意見</th>
    </tr>
    @foreach($contacts as $contact)
    <tr class="search-result-item">
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->fullname }}</td>
      @if($contact['gender'] == 1)
      <td>男性</td>
      @endif
      @if($contact['gender'] == 2)
      <td>女性</td>
      @endif
      <td>{{ $contact->email }}</td>
      <!-- koko -->
      <td class="show-all" data-text="{{ $contact->option }}">{{ mb_substr($contact->option, 0, 25) }}</td>


      <td>
        <form action="/management/delete" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$contact->id}}">
          <button class="search-btn">削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>
<script>
  document.querySelectorAll('.show-all').forEach(function(element) {
    element.addEventListener('mouseover', function() {
      element.textContent = element.getAttribute('data-text');
    });

    element.addEventListener('mouseout', function() {
      element.textContent = element.textContent.substring(0, 25) + '...';
    });
  });
</script>
@endsection