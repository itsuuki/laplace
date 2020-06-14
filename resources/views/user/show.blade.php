@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/user.css') }}">
<script src="{{ asset('/js/user.js') }}" defer></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                  マイページ
                  </div>
                    <div class="card-body">
                    <p class="card-text">
                        <div class="section s_07">
                            <div class="accordion_one">
                            <div class="accordion_header">{{ Auth::user()->name }}<div class="i_box"><i class="one_i"></i></div></div>
                              <div class="accordion_inner">
                                <div class="accordion_one">
                                  <div class="accordion_header">
                                    <a class="user-reser-new" href="{{$id}}/Reservation/show">
                                      注文一覧
                                    </a><div class="i_box"><i class="one_i"></i></div></div>
                                  <div class="accordion_inner">
                                    
                                  </div>
                                </div>
                                <div class="accordion_one">
                                  <div class="accordion_header">B<div class="i_box"><i class="one_i"></i></div></div>
                                  <div class="accordion_inner">
                                    <div class="accordion_one">
                                      <div class="accordion_header">B_a</div>
                                      <div class="accordion_header">B_b</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="accordion_one">
                              <div class="accordion_header">店関連<div class="i_box"><i class="one_i"></i></div></div>
                              <div class="accordion_inner">
                                <div class="accordion_one">
                                  <div class="accordion_header">店<div class="i_box"><i class="one_i"></i></div></div>
                                  <div class="accordion_inner">
                                    <div class="accordion_header">
                                      <a class="shop-new" href="Shop/create">
                                        店を登録する
                                      </a>
                                    </div>
                                  @foreach ($shops as $shop)
                                    <div class="accordion_one">
                                      <div class="accordion_header">
                                        <a class="user-shop" href="/Shop/{{ $shop->id }}">
                                          {{$shop->sname}}
                                        </a>
                                      </div>
                                      @endforeach
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion_one">
                                  <div class="accordion_header">
                                    <a class="user-post-all" href="{{ Auth::user()->id }}/Post/all">
                                      店の投稿一覧リンク
                                    </a><div class="i_box"><i class="one_i"></i></div></div>
                                  <div class="accordion_inner">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- <div class="accordion_one">
                              <div class="accordion_header">アコーディオンで多階層のメニューを作る<div class="i_box"><i class="one_i"></i></div></div>
                              <div class="accordion_inner">
                                <div class="accordion_one">
                                  <div class="accordion_header">A<div class="i_box"><i class="one_i"></i></div></div>
                                  <div class="accordion_inner">
                                    <div class="accordion_one">
                                      <div class="accordion_header">A_a</div>
                                      <div class="accordion_header">A_b</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion_one">
                                  <div class="accordion_header">B<div class="i_box"><i class="one_i"></i></div></div>
                                  <div class="accordion_inner">
                                    <div class="accordion_one">
                                      <div class="accordion_header">B_a</div>
                                      <div class="accordion_header">B_b</div>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                            </div>
                            </div>
                    </p>
                   
                
            </div>
        </div>
    </div>
</div>
@endsection
