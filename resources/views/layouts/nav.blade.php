<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-at"
        style="color:#FF4C25;" viewBox="0 0 16 16">
        <path
          d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" />
      </svg>
      <a class="navbar-brand color text-orange" style="color:#FF4C25;" href="#">Community</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link text-light" aria-current="page" href="{{route('community.index')}}">Main page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{url('blog')}}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{url('friends')}}">Friends</a>
          </li>
          <li class="nav-item">
            <a class="position-relative nav-link text-light" href="{{url('messanger')}}">

              Messanger <span
                class="position-absolute top-0 start-6 translate-middle badge rounded-pill bg-secondary">+99 <span
                  class="visually-hidden">unread messages</span></span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{url('bio')}}">Bio</a>
          </li>



          <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      -->

        </ul>
        <div class="row ">
          <div class="col-8 ">
            <div class="pl-lg-5 pt-lg-2">
              <button class="form-control" style="
          background-color: #FF4C25;
          color: white;
          border-color: #FF4C25;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add new post</button>
            </div>
          </div>

          <div class="col-4">
            <div class="d-none d-md-block">
              <img src="{{asset('./images/avatar.jpg')}}" class="rounded-circle " style="max-height: 50px" alt="Cinque Terre"
              href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"
              >
            </div>

          </div>
              <!-- <a class="" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>-->

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </div>




      </div>
    </div>
  </nav>
