@extends('layouts.default')

@section('browser-ttl','内容確認')

@section('title','内容確認')

@section('content')
<div class="form">
  <form method="post" action="{{ route('contact.thanks') }}">
    @csrf
    <table class="confirm-table">
      <tr class="confirm-item">
        <th>
          <label class="form-label" for="name">お名前</label>
        </th>
        <td class="confirm-item-td">
          {{ $contacts['last_name'] }} {{ $contacts['first_name'] }}
          <input type="hidden" name="last_name" value="{{ $contacts['last_name'] }}">
          <input type="hidden" name="first_name" value="{{ $contacts['first_name'] }}"><br>
        </td>
      </tr>
      <tr class="confirm-item">
        <th>
          <label class="form-label">性別</label>
        </th>
        <td class="confirm-item-td">
          @if($contacts['gender'] == 1)
          男性
          @elseif($contacts['gender'] == 2)
          女性
          @endif
          <input type="hidden" name="gender" value="{{ $contacts['gender'] }}">
        </td>
      </tr>
      <tr class="form-item">
        <th>
          <label class="form-label">メールアドレス</label>
        </th>
        <td class="confirm-item-td">
          {{ $contacts['email'] }}
          <input type="hidden" name="email" value="{{ $contacts['email'] }}">
        </td>
      </tr>
      <tr class="confirm-item">
        <th>
          <label class="form-label">郵便番号</label>
        </th>
        <td class="confirm-item-td">
          {{ $contacts['zip11'] }}
          <input type="hidden" name="zip11" value="{{ $contacts['zip11'] }}">
        </td>
      </tr>
      <tr class="form-item">
        <th>
          <label class="form-label">住所</label>
        </th>
        <td class="confirm-item-td">
          {{ $contacts['addr11'] }}
          <input type="hidden" name="addr11" value="{{ $contacts['addr11'] }}">
        </td>
      </tr>
      <tr class="confirm-item">
        <th>
          <label class="form-label">建物名</label>
        </th>
        <td class="confirm-item-td">
          {{ $contacts['building_name'] }}
          <input type="hidden" class="form-txt" name="building_name" value="{{ $contacts['building_name'] }}">
        </td>
      </tr>
      <tr class="confirm-item">
        <th>
          <label class="form-label__option">ご意見</label>
        </th>
        <td class="confirm-item-td">
          {{ $contacts['option'] }}
          <input type="hidden" name="option" value="{{ $contacts['option'] }}">
        </td>
      </tr>
    </table>
    <button type="submit" name="action" value="submit" class="button">送信</button>
    <button type="submit" name="back" value="back" class="back-btn">修正する</button>
  </form>
</div>
@endsection