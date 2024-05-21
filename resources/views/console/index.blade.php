
<!DOCTYPE HTML>
<html>
    <body>
        <div id="DIV_CONSOLE_SWF" style="height:100%">
            Flash non supporté
        </div>
        <script src="{{ asset('js/swf/swfobject.js') }}"></script>
        <script type="text/javascript">
            swfobject.embedSWF("console.swf?CACHE_VERSION={{ now()->timestamp }}", "DIV_CONSOLE_SWF", "100%", "100%", "11.0", "", {
                    wmode: "gpu",
                    CACHE_VERSION: {{ now()->timestamp }},
                }, {
                    name: "DIV_CONSOLE_SWF"
                }
            )
        </script>
        <style>
            html {
                height: 100%;
                overflow: hidden;
            }
            body {
                height: 100%;
                margin: 0;
            }
        </style>
    </body>
</html>
