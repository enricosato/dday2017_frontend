$node = $variables['elements']['#node'];
if ($node->getType() == 'news' && !$node->isPublished()) {
  $suggestions[] = 'node__' . $node->getType() . '__' . $variables['elements']['#view_mode'] . '__' . 'unpublished';
}
