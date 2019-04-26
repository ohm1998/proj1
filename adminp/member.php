<h2>Add Member</h2>

<form action="./add_member.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	<label>Name:</label>
	<input type="text" name="name"><br><br>
	Upload Photo:
	<input type="file" name="photo"><br>
	Date Of Birth:
	<input type="date" name="dob"><br>
	Age:
	<input type="text" name="age"><br>
	Address:
	<textarea name="address"></textarea><br>
	Contact:
	<input type="text" name="contact"><br>
	Pan Id No:
	<input type="text" name="panid"><br>
	Email:
	<input type="email" name="email"><br>
	Occupation/Qualification(Mention Stream & Semester):
	<textarea name="occ"></textarea><br>
	If currently in school, include name of school, grade and course of study:
	<textarea name="school"></textarea><br>
	Are you a current member of any other Animal Welfare Society/Club in India or Abroad? If so please mention the club and status:
	<input type="text" name="currclub"><br>
	SOCIETY:
	<input type="text" name="society"><br>
	Status:
	<input type="text" name="status"><br>
	Are you existing member of PFA Durg-Bhilai Unit II: (YES/NO) If Yes, then share your Membership Number:
	<input type="text" name="memnum"><br>
	<table>
		<thead>
			<tr>
				<th>Membership Type</th>
				<th>Membership Fee</th>
				<th>Benefits</th>
				<th>Duration</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Half Yearly</td>
				<td>600</td>
				<td>ID Cards for 6 months</td>
				<td>6M</td>
				<td><input type="radio" name="mem_type" value="6m"></td>
			</tr>
			<tr>
				<td>Yearly</td>
				<td>1200</td>
				<td>ID Cards for 1 Year</td>
				<td>12M</td>
				<td><input type="radio"  name="mem_type" value="12m"></td>
			</tr>
		</tbody>
	</table><br>
	<label>Area Of Interest:</label>
	<input type="checkbox" value="Field" name="aoi[]" value="">
	<label>1. Field</label>
	<input type="checkbox" value="EVent Participation" name="aoi[]" value="">
	<label>2. Event Participation</label>
	<input type="checkbox" value="HR" name="aoi[]" value="">
	<label>3. HR</label>
	<input type="checkbox" value="Donation" name="aoi[]" value="">
	<label>4. Donation</label>
	Rules:
	1) Field- Must attend (come for help) at least 2 cases in a month or help in Foster home management/cleaning at least twice a month.
   Note- This does not require any trained first aid specialiation. Any 3-4 people can come together and take the animal to our recommended vet. Expenses will be paid by PFA.
2) Event – Must conduct or attend at least 1 event in a month. E.g. Awareness campaign, Adoption camp, sterilization drive, Plantation drives etc.
3)HR- Attend calls, Attend Public meetings, Follow up on adopters, Sponsors, Donors, Members etc, Public speaking and giving presentations etc.
4) Donation- If not able to contribute any of the above activities, please donate any small amount every month apart from membership fees.



<label>I understand that People for Animals Durg-Bhilai unit-II reserves the right to terminate my membership status as a result of any of the following	
</label>
<div class="tandc">
	⦁	Any abuse or mistreatment of any animal
⦁	Failure to comply with organization policies, rules and other regulations
⦁	Unsatisfactory attitude, work or appearance
⦁	Any other circumstances which, in judgement of President/ Secretary would make my continued service as a member
⦁	Hold absolutely confidential information that I may obtain concerning clients animals and staff. I understand that an intentional or unintentional violation of confidentiality may result in 
disciplinary action, including termination by PFA Durg-Bhilai unit-II and/or legal action by other


<input type="checkbox" name="agree" value="1">

I have read and understood each of above conditions. My signature below indicates that I agree to comply with them.

</div>

<input type="submit" value="Submit" required>

</form>
<?php 


session_start();
//echo $_SESSION['curr_page_class'];
$_SESSION['curr_page_class'] = '.add_member';

?>