<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
            <!-- max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -->
            <div class="sidebar m-2 h-100" id="side_nav">
                <div class="header-box px-2 pt-3">
                    <div class="fs-4 d-flex justify-content-center">
                        <div class="d-flex justify-content-center" id="GIMLOGO">
                          <img src="/imgs/Yokoks Logo.png" alt="Yokoks logo" id="GymIconPng" style="width: 120px; height: 120px;">
                        </div>
                    </div>
                    <ul class="list-unstyled px-2">
                    <li class="dashboardActive d-flex justify-content-center" >
                        <a href="/dashboard" class="text-decoration-none py-2 d-block">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="GIMText">
                                Dashboard
                            </div>
                        </a>
                    </li>
                    <div class="space"></div>
                    <li class="gymMembersActive d-flex justify-content-center">
                        <a href="/members" class="text-decoration-none py-2 d-block">
                            <div class="d-flex justify-content-center">
                              <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="GIMText">
                              Gym Members
                            </div>
                        </a>
                    </li>
                    @role('Admin')
                    <div class="space"></div>
                    <li class="employeesActive d-flex justify-content-center">
                        <a href="/employees" class="text-decoration-none py-2 d-block">
                            <div class="d-flex justify-content-center">
                              <i class="fa-solid fa-id-card"></i>
                            </div>
                            <div class="GIMText">
                                Employees
                            </div>
                        </a>
                    </li>
                    @endrole
                    @role('SuperAdmin')
                    <div class="space"></div>
                    <li class="employeesActive d-flex justify-content-center">
                        <a href="/employees" class="text-decoration-none py-2 d-block">
                            <div class="d-flex justify-content-center">
                              <i class="fa-solid fa-id-card"></i>
                            </div>
                            <div class="GIMText">
                                Employees
                            </div>
                        </a>
                    </li>
                    @endrole

                    @role('SuperAdmin')
                    </ul>
                    <div class="space"></div>
                      <li class="rolesActive d-flex justify-content-center">
                        <a href="{{route('admin.roles.index')}}" :active="request()->routeIs('admin.roles.index')" class="text-decoration-none py-2 d-block">
                          <div class="d-flex justify-content-center">
                            <i class="fa-solid fas fa-clipboard-list"></i>
                          </div>
                          <div class="GIMText">
                            Roles
                          </div>
                        </a>
                      </li>
                      @endrole

                    <hr class="h-color mx-2"></hr>
                            <div class="logout-container">
                              <x-dropdown>
                                  <x-slot name="trigger">
                                      <button class="logout-dropdown">
                                          <div>{{ Auth::user()->firstname }}</div>
                                          <div class="logout-icon">
                                          <i class="fa-solid fa-arrow-down"></i>
                                          </div>
                                      </button>
                                  </x-slot>

                                  <x-slot name="content">
                                      <!-- Authentication -->
                                      <form method="POST" action="{{ route('logout') }}">
                                          @csrf

                                          <x-dropdown-link :href="route('logout')"
                                                  onclick="event.preventDefault();
                                                              this.closest('form').submit();" class="content-dropdown">
                                              {{ __('Log Out') }}
                                          </x-dropdown-link>
                                      </form>
                                  </x-slot>
                              </x-dropdown>
                            </div>
                </div>
            </div>
<script>
    $(".sidebar ul li").on('click' , function(){
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active');
    });
</script>



</nav>
