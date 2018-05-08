@if($errors->get($field))
    <div class='alert alert-danger' role='alert'>
        <ul class='list-unstyled'>
            @foreach($errors->get($field) as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif