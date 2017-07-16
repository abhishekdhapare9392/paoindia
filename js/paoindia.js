var app = angular.module("paoindiaApp", ['firebase']);

app.controller("paoindiaCtrl", function($scope, $firebaseObject, $http) {

    var ref = new Firebase("https://paoi-d3168.firebaseio.com/myData");

    var syncObject = $firebaseObject(ref);
    syncObject.$bindTo($scope, "myData");



});