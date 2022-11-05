var app = angular.module('app', []);
app.controller('bodyController', function ($scope,$rootScope,$http) {
    // $scope.lang = localStorage.getItem('lang') ? localStorage.getItem('lang') : 'vi';

    $scope.init = function(){
        // $scope.url = 'http://localhost:9000/';
        $scope.url = 'https://phamvantuan.herokuapp.com/';
        $scope.lang = 'lang-en';
        $scope.detail_product = '';
        $scope.loadData();
        
    };

    // $scope.changeLang = function (_lang){
    //     localStorage.setItem('lang',_lang);
    //     $scope.lang = _lang;
    //     $scope.loadData();
    // }

    $scope.loadData = function(){
        $http.get("./assets/data/"+$scope.lang+".json").then(function (response) {
            $scope.data = response.data;
            $scope.detail_product = response.data.products[0];
            // console.log($scope.data);
        });
        $(".preloader").fadeOut("slow");
        $(".js-load").removeClass("hide");
    };

    $scope.init ();

    $scope.showDetailProduct = function(_item) {
        $scope.detail_product = _item;
        location.href = '/#product-detail';
    };

    $scope.getImage = function (image_url){
        return $scope.url + 'assets/images/portfolio/' + image_url;
    };

    $scope.submitContact = function() {
        alert('Updating');
    };
});