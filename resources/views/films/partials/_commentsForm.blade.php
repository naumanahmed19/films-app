
    {!! Form::open(['route'=> ['comments.store']] ) !!}

    {!! form_text('name','Name','Enter Your Name',null, $errors) !!}

    {!!  form_textarea('comment', null,'Write Comment', '',$errors) !!}

    {{ Form::hidden('film_id',$film->id) }}

    <div class="card-actions">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>

    {!! Form::close() !!}