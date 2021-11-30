@extends('layout.viewtaskslayout')

@section('title', '理解度')

{{-- 左上セクション --}}
@section('lefttop')
    <p><a href="addtodo" class="One of three columns"><i class="fas fa-plus"></i></i>&nbsp;タスクを追加</a></p>
    <p><a href="addbook" class="btn-block　One of three columns"><i class="fas fa-book"></i>&nbsp;本を追加</span></a></p>
    <p><a href="/viewtasks" class="btn-block　One of three columns"><i class="fas fa-tasks"></i>&nbsp;タスク一覧</a></p>
    <p><a href="/viewbooks" class="btn-block　One of three columns"><i class="fas fa-book-reader"></i>&nbsp;本棚</a></p>
    <p><a href="/viewall" class="btn-block　One of three columns"><i class="fas fa-trophy"></i>&nbsp;達成状況</a></p>
    <p><a href="/viewstatus" class="btn-block　One of three columns"><i class="fas fa-question"></i>&nbsp;ステータス</a></p>
    <p><a href="/viewunderstand" class="btn-block　One of three columns"><i class="fas fa-star"></i>&nbsp;理解度</a>
    </p>
    {{-- <p><a href="/viewtasks" class="btn btn-default btn-block"><span class="glyphicon glyphicon-book"></span>削除したタスク一覧を見る</a></p> --}}
@endsection

@section('leftbottom')



@endsection

@section('top')
<div class="refine" id="top">
    <input id="refine-0" type="radio" name="refine-btn" checked>
    <label class="refine-btn2 btn btn-outline-secondary btn-sm" for="refine-0">全表示</label>
    {{-- １、理解不能 --}}
    <input id="refine-11" type="radio" name="refine-btn">
    <label class="refine-btn2 btn btn-outline-danger btn-sm" for="refine-11">★☆☆☆☆</label>
    {{-- ２ --}}
    <input id="refine-22" type="radio" name="refine-btn">
    <label class="refine-btn2 btn btn-outline-warning btn-sm" for="refine-22">★★☆☆☆</label>
    {{-- ３ --}}
    <input id="refine-33" type="radio" name="refine-btn">
    <label class="refine-btn2 btn btn-outline-secondary btn-sm" for="refine-33">★★★☆☆</label>
    {{-- ４ --}}
    <input id="refine-44" type="radio" name="refine-btn">
    <label class="refine-btn2 btn btn-outline-info btn-sm" for="refine-44">★★★★☆</label>
    {{-- ５ --}}
    <input id="refine-55" type="radio" name="refine-btn">
    <label class="refine-btn2 btn btn-outline-success btn-sm" for="refine-55">★★★★★</label>

    {{-- タスク表示 --}}
   
    @foreach ($items as $item)
        <div
            class="
@if ($item->understand_id == 1)
bg-danger refine-teims one
@elseif($item->understand_id == 2)
bg-warning refine-teims two
@elseif($item->understand_id == 3)
bg-secondary refine-teims three
@elseif($item->understand_id == 4)
bg-info refine-teims four
@elseif($item->understand_id == 5)
bg-success refine-teims five
@endif
">
            <form action="/delete/{{ $item->id }}/" method="post">
                <div class="border task-container bg-white ">
                    {{ csrf_field() }}
                    {{-- <div class=""> --}}
                    <div class=" task-container-left">
                        <img src="storage/{{ $item->book->getData2() }}" class="card-img" alt="...">
                    </div>
                    <div class="task-container-right">
                        {{-- <div class=""> --}}
                        <h5>タスク名：{{ $item->task }}</h5>
                        <p>{{ $item->book->getData() }}&nbsp;&nbsp;P{{ $item->start_page }}~P{{ $item->end_page }}
                        </p>
                        <p>{{ $item->start_date }}&nbsp;{{ $item->start_time }}&nbsp;~
                            {{ $item->end_time }}</p>
                        <p>メモ：{{ $item->memo }}</p>
                        <div class="task-container-right-bottom">
                            <p><span
                                    class="
                            @if ($item->status_id == 1)
                            btn btn-primary text-white btn-sm
                            @elseif($item->status_id == 2)
                            btn btn-success text-white btn-sm
                            @elseif($item->status_id == 3)
                            btn btn-danger text-white btn-sm
                            @endif
                            ">{{ $item->status->getData() }}</span>&nbsp;
                                <span
                                    class="
                                @if ($item->understand_id == 1)
                                btn btn-outline-danger btn-sm
                                @elseif($item->understand_id == 2)
                                btn btn-outline-warning btn-sm
                                @elseif($item->understand_id == 3)
                                btn btn-outline-secondary btn-sm
                                @elseif($item->understand_id == 4)
                                btn btn-outline-info btn-sm
                                @elseif($item->understand_id == 5)
                                btn btn-outline-success btn-sm
                                @endif  
                                ">{{ $item->understand->getData() }}</span>
                            </p>
                            <div class="icon">
                                <a href="/edit?id={{ $item->id }}" value="{{ $item->id }}"><img
                                        src="image/edit.png" alt="更新" width="30" height="30"></a>
                                <input type="image" value="削除" name="submit" src="image/trash-can.png" width="30"
                                    height="30" class="btn-del">
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
            </form>
        </div>
    @endforeach
    </div>
    <p><a href="#top" class="backtotop">▲TOPに戻る</a></p>
@endsection

@section('script')
    <script>
        // 削除の際、確認画面の表示
        $(".btn-del").on("click", function() {
            if (confirm("このタスクを本当に削除しますか？※削除は復元できません※")) {} else {
                return false;
            }
        });
    </script>
@endsection
