<?php

HtmlEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');

// Share Icons
//Object::add_extension('CartProduct', 'ShareExtension');

// Shopping Cart
MiniCart::set_business_email("info@dynamicdevelop.com");
MiniCart::set_currency_code("USD");
MiniCart::set_return_url("https://webbuilder.local:8888/page?success");
MiniCart::set_cancel_return_url("https://webbuilder.local:8888/page?cancel");