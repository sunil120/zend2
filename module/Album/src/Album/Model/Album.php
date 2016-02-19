<?php
namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray($data) {
        $this->id     = (!empty($data['id'])) ? $data['id'] : null;
        $this->title  = (!empty($data['title'])) ? $data['title'] : null;
        $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
    }
}