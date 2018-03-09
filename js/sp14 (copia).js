//SP14

function loadDoc_sp14() {
 var xmlhttpMem = new XMLHttpRequest();
xmlhttpMem.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var mem = JSON.parse(this.responseText);
        //document.getElementById("sd01_used").innerHTML = mem.used.toFixed(1) / 1000 / 1000 + " MB";
        var memU = mem.used / 1024 / 1024;
		var memF = mem.free / 1024 / 1024;
		var memT = mem.total / 1024 / 1024;

		document.getElementById("sp14_used").innerHTML = memU.toFixed(0) + " MB";
		document.getElementById("sp14_free").innerHTML = memF.toFixed(0) + " MB";
		document.getElementById("sp14_total").innerHTML = memT.toFixed(0) + " MB";
        if (mem.percent > 90) {
            // setting data-foo
            var mempercent = document.getElementById('sp14_used');
            mempercent.setAttribute('data-background-color', 'red');
        }

        
    }
};
xmlhttpMem.open("GET", "http://192.168.4.112:61208/api/2/mem", true);
xmlhttpMem.send();

var cpu = null;
var xmlhttpCpu = new XMLHttpRequest();
xmlhttpCpu.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        cpu = JSON.parse(this.responseText);
        document.getElementById("sp14_cpu_load").innerHTML = cpu.total + " %";
         if (cpu.total > 90) {
            // setting data-foo
            var estado = document.getElementById('sp14_alerta');
            estado.setAttribute('data-background-color', 'red');
}
    }
};
xmlhttpCpu.open("GET", "http://192.168.4.112:61208/api/2/cpu", true);
xmlhttpCpu.send();



var xmlhttpLoad = new XMLHttpRequest();
xmlhttpLoad.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var load = JSON.parse(this.responseText);
        document.getElementById("sp14_load_total").innerHTML = load.min1;
    }
};
xmlhttpLoad.open("GET", "http://192.168.4.112:61208/api/2/load", true);
xmlhttpLoad.send();


}

