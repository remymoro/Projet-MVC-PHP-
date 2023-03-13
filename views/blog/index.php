<h1>Les derniers articles</h1>

<div class="container-grid w-100  ">
    
    <?php foreach($params['posts'] as $post) :?>
        
        

        <div class="card d-flex flex-column justify-content-space-around  w-100 h-75 p-3 b2 ">
            <div class="card-header">
                <h2><?= $post->title ?></h2>
                
                
                <?php foreach($post->getTags() as $tag) :?>

                  <a href="/tags/<?=$tag->id?>" class="btn btn-success"><?=$tag->name?></a>

                <?php endforeach;?>

         </div>
            <div class="card-body">
                <p><?= $post->getExcerpt() ?></p>
            </div>
            <div class="card-footer">
                <p>Publié le <?= $post->getCreatedAt() ?></p>
            </div>
            
            <div class="btn d-flex w-100 justify-content-end  ">
               <?= $post->getButton()?>
            </div>
                
                
        </div>
        <?php endforeach;?>
        
    </div>




