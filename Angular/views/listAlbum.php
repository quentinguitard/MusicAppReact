<!doctype html>
<html ng-app="myApp">
  <head>
    <link rel="stylesheet" href="style/mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
    <script src="script/myscript.js"></script>
  </head>
  <body>
    <div ng-controller="listAlbums">
      <div ng-repeat="data in listMyInformation">
          <div>
            <div> {{data["name"]}}</div>
            <div><a href="index?controller=albums&action=detail"  ng-click="getAlbum(data['id'])"><img src="{{data['cover_small']}}" /></a></div>
            <div>{{data["description"]}}</div>
            <div>{{data["popularity"]}}</div>
            <div>{{data["release_date"]}}</div>
          </div>
        </div>
      </div>     
    </div>    
  </body>
</html>