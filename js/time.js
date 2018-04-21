 var activeup =false;   
    var activedown =false; 
        function start_countup(){
        if(activeup){
        var timer = document.getElementById("timer_up").innerHTML;
        var arr=timer.split(":");
        var hour=arr[0];
        var min=arr[1];
        var sec=arr[2];
        if(sec==59){
            if(min==59){
                hour++;
                min=0;
                
                if(hour<10)hour= "0" + hour;
            }else{
                min++;
            }
            if(min<10)min= "0" +min;
            sec=0;
        }else{
            sec++;
            if (sec<10) sec="0" +sec;
        }
        document.getElementById("timer_up").innerHTML = hour+":"+min+":"+sec;
        setTimeout(start_countup,1000);
         
    }
}

    function changeState_up(){
    if(activeup == false){
        activeup = true;
        start_countup();
        console.log("Timer has been started");
        document.getElementById("control_up").innerHTML="PAUSE";
    }else{
        activeup=false;
        console.log("Timer is on pause");
        document.getElementById("control_up").innerHTML="START";
    }
}
    
    function start_countdown(){
        if(activedown){
        var timer = document.getElementById("timer_down").innerHTML;
        var arr=timer.split(":");
        var hour=arr[0];
        var min=arr[1];
        var sec=arr[2];
        if(sec==0){
            if(min==0){
                if(hour==0){
                    alert("Time out");
                    return;
                }
                hour--;
                min=60;
                if(hour<10)hour= "0" + hour;
            }
            min--;
            if(min<10)min= "0" +min;
            sec=59;
        }
        else sec--;
        
        if (sec<10) sec="0" +sec;
        
        document.getElementById("timer_down").innerHTML = hour+":"+min+":"+sec;
        setTimeout(start_countdown,1000);
        
        }
    
    }
    

 
    
    
    function changeState_down(){
    if(activedown == false){
        activedown = true;
        start_countdown();
        console.log("Timer has been started");
        document.getElementById("control_down").innerHTML="PAUSE";
    }else{
        activedown=false;
        console.log("Timer is on pause");
        document.getElementById("control_down").innerHTML="START";
    }
}    
    
    
    function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    var time =  h + ":" + m;
    document.getElementById('txt').innerHTML =time  + ":" + s;
    var t = setTimeout(startTime, 500);
    return time;
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

    function showTime(){
        var time = startTime();
        return time;
    }
    
    function countTime(){
    var h = 0;
    var m = 0;
    var s = 0;
    m = checkTime(m);
    s = checkTime(s);
    var time =  h + ":" + m;
    document.getElementById('count').innerHTML =time  + ":" + s;
    var t = setTimeout(startTime, 500);
        
        
        
        
    }

    function reset(){
        activeup=false;
    document.getElementById("timer_up").innerHTML = "00"+":"+"00"+":"+"00";
    console.log("Timer has been reset");
        document.getElementById("control_up").innerHTML="START";
        
}
    
            function getValue(time,form){
            var myElement = document.getElementById(time);
            document.getElementById(form).submit();
        }
        
        




    