<div class="container" id="con">
<h2><?=$title; ?></h2>
<?php echo form_open_multipart('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
<div class="form-group">
  <label> Upload Image </label><br>
  <input type="file" id="userfile" name="userfile" size="20" value=""><?php echo $post['post_imag']; ?>
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <textarea type="text" class="form-control" id="editor" cols= 20 name="body"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group">
  <label> Category </label>
  <select name="category_id" class="form-control">
  <?php foreach($categories as $category): ?>
  <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
  <?php endforeach; ?>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<span id="valid"> <?php echo validation_errors(); ?></span>
</div>