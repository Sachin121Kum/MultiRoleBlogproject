</div>

<script src="{{asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/main.js')}}"></script>


<script src="{{asset('backend/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
<script src="{{asset('backend/assets/js/widgets.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>

<script src="{{asset('backend/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('backend/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>
<script>
    $(document).ready(function (){
        (function ($) {
            $('#filter').keyup(function (){
                var rex = new RegExp($(this).val(), 'i');
                $('.searchable tr').hide();
                $('.searchable tr').filter(function () {
                    return rex.test($(this).text());
                }).show();
    
            })
        }(jQuery));
    });
    </script>


<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>



</body>

</html>
