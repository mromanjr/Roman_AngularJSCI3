var app = angular.module('project', ['projectApi','chieffancypants.loadingBar', 'ngAnimate']);

app.config(['$routeProvider', '$locationProvider', '$controllerProvider','cfpLoadingBarProvider',
    function($routeProvider, $locationProvider, $controllerProvider, cfpLoadingBarProvider) {
        $routeProvider.
        when('/', {
            controller: ListCtrl,
            templateUrl: BASE_URL + 'projects/template_list'
        }).
        when('/projects/edit/:id', {
            controller: EditCtrl,
            templateUrl: BASE_URL + 'projects/template_detail'
        }).
        when('/projects/new', {
            controller: CreateCtrl,
            templateUrl: BASE_URL + 'projects/template_detail'
        }).
        when('/usuarios/login', {
            controller: LoginCtrl,
            templateUrl: BASE_URL + 'usuarios/login_template'
        }).
        otherwise({
            redirectTo: '/'
        });

        $locationProvider.html5Mode(true);
		cfpLoadingBarProvider.includeSpinner = true;
    }
]);

app.run(function($rootScope, $location, loginService, cfpLoadingBar) {
    $rootScope.template = true;
	$rootScope.base_url = BASE_URL;
	
	$rootScope.logout = function(){		
		loginService.logout();
		$location.path("/usuarios/login");
	}
	
    $rootScope.$on("$routeChangeStart", function(event, next, current) {        
		if ($rootScope.templateUrl != BASE_URL + 'usuarios/login_template' && !loginService.isLogged()) {
			$location.path("/usuarios/login");
		}        
		cfpLoadingBar.start();
	});	
	
	$rootScope.$on('$routeChangeSuccess', function() {
	  cfpLoadingBar.complete();
	});
	
	
	
});


function LoginCtrl($scope, $rootScope, $location, loginService) {
    $rootScope.template = false;

    $scope.logar = function(user) {
        loginService.login(user);
    }
}

function ListCtrl($scope, $location, Project) {

    $scope.projects = Project.query();

    $scope.destroy = function(Project) {
        Project.destroy(function() {
            $scope.projects.splice($scope.projects.indexOf(Project), 1);
        });
    };
}

function CreateCtrl($scope, $location, Project) {
    $scope.save = function() {
        Project.save($scope.project, function(project) {
            $location.path('/edit/' + project.id);
        });
    };
}

function EditCtrl($scope, $location, $routeParams, Project) {
    var self = this;

    Project.get({
        id: $routeParams.id
    }, function(project) {
        self.original = project;
        $scope.project = new Project(self.original);
    });

    $scope.isClean = function() {
        return angular.equals(self.original, $scope.project);
    };

    $scope.destroy = function() {
        self.original.destroy(function() {
            $location.path('/');
        });
    };

    $scope.save = function() {
        $scope.project.update(function() {
            $location.path('/');
        });
    };
}


angular.module('projectApi', ['ngResource', 'ngRoute']).
factory('Project', function($resource) {
    var Project = $resource(BASE_URL + 'api/projects/:method/:id', {}, {
        query: {
            method: 'GET',
            params: {
                method: 'index'
            },
            isArray: true
        },
        save: {
            method: 'POST',
            params: {
                method: 'save'
            }
        },
        get: {
            method: 'GET',
            params: {
                method: 'edit'
            }
        },
        remove: {
            method: 'DELETE',
            params: {
                method: 'remove'
            }
        }
    });

    Project.prototype.update = function(cb) {
        return Project.save({
                id: this.id
            },
            angular.extend({}, this, {
                id: undefined
            }), cb);
    };

    Project.prototype.destroy = function(cb) {
        return Project.remove({
            id: this.id
        }, cb);
    };

    return Project;
});