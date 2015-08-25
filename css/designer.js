 (function(){


        
                var colorSet = '#00FFFF';
                var modelInitial;


                var canvas=new fabric.Canvas('canvas'); 
                var currentModel=null;
                var savedCanvas=[];
              
                
                function renderCanvas(object){
                    canvas.add(object);
                    canvas.renderAll();
                }
                 function loadModel(url){
                    fabric.loadSVGFromURL(url, function(objects, options) {
                        var model = fabric.util.groupSVGElements(objects, options);
                        model.set({ 
                          left:15,
                             top: 50,
                             scaleY: canvas.height / model.width,
                             scaleX: canvas.width / model.width,                    
                             selectable:true,
                             perPixelTargetFind:true
                           // selectable : false
                        });
                        currentModel=model;
                        renderCanvas(model);
                    });
                }


                 function changeModelColor(colorCode){
                    if (currentModel.paths) {
                        for (var i = 0; i < currentModel.paths.length; i++) {
                            currentModel.paths[i].setFill(colorCode);
                            //console.log(currentModel.paths[i]);
                      }
                      canvas.renderAll();
                    }
                }
                
                $('#myColor').change(function(e){
                    changeModelColor($(this).val());
                });

                $('#save').click(function(e){
                    $("#saveAs").modal("show");
                });

                $('#load').click(function(e){
                    $("#loadModal").modal("show");
                });

                $("#typeahead").autocomplete({
                    source: savedCanvas,
                    focus:function(event,ui){
                        $("#typeahead").val(ui.item.label);
                        return false;
                    },
                    select:function(event,ui){
                        $("#typeahead").val(ui.item.label);
                        loadObj=ui.item.value;
                        return false;
                    }
                })
            //save the canvas to json
                $("#btnSaveAs").click(function(e){
                    var txtSave=$("#txtSave").val();
                    if(txtSave=="" || txtSave==null){
                        
                    }else{
                        var json_canvas=JSON.stringify(canvas);
                        var savedObj={
                            label:txtSave,
                            value:json_canvas
                        }
                        savedCanvas.push(savedObj);
                        $("#saveAs").modal("hide");
                        canvas.clear();
                        canvas.renderAll();
                    }
                })
            //load previous canvas from json
                $("#btnLoad").click(function(e){
                    var value=$("#typeahead").val();
                    savedCanvas.forEach(function(obj){
                      if(obj.label==value){
                        console.log('hit');
                        canvas.loadFromJSON(obj.value);
                        canvas.renderAll();
                         $("#loadModal").modal("hide");
                      }
                    })
                    
                })

                /*Load the template*/
               /* fabric.loadSVGFromURL('template/short-sleeve.svg', function(objects, options) {
                     modelInitial = fabric.util.groupSVGElements(objects, options);
                    modelInitial.set({
                     left:15,
                     top: 50,
                     scaleY: canvas.height / modelInitial.width,
                     scaleX: canvas.width / modelInitial.width,                    
                     selectable:true,
                     perPixelTargetFind:true
                    });
                    if (modelInitial.paths) {
                      for (var i = 0; i < modelInitial.paths.length; i++) {
                        if(modelInitial.paths[i].getFill()=="#EE2834"){
                            modelInitial.paths[i].setFill(colorSet);
                        }
                      }
                    }
                    
                      var text =new fabric.IText('Tap and type your text',{fontSize:40 });
                    text.set({
                     selectable:true,
                     perPixelTargetFind:true
                    });

                    canvas.add(modelInitial,text);
                    canvas.renderAll();
                  });*/
                   function AddingText()
                                {
                                  //var canvas2=document.getElementById("canvas");
                                   var addText=new fabric.IText('Tap and type your text',{fontSize:40 });
                                   addText.set({
                                    left:250,
                                     selectable:true,
                                     perPixelTargetFind:true
                                       });
                                  canvas.add(addText);
                                  canvas.renderAll();
                                }
                                document.getElementById("AddText").addEventListener('click',AddingText,false);


                /*Upload Images */
                 $('#file-input').change(function(e) {
                var file = e.target.files[0],
                    imageType = /image.*/;
                
                if (!file.type.match(imageType))
                    return;
                
                var reader = new FileReader();
                reader.onload = fileOnload;
                reader.readAsDataURL(file);
                
                 });
              
              function fileOnload(e) {
                
                         var imgObj = new Image();
                      imgObj.src = event.target.result;
                      imgObj.onload = function () {
                        var image = new fabric.Image(imgObj);
                        image.set({
                              angle: 0,
                              padding: 10,
                              cornersize:10,
                              height:110,
                              width:110,
                        });
                        canvas.centerObject(image);
                        canvas.add(image);
                        canvas.renderAll();
                      }
                         
                 }
                          

                /*Get Color code*/
               /* function changeColor()
                {

              
                x="#00000";
                  if (modelInitial.paths) {

                      for (var i = 0; i < modelInitial.paths.length; i++) {
                        if(modelInitial.paths[i].getFill()=="#EE2834"){
                            modelInitial.paths[i].setFill(x);

                        }
                      }
                    } 

                    
                
                    canvas.renderAll();
                }
               
                document.getElementById("myColor").addEventListener('click',changeColor,false); */

                /*Downlaod canvas as Png to local storage*/
                function dlCanvas()
                 {

                  var dt = canvas.toDataURL('image/png');
                  /* Change MIME type to trick the browser to downlaod the file instead of displaying it */
                  dt = dt.replace(/^data:image\/[^;]*/, 'data:application/octet-stream');

                  /* In addition to <a>'s "download" attribute, you can define HTTP-style headers */
                  dt = dt.replace(/^data:application\/octet-stream/, 'data:application/octet-stream;headers=Content-Disposition%3A%20attachment%3B%20filename=DevinsDesigner.png');

                  this.href = dt;
                };
                            document.getElementById("dl").addEventListener('click', dlCanvas, false);

                            /*Delete individual canvas objects*/
                            var deleteSelectedObject = document.getElementById('DeleteCanvas');
                            deleteSelectedObject.onclick = function()
                            {
                            if(canvas.getActiveGroup()){
                                  canvas.getActiveGroup().forEachObject(function(o){ canvas.remove(o) });
                                  canvas.discardActiveGroup().renderAll();
                                } else {
                                  canvas.remove(canvas.getActiveObject());
                                }
                            };
             function toggle()
                      {
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
                document.getElementById("toogleBtn").addEventListener('click',toggle,false);
              /*Show and Hide canvas elements */
              function showHidefunc()
              {
                canvas.clear();
                var elementID=document.getElementById("shirtPage");
                 loadModel('../css/template/short-sleeve.svg');

                //var elementTshirtId=document.getElementById("");
                var elementIDDwnBtn=document.getElementById("buttonDownload");
                if(elementID.style.display=="none" )
                {
                  elementID.style.display="block";
                }
                else
                {
                  elementID.style.display="block"
                }

                if(elementIDDwnBtn.style.display=="none" )
                {
                  elementIDDwnBtn.style.display="block";
                }
                else
                {
                  elementIDDwnBtn.style.display="block"
                }
              }
              function shirtLoad()
              {
                canvas.clear();
                 var elementID=document.getElementById("shirtPage");
                  loadModel('../css/template/grey-t-shirt-template.svg');

                var elementIDDwnBtn=document.getElementById("buttonDownload");
                  if(elementID.style.display=="none" )
                {
                  elementID.style.display="block";
                }
                else
                {
                  elementID.style.display="block"
                }

                if(elementIDDwnBtn.style.display=="none" )
                {
                  elementIDDwnBtn.style.display="block";
                }
                else
                {
                  elementIDDwnBtn.style.display="block"
                }
              }
              function shortLoad()
              {
                canvas.clear();
                 var elementID=document.getElementById("shirtPage");
                  loadModel('../css/template/white-shorts.svg');

                  var elementIDDwnBtn=document.getElementById("buttonDownload");
                  if(elementID.style.display=="none" )
                {
                  elementID.style.display="block";
                }
                else
                {
                  elementID.style.display="block"
                }

                if(elementIDDwnBtn.style.display=="none" )
                {
                  elementIDDwnBtn.style.display="block";
                }
                else
                {
                  elementIDDwnBtn.style.display="block"
                }

              }
              function capLoad()
              {
                canvas.clear();
                 var elementID=document.getElementById("shirtPage");
                  loadModel('../css/template/cap.svg');

                  var elementIDDwnBtn=document.getElementById("buttonDownload");
                  if(elementID.style.display=="none" )
                {
                  elementID.style.display="block";
                }
                else
                {
                  elementID.style.display="block"
                }

                if(elementIDDwnBtn.style.display=="none" )
                {
                  elementIDDwnBtn.style.display="block";
                }
                else
                {
                  elementIDDwnBtn.style.display="block"
                }
              }
              document.getElementById("selectShirt").addEventListener('click',showHidefunc,false);
              document.getElementById("selectTshirt").addEventListener('click',shirtLoad,false);
               document.getElementById("selectshort").addEventListener('click',shortLoad,false);
                document.getElementById("selectCap").addEventListener('click',capLoad,false);


            }
         )();
        