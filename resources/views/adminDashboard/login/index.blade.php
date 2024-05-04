@include('adminDashboard.headersAdminLogin.header')

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>MPL</strong> Login Info</h1>
        <div class="form-group container">
            <form action="{{Route('admin.login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email Address</label>
                    <input required class="form-control au-input au-input--full" type="email" name="email" placeholder="Email">
                </div>
                <br>
                <div class="form-group">
                    <label>Password</label>
                    <input required class="form-control au-input au-input--full" type="password" name="password" placeholder="Password">
                </div>
                <br>
                <div class="login-checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
                <br>
                <button class="btn btn-dark au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
            </form>
        </div>
</main>
@include('adminDashboard.headersAdminLogin.footer')