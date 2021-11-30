@extends('layout.editlayout')

@section('title', 'タスクを追加')

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


@section('form')
    <p>{{ $msg }}</p>
    {{-- 入力項目が足りてない場合 --}}
    @if (count($errors) > 0)
        <p class="bg-danger text-white">入力にエラーがあります。再度入力してください。</p>
    @endif
    {{-- 終わり --}}
    <form action="addtodo" method="POST" class="task-form overflow-auto">
        @csrf
        <p>
            <label for="text">タスク&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('task')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="text" class="form-control" name="task" value="{{ old('task') }}">
            <small class="form-text">タスクを入力してください（全角50文字以内）</small>
        </p>
        <p>
            <label for="select1a" 　name="book_id">テキスト&nbsp;</label><span class="badge badge-danger">必須</span></label>
            <select id="select1a" class="form-control" name="book_id">
                {{-- <option value="1">－</option> --}}
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </p>
        <div style="display:flex">
        <p>
            <label for="text">開始ページ&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('start_page')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="number" class="form-control" name="start_page" min="0" max="2000"
                value="{{ old('start_page') }}">
            <small class="form-text">0~2000までの半角数字を入力してください</small>
        </p>
        <p class="wrap pattern-6 mgb-20">&nbsp;～&nbsp;</p>
        <p>
            <label for="text">終了ページ&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('end_page')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="number" class="form-control" name="end_page" min="0" max="2000" value="{{ old('end_page') }}">
            <small class="form-text">0~2000までの半角数字を入力してください</small>
        </p>
        </div>
        <p>
            <label for="date">開始日&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('start_date')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}">
            <small class="form-text">今日以降の日付を入力してください</small>
        </p>
        <div style="display:flex">
        <p>
            <label for="time">開始時刻&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('start_time')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="time" class="form-control" name="start_time" value="{{ old('start_time') }}">
            {{-- <small class="form-text">0~1000までの半角数字を入力してください</small> --}}
        </p>
        <p class="wrap pattern-5 mgb-20">&nbsp;～&nbsp;</p>
        <p>
            <label for="time">終了時刻&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('end_time')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="time" class="form-control" name="end_time" value="{{ old('end_time') }}">
            {{-- <small class="form-text">入力してください</small> --}}
        </p>
    </div>
        <p>
            <label for="text">ごほうび&nbsp;</label><span class="badge badge-info">任意</span></label>
            <input type="text" class="form-control" name="reward" value="{{ old('reward') }}">
            {{-- <small class="form-text">入力してください</small> --}}
        </p>
        <p>
            <label for="text">メモ&nbsp;</label><span class="badge badge-info">任意</span></label>
            <textarea type="text" class="form-control" name="memo" value="{{ old('memo') }}">{{ old('memo') }}</textarea>
            {{-- <small class="form-text">タスクを入力してください</small> --}}
        </p>

        {{-- <p>タスク：<input type="text" name="task" value="{{ old('task') }}"></p>
        <p>タスク：<input type="text" name="task" value="{{ old('task') }}"></p> --}}

        {{-- <p>テキスト：<select  name="book_id" value="1" >
            <option value="1">－</option>
            @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select></p> --}}


        {{-- <p>開始ページ：<input type="number" name="start_page" value="" min="0" max="1000"  ></p>
        <p>終了ページ：<input type="number"name="end_page" value="" min="0" max="1000" ></p> --}}
        {{-- <p>開始予定日時：<input type="datetime-local" value="2017-06-01T08:30" name="start_date" id="today"></p>
        <p>終了予定日時：<input type="datetime-local" value="2021-11-11 17:20:00" name="end_date"></p> --}}
        {{-- ためそう --}}
        {{-- <p>開始予定日：<input type="date" value="" name="start_date" ></p>
        <p>開始時刻：<input type="time" value="" name="start_time" ></p>
        <p>終了予定日：<input type="date" value="" name="end_date"></p>
        <p>終了時刻：<input type="time" value="" name="end_time" ></p> --}}
        {{-- ためそう --}}
        {{-- <p>ご褒美：<input type="text" name="reward" value="{{ old('reward') }}"></p>
        <p>メモ：<textarea name="memo" id="" cols="30" rows="10" value="{{ old('memo') }}"></textarea></p> --}}
        {{-- 以下DB構築のためだけに作成 --}}
        <input type="hidden" name="understand_id" value="1">
        <input type="hidden" name="status_id" value="1">
        {{-- <input type="hidden" name="created_at" value="">
        <input type="hidden" name="updated_at" value="">
        <input type="hidden" name="deleted_at" value=""> --}}
        <p><input type="submit" class="btn btn-primary btn-block" value="登録"></p>
    </form>
@endsection
