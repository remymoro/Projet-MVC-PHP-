<?php
namespace App\Models;

use DateTime;

class Post extends Model
{

    protected $table = 'posts';
  


    public function getCreatedAt():string
    {
        return (new DateTime($this->created_at))->format('d/m/Y à H:m');
     
    }
     
    

    public function getExcerpt()
    {
       return substr($this->content,0,50) . '...';
    }


    public function getButton()
    {
        // heredoc attention indentation
    
        return <<<HTML
            <a href="/posts/$this->id" class="btn btn-success ">Lire article</a>
        HTML;
    }


    public function getTags()
    {
        return $this->query("
            SELECT t.* FROM tags t
            INNER JOIN post_tag pt ON pt.tag_id = t.id
            WHERE pt.post_id = ?
        ", [$this->id]);
    }
    

}


