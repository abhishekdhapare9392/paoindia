var app = angular.module("paoindiaApp", ['firebase']);

app.controller("paoindiaCtrl", function($scope, $firebaseObject){
    var ref = new Firebase("https://paoi-d3168.firebaseio.com/title");

    var syncObject = $firebaseObject(ref);

    syncObject.$bindTo($scope, "title")
})