<nav class="d-flex justify-content-between pt-3">
    <div class="d-flex px-2 align-items-center border border border-white rounded">
        <div class="pt-1">
            <h3>
                < PIYAWAT />
            </h3>
        </div>
    </div>
    <div class="d-inline-flex gap-3">
        <a href="https://laravel.com">
            <div style="width: 40px">
                <img style="width: 100%"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                    alt="">
            </div>
        </a>
        <a href="https://getbootstrap.com">
            <div style="width: 50px">
                <img style="width: 100%" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg"
                    alt="">
            </div>
        </a>
        <form action="{{ url('logout') }}" method="post" class="d-flex align-items-center">
            @csrf
            <button type="submit" class="btn btn-link">ออกจากระบบ</button>
        </form>

    </div>
</nav>
