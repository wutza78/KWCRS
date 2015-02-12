<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

    		Kw &middot Repairing Service System

	  </title>
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navbar-->
     <nav class="navbar navbar-default container" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="listreport.html">Report</a></li>
            <li><a href="storage.html">Storage</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sign In</a>
              <ul class="dropdown-menu dmlogin" role="menu">
                <div class="wrapper">
                  <form class="form-signin" method="POST" action="check_login.php">
                    <h2 class="form-signin-heading">Please login</h2><hr/>
                    <input type="text" class="form-control" name="uname" placeholder="Username" required autofocus/>
                    <input type="password" class="form-control" name="pword" placeholder="Password" required/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
                  </form>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav><!--navbar-->
    <div class="container">
      <div class="page-header">
        <h1>รายการแจ้งซ่อมบำรุงคอมพิวเตอร์ <small>โรงเรียนกัลยาณวัตร</small></h1>
      </div>
      <div class="table table-bordered">
        <table class="table">
            <thead>
              <th width="2%">ลำดับ</th>
              <th width="10%">วันที่แจ้ง</th>
              <th width="8%">ผู้แจ้ง</th>
              <th width="8%">สถานที่</th>
              <th width="10%">ประเภทอุปกรณ์</th>
              <th width="20%">เรื่องที่แจ้ง</th>
              <th width="2%">สถานะ</th>
              <th width="20%">ผลการดำเนินการ</th>
              <th width="2%">รายละเอียด</th>
            </thead>
            <tbody>
              <tr>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
              </tr>
              <tr>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
              </tr>
              <tr>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
              </tr>
            </tbody>
         </table>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>