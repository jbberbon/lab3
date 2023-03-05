<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'jbberbon_MyGuests';

    protected $allowedFields = ['name', 'email', 'message'];

    public function getComments()
    {       
        return $this->findAll();
    }
}