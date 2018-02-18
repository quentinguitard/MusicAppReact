<!doctype html>
<html ng-app="myApp">
  <head>
    <link rel="stylesheet" href="style/mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
    <script src="script/myscript.js"></script>
  </head>
  <body>
    <div ng-controller="detailTrack">
      <div ng-repeat="data in listMyInformation">
        <div>
          <div>{{data['name']}}</div>
          <div>{{data["track_no"]}}</div>
          <div>{{data["bio"]}}</div>
          <div><img src="{{data['cover_small']}}" /></div>
          <div>
            <button ng-click="playAudio(data['mp3'])">play</button>
            <button ng-click="stopAudio(data['mp3'])">stop</button>
            <button ng-click="pauseAudio(data['mp3'])">pause</button>
          </div>
        </div>
      </div>  
    </div>  
  </body>
</html>