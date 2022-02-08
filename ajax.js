$.ajax({
	url:'data.json',
	type:'get',
	cache:false,
	dataType:'json',
	success:function(jsondata){
		for(x in jsondata){
			console.log(jsondata[x]);
			$("#form").prepend(`
				<h2>${jsondata[x].date}</h2>
				<p>${jsondata[x].report}</p>
				<hr>
			`);
		}
	}
});