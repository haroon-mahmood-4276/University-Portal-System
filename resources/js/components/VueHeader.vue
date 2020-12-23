<template>
  <header class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <img
          src="images/Logo-2.png"
          width="70"
          height="57"
          class="d-inline-block align-top"
          alt="UNi Logo"
        />
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="fas fa-caret-down fa-lg" style="color: #224172"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="#"
              ><span style="color: #224172">About Us</span></a
            >
          </li>
        </ul>

        <!-- @if (session()->has('Data'))

                <div class="dropdown">
                    <a href="" class="nav-link icon-no-margin" data-toggle="dropdown" role="button">
                        <span class="avatar current"><span class="fas fa-user-graduate fa-2x mr-2 "
                                style="color: #224172;"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right text-center menu"
                        style="border: 1px solid #224172; padding: 5px;" id="action-menu-1-menu">
                        <a target="_blank" href="{{ asset('images/Logo-2.png') }}"> <img
                                src="{{ asset('images/Logo-2.png') }}" class="mb-3" width="50%"></a>
                        <p class="text-muted"> {{ strtoupper(Session('Data')->ID) }} </p>
                        <p class="text-muted">
                            {{ Session('Data')->FirstName . ' ' . Session('Data')->LastName }}
                        </p>
                        @if (session('Data.DataType') == 'Admin')
                            <a href="/admin/logout" class="btn btn-UNi" style="color: white;"><i
                                    class="fas fa-power-off"></i></a>
                        @elseif (session('Data.DataType') == 'Teacher')
                            <a href="/teacher/logout" class="btn btn-UNi" style="color: white;"><i
                                    class="fas fa-power-off"></i></a>
                        @elseif (session('Data.DataType') == 'Student')
                            <a href="/student/logout" class="btn btn-UNi" style="color: white;"><i
                                    class="fas fa-power-off"></i></a>
                        @endif

                    </div>
                </div>
            @endif -->
      </div>
    </nav>
  </header>
</template>

<script>
export default {};
</script>

<style lang="css">
.nav-item {
  border-bottom: 3px solid transparent;
  border-radius: 3px;
  padding: 0em 0.5em;
  transition: border-bottom 0.2s;
}

.active,
header,
.nav-item:hover {
  border-bottom: 3px solid var(--UNi-color);
  padding: 0em 0.5em;
  border-radius: 3px;
}
</style>
