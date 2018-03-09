//sd01

function loadDoc_sd01() {

    solicitud("conf/sd01.php?item=mem&param=percent", function(data) {
        document.getElementById("sd01_percent").innerHTML = data.value + " %";
        // console.log(Number(data.total/1024/1024).toFixed(0));
        document.getElementById('sd01_alert').setAttribute('data-background-color', 'blue');
        document.getElementById("sd01_nombre").innerHTML = "SD01";
        document.getElementById("sd01_used").innerHTML = Number(data.used/1024/1024).toFixed(0) + " MB";
        document.getElementById("sd01_total").innerHTML = Number(data.total/1024/1024).toFixed(0) + " MB";
        


    }, function(error) {
        document.getElementById('sd01_alert').setAttribute('data-background-color', 'red');
        document.getElementById("sd01_nombre").innerHTML = "SD01 Desconectado";
        console.log(error);
    })
    
    solicitud("conf/sd01.php?valor=cpu", function(data) {
        // console.log(Number(data.free/1024/1024).toFixed(0));
        document.getElementById("sd01_cpu_load").innerHTML = data.total + " %";
        if (data.total > 90) {
            document.getElementById('sd01_cpu_load').setAttribute('data-background-color', 'red');
            
        }else if(data.total > 50){
            document.getElementById('sd01_cpu_load').setAttribute('data-background-color', 'orange');

        }else{
            document.getElementById('sd01_cpu_load').setAttribute('data-background-color', 'blue');
        }

    }, function(error) {
        console.log(error);
    })

    solicitud("conf/sd01.php?item=load&param=min1", function(data) {
        // console.log(Number(data.min1/1024/1024).toFixed(0));
        document.getElementById("sd01_load_total").innerHTML = data.total.value;

    }, function(error) {
        console.log(error);
    })

}
