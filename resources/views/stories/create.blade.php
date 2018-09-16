@extends('master')


@section('content')
    <div class="col-sm-8 blog-main">

        <h3> Новая история </h3>
        <hr>
        <form method="POST" ACTION="/stories">
            {!! csrf_field() !!}

            <div class="form-group ">
                <label for="title">Название:</label>
                <input type="text" class="form-control form-control-sm" id="title" name="title"  >
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Рубрика:</label>
                <input type="text" class="form-control form-control-sm" id="section" name="section"  >
            </div>

            <div class="form-group col-md-6">
                <label for="title">Автор:</label>
                <input type="text" class="form-control form-control-sm" id="author" name="author"  >
            </div>
            </div>
            <div class="form-group">
                <label for="title">Источник:</label>
                <input type="text" class="form-control form-control-sm" id="source" name="source"  >
            </div>
            <div class="form-group">
                <label for="body">Текст</label>
                <textarea  rows="15" class="form-control form-control-sm" id="body" name="body" ></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Добавить</button>
            </div>
            @include ('layouts.errors')
        </form>


    </div>

@endsection
