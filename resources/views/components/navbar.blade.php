<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="">📝 Todo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                @if (session()->has("signin"))
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/todo">Todo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/complete">Complete</a>
                </li>
                <li class="nav-item">
                    <a href="/add" class="btn btn-primary" >Add</a>
                </li>

                @endif
            </ul>
            @if (session()->has("signin"))
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            @endif
            <div class="d-flex mx-1 my-2 ">
                @if (session()->has("signin"))
                <a href="/signout" class="btn btn-primary mx-1">
                    Sign Out
                </a>
                @else
                <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#modal_signin">
                    Sign In
                </button>
                <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#modal_signup">
                    Sign Up
                </button>
                @endif
            </div>
        </div>
    </div>
</nav>
<!-- Sign In Modal -->
<div class="modal fade" id="modal_signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form action="/signin" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="signin-username" class="form-label">Email</label>
                        <input type="email" class="form-control" id="signin-username" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="signin-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signin-password" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Sign Up Modal -->
<div class="modal fade" id="modal_signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/signup" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">

                        @csrf
                        <div class="col-md-6">
                            <label for="signup-first-name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="signup-first-name" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="signup-last-name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="signup-last-name" name="last_name" required>
                        </div>

                        <div class="col-md-12">
                            <label for="signup-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="signup-email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="signup-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signup-password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="signup-verify-password" class="form-label">Conform Password</label>
                            <input type="password" class="form-control" id="signup-verify-password" name="conform_pasword" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div> 