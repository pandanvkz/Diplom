<html>

<head>
    <meta charset='utf-8'>
    <link href='http://www.jqueryscript.net/css/jquerysctipttop.css' rel='stylesheet' type='text/css'>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js'></script>
    <script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
    <link href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css' />
    <link href='http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="main.css" type="text/css" rel="stylesheet">

    <title>Верстка</title>
</head>

<script type='text/javascript'>
    $(function () {

        $('.drag').draggable({
            helper: 'clone'
        });
        $('.leftcase').droppable({
            activeClass: 'active',
            hoverClass: 'hover',
            drop: function (event, ui) {
                var block = ui.draggable;
                $(this).append(block);
            }
        });
        $('.rightcase').droppable({
            activeClass: 'active',
            hoverClass: 'hover',
            drop: function (event, ui) {
                var block = ui.draggable;
                $(this).append(block);
            }
        });

    });

    $(function () {

        $('.dragnote').draggable({
            helper: 'clone'
        });
        $('.notecase').droppable({
            activeClass: 'active',
            hoverClass: 'hover',
            drop: function (event, ui) {
                var block = ui.draggable;
                $(this).append(block);
            }
        });
    });

    $(function () {
        $('#leftcase').sortable();
    });
    $(function () {
        $('#rightcase').sortable();
    });
</script>




<body>
<div class="main-area">

    <div class="area-block">


        <div class="notecase">
        </div>

        <div class="parentcase">
            <div class="rightcase"></div>
            <div class="leftcase"></div>
        </div>


    </div>
    <div class="listwidgets">

        <div id="1" class="drag redrec ui-widget ui-corner-all ui-state-error">
            <div class="divwidheader">
                <div class="divheaderwid">
                    <a href="http://tpu.ru">новости</a>
                </div>

                <div class="divbuttonwid">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </div>
            </div>
        </div>

        <div id="2" class="drag bluerec ui-widget ui-corner-all ui-state-error">
            <div class="divwidheader">
                <div class="divheaderwid">
                    <a href="http://aics.ru">новости</a>
                </div>
                <div class="divbuttonwid">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </div>
            </div>
        </div>

        <div id="3" class="dragnote yellowrec ui-widget ui-corner-all ui-state-error">
            <div class="divwidheader">
                <div class="longdivheaderwid">
                    <h4>Заметка1</h4>
                </div>
                <div class="longdivbuttonwid">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="lyphicon glyphicon-remove"></span>
                    </button>
                </div>
            </div>
        </div>

        <div id="4" class="dragnote yellowrec ui-widget ui-corner-all ui-state-error">
            <div class="divwidheader">
                <div class="longdivheaderwid">
                    <h4>Заметка2</h4>
                </div>
                <div class="longdivbuttonwid">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
</body>

</html>
