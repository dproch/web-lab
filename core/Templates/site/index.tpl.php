{% extends "layout.tpl.php" %}
{% block content %}
    <h3>Table Of Contents</h3>
    {{ parent() }}
    <div>
        <a href ='{{content}}'>{{content}}</a>
    </div>
    
{% endblock %}

