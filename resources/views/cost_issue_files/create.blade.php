@extends('layouts.app')

@section('header')
    <div class="display-flex">
        <h2 class="flex">{{$project->name}} &mdash; Cost Issues</h2>
        <a href="/project/{{$project->id}}/issue-files" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i> Back</a>
    </div>
@endsection

@section('body')
    {{Form::open(['files' => true, 'url' => '/project/40/issue-files'])}}

    @include('cost_issue_files._form')

    {{Form::close()}}
@endsection