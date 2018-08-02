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
            }
            if (sidebar=='theme-pink') 
            {
              $('li[data-theme="pink"]').addClass('active');
            }
            if (sidebar=='theme-purple') 
            {
              $('li[data-theme="purple"]').addClass('active');
            }

            if (sidebar=='theme-deep-purple') 
            {
              $('li[data-theme="deep-purple"]').addClass('active');
            }

            if (sidebar=='theme-indigo') 
            {
              $('li[data-theme="indigo"]').addClass('active');
            }

            if (sidebar=='theme-blue') 
            {
              $('li[data-theme="blue"]').addClass('active');
            }

            if (sidebar=='theme-light-blue') 
            {
              $('li[data-theme="light-blue"]').addClass('active');
            }

            if (sidebar=='theme-cyan') 
            {
              $('li[data-theme="cyan"]').addClass('active');
            }

            if (sidebar=='theme-teal') 
            {
              $('li[data-theme="teal"]').addClass('active');
            }

            if (sidebar=='theme-green') 
            {
              $('li[data-theme="green"]').addClass('active');
            }

            if (sidebar=='theme-light-green') 
            {
              $('li[data-theme="light-green"]').addClass('active');
            }

            if (sidebar=='theme-lime') 
            {
              $('li[data-theme="lime"]').addClass('active');
            }

            if (sidebar=='theme-yellow') 
            {
              $('li[data-theme="yellow"]').addClass('active');
            }

            if (sidebar=='theme-amber') 
            {
              $('li[data-theme="amber"]').addClass('active');
            }

            if (sidebar=='theme-orange') 
            {
              $('li[data-theme="orange"]').addClass('active');
            }

            if (sidebar=='theme-deep-orange') 
            {
              $('li[data-theme="deep-orange"]').addClass('active');
            }

            if (sidebar=='theme-brown') 
            {
              $('li[data-theme="brown"]').addClass('active');
            }

            if (sidebar=='theme-grey') 
            {
              $('li[data-theme="grey"]').addClass('active');
            }

            if (sidebar=='theme-blue-grey') 
            {
              $('li[data-theme="blue-grey"]').addClass('active');
            }

            if (sidebar=='theme-black') 
            {
              $('li[data-theme="black"]').addClass('active');
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

        });
        $('li[data-theme="pink"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-pink',{ expires : 365});
            Cookies.set('color_plasmaphone', 'pink',{ expires : 365});

        });
        $('li[data-theme="purple"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-purple',{ expires : 365});
            Cookies.set('color_plasmaphone', 'purple',{ expires : 365});

        });
        $('li[data-theme="deep-purple"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-deep-purple',{ expires : 365});
            Cookies.set('color_plasmaphone', 'deep-purple',{ expires : 365});

        });
        $('li[data-theme="indigo"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-indigo',{ expires : 365});
            Cookies.set('color_plasmaphone', 'indigo',{ expires : 365});

        });
        $('li[data-theme="blue"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-blue',{ expires : 365});
            Cookies.set('color_plasmaphone', 'blue',{ expires : 365});

        });
        $('li[data-theme="light-blue"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-light-blue',{ expires : 365});
            Cookies.set('color_plasmaphone', 'light-blue',{ expires : 365});

        });
        $('li[data-theme="cyan"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-cyan',{ expires : 365});
        });
        $('li[data-theme="teal"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-teal',{ expires : 365});
        });
        $('li[data-theme="green"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-green',{ expires : 365});
        });
        $('li[data-theme="light-green"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-light-green',{ expires : 365});
        });
        $('li[data-theme="lime"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-lime',{ expires : 365});
        });
        $('li[data-theme="yellow"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-yellow',{ expires : 365});
        });
        $('li[data-theme="amber"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-amber',{ expires : 365});
        });
        $('li[data-theme="orange"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-orange',{ expires : 365});
        });
        $('li[data-theme="deep-orange"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-deep-orange',{ expires : 365});
        });
        $('li[data-theme="brown"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-brown',{ expires : 365});
        });
        $('li[data-theme="grey"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-grey',{ expires : 365});
        });
        $('li[data-theme="blue-grey"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-blue-grey',{ expires : 365});
        });
        $('li[data-theme="black"]').on('click', function(){
            Cookies.set('sidebar_plasmaphone', 'theme-black',{ expires : 365});
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

$('.right-sidebar .demo-choose-skin li').on('click', function(){
    $('.breadcrumb').removeAttr('class').addClass('breadcrumb breadcrumb-bg-'+ $color_plasmaphone);

    if($('.table').hasClass('no-random-color') == false){
        $('.table thead').addClass('bg-'+ $color_plasmaphone);
    }

    // alert($color_plasmaphone);
});

$(document).ready(function(){
    $('button[data-toggle="modal"], a[data-toggle="modal"]').attr('data-color', random_item($color_array));

    $('.breadcrumb').removeAttr('class').addClass('breadcrumb breadcrumb-bg-'+ $color_plasmaphone);

    if($('.table').hasClass('no-random-color') == false){
        $('.table thead').addClass('bg-'+ $color_plasmaphone);
    }
    
    // $('.preloader .spinner-layer').addClass('pl-' + random_item($color_array_st));
    

});

    $('button[data-toggle="modal"], a[data-toggle="modal"]').click(function(){
        $(this).attr('data-color', random_item($color_array));
        $('.modal-content').removeAttr('class').addClass('modal-content modal-col-' + random_item($color_array));
    })
</script>