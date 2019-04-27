<div class="page-header">
<h1>Add Member</h1>      
</div>
<form action="./add_member.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

	<div class="form-group">
  		<label for="name">Name:</label>
	  	<input type="text" class="form-control" name="name">
	</div>
	<div class="custom-file">
	    <input type="file" class="custom-file-input" name="photo" aria-describedby="inputGroupFileAddon01">
	    <label class="custom-file-label" for="inputGroupFile01">Upload Photo</label>
    </div>
	<div class="form-group">
  		<label for="dob"><br>Date Of Birth:</label>
	  	<input type="date" class="form-control" name="dob">
	</div>
	<div class="form-group">
  		<label for="age">Age</label>
	  	<input type="number" class="form-control" name="age">
	</div>
	<div class="form-group">
  		<label for="address">Address:</label>
	  	<textarea class="form-control" name="address"></textarea>
	</div>
	<div class="form-group">
  		<label for="contact">Contact:</label>
	  	<input type="text" class="form-control" name="contact">
	</div>
	<div class="form-group">
  		<label for="panid">Pan Id No:</label>
	  	<input type="text" class="form-control" name="panid">
	</div>
	<div class="form-group">
  		<label for="email">Email:</label>
	  	<input  type="email" name="email" class="form-control" >
	</div>
	<div class="form-group">
  		<label for="occ">Occupation/Qualification(Mention Stream & Semester):</label>
	  	<textarea class="form-control" name="occ"></textarea>
	</div>
	<div class="form-group">
  		<label for="school">If currently in school, include name of school, grade and course of study:</label>
	  	<textarea class="form-control" name="school"></textarea>
	</div>
	<div class="form-group">
  		<label for="currclub">Are you a current member of any other Animal Welfare Society/Club in India or Abroad? If so please mention the club and status:</label>
	  	<input type="text" class="form-control" name="currclub">
	</div>
	<div class="form-group">
  		<label for="society">SOCIETY:</label>
	  	<input type="text" class="form-control" name="society">
	</div>
	<div class="form-group">
  		<label for="status">Status:</label>
	  	<input type="text" class="form-control" name="status">
	</div>
	<div class="form-group">
  		<label for="memnum">Are you existing member of PFA Durg-Bhilai Unit II: (YES/NO) If Yes, then share your Membership Number::</label>
	  	<input type="text" class="form-control" name="memnum">
	</div>

	<div class="form-group">
		<label for="mem_type">Choose Memebership Type:</label>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Select</th>
					<th>Membership Type</th>
					<th>Membership Fee</th>
					<th>Benefits</th>
					<th>Duration</th>
				</tr>
			</thead>
			<tbody>
				<tr onclick="document.getElementById('member1').checked = true;">
					<td><input type="radio" id="member1" name="mem_type" value="6m"></td>
					<td>Half Yearly</td>
					<td>600</td>
					<td>ID Cards for 6 months</td>
					<td>6M</td>					
				</tr>
				<tr onclick="document.getElementById('member2').checked = true;">
					<td><input type="radio" id="member2" name="mem_type" value="12m"></td>
					<td>Yearly</td>
					<td>1200</td>
					<td>ID Cards for 1 Year</td>
					<td>12M</td>					
				</tr>
			</tbody>
		</table>
	</div>

	<br>

	<div class="form-group">
  		<label for="aoi">Choose area Of Interest:</label>
	  	<label class="checkbox-inline"><input type="checkbox" value="Field" name="aoi[]">&nbspField</label>
		<label class="checkbox-inline"><input type="checkbox" value="EVent Participation"  name="aoi[]">&nbspEvent Participation</label>
		<label class="checkbox-inline"><input type="checkbox" value="HR" name="aoi[]">&nbspHR</label> 
		<label class="checkbox-inline"><input type="checkbox" value="Donation" name="aoi[]">&nbspDonation</label> 
	</div>


  <ol class="list-group">
  	<li class="list-group-item list-group-item-info">Rules</li>
    <li class="list-group-item">Field- Must attend (come for help) at least 2 cases in a month or help in Foster home management/cleaning at least twice a month.<br>
   	<b>Note:</b> This does not require any trained first aid specialiation. Any 3-4 people can come together and take the animal to our recommended vet. Expenses will be paid by PFA.</li>
    <li class="list-group-item">Event – Must conduct or attend at least 1 event in a month. E.g. Awareness campaign, Adoption camp, sterilization drive, Plantation drives etc.</li>
    <li class="list-group-item">HR- Attend calls, Attend Public meetings, Follow up on adopters, Sponsors, Donors, Members etc, Public speaking and giving presentations etc.</li>
    <li class="list-group-item">Donation- If not able to contribute any of the above activities, please donate any small amount every month apart from membership fees.</li>
  </ol>

<br><br>
	<div class="tandc">
	  <ul class="list-group">
	  	<li class="list-group-item list-group-item-success">I understand that People for Animals Durg-Bhilai unit-II reserves the right to terminate my membership status as a result of any of the following:</li>
	    <li class="list-group-item">Any abuse or mistreatment of any animal</li>
	    <li class="list-group-item">Failure to comply with organization policies, rules and other regulations</li>
	    <li class="list-group-item">Unsatisfactory attitude, work or appearance</li>
	    <li class="list-group-item">Any other circumstances which, in judgement of President/ Secretary would make my continued service as a member</li>
	    <li class="list-group-item">Hold absolutely confidential information that I may obtain concerning clients animals and staff. I understand that an intentional or unintentional violation of confidentiality may result in disciplinary action, including termination by PFA Durg-Bhilai unit-II and/or legal action by other</li>
	  </ul>	
	</div>
	<br>
	<div class="form-group">
	  	<label class="checkbox-inline"><input type="checkbox" value="1" name="agree">&nbspI have read and understood each of above conditions. My signature below indicates that I agree to comply with them.</label>
	</div>


	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Submit" required>
	</div>

</form>

<?php 
session_start();
//echo $_SESSION['curr_page_class'];
$_SESSION['curr_page_class'] = '.add_member';

?>