<?php
$feature = $variables['node']->feature;

// eksc hack
if (strcmp($feature->type_id->name, 'QTL') == 0 ) {
  // don't load
}
else if (strcmp($feature->type_id->name, 'genetic_marker') == 0 ) {
  // don't load
}
else {
  include_once(drupal_get_path('module', 'tripal_feature') . '/theme/templates/tripal_feature_synonyms.tpl.php');
}
