@extends('layouts.common')
@section('cssfile')
result.css
@endsection

@section('title')
  検索結果
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
          <h1 class="h1 text-center mb-2">検索結果</h1>
          <div class="container py-5">
            <!-- 地図 -->
            <div id="maps">
            </div>
            <!--// 地図 -->
          </div>

            <div class="row pt-5">
              <div class="col">
                <div class="py-2">
@foreach($checkboxes as $checkbox)
  {{$checkbox->getNameIconpath()}} 
@endforeach

写真  
住所  
↑のcheckBoxにあるアイコン達  
  灰色とカラーの2種類
評価  

                </div>
              </div>
            </div>
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
