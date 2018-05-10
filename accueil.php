<?php

session_start();



if(!isset($_SESSION['login'])){

	header('Location: index.html'); 

}

?>



<!DOCTYPE html>

<html>

<head>

	<title>Tableau de bord</title>

	<meta charset="utf-8">



	<!-- BOOTSTRAP -->

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="css/bootstrap.min.js"></script>



	<link rel="stylesheet" type="text/css" href="css/styles.css">

<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

	<script src="js/jquery.js"></script>



	<link rel="stylesheet" type="text/css" href="css/styles.css">



	<meta name="viewport" content="width=device-width, initial-scale=1">



	<!-- angularjs -->

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

	<!-- ngRoute -->

	<script type="text/javascript" src="https://code.angularjs.org/1.6.9/angular-route.min.js"></script>



</head>

<body ng-app="monapp">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">

                <a class="nav-link" href="#">Accueil</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="#!/ffom">FFOM</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="#!/cloud">Cloud</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="#!/gantt">Gantt</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="#!/divers">Idées diverses</a>

            </li>

        </ul>

    </div>

    <div class="mx-auto order-0">

        <a class="navbar-brand mx-auto" href="#">Barre de navigation</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">

            <span class="navbar-toggler-icon"></span>

        </button>

    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">

        <ul class="navbar-nav ml-auto">

             <li class="nav-item">

                <a class="nav-link" href="#!/profil">Profil</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="deconnexion.php" style="color: yellow">Deconnexion</a>
            </li>
        </ul>
    </div>
</nav>

<section class="container monconteneur">

<div ng-view></div>

</section>
<footer>
	<b>©Copyright : 2018 - Developpeur : Gilles</b>
</footer>
<script>

/*NAVBAR*/

$(function(){

    $('li:nth-child(1)').click(function(){

        $('li').removeClass('active');

        $('li:nth-child(1)').addClass('active');

    });

    $('li:nth-child(2)').click(function(){

        $('li').removeClass('active');

        $('li:nth-child(2)').addClass('active');

    });

    $('li:nth-child(3)').click(function(){

        $('li').removeClass('active');

        $('li:nth-child(3)').addClass('active');

    });

    $('li:nth-child(4)').click(function(){

        $('li').removeClass('active');

        $('li:nth-child(4)').addClass('active');

    });

    $('li:nth-child(5)').click(function(){

        $('li').removeClass('active');

        $('li:nth-child(5)').addClass('active');

    });

    $('li:nth-child(6)').click(function(){

        $('li').removeClass('active');

        $('li:nth-child(6)').addClass('active');

    });

});/*jquery*/

/*NAVBAR*/





var app = angular.module('monapp',['ngRoute']);



app.controller('accueilCtrl', function($scope, $http){

 

    $http.get('php/ffom-accueil.php').then(function(result){

        $scope.ffoms = result.data;

    });

    $http.get('php/gantt-accueil.php').then(function(result){

        $scope.gantts = result.data;

    });

    $http.get('php/cloud-accueil.php').then(function(result){

        $scope.clouds = result.data;

    });

    $http.get('php/divers-accueil.php').then(function(result){

        $scope.idees = result.data;

    });

});/*controlleur*/



app.controller('ffomCtrl', function($scope){

  $(function(){



    getForce();

    getFaiblesse();

    getOpportunite();

    getMenace();



    $('#form-force').submit(function(){



        var force = $('#force').val();



        

        $.post('php/ffom.php',

        {

            force:force

        },

        function(data){

            $('#force').val("");

            getForce();

        });



        return false;



    });

    $('#form-faiblesse').submit(function(){



        var faiblesse = $('#faiblesse').val();



        

        $.post('php/ffom.php',

        {

            faiblesse:faiblesse

        },

        function(data){

            $('#faiblesse').val("");

            getFaiblesse();

        });

        return false;



    });

    $('#form-opportunite').submit(function(){



        var opportunite = $('#opportunite').val();



        $.post('php/ffom.php',

        {

            opportunite:opportunite

        },

        function(data){

            $('#opportunite').val("");

            getOpportunite();

        });

        return false;



    });

    $('#form-menace').submit(function(){



        var menace = $('#menace').val();



        $.post('php/ffom.php',

        {

            menace:menace

        },

        function(data){

            $('#menace').val("");

            getMenace();

        });

        return false;



    });





    function getForce(){



        $.post('php/ffom-force.php',function(data){



            $('#getForce').html(data)

            

        });

    }

    function getFaiblesse(){



        $.post('php/ffom-faiblesse.php',function(data){



            $('#getFaiblesse').html(data)

            

        });

    }

    function getOpportunite(){



        $.post('php/ffom-opportunite.php',function(data){



            $('#getOpportunite').html(data)

            

        });

    }

    function getMenace(){



        $.post('php/ffom-menace.php',function(data){



            $('#getMenace').html(data)

            

        });

    }



    setInterval(getForce,1000);

    setInterval(getFaiblesse,1000);

    setInterval(getOpportunite,1000);

    setInterval(getMenace,1000);





  });/*jquery*/



});/*controlleur*/





app.controller('cloudCtrl',function($scope){



    $(function(){



        getUpload();

        

        function getUpload(){

            $.post('php/cloud-get.php',function(data){

                $('#listupload').html(data);

            });

        }



    });

    setInterval(getUpload,1000);



});





app.controller('ganttCtrl', function($scope){

    $(function(){

        getGantt();



        $('#form-gantt').submit(function(){



            var activite    = $('#activite').val();

            var debut       = $('#debut').val();

            var fin         = $('#fin').val();

            var description = $('#description').val();



            $.post('php/gantt.php',{

                activite    :activite,

                debut       :debut,

                fin         :fin,

                description :description

            },function(data){

                $('#activite').val('');

                $('#debut').val('');

                $('#fin').val('');

                $('#description').val('');

                getGantt();

            });

            return false;

        });



        function getGantt(){

            $.post('php/gantt-get.php',function(result){

                $('#getGantt').html(result);

            });

        }

        setInterval(getGantt,1000);







    });/*jquery*/

});/*controlleur*/



app.controller('diversCtrl', function($scope){

    $(function(){



        getDivers();



        /*$('#form-divers').submit(function(){



            var idee    = $('#idee').val();

            var description = $('#description').val();



            $.post('php/divers.php',{

                idee    :idee,

                description :description

            },function(data){

                $('#idee').val('');

                $('#description').val('');

                getDivers();

            });

            return false;

        });*/



        function getDivers(){

            $.post('php/divers-get.php',function(result){

                $('#getDivers').html(result);

            });

        }

    });/*jquery*/

});/*controlleur*/
app.controller('profilCtrl',function($scope){

});/*controlleur*/



app.config(function($routeProvider){

	$routeProvider

		.when('/',

            {

                templateUrl: 'templates/accueil.html',

                controller:'accueilCtrl'

            })

		.when('/ffom',

            {

                templateUrl: 'templates/ffom.html',

                controller: 'ffomCtrl'

            })

        .when('/cloud',

            {

                templateUrl: 'templates/cloud.html',

                controller: 'cloudCtrl'

            })

        .when('/gantt',

            {

                templateUrl: 'templates/gantt.html',

                controller: 'ganttCtrl'

            })

        .when('/divers',
            {
                templateUrl: 'templates/divers.html',
                controller: 'diversCtrl'

            })
        .when('/profil',
            {
                templateUrl: 'templates/profil.html',
                controller: 'profilCtrl'
            })
        .otherwise({redirectTo:'/'})

});



</script>











</body>

</html>