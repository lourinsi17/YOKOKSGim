<x-app-layout>
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}"/>
    <script src="{{asset('js/app.js')}}" defer></script>
    <x-slot name="header">

            <div class="contentContainer">
                <div class="my-custom-row d-flex flex-row justify-content-between " >
                    @role('Admin')
                    <div class="admin-container">
                        <h1 class="adminText"> {{ __('Hello, Admin') }} </h1>
                    </div>
                    @endrole
                    @role('SuperAdmin')
                    <div class="admin-container">
                        <h1 class="adminText"> {{ __('Hello, Admin') }} </h1>
                    </div>
                    @endrole
                    @role('Employee')
                    <div class="admin-container">
                        <h1 class="adminText"> {{ __('Hello, Employee') }} </h1>
                    </div>
                    @endrole
                </div>
                
                <div class="centerContainer">
                    <div class="d-flex justify-content-start">
                    @role('SuperAdmin')
                        <div class="container-box">
                            <a href="/employees">
                                <div class="box">
                                    <i class="Iicons fa-solid fa-id-card"></i>
                                    <!-- <svg class="SVGicons" xmlns="http://www.w3.org/2000/svg" width="169" height="169" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>-->
                                </div>
                            </a>
                            
                            
                            <div class="box-description">
                                EMPLOYEES
                            </div>
                           
                        </div>
                    @endrole
                        <div class="container-box">
                            <a href="/members">
                                <div class="box">
                                    <i class="Iicons fa-solid fa-users"></i>
                                </div>
                            </a>
                            <div class="box-description">
                                GYM MEMBERS
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </x-slot>

</x-app-layout>
<style>
        .dashboardActive{
            background: white;
            border-radius:8px;
        }
</style>