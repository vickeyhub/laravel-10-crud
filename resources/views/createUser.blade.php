@include('components/head')

<body>
    <div class="container">
        <h1 class="text-center border-bottom border-secondary pb-2 text-uppercase">Create a New User</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('/') }}" class="btn btn-success"><i class="fa-solid fa-chevron-left"></i> Go Back</a>
        </div>

        <div id="user-form" class="user-form">
            <form action="{{url('createUser')}}" method="post" class="form">
                @csrf
                <div class="row">
                    <div class="form-group mb-2 col-md-6">
                        <label for="name">Full Name</label>
                        <input class="input form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name')}}" placeholder="Full Name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label>Mobile</label>
                        <input class="input form-control @error('mobileNumber') is-invalid @enderror" type="tel" name="mobileNumber" value="{{ old('mobileNumber')}}" placeholder="Mobile No.">
                        @error('mobileNumber')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="form-group mb-2 col-md-12">
                        <label>Email</label>
                        <input class="input form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label>Password</label>
                        <input class="input form-control" type="password" name="password" placeholder="********">
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label>Confirm Password</label>
                        <input class="input form-control" type="password" name="confirmPassword" placeholder="********">
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </div>
            </form>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
        </div>
    </div>
</body>

</html>