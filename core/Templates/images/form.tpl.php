{% extends "layout.tpl.php" %}

{% block js %}
<script src="{{baseUrl}}assets/uploadpreview/js/jquery.uploadpreview.min.js"></script>
<script src="{{baseUrl}}assets/vendor/jquery-validation/dist/jquery.validate.js"></script>
<script src="{{baseUrl}}assets/vendor/jquery-validation/dist/additional-methods.js"></script>
<script src="{{baseUrl}}assets/vendor/jquery-validation/dist/localization/messages_ru.js"></script>
<script>

$(document).ready(function () {
    $.uploadPreview({
        input_field: "#image-upload",
        preview_box: ".image-preview",
        label_field: ".image-label",
        label_default: "Выбрать", // Default: Choose File
        label_selected: "Изменить"  // Default: Change File
    });
    $("#images-form").validate();
});
</script>
{% endblock %}

{% block css %}
<link rel="stylesheet" href="{{baseUrl}}assets/uploadpreview/css/uploadpreview.css">
{% endblock %}

{% block content %}
<section>
    <header>
        <h1>Добавить изображение</h3>
    </header>
    <form method="POST" action="index.php?q=images/add" id="images-form" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="image-upload">Изображение</label>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="img-thumbnail">
                                <div class="image-preview ">
                                    <label for="image-upload" class="image-label">Выбрать</label>
                                    <input type="file" name="image" id="image-upload" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alt">Alt</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" rows=12 id="short_text" name="alt" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <div class="row">
                                <div class="col-lg-12">
                                     <input type="text"  class="form-control" rows=12 id="short_text" name="title" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="type">Тип(рзмеры)</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <select  class="form-control" rows=12 id="short_text" name="alt" required multiple="true">
                                        <option value="1">Тип 1</option>
                                        <option value="2">Тип 2</option>
                                        <option value="3">Тип 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>


        <hr/>
        <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>



    </form>
</section>


{% endblock %}

