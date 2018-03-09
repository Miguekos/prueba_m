//SN03

function loadDoc_sn03() {

    solicitud("conf/sn03.php?valor=mem", function(value) {
        // console.log(Number(value.total/1024/1024).toFixed(0));
        // document.getElementById('pruebasn03').setAttribute('class', 'col-md-4');
        document.getElementById('sn03_alert').setAttribute('data-background-color', 'blue');
        document.getElementById("sn03_nombre").innerHTML = "SN03";
        document.getElementById("sn03_used").innerHTML = Number(value.used/1024/1024).toFixed(0) + " MB";
        document.getElementById("sn03_total").innerHTML = Number(value.total/1024/1024).toFixed(0) + " MB";
        document.getElementById("sn03_percent").innerHTML = value.percent + " %";


    }, function(error) {
        document.getElementById('sn03_alert').setAttribute('data-background-color', 'red');
        document.getElementById("sn03_nombre").innerHTML = "SN03 Desconectado";
        // document.getElementById('pruebasn03').setAttribute('class', 'col-md-4 filterDiv Normal');
        console.log(error);
    })
    
    solicitud("conf/sn03.php?valor=cpu", function(value) {
        // console.log(Number(value.free/1024/1024).toFixed(0));
        document.getElementById("sn03_cpu_load").innerHTML = value.total + " %";
        if (value.total > 90) {
            document.getElementById('sn03_cpu_load').setAttribute('data-background-color', 'red');
            
        }else if(value.total > 50){
            document.getElementById('sn03_cpu_load').setAttribute('data-background-color', 'orange');

        }else{
            document.getElementById('sn03_cpu_load').setAttribute('data-background-color', 'blue');
        }

    }, function(error) {
        console.log(error);
    })

    solicitud("conf/sn03.php?valor=load", function(value) {
        // console.log(Number(value.min1/1024/1024).toFixed(0));
        document.getElementById("sn03_load_total").innerHTML = value.min1;

    }, function(error) {
        console.log(error);
    })


}
