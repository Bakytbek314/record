@extends('layouts.homeLayout')
@section('document_title')
    Record
@endsection

@section('content')
    @include('modules.startBlock')
    @include('modules.progressBlock')
    @include('modules.coursesBlock')
    @include('modules.teachersBlock')
    @include('modules.aboutUsBlock')
@endsection