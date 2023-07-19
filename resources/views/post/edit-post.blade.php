@extends('template.template')
@section('content')
<x-forms.tinymce-editor-edit :post="$post"/>
@endsection
