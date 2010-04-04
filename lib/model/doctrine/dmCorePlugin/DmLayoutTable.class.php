<?php


class DmLayoutTable extends PluginDmLayoutTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmLayout');
    }
}