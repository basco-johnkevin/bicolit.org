@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
    {{-- Delete Blog Form --}}
    <form class="form-horizontal" method="post" action="" autocomplete="off">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="id" value="{{ $post->id }}" />
        <!-- ./ csrf token -->

        <!-- Form Actions -->
        <div class="control-group">
            <div class="controls">
                <element class="btn-cancel close_popup">Cancel</element>
                <button type="submit" class="btn btn-danger">Delete</button><img id="loading" style="display:none;" src="{{{ asset('assets/img/colorbox/loading.gif') }}}">
            </div>
        </div>
        <!-- ./ form actions -->
    </form>
@stop
