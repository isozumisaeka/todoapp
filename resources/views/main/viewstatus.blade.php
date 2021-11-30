@extends('layout.viewtaskslayout')

@section('title', 'ステータス')

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


@section('left-title', '進行中')
@section('middle-title', '完了')
@section('right-title', '期限切れ')

@section('top')
    <div class="refine" id="top">
        <input id="refine-0" type="radio" name="refine-btn" checked>
        <label class="refine-btn btn btn-secondary btn-sm" for="refine-0">全表示</label>
        {{-- 進行中 --}}
        <input id="refine-1" type="radio" name="refine-btn">
        <label class="refine-btn btn btn-primary btn-sm" for="refine-1">進行中</label>
        {{-- 完了 --}}
        <input id="refine-2" type="radio" name="refine-btn">
        <label class="refine-btn btn btn-success btn-sm" for="refine-2">完了</label>
        {{-- 期限切れ --}}
        <input id="refine-3" type="radio" name="refine-btn">
        <label class="refine-btn btn btn-danger btn-sm" for="refine-3">期限切れ</label>

        <div class="refine-teims on">
            @foreach ($items as $item)
                @if ($item->status_id == '1')
                    <div class="bg-primary" id="on">
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
                                            <input type="image" value="削除" name="submit" src="image/trash-can.png"
                                                width="30" height="30" class="btn-del">
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="refine-teims done">
            @foreach ($items as $item)
                @if ($item->status_id == '2')
                    <div class="bg-success" id="done">
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
                                    <p>テキスト：{{ $item->book->getData() }}&nbsp;&nbsp;P{{ $item->start_page }}~P{{ $item->end_page }}
                                    </p>
                                    <p>{{ $item->start_date }}&nbsp;{{ $item->start_time }}~
                                        &nbsp;{{ $item->end_time }}</p>
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
                        btn btn-outline-warning btn-sm
                        @elseif($item->understand_id == 2)
                        btn btn-outline-warning btn-sm
                        @elseif($item->understand_id == 3)
                        btn btn-outline-secondary btn-sm
                        @elseif($item->understand_id == 4)
                        btn btn-outline-success btn-sm
                        @elseif($item->understand_id == 5)
                        btn btn-outline-success btn-sm
                        @endif  
                        ">{{ $item->understand_id }}:{{ $item->understand->getData() }}</span>
                                        </p>
                                        <div class="icon">
                                            <a href="/edit?id={{ $item->id }}" value="{{ $item->id }}"><img
                                                    src="image/edit.png" alt="更新" width="30" height="30"></a>
                                            <input type="image" value="削除" name="submit" src="image/trash-can.png"
                                                width="30" height="30" class="btn-del">
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="refine-teims over">
            @foreach ($items as $item)
                @if ($item->status_id == '3')
                    {{-- <div class="col-3"> --}}
                    <div class="bg-danger" id="over">
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
                                    <p>テキスト：{{ $item->book->getData() }}&nbsp;&nbsp;P{{ $item->start_page }}~P{{ $item->end_page }}
                                    </p>
                                    <p>{{ $item->start_date }}&nbsp;{{ $item->start_time }}~
                                        &nbsp;{{ $item->end_time }}</p>
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
                                        btn btn-outline-warning btn-sm
                                        @elseif($item->understand_id == 2)
                                        btn btn-outline-warning btn-sm
                                        @elseif($item->understand_id == 3)
                                        btn btn-outline-secondary btn-sm
                                        @elseif($item->understand_id == 4)
                                        btn btn-outline-success btn-sm
                                        @elseif($item->understand_id == 5)
                                        btn btn-outline-success btn-sm
                                        @endif  
                                        ">{{ $item->understand_id }}:{{ $item->understand->getData() }}</span>
                                        </p>
                                        <div class="icon">
                                            <a href="/edit?id={{ $item->id }}" value="{{ $item->id }}"><img
                                                    src="image/edit.png" alt="更新" width="30" height="30"></a>
                                            <input type="image" value="削除" name="submit" src="image/trash-can.png"
                                                width="30" height="30" class="btn-del">
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </form>
                    </div>
                    {{-- </div> --}}
                @endif
            @endforeach
        </div>
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
