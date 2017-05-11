<?php
require "plan.php";
$data= $_POST;
if (isset($data['generate'])) {
	$errors =  array();
	if (trim($data['Subject'])=='') {
		$errors[] = 'Enter Subject';
	}
	
	if ($data['Date']=='') {
		$errors[] = 'Enter Date';
	}
	if (trim($data['Grade']) =='') {
		$errors[] = 'Renter Grade';
	}
	if (trim($data['Number']) =='') {
		$errors[] = 'Renter Number';
	}
	if (trim($data['Aim']) =='') {
		$errors[] = 'Renter Aim';
	}
	if (trim($data['unit']) =='') {
		$errors[] = 'Renter unit';
	}
	if (trim($data['theme']) =='') {
		$errors[] = 'Renter theme';
	}
	if (trim($data['Previous']) =='') {
		$errors[] = 'Renter Previous';
	}
	if (trim($data['objectives']) =='') {
		$errors[] = 'Renter Grade';
	}
	if (trim($data['criteria']) =='') {
		$errors[] = 'Renter criteria';
	}
	if (trim($data['Language']) =='') {
		$errors[] = 'Renter Language';
	}
	if (trim($data['links']) =='') {
		$errors[] = 'Renter links';
	}
	if (trim($data['Cross']) =='') {
		$errors[] = 'Renter Cross';
	}if (trim($data['Differentiation']) =='') {
		$errors[] = 'Renter Differentiation';
	}
	
	
	
	if (trim($data['Middle']) =='') {
		$errors[] = 'Renter Middle';
	}
	if (trim($data['End']) =='') {
		$errors[] = 'Renter End';
	}
	if (trim($data['Beginning']) =='') {
			$errors[] = 'Renter Beginning';
	}
	
	if (trim($data['Reflection']) =='') {
		$errors[] = 'Renter Reflection';
	}
	if (trim($data['learning']) =='') {
		$errors[] = 'Renter learning';
	}
	if (trim($data['learnings']) =='') {
		$errors[] = 'Renter learnings';
	}
	

	if (empty($errors)) {
		$user = R::dispense('users');
		$user->Subject = $data['Subject'];
				$user->Date =$data['Date'];
		$user->Grade =$data['Grade'];
		
	$user->Number =$data['Number'];
	$user->Aim =$data['Aim'];
	$user->unit =$data['unit'];	
	$user->theme =$data['theme'];
	$user->Previous =$data['Previous'];
	$user->objectives =$data['objectives'];
	$user->criteria =$data['criteria'];
	$user->Language =$data['Language'];
	$user->links =$data['links'];
	$user->Cross =$data['Cross'];
	$user->Differentiation =$data['Differentiation'];
	$user->Beginning =$data['Beginning'];
	$user->Middle =$data['Middle'];
	$user->End =$data['End'];
	$user->Reflection =$data['Reflection'];
	$user->learning =$data['learning'];
	$user->learnings =$data['learnings'];
	
	
	

		R::store($user);
		echo '<div style="color: green;">Plan successfully generated</div><hr>';
	} else {
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Lesson Plan Maker</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta name="description" content="Make your own lesson plan in seconds and keep them coming.  An easy way to do it." />
<link rel="Shortcut Icon" href="innovation.ico" type="image/x-icon" />
<link href="http://www.teach-nology.com/css/Teachnology.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body id="SubPage">
<div id="Wrapper">
<div id="Header">
<img src="nis_logo.jpg" alt="Mountain View" style="width:150px;height:170px;">
<div id="HeaderRgt">

</div>
<div id="TopNav">
<ul>

<li><a href="/Website/login.php">Registration</a></li>
<li><a href="/Website/signup.php">Authorisationn</a></li>
<li><a href="/Website/fan.php">Lesson plan creator</a></li>
<li><a href="/Website/about.php">About us</a></li>
<li><a href="/Website/activities.php">Activities</a></li>


</ul>
</div>
</div>

<h3>Lesson Plan Maker</h3>
<form action="/Website/fan.php" method="POSt">
	<p>
		<p><strong>Subject:</strong></p>
		</p><br><select name = "Subject">
  <option name= "Math" value="Math">Math</option>
  <option name="Physics" value="Physics">Physics</option>
  <option name="GPPW" value="GPPW">GPPW</option>
  <option name="English" value="English">English</option>
  <option name="Chemistry" value="Chemistry">Chemistry</option>
  <option name="Biology" value="Biology">Biology</option>
  <option name="History" value="History">History</option>
  <option name="Critical thinking" value="Critical thinking">English</option>
</select></br>
	<p>
	</p>
	

<p>
		<p><strong>Date:</strong></p>
		 <input type="date" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" value="" data-initial-value="" name="Date"> 
	</p>
<p>
		<p><strong>	
Grade:</strong></p>
<select name ="Grade">
<option name="11A" value="11A">11A</option>
<option name="11B" value="11B">11B</option>
<option name="11C" value="11C">11C</option>
<option name="11D" value="11D">11D</option>
<option name="11E" value="11E">11E</option>
<option name="11F" value="11F">11F</option>
<option name="11G" value="11G">11G</option>
<option name="11H" value="11H">11H</option>
<option name="11I" value="11I">11I</option>
</select>
	</p>
	
	<p>
		<p><strong>Number of students:</strong></p>
		<input type="text" name="Number" >
	</p>
	<p>
		<p><strong>Professional development aim:</strong></p>
		<input type="text" name="Aim" >
	</p>
	<p>
		<p><strong>Long-term plan unit:</strong></p>
		<input type="text" name="unit" >
	</p>
	<p>
		<p><strong>Theme of the lesson:</strong></p>
		<input type="text" name="theme" >
	</p>

<p>
		<p><strong>Previous learning:</strong></p>
		<input type="text" name="Previous" >
	</p>

<p>
		<p><strong>Lesson objectives:</strong></p>
		<input type="text" name="objectives" >
	</p>
	<p>
		<p><strong>Success criteria:</strong></p>
		<input type="text" name="criteria" >
	</p>
	<p>
		<p><strong>Language objectives:</strong></p>
		<input type="text" name="Language" >
	</p>
	<p>
		<p><strong>Value links:</strong></p>
		<input type="text" name="links" >
	</p>
	<p>
		<p><strong>Cross curricular links:</strong></p>
		<input type="text" name="Cross" >
	</p>
	<p>
		<p><strong>Differentiation:</strong></p>
		<input type="text" name="Differentiation" >
	</p>
	<p>
		<p><strong>Beginning:</strong></p>
	</p><br><select name = "Beginning">
  <option name= "Casino" value="Casino">Teacher’s Casino</option>
  <option name="Yes" value="Yes">Yes/No Game</option>
  <option name="Signatures" value="Signatures">Signatures</option>
  <option name="Find" value="Find">Find someone who</option>
</select></br>
	<p>
		
	<p>
		<p><strong>Middle:</strong></p>
		<input type="text" name="Middle" >
	</p>
	<p>
		<p><strong>End:</strong></p>
		<input type="text" name="End" >
	</p>
<p><strong>Reflection

 :</strong></p>
		<input type="text" name="Reflection" >
	</p>
		<p>
		<p><strong>What two things went really well (consider both teaching and learning)?:</strong></p>
		<input type="text" name="learning" value="1.">
	</p>

		<p>
		<p><strong>What two things would have improved the lesson (consider both teaching and learning)?:</strong></p>
		<input type="text" name="learnings" value="1.">
	</p>
<p>
		<button type="submit" name="generate" >Generate lesson plan</button>
		<a href="/reg/lesson.php">получить план</a>
	</p>
</form>
</div>
</div>
</td>
</tr>
</table>
</form>
<p>&nbsp;</p>
</div>
</div>
<div id="FooterTop">


</div>
<div id="Footer">2017 <a href="fan.php">Online lesson plan creator 
<p id="NavFooter"><a href="about.php">About Us</a> 

</div>
</body>
</html>