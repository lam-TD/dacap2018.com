<template>
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
              <ul id="sidebarnav">
                  <!-- <li class="nav-devider"></li> -->
                  <li class="nav-small-cap">PERSONAL</li>
                  <li>
                    <router-link to="/" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                      <span class="hide-menu">Dashboard</span>
                    </router-link>
                  </li>
                  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Nhân sự</span></a>
                      <ul aria-expanded="false" class="collapse">
                          <li><router-link to="/phongban">Phòng ban</router-link></li>
                          <li><router-link to="/bophan">Bộ phận</router-link></li>
                          <li><router-link to="/bangluong">Bảng lương</router-link></li>
                          <li><router-link to="/bangthuong">Bảng thưởng</router-link></li>
                          <li><router-link to="/danhsachnhanvien">DS Nhân viên</router-link></li>
                      </ul>
                  </li>
                  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                      <ul aria-expanded="false" class="collapse">
                          <li><a href="app-email.html">Mailbox</a></li>
                          <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                          <li><a href="app-compose.html">Compose Mail</a></li>
                      </ul>
                  </li>
                  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements <span class="label label-rouded label-danger pull-right">25</span></span></a>
                      <ul aria-expanded="false" class="collapse">
                          <li><a href="ui-cards.html">Cards</a></li>
                          <li><a href="ui-user-card.html">User Cards</a></li>
                          <li><a href="ui-buttons.html">Buttons</a></li>
                          <li><a href="ui-modals.html">Modals</a></li>
                          <li><a href="ui-tab.html">Tab</a></li>
                          <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                          <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                          <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                          <li><a href="ui-notification.html">Notification</a></li>
                      </ul>
                  </li>
                  <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                      <ul aria-expanded="false" class="collapse">
                          <li><a href="form-basic.html">Basic Forms</a></li>
                          <li><a href="form-layout.html">Form Layouts</a></li>
                          <li><a href="form-addons.html">Form Addons</a></li>
                      </ul>
                  </li>
                  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                      <ul aria-expanded="false" class="collapse">
                          <li><a href="table-basic.html">Basic Tables</a></li>
                          <li><a href="table-layout.html">Table Layouts</a></li>
                          <li><a href="table-data-table.html">Data Tables</a></li>
                          <li><a href="table-footable.html">Footable</a></li>
                          <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                          <li><a href="table-responsive.html">Responsive Table</a></li>
                          <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                          <li><a href="table-editable-table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Widgets</span></a>
                      <ul aria-expanded="false" class="collapse">
                          <li><a href="widget-apps.html">Data Widgets</a></li>
                          <li><a href="widget-data.html">Statestic Widgets</a></li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </aside>
  <!-- ============================================================== -->
  <!-- End Left Sidebar - style you can find in sidebar.scss  -->
</template>

<script>
    export default {
        name: 'left-bar'
    }
</script>
