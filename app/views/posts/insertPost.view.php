<?php require_once __DIR__."/../parts/header.php";?>
<body>
	<div class="card" style="width: 70%;margin-top: 8px; padding: 30px; height: 90%;">
		<form method="POST" >
		  <div class="form-group">
		    <label  class="display-4" style="font-size: 28px;">Title article</label>
		    <input type="text" class="form-control" name="title">
		    <small id="emailHelp" class="form-text text-muted">Please do not use too long a title*</small>
		  </div>
		  <div class="form-group">
		  	<label for="exampleInputEmail1" class="display-4" style="font-size: 28px;">Content</label>
	 		<textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="11"></textarea>
	 		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else*</small>
	 		<input type="hidden" class="form-control" name="image">
	 		<input type="hidden" class="form-control" name="pubdate">
		  </div>
		  <button type="submit" name="addPostBtn" class="btn btn-success">Submit</button>
		</form>
	</div>
</body>