

<div class="card d-flex flex-column justify-content-space-around  w-100 h-75 p-3">
        <div class="card-header">
            <h2><?= $params['tag']->name ?></h2>
        </div>
        
        <?php foreach($params['tag']->getPosts() as $post) :?>

                    <a href="/posts/<?= $post->id ?>"><?=  $post->title?></a>     

                       <?php endforeach;?>
       
      
        
        <div class="btn d-flex w-100 justify-content-end  ">
            <a href="/posts" class="btn btn-success ">retourner en arrierre</a>
        </div>
            
            
    </div>
