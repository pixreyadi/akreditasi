var semuaId = '';
var semuaValidasi = '';
var kebenaranValidasi=true;
var jumlah_form_array = 0;
var form_array = new Array();
var setButtonId = new Array();
var berhenti = false;
function funcValidasi(cekJenis,nameVal){
	if(cekJenis=="required"){
		if(document.getElementById(nameVal).value.trim()==""){
			document.getElementById(nameVal+"_validasi").innerHTML="Tidak boleh kosong";
			kebenaranValidasi=false;
			berhenti=true;
		}
		else{
				document.getElementById(nameVal+"_validasi").innerHTML="";
		}
	}
	else if(cekJenis=="digit"){
		
	}
	else if(cekJenis=="email"){
		var atpos = document.getElementById(nameVal).value.indexOf("@");
		var dotpos = document.getElementById(nameVal).value.lastIndexOf(".");
		if(atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById(nameVal).value.length){
			document.getElementById(nameVal+"_validasi").innerHTML="E-Mail tidak valid";
			kebenaranValidasi=false;
			berhenti=true;
		}
		else{
			document.getElementById(nameVal+"_validasi").innerHTML="";
		}
	}
	else if(cekJenis=="tanggal"){
		var strip_pertama = document.getElementById(nameVal).value.indexOf("-");
		var strip_kedua = document.getElementById(nameVal).value.lastIndexOf("-");
		if(strip_pertama<1 || strip_kedua<strip_pertama+2 || strip_kedua+2>=document.getElementById(nameVal).value.length){
			document.getElementById(nameVal+"_validasi").innerHTML="Tanggal tidak valid";
			kebenaranValidasi=false;
			berhenti=true;
		}
		else{
			var pecahTanggal = document.getElementById(nameVal).value.split("-");
			var tgl = pecahTanggal[0]+"-";
			var bln = pecahTanggal[1]+"-";
			var thn = pecahTanggal[2]+"-";
			if(tgl.length!=3 || bln.length!=3 || thn.length!=5){
				document.getElementById(nameVal+"_validasi").innerHTML="Tanggal tidak valid";
				kebenaranValidasi=false;
				berhenti=true;
			}
			else{
				if(pecahTanggal[0]>31 || pecahTanggal[1]>12){
					document.getElementById(nameVal+"_validasi").innerHTML="Tanggal tidak valid";
					kebenaranValidasi=false;
					berhenti=true;
				}
				else{
					if((pecahTanggal[1]==04 || pecahTanggal[1]==06 || pecahTanggal[1]=="09" || pecahTanggal[1]==11) && pecahTanggal[0]>30){
						document.getElementById(nameVal+"_validasi").innerHTML="Tanggal tidak valid";
						kebenaranValidasi=false;
						berhenti=true;
					}
					else{
						if(pecahTanggal[1]==02 && pecahTanggal[2]%4!=0 && pecahTanggal[0]>28){
							document.getElementById(nameVal+"_validasi").innerHTML="Tanggal tidak valid";
							kebenaranValidasi=false;
							berhenti=true;
						}
						else if(pecahTanggal[1]==02 && pecahTanggal[2]%4==0 && pecahTanggal[0]>29){
							document.getElementById(nameVal+"_validasi").innerHTML="Tanggal tidak valid";
							kebenaranValidasi=false;
							berhenti=true;
						}
						else{
							document.getElementById(nameVal+"_validasi").innerHTML="";
						}

					}
					
				}
			}
		}
	}
	else{
		var getName = cekJenis.split("=");
		if(getName[0]=="minlength"){
			if(document.getElementById(nameVal).value.length<Number(getName[1])){
				document.getElementById(nameVal+"_validasi").innerHTML="Minimal "+getName[1]+" Karakter";
				kebenaranValidasi=false;
				berhenti=true;
			}
			else{
				document.getElementById(nameVal+"_validasi").innerHTML="";
			}
		}
		else if(getName[0]=="maxlength"){
			if(document.getElementById(nameVal).value.length>Number(getName[1])){
				document.getElementById(nameVal+"_validasi").innerHTML="Maksimal "+getName[1]+" Karakter";
				kebenaranValidasi=false;
				berhenti=true;
			}
			else{
				document.getElementById(nameVal+"_validasi").innerHTML="";
			}
		}
		else if(getName[0]=="cPassword"){
			if(document.getElementById(nameVal).value!=document.getElementById(getName[1]).value){
				document.getElementById(nameVal+"_validasi").innerHTML="Konfirmasi harus sama";
				kebenaranValidasi=false;
				berhenti=true;
			}
			else{
				document.getElementById(nameVal+"_validasi").innerHTML="";
			}
		}
	}
}
function validasi(paramId,jenisValidasi){
	semuaId = semuaId+','+paramId;
	semuaValidasi = semuaValidasi+','+jenisValidasi;
	$("#"+paramId).keyup(function(event){
		var txt = $("#"+paramId).val();
		getValidasi = jenisValidasi.split("|");
		for(var i=0;i<getValidasi.length;i++){
			berhenti = false;
			funcValidasi(getValidasi[i],paramId);
			if(berhenti==true){
				break;
			}
		}
		if(event.keyCode==13 && document.getElementById(paramId).tagName!="textarea" && document.getElementById(paramId).type!="textarea"){
			var getId = semuaId.split(",");
			for(var i=0;i<form_array.length;i++){
				for(var x=1;x<form_array[i].length;x++){
					if(paramId==form_array[i][x]){
						document.getElementById(form_array[i][x+1]).focus();
					}
				}
			}
		}
	});
	$("#"+paramId).blur(function(){
		var txt = $("#"+paramId).val();
		getValidasi = jenisValidasi.split("|");
		for(var i=0;i<getValidasi.length;i++){
			berhenti = false;
			funcValidasi(getValidasi[i],paramId);
			if(berhenti==true){
				break;
			}
		}
	});
}
function tombol(btn,form_name){
	document.getElementById(btn).type="button";
	form_array[jumlah_form_array] = new Array();
	setButtonId[jumlah_form_array] = btn;
	var getId = semuaId.split(",");
	var sJenisValidasi = semuaValidasi.split(",");
	var jsonData = '';
	for(var i=0;i<getId.length;i++){
		form_array[jumlah_form_array][i]=getId[i];
		if(i==0){
			continue;
		}
		if(i==1){
			jsonData='{"name":"'+getId[i]+'","data":"'+document.getElementById(getId[i]).value+'","validasi":"'+sJenisValidasi[i]+'"}';
		}
		else{
			jsonData=jsonData+',{"name":"'+getId[i]+'","data":"'+document.getElementById(getId[i]).value+'","validasi":"'+sJenisValidasi[i]+'"}';
		}
	}
	if(document.getElementById(btn).type=="button"){
		$("#"+btn).click(function(){
			return kirim(form_name,jsonData,btn);
		});
	}
	form_array[jumlah_form_array][form_array[jumlah_form_array].length]=btn;
	semuaId = '';
	semuaValidasi = '';
	jumlah_form_array++;
}

function kirim(form_name,jsonData,btn){
	kebenaranValidasi=true;
	var jsonDecode = eval("["+jsonData+"]");
	for(var i=0;i<jsonDecode.length;i++){
		var jenisValidasi = jsonDecode[i].validasi.split('|');
		for(var x=1;x<jenisValidasi.length;x++){
			berhenti = false;
			funcValidasi(jenisValidasi[x],jsonDecode[i].name);
			if(berhenti==true){
				break;
			}
		}
	}
	if(kebenaranValidasi==true){
		document.getElementById(btn).type="submit";
		document.getElementById(form_name).submit();
	}
}
function bukanNomor(evt){
	 var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode >= 48 && charCode <= 57)
        return false;
        return true;
}
function nomor(evt){
	 var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode >= 48 && charCode <= 57 || charCode==8)
        return true;
        return false;
}