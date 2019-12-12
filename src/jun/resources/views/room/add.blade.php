@extends('layouts.common')

@section('cssfile')
room-add.css
@endsection

@section('title')
  授乳室情報追加
@endsection

@section('content')
<header>
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light">
      <a href="" class="navbar-brand"></a>
      <!-- ハンバーガーメニュー -->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="menu" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="navbar-item"><a href="" class="nav-link">Link</a></li>
          <li class="navbar-item"><a href="" class="nav-link">Link</a></li>
          <li class="navbar-item"><a href="" class="nav-link">Link</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<main>
<div class="container py-5">
  <div class="row">
    <!-- 左ペイン -->

    <div class="col-md-8">
      <article>
        <section>
          <h1 class="h1 text-center mb-2">授乳室情報追加</h1>

          <div class="container py-5">
<div>
  <form action="#" onsubmit="getLatLng(document.getElementById('address').value); return(false);">
{{ csrf_field() }}
住所 or ランドマーク：<input type='text' id='address' style='width: 400px' value=""> <input type='submit' value='検索'>
</form>
</div>
            <!-- 地図 -->
            <div id="maps">
            </div>
            <!--// 地図 -->
          </div>
        </section>

        <section>
          <h1 class="text-center">指定して検索</h1>

          <form action="/result/" method="get">
          {{ csrf_field() }}
            <!-- //textbox -->
            <div class="row pt-5">
              <div class="col">
                <div class="py-2">
                  <input class="form-control form-control-lg" type="text" name="location" placeholder="〒、住所、施設名など">
                </div>
              </div>
            </div>
            <!-- textbox// -->

            <!-- check box -->
            <div class="row py-4">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <div class="text-left">
                    @foreach($checkboxes ?? '' ?? '' as $checkbox)
                    <input type="checkbox" name="checkbox_arr[]" value="{{$checkbox->name}}"><lable>{{$checkbox->name}}<image src="{{$checkbox->icon_path}}"></label>
                    @endforeach
                </div>
              </div>
              <div class="col-md-4">
              </div>
            </div>
            <!-- check box //-->

            <!-- //検索ボタン -->
            <div class="row py-2">
              <div class="col">
                <div class="text-center">
                  <div class="search-btn">
                    <button class="btn btn-primary btn-lg" type="submit" name="exec" value="検索">検索</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- 検索ボタン// -->
          </form>
        </section>
      </article>
    </div>
    <!-- 左ペイン // -->

    <!-- 右ペイン -->
    <div class="col-md-4">
      <aside>
        <div class="container">
          <div class="row">サイト</div>
          <div class="row">作成中</div>
          <div class="row">完成するまでおまちください</div>
        </div>
      </aside>
    </div>
    <!-- 右ペイン // -->
  </div>
  <!-- 左ペインと右ペインのrow// -->
</div>
<!-- main container // -->
</main>
@endsection
