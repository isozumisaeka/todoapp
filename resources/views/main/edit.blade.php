@extends('layout.editlayout')

@section('title', 'タスクを更新する')

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

{{-- 左下セクション --}}


{{-- 更新フォーム --}}
@section('form')
    {{-- <p>{{ $msg }}</p> --}}
    {{-- 入力項目が足りてない場合 --}}
    @if (count($errors) > 0)
        <p class="bg-danger text-white">入力にエラーがあります。再度入力してください。</p>
    @endif
    {{-- 終わり --}}
    <form action="update" method="POST" class="task-form">
        @csrf
        <input type="hidden" name="id" value="{{ $form->id }}">
        <p>
            <label for="text">タスク&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('task')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="text" class="form-control" name="task" 
            @if (old('task'))
            value="{{ old('task') }}">
            @else
            value="{{ $form->task }}">
            @endif
            <small class="form-text">タスクを入力してください</small>
        </p>
        <p>
            <label for="select1a" 　name="book_id">テキスト&nbsp;</label><span class="badge badge-danger">必須</span></label>
            <select id="select1a" class="form-control" name="book_id">
            @if (old('book_id'))
            {{-- @for($i=0; $i<= 1; $i++) --}}
            @foreach($books as $book)
            <option value="{{ old('book_id') }}">
            {{ $book->getTitle(old('book_id'))->title }}
            </option>
            @endforeach
            {{-- @endfor --}}
            @foreach ($books as $book)
                @endforeach
                @foreach ($books as $book)
                <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            @else
            <option value="{{ $form->book_id }}">{{ $form->book->getData() }}</option>
            @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
            @endif
            </select>
        </p>
        <div style="display:flex">
            <p>
                <label for="text">開始ページ&nbsp;</label><span class="badge badge-danger">必須</span>
                @error('start_page')
                    <span class="error">{{ $message }}</span>
                @enderror
                </label>
                <input type="number" class="form-control" name="start_page" min="0" max="2000" @if (old('start_page'))
                value="{{ old('start_page') }}">
            @else
                value="{{ $form->start_page }}">
                @endif
                <small class="form-text">0~2000までの半角数字を入力してください</small>
            </p>
            <p class="wrap pattern-6 mgb-20">&nbsp;～&nbsp;</p>
            <p>
                <label for="text">終了ページ&nbsp;</label><span class="badge badge-danger">必須</span>
                @error('end_page')
                    <span class="error">{{ $message }}</span>
                @enderror
                </label>
                <input type="number" class="form-control" name="end_page" min="0" max="2000" @if (old('end_page'))
                value="{{ old('end_page') }}">
            @else
                value="{{ $form->end_page }}">
                @endif
                <small class="form-text">0~2000までの半角数字を入力してください</small>
            </p>
        </div>
        <p>
            <label for="date">開始日&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('start_date')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <input type="date" class="form-control" name="start_date" @if (old('start_date'))
            value="{{ old('start_date') }}">
        @else
            value="{{ $form->start_date }}">
            @endif
            {{-- <small class="form-text">0~1000までの半角数字を入力してください</small> --}}
        </p>
        <div style="display:flex">
            <p>
                <label for="time">開始時刻&nbsp;</label><span class="badge badge-danger">必須</span>
                @error('start_time')
                    <span class="error">{{ $message }}</span>
                @enderror
                </label>
                <input type="time" class="form-control" name="start_time" @if (old('start_time'))
                value="{{ old('start_time') }}">
            @else
                value="{{ $form->start_time }}">
                @endif
                {{-- <small class="form-text">0~1000までの半角数字を入力してください</small> --}}
            </p>
            <p class="wrap pattern-5 mgb-20">&nbsp;～&nbsp;</p>
            <p>
                <label for="time">終了時刻&nbsp;</label><span class="badge badge-danger">必須</span>
                @error('end_time')
                    <span class="error">{{ $message }}</span>
                @enderror
                </label>
                <input type="time" class="form-control" name="end_time" @if (old('end_time'))
                value="{{ old('end_time') }}">
            @else
                value="{{ $form->end_time }}">
                @endif
                {{-- <small class="form-text">0~1000までの半角数字を入力してください</small> --}}
            </p>
        </div>
        <p>
            <label for="text">ごほうび&nbsp;</label><span class="badge badge-info">任意</span></label>
            <input type="text" class="form-control" name="reward" @if (old('reward'))
            value="{{ old('reward') }}">
        @else
            value="{{ $form->reward }}">
            @endif
            {{-- <small class="form-text">タスクを入力してください</small> --}}
        </p>
        <p>
            <label for="text">メモ&nbsp;</label><span class="badge badge-info">任意</span></label>
            <textarea type="text" class="form-control" name="memo">
                    @if (old('memo'))
                    {{ old('memo') }}</textarea>
        @else
            {{ $form->memo }}</textarea>
            @endif
            {{-- <small class="form-text">タスクを入力してください</small> --}}
        </p>
        <p> <label for="radio">理解度&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('understand_id')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <small class="form-text text-danger">更新時（完了時）の理解度を入力してください</small>
        </p>
        <input type="radio" name="understand_id" value="1">
        <label for="radio1b" value="1" required>★☆☆☆☆</label>
        <input type="radio" name="understand_id" value="2">
        <label for="radio1b" value="2">★★☆☆☆</label>
        <input type="radio" name="understand_id" value="3">
        <label for="radio1b" value="3">★★★☆☆</label>
        <input type="radio" name="understand_id" value="4">
        <label for="radio1b" value="4">★★★★☆</label>
        <input type="radio" name="understand_id" value="5">
        <label for="radio1b" value="5">★★★★★</label>
        </p>
        <p><label for="radio">ステータス&nbsp;</label><span class="badge badge-danger">必須</span>
            @error('status_id')
                <span class="error">{{ $message }}</span>
            @enderror
            </label>
            <small class="form-text text-danger">更新時のステータスを入力してください</small>
        </p>

        <input type="radio" name="status_id" id="radio1b" value="1">
        <label class="form-check-label" for="radio1b" value="1">進行中</label>
        <input type="radio" name="status_id" id="radio1b" value="2">
        <label class="form-check-label" for="radio1b" value="2">完了</label>
        <input type="radio" name="status_id" id="radio1b" value="3">
        <label class="form-check-label" for="radio1b" value="3">期限切れ</label>
        </p>
        {{-- 以下DB構築のためだけに作成 --}}
        {{-- <input type="hidden" name="created_at" value=""> --}}
        <input type="hidden" name="updated_at" value="">
        {{-- <input type="hidden" name="deleted_at" value=""> --}}
        <p><input type="submit" class="btn btn-primary btn-block" value="登録"></p>
    </form>
    <form action="/page">
    </form>
@endsection
