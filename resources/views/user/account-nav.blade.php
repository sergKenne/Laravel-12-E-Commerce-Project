<ul class="account-nav">
  <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
  <li><a href="account-orders.html" class="menu-link menu-link_us-s">Orders</a></li>
  <li><a href="account-address.html" class="menu-link menu-link_us-s">Addresses</a></li>
  <li><a href="account-details.html" class="menu-link menu-link_us-s">Account Details</a></li>
  <li><a href="account-wishlist.html" class="menu-link menu-link_us-s">Wishlist</a></li>
  <li>
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" style="border:none; padding:0; background: transparent; text-transform: uppercase; font-weight: 500; " class="menu-link menu-link_us-s" >Logout</button>
    </form>
  </li>
</ul>