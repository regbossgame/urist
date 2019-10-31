
function start(id,k){
	
		id.style.opacity=1;//(k/10);
		//id.style.filter='alpha(opacity=100)';
		id.style.filter = 'alpha(opacity=100)';
		
		//setTimeout('id.style.opacity=1',800);
		//k++;
		//if (k<=5){setTimeout('start('+id+','+k+');',100);}
}

var msgi;
var mod1;

function showmod(id,sh){
	mod1=document.getElementById('mod'+id);
	back1=document.getElementById('back1');
	if (sh==1){
	back1.style.display='block';
	mod1.style.opacity=1;
	
	mod1.style.top='15%';
	}else{
		back1.style.display='none';
		mod1.style.opacity=0;
		mod1.style.top='-500px';
	
		
	}
	
}


function msgan(k){
	msgi=document.getElementById('msgi');
	msgi.style.opacity=(Math.cos((k/180.0)*3.1416))*0.900;
//	msgi.style.top=(Math.cos((k/180.0)*3.1416))*0.900;
	k+=30;
	if (k>3600){k=0;}
	a50=30;
	if (k%720==0){a50=6000;}
	setTimeout('msgan('+k+');',a50);
	
}