<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    }

    .notification {
    background-color: red;
    color: white;
    text-decoration: none;
    position: relative;
    display: inline-block;
    border-radius: 2px;
    }

    .notification:hover {
    background: red;
    }

    .notification .badge {
    position: absolute;
    padding: 5px 10px;
    border-radius: 50%;
    background-color: red;
    color: white;
    }
</style>

<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link {{ active_class(Route::is('admin/module-explorer'))}}" href="{{ route('admin.module.index') }}">
                    <i class="nav-icon fa fa-box"></i>
                    Module Explorer
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/file_manager'))}}" href="{{ route('admin.file_manager.index') }}">
                <i class="nav-icon fas fa-folder-open"></i>
                    File Manager
                </a>
            </li>

            @if(Module::has('Blog'))
                @if(Module::find('Blog')->isStatus(1))

                    <li class="nav-item nav-dropdown ">
                        <a class="nav-link nav-dropdown-toggle " href="#">
                            <i class="nav-icon fas fa-newspaper"></i>
                            Blog
                        </a>

                        <ul class="nav-dropdown-items">

                            @if(auth()->user()->can('view blog category'))
                                <li class="nav-item">
                                    <a class="nav-link {{active_class(Route::is('admin/category'))}}" href="{{ route('admin.category.index') }}">                            
                                        Category
                                    </a>
                                </li>  
                            @endif

                            @if(auth()->user()->can('view blog posts'))
                                <li class="nav-item">
                                    <a class="nav-link {{active_class(Route::is('admin/post'))}}" href="{{ route('admin.post.index') }}">                            
                                        Post
                                    </a>
                                </li>  
                            @endif

                        </ul>
                    </li>  

                @endif
            @endif

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/webiste_checkout'))}}" href="{{ route('admin.webiste_checkout.index') }}">
                    <i class="nav-icon fas fa-bars"></i>
                    Website Checkout
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/contact_us'))}}" href="{{ route('admin.contact_us.index') }}">
                    <i class="nav-icon fas fa-comments"></i>
                    Contact Us <span class="notification badge">{{App\Models\ContactUs::where('status','Pending')->get()->count()}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/partnership_inqiries'))}}" href="{{ route('admin.partnership_inqiries.index') }}">
                    <i class="nav-icon fas fa-handshake"></i>
                        Partnership Inqiries <span class="notification badge">{{App\Models\PartnershipInqiries::where('status','Pending')->get()->count()}}</span>
                </a>
            </li>


            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown ">
                    <a class="nav-link nav-dropdown-toggle " href="#">
                        <i class="nav-icon fas fa-cog"></i>
                        Settings
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/settings'))}}" href="{{ route('admin.settings.index') }}">                        
                                General Settings
                            </a>  
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/about_us'))}}" href="{{ route('admin.about_us') }}">
                                About Us
                            </a>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/privacy_policy'))}}" href="{{ route('admin.privacy_policy') }}">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/terms_and_conditions'))}}" href="{{ route('admin.terms_and_conditions') }}">
                                Terms and Conditions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/contactus_thanks'))}}" href="{{ route('admin.contactus_thanks') }}">
                                Contact Us Thanks Email
                            </a>
                        </li>                   
                    </ul>
                </li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/auth*'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                        active_class(Route::is('admin/auth*'))
                    }}" href="#">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/user*'))
                            }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/role*'))
                            }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
