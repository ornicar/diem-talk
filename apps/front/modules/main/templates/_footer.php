<?php

echo _tag('div.clearfix',

  _tag('div.navigation',
  
    _tag('nav.footer_menu',
      _link('http://diem-project.org')->text('Diem CMF CMS for symfony 1.4 and jQuery 1.3')
    )
  ).

  _tag('div.community',
  
    _tag('nav.footer_menu',
      _link('http://twitter.com/diem_project')->text(
        _media('twitter.png')->size(24, 24).
        __('Follow on twitter')
      ).'<br />'.
      _link('http://diem-project.org/blog/rss')->text(
        _media('rss24.png')->size(24, 24).
        __('Blog feed')
      ).'<br />'.
      _link('http://diem-project.org/plugins/rss')->text(
        _media('rss24.png')->size(24, 24).
        __('Plugins feed')
      ).'<br />'.
      _link('http://diem-project.org/snippets/rss')->text(
        _media('rss24.png')->size(24, 24).
        __('Snippets feed')
      )
    )
  ).
  
  _tag('nav.more_links',
    _tag('p', 'The Diem project.<br />Powered by Diem '.DIEM_VERSION).
    _link('http://diem-project.org/tour/license')->text('License').' | '.
    _link('http://diem-project.org/tour/about')->text('About').' | '.
    _link('http://diem-project.org/contact')->text('Contact').'<br />'.
    _link('http://validator.w3.org/check?uri='.$sf_request->getUri())
    ->text(_media('w3c-html5.png'))
    ->title('Site valid HTML 5').
    _link('http://diem-project.org/')
    ->text(_media('logo24s.png')->set('.ml5'))
    ->title('Site powered by Diem 5.0').
    _link('http://en.wikipedia.org/wiki/Open_source_software')
    ->text(_media('bio-software.png')->set('.ml5'))
    ->title('Biological site done with open source software')
  )
);