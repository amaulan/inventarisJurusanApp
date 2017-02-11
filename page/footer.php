
    <!--const-->
    <script src="config/const.js"></script>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <!-- <script src="assets/js/pages/tables/jquery-datatable.js"></script> -->

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>
    <script>
        $(function(){
              var theme = localStorage.getItem('theme');
              var $body = $('body');
              $('.right-sidebar .demo-choose-skin li[data-theme=' + theme + ']').addClass('active');
    // var existTheme = $('.right-sidebar .demo-choose-skin li.active').data('theme');
    // $body.removeClass('theme-' + existTheme);
              $body.addClass('theme-' + theme);  

            $.ajax({
                headers : {
                    apikey : 'bbFj8HGTPHm8x5uMALCP71g6MsK9pw1EzVzRTpdN90eqcv7pIE',
                    token : "W547IWXmSjWYDMILIW8C7EZsf8eujEhHAdvldC10vu3VOPDJMEuQ5TiSvoHiPqWIJMOAFRqYTBLO7vpd2k9xsIN7gnBzFHSil9EeNj36eXykzHsNp27aafrok08oRVESR6IBuJwzhKszBG4gFHOyozVMFcEEjsIPtg2svDasB9Rv34eqxiFEPw6qOXH3FH02xZEULs33uVD3Ovo9s1Se3kaNSOCL7zsi4EFOxSoYaUI4eyTJE4L5NfOeGBvNSjST209s3AOX1j9cJTkG0jdarvewejLFBUWmmw8aJ8mSzm1mzJa3HNV5r9cdNQoMZq3IDBIVT8wHHeDNImXPtIaHR7OBZwUSM2Fd0N97qaSJcPaUbRNPJwbK0uMV5sYGbH648kTtk3aWh76DT2xjk5R4oQbkTURasWOGflsYqCUQFEdSin2Mn1vXUIs4oEhy2ztxQ7hYTj8okZKBufhAn2jHcsvBXAvYTKGVcnDPVyJwy7vVrjiqNlKv"
                },
                url : 'http://inventaris.dev/api/ruangan-barang',
                method : 'POST',
                data : {
                    username : 'admin',
                    password : 'admin'
                },
                success : function(data)
                {
                    console.log(data);
                }
            })

            var table = $('#dt').DataTable({
                "ajax": {
                    "url": "http://inventaris.dev/api/ruangan",
                    "type": "post",
                    "beforeSend" : function(xhr)
                    {
                        xhr.setRequestHeader('apikey',"bbFj8HGTPHm8x5uMALCP71g6MsK9pw1EzVzRTpdN90eqcv7pIE");
                        xhr.setRequestHeader('token',"W547IWXmSjWYDMILIW8C7EZsf8eujEhHAdvldC10vu3VOPDJMEuQ5TiSvoHiPqWIJMOAFRqYTBLO7vpd2k9xsIN7gnBzFHSil9EeNj36eXykzHsNp27aafrok08oRVESR6IBuJwzhKszBG4gFHOyozVMFcEEjsIPtg2svDasB9Rv34eqxiFEPw6qOXH3FH02xZEULs33uVD3Ovo9s1Se3kaNSOCL7zsi4EFOxSoYaUI4eyTJE4L5NfOeGBvNSjST209s3AOX1j9cJTkG0jdarvewejLFBUWmmw8aJ8mSzm1mzJa3HNV5r9cdNQoMZq3IDBIVT8wHHeDNImXPtIaHR7OBZwUSM2Fd0N97qaSJcPaUbRNPJwbK0uMV5sYGbH648kTtk3aWh76DT2xjk5R4oQbkTURasWOGflsYqCUQFEdSin2Mn1vXUIs4oEhy2ztxQ7hYTj8okZKBufhAn2jHcsvBXAvYTKGVcnDPVyJwy7vVrjiqNlKv");
                    }
                },
                "Processing": true,
                "ServerSide": true,
                "columns": 
                [
                    { 
                        "data": "id",
                        "render": function(data){
                            return '<h6>'+data+'</h6>';
                        }
                    },
                    {
                        "data": "ruangan_nama",
                        "render" : function(data){
                            return '<h6>'+data+'</h6>';
                        }
                    },{
                        "data" : "desc",
                        "render" : function(data){
                            return '<h6>'+data+'</h6>';
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
