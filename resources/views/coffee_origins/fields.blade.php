<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_date', 'Post Date:') !!}
    {!! Form::date('post_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <label class="radio-inline">
        {!! Form::radio('country', "Public", null) !!} Public
    </label>
    <label class="radio-inline">
        {!! Form::radio('country', "Private", null) !!} Private
    </label>
</div>

<!-- Post Visits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_visits', 'Post Visits:') !!}
    {!! Form::number('post_visits', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('coffeeOrigins.index') !!}" class="btn btn-default">Cancel</a>
</div>
