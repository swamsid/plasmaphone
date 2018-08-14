<!-- Jquery Core Js -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('assets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('assets/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('assets/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('assets/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('assets/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('assets/plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/js/admin.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('assets/js/demo.js')}}"></script>

    <!-- Plugin -->
    <script src="{{ asset ('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{ asset ('assets/js-cookie/js.cookie.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('assets/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <script type="text/javascript">

        //Setting Datatable
        $.extend( $.fn.dataTable.defaults, {
              // "responsive":true,

                "pageLength": 10,
                "lengthMenu": [[10, 20, 50, - 1], [10, 20, 50, "All"]],
                "language": {
                "searchPlaceholder": "Cari data",
                "emptyTable": "Tidak ada data",
                "sInfo": "Menampilkan _START_ - _END_ Dari _TOTAL_ Data",
                "sSearch": 'Cari',
                "sLengthMenu": "Menampilkan &nbsp; _MENU_ &nbsp; Data",
                "infoEmpty": "",
                "paginate": {
                                "previous": "Sebelumnya",
                                "next": "Selanjutnya",
                            }
                }
                

            } );

        // DataTables
        $('.dataTable').dataTable();

        // Get Cookie
        var sidebar = Cookies.get('sidebar_plasmaphone');

        // Cookie Sidebar Exists
        if (sidebar){
            $('body').addClass(sidebar);

            if (sidebar=='theme-red') 
            {
              $('li[data-theme="red"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#F44336');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #F44336');

              $('.info-container').css('background', 'rgba(244, 67, 54, 0.2)');
            }
            if (sidebar=='theme-pink') 
            {
              $('li[data-theme="pink"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#E91E63');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #E91E63');

              $('.info-container').css('background', 'rgba(233, 30, 99, 0.2)');
            }
            if (sidebar=='theme-purple') 
            {
              $('li[data-theme="purple"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#9C27B0');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #9C27B0');

              $('.info-container').css('background', 'rgba(156, 39, 176, 0.2)');
            }

            if (sidebar=='theme-deep-purple') 
            {
              $('li[data-theme="deep-purple"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#673AB7');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #673AB7');

              $('.info-container').css('background', 'rgba(103, 58, 183, 0.2)');
            }

            if (sidebar=='theme-indigo') 
            {
              $('li[data-theme="indigo"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#3F51B5');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #3F51B5');

              $('.info-container').css('background', 'rgba(63, 81, 181, 0.2)');
            }

            if (sidebar=='theme-blue') 
            {
              $('li[data-theme="blue"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#2196F3');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #2196F3');

              $('.info-container').css('background', 'rgba(33, 150, 243, 0.2)');
            }

            if (sidebar=='theme-light-blue') 
            {
              $('li[data-theme="light-blue"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#03A9F4');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #03A9F4');

              $('.info-container').css('background', 'rgba(3, 169, 244, 0.2)');
            }

            if (sidebar=='theme-cyan') 
            {
              $('li[data-theme="cyan"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#00BCD4');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #00BCD4');

              $('.info-container').css('background', 'rgba(0, 188, 212, 0.2)');
            }

            if (sidebar=='theme-teal') 
            {
              $('li[data-theme="teal"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#009688');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #009688');

              $('.info-container').css('background', 'rgba(0, 150, 136, 0.2)');
            }

            if (sidebar=='theme-green') 
            {
              $('li[data-theme="green"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#4CAF50');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #4CAF50');

              $('.info-container').css('background', 'rgba(76, 175, 80, 0.2)');
            }

            if (sidebar=='theme-light-green') 
            {
              $('li[data-theme="light-green"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#8BC34A');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #8BC34A');

              $('.info-container').css('background', 'rgba(139, 195, 74, 0.2)');
            }

            if (sidebar=='theme-lime') 
            {
              $('li[data-theme="lime"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#CDDC39');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #CDDC39');

              $('.info-container').css('background', 'rgba(205, 220, 57, 0.2)');
            }

            if (sidebar=='theme-yellow') 
            {
              $('li[data-theme="yellow"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#FFEB3B');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FFEB3B');

              $('.info-container').css('background', 'rgba(255, 232, 33, 0.2)');
            }

            if (sidebar=='theme-amber') 
            {
              $('li[data-theme="amber"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#FFC107');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FFC107');

              $('.info-container').css('background', 'rgba(255, 193, 7, 0.2)');
            }

            if (sidebar=='theme-orange') 
            {
              $('li[data-theme="orange"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#FF9800');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FF9800');

              $('.info-container').css('background', 'rgba(255, 152, 0, 0.2)');
            }

            if (sidebar=='theme-deep-orange') 
            {
              $('li[data-theme="deep-orange"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#FF5722');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FF5722');

              $('.info-container').css('background', 'rgba(255, 87, 34, 0.2)');
            }

            if (sidebar=='theme-brown') 
            {
              $('li[data-theme="brown"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#795548');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #795548');

              $('.info-container').css('background', 'rgba(121, 85, 72, 0.2)');
            }

            if (sidebar=='theme-grey') 
            {
              $('li[data-theme="grey"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#9E9E9E');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #9E9E9E');

              $('.info-container').css('background', 'rgba(158, 158, 158, 0.2)');
            }

            if (sidebar=='theme-blue-grey') 
            {
              $('li[data-theme="blue-grey"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#607D8B');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #607D8B');

              $('.info-container').css('background', 'rgba(96, 125, 139, 0.2)');
            }

            if (sidebar=='theme-black') 
            {
              $('li[data-theme="black"]').addClass('active');
              $('.head-button .card .body .text-center.active a').css('color', '#000');
              $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #000');

              $('.info-container').css('background', 'rgba(0, 0, 0, 0.2)');
            }

        }
        // Cookie Sidebar Doesn't Exist
        else {
            $('body').addClass('theme-red');
              $('li[data-theme="red"]').addClass('active');

        }

        // Sidebar Option Cookie
        $('li[data-theme="red"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-red',{ expires : 365});
            Cookies.set('color_plasmaphone', 'red',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#F44336');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #F44336');

            $('.info-container').css('background', 'rgba(244, 67, 54, 0.2)');
        });
        $('li[data-theme="pink"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-pink',{ expires : 365});
            Cookies.set('color_plasmaphone', 'pink',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#E91E63');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #E91E63');

            $('.info-container').css('background', 'rgba(233, 30, 99, 0.2)');

        });
        $('li[data-theme="purple"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-purple',{ expires : 365});
            Cookies.set('color_plasmaphone', 'purple',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#9C27B0');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #9C27B0');

            $('.info-container').css('background', 'rgba(156, 39, 176, 0.2)');

        });
        $('li[data-theme="deep-purple"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-deep-purple',{ expires : 365});
            Cookies.set('color_plasmaphone', 'deep-purple',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#673AB7');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #673AB7');

            $('.info-container').css('background', 'rgba(103, 58, 183, 0.2)');

        });
        $('li[data-theme="indigo"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-indigo',{ expires : 365});
            Cookies.set('color_plasmaphone', 'indigo',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#3F51B5');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #3F51B5');

            $('.info-container').css('background', 'rgba(63, 81, 181, 0.2)');

        });
        $('li[data-theme="blue"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-blue',{ expires : 365});
            Cookies.set('color_plasmaphone', 'blue',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#2196F3');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #2196F3');

            $('.info-container').css('background', 'rgba(33, 150, 243, 0.2)');

        });
        $('li[data-theme="light-blue"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-light-blue',{ expires : 365});
            Cookies.set('color_plasmaphone', 'light-blue',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#03A9F4');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #03A9F4');

            $('.info-container').css('background', 'rgba(3, 169, 244, 0.2)');

        });
        $('li[data-theme="cyan"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-cyan',{ expires : 365});
            Cookies.set('color_plasmaphone', 'cyan',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#00BCD4');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #00BCD4');

            $('.info-container').css('background', 'rgba(0, 188, 212, 0.2)');

        });
        $('li[data-theme="teal"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-teal',{ expires : 365});
            Cookies.set('color_plasmaphone', 'teal',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#009688');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #009688');

            $('.info-container').css('background', 'rgba(0, 150, 136, 0.2)');
        });
        $('li[data-theme="green"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-green',{ expires : 365});
            Cookies.set('color_plasmaphone', 'green',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#4CAF50');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #4CAF50');

            $('.info-container').css('background', 'rgba(76, 175, 80, 0.2)');
        });
        $('li[data-theme="light-green"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-light-green',{ expires : 365});
            Cookies.set('color_plasmaphone', 'light-green',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#8BC34A');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #8BC34A');

            $('.info-container').css('background', 'rgba(139, 195, 74, 0.2)');
        });
        $('li[data-theme="lime"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-lime',{ expires : 365});
            Cookies.set('color_plasmaphone', 'lime',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#CDDC39');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #CDDC39');

            $('.info-container').css('background', 'rgba(205, 220, 57, 0.2)');
        });
        $('li[data-theme="yellow"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-yellow',{ expires : 365});
            Cookies.set('color_plasmaphone', 'yellow',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#FFEB3B');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FFEB3B');

            $('.info-container').css('background', 'rgba(255, 232, 33, 0.2)');
        });
        $('li[data-theme="amber"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-amber',{ expires : 365});
            Cookies.set('color_plasmaphone', 'amber',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#FFC107');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FFC107');

            $('.info-container').css('background', 'rgba(255, 193, 7, 0.2)');
        });
        $('li[data-theme="orange"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-orange',{ expires : 365});
            Cookies.set('color_plasmaphone', 'orange',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#FF9800');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FF9800');

            $('.info-container').css('background', 'rgba(255, 152, 0, 0.2)');
        });
        $('li[data-theme="deep-orange"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-deep-orange',{ expires : 365});
            Cookies.set('color_plasmaphone', 'deep-orange',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#FF5722');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #FF5722');

            $('.info-container').css('background', 'rgba(255, 87, 34, 0.2)');
        });
        $('li[data-theme="brown"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-brown',{ expires : 365});
            Cookies.set('color_plasmaphone', 'brown',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#795548');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #795548');

            $('.info-container').css('background', 'rgba(121, 85, 72, 0.2)');
        });
        $('li[data-theme="grey"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-grey',{ expires : 365});
            Cookies.set('color_plasmaphone', 'grey',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#9E9E9E');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #9E9E9E');

            $('.info-container').css('background', 'rgba(158, 158, 158, 0.2)');
        });
        $('li[data-theme="blue-grey"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-blue-grey',{ expires : 365});
            Cookies.set('color_plasmaphone', 'blue-grey',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#607D8B');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #607D8B');

            $('.info-container').css('background', 'rgba(96, 125, 139, 0.2)');
        });
        $('li[data-theme="black"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-black',{ expires : 365});
            Cookies.set('color_plasmaphone', 'black',{ expires : 365});

            $('.head-button .card .body .text-center.active a').css('color', '#000');
            $('.head-button .card .body .text-center.active').css('border-bottom', '2px solid #000');

            $('.info-container').css('background', 'rgba(0, 0, 0, 0.2)');
        });

</script>

<!-- Script Modal, Breadcrumbs, table thead, dll Change Color -->
<script type="text/javascript">
function random_item(color_array)
{
  
    return color_array[Math.floor(Math.random()*color_array.length)];
     
}

$color_array = [
"red",
"pink",
"purple",
"deep-purple",
"indigo",
"blue",
"light-blue",
"cyan",
"teal",
"green",
"light-green",
"lime",
"yellow",
"amber",
"orange",
"deep-orange",
"brown",
"grey",
"blue-grey",
"black",
""
];

$color_array_st = [
"red",
"pink",
"purple",
"deep-purple",
"indigo",
"blue",
"light-blue",
"cyan",
"teal",
"green",
"light-green",
"lime",
"yellow",
"amber",
"orange",
"deep-orange",
"brown",
"grey",
"blue-grey",
"black"
];

$color_plasmaphone = Cookies.get('color_plasmaphone');


if($color_plasmaphone){
    $('button[data-toggle="modal"], a[data-toggle="modal"]').attr('data-color', random_item($color_array));

    $('.breadcrumb').removeAttr('class').addClass('breadcrumb breadcrumb-bg-'+ $color_plasmaphone);

    
    $('.table:not(.no-random-color) thead').addClass('bg-'+ $color_plasmaphone);
        
    
} else {
    $('.breadcrumb').removeAttr('class').addClass('breadcrumb breadcrumb-bg-red');

    
    $('.table:not(.no-random-color) thead').addClass('bg-red');
    
}

    $('button[data-toggle="modal"], a[data-toggle="modal"]').click(function(){
        $(this).attr('data-color', random_item($color_array));
        $('.modal-content').removeAttr('class').addClass('modal-content modal-col-' + random_item($color_array));
    })
</script>