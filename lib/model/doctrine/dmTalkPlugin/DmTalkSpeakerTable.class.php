<?php


class DmTalkSpeakerTable extends PluginDmTalkSpeakerTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmTalkSpeaker');
    }
}