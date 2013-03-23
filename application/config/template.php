<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
$template['active_template'] = 'default';
$template['default']['template'] = 'template.php';
$template['default']['regions'] = array(
   'title',
   'title_desc',
   'navigation',
   'menu',
   'sidebar',
   'header',
   'content',
   'footer',
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;
