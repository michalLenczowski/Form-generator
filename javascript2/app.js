(function(){
	var app=angular.module('apka',['ngSanitize','ngRoute']);

app.controller('mainctrl',['$scope','routetest',function($scope,routetest){
	$scope.routetest=routetest;
}])


	
app.controller('Formctrl', function($scope,$filter,Agnd){


$scope.typy=["TEXT (pole tekstowe)","PASSWORD (hasło)","CHECKBOX (pole wyboru)",
				"RADIO (pole opcji)","SELECT (lista rozwijana)","TEXTAREA (obszar tekstowy)","FILE (selektor plików)","SUBMIT (wysłanie formularza)",
				 "BUTTON (przycisk)"];
$scope.heksadecimal=["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"];
$scope.skale=["pt (punkty)","px (piksele)","% (procent)","em (wysokosc czcionki","ex (wysokość małej litery)","in (cale)","cm (centymetry)","mm (milimetry)","pc (pika)",];				 
$scope.stylramka=["none","solid","dashed","dotted","double","groove","ridge","inset","outset"];
$scope.bootstrapbtnrodzaj=["default","primary","success","info","warning","danger","link"];
$scope.bootstrapbtnwielkosc=["large","medium","small","xsmall"];
$scope.rodzajeinput=["success","warning","error"];
$scope.placetooltip=["top","bottom","right","left"];

$scope.agnd=Agnd;	

	/*$(".sidebar-navigation ul:first-child li").click(function(){	
		$(this).addClass("active");
		$(".sidebar-navigation ul:nth-child(2) li").removeClass("active");
		$(".sidebar-navigation ul:nth-child(3) li").removeClass("active");
	})

	$(".sidebar-navigation ul:nth-child(2) li").click(function(){	
		$(this).addClass("active");
		$(".sidebar-navigation ul li:first-child").removeClass("active");
		$(".sidebar-navigation ul li:nth-child(3)").removeClass("active");
	})

	$(".sidebar-navigation ul:nth-child(3) li").click(function(){	
		$(this).addClass("active");
		$(".sidebar-navigation ul li:nth-child(2)").removeClass("active");
		$(".sidebar-navigation ul li:first-child").removeClass("active");
	})*/




});

app.factory('routetest', ['$location', function($location){
		return {
			
			isActive:function(location){
				return (-1!==$location.path().indexOf(location));
			}	
		};
}])



app.config(['$routeProvider',function($routeProvider){

		$routeProvider
			.when('/formularz',{
				templateUrl:'formularz.php'
			})	
			.when('/podglad',{
				templateUrl:'podglad.php'
			})
			.when('/kod',{
				templateUrl:'kodformularza.php'	
			})
			.otherwise({
				redirectTo:'/formularz'
			});
		}]);
// 

app.controller('podgladctrl', function($scope,$filter,Agnd){

$scope.agnd=Agnd;

});

app.controller('calykodctrl',function($scope,$filter,Agnd){
$scope.agnd=Agnd;

});


app.filter('to_trusted', ['$sce', function($sce){
        return function(text) {
            return $sce.trustAsHtml(text);
        };
    }]);

app.service('Agnd', function(){
		
		this.typ=null;
	this.sprawdztextkolor=false;	
	this.textkol1=this.textkol2=this.textkol3=this.textkol4=this.textkol5=this.textkol6=null;
	this.tlokolor1=this.tlokolor2=this.tlokolor3=this.tlokolor4=this.tlokolor5=this.tlokolor6=null;	
	this.rozmiar=null;
	this.rozmiarskala=null;
	this.rodzaj=null;	
	this.dekoracja=null;
	this.szerokosc=null;
	this.skalaszer=null;
	this.wysokosc=null;
	this.skalawys=null;	
	this.stylramki=null;
	this.pogrubienie=this.pochylenie=this.podkreslenie=this.przekreslenie=this.nadkreslenie=false;
	this.ramkakol1=this.ramkakol2=this.ramkakol3=this.ramkakol4=this.ramkakol5=this.ramkalastkol=null;	
	this.rodzajbtn=null;
	this.bootstrap=false;
	this.glyphicon=null;
	this.badge=null;
	this.rodzajinput=null;	
	this.blokpomocy=null;		
	this.toolt=null;
	this.styl=null;
	this.rozmramka=null;
	this.ramkawys=null;
	this.klasa=null;
	this.zaokraglenie=null;	
	this.calyform=[];


	this.wyczysc=function(){
		if(confirm('Czy na pewno chcesz usunąć wszystkie dane?')){
			this.typ=null;
		this.sprawdztextkolor=false;	
		this.textkol1=this.textkol2=this.textkol3=this.textkol4=this.textkol5=this.textkol6=null;
		this.tlokolor1=this.tlokolor2=this.tlokolor3=this.tlokolor4=this.tlokolor5=this.tlokolor6=null;	
		this.rozmiar=null;
		this.rozmiarskala=null;
		this.rodzaj=null;	
		this.dekoracja=null;
		this.szerokosc=null;
		this.skalaszer=null;
		this.wysokosc=null;
		this.skalawys=null;	
		this.stylramki=null;
		this.pogrubienie=this.pochylenie=this.podkreslenie=this.przekreslenie=this.nadkreslenie=false;
		this.ramkakol1=this.ramkakol2=this.ramkakol3=this.ramkakol4=this.ramkakol5=this.ramkalastkol=null;	
		this.rodzajbtn=null;
		this.bootstrap=false;
		this.glyphicon=null;
		this.badge=null;
		this.rodzajinput=null;	
		this.blokpomocy=null;		
		this.toolt=null;
		this.styl=null;
		this.rozmramka=null;
		this.ramkawys=null;
		this.klasa=null;
		this.zaokraglenie=null;
		
	}
	}

	this.tworzstyl=function(){
		var textkolor,tlokolor,fontrozmiar,font,fontweight,fontstyle,textdekoracja,stylszer,stylwys,rama,zaokr=null;

		if((this.textkol1 && this.textkol2 && this.textkol3 && this.textkol4 && this.textkol5 && this.textkol6) != null ){
			textkolor='color:#'+this.textkol1+this.textkol2+this.textkol3+this.textkol4+this.textkol5+this.textkol6+'; ';				
		}else{
			textkolor='';
		}
		if((this.tlokol1 &&this.tlokol2 && this.tlokol3 && this.tlokol4 && this.tlokol5 && this.tlokol6) != null ){
			tlokolor='background-color:#'+this.tlokol1+this.tlokol2+this.tlokol3+this.tlokol4+this.tlokol5+this.tlokol6+'; ';			
		}else{
			tlokolor='';
		}
		if(	this.rozmiar !=null){
			if(this.rozmiarskala ==null ){
				this.rozmiarskala="px";
			}else{
			var skala=this.rozmiarskala.substr(0,2);
		}
			fontrozmiar='font-size:'+this.rozmiar+skala+'; ';
		}else{
			fontrozmiar='';
		}
		if(	this.rodzaj !=null){
			font='font-family:"'+this.rodzaj+'"; ';
		}else{
			font='';
		}

		if(this.pogrubienie){
			fontweight='font-weight:bold; ';
		}else{
			fontweight='';
		}

		if(this.pochylenie){
			fontstyle='font-style:italic; ';
		}else{
			fontstyle='';
		}

		if(this.podkreslenie || this.przekreslenie || this.nadkreslenie){
			textdekoracja='text-decoration:'+(this.podkreslenie ? 'underline': '')+(this.przekreslenie ? ' line-through' : '')+(this.nadkreslenie ? ' overline' : '')+'; ';
		}else{
			textdekoracja='';
		}		

		if(	this.szerokosc !=null){
			if(this.skalaszer ==null ){
				this.skalaszer="px";
			}else{
			var skala=this.skalaszer.substr(0,2);
		}
			stylszer='width:'+this.szerokosc+skala+'; ';
		}else{
			stylszer='';
		}
		if(	this.wysokosc !=null){
			if(this.skalawys ==null ){
				this.skalawys="px";
			}else{
			var skala=this.skalawys.substr(0,2);
		}
			stylwys='height:'+this.wysokosc+skala+'; ';
		}else{
			stylwys='';
		}

		if(	(this.stylramki && this.ramkakol1 && this.ramkakol2 && this.ramkakol3 && this.ramkakol4 && this.ramkakol5 && this.ramkalastkol && this.ramkawys) !=null){
			if(this.rozmramka==null){
			this.rozmramka='px';
	}else{
			var skala=this.rozmramka.substr(0,2);
		}
			var ramka=this.stylramki.substr(0,7);
			rama='border:'+this.ramkawys+skala+' '+	ramka+' '+'#'+this.ramkakol1+this.ramkakol2 +this.ramkakol3+this.ramkakol4+this.ramkakol5+this.ramkalastkol+'; ';
		}else{
			rama='';
		}
	
		if(this.zaokraglenie!=null){
			zaokr='border-radius:'+this.zaokraglenie+'px ; ';
		}else{
			zaokr='';
		}

	
		if(this.rodzajbtn!=null){
			this.klasa='btn btn-'+this.rodzajbtn;
		}

		this.styl=textkolor+tlokolor+fontrozmiar+font+fontweight+fontstyle+textdekoracja+stylszer+stylwys+rama+zaokr;	

	};

	this.addinput=function(){
			
			if(this.typ=="TEXT (pole tekstowe)"){
				if(!this.bootstrap){
				var parametr="<input type='text' placeholder='Tekst' style='"+this.styl+"'/> ";
			}else{
				if(this.glyphicon!=null && this.blokpomocy!=null){
				var parametr="<input type='text' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' /><span class='glyphicon glyphicon-"+this.glyphicon+" form-control-feedback' style='margin-right:400px;' aria-hidden='true'></span><span id='usr' class='sr-only'>("+this.glyphicon+")</span><p class='help-block'>"+this.blokpomocy+"</p> ";
				}else if(this.glyphicon!=null && this.blokpomocy==null){
					var parametr="<input type='text' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' /><span class='glyphicon glyphicon-"+this.glyphicon+" form-control-feedback' style='margin-right:5px;' aria-hidden='true'></span><span id='usr' class='sr-only'>("+this.glyphicon+")</span>";
				}else if(this.glyphicon==null && this.blokpomocy!=null){
					var parametr="<input type='text' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' /><p class='help-block'>"+this.blokpomocy+"</p> ";
				}else if(this.glyphicon==null && this.blokpomocy==null){
					var parametr="<input type='text' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' />";
				}
			}
			this.calyform.push(parametr);
		}else if(this.typ=="PASSWORD (hasło)"){		
				if(!this.bootstrap){
				var password="<input type='password' placeholder='Tekst' style="+this.styl+"/> ";
			}else{
				if(this.glyphicon!=null && this.blokpomocy!=null){
					var parametr="<input type='password' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' /><span class='glyphicon glyphicon-"+this.glyphicon+" form-control-feedback' style='margin-right:5px;' aria-hidden='true'></span><span id='usr' class='sr-only'>("+this.glyphicon+")</span><p class='help-block'>"+this.blokpomocy+"</p> ";
				}else if(this.glyphicon!=null && this.blokpomocy==null){
					var parametr="<input type='password' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' /><span class='glyphicon glyphicon-"+this.glyphicon+" form-control-feedback' style='margin-right:5px;' aria-hidden='true'></span><span id='usr' class='sr-only'>("+this.glyphicon+")</span>";
				}else if(this.glyphicon==null && this.blokpomocy!=null){
					var parametr="<input type='password' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' /><p class='help-block'>"+this.blokpomocy+"</p> ";
				}else if(this.glyphicon==null && this.blokpomocy==null){
					var parametr="<input type='password' placeholder='Tekst' aria-describedby='usr' data-toggle='tooltip' data-placement='right' title='"+this.toolt+"' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' style='"+this.styl+"' />";
					}
				}
			this.calyform.push(parametr);
		}else if(this.typ=="CHECKBOX (pole wyboru)"){		
				if(!this.bootstrap){
				var tekst="<input type='checkbox' value='Tekst' style="+this.styl+"/> ";
			}else{

				var tekst="<input type='checkbox'  aria-describedby='usr' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"'  style='"+this.styl+"' /> ";
				if(this.blokpomocy)
					tekst+="<p class='help-block'>"+this.blokpomocy+"</p>";
			
			}
			this.calyform.push(tekst);
		}else if(this.typ=="RADIO (pole opcji)"){		
				if(!this.bootstrap){
				var tekst="<input type='radio' value='Tekst' style='"+this.styl+"' /> ";
			}else{
				var tekst="<input type='radio'  aria-describedby='usr' class='form-control has-"+this.rodzajinput+" has-feedback' id='usr' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' style='"+this.styl+"' /> ";
				if(this.blokpomocy)
					tekst+="<p class='help-block'>"+this.blokpomocy+"</p>";
			}
			this.calyform.push(tekst);
		}else if(this.typ=="SELECT (lista rozwijana)"){		
				if(!this.bootstrap){
				var tekst="<select style="+this.styl+"><option value=''>Option 1</option><option value=''>Option 2</option></select>";
			}else{
				var tekst="<select class='form-control has-"+this.rodzajinput+" has-feedback' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' style='"+this.styl+"' ><option value=''>Option 1</option><option value=''>Option 2</option></select>";
				if(this.blokpomocy)
					tekst+="<p class='help-block'>"+this.blokpomocy+"</p>";
			}
			this.calyform.push(tekst);
		}else if(this.typ=="TEXTAREA (obszar tekstowy)"){		
				if(!this.bootstrap){
				var tekst="<textarea class='form-control has-"+this.rodzajinput+" has-feedback' rows='5' style='"+this.styl+"' id='comment'></textarea>";
			}else{
				var tekst="<textarea class='form-control has-"+this.rodzajinput+" has-feedback' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' rows='5' style='"+this.styl+"' id='comment'></textarea>";
				if(this.blokpomocy)
					tekst+="<p class='help-block'>"+this.blokpomocy+"</p>";
			}
			this.calyform.push(tekst);
		}else if(this.typ=="FILE (selektor plików)"){				
				var tekst="<input type='file' style='"+this.styl+"' value='Wybierz plik'  >";			
				if(this.blokpomocy)
					tekst+="<p class='help-block'>"+this.blokpomocy+"</p>";

				this.calyform.push(tekst);
		}else if(this.typ=="SUBMIT (wysłanie formularza)"){		
				if(!this.bootstrap){
				var tekst="<input type='submit' value='Wysylanie' style='"+this.styl+"' />";
			}else{				
				var tekst="<input type='submit' value='Wysylanie' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' style='"+this.styl+"' class='"+this.klasa+"' />";
				if(this.blokpomocy)
					tekst+="<p class='help-block'>"+this.blokpomocy+"</p>";
			}
			this.calyform.push(tekst);
		}else if(this.typ=="BUTTON (przycisk)"){		
				if(!this.bootstrap){
				var tekst="<input type='button' value='Przycisk' style='"+this.styl+"' />";
			}else{
				if(this.glyphicon!=null && this.badge!=null){				
				var tekst=" <button class='"+this.klasa+"' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' style='"+this.styl+"' value='Przycisk'><span class='glyphicon glyphicon-"+this.glyphicon+" form-control-feedback' style='float:right;' aria-hidden='true'></span><span id='usr' class='sr-only'>"+this.glyphicon+"</span>Przycisk<span class='badge' style='text-align:right;' >"+this.badge+"</span></button>";
			}else if(this.glyphicon!=null && this.badge==null){
				var tekst=" <button class='"+this.klasa+"' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' style='"+this.styl+"' value='Przycisk'><span class='glyphicon glyphicon-"+this.glyphicon+" form-control-feedback' style='margin-right:5px;' aria-hidden='true'></span><span id='usr' class='sr-only'>("+this.glyphicon+")</span></button>";
			}else if(this.glyphicon==null && this.badge!=null){
				var tekst=" <button class='"+this.klasa+"' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' style='"+this.styl+"' value='Przycisk'>Przycisk<span class='badge'>"+this.badge+"</span></button>";
			}else if(this.glyphicon==null && this.badge==null){
				var tekst=" <button class='"+this.klasa+"' data-toggle='tooltip'  data-placement='right' title='"+this.toolt+"' style='"+this.styl+"' value='Przycisk'>Przycisk</button>";
			}
			if(this.blokpomocy)
					tekst+="<p class='help-block'>"+this.blokpomocy+"</p>";
		}
			this.calyform.push(tekst);
		}

		alert("Poprawnie dodałeś pole formularza");
		//this.wyczysc();

		};

		this.removeObjectFromArray = function(array, object) {
	        var index = array.indexOf(object);
	        if (array.length > index)
	            array.splice(index, 1);
    	};


   		 this.usunsaving=function(nr){        
        		this.removeObjectFromArray(this.calyform,nr);        
        	};

	});


})();
