<div class="container">
<div class="row">

    <div style="display: block;" class="col-sm-2 sidenav">
    <h5> Categories </h5>
      <a href="#">Business</a><hr>
      <a href="#">Technology</a><hr>
      <a href="#">Technology</a><hr>
      <a href="#">Finace</a><hr>
     </div>
   
<div class="col-sm-10">
<h3 style="color: red;"><?= $title ?></h3>
<?php foreach($posts as $post) : ?>
<h3 style="margin-bottom: 20px;"><?php echo $post['title']; ?></h3>
<div style="margin-bottom: 30px;" class="row">
<div class="col-md-3">
<img class="post-thumb" height="200" width="200" src="<?php echo site_url(); ?>assets/images/<?php echo $post['post_imag']; ?>" />
</div>
<div class="col-md-9">
<small class="date"> Created at <?php echo $post['created_at']; ?> in <?php echo $post['name']; ?></small>
<p style="word-break: break-all; text-align: justify; word-wrap: break-word"><?php echo word_limiter($post['body'], 50); ?>
<p class="btn btn-danger"><a href="<?php echo site_url('posts/'.$post['slug']);?>">Read More</a></p>
</div>
</div>
<?php endforeach; ?>
<div class="pagination-links">
<?php echo $this->pagination->create_links(); ?>
</div>
</div>
</div> 
