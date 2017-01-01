<div class="row" >                        
        <div class="flat-panel" ng-controller="podgladctrl">
            <div class="flat-panel-header">
                <p class="flat-panel-heading" >Cały formularz</p>
            </div>
            <div class="flat-panel-body">
                <div class="row text-center">
                <div class="col-md-10 col-xs-12" >
                     <ul  class="list-unstyled link-list">
                        <li ng-repeat="inpts in agnd.calyform" ><span id="li" ng-bind-html="inpts | to_trusted"></span><span  id="saves" ng-click="agnd.usunsaving(inpts)" class="glyphicon glyphicon-trash" ></span><br><br></li>
                    </ul>                              
                </div></div>

                </div>
</div>
</div>
