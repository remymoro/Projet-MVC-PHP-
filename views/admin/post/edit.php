<h1>formulaire de modification</h1>


<form class="b2" action="/admin/posts/edit/<?= $params['post']->id?>" method="post">
<div class="form-groupe ">
  <label for="title">Titre</label>
  <input type="text" name="title" id="title" value="<?= $params['post']->title?>">
</div>
<div class="form-groupe ">
<label for="content">content</label>
<textarea type="text" name="content" id="content" value="<?= $params['post']->content?>"></textarea>
<button type="submit" class="btn btn-primary">modification</button>

</form>




















