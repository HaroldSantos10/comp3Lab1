<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL::to('/') }}">
          <img src="https://i.pinimg.com/236x/34/6a/1f/346a1f4363e1b59f6860fdce6abc1082--icons-church.jpg" width="30" height="30" class="d-inline-block align-top" >
            Estudiantes Web
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item">
            <a class="nav-link " href="{{ URL::to('estudiante') }}">Estudiantes</a>
            </li>

        </ul>
        </div>
    </div>
</nav>
