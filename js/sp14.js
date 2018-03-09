//SP14

function loadDoc_sp14() {

    solicitud("conf/sp14.php?valor=mem", function(value) {
        // console.log(Number(value.total/1024/1024).toFixed(0));
        document.getElementById('sp14_alert').setAttribute('data-background-color', 'blue');
        document.getElementById("sp14_nombre").innerHTML = "SP14";
        document.getElementById("sp14_used").innerHTML = Number(value.used/1024/1024).toFixed(0) + " MB";
        document.getElementById("sp14_total").innerHTML = Number(value.total/1024/1024).toFixed(0) + " MB";
        document.getElementById("sp14_percent").innerHTML = value.percent + " %";


    }, function(error) {
        document.getElementById('sp14_alert').setAttribute('data-background-color', 'red');
        document.getElementById("sp14_nombre").innerHTML = "SP14 Desconectado";
        console.log(error);
    })
    
    solicitud("conf/sp14.php?valor=cpu", function(value) {
        // console.log(Number(value.free/1024/1024).toFixed(0));
        document.getElementById("sp14_cpu_load").innerHTML = value.total + " %";
        if (value.total > 90) {
            document.getElementById('sp14_cpu_load').setAttribute('data-background-color', 'red');
            
        }else if(value.total > 50){
            document.getElementById('sp14_cpu_load').setAttribute('data-background-color', 'orange');

        }else{
            document.getElementById('sp14_cpu_load').setAttribute('data-background-color', 'blue');
        }

    }, function(error) {
        console.log(error);
    })

    solicitud("conf/sp14.php?valor=load", function(value) {
        // console.log(Number(value.min1/1024/1024).toFixed(0));
        document.getElementById("sp14_load_total").innerHTML = value.min1;

    }, function(error) {
        console.log(error);
    })


}
