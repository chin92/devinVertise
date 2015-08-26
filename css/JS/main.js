/**
 * Created by sudarshan.s on 3/9/2015.
 */
var app=angular.module('DevinInterface',['ui.bootstrap']);
app.controller('MainCtrl',function($scope){

});
app.controller('HomeCtrl',function($scope){
    $scope.ShowDropDownItmOne=function(){

        var panel=document.getElementById("DropDownPanel");
        var arrow=document.getElementById("navarrowZero");
        var maxH="300px";
        $scope.panelOne=true;
        $scope.panelTwo=false;
        if(panel.style.height=="300px")
        {

            panel.style.height="0px";
            arrow.innerHTML="&#9662";
        }
        else
        {
            panel.style.height="300px";
            arrow.innerHTML="&#9652";
        }
    }
    $scope.ShowDropDownItmTwo=function(){

        var panel=document.getElementById("DropDownPanelTwo");
        var arrow=document.getElementById("navarrowOne");
        $scope.panelOne=false;
        $scope.panelTwo=true;
        $scope.panelThree=false;
        $scope.panelFour=false;
        var maxH="300px";
        if(panel.style.height=="300px")
        {

            panel.style.height="0px";
            arrow.innerHTML="&#9662";
        }
        else
        {
            panel.style.height="300px";
            arrow.innerHTML="&#9652";
        }
    }
    $scope.ShowDropDownItmThree=function(){

        var panel=document.getElementById("DropDownPanelThree");
        var arrow=document.getElementById("navarrowTwo");
        $scope.panelOne=false;
        $scope.panelTwo=false;
        $scope.panelFour=false;
        $scope.panelThree=true;
        var maxH="300px";
        if(panel.style.height=="300px")
        {

            panel.style.height="0px";
            arrow.innerHTML="&#9662";
        }
        else
        {
            panel.style.height="300px";
            arrow.innerHTML="&#9652";
        }
    }
    $scope.ShowDropDownItmFour=function(){

        var panel=document.getElementById("DropDownPanelFour");
        var arrow=document.getElementById("navarrowThree");
        $scope.panelOne=false;
        $scope.panelTwo=false;
        $scope.panelThree=false;
        $scope.panelFour=true;
        var maxH="300px";
        if(panel.style.height=="300px")
        {

            panel.style.height="0px";
            arrow.innerHTML="&#9662";
        }
        else
        {
            panel.style.height="300px";
            arrow.innerHTML="&#9652";
        }
    }

    $scope.myInterval = 2000;
    var slides = $scope.slides = [];
    $scope.addSlide = function() {
        var newWidth = 600 + slides.length + 1;
        slides.push({
            image: 'http://placekitten.com/' + newWidth + '/300',
            text: ['More','Extra','Lots of','Surplus'][slides.length % 4] + ' ' +
            ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
        });
    };
    for (var i=0; i<4; i++) {
        $scope.addSlide();
    }

});
app.controller('RegisterCtrl',function($scope){
    $scope.today = function() {
        $scope.dt = new Date();
    };
   /* $scope.today();*/

    $scope.clear = function () {
        $scope.dt = null;
    };

    // Disable weekend selection
    $scope.disabled = function(date, mode) {
        return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
    };

    $scope.toggleMin = function() {
        $scope.minDate = $scope.minDate ? null : new Date();
    };
    $scope.toggleMin();

    $scope.open = function($event) {
        $event.preventDefault();
        $event.stopPropagation();

        $scope.opened = true;
    };

   /* $scope.dateOptions = {
        formatYear: 'yy',
        startingDay: 1
    };

    $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
    $scope.format = $scope.formats[0];*/
});
app.controller('ProfileCtrl',function($scope){
    $scope.toggle=function(){
    /*alert();*/
        var toggleBtn=document.getElementById("SidePanel");
        if(toggleBtn.style.left=="0%")
        {
            toggleBtn.style.left="-50%";
            /*toggleBtn.style.opacity="0";*/
        }
        else
        {
            toggleBtn.style.left="0%"
            /*toggleBtn.style.opacity="1";*/
        }
    }

});
app.controller('OnlineStoreCtrl',function($scope){
    $scope.ShowDropDownItmOne=function(){

        var panel=document.getElementById("DropDownPanel");
        var arrow=document.getElementById("navarrowZero");
        var maxH="300px";
        $scope.panelOne=true;
        $scope.panelTwo=false;
        if(panel.style.height=="300px")
        {

            panel.style.height="0px";
            arrow.innerHTML="&#9662";
        }
        else
        {
            panel.style.height="300px";
            arrow.innerHTML="&#9652";
        }
    }
    $scope.ShowDropDownItmTwo=function(){

        var panel=document.getElementById("DropDownPanelTwo");
        var arrow=document.getElementById("navarrowOne");
        $scope.panelOne=false;
        $scope.panelTwo=true;
        var maxH="300px";
        if(panel.style.height=="300px")
        {

            panel.style.height="0px";
            arrow.innerHTML="&#9662";
        }
        else
        {
            panel.style.height="300px";
            arrow.innerHTML="&#9652";
        }
    }

    $scope.clothes=[{"title":"jeans"},
                    {"title":"jeans"},
                    {"title":"jeans"},
                    {"title":"jeans"},
                    {"title":"jeans"},
                    {"title":"jeans"},
                    {"title":"jeans"}];
})
app.controller('DesignerCtrl',function($scope){



});
