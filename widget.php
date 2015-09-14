<!DOCTYPE html>
<html>
<head>
    <title>$appSettings.getTitle() Widget</title>
    <link href="http://current.bootstrapcdn.com/bootstrap-v204/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://current.bootstrapcdn.com/bootstrap-v204/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://sslstatic.wix.com/services/js-sdk/1.16.4/js/Wix.js"></script>
</head>

<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="hero-unit" id="title">
        </div>
    </div>

##    instance-details

    <div class="container-fluid thumbnail"
         style="margin-bottom:20px; padding:20px; box-shadow:#ccc 0 0 15px">
        <div class="span4">
            <h6>Instance Parameters</h6>
            <hr/>
            <div class="row-fluid">
                <div class="pull-left">instanceId</div>
                <div class="pull-right" id="instanceId"></div>
            </div>
            <div class="row-fluid">
                <div class="pull-left">signDate</div>
                <div class="pull-right" id="signDate"></div>
            </div>
            <div class="row-fluid">
                <div class="pull-left">uid</div>
                <div class="pull-right" id="uid"></div>
            </div>
            <div class="row-fluid">
                <div class="pull-left">permissions</div>
                <div class="pull-right" id="permissions"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        var settings = { styling: {} };
        $(document).ready(function() {
            init();
        })

        function init() {
            $('#instanceId').html(Wix.Utils.getInstanceId());
            $('#uid').html(Wix.Utils.getUid());
            $('#permissions').html(Wix.Utils.getPermissions());
            $('#signDate').html(Wix.Utils.getSignDate());

            settings.styling.color = settings.styling.color || "LightGreen";
            settings.title = settings.title || "My title";
            $('#title').html('<h2>'+settings.title+'</h2>');
            $('#title').css('background-color', settings.styling.color);
        }

    </script>

</div>

</body>
</html>
