<?php
namespace Trafficbot\Operations;

class Status extends AbstractOperation
{
    public function getName()
    {
        return 'status';
    }

    public function setTitle($title)
    {
        $this->parameter['title'] = $title;
        return $this;
    }
}