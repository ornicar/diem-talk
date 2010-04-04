<?php

require_once dirname(__FILE__).'/require_diem.php';
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      'dmTalkPlugin'
    ));

    $this->setWebDir(sfConfig::get('sf_root_dir').'/public_html');
  }
  
}