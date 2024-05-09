<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ URL::tokenRoute('home') }}">
      <i class="bi bi-grid"></i>
      <span>Home</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ URL::tokenRoute('about') }}">
      <i class="bi bi-grid"></i>
      <span>About</span>
    </a>
  </li>
  

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Questions</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      
      <li>
        <a href="{{ URL::tokenRoute('questions') }}">
          <i class="bi bi-circle"></i><span>Questions</span>
        </a>
      </li>

      <li>
        <a href="{{ URL::tokenRoute('add-questions') }}">
          <i class="bi bi-circle"></i><span>Add Questions</span>
        </a>
      </li>

    </ul>
  </li><!-- End Components Nav -->

 

  

  

</ul>

</aside><!-- End Sidebar-->