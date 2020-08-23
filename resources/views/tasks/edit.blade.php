@extends("layouts.app")

@section("content")

<!-- ここにページごとのコンテンツをかく -->
<h1>id: {{ $task->id }}</h1>

<div class="row">
  <div class="col-6">
    {!! Form::model($task, ["route" => ["tasks.update", $task->id], "method" => "put"]) !!}
  
    <div class="form-group">
      {!! Form::label("content", "タスク：") !!}
      {!! Form::text("content", null, ["class" => "form-control"]) !!}
    </div>

    {!! Form::submit("投稿", ["class" => "btn btn-warning"]) !!}

    {!! Form:: close() !!}
  </div>
</div>

@endsection