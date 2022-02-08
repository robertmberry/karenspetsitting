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



// $_SESSION['yn'] = $_POST['yn'];
// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $startdate = $_POST['startdate'];
// $enddate = $_POST['enddate'];
// $message = $_POST['message'];