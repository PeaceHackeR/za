// Script //
var r = 255, // Red tint (0-255)
    g = 0, // Green tint (0-255)
    b = 255, // Blue tint (0-255)
    t = 0.6, // Tint strength (0-1)
    i;

// Hex to RGB
function hexToRgb(color) {
    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    color = color.replace(shorthandRegex, function (m, r, g, b) {
        return r + r + g + g + b + b;
    });

    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(color);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : {
        r: 0,
        g: 0,
        b: 0
    };
}

var canvas,stage;
var img,_wd,_he;
var imglay;
var spot_arr = [];
var update = true;

function init() {
    img = new Image();
    img.onload = appInit;
    img.src = document.getElementById("faceUser").dataset.src;
}
function appInit(){
    //
    canvas = document.getElementById('myStage');
    canvas.height = 260;
    //img.width = 1024;
    //img.height = img.height*1024/img.width;
    stage = new createjs.Stage(canvas);
    createjs.Touch.enable(stage);
    //
    var model_mc = new createjs.Bitmap(img);
    model_mc.alpha = 1;
    _wd = model_mc.getBounds().width;
    _he = model_mc.getBounds().height;
    model_mc.x = sessionStorage.zaPx;
    model_mc.y = sessionStorage.zaPy;
    model_mc.scaleX = sessionStorage.zaWd/_wd;
    model_mc.scaleY = model_mc.scaleX;
    stage.addChild(model_mc);
    //
    var _lip = new createjs.Container();
    stage.addChild(_lip);
    //dragger.x = canvas.width / 2;
    //dragger.y = canvas.height / 2;
    //dragger.setBounds(0,0,4,4);
    //
    for(var i = 0; i< 6 ; i++){
        var _obj = drawPlot();
        _obj.x = canvas.width*0.5;
        _obj.y = canvas.height*0.5;
        _lip.addChild(_obj);
        _obj.on("mousedown", function (evt) {
            this.parent.addChild(this);
            this.alpha = 0.6;
            this.offset = {
                x: this.x - evt.stageX,
                y: this.y - evt.stageY
            };
        });
        _obj.on("pressup", function (evt) {
            this.alpha = 1;
            //
            scanDot();
            update = true;
        });
        _obj.on("pressmove", function (evt) {
            this.x = evt.stageX + this.offset.x;
            this.y = evt.stageY + this.offset.y;
            // indicate that the stage should be updated on the next tick:
            update = true;
        });
        spot_arr[i] = _obj;
    }
    function scanDot(){
        var _c0,_c1,_c2,_c3,_c4,_c5;
        var _minX = 0,
            _maxX = 0,
            _maxY = 0;
        for(var i = 0; i<6; i++){
            if(_maxY<spot_arr[i].y){
                _maxY = spot_arr[i].y;
                _c5 = i;
            }
        }
        for(var i = 0; i<6; i++){
            if(i==_c5) continue;
            
        }
    }
    //
    stage.update();
    stage.enableMouseOver(10);
    stage.mouseMoveOutside = true;
    //
    var Px = 320,
        Py = 289;
    var ctx = document.getElementById('myStage').getContext('2d'),
        imgx = ctx.getImageData(Px, Py, 106, 47),
        data = imgx.data,
        len = data.length;
    var pr,pg,pb,avg;
    
    for (i = 0; i < len; i+= 4) {
        if(data[i+3] === 0) continue;
        pr = data[i];
        pg = data[i+1];
        pb = data[i+2];
        avg = (pr+pg+pb)/3 >>> 0;
        data[i] = data[i] * (1 - t) + (r * t);
        data[i+1] = data[i+1] * (1 - t) + (g * t);
        data[i+2] = data[i+2] * (1 - t) + (b * t);
        if(1){
            data[i] = avg * (1 - t) + (r * t);
            data[i+1] = avg * (1 - t) + (g * t);
            data[i+2] = avg * (1 - t) + (b * t);
        }
        if(1){
            data[i] = avg*r/255;
            data[i+1] =  avg*g/255;
            data[i+2] =  avg*b/255;
        }
        data[i+3]; //data[i] = data[i++] * 1 + 0; << skip alpha component. Adjust as needed.
        data[i] = data[i+1] = data[i+2] = avg;
    }
    
    ctx.putImageData(imgx, Px, Py);
    ctx.globalCompositeOperation = "source-atop";
    ctx.globalAlpha = 0.7; // you may want to make this an argument
    ctx.fillStyle   = "#FF00FF";
    ctx.fillRect(Px, Py, 106, 47);
    // reset
    ctx.globalCompositeOperation = "source-over";
    ctx.globalAlpha = 1.0;
    //
    //
    /*
    var tracker = new tracking.ObjectTracker(['face','mouth']);
    tracker.setStepSize(1.7);
    tracking.track(img,tracker)
    tracker.on('track',function(evt){
        evt.data.forEach(function(rect){
            console.log(rect.x+","+rect.y+":"+rect.width+","+rect.height)
            var mm = drawRect(bg_mc.scaleX*rect.x,bg_mc.scaleX*rect.y,bg_mc.scaleX*rect.width,bg_mc.scaleX*rect.height);
            _lip.addChild(mm);
        });
    })
    */
    //
    createjs.Ticker.addEventListener("tick", tick);
}
function stop() {
    createjs.Ticker.removeEventListener("tick", tick);
}
function drawPlot() {
    var s = new createjs.Shape();
    var g = s.graphics;

    //Head
    g.setStrokeStyle(0.5);
    g.beginStroke("#999");
    g.beginFill("#FFF");
    g.drawCircle(0, 0, 4);
    s.cursor = "pointer";
    return s;
}
function drawRect(x,y,w,h){
    var s = new createjs.Shape();
    var g = s.graphics;
    //
    g.beginStroke("#ff0000");
    g.drawRect(x,y,w,h);
    return s;
}
function tick(event) {
    if (update) {
        update = false; // only update once
        stage.update(event);
    }
}