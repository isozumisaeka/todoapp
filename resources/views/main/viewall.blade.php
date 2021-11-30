@extends('layout.viewtaskslayout')

@section('title', '達成状況')

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




@section('top')
   


    {{-- <h5 style="justify-content: space-evenly; display:flex"><span class="bg-danger text-white">期限切れ</span>&nbsp;<span
            class="bg-success text-white">完了</span>&nbsp;<span class="bg-primary text-white">進行中</span></h5> --}}
    <div>
        @foreach ($books as $book)
            {{-- 各本の総ページ数を出すため --}}
            @php
                $totalpage3 = 0;
                $totalpage2 = 0;
                $totalpage1 = 0;
                $totalpageall = 0;
            @endphp
            {{-- まずtitleとidを取得して表示 --}}
            <div class="progress-contents border rounded">
                <div class="progress-image">
                    <img src="storage/{{ $book->img }}" alt="本の画像">
                    <h5>{{ $book->title }}</h5>
                </div>
                {{-- 次に、タスクをひとつづつ確認して、上のidにあうbook_idを探す --}}
                <div class="progress">
                    @foreach ($tasks as $task)
                        @if ($book->id == $task->book_id)
                            {{-- 期限切れ --}}
                            @if ($task->status_id == '3')
                                @php
                                    $width = ($task->total / $book->end_page) * 100;
                                    
                                    $totalpage3 = $totalpage3 + $task->total;
                                    // dd($totalpage3);
                                @endphp
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $width }}%"
                                    aria-valuenow="{{ $width }}" aria-valuemin="0"
                                    aria-valuemax="{{ $book->end_page }}"></div>
                                {{-- 完了 --}}
                            @elseif($task->status_id == "2")
                                @php
                                    $width = ($task->total / $book->end_page) * 100;
                                    
                                    $totalpage2 = $totalpage2 + $task->total;
                                    // dd($totalpage2);
                                @endphp
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $width }}%"
                                    aria-valuenow="{{ $width }}" aria-valuemin="0"
                                    aria-valuemax="{{ $book->end_page }}"></div>
                                {{-- 進行中 --}}
                            @elseif($task->status_id == "1")
                                @php
                                    $width = ($task->total / $book->end_page) * 100;
                                    
                                    $totalpage1 = $totalpage1 + $task->total;
                                    // dd($totalpage1);
                                @endphp
                                <div class="progress-bar" role="progressbar" style="width: {{ $width }}%"
                                    aria-valuenow="{{ $width }}" aria-valuemin="0"
                                    aria-valuemax="{{ $book->end_page }}"></div>
                            @endif
                        @endif

                    @endforeach
                </div>
                <div class="page-tag"><span>{{ $book->start_page }}</span><span>{{ $book->end_page }}</span>
                </div>
                <div class="totalpage"><span class="border border-danger text-danger">
                        期限切れ</span><span>{{ $totalpage3 }}/{{ $book->end_page }}
                    </span>&nbsp;
                    <span class="border border-success text-success">
                        完了</span><span>{{ $totalpage2 }}/{{ $book->end_page }}
                    </span>&nbsp;
                    <span class="border border-primary text-primary">
                        進行中</span><span>{{ $totalpage1 }}/{{ $book->end_page }}
                    </span>
                    &nbsp;
                    <span class="border border-dark text-dark">
                        TOTAL</span><span>{{ $book->getTotal($totalpage1, $totalpage2, $totalpage3) }}/{{ $book->end_page }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
