@extends('layout.viewtaskslayout')

@section('title', '本棚')

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
<div class="book-container">
    @foreach ($books as $book)
    <div class="book border rounded">
        <p><img src="storage/{{ $book->img }}"></p>
        <p>{{ $book->title }}</p>
        <p>総ページ数：{{ $book->end_page }}</p>
        <form action="/bookdelete">
            <input type="hidden" name="id" value="{{ $book->id }}">
            <div class="icon2">
                <input type="image" value="削除" name="submit" src="image/trash-can.png" width="30"
                    height="30" class="btn-del" style="text-align:right">
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection

@section('script')
    <script>
        // 削除の際、確認画面の表示
        $(".btn-del").on("click", function() {
            if (confirm("この本を本当に削除しますか？※削除は復元できません※")) {} else {
                return false;
            }
        });
    </script>
@endsection