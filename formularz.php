<div class="row">                        
                            <div class="flat-panel" ng-controller="Formctrl">
                                <div class="flat-panel-header">
                                    <p class="flat-panel-heading" >Opcje formularza</p>
                                </div>
                                <div class="flat-panel-body" >
                                    <div class="form-horizontal" id="myformularz">
                                         <div class="row" >                                        
                                         <div class="col-xs-10 col-md-12">   
                                                 <div class="col-xs-10 col-md-5">  
                                                <div class="form-group">
                                                    <label for="filter-company-name"  class="col-sm-2 col-xs-12 control-label">Typ</label>
                                                    <div class="col-sm-10 col-xs-12">
                                                        <select ng-model="agnd.typ"  class="form-control" required>
                                                            <option value=""></option>
                                                            <option ng-repeat="types in typy" value="{{types}}">{{types}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>  
                                <div class="col-xs-10 col-md-5">                                
                                    <div class="form-group ">
                                        <label for="filter-company-name" class="control-label"><input type="checkbox" style="margin-left:10px;" ng-model="agnd.bootstrap" />     Zaawansowane opcje Bootstrap</label>
                                    </div>                                
                            </div></div>                           
                               
                                        <div class="row">
                                        <div class="col-xs-10 col-md-12">             
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group" >
                                                    <label class="col-sm-3 col-xs-12 control-label required "><input type="checkbox" ng-model="agnd.sprawdztextkolor"/> Kolor tekstu</label>                                                
                                              <div class="col-sm-9 col-xs-12" id="textkolor">        
                                                                                                         
                                                        <span>#    </span><select ng-disabled="!agnd.sprawdztextkolor" ng-change="agnd.tworzstyl()" ng-model="agnd.textkol1"  class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztextkolor" ng-model="agnd.textkol2"  ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztextkolor" ng-model="agnd.textkol3" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztextkolor" ng-model="agnd.textkol4" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztextkolor" ng-model="agnd.textkol5" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztextkolor" ng-model="agnd.textkol6" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>

                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-10 col-md-5">   
                                        <div class="form-group" >
                                            <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label">PRZYCISKI</label>                                           
                                                      
                                                       <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label">Rodzaj przycisku</label>                                                                                       
                                                        <select  ng-model="agnd.rodzajbtn" ng-change="agnd.tworzstyl()" ng-disabled="!agnd.bootstrap" style="text-align:right;width:150px;" class="form-control">
                                                        <option value=""></option>
                                                             <option ng-repeat="kind in bootstrapbtnrodzaj" value="{{kind}}">{{kind}}</option>
                                                        </select>

                                     
                                        </div>
                                        </div>

                                            </div></div>


                                       <div class="row">
                                       <div class="col-xs-10 col-md-12">            
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group">
                                                    <label class="col-sm-3 col-xs-12 control-label required "><input type="checkbox" ng-model="agnd.sprawdztlokolor"/> Kolor tła</label>
                                                
                                              <div class="col-sm-9 col-xs-12" id="tlokolor">                                                       
                                                        <span>#    </span><select ng-disabled="!agnd.sprawdztlokolor" ng-model="agnd.tlokolor1" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztlokolor" ng-model="agnd.tlokolor2" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztlokolor" ng-model="agnd.tlokolor3" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztlokolor" ng-model="agnd.tlokolor4" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztlokolor" ng-model="agnd.tlokolor5" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-disabled="!agnd.sprawdztlokolor" ng-model="agnd.tlokolor6" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal" value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-10 col-md-5">   
                                        <div class="form-group" ng-disabled="!agnd.bootstrap">
                                            <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label"></label>                                           
                                                                                                          
                                                       <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">Glyphicon</label>                                                                                       
                                                        <input ng-disabled="!agnd.bootstrap" data-toggle="tooltip"  data-placement="right" title="Podaj tylko końcową nazwę glyphicona" ng-model="agnd.glyphicon" style="text-align:right;width:150px;" class="form-control" />
                                       
                                        </div>
                                        </div>

                                            </div></div></div>

                                            <div class="row">
                                                <div class="col-xs-10 col-md-12">       
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group">
                                                    <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">Rozmiar czcionki</label>

                                                    <div class="col-sm-9 col-xs-12">
                                                        <input ng-model="agnd.rozmiar" style="width:70px;display:inline;" ng-change="agnd.tworzstyl()" class="form-control" />
                                                        <select style="margin-left:10px;width:240px;display:inline;float:right;" ng-change="agnd.tworzstyl()" ng-model="agnd.rozmiarskala" class="form-control">

                                                        <option value=""></option>
                                                        <option ng-repeat="skal in skale" value="{{skal}}">{{skal}}</option>
                                                        </select>                                                            
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-10 col-md-5">   
                                        <div class="form-group" >
                                            <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label"></label>                                           
                                                      <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label">Badge</label>                                                                                       
                                                        <input ng-disabled="!agnd.bootstrap" data-toggle="tooltip" data-placement="right" title="Podaj dowolną etykietę (może być liczba lub tekst)" ng-model="agnd.badge" style="text-align:right;width:150px;margin-left:10px;" class="form-control" />

                                        </div>
                                        </div>
                                        </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-xs-10 col-md-12">
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group">
                                                    <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">Rodzaj czcionki</label>

                                                    <div class="col-sm-9 col-xs-12">
                                                       <input ng-model="agnd.rodzaj" type="text" ng-change="agnd.tworzstyl()" ng-disabled="false" style="float:right;" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-10 col-md-5">   
                                        <div class="form-group" >
                                            <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label">INPUT</label>                                           
                                                      
                                                       <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label">Rodzaj</label>                                                                                       
                                                        <select  ng-model="agnd.rodzajinput" ng-disabled="!agnd.bootstrap" style="text-align:right;margin-left:10px;width:150px;" class="form-control">
                                                        <option value=""></option>
                                                             <option ng-repeat="kind in rodzajeinput" value="{{kind}}">{{kind}}</option>
                                                        </select>
                                                      
                                       
                                        </div>
                                        </div>

                                        </div></div>

                                        <div class="row">
                                             <div class="col-xs-10 col-md-12">
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group">
                                                    <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">Dekoracja</label>

                                                    <div class="col-sm-9 col-xs-12" style="float:right;">
                                                       <label><input ng-model="agnd.pogrubienie" type="checkbox"  ng-click="agnd.tworzstyl()" class="col-sm-3 col-xs-12 control-label" />Pogrubienie</label>
                                                        <label><input ng-model="agnd.pochylenie" type="checkbox"  ng-click="agnd.tworzstyl()" class="col-sm-3 col-xs-12 control-label"/>Pochylenie</label>
                                                            <label><input ng-model="agnd.podkreslenie" type="checkbox"  ng-click="agnd.tworzstyl()" class="col-sm-3 col-xs-12 control-label" />Podkreślenie</label>
                                                                <label><input ng-model="agnd.przekreslenie" type="checkbox"  ng-click="agnd.tworzstyl()" class="col-sm-3 col-xs-12 control-label" />Przekreślenie</label>
                                                                    <label><input ng-model="agnd.nadkreslenie" type="checkbox"  ng-click="agnd.tworzstyl()" class="col-sm-3 col-xs-12 control-label" />Nadkreślenie</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-10 col-md-5">   
                                        <div class="form-group" >
                                             <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">HELP-BLOCK</label>                                           
                                                      
                                                        <input ng-model="agnd.blokpomocy" ng-disabled="!agnd.bootstrap" style="width:280px;display:inline;" class="form-control" />
                                    

                                        </div>
                                        </div>
                                        </div>
                                            
                                        </div></div>

                                        <div class="row">
                                             <div class="col-xs-10 col-md-12">
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group">
                                                    <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">Szerokość</label>                                               
                                                        <input ng-model="agnd.szerokosc" style="width:74px;display:inline;text-align:left;" ng-change="agnd.tworzstyl()" class="form-control" />
                                                        <select style="margin-left:10px;width:240px;display:inline;float:right;" ng-change="agnd.tworzstyl()" ng-model="agnd.skalaszer" class="form-control">

                                                        <option value=""></option>
                                                            <option ng-repeat="skala in skale" value="{{skala}}">{{skala}}</option>
                                                        </select>                                                            
                                                   
                                                </div>
                                            </div>
                                            <div class="col-xs-10 col-md-5">   
                                        <div class="form-group" >
                                           <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">TOOLTIP</label>                         
                                                    
                                                    <input ng-model="agnd.toolt" ng-disabled="!agnd.bootstrap" style="width:280px;display:inline;" class="form-control" />
                                                                                              
                                        
                                        </div>
                                        </div>
                                        </div></div>

                                        <div class="row">
                                            <div class="col-xs-10 col-md-12">
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group">
                                                    <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">Wysokość</label>
                                                    
                                                        <input ng-model="agnd.wysokosc" style="width:74px;display:inline;float:left;" ng-change="agnd.tworzstyl()" class="form-control" />
                                                        <select style="margin-left:10px;width:240px;display:inline;float:right;" ng-change="agnd.tworzstyl()" ng-model="agnd.skalawys" class="form-control">

                                                        <option value=""></option>
                                                            <option ng-repeat="skal in skale" value="{{skal}}">{{skal}}</option>
                                                        </select>                                                            
                                                  
                                                </div>
                                            </div>
                                            <div class="col-xs-10 col-md-5">   
                                        <div class="form-group" >
                                            <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label"></label>                                           
                                                                                                                                            
                                                       

                                        
                                        </div>
                                        </div>
                                        </div></div><br>

                                        <div class="row">
                                            <div class="col-xs-10 col-md-12">
                                            <div class="col-xs-10 col-md-5">
                                                <div class="form-group">
                                                    <label for="filter-company-name" style="text-align:left;" class="col-sm-3 col-xs-12 control-label">Obramowanie</label>                                                                                          
                                                       
                                                    <div class="col-sm-9 col-xs-12">
                                                         <div class="row">
                                                        <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label">Styl  </label>                                                        
                                                        <select style="margin-left:24px;width:238px;display:inline;text-align:left;" ng-change="agnd.tworzstyl()" ng-model="agnd.stylramki" class="form-control">
                                                        <option value=""></option>
                                                            <option ng-repeat="styl in stylramka" value="{{styl}}">{{styl}}</option>
                                                        </select>                                                            
                                                    </div><br>

                                                     <div class="row" id="tlokolor2">                                                            
                                                    <label for="filter-company-name" style="display:inline;text-align:right;" class="control-label">Kolor  </label>
                                                        
                                                        <span>#    </span><select  ng-change="agnd.tworzstyl()" ng-model="agnd.ramkakol1"  class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal"  value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select  ng-model="agnd.ramkakol2" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal"  value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select  ng-model="agnd.ramkakol3" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal"  value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select ng-change="agnd.tworzstyl()" ng-model="agnd.ramkakol4" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal"  value="{{znak}}">{{znak}}</option>
                                                        </select>
                                                        <select  ng-model="agnd.ramkakol5" ng-change="agnd.tworzstyl()"  class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal"  value="{{znak}}">{{znak}}</option>
                                                        </select><br><br>
                                                        <select  ng-model="agnd.ramkalastkol" style="margin-left:55px;" ng-change="agnd.tworzstyl()" class="form-control" >
                                                            <option value=""></option>
                                                            <option ng-repeat="znak in heksadecimal"  value="{{znak}}">{{znak}}</option>
                                                        </select>                                                       
                                                    </div><br>                                                                                          
                                                    
                                                        <div class="row" id="szerokosc">                                                            
                                                        <label for="filter-company-name"  class="col-sm-3 col-xs-12 control-label">Szerokosc  </label>
                                                        <input ng-model="agnd.ramkawys" ng-change="tworzstyl()" style="width:50px;display:inline;" class="form-control" />
                                                        <select  ng-model="agnd.rozmramka" style="width:200px;float:right;" ng-disabled="false" ng-change="agnd.tworzstyl()" class="form-control">
                                                        <option value=""></option>
                                                             <option ng-repeat="skal in skale" value="{{skal}}">{{skal}}</option>
                                                        </select>                                                            
                                                    </div><br>

                                                    <div class="row">                                
                                                    <div class="form-group">
                                                        <label for="filter-company-name" style="text-align:left;" class="col-sm-5 col-xs-12 control-label">Zaokrąglanie rogów (wartość w px)</label>                                                                                          
                                                                        
                                                            <input ng-model="agnd.zaokraglenie" style="width:200px;display:inline;margin-left:5px;" ng-change="agnd.tworzstyl()" class="form-control" />
                                                           
                                                        </div></div>

                                            </div>
                                        </div>
                                    </div>
                                   <div class="row">
                        <div class="col-xs-10 col-md-5">
                            <div class="flat-panel">
                                <div class="text-center flat-panel-header">
                                    <p  class="flat-panel-heading" style="font-weight:bold;font-size:24px;">
                                        Podgląd graficzny
                                    </p>
                                </div>
                                <div class="flat-panel-body">                                    
                                   <div class="row text-center form-group"  ng-switch on="agnd.typ">
                                    <div class="col-xs-4 has-{{agnd.rodzajinput}} has-feedback"  ng-switch-when="TEXT (pole tekstowe)">
                                        <input type="text" ng-if="!agnd.bootstrap" placeholder="Tekst" value="Tekst" style="{{agnd.styl}}"/>
                                        <input type="text" aria-describedby="usr" id="usr" ng-if="agnd.bootstrap" data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" placeholder="Tekst" style="{{agnd.styl}}"   value="Tekst" class="form-control has-{{agnd.rodzajinput}} has-feedback"/><span class="glyphicon glyphicon-{{agnd.glyphicon}} form-control-feedback" style="margin-right:15px;" aria-hidden="true"></span><span id="usr" class="sr-only">(agnd.glyphicon)</span>
                                         <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p>                                          
                                    </div>
                                    <div class="col-xs-4 has-{{agnd.rodzajinput}} has-feedback" ng-switch-when="PASSWORD (hasło)">
                                        <input type="password" ng-if="!agnd.bootstrap" placeholder="Password" value="Tekst" style="{{agnd.styl}}"/>
                                        <input type="password" ng-if="agnd.bootstrap" data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" placeholder="Password" value="Tekst" style="{{agnd.styl}}" class="form-control has-{{agnd.rodzajinput}} has-feedback"/><span class="glyphicon glyphicon-{{agnd.glyphicon}} form-control-feedback" style="margin-right:15px;" aria-hidden="true"></span><span id="usr" class="sr-only">(agnd.glyphicon)</span>
                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    <div class="col-xs-4 has-{{agnd.rodzajinput}} has-feedback"  ng-switch-when="CHECKBOX (pole wyboru)">
                                        <input type="checkbox" ng-if="!agnd.bootstrap"  value="Tekst" style="{{agnd.styl}}"/>
                                        <input type="checkbox" ng-if="agnd.bootstrap" data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" style="{{agnd.styl}}" value="Tekst" class="form-control has-{{agnd.rodzajinput}} has-feedback"/>
                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    <div class="col-xs-4 has-{{agnd.rodzajinput}} has-feedback"  ng-switch-when="RADIO (pole opcji)">
                                        <input type="radio" ng-if="!agnd.bootstrap" value="Tekst" style="{{agnd.styl}}"/>
                                        <input type="radio" ng-if="agnd.bootstrap" data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" value="Tekst" style="{{agnd.styl}}" class="form-control has-{{agnd.rodzajinput}} has-feedback"/>
                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    <div class="col-xs-4 has-{{agnd.rodzajinput}} has-feedback"  ng-switch-when="SELECT (lista rozwijana)">
                                        <select  ng-if="!agnd.bootstrap"  style="{{agnd.styl}}" >
                                                        <option value="">Option 1</option>
                                                           <option value="">Option 2</option>
                                                        </select>

                                        <select  ng-if="agnd.bootstrap" data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" style="{{agnd.styl}}" class="form-control has-{{agnd.rodzajinput}} has-feedback">
                                                        <option value="">Option 1</option>
                                                           <option value="">Option 2</option>
                                                        </select><span class="glyphicon glyphicon-{{agnd.glyphicon}} form-control-feedback" style="margin-right:15px;" aria-hidden="true"></span><span id="usr" class="sr-only">(agnd.glyphicon)</span>
                                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    <div class="col-xs-4 has-{{agnd.rodzajinput}} has-feedback"  ng-switch-when="TEXTAREA (obszar tekstowy)">
                                        <label for="comment">Komentarz:</label>
                                        <textarea data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" class="form-control has-{{agnd.rodzajinput}} has-feedback" rows="5" style="{{agnd.styl}}" id="comment"></textarea><span class="glyphicon glyphicon-{{agnd.glyphicon}} form-control-feedback" style="margin-right:15px;" aria-hidden="true"></span><span id="usr" class="sr-only">(agnd.glyphicon)</span>
                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    <div class="col-xs-4"  ng-switch-when="FILE (selektor plików)">
                                        <input type="file" style="{{agnd.style}}" value="Wybierz plik"  >
                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    <div class="col-xs-4 "  ng-switch-when="SUBMIT (wysłanie formularza)">
                                        <input type="submit" ng-if="!agnd.bootstrap"  value="Wysylanie" style="{{agnd.styl}}"/>
                                        <input type="submit" data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" ng-if="agnd.bootstrap" value="Wysylanie" style="{{agnd.styl}}" class="{{agnd.klasa}}"/>
                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    <div class="col-xs-4 "  ng-switch-when="BUTTON (przycisk)">
                                        <input type="button" ng-if="!agnd.bootstrap" value="Przycisk" style="{{agnd.styl}}" />
                                        <button  ng-if="agnd.bootstrap" data-toggle="tooltip" data-placement="right" title="{{agnd.toolt}}" class="{{agnd.klasa}}" style="{{agnd.styl}}" value="Przycisk"><span ng-if="agnd.glyphicon" style="float:right;" class="glyphicon glyphicon-{{agnd.glyphicon}} form-control-feedback"></span><span id="usr" class="sr-only">(agnd.glyphicon)</span>Przycisk<span ng-if="agnd.badge" class="badge">{{agnd.badge}}</span>
                                            
                                                    </button>
                                        <p class="help-block" ng-if="agnd.blokpomocy">{{agnd.blokpomocy}}</p> 
                                    </div>
                                    
                               </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                         
                                </div>                                
                                   
                                        </div> </div>

                                        <div class="text-center" >
                                   <div class="row"> 
                                    <input id="btngeneruj"  class="btn btn-success" ng-click="agnd.addinput()"  value="Generuj kod" type="submit" />
                                    <input  id="btnzeruj" class="btn btn-primary" ng-click="agnd.wyczysc()"  value="Wyczyść wszystko" type="submit" />
                            </div></div>
                    <br><br>      
                                        </div></div> 
