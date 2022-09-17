<?php include 'includes/header.php' ; ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form action="" method="POST">
    		    
    		    <div class="form-group has-error">
    		        <label for="slug">Title<span class="require">*</span></label>
    		        <input type="text" class="form-control" name="slug" />
    		       
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Body</label>
    		        <textarea rows="5" class="form-control" name="description" ></textarea>
    		    </div>


                <div class="form-group">
    		        <label for="description">Post Image</label>
    		       <input type="file">
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>

<?php include 'includes/footer.php' ; ?>