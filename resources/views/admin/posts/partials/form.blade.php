<div class="form-group">
    {{ Form::label('forTitle', 'Title')}}
    {{ Form::text('title', null, array('class'=>'form-control',$readonly,'placeholder'=>'Enter Title','required'=>'required','autocomplete'=>'off'))}}
</div>
<div class="form-group">
    {{ Form::label('forContent', 'Description')}}
    {{ Form::textarea('description', null, ['class' => 'summernote-description']) }}
</div>
<div class="form-group">
    {{ Form::label('forContent', 'Content')}}
    {{ Form::textarea('content', null, ['class' => 'summernote']) }}
</div>
<div class="row justify-content-center">
    @if($btn == 'Back')
        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    @else
    
        {{ Form::submit($btn, array('class'=>'btn btn-success')) }} &nbsp;
        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    @endif
</div>

<script>
        $('.summernote').summernote('{{$disable}}');
        $('.summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 100,
            contenteditable:true
        });
        $('.summernote-description').summernote('{{$disable}}');
        $('.summernote-description').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 100,
            contenteditable:true
        });
</script>