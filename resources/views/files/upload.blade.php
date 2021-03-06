@extends('layouts.default')
@section('content')

<link rel="stylesheet" type="text/css" href="{!! url('assets/css/dropzone.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! url('assets/css/upload.css') !!}">
<script type="text/javascript" src="{!! url('assets/js/dropzone.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/upload.js') !!}"></script>


<div class="col-lg-12 text-center">
  {!! Form::open(array('route' => 'upload.music', 'method' => 'POST', 'id' => 'my-dropzone', 'class' => 'form single-dropzone', 'files' => true)) !!}
    
    
    <div class="image alwaysShowEditButton">
        <span  class="sc-artwork sc-artwork-placeholder-0 image__full" aria-label="" aria-role="img">
            <div id="img-thumb-preview">
                <img id="img-thumb" class="user size-lg img-thumbnail" >
                </div>
            </span>
            <div class="image__button">
                <div class="imageChooser">
                    <button class="imageChooser__chooseButton sc-button sc-button-camera sc-button-medium " id="upload-submit">
        Update image
      </button>
                </div>
            </div>
        </div>

  {!! Form::close() !!}
</div>
@endsection