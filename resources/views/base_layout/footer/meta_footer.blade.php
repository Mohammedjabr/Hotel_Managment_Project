              <!-- BEGIN CORE PLUGINS -->
              <script src="{{asset('control/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
              <!-- END CORE PLUGINS -->
              <!-- BEGIN THEME GLOBAL SCRIPTS -->
              <script src="{{asset('control/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
              <!-- END THEME GLOBAL SCRIPTS -->
              <script src="{{asset('control/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>

              <script src="{{asset('control/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>

              <!-- BEGIN THEME LAYOUT SCRIPTS -->
              <script src="{{asset('control/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
              <script src="{{asset('control/assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>

              <!-- END THEME LAYOUT SCRIPTS -->
              <script src="{{ asset('js/toastr.min.js') }}"></script>

              <script>
                      @if(Session::has("success"))
                      toastr.success("{{Session::get('success')}}")
                      @endif

                      @if(Session::has("info"))
                      toastr.info("{{Session::get('info')}}")
                      @endif
              </script>