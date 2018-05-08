@if(session('alert'))
    <div class='alert alert-{{ session('alert')[0] }}' role='alert'>
        {{ session('alert')[1] }}
    </div>
@endif