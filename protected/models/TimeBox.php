<?php 

Class TimeBox extends EMongoDocument
{
    public $_id;

    public $description;

    public $tags;

    public $duration;

    public $interruption;

    public $status;

    public $startDate;

    public function rules ()
    {
        return array(
            array('description, tags, duration, interruption, status, startDate', 'safe')
        );
    }

    public function search()
    {
    
    }

    public function collectionName() 
    {
        return "TimeBox";
    }


    
}
