<?php


class DmPageViewTable extends PluginDmPageViewTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmPageView');
    }
}