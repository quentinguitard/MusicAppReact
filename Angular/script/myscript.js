var mymodule = angular.module('myApp', [])
mymodule.controller('listAlbums', ['$scope', '$http','$sce', function ($scope, $http,$sce,$rootScope) {
  $scope.listMyInformation = [];
  $scope.getAlbum = function(id) {
   localStorage.setItem("idAlbum", id);
  };  
  $http({
    method: 'GET',
    url: 'getJson/listAlbums.php'
  }).then(function (success){
    console.log(success.data)
    $scope.listMyInformation = success.data;
  },function (error){
    console.log(error)
  });
}]);

mymodule.controller('detailAlbums', ['$scope', '$http','$sce', function ($scope, $http,$sce,$rootScope) {
  $scope.getAlbum = function(id) {
   localStorage.setItem("idTrack", id);
  };  
  $scope.listMyInformation = [];
   $http({
    method: "post",
    url: 'getJson/detailAlbums.php',
    data: {
        id: localStorage.getItem("idAlbum")
    },
     headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
  }).then(function (success){
    console.log(success.data)
    $scope.listMyInformation = success.data;
  },function (error){
    console.log(error)
  });
}]);
mymodule.controller('listGenre', ['$scope', '$http','$sce', function ($scope, $http,$sce,$rootScope) {
  $scope.listMyInformation = [];
  $scope.getAlbum = function(id) {
    localStorage.setItem("idGenre", id);
  };  
   $http({
    method: "post",
    url: 'getJson/listGenre.php'
  }).then(function (success){
    console.log(success.data)
    $scope.listMyInformation = success.data;
  },function (error){
    console.log(error)
  });
}]);
mymodule.controller('detailGenre', ['$scope', '$http','$sce', function ($scope, $http,$sce,$rootScope) {
 $scope.listMyInformation = [];
   $http({
    method: "post",
    url: 'getJson/detailGenre.php',
    data: {
        id: localStorage.getItem("idGenre")
    },
     headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
  }).then(function (success){
    console.log(success.data)
    $scope.listMyInformation = success.data;
  },function (error){
    console.log(error)
  });
}]);
mymodule.controller('listArtist', ['$scope', '$http','$sce', function ($scope, $http,$sce,$rootScope) {
  $scope.listMyInformation = [];
   $scope.getAlbum = function(id) {
    localStorage.setItem("idArtist", id);
  };  
  $http({
    method: 'GET',
    url: 'getJson/listArtist.php'
  }).then(function (success){
    console.log(success.data)
    $scope.listMyInformation = success.data;
  },function (error){
    console.log(error)
  });
}]);
mymodule.controller('detailArtist', ['$scope', '$http','$sce', function ($scope, $http,$sce,$rootScope) {
  $scope.listMyInformation = [];
   $scope.getAlbum = function(id) {
   localStorage.setItem("idAlbum", id);
  };  
   $http({
    method: "post",
    url: 'getJson/detailArtist.php',
    data: {
        id: localStorage.getItem("idArtist")
    },
     headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
  }).then(function (success){
    console.log(success.data)
    $scope.listMyInformation = success.data;
  },function (error){
    console.log(error)
  });
}]);
mymodule.controller('detailTrack', ['$scope', '$http','$sce', function ($scope, $http,$sce,$rootScope) {
    $scope.playAudio = function(mp3) {        
        audio.play();
    };
    $scope.pauseAudio = function(mp3) {
        audio.pause();
    };
    $scope.stopAudio = function(mp3) {
        audio.pause();
        audio.currentTime = 0;
    };
   $http({
    method: "post",
    url: 'getJson/detailTrack.php',
    data: {
        idTrack: localStorage.getItem("idTrack"),
        id: localStorage.getItem("idAlbum")
    },
     headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
  }).then(function (success){
     audio = new Audio(success.data[0].mp3);
    $scope.listMyInformation = success.data;
  },function (error){
    console.log(error)
  });
}]);
/*
mymodule.factory("NewsService", function() {
  var theValue = {};
    theValue.setter = function(newValue) {
        theValue.value = newValue;
    }
    theValue.getter = function() {
        return theValue.value;
    }
    return theValue;
});*/