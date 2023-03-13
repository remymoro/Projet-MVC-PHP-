<h1>Adminstration des article</h1>


<table class="container  ">
  <thead>
    <tr>
      <th>Titre</th>
      <th>Date de publication</th>
    </tr>
  </thead>
  <tbody >
    <?php foreach($params['posts'] as $post) : ?>
      <tr>
        <td><?= $post->title ?></td>
        <td><?= $post->getCreatedAt() ?></td>
        <td>
                    <a href="/admin/posts/edit/<?= $post->id ?>" class="btn btn-warning">Modifier</a>
                    <form action="/admin/posts/delete/<?= $post->id ?>" method="POST" class="d-inline">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
        <td> <a href="">editer</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
    
   

</table>
