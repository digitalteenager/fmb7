<?php require_once __DIR__."/../parts/header.php";?>
	<div class ="card "style="margin: 8px 0px; padding: 8px 16px; width: 100%;">
		<?php foreach ($posts as $row):?>
			<div class="d-flex " style="margin: 15px 0 15px 0;">
				<div class="bg-dark">
				  	<img src="https://www.samsung.com/etc/designs/smg/global/imgs/support/cont/NO_IMG_600x600.png" alt="..." width="200">
				</div>

				<div class="card-body">
				    <div class="d-flex justify-content-between">
				    	
				    	<div>
				    		<h5 class="card-title"><?=$row->title?></h5>
				    	</div>
				    	<div>
				    		<small class="font-italic"><?=$row->pubdate?></small>
				    	</div>
				    </div>
				    <p class="card-text"style="text-align: justify;"><?=$row->text?></p>
				    <a href="deletepost&id=<?=$row->id?>" class="btn btn-danger float-right" style="width: 150px;">
				    	It's trash
					</a>
					<a href="updatepost&id=<?=$row->id?>" class="btn btn-info float-right" style="width: 150px; margin-right: 20px;">
				    	Rehash
					</a>
				</div>
			</div>

			<hr>

	    <?php endforeach;?>
	</div>
</div>
<?php require_once __DIR__."/../parts/footer.php";?>