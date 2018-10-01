<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>{{ Auth::user()['nama']}}</h5>
        <p>Admin</p>
        <a class="btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <!-- <button type="button" onclick="window.location='/'" class="btn btn-danger">

            Logout
        </button> -->
    </div>
</aside>
<!-- /.control-sidebar -->