<?php
    require_once('../user/header.php');
?>
        
        <!--================ Frist hader Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img style="width: 100px;" src="../../assets/img/kpu.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li> <a href="home.php"><i class="fa fa-home"></i> HOME </a></li>
                            <li> <a href="voting.php"><i class="fa fa-edit"></i> VOTING</a></li>
                            <li class="active"> <a href="paslon.php"><i class="fa fa-users"></i> DAFTAR PASLON</a></li>
                            <li> <a href="tata_cara.php"><i class="fa fa-list"></i> TATA CARA</a></li>
                            <li> <a href="#portfolio"><i class="fa fa-sign-out"></i> LOGOUT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </header>
      

        <!--================Total container Area =================-->
        <br>
        <div class="container main_container">
            <div class="content_inner_bg row m0">
               <div class="panel">
					<div class="panel-heading">
						<span class="panel-title">Daftar pasanag Capres & Cawapres</span>
					</div>
					<div class="panel-body">
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Paslon</th>
									<th>Foto</th>
									<th>Visi & Misi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Asep</td>
									<td><img style="width: 100px;" src="../../assets/img/user.png"></td>
									<td>Membuat Indonesia Lebih Maju</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Andi</td>
									<td><img style="width: 100px;" src="../../assets/img/user.png"></td>
									<td>Indonesia Bersatu</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Joni</td>
									<td><img style="width: 100px;" src="../../assets/img/user.png"></td>
									<td>Indonesia Maju</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
                <!--================Map Area =================-->
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br>

 <?php
    require_once('../user/footer.php');
?>