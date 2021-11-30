@extends('layout.editlayout')

@section('title', '本を追加')

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

@section('form')
    <p>{{ $msg }}</p>
    {{-- 入力項目が足りてない場合 --}}
    @if (count($errors) > 0)
        <p class="bg-danger text-white">入力にエラーがあります。再度入力してください。</p>
    @endif
    {{-- 終わり --}}

    <form action="addbook" method="POST" class="form-group form" enctype="multipart/form-data">
        @csrf
            <p>
                <label for="text">本の画像&nbsp;<span class="badge badge-info">任意</span></label>
                <input type="file" name="photo" value=""　class="btn btn-primary">
                {{-- <input type="submit" value="アップロードする"　class="btn btn-primary"> --}}
            </p>
            <p>
                <label for="text">本のタイトル&nbsp;</label><span class="badge badge-danger">必須</span>
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                <small class="form-text">本のタイトルを入力してください（全角30文字以内）</small>
            </p>
            <div style="display:flex">
                <p>
                    <label for="text">開始ページ&nbsp;</label><span class="badge bg-danger">必須</span>
                    @error('start_page')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="number" class="form-control" name="start_page" min="0" max="2000"
                        value="{{ old('start_page') }}">
                    <small class="form-text">0~2000までの半角数字を入力してください</small>
                </p>
                <p class="wrap pattern-6 mgb-20">&nbsp;～&nbsp;</p>
                <p>
                    <label for="text">終了ページ&nbsp;</label><span class="badge bg-danger">必須</span>
                    @error('end_page')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <input type="number" class="form-control" name="end_page" min="0" max="2000"
                        value="{{ old('end_page') }}">
                    <small class="form-text">0~2000までの半角数字を入力してください</small>
                </p>
            </div>
            <p><input type="submit" class="btn btn-primary btn-block" value="登録"></p>
            {{-- <p>本のタイトル：<input type="text" name="title" value="{{ old('title') }}" class="form-control"></p>
    <p>開始ページ：<input type="number" name="start_page" value="" min="0" max="1000" class="form-check form-check-inline"></p>
    <p>終了ページ：<input type="number"name="end_page" value="" min="0" max="1000" class="form-check form-check-inline"></p> --}}
            {{-- <input type="submit" value="登録"> --}}
    </form>
@endsection
