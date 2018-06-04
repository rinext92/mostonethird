<div class="form-group">
    {{ Form::label('forName', 'Name')}}
    {{ Form::text('name', null, ['class'=>'form-control',$readonly,'placeholder'=>'Enter Name','required'=>'required','autocomplete'=>'off'])}}
</div>
<div class="form-group">
    {{ Form::label('forUsername', 'Username')}}
    {{ Form::text('username', null, ['class'=>'form-control',$readonly,'placeholder'=>'Enter Name','required'=>'required','autocomplete'=>'off'])}}
</div>
<div class="form-group">
    {{ Form::label('forEmail', 'Email')}}
    {{ Form::email('email', null, ['class'=>'form-control',$readonly,'placeholder'=>'Enter Name','required'=>'required','autocomplete'=>'off'])}}
</div>
<div class="form-group">
    {{ Form::label('forStatus', 'Status')}}
    {{ Form::select('status', ['0' => 'Active', '1' => 'Not Active'], null ,['class' => 'form-control',$readonly,'required'=>'required','autocomplete'=>'off']) }}
</div>
<div class="row justify-content-center">
    @if($btn == 'Back')
        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    @else
    
        {{ Form::submit($btn, array('class'=>'btn btn-success')) }} &nbsp;
        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    @endif
</div>