//tk4

function loadDoc_tk4() {

    solicitud("conf/tk4.php?valor=mem", function(value) {
        // console.log(Number(value.total/1024/1024).toFixed(0));
        document.getElementById('TK4_alert').setAttribute('data-background-color', 'blue');
        document.getElementById("TK4_nombre").innerHTML = "TK4";
        document.getElementById("TK4_used").innerHTML = Number(value.used/1024/1024).toFixed(0) + " MB";
        document.getElementById("TK4_total").innerHTML = Number(value.total/1024/1024).toFixed(0) + " MB";
        document.getElementById("TK4_percent").innerHTML = value.percent + " %";


    }, function(error) {
        document.getElementById('TK4_alert').setAttribute('data-background-color', 'red');
        document.getElementById("TK4_nombre").innerHTML = "TK4 Desconectado";
        console.log(error);
    })
    
    solicitud("conf/tk4.php?valor=cpu", function(value) {
        // console.log(Number(value.free/1024/1024).toFixed(0));
        document.getElementById("TK4_cpu_load").innerHTML = value.total + " %";
        if (value.total > 90) {
            document.getElementById('TK4_cpu_load').setAttribute('data-background-color', 'red');
            
        }else if(value.total > 50){
            document.getElementById('TK4_cpu_load').setAttribute('data-background-color', 'orange');

        }else{
            document.getElementById('TK4_cpu_load').setAttribute('data-background-color', 'blue');
        }

    }, function(error) {
        console.log(error);
    })

    solicitud("conf/tk4.php?valor=load", function(value) {
        // console.log(Number(value.min1/1024/1024).toFixed(0));
        document.getElementById("TK4_load_total").innerHTML = value.min1;

    }, function(error) {
        console.log(error);
    })


}