<?php


class DmTalkMessageTable extends PluginDmTalkMessageTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmTalkMessage');
    }
}