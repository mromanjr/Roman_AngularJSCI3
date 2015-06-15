<form name="myForm" role="form" ng-submit="save()">
  <div class="form-group" ng-class="{error: myForm.name.$invalid}">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" ng-model="project.name" required>
	<span ng-show="myForm.name.$error.required" class="help-inline">Required</span>
  </div>
  
  <div class="form-group" ng-class="{error: myForm.site.$invalid}">
    <label for="site">Website</label>
    <input type="url" class="form-control" id="site" placeholder="Enter project site" ng-model="project.site" required>
	<span ng-show="myForm.site.$error.required" class="help-inline">Required</span>
      <span ng-show="myForm.site.$error.url" class="help-inline">Not a URL</span>
  </div>
  
  <div class="form-group" ng-class="{error: myForm.site.$invalid}">
    <label for="site">Description</label>
	<textarea class="form-control" name="description" id="description" ng-model="project.description"></textarea>
  </div>
  <button type="submit" ng-disabled="isClean() || myForm.$invalid" class="btn btn-default">Salvar</button>
  <a ng-href="{{base_url}}" class="btn btn-link">Cancel</a>
  <button ng-click="destroy()" ng-show="project.id" class="btn btn-danger pull-right"><i class="icon-trash icon-white"></i> Delete</button>
</form>