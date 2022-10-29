

  <footer class="footer bg-white" style="position: fixed; bottom:0;width:100%;border-top: black solid 1px;">

    <div class="row">
      <div class="col align-bottom mx-auto d-block">
        <div class="card  border-0">
          <a  href="{{ route('admin.home') }}" class="text-center">
            <span data-feather="home"></span>
            <p href="" >Home</p>
          </a>
        </div>
      </div>

      <div class="col align-bottom mx-auto d-block">
        <div class="card  border-0">
            <a  href="{{ route('admin.list_user') }}" class="text-center">
            <span data-feather="shopping-cart" href="#"></span>
            <p href="">Cart</p>
            </a>
        </div>
      </div>

      <div class="col align-bottom mx-auto d-block">
        <div class="card  border-0">
            <a  href="{{ route('admin.account') }}" class="text-center">
            <span data-feather="user" href="#"></span>
             <p href="">Account</p>
          </center>
        </div>
      </div>


    </div>


  </footer>
