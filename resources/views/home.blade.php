@extends('layouts.main')

@section('title', 'Index')

@section('include')

    @include('components.includeCommon')

@section('content')

    @include('components.questionCard')

    @include('components.questionList')

@endsection

@section('footer')
    copyrite 2019 MasaKu
@endsection