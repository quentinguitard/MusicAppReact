<!doctype html>
<html ng-app="myApp">
  <head>
    <link rel="stylesheet" href="style/mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
    <script src="script/myscript.js"></script>
  </head>
  <body>
    <div ng-controller="detailAlbums">
      <div ng-repeat="data in listMyInformation">
        <div>
          <div><a href="index?controller=tracks&action=detail"  ng-click="getAlbum(data['Number'])">{{data['Number']}}</a></div>
          <div><img src="{{data['Cover']}}" /></div>
          <div>{{data["Genre"]}}</div>
          <div>{{data["Popularity"]}}</div>
          <div>{{data["Release date"]}}</div>
          </div>
        </div>
    </div>  
  </body>
</html>