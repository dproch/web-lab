{% extends "layout.tpl.php" %}
{% block content %}
<h1>Изображения</h1>
<div class="row">
    <div class="col-lg-12">
        <a href="index.php?q=images/add" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Добавить</a>
    </div>
</div>
<div class="row">
    {% for image in images %}
    <figure class="col-lg-3"> 
        <a href="{{baseUrl}}images/middle/{{image.filename}}"><img class ="img-responsive" src="{{baseUrl}}images/small/{{image.filename}}" alt="{{image.alt}}" title="{{image.title}}"/></a>
        <figcaption>
            {{image.title}}
        </figcaption>
    </figure> 
    {% endfor %}
</div>
{% endblock %}