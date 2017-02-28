{% block content %}
  <h1>This is my custom page template.</h1>
{% endblock %}



{% extends "page.html.twig" %}
{#
/**
 * @file
 * Theme override for frontpage.
 */
#}
{% block content %}
  <h1>This is my custom FRONT PAGE template.</h1>
{% endblock %}
