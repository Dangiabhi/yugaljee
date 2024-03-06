<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
 <!-- <img src="{{asset('assets/img/logo/cropped-logo.png')}}" alt=""> -->
</span>
      
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item active open">
      <a href="{{route('admin.dashboard')}}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboards">Dashboards</div>
        <div class="badge bg-primary rounded-pill ms-auto">5</div>
      </a>
    </li>

    <!-- Layouts -->

    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Adviser">Adviser</span>
    </li>
    <li class="menu-item">
      <a href="{{route('admin.servi')}}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-mail"></i>
        <div data-i18n="Service">Service</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{route('admin.bookings')}}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-mail"></i>
        <div data-i18n="Booking">Booking</div>
      </a>
    </li>
  
   
    
    
    
    
    
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-file"></i>
        <div data-i18n="All Plans">All Plans</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{route('admin.plans')}}" class="menu-link">
            <div data-i18n="Plans">Plans</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{route('admin.add')}}" class="menu-link">
            <div data-i18n="Add Plan">Add Plan</div>
          </a>
        </li>
      </ul>
    </li>


    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-lock"></i>
        <div data-i18n="Authentications">Authentications</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Login">Login</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-login-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-login-cover.html" class="menu-link" target="_blank">
                <div data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Register">Register</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-register-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-register-cover.html" class="menu-link" target="_blank">
                <div data-i18n="Cover">Cover</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                <div data-i18n="Multi-steps">Multi-steps</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Verify Email">Verify Email</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                <div data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Reset Password">Reset Password</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                <div data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Forgot Password">Forgot Password</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                <div data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Two Steps">Two Steps</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                <div data-i18n="Cover">Cover</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-forms"></i>
        <div data-i18n="Wizard Examples">Wizard Examples</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="wizard-ex-checkout.html" class="menu-link">
            <div data-i18n="Checkout">Checkout</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="wizard-ex-property-listing.html" class="menu-link">
            <div data-i18n="Property Listing">Property Listing</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="wizard-ex-create-deal.html" class="menu-link">
            <div data-i18n="Create Deal">Create Deal</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="modal-examples.html" class="menu-link">
        <i class="menu-icon tf-icons ti ti-square"></i>
        <div data-i18n="Modal Examples">Modal Examples</div>
      </a>
    </li>

    <!-- Components -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Components">Components</span>
    </li>
    <!-- Cards -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-id"></i>
        <div data-i18n="Cards">Cards</div>
        <div class="badge bg-primary rounded-pill ms-auto">5</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="cards-basic.html" class="menu-link">
            <div data-i18n="Basic">Basic</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-advance.html" class="menu-link">
            <div data-i18n="Advance">Advance</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-statistics.html" class="menu-link">
            <div data-i18n="Statistics">Statistics</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-analytics.html" class="menu-link">
            <div data-i18n="Analytics">Analytics</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="cards-actions.html" class="menu-link">
            <div data-i18n="Actions">Actions</div>
          </a>
        </li>
      </ul>
    </li>
    <!-- User interface -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-color-swatch"></i>
        <div data-i18n="User interface">User interface</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="ui-accordion.html" class="menu-link">
            <div data-i18n="Accordion">Accordion</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-alerts.html" class="menu-link">
            <div data-i18n="Alerts">Alerts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-badges.html" class="menu-link">
            <div data-i18n="Badges">Badges</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-buttons.html" class="menu-link">
            <div data-i18n="Buttons">Buttons</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-carousel.html" class="menu-link">
            <div data-i18n="Carousel">Carousel</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-collapse.html" class="menu-link">
            <div data-i18n="Collapse">Collapse</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-dropdowns.html" class="menu-link">
            <div data-i18n="Dropdowns">Dropdowns</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-footer.html" class="menu-link">
            <div data-i18n="Footer">Footer</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-list-groups.html" class="menu-link">
            <div data-i18n="List Groups">List groups</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-modals.html" class="menu-link">
            <div data-i18n="Modals">Modals</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-navbar.html" class="menu-link">
            <div data-i18n="Navbar">Navbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-offcanvas.html" class="menu-link">
            <div data-i18n="Offcanvas">Offcanvas</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-pagination-breadcrumbs.html" class="menu-link">
            <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-progress.html" class="menu-link">
            <div data-i18n="Progress">Progress</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-spinners.html" class="menu-link">
            <div data-i18n="Spinners">Spinners</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-tabs-pills.html" class="menu-link">
            <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-toasts.html" class="menu-link">
            <div data-i18n="Toasts">Toasts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-tooltips-popovers.html" class="menu-link">
            <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-typography.html" class="menu-link">
            <div data-i18n="Typography">Typography</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Extended components -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-components"></i>
        <div data-i18n="Extended UI">Extended UI</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="extended-ui-avatar.html" class="menu-link">
            <div data-i18n="Avatar">Avatar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-blockui.html" class="menu-link">
            <div data-i18n="BlockUI">BlockUI</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-drag-and-drop.html" class="menu-link">
            <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-media-player.html" class="menu-link">
            <div data-i18n="Media Player">Media Player</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
            <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-star-ratings.html" class="menu-link">
            <div data-i18n="Star Ratings">Star Ratings</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-sweetalert2.html" class="menu-link">
            <div data-i18n="SweetAlert2">SweetAlert2</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-text-divider.html" class="menu-link">
            <div data-i18n="Text Divider">Text Divider</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Timeline">Timeline</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="extended-ui-timeline-basic.html" class="menu-link">
                <div data-i18n="Basic">Basic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                <div data-i18n="Fullscreen">Fullscreen</div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="extended-ui-tour.html" class="menu-link">
            <div data-i18n="Tour">Tour</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-treeview.html" class="menu-link">
            <div data-i18n="Treeview">Treeview</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-misc.html" class="menu-link">
            <div data-i18n="Miscellaneous">Miscellaneous</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Icons -->
    <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
        <div data-i18n="Icons">Icons</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="icons-tabler.html" class="menu-link">
            <div data-i18n="Tabler">Tabler</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="icons-font-awesome.html" class="menu-link">
            <div data-i18n="Fontawesome">Fontawesome</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Forms & Tables -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Forms & Tables">Forms &amp; Tables</span>
    </li>
    <!-- Forms -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-toggle-left"></i>
        <div data-i18n="Form Elements">Form Elements</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="forms-basic-inputs.html" class="menu-link">
            <div data-i18n="Basic Inputs">Basic Inputs</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-input-groups.html" class="menu-link">
            <div data-i18n="Input groups">Input groups</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-custom-options.html" class="menu-link">
            <div data-i18n="Custom Options">Custom Options</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-editors.html" class="menu-link">
            <div data-i18n="Editors">Editors</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-file-upload.html" class="menu-link">
            <div data-i18n="File Upload">File Upload</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-pickers.html" class="menu-link">
            <div data-i18n="Pickers">Pickers</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-selects.html" class="menu-link">
            <div data-i18n="Select & Tags">Select &amp; Tags</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-sliders.html" class="menu-link">
            <div data-i18n="Sliders">Sliders</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-switches.html" class="menu-link">
            <div data-i18n="Switches">Switches</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-extras.html" class="menu-link">
            <div data-i18n="Extras">Extras</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
        <div data-i18n="Form Layouts">Form Layouts</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="form-layouts-vertical.html" class="menu-link">
            <div data-i18n="Vertical Form">Vertical Form</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="form-layouts-horizontal.html" class="menu-link">
            <div data-i18n="Horizontal Form">Horizontal Form</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="form-layouts-sticky.html" class="menu-link">
            <div data-i18n="Sticky Actions">Sticky Actions</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
        <div data-i18n="Form Wizard">Form Wizard</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="form-wizard-numbered.html" class="menu-link">
            <div data-i18n="Numbered">Numbered</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="form-wizard-icons.html" class="menu-link">
            <div data-i18n="Icons">Icons</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="form-validation.html" class="menu-link">
        <i class="menu-icon tf-icons ti ti-checkbox"></i>
        <div data-i18n="Form Validation">Form Validation</div>
      </a>
    </li>
    <!-- Tables -->
    <li class="menu-item">
      <a href="tables-basic.html" class="menu-link">
        <i class="menu-icon tf-icons ti ti-table"></i>
        <div data-i18n="Tables">Tables</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-layout-grid"></i>
        <div data-i18n="Datatables">Datatables</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="tables-datatables-basic.html" class="menu-link">
            <div data-i18n="Basic">Basic</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="tables-datatables-advanced.html" class="menu-link">
            <div data-i18n="Advanced">Advanced</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="tables-datatables-extensions.html" class="menu-link">
            <div data-i18n="Extensions">Extensions</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Charts & Maps -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-chart-pie"></i>
        <div data-i18n="Charts">Charts</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="charts-apex.html" class="menu-link">
            <div data-i18n="Apex Charts">Apex Charts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="charts-chartjs.html" class="menu-link">
            <div data-i18n="ChartJS">ChartJS</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="maps-leaflet.html" class="menu-link">
        <i class="menu-icon tf-icons ti ti-map"></i>
        <div data-i18n="Leaflet Maps">Leaflet Maps</div>
      </a>
    </li>

    <!-- Misc -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Misc">Misc</span>
    </li>
    <li class="menu-item">
      <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
        <div data-i18n="Support">Support</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons ti ti-file-description"></i>
        <div data-i18n="Documentation">Documentation</div>
      </a>
    </li>
  </ul>
  
  

</aside>