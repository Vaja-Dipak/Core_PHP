<!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary text-capitalize">
          <?php echo $_SESSION['UserData']->username; ?>
        </span>, Welcome back</h1>
      <p>Very detailed & featured admin.</p>
    </div>

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">29.75 M</h3>
                <p class="stat-text">Total Users</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-eye"> </i>
                <h3 class="text-secondary number">51.25 K</h3>
                <p class="stat-text">Daily Visitors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cloud-download"> </i>
                <h3 class="text-success number">166.89 M</h3>
                <p class="stat-text">Downloads</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-danger number">1,250k</h3>
                <p class="stat-text">Purchased</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->

    <!-- charts -->
    <div class="chart">
      <div class="row">
        <div class="col-lg-6 pr-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Bar Chart
            </div>
            <div class="card-body">
              <!-- bar chart -->
              <div id="container">
                <canvas id="barchart"></canvas>
              </div>
              <!-- //bar chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated 2 hours ago
            </div>
          </div>
        </div>
        <div class="col-lg-6 pl-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Line Chart
            </div>
            <div class="card-body">
              <!-- line chart -->
              <div id="container">
                <canvas id="linechart"></canvas>
              </div>
              <!-- //line chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Updated just now
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //charts -->

    <!-- AllUsers -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 chart-grid mb-4">
          <div class="card card_border p-4">
            <div class="card-header chart-grid__header pl-0 pt-0">
              Chatting
            </div>
            <div class="messaging">
              <div class="inbox_msg">
                <div class="user_details">
                  <table class="table border">
                    <thead class="table-primary">
                      <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Active</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <?php
                    foreach ($users['data'] as $u) {
                      ?>
                      <tr>
                        <td>
                          <?php echo $u->id; ?>
                        </td>
                        <td>
                          <?php echo $u->username; ?>
                        </td>
                        <td>
                          <?php echo $u->email; ?>
                        </td>
                        <td>
                          <?php echo $u->mobile; ?>
                        </td>
                        <td>
                          <?php echo $u->birth; ?>
                        </td>
                        <td>
                          <?php echo $u->gender; ?>
                        </td>
                        <td>
                          <?php echo $u->address . "," . $u->city . ",<br>" . $u->state . "," . $u->country; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $u->status; ?>
                        </td>
                        <td class="text-center">
                          <a href="" data-toggle="modal" data-target="#exampleModal"><i
                              class="fa fa-address-card"></i></a>
                          &nbsp<a href="updateuser?id=<?php echo $u->id; ?>"><i class="fa fa-edit"></i></a>
                          <?php
                          if ($u->id !== $_SESSION['UserData']->id) { ?>
                            &nbsp<a href="deleteuser?id=<?php echo $u->id; ?>"><i class="fa fa-trash"></i></a>
                          <?php } else { ?>
                          <?php } ?>
                        </td>
                      </tr>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header p-2 text-primary">
                              <h5 class="modal-title" id="exampleModalLabel"><b>User Details</b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body p-2">
                              <section style="background-color: #f4f5f7;">
                                <div class="container p-2">
                                  <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col col-lg-12 mb-lg-0">
                                      <div class="card" style="border-radius: .7rem;">
                                        <div class="row g-0 px-3">
                                          <div class="col-md-3 px-2 bg-primary text-center text-white"
                                            style="border-top-left-radius: .7rem; border-bottom-left-radius: .7rem;">
                                            <img
                                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                              alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                            <h5>Marie Horwitz</h5>
                                            <p>Web Designer</p>
                                            <i class="far fa-edit mb-5"></i>
                                          </div>
                                          <div class="col-md-9 px-2">
                                            <div class="card-body p-3">
                                              <h5>Information</h5>
                                              <hr class="mt-0 mb-2">
                                              <div class="row p-1">
                                                <div class="col-6">
                                                  <h6>Email</h6>
                                                  <p class="text-muted">info@example.com</p>
                                                </div>
                                                <div class="col-6">
                                                  <h6>Phone</h6>
                                                  <p class="text-muted">123 456 789</p>
                                                </div>
                                              </div>
                                              <div class="row p-1">
                                                <div class="col-6 mb-3">
                                                  <h6>Email</h6>
                                                  <p class="text-muted">info@example.com</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                  <h6>Phone</h6>
                                                  <p class="text-muted">123 456 789</p>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-start">
                                                <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                                <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                            </div>
                            <div class="modal-footer p-2">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //AllUsers -->

    <!-- chatting -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 chart-grid mb-4">
          <div class="card card_border p-4">
            <div class="card-header chart-grid__header pl-0 pt-0">
              Chatting
            </div>
            <div class="messaging">
              <div class="inbox_msg">
                <div class="inbox_people">
                  <div class="headind_srch">
                    <div class="srch_bar">
                      <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search Chat">
                        <span class="input-group-addon">
                          <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="inbox_chat">
                    <div class="chat_list active_chat">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar5.jpg"
                            alt="Alexander" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Alexander <span class="chat_date">1 hour ago</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar3.jpg"
                            alt="Anderson" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Anderson <span class="chat_date">5 hours ago</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar5.jpg"
                            alt="Isabella" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Isabella <span class="chat_date">Yesterday</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar4.jpg"
                            alt="Charlotte" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Charlotte <span class="chat_date">Mar 04</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar2.jpg"
                            alt="Davidson" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Davidson <span class="chat_date">Feb 18</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar1.jpg"
                            alt="Elexa ker" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Elexa ker <span class="chat_date">Feb 04</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar4.jpg"
                            alt="Charlotte" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Charlotte <span class="chat_date">Jan 28</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mesgs">
                  <div class="msg_history">
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img
                          src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Coming along nicely, we've got a Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          </p>
                          <span class="time_date"> 10:05 AM | Mar 9</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Great start, I've added some Lorem ipsum dolor sit amet. </p>
                        <span class="time_date"> 12:15 PM | Mar 9</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img
                          src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
                          <span class="time_date"> 09:16 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>But I must explain to you.</p>
                        <span class="time_date"> 03:15 PM | Today</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img
                          src="<?php echo $this->assetsurl; ?>admin_assets/images/avatar5.jpg" alt="Alexander"
                          class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores.</p>
                          <span class="time_date"> 03:16 PM | Today</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="type_msg">
                    <div class="input_msg_write">
                      <input type="text" class="write_msg" placeholder="Type a message" />
                      <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o"
                          aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //chatting -->
  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>