@extends('layouts.default')

@section('browser-ttl','お問い合わせ')

@section('title','お問い合わせ')

@section('content')
<div class="form">
  <form method="post" action="{{ route('contact.confirm') }}">
    @csrf
    <table class="form-table">
      <!-- 名前 -->
      <tr class="form-item">
        <th>
          <label class="form-label" for="name">お名前<span class="c-red">※</span></label>
        </th>
        <td class="form-item-td">
          <table class="form-table">
            <tr>
              <td align="left"><input type="text" class="form-txt__name" name="last_name" id="last_name" value="{{ old('last_name')}}"></td>
              <td align="right"><input type="text" class="form-txt__name" name="first_name" id="first_name" value="{{ old('first_name')}}"></td>
            </tr>
            <tr>
              <td>
                <div class="form-example">例 ）山田</div>
              </td>
              <td>
                <div class="form-example">例 ）太郎</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="last_name-error-message"></div>
                @error('last_name')
                <div class="last_name-error">{{$message}}</div>
                @enderror
              </td>
              <td>
                <div class="first_name-error-message"></div>
                @error('first_name')
                <div class="first_name-error">{{$message}}</div>
                @enderror
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- 性別 -->
      <tr class="form-item" for=gender>
        <th>
          <label class="form-label">性別<span class="c-red">※</span></label>
        </th>
        <td class="form-item-td">
          <input type="radio" class="form-radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }} checked />
          <span class="gender">男性</span>
          <input type="radio" class="form-radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }} />
          <span class="gender">女性</span>
        </td>
      </tr>
      <!-- メールアドレス -->
      <tr class="form-item">
        <th>
          <label class="form-label" for="email">メールアドレス<span class="c-red">※</span></label>
        </th>
        <td class="form-item-td">
          <table class="form-table">
            <tr>
              <td><input type="email" class="form-txt" name="email" id="email" value="{{ old('email')}}"></td>
            </tr>
            <tr>
              <td>
                <div class="form-example">例 ）test@example.com</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="email-error-message"></div>
                @error('email')
                <div class="email-error">{{$message}}</div>
                @enderror
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- 郵便番号 -->
      <tr class="form-item">
        <th>
          <label class="form-label" for="zip11">郵便番号<span class="c-red">※</span></label>
        </th>
        <td class="form-item-td">
          <table class="form-table">
            <tr>
              <td class="flex">
                <span class="postmark">〒</span>
                <input type="text" class="form-txt" name="zip11" id="zip11" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" value="{{ old('zip11')}}">
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-example__postcode">例 ）123-4567</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="zip11-error-message"></div>
                @error('zip11')
                <div class="zip11-error">{{$message}}</div>
                @enderror
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- 住所 -->
      <tr class=" form-item">
        <th>
          <label class="form-label" for="addr11">住所<span class="c-red">※</span></label>
        </th>
        <td class="form-item-td">
          <table class="form-table">
            <tr>
              <td><input type="text" class="form-txt" name="addr11" id="addr11" value="{{ old('addr11')}}"></td>
            </tr>
            <tr>
              <td>
                <div class="form-example">例 ）東京都渋谷区千駄ヶ谷1-2-3</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="addr11-error-message"></div>
                @error('addr11')
                <div class="addr11-error">{{$message}}</div>
                @enderror
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- 建物名 -->
      <tr class="form-item">
        <th>
          <label class="form-label" for="building_name">建物名</label>
        </th>
        <td class="form-item-td">
          <table class="form-table">
            <tr>
              <td><input type="text" class="form-txt" name="building_name" id="building_name" value="{{ old('building_name')}}"></td>
            </tr>
            <tr>
              <td>
                <div class="form-example">例 ）千駄ヶ谷マンション101</div>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- ご意見 -->
      <tr class="form-item">
        <th class="option-ttl">
          <label class="form-label" for="option">ご意見<span class="c-red">※</span></label>
        </th>
        <td class="form-item-td">
          <table class="form-table">
            <tr>
              <td><textarea name="option" id="option" maxlength="120" class="form-txt__option">{{ old('option')}}</textarea></td>
            </tr>
            <tr>
              <td>
                <div class="option-error-message"></div>
                @error('option')
                <div class="option-error">{{$message}}</div>
                @enderror
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <button type="submit" class="button">確認</button>
  </form>
</div>
@endsection