//tk3

function loadDoc_tk3() {

    solicitud("conf/tk3.php?valor=mem", function(value) {
        // console.log(Number(value.total/1024/1024).toFixed(0));
        document.getElementById('TK3_alert').setAttribute('data-background-color', 'blue');
        document.getElementById("TK3_nombre").innerHTML = "TK3";
        document.getElementById("TK3_used").innerHTML = Number(value.used/1024/1024).toFixed(0) + " MB";
        document.getElementById("TK3_total").innerHTML = Number(value.total/1024/1024).toFixed(0) + " MB";
        document.getElementById("TK3_percent").innerHTML = value.percent + " %";


    }, function(error) {
        document.getElementById('TK3_alert').setAttribute('data-background-color', 'red');
        document.getElementById("TK3_nombre").innerHTML = "TK3 Desconectado";
        console.log(error);
    })
    
    solicitud("conf/tk3.php?valor=cpu", function(value) {
        // console.log(Number(value.free/1024/1024).toFixed(0));
        document.getElementById("TK3_cpu_load").innerHTML = value.total + " %";
        if (value.total > 90) {
            document.getElementById('TK3_cpu_load').setAttribute('data-background-color', 'red');
            
        }else if(value.total > 50){
            document.getElementById('TK3_cpu_load').setAttribute('data-background-color', 'orange');

        }else{
            document.getElementById('TK3_cpu_load').setAttribute('data-background-color', 'blue');
        }

    }, function(error) {
        console.log(error);
    })

    solicitud("conf/tk3.php?valor=load", function(value) {
        // console.log(Number(value.min1/1024/1024).toFixed(0));
        document.getElementById("TK3_load_total").innerHTML = value.min1;

    }, function(error) {
        console.log(error);
    })


}