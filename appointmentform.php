
	<?php
		session_start();
		$_SESSION['prev_page'] = 'appointments.php';
		$errors = null;
		// echo "login_status: " .$_SESSION['login_status'];
		if (isset($_GET['errors']) )
		{
			$e = $_GET['errors'];
			$errors = str_split($e);
			// print_r($errors);
		}

	?>
	<?php
	if($errors[0] == '1') {
		echo '
		<div class="error-warning" style="color:red;">
		Please login in order to create and appointment.
		</div>
		';
	}
	if($errors[1] == '1') {
		echo '
		<div class="error-warning" style="color:red;">
		Error creating appointment.
		</div>
		';
	}
	if($errors[0] == '0' && $errors[1] == '0') {
		echo '
		<div class="success-warning" style="color:green;">
		Appointment created successfully.
		</div>
		';
	}
	?>
	<form action="create_appointment.php" method="post">
		<div>
			<h3><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Available Hours</h3>
			<label>Hour  </label>
			<select id="hour" name="hour" title="hour">
				<!-- <option value="00">12 a.m. (midnight)</option>
				<option value="01">1 a.m.</option>
				<option value="02">2 a.m.</option>
				<option value="03">3 a.m.</option>
				<option value="04">4 a.m.</option>
				<option value="05">5 a.m.</option>
				<option value="06">6 a.m.</option>
				<option value="07">7 a.m.</option>
				<option value="08">8 a.m.</option>-->
				<option value="09">9 a.m.</option>
				<option value="10">10 a.m.</option>
				<option value="11">11 a.m.</option>
				<option value="12">12 p.m. (noon)</option>
				<option value="13">1 p.m.</option>
				<option value="14">2 p.m.</option>
				<option value="15">3 p.m.</option>
				<!-- <option value="16">4 p.m.</option>
				<option value="17">5 p.m.</option>
				<option value="18">6 p.m.</option>
				<option value="19">7 p.m.</option>
				<option value="20">8 p.m.</option>
				<option value="21">9 p.m.</option>
				<option value="22">10 p.m.</option>
				<option value="23">11 p.m.</option> -->
			</select>
			<label>  Minute  </label>
			<select id="minute" name="minute" title="minute">
				<option value="00" >00</option>
				<option value="10" >10</option>
				<option value="20" >20</option>
				<option value="30" >30</option>
				<option value="40" >40</option>
				<option value="50" >50</option>
			</select>
		</div>
		<br>
		<div>
			<h3><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Available Dates</h3>
			<label>Month  </label>
			<select id="month" name="month" title="month">
				<option value="01">Jan</option>
				<option value="02">Feb</option>
				<option value="03">Mar</option>
				<option value="04">Apr</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">Aug</option>
				<option value="09">Sep</option>
				<option value="10">Oct</option>
				<option value="11">Nov</option>
				<option value="12">Dec</option>
			</select>
			<label>  Day  </label>
			<select id="day" name="day" title="day">
				<option value="01" >1</option>
				<option value="02" >2</option>
				<option value="03" >3</option>
				<option value="04" >4</option>
				<option value="05" >5</option>
				<option value="06" >6</option>
				<option value="07" >7</option>
				<option value="08" >8</option>
				<option value="09" >9</option>
				<option value="10" >10</option>
				<option value="11" >11</option>
				<option value="12" >12</option>
				<option value="13" >13</option>
				<option value="14" >14</option>
				<option value="15" >15</option>
				<option value="16" >16</option>
				<option value="17" >17</option>
				<option value="18" >18</option>
				<option value="19" >19</option>
				<option value="20" >20</option>
				<option value="21" >21</option>
				<option value="22" >22</option>
				<option value="23" >23</option>
				<option value="24" >24</option>
				<option value="25" >25</option>
				<option value="26" >26</option>
				<option value="27" >27</option>
				<option value="28" >28</option>
				<option value="29" >29</option>
				<option value="30" >30</option>
				<option value="31" >31</option>
			</select>
			<label>  Year  </label>
			<select id="year" name="year" title="year">
				<option value="2017">2017</option>
				<option value="2018">2018</option> 
			</select>
		</div>

		<br>
		<div>
			<h3><i class="fa fa-smile-o" aria-hidden="true"></i>&nbsp; Which Service?</h3>
			<label>Procedure</label><br/>
			<select id="type" name="type" title="type">
				<option name="option" value="Bonding">Bonding</option>
				<option name="option" value="Braces">Braces</option>
				<option name="option" value="Bridges">Bridges</option>
				<option name="option" value="Crowns">Crowns</option>
				<option name="option" value="Whitening">Whitening</option>
				<option name="option" value="Extractions">Extractions</option>
			</select>
		</div>
		<br>
		<button type="submit" class="createbtn"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp; Schedule Appointment</button>

	</form>
