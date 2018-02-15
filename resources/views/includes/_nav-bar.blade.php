<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{ LaraDev }</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a href="#" class="dropdown-item">myNotes</a>
                    <a href="#" class="dropdown-item">myClients</a>
                    <a href="#" class="dropdown-item">myProjects</a>
                    <a href="#" class="dropdown-item">myTasks</a>
                    <h6 class="dropdown-header">Links</h6>
                    <a href="#" class="dropdown-item">Articles</a>
                    <a href="#" class="dropdown-item">Videos</a>
                    <a href="#" class="dropdown-item">Packages</a>
                </div>
            </div>

            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Something</a>
            </li>
        </ul>

        {{--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>--}}


        <div class="dropdown show">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Options</a>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>
    </div>
</nav>