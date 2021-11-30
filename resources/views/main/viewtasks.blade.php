@extends('layout.viewtaskslayout')

@section('title', 'タスク一覧')

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
<div class="today border rounded">
    <h5>今日やること</h5>
    @if (isset($i))
        @foreach ($i as $item)
            @if (isset($item))
            <form action="/delete/{{ $item->id }}/" method="post">
            <div class="border rounded todaystask">
                    <img src="storage/{{ $item->book->getData2() }}" alt="">
                    <div class="todaystask-content">
                        {{-- <p>{{ $item->book->getData() }}</p>&nbsp;&nbsp; --}}
                        <div class="page">
                            <p>【{{ $item->task }}】</p>&nbsp;&nbsp;
                            @if ($item->book_id != 14)
                            <p>P{{ $item->start_page }}</p>
                            <p>～</p>
                            <p>P{{ $item->end_page }}</p>&nbsp;&nbsp;
                            @endif
                        </div>
                        <div class="time">
                            <p>{{ $item->start_date }}</p>&nbsp;&nbsp;
                            <p>{{ $item->start_time }}</p>
                            <p>～</p>
                            <p>{{ $item->end_time }}</p>
                            <div class="icon">
                                <a href="/edit?id={{ $item->id }}" value="{{ $item->id }}"><img
                                        src="image/edit.png" alt="更新" width="30" height="30"></a>
                                <input type="image" value="削除" name="submit" src="image/trash-can.png" width="30"
                                    height="30" class="btn-del">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endif
        @endforeach
    @else
        <h6>今日のタスクはありません</h6>
    @endif
</div>


    <div class="sort">
        <a href="/viewtasks?sort=task">タスク名▼</a>
        <a href="/viewtasks?sort=book_id">本の種類▼</a>
        <a href="/viewtasks?sort=start_date">開始日▼</a>
        {{-- <a href="/viewtasks?sort=start_time">開始時間▼</a> --}}
        {{-- <a href="/viewtasks?sort=status_id">進行中→期限切れ▼</a> --}}
    </div>
    @foreach ($items as $item)
        <form action="/delete/{{ $item->id }}/" method="post">
            <div class="border task-container">
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
                            <a href="/edit?id={{ $item->id }}" value="{{ $item->id }}"><img src="image/edit.png"
                                    alt="更新" width="30" height="30"></a>
                            <input type="image" value="削除" name="submit" src="image/trash-can.png" width="30" height="30"
                                class="btn-del">
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                {{-- </div> --}}
            </div>
        </form>
    @endforeach
    {{ $items->appends(['sort' => $sort])->links() }}
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
