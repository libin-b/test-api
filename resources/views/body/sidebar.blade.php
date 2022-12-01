<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a  class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
            <li class="nav-item">
                <a href="{{url('/home')}}" class="nav-link">
                <i class="nav-icon fa fa-tachometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
            </li>
      
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
                <p>
                  Manage
                  <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        Customers
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('customers.create')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Customer</p>
                        </a>
                      </li>
                    </ul>

                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('customers.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Customer</p>
                        </a>
                      </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        Items
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('items.create')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Items</p>
                        </a>
                      </li>
                    </ul>

                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('items.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Items</p>
                        </a>
                      </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        Vendor
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('vendors.create')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Vendor</p>
                        </a>
                      </li>
                    </ul>

                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('vendors.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Vendor</p>
                        </a>
                      </li>
                    </ul>
                  </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        Expense Head
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('expense_heads.create')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Head</p>
                        </a>
                      </li>
                    </ul>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('expense_heads.index')}}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Head</p>
                        </a>
                      </li>
                    </ul>
                </ul>
            </li> 
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Orders
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('orders.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Orders</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('orders.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Orders</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Expense
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('expenses.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Expense</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('expenses.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Expense</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Purchase
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('purchases.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Purchase</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('purchases.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Purchase</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Tax Purchase
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('tax_purchases.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Tax Purchase</p>
                  </a>
                </li>
              </ul>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('tax_purchases.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Tax Purchase</p>
                  </a>
                </li>
              </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>