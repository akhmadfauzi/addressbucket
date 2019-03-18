<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('layout.navigation')
       @section('content')
           
       @show

       {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
       <script>
           document.addEventListener('DOMContentLoaded', function(){
            var actions = document.querySelectorAll('.btn-action');
            if (actions.length) {
                for (let i = 0; i < actions.length; i++) {
                    const el = actions[i];
                    el.addEventListener('click', actionOnClick );
                }
            } 

            
           });
           function actionOnClick(e){
                e.preventDefault();
                let target = e.target;
                let type = target.dataset.action;

                if(type === 'delete'){
                    if(confirm('Are you sure want to delete this record ?')){
                        // var form = document.querySelectorAll
                        // window.location.href = target.getAttribute('href');
                        target.form.submit();
                    }
                }
            }

            function toggleDialog(){
                var dialog = document.querySelector('.dialog');
                var overlayDialog = document.querySelector('.dialog-overlay');
                dialog.className += ' dialog-show';
                overlayDialog.style.display = 'block';
                overlayDialog.style.zIndex = 10000;
                document.body.style.overflow = 'hidden';
            }
       </script>
    </body>
</html>
