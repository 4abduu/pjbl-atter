<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/styleTweet.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <link rel="icon" href="../assets/images/logo.jpg">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <title>Admin - Users</title>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./dashboard.html" class="text-nowrap logo-img">
              <img src="../assets/images/logo.jpg" alt="logo" width="30" >
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div> 
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g fill="#292d32"><path d="m17.5999 22.5601h-11.20005c-1.82001 0-3.48-1.4-3.78-3.2l-1.33001-7.96c-.21-1.24.39001-2.82999 1.38001-3.61999l6.93001-5.55005c1.34004-1.08 3.44994-1.06999 4.79994.01001l6.9301 5.54004c.98.79 1.58 2.37999 1.38 3.61999l-1.33 7.96c-.3 1.77-1.99 3.2-3.78 3.2zm-5.61-19.62002c-.53 0-1.0601.15997-1.4501.46997l-6.92995 5.55005c-.57.46-.95999 1.48-.83999 2.2l1.33 7.96c.18 1.05 1.22998 1.94 2.29999 1.94h11.20005c1.07 0 2.1199-.89 2.2999-1.95l1.33-7.96c.12-.72-.2799-1.75001-.8399-2.20001l-6.93-5.54004c-.4-.31-.93-.46997-1.47-.46997z"/><path d="m12 16.25c-1.79 0-3.25-1.46-3.25-3.25s1.46-3.25 3.25-3.25 3.25 1.46 3.25 3.25-1.46 3.25-3.25 3.25zm0-5c-.96 0-1.75.79-1.75 1.75s.79 1.75 1.75 1.75 1.75-.79 1.75-1.75-.79-1.75-1.75-1.75z"/></g></svg>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="tweets.php" aria-expanded="false">
                <span>
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g stroke="#292d32" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"><path d="m13.26 3.59997-8.21003 8.69003c-.31.33-.61.98-.67 1.43l-.37 3.24c-.13 1.17.71 1.97 1.87 1.77l3.22-.55c.45-.08 1.08003-.41 1.39003-.75l8.21-8.69003c1.42-1.5 2.06-3.21-.15-5.3-2.2-2.07-3.87-1.34-5.29.16z"/><path d="m11.89 5.05005c.43 2.76 2.67 4.87 5.45 5.14995"/><path d="m3 22h18"/></g></svg>                </span>
                <span class="hide-menu">Tweets</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="coment.php" aria-expanded="false">
                <span>
                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m5.7898124 15.0400458c.13241276-.0378323.27456678-.0193769.39292951.0510126.99547255.5920005 2.13255715.9089416 3.31725809.9089416 3.5898509 0 6.5-2.9101491 6.5-6.5 0-3.58985087-2.9101491-6.5-6.5-6.5-3.58985087 0-6.5 2.91014913-6.5 6.5 0 1.1847009.31694108 2.3217855.90894164 3.3172581.07038949.1183627.08884483.2605167.05101261.3929295l-.73194326 2.5618014zm10.888888-7.71857983c3.1301578.94810663 5.3212996 3.84682143 5.3212996 7.17853403 0 1.291292-.3272163 2.5357461-.9403562 3.6387259l.9211182 3.2239135c.1077645.377176-.2409466.7258871-.6181226.6181226l-3.2239135-.9211182c-1.1029798.6131399-2.3474339.9403562-3.6387259.9403562-3.3285064 0-6.22883281-2.1873547-7.17854188-5.3213898-.50707063-.1536643-.99614767-.3610114-1.46018399-.6189664l-3.22391357.9211182c-.37717594.1077645-.72588709-.2409466-.61812253-.6181226l.92111816-3.2239135c-.61313986-1.1029798-.94035619-2.3474339-.94035619-3.6387259 0-4.14213562 3.35786438-7.5 7.5-7.5 3.3844665 0 6.2453349 2.24179021 7.1787004 5.32146597zm.250999 1.1473973c.0463503.33708482.0703006.68131383.0703006 1.03113673 0 4.1421356-3.3578644 7.5-7.5 7.5-.34771062 0-.6920251-.0237259-1.03109572-.0703714.9752836 2.4229534 3.34211712 4.0703714 6.03109572 4.0703714 1.1847009 0 2.3217855-.3169411 3.3172581-.9089416.1183627-.0703895.2605167-.0888449.3929295-.0510126l2.5618014.7319432-.7319432-2.5618014c-.0378323-.1324128-.0193769-.2745668.0510126-.3929295.5920005-.9954726.9089416-2.1325572.9089416-3.3172581 0-2.6913466-1.6500462-5.05700561-4.0703006-6.03113673z"/></svg>                </span>
                <span class="hide-menu">Comments</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="users.php" aria-expanded="false">
                <span>
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g fill="#292d32"><path d="m12.1205 13.53c-.02 0-.05 0-.07 0-.03 0-.07 0-.1 0-2.27003-.07-3.97003-1.84-3.97003-4.02002 0-2.22 1.81-4.03 4.03003-4.03 2.22 0 4.03 1.81 4.03 4.03-.01 2.19002-1.72 3.95002-3.89 4.02002-.02 0-.02 0-.03 0zm-.12-6.56002c-1.4 0-2.53003 1.14-2.53003 2.53 0 1.37002 1.07003 2.48002 2.43003 2.53002.03-.01.13-.01.23 0 1.34-.07 2.39-1.17 2.4-2.53002 0-1.39-1.13-2.53-2.53-2.53z"/><path d="m12.0008 22.7501c-2.68999 0-5.25999-1-7.24999-2.82-.18-.16-.26-.4-.24-.63.13-1.19.87-2.3 2.1-3.12 2.98-1.98 7.80999-1.98 10.77999 0 1.23.83 1.97 1.93 2.1 3.12.03.24-.06.47-.24.63-1.99 1.82-4.56 2.82-7.25 2.82zm-5.91999-3.65c1.66 1.39 3.75 2.15 5.91999 2.15 2.17 0 4.26-.76 5.92-2.15-.18-.61-.66-1.2-1.37-1.68-2.46-1.64-6.62999-1.64-9.10999 0-.71.48-1.18 1.07-1.36 1.68z"/><path d="m12 22.75c-5.93 0-10.75-4.82-10.75-10.75s4.82-10.75 10.75-10.75 10.75 4.82 10.75 10.75-4.82 10.75-10.75 10.75zm0-20c-5.1 0-9.25 4.15-9.25 9.25s4.15 9.25 9.25 9.25 9.25-4.15 9.25-9.25-4.15-9.25-9.25-9.25z"/></g></svg>                </span>
                <span class="hide-menu"><b>Users</b></span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../logout.php" aria-expanded="false">
                <span>
                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m16 13v-2h-9v-3l-5 4 5 4v-3z"/><path d="m20 3h-9c-1.103 0-2 .897-2 2v4h2v-4h9v14h-9v-4h-2v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2v-14c0-1.103-.897-2-2-2z"/></svg>                </span>
                <span class="hide-menu">Log out</span>
              </a>
            </li>
          </ul>
          <div class="box-user">
            <div class="grid-user">
              <div>
                <img
                  src="../assets/images/default.jpg" alt="user" class="img-user" 
                />
              </div>
              <div>
                <p class="name"><strong>Super Admin</strong></p>
                <p class="username">@superadmin</p>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">

      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12">
            <h2 class="fw-bold">Users</h2>
            <p class="text-primary">total data : 1  </p>
          </div>
      </div>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <table id="myTable" class="display">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Fullname</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Password</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Ichwan</td>
                      <td>Ichwan rental</td>
                      <td>Icwan@gmail.com</td>
                      <td>ichwan123</td>
                  </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/js/datatables.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
</body>

</html> 