$node = $variables['elements']['#node'];
if ($node->getType() == 'article' && !$node->isPublished()) {
  $suggestions[] = 'node__' . $node->getType() . '__' . $variables['elements']['#view_mode'] . '__' . 'unpublished';
}
