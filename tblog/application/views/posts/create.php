
<div class="container">
<h2><?=$title; ?></h2>
<span id="valid"> <?php echo validation_errors(); ?></span>
<?php echo form_open_multipart('posts/create'); ?>
<div class="form-group">
  <label id="app2000"> {{message}}  </label><br>
  <input type="file" id="userfile" name="userfile" size="20" >
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
  </div>
 
  <div class="form-group">
    <label for="body">Body:</label>
    <!--<span id="toolbar-container"></span>-->
    <textarea style="resize: none;" type="text" id="editor" class="form-control" cols= 20 name="body"></textarea>
  </div>
  <div class="form-group">
  <label> Category </label>
  <select name="category_id" class="form-control">
  <?php foreach($categories as $category): ?>
  <option value="<?php echo $category['id']; ?>"><?php echo $category['name'];?></option>
  <?php endforeach; ?>
  </select>
  </div>
 
  <button type="submit" class=" form-control btn btn-primary">Submit</button>
</form>
</div>