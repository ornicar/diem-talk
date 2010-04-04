<?php


class DmTalkRoomTable extends PluginDmTalkRoomTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmTalkRoom');
    }
}