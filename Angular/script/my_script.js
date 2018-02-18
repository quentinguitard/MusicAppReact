var app = angular.module('myApp', [])

app.controller('listAlbums', function($scope, $http) {
  $scope.listMyInformation = [];
    $scope.currentPage = 1;
    $scope.totalItems = 0;
    $scope.pageSize = 10;
    getData();

    function getData() {
        $http({
            method: 'GET',
            url: '../getJson/test.php?page=' + $scope.currentPage + '&size=' + $scope.pageSize+''
          }).then(function (data){
            $scope.totalItems = data["data"].totalCount;
            $scope.startItem = ($scope.currentPage - 1) * $scope.pageSize + 1;
            $scope.endItem = $scope.currentPage * $scope.pageSize;
            if ($scope.endItem > $scope.totalCount) {$scope.endItem = $scope.totalCount;}
            $scope.listMyInformation = data["data"].PortalActivity;
          },function (error){
            console.log(error)
          });    
    }

    $scope.pageChanged = function() {
        getData();
    }
    $scope.pageSizeChanged = function() {
        $scope.currentPage = 1;
        getData();
    }
    $scope.searchTextChanged = function() {
        $scope.currentPage = 1;
        getData();
    }
 });