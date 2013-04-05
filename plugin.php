<?php

class KokenFotomoto extends KokenPlugin {

    function __construct()
    {
        $this->require_setup = true;
        $this->register_hook('before_closing_body', 'render');
    }

    function render()
    {
        echo <<<OUT
<script type="text/javascript" src="http://widget.fotomoto.com/stores/script/{$this->data->store_id}.js"></script>
<noscript>If Javascript is disabled in your browser, to place orders please visit the page where I <a href=' http://my.fotomoto.com/store/{$this->data->store_id}'>sell my photos</a>, powered by <a href='http://my.fotomoto.com'>Fotomoto</a>.</noscript>
OUT;

    }
}