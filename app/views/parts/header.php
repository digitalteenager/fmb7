<?php

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body class="bg-light">
<div class="container-fluid d-flex bg-light" style="width: 100%;">
	<div>
		<nav class="navbar sticky-top navbar-light bg-faded">
			<div class="card" style="width: 17rem;">
				<img src="https://sun9-59.userapi.com/c7005/v7005864/708e5/TJZVyHTnSoE.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text" style="border-bottom:1px solid rgba(0,0,0,.125); padding-bottom: 19px;">
						<span class="display-4">CLIQUE STARS</span>
					</p>
						
					<div class="d-flex align-items-center justify-content-between" style="opacity: .8;margin-top:20px auto; width: 70%;">
						<div class="d-flex " style="margin-right: 13px;">
							<div style="margin-right:4px; ">10</div>
							<div class=""><img src="https://image.flaticon.com/icons/svg/478/478544.svg" width="20"></div>
						</div>
 						<div class="d-flex " style="margin-right: 13px;">
							<div style="margin-right:4px; ">20</div>
							<div><img src="https://image.flaticon.com/icons/svg/1189/1189206.svg" width="20"></div>
						</div>
						<div class="d-flex">
							<div style="margin-right:4px; "><?=29?></div>
							<div><img src="https://image.flaticon.com/icons/svg/380/380127.svg" width="20"></div>
						</div>

					</div>
					<div style="margin-top: 20px;">
							<?php
								$route = $_GET['route'];
								if($route == 'insertpost' OR $route == 'updatepost')
								{
									echo '<a href="/" style="width:120px;" class="btn btn-info">HOME</a>';
								}
								if($route =='')
								{
									echo '<a href="insertpost" style="width:120px;" class="btn btn-primary">PULL UP</a>';
								}
							?>
					</div>
				</div>
			</div>
		</nav>
	</div>

