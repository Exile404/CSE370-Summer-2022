<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
  <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./pic/Admin Cat DP.jpg">
          <span class="nav-item"><?php echo $_SESSION['admin'];?></span>
        </a></li>
        <li><a href="./index.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="./users.php">
          <i class="fas fa-address-card"></i>
          <span class="nav-item">Users</span>
        </a></li>
        <li><a href="./transport.php">
          <i class="fas fa-bus-alt"></i>
          <span class="nav-item">Transport</span>
        </a></li>
        <li><a href="./ticket_buy.php">
          <i class="fas fa-ticket-alt"></i>
          <span class="nav-item">Ticket Buy</span>
        </a></li>
        <li><a href="./payment_history.php">
          <i class="fas fa-receipt"></i>
          <span class="nav-item">Payment History</span>
        </a></li>
        <li><a href="./issues.php">
          <i class="fas fa-comment-alt"></i>
          <span class="nav-item">Issues</span>
        </a></li>
        <li><a href="./settings.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="#" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Settings</h1>
      </div>

      <div class="container">
  <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8 mx-auto">
          <div class="my-4">
              <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                  </li>
              </ul>
              <form>
                  <div class="row mt-5 align-items-center">
                      <div class="col-md-3 text-center mb-5">
                          <div class="avatar avatar-xl">
                              <img src="./Pic/Admin Cat DP.jpg" alt="..." class="avatar-img rounded-circle" />
                          </div>
                      </div>
                      <div class="col">
                          <div class="row align-items-center">
                              <div class="col-md-7">
                                  <h4 class="mb-1">Admin</h4>
                                  <p class="small mb-3"><span class="badge badge-dark">Dhaka, Bangladesh</span></p>
                              </div>
                          </div>
                          <div class="row mb-4">

                          </div>
                      </div>
                  </div>
                  <hr class="my-4" />
                  <div class="form-row">
                      <div class="form-group col-md-6"><br>
                          <label for="name">Name</label>
                          <input type="text" id="name" class="form-control" placeholder="" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputEmai">Email</label>
                      <input type="email" class="form-control" id="inputEmai" placeholder="" />
                  </div>
                  <div class="form-group">
                      <label for="inputLocation">Location</label>
                      <input type="text" class="form-control" id="inputLocation" placeholder="" />
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputDivision">Division</label>
                      <select id="inputDivision" class="form-control">
                          <option selected="">Choose...</option>
                          <option>Dhaka</option>
                          <option>Chittagong</option>
                          <option>Rajshahi</option>
                          <option>Khulna</option>
                          <option>Barisal</option>
                          <option>Mymensingh</option>
                          <option>Rangpur</option>
                          <option>Sylhet</option>
                      </select>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputNID">NID</label>
                          <input type="text" class="form-control" id="inputNID" placeholder="" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputContact">Contact</label>
                      <input type="text" class="form-control" id="inputContact" placeholder="" />
                  </div>

                  <hr class="my-4" />
                  <div class="row mb-4">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="inputPassword4">Old Password</label>
                              <input type="password" class="form-control" id="inputPassword5" />
                          </div>
                          <div class="form-group">
                              <label for="inputPassword5">New Password</label>
                              <input type="password" class="form-control" id="inputPassword5" />
                          </div>
                          <div class="form-group">
                              <label for="inputPassword6">Confirm Password</label>
                              <input type="password" class="form-control" id="inputPassword6" />
                          </div>
                      </div>
                      <div class="col-md-6"><br>
                          <p class="mb-2">Password requirements</p>
                          <p class="small text-muted mb-2">To create a new password, you have to meet all of the following requirements:</p>
                          <ul class="small text-muted pl-4 mb-0">
                              <li>Minimum 8 character</li>
                              <li>At least one special character</li>
                              <li>At least one number</li>
                              <li>Can’t be the same as a previous password</li>
                          </ul>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Save Change</button>
              </form>
          </div>
      </div>
  </div>

  </div>


            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
