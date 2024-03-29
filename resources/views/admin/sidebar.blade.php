
<!-- partial:../../partials/_sidebar.htmls -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/admin/"><img src="{{asset("assets")}}/admin/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="/admin/"><img src="{{asset("assets")}}/admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset("assets")}}/admin/assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>

        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>




        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.category.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Category</span>
            </a>
        </li>

         <li class="nav-item menu-items">
             <a class="nav-link" href="/admin/house">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
                <span class="menu-title">House</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.comment.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-comment-processing-outline"></i>
              </span>
                <span class="menu-title">Comment</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.faq.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-comment-question-outline"></i>
              </span>
                <span class="menu-title">Faq</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.message.index')}}">
              <span class="menu-icon">
            <i class="mdi mdi-message-outline"></i>
            </span>
            <span class="menu-title">Messages</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/user">
              <span class="menu-icon">
            <i class="mdi mdi-account"></i>
            </span>
            <span class="menu-title">User</span>
            </a>
        </li>


        <li class="nav-item nav-category">
            <span class="nav-link">LABELS</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/setting">
              <span class="menu-icon">
            <i class="mdi mdi-wrench "></i>
            </span>
                <span class="menu-title">Settings</span>
            </a>
        </li>
    </ul>
</nav>


<!-- partial -->
