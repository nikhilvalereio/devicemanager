<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">

  <div class="logo">

    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>



  <div class="sidebar-wrapper">
    <ul class="nav">

    <li class="nav-item ">

    <div class="collapse show" id="laravelExample">
    <ul class="nav">


        <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.home') }}">

            <span class="sidebar-normal">Control panal </span>
            </a>
        </li>


        <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.employee.index') }}">

            <span class="sidebar-normal">Employee </span>
            </a>
        </li>
        <li class="nav-item">
             <a class="nav-link" href="{{ route('admin.device.index') }}">

            <span class="sidebar-normal"> Device </span>
            </a>
        </li>




     </ul>
    </div>
    </li>






    </ul>
    </div>
</div>

