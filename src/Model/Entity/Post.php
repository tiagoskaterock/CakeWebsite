<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Post extends Entity
{
    protected $_accessible = [
        'image' => true,
        'title' => true,
        'content' => true,
        'created' => true,
        'modified' => true,
    ];
}
