<?php
// Main : Culture

echo £o('ul');
 
foreach(sfConfig::get('dm_i18n_cultures') as $culture)  
{  
  echo £('li',  
    £link('+/dmCore/selectCulture')->param('culture', $culture)->text(format_language($culture, $culture))  
  );  
}  
 
echo £c('ul');  