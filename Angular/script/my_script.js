var app = angular.module('myApp', [])

app.controller('listAlbums', function($scope, $http) {
    $scope.listMyInformation = [];
    $scope.li = [];
    $scope.currentPage = 1;
    $scope.totalItems = 0;
    $scope.pageSize = 10; 
    getli();
    getData();   
    function getData() {
        $http({
            method: 'GET',
            url: '../getJson/test2.php?page=' + $scope.currentPage + '&size=' + $scope.pageSize+''
          }).then(function (data){
            $scope.listMyInformation = data["data"].PortalActivity;
          },function (error){
            console.log(error)
          });    
    }
    function getli() {
        $http({
            method: 'GET',
            url: '../getJson/test'
        }).then(function (success){
            $scope.li = success.data['total_pages'];
            console.log(success.data)

        },function (error){
            console.log(error)
        });
    }
    
    $scope.pageChanged = function() {
        getData();
    }
 });