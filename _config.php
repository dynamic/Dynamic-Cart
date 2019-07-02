<?php

HtmlEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');

// Share Icons
if (class_exists('ShareExtension')) CartProduct::add_extension('ShareExtension');

