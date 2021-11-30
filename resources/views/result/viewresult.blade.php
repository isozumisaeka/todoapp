@extends('layout.viewtaskslayout')

@section('title', '結果を見る')

{{-- 左下セクション --}}
@section('leftbottom')
<h1>{{ $msg }}</h1>
<p>{{ $checked ?? '' }}</p>
<?php DD($checked); ?>
{{-- @foreach ($checked ?? '' ?? '' as $item)
    <p>{{ $item }}</p>
@endforeach --}}
{{-- ためす --}}
{{-- @foreach($param as $task)
    <p>{{ $task->task }}
    <a href="" value="{{ $task->task_id }}"><img src="" alt="更新"></a>
    <a href="" value="{{ $task->task_id }}"><img src="" alt="削除"></a>
    <a href="" value="{{ $task->task_id }}"><img src="" alt="完了"></a></p>
    <p>{{ $task->start_date }}</p>
    <p>{{ $task->end_date }}</p>
@endforeach --}}
@endsection
