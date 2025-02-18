<meta charset="utf-8" />
<title>Sogo Hotel-control</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="Preview page of Metronic Admin Theme #1 for bootstrap inputs, input groups, custom checkboxes and radio controls and more" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
@if(app()->getLocale() == 'ar')
<link href="{{asset('control/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{asset('control/assets/global/css/components-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{asset('control/assets/global/css/plugins-rtl.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{{asset('control/assets/layouts/layout/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/layouts/layout/css/themes/darkblue-rtl.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{asset('control/assets/layouts/layout/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css" />
@elseif(app()->getLocale() == 'en')
<link href="{{asset('control/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{asset('control/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{asset('control/assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
@endif
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
<link href="{{asset('control/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('control/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />


<link href="{{asset('control/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />

<style>
    span.error {
        color: red;
    }
</style>

@if(app()->getLocale() == 'ar')
<style>
    .fa-search,
    .fa-plus,
    .fa-book,
    .fa-edit,
    .fa-list {
        margin-left: 5px;
    }
</style>
@else
<style>
    .fa-search,
    .fa-plus,
    .fa-book,
    .fa-edit,
    .fa-list {
        margin-right: 5px;
    }

    span.error {
        color: red;
    }
</style>
@endif