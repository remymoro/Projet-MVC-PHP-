

    <div class="card d-flex flex-column justify-content-space-around  w-100 h-75 p-3">
        <div class="card-header">
            <h2><?= $params['post']->title ?></h2>
        </div>
        
        <?php foreach($params['post']->getTags() as $tag) :?>

<?=  $tag->name ?>

<?php endforeach;?>
       
        
        <div class="card-body">
        <h2><?= $params['post']->content ?></h2>
        </div>
        <div class="card-footer">
        <h2><?= $params['post']->created_at?></h2>
        </div>
        
        <div class="btn d-flex w-100 justify-content-end  ">
            <a href="/posts" class="btn btn-success ">retourner en arrierre</a>
        </div>
            
            
    </div>









