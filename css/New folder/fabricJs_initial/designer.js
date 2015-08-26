 (function(){


                var canvas=new fabric.Canvas('canvas');
              
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
      /*  var $img = $('<img>', { src: e.target.result });
        var canvas = $('#canvas')[0];
        var context = canvas.getContext('2d');

        $img.load(function() {
            context.drawImage(this, 0, 0);
        });*/
          
    }
                
                  var myText="res";
                 var colorSet = '#00FFFF';
                fabric.loadSVGFromURL('template/ss.svg', function(objects, options) {
                    var model = fabric.util.groupSVGElements(objects, options);
                    model.set({
                     left:15,
                     top: 50,
                     scaleY: canvas.height / model.width,
                     scaleX: canvas.width / model.width,                    
                     selectable:true,
                     perPixelTargetFind:true
                    });
                    if (model.paths) {
                      for (var i = 0; i < model.paths.length; i++) {
                        if(model.paths[i].getFill()=="#EE2834"){
                            model.paths[i].setFill(colorSet);
                        }
                      }
                    }

                   
    /*
                  fabric.Image.fromURL('template/superMan.jpg',function(img){
                    var img1=img;
                    img.set({
                      left:20,
                      top:20
                    });
                    canvas.add(img1);
                  });*/
                   //var dataURL = canvas.toDataURL('png');
                    canvas.add(model);
                    canvas.renderAll();
                
                });
                 var text =new fabric.IText('tap and type',{fontSize:40 });
                    text.set({
                     selectable:true,
                     perPixelTargetFind:true
                    });
                    canvas.add(text);
                    canvas.renderAll();
            /*Saving as png into local storage*/ 
                $("#canvas2png").click(function(){
                 canvas.isDrawingMode = false;

                    if(!window.localStorage){alert("This function is not supported by your browser."); return;}
                      // to PNG
                      window.open(canvas.toDataURL('png'));

                  });



                function dlCanvas() {

                                  var dt = canvas.toDataURL('image/png');
                                  /* Change MIME type to trick the browser to downlaod the file instead of displaying it */
                                  dt = dt.replace(/^data:image\/[^;]*/, 'data:application/octet-stream');

                                  /* In addition to <a>'s "download" attribute, you can define HTTP-style headers */
                                  dt = dt.replace(/^data:application\/octet-stream/, 'data:application/octet-stream;headers=Content-Disposition%3A%20attachment%3B%20filename=DevinsDesigner.png');

                                  this.href = dt;
                                };
                            document.getElementById("dl").addEventListener('click', dlCanvas, false);


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

            }
         )();
        