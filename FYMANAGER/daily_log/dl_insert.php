<!DOCTYPE html>
<script>
var Flr= document.getElementById('flr');
var Tarikh= document.getElementById('date');
var Mat_n= document.getElementById('mat_n');
var Mat_q= document.getElementById('mat_q');
var Funds= document.getElementById('funds');
var Per_comp= document.getElementById('per_comp');

function add(addata){
const ss = SpreadSheetApp.getActiveSpreadSheet();
const ws = ss.getSheetByName("daily_log");
ws.appendRow([addata.flr,addata.date,addata.mat_n,addata.mat_q,addata.funds,paddata.er_comp]);
}



</script>
</html>