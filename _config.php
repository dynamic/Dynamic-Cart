<?php

global $project;
$project = 'cart';

// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");

MySQLDatabase::set_connection_charset('utf8');

// Set the site locale
i18n::set_locale('en_US');
i18n::set_date_format('MM.dd.YYYY');
i18n::set_time_format('HH:mm');

// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();

// Simple Theme
SSViewer::set_theme("simple");
HtmlEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');

// Share Icons
Object::add_extension('CartProduct', 'ShareExtension');

// Site Search
FulltextSearchable::enable();

// set Admin email
Email::setAdminEmail('info@dynamicdoes.com');

// debug
SS_Log::add_writer(new SS_LogEmailWriter('debug@dynamicdoes.com'), SS_Log::WARN, '<=');
Director::set_environment_type("dev");
