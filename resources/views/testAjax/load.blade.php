<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style type="text/css">
    .preloading {
        overflow: hidden;
    }

    .preload-container {
        width: 100%;
        height: 100%;
        background: #ef6e7e;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: 99999999999;
        display: block;
        padding-right: 17px;
        overflow-x: hidden;
        overflow-y: auto;
        opacity: 0.5;
    }

    .preload-icon {
        font-size: 66px;
        color: #343a40;
        margin-top: 20%;
    }

    @-webkit-keyframes {
        from {
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotating {
        from {
            -ms-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        to {
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .rotating {
        -webkit-animation: rotating 1.5s linear infinite;
        -moz-animation: rotating 1.5s linear infinite;
        -ms-animation: rotating 1.5s linear infinite;
        -o-animation: rotating 1.5s linear infinite;
        animation: rotating 1.5s linear infinite;
    }
    </style>
</head>

<body class="preloading">
    <!-- Hiệu ứng load -->
    <!-- <div class="load">
	<img src="loader.gif">
</div> -->
    
    @foreach($users as $user)
    <p>{{$user->name}}</p>
    <p>{{$user->id}}</p>
    @endforeach
    <div id="preload" class="preload-container text-center">
        <span class="glyphicon glyphicon-repeat normal-right-spinner"></span>
    </div>
    <div class="content">

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>roleNmae</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->RoleName}}</td>

                </tr> @endforeach
            </tbody>
        </table>

        <p>Ullamco nonummy malesuada irure. Provident, occaecati! Facilis praesentium urna, iaculis euismod dolorem
            aliquip mattis. Dapibus viverra, felis mattis! Nihil dui, inventore! A omnis auctor, pellentesque varius
            vero adipisicing nulla facilisis dapibus non accusamus consectetuer. Autem ac praesentium. Sapiente wisi
            voluptates. Posuere, natus lacus interdum senectus senectus fermentum a, fringilla lacus? Doloremque
            facilisis sint curae! Accusantium veniam quis, risus dolorum, vero diamlorem porttitor auctor voluptatum
            elementum orci error unde volutpat, quasi consequat amet adipiscing cubilia at vestibulum tempora per
            hymenaeos beatae! Velit? Doloremque deserunt ab, quisquam magnam velit ipsam similique minim habitasse urna
            incididunt nostrud, quos totam eius quae adipisicing non.</p>

        <p>Tristique placerat aliqua nascetur ducimus repellat diamlorem cras cillum luctus! Aptent est iusto sunt,
            tenetur, eveniet. Montes similique, minima deserunt optio ad ab lacus! Mus, odit distinctio tempor magna
            maiores. Magna earum nostrum aliquam interdum impedit pellentesque montes nibh iste! Expedita imperdiet iste
            mi aptent dolorum quos sequi voluptate eum class curae quia sed? Ullamco sollicitudin! Vero, aptent cillum
            ratione! Dolorum semper dictum veritatis ratione porro eius pariatur excepteur hendrerit? Auctor rutrum.
            Nesciunt tempore aptent veniam, proin ullamco! Laoreet sagittis voluptatum, praesentium pellentesque unde!
            Ullamcorper pariatur minim, blandit incididunt fugit. Lacus dolorem wisi illum sapiente doloremque possimus
            esse urna accusamus.</p>

        <p>Nec nunc cum pariatur phasellus ab duis qui incididunt alias molestias commodi, nec quam neque, euismod,
            debitis consectetur error excepturi, malesuada! Provident, incidunt voluptate, hendrerit eius quas iste,
            tempore consectetur. Dolorum illo quasi. Neque, wisi? Ducimus numquam mattis venenatis laudantium? Eaque
            dictumst, magnam montes adipisci nihil eaque numquam? Exercitation quod sem possimus neque litora urna
            quibusdam, voluptatem. Animi gravida sagittis, tempore aliquip magnam duis eos! Diam, cubilia architecto
            dolorum incidunt metus commodi, ratione error nostrum pulvinar, platea sequi. Facilis volutpat! Quidem,
            dicta, eligendi, quos! Anim, felis diam tristique, volutpat ligula, vel, dolorum aspernatur eos, pariatur,
            debitis libero exercitationem aliquet. Lacus.</p>
    </div>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(window).on('load', function(event) {
        $('body').removeClass('preloading');
        // $('.load').delay(1000).fadeOut('fast');
        $('#preload').delay(1000).fadeOut('fast');
    });
    </script>
</body>

</html>