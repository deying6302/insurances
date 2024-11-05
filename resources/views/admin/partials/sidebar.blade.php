<div id="sidebar" class="app-sidebar app-sidebar-transparent" data-bs-theme="dark">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                    data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image">
                        <img src="{{ asset('backend/img/user/user-13.jpg') }}" alt="" />
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                {{ Auth::guard('admin')->user()->user_name }}
                            </div>
                            <div class="menu-caret ms-auto"></div>
                        </div>
                        <small>{{ Auth::guard('admin')->user()->full_name }}</small>
                    </div>
                </a>
            </div>
            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Settings</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                        <div class="menu-text"> Send Feedback</div>
                    </a>
                </div>
                <div class="menu-item pb-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                        <div class="menu-text"> Helps</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>
            <div class="menu-header">Navigation</div>
            <div class="menu-item has-sub active">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-sitemap"></i>
                    </div>
                    <div class="menu-text">Dashboard</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item active">
                        <a href="index.html" class="menu-link">
                            <div class="menu-text">Dashboard v1</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="index_v2.html" class="menu-link">
                            <div class="menu-text">Dashboard v2</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="index_v3.html" class="menu-link">
                            <div class="menu-text">Dashboard v3</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-hdd"></i>
                    </div>
                    <div class="menu-text">Email</div>
                    <div class="menu-badge">10</div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="email_inbox.html" class="menu-link">
                            <div class="menu-text">Inbox</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="email_compose.html" class="menu-link">
                            <div class="menu-text">Compose</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="email_detail.html" class="menu-link">
                            <div class="menu-text">Detail</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a href="{{ route('admin.hospital.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="menu-text">Bệnh viện <span class="menu-label">NEW</span></div>
                </a>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-gem"></i>
                    </div>
                    <div class="menu-text">UI Elements <span class="menu-label">NEW</span></div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="ui_general.html" class="menu-link">
                            <div class="menu-text">General <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_typography.html" class="menu-link">
                            <div class="menu-text">Typography</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_tabs_accordions.html" class="menu-link">
                            <div class="menu-text">Tabs & Accordions</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_unlimited_tabs.html" class="menu-link">
                            <div class="menu-text">Unlimited Nav Tabs</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_modal_notification.html" class="menu-link">
                            <div class="menu-text">Modal & Notification <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_widget_boxes.html" class="menu-link">
                            <div class="menu-text">Widget Boxes</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_media_object.html" class="menu-link">
                            <div class="menu-text">Media Object</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_buttons.html" class="menu-link">
                            <div class="menu-text">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_icon_fontawesome.html" class="menu-link">
                            <div class="menu-text">FontAwesome</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_icon_bootstrap.html" class="menu-link">
                            <div class="menu-text">Bootstrap Icons <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_icon_duotone.html" class="menu-link">
                            <div class="menu-text">Duotone Icons <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_icon_simple_line_icons.html" class="menu-link">
                            <div class="menu-text">Simple Line Icons</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_icon_ionicons.html" class="menu-link">
                            <div class="menu-text">Ionicons</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_tree.html" class="menu-link">
                            <div class="menu-text">Tree View</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_language_bar_icon.html" class="menu-link">
                            <div class="menu-text">Language Bar & Icon</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_social_buttons.html" class="menu-link">
                            <div class="menu-text">Social Buttons</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_tour.html" class="menu-link">
                            <div class="menu-text">Intro JS</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="ui_offcanvas_toasts.html" class="menu-link">
                            <div class="menu-text">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item ">
                <a href="bootstrap_5.html" class="menu-link">
                    <div class="menu-icon-img">
                        <img src="{{ asset('backend/img/logo/logo-bs5.png') }}" alt="" />
                    </div>
                    <div class="menu-text">Bootstrap 5 <span class="menu-label">NEW</span></div>
                </a>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-list-ol"></i>
                    </div>
                    <div class="menu-text">Form Stuff <span class="menu-label">NEW</span></div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="form_elements.html" class="menu-link">
                            <div class="menu-text">Form Elements <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_plugins.html" class="menu-link">
                            <div class="menu-text">Form Plugins <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_slider_switcher.html" class="menu-link">
                            <div class="menu-text">Form Slider + Switcher</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_validation.html" class="menu-link">
                            <div class="menu-text">Form Validation</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_wizards.html" class="menu-link">
                            <div class="menu-text">Wizards <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_wysiwyg.html" class="menu-link">
                            <div class="menu-text">WYSIWYG</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_editable.html" class="menu-link">
                            <div class="menu-text">X-Editable</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_multiple_upload.html" class="menu-link">
                            <div class="menu-text">Multiple File Upload</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_summernote.html" class="menu-link">
                            <div class="menu-text">Summernote</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="form_dropzone.html" class="menu-link">
                            <div class="menu-text">Dropzone</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-table"></i>
                    </div>
                    <div class="menu-text">Tables</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="table_basic.html" class="menu-link">
                            <div class="menu-text">Basic Tables</div>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-text">Managed Tables</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="table_manage.html" class="menu-link">
                                    <div class="menu-text">Default</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_buttons.html" class="menu-link">
                                    <div class="menu-text">Buttons</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_colreorder.html" class="menu-link">
                                    <div class="menu-text">ColReorder</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_fixed_columns.html" class="menu-link">
                                    <div class="menu-text">Fixed Column</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_fixed_header.html" class="menu-link">
                                    <div class="menu-text">Fixed Header</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_keytable.html" class="menu-link">
                                    <div class="menu-text">KeyTable</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_responsive.html" class="menu-link">
                                    <div class="menu-text">Responsive</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_rowreorder.html" class="menu-link">
                                    <div class="menu-text">RowReorder</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_scroller.html" class="menu-link">
                                    <div class="menu-text">Scroller</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_select.html" class="menu-link">
                                    <div class="menu-text">Select</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_combine.html" class="menu-link">
                                    <div class="menu-text">Extension Combination</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-cash-register"></i>
                    </div>
                    <div class="menu-text">POS System <span class="menu-label">NEW</span></div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="pos_customer_order.html" target="_blank" class="menu-link">
                            <div class="menu-text">Customer Order</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="pos_kitchen_order.html" target="_blank" class="menu-link">
                            <div class="menu-text">Kitchen Order</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="pos_counter_checkout.html" target="_blank" class="menu-link">
                            <div class="menu-text">Counter Checkout</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="pos_table_booking.html" target="_blank" class="menu-link">
                            <div class="menu-text">Table Booking</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="pos_menu_stock.html" target="_blank" class="menu-link">
                            <div class="menu-text">Menu Stock</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="menu-text">Front End <span class="menu-label">NEW</span></div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/frontend/one-page-parallax/" target="_blank"
                            class="menu-link">
                            <div class="menu-text">One Page Parallax</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/frontend/blog/" target="_blank" class="menu-link">
                            <div class="menu-text">Blog</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/frontend/forum/" target="_blank"
                            class="menu-link">
                            <div class="menu-text">Forum</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/frontend/e-commerce/" target="_blank"
                            class="menu-link">
                            <div class="menu-text">E-Commerce</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/frontend/corporate/" target="_blank"
                            class="menu-link">
                            <div class="menu-text">Corporate <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="menu-text">Email Template</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="email_system.html" class="menu-link">
                            <div class="menu-text">System Template</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="email_newsletter.html" class="menu-link">
                            <div class="menu-text">Newsletter Template</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-chart-pie"></i>
                    </div>
                    <div class="menu-text">Chart</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="chart-flot.html" class="menu-link">
                            <div class="menu-text">Flot Chart</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="chart-js.html" class="menu-link">
                            <div class="menu-text">Chart JS</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="chart-d3.html" class="menu-link">
                            <div class="menu-text">d3 Chart</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="chart-apex.html" class="menu-link">
                            <div class="menu-text">Apex Chart</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a href="landing.html" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-crown"></i>
                    </div>
                    <div class="menu-text">Landing Page <span class="menu-label">NEW</span></div>
                </a>
            </div>
            <div class="menu-item">
                <a href="calendar.html" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="menu-text">Calendar</div>
                </a>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-map"></i>
                    </div>
                    <div class="menu-text">Map</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="map_vector.html" class="menu-link">
                            <div class="menu-text">Vector Map</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="map_google.html" class="menu-link">
                            <div class="menu-text">Google Map</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="menu-text">Gallery</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="gallery.html" class="menu-link">
                            <div class="menu-text">Gallery v1</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="gallery_v2.html" class="menu-link">
                            <div class="menu-text">Gallery v2</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="menu-text">Page Options <span class="menu-label">NEW</span></div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="page_blank.html" class="menu-link">
                            <div class="menu-text">Blank Page</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_footer.html" class="menu-link">
                            <div class="menu-text">Page with Footer</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_fixed_footer.html" class="menu-link">
                            <div class="menu-text">Page with Fixed Footer <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_without_sidebar.html" class="menu-link">
                            <div class="menu-text">Page without Sidebar</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_right_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Right Sidebar</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_minified_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Minified Sidebar</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_two_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Two Sidebar</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_line_icons.html" class="menu-link">
                            <div class="menu-text">Page with Line Icons</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_ionicons.html" class="menu-link">
                            <div class="menu-text">Page with Ionicons</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_full_height.html" class="menu-link">
                            <div class="menu-text">Full Height Content</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_wide_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Wide Sidebar</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_light_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Light Sidebar</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_mega_menu.html" class="menu-link">
                            <div class="menu-text">Page with Mega Menu</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_top_menu.html" class="menu-link">
                            <div class="menu-text">Page with Top Menu</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_boxed_layout.html" class="menu-link">
                            <div class="menu-text">Page with Boxed Layout</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_mixed_menu.html" class="menu-link">
                            <div class="menu-text">Page with Mixed Menu</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_boxed_layout_with_mixed_menu.html" class="menu-link">
                            <div class="menu-text">Boxed Layout with Mixed Menu</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_transparent_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Transparent Sidebar</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_search_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Search Sidebar <i
                                    class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="page_with_hover_sidebar.html" class="menu-link">
                            <div class="menu-text">Page with Hover Sidebar <i
                                    class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div class="menu-text">Extra <span class="menu-label">NEW</span></div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="extra_timeline.html" class="menu-link">
                            <div class="menu-text">Timeline</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_coming_soon.html" class="menu-link">
                            <div class="menu-text">Coming Soon Page</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_search_results.html" class="menu-link">
                            <div class="menu-text">Search Results</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_invoice.html" class="menu-link">
                            <div class="menu-text">Invoice</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_404_error.html" class="menu-link">
                            <div class="menu-text">404 Error Page</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_profile.html" class="menu-link">
                            <div class="menu-text">Profile Page</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_scrum_board.html" class="menu-link">
                            <div class="menu-text">Scrum Board <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_cookie_acceptance_banner.html" class="menu-link">
                            <div class="menu-text">Cookie Acceptance Banner <i
                                    class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_orders.html" class="menu-link">
                            <div class="menu-text">Orders <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_order_details.html" class="menu-link">
                            <div class="menu-text">Order Details <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_products.html" class="menu-link">
                            <div class="menu-text">Products <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_product_details.html" class="menu-link">
                            <div class="menu-text">Product Details <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_file_manager.html" class="menu-link">
                            <div class="menu-text">File Manager <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_pricing_page.html" class="menu-link">
                            <div class="menu-text">Pricing Page <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_messenger_page.html" class="menu-link">
                            <div class="menu-text">Messenger Page <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_data_management.html" class="menu-link">
                            <div class="menu-text">Data Management <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="extra_settings_page.html" class="menu-link">
                            <div class="menu-text">Settings Page <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-key"></i>
                    </div>
                    <div class="menu-text">Login & Register</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="login.html" class="menu-link">
                            <div class="menu-text">Login</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="login_v2.html" class="menu-link">
                            <div class="menu-text">Login v2</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="login_v3.html" class="menu-link">
                            <div class="menu-text">Login v3</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="register_v3.html" class="menu-link">
                            <div class="menu-text">Register v3</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="menu-text">Version <span class="menu-label">NEW</span></div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="index-2.html" class="menu-link">
                            <div class="menu-text">HTML</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/ajax/" class="menu-link">
                            <div class="menu-text">AJAX</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/angularjs/" class="menu-link">
                            <div class="menu-text">ANGULAR JS</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/angularjs18/" class="menu-link">
                            <div class="menu-text">ANGULAR JS 18</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="javascript:alert('Laravel 11 Version only available in downloaded version.');"
                            class="menu-link">
                            <div class="menu-text">LARAVEL 11</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/vue3/" class="menu-link">
                            <div class="menu-text">VUE 3 + Vite JS</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/react/" class="menu-link">
                            <div class="menu-text">REACT 18</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="javascript:alert('.NET Core 8.0 MVC Version only available in downloaded version.');"
                            class="menu-link">
                            <div class="menu-text">ASP.NET <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="javascript:alert('Django Version only available in downloaded version.');"
                            class="menu-link">
                            <div class="menu-text">DJANGO <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/svelte/" class="menu-link">
                            <div class="menu-text">SVELTE <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/material/" class="menu-link">
                            <div class="menu-text">MATERIAL DESIGN</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/apple/" class="menu-link">
                            <div class="menu-text">APPLE DESIGN</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/transparent/" class="menu-link">
                            <div class="menu-text">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/facebook/" class="menu-link">
                            <div class="menu-text">FACEBOOK DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="https://seantheme.com/color-admin/admin/google/" class="menu-link">
                            <div class="menu-text">GOOGLE DESIGN <i class="fa fa-paper-plane text-theme"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-medkit"></i>
                    </div>
                    <div class="menu-text">Helper</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="helper_css.html" class="menu-link">
                            <div class="menu-text">Predefined CSS Classes</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-align-left"></i>
                    </div>
                    <div class="menu-text">Menu Level</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.1</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item has-sub">
                                <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.1</div>
                                    <div class="menu-caret"></div>
                                </a>
                                <div class="menu-submenu">
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 3.1</div>
                                        </a></div>
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 3.2</div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.2</div>
                                </a></div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.3</div>
                                </a></div>
                        </div>
                    </div>
                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.2</div>
                        </a></div>
                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.3</div>
                        </a></div>
                </div>
            </div>

            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;"
                    class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                    data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
            </div>
            <!-- END minify-button -->
        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg" data-bs-theme="dark"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
        class="stretched-link"></a></div>
