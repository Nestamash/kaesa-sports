<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>


    <link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
    <script src="sweetalert/dist/sweetalert.min.js"></script>

</head>


<body>
<a href="#" onclick="JSconfirm()">Redirect me to home page</a>

<script type="text/javascript">
    function JSconfirm(){

        swal({   title: "Your account will be deleted permanently!",

                text: "Are you sure to proceed?",

                type: "warning",

                showCancelButton: true,

                confirmButtonColor: "#DD6B55",

                confirmButtonText: "Yes, Remove My Account!",

                cancelButtonText: "No, I am not sure!",

                closeOnConfirm: false,

                closeOnCancel: false },

            function(isConfirm){

                if (isConfirm)

                {

                    window.location = "http://localhost/kaesa/login/?p=pP10002/";
                }


                else {

                    swal("Hurray", "Account is not removed!", "error");

                } });

    }
</script>




</body>


</html>