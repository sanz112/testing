<div class="container" id="con">
<h2><?php echo $post['title']; ?></h2>
<small class="date"> Posted On <span class="dt"><?php echo $post['created_at']; ?></span></small><br>
<center><img style="margin-bottom: 20px;" class="img-fluid post-thumb" height="250" width="250" src="<?php echo site_url(); ?>assets/images/<?php echo $post['post_imag']; ?>" /></center>

<div class="post-body">
<p id="bd1" style="word-break: break-all; word-wrap: break-word;"><?php echo $post['body']; ?></p>
</div>
<?php if($this->session->userdata('user_id') == $post['user_id']) : ?>
<div  class="row">
<div class="col-sm-6 text-center">
<a id="row2" class="btn btn-md btn-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
</div>
<div class="col-sm-6 text-center">
<?php echo form_open('/posts/delete/'. $post['id']); ?>
<input  id="row" type="submit" class="btn btn-md btn-danger" value="Delete" name="btn1"/> 
</div>
</div>
</form>
<?php endif; ?>
<hr>

<h3 style="margin-top: 20px;"> Comments </h3>

<?php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>
    <div class="well">
    <p><?php echo $comment['body']; ?> [by <strong style="color: red;"><?php echo $comment['name']; ?> </strong>]</p>
</div>
    <?php endforeach; ?>
<?php else : ?>

    <p> No comments to Display </p>

<?php endif; ?>
<h2 style="margin-top: 20px;"> Add Comments </h2>
<span id="valid"><?php echo validation_errors(); ?></span>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
<label><span class="fa fa-user"></span> Name : </label>
<input type="text" value=" " name="name" class="form-control">
</div>
<div class="form-group">
<label><span class="fa fa-user"></span> Email : </label>
<input type="email" name="email" class="form-control">
</div>
<div class="form-group">
<label><span class="fa fa-user"></span> Body : </label>
<textarea style="height: 70px; resize: none;" type="text" name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button type="submit" class="btn btn-md btn-primary"> Submit </button>
</form>
</div>


