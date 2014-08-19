app.directive('keosuComments', function(){
	return {
		restrict : 'E',
		scope : {
			objectId: '=objectId',
			objectName: '=objectName',
			enableComments: '=enableComments'
		},
		templateUrl : 'plugins/keosu-comments/templates/default.html',
		controller : ['$scope','$http','usSpinnerService', function ($scope, $http, usSpinnerService) {

			$scope.init = function() {
				$http.get('data/globalParam.json').success(function(data){
					$scope.host = data.host;
					$scope.commentListAction();
				});
			}

			$scope.commentListAction = function() {
				$http.get($scope.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId).success(function(data){
					$scope.comments = data.comments;
					$scope.connect = data.connect;
				});
			};

			$scope.commentAddAction = function() {
				var data = "message="+$scope.messageComment;
				$scope.messageComment = "";
				$http.post($scope.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId,data).success(function(data){
					$scope.comments = data.comments;
					$scope.connect = data.connect;
				});
			};
		}]
	};
});