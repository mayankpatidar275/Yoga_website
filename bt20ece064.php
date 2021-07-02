<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Guru</title>
    <link rel="stylesheet" href="bt20ece064.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        .container2 {
    position: relative;
    background: url(clock.png) no-repeat;
    background-size: 100%;
    height: 30vw;
    width: 30vw;
    margin: auto;
    border: solid #30a830cc 1.1vw;
    border-radius: 30vw;
    /* background-color: black; */
}
#hhand, #mhand, #shand {
    position: absolute;
    background-color: #30a830cc;
    transform-origin: bottom;
    border-radius: 50%;
    z-index: 1;
}
#hhand {
    height: 22%;
    width: 2.5%;
    top: 28%;
    left: 48.5%;
}
#mhand {
    height: 31%;
    width: 2.35%;
    top: 19%;
    left: 48.5%;
}
#shand {
    height: 38%;
    width: 1.5%;
    top: 12%;
    left: 49.1%;    
}
#digital{
    display: flex;
    justify-content: center;
    position: relative;
    top: 30%;
    font-size: 2.88vw;
}
    </style>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
<script language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			cell2.innerHTML = rowCount + 1;

			var cell3 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "text";
			element2.name = "txtbox[]";
			cell3.appendChild(element2);


		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}

	</script>
</head>
<body>
    <div class="container">
        <div class="nav">
            <div class="logo"><p> <span>Yoga</span> Guru</p></div>
            <div class="navigation"><ul>
                <li><a href="home.html"> Home</a></li>
                <li><a href="about.html">About</a> </li>
                <li><a href="contact.html">Contact</a> </li>
                <li><a href="bt20ece064_reg.php">Register</a> </li>
                <li><a href="bt20ece064_login.php">Login</a> </li>
            </ul></div>
        </div>
        <div class="welcome">
            
             With our 3D animations <br>

              take your yoga practice to the next level.
           
        </div>
    </div>
    <div class="welcome2"><span> Welcome</span></div>

    <div class="services"> 
        <div class="animation content"><img src="bt20ece064_3d_animation.jpg" alt="animation"><span> 3D Animation</span> 3D animations along with 3D models and images for better interection.</div>
        <div class="personal content"><img src="bt20ece064_personal.jpg" alt="personal"><span> Personal</span> personalised guidance by the best yoga experts. </div>
        <div class="meditation content"><img src="bt20ece064_meditation.jpg" alt="meditation"><span> Meditation </span>meditation is the way to clean our body internally</div>
    </div>
    <div class="sample">
        <div class="box1">Simply the largest library of 3D yoga poses</div>
    <div class="box2"> <iframe width="560" height="315" src="https://www.youtube.com/embed/bU0A-UwHHpU?start=51" title="YouTube video player" ></iframe></div>
</div> 
<div class="table">
<input type="button" value="Add Row" onclick="addRow('dataTable')" />

	<input type="button" value="Delete Row" onclick="deleteRow('dataTable')" />

	<table id="dataTable" width="350px" >
		<tr>
			<td><input type="checkbox" name="chk"/></td>
			<td> 1 </td>
			<td> <input type="text" /> </td>
		</tr>
	</table>
</div> 
<h2>To do list ===></h2>
<div class="subscription">
    <span>Subscription Plans</span>
    <div class="table">
    <table>
        <tr >
            <th class="head">Months(valid for)</th>
            <th>Fees</th>
        </tr>
        <tr>
            <td>3 months</td>
            <td>600 Rs</td>
        </tr>
        <tr>
            <td>2 months</td>
            <td>450 Rs</td>
        </tr>
        <tr>
            <td>1 months</td>
            <td>300 Rs</td>
        </tr>
    </table>
</div>
<div class="more"><a href="membership.html">Know more</a></div>
</div>
<div class="container2">
        <div id="hhand"></div>
        <div id="mhand"></div>
        <div id="shand"></div>
        <div id="digital">time is</div>
    </div>
<div class="contact">
    <span>Contact</span> 
    <p>Got a question? We'd love to here from you!</p>
    <div class="call">
        <div class="icon"><img src="bt20ece064_phone.ico" alt="L"></div>
        <div class="number">
            <h3>Call me</h3>
            <p>8959050275</p>
        </div>
    </div>
    <div class="call">
        <div class="icon"><img src="bt20ece064_email.ico" alt="L"></div>
        <div class="number">
            <h3>E-mail</h3>
            <p><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">mayankpatidar@gmail.com</a> </p>
        </div>
    </div>
    <div class="call">
        <div class="icon"><img src="bt20ece064_linkedin.ico" alt="L"></div>
        <div class="number">
            <h3><a href="https://www.linkedin.com/in/mayank-patidar-b09613202">Linkedin</a> </h3>
            
        </div>
    </div>
</div>
<footer class="footer">
    Copyright © 2021 | Kellie Yoga | Privacy Policy | Website by HealthHosts
</footer>
<script>
    setInterval(() => {
    d = new Date();
    htime = d.getHours();
    mtime = d.getMinutes();
    stime = d.getSeconds();
    hrotation = 30*htime + mtime/2;
    mrotation = 6*mtime;
    srotation = 6*stime;
    
    hhand.style.transform = `rotate(${hrotation}deg)`;
    mhand.style.transform = `rotate(${mrotation}deg)`;
    shand.style.transform = `rotate(${srotation}deg)`;
    if(stime<10){
        stime = `0${stime}`;
    }
    if(mtime<10){
        mtime = `0${mtime}`;
    }
    if(htime<10){
        htime = `0${htime}`;
    }
    document.getElementById("digital").innerHTML = `${htime} : ${mtime} : ${stime}` ;
}, 1000);

</script>
</body>
</html>