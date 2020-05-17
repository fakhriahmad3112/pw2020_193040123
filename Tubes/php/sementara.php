<section id="Login" class="Login">
  <div class="container" style="position: center">
    <h3 class="center">LOGIN</h3>
    <div class="row">
      <div class="col s6 m6" style="position: center">
        <div class="card-panel blue light-3 center white-text">
          <form action="" method="POST">
            <?php if (isset($error)) : ?>
              <p style="color: red; font-style: italic;">Username atau Password Salah</p>
            <?php endif; ?>
            <div class="input-field col-3 pl-5 pr-5 info-panel">
              <i class="material-icons prefix">account_box</i>
              <input id="username" type="text" name="username" autofocus autocomplete="off" required>
              <label for="icon_prefix">Username</label>
            </div>
            <div class="input-field m6 s6">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name="password" autofocus required>
              <label for="password">Password</label>
            </div>
            <div class="remember">
              <label>
                <input type="checkbox" />
                <span>Remember Me</span>
              </label>
            </div>
            <a class="waves-effect waves-light btn">Login</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>