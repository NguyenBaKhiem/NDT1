<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo">
                <a href="home" class="btn btn-success" style="margin-left: 3px;"><i class="ti-home"></i></a>
                <a href="admin"><span>|<i class="ti-target"></i>ADMIN</span></a></div>
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a href="admin" ><i class="ti-dashboard"></i> Dashboard <span class="badge badge-primary"></span></a>
                    </li>
                    <li class="label">App</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  Charts  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="">Sparkle</a></li>
                            <li><a href="">Knob</a></li>
                        </ul>
                    </li>
                    <li><a href="admin/calender.html"><i class="ti-calendar"></i> Calender </a></li>
                    <li><a href="admin/email.html"><i class="ti-email"></i> Email</a></li>
                    <li><a href="admin/contact.html"><i class="ti-comments-smiley"></i> Contact</a></li>
                    <li class="label">List</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-id-badge"></i>Admin<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="admin/list/admin.html"><i class="ti-list"></i>List admin</a></li>
                            @if(Auth::guard('admin')->user()->dominion ==1)
                            <li><a href="admin/add/admin.html"><i class="ti-plus"></i>Add admin</a></li>
                            @endif
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>User<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="admin/list/user.html"><i class="ti-list"></i>List user</a></li>
                            <li><a href="admin/add/user.html"><i class="ti-plus"></i>Add user</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-receipt"></i>Post<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="admin/list/post.html"><i class="ti-list"></i>List post</a></li>
                            <li><a href="admin/add/post.html"><i class="ti-plus"></i>Add post</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-notepad"></i>Confession<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="admin/list/confession.html"><i class="ti-list"></i>List confession</a></li>
                            <li><a href="admin/add/confession.html"><i class="ti-plus"></i>Add confession</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-comments"></i>Forum<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="admin/list/forum.html"><i class="ti-list"></i>List question</a></li>
                        </ul>
                    </li>
                    <li class="label">More</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-files"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="admin/profile.html/name={{Auth::guard('admin')->user()->nameslug}}">Profile</a></li>
                            <li><a href="admin/changepassword.html/name={{Auth::guard('admin')->user()->nameslug}}">Change password</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.html"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- /# sidebar -->
