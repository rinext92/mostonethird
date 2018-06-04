<div class="col-md-4">

    <!-- Login Widget -->
    @if(Auth::user())
        <div class="card my-4">
            <h5 class="card-header">User</h5>
            <div class="card-body">
                <p>{{Auth::user()->name}}</p>
                <p>{{Auth::user()->gender}}</p>
                <p>{{Auth::user()->email}}</p>
                <p>{{ Auth::user()->userStatus->name }}</p>
            </div>
        </div>
    @else
        <div class="card my-4">
        <h5 class="card-header">Login</h5>
            <div class="card-body">
                {{ Form::open(['url'=>'login', 'method'=>'POST', 'class'=>'form-signin']) }}
                {{ csrf_field() }}
                    <div class="input-group"> 
                        {{ Form::text('username', '', array('class' => 'form-control', 'placeholder'=>'Username', 'require'=>'required')) }} 
                    </div>
                    <div class="input-group" style="margin-top:10px">
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder'=>'Password', 'require'=>'required')) }}
                    </div>
                    <div class="row justify-content-center" style="margin-top:10px">
                        {{ Form::submit('Sign in', array('class'=>'btn btn-secondary"')) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    @endif
     <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
            </div>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
        <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
            <li>
                <a href="#">Web Design</a>
            </li>
            <li>
                <a href="#">HTML</a>
            </li>
            <li>
                <a href="#">Freebies</a>
            </li>
            </ul>
        </div>
        <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
            <li>
                <a href="#">JavaScript</a>
            </li>
            <li>
                <a href="#">CSS</a>
            </li>
            <li>
                <a href="#">Tutorials</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
    <h5 class="card-header">Side Widget</h5>
    <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
    </div>
    </div>

</div>