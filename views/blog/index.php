<h1>Les derniers articles</h1>

<div class="container-grid w-100  ">

    <?php foreach($params['posts'] as $post) :?>
        <div class="card d-flex flex-column justify-content-space-around  w-100 h-75 p-3">
            <div class="card-header">
                <h2><?= $post->title ?></h2>
         </div>
            <div class="card-body">
                <p><?= $post->content ?></p>
            </div>
            <div class="card-footer">
                <p>Publié le <?= $post->created_at ?></p>
            </div>
            
            <div class="btn d-flex w-100 justify-content-end  ">
                <a href="/posts/<?= $post->id ?>" class="btn btn-success ">Voir</a>
            </div>
                
                
        </div>
        <?php endforeach;?>
        
    </div>




