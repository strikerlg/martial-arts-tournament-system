{config_load file=test.conf section="setup"}
{include file="header.tpl"}

<div id="main_pane">

<h1>Edit Competitor</h1>

{if $access_denied}
	Access Denied: {$access_denied}
{else}

	<div id="primary_{$level}">
	<p>
	{$primary}
	</p>
	</div>
	
	<div id="error_string">
	<p>
	{section name=error_list loop=$error_string}
	{$error_string[error_list]}</br>
	{/section}
	</p>
	</div>
	
	<div id="command">
	<p>
	{$command}
	</p>
	</div>
	
	
	
	{if $delete_success}
	
	{else}
	<form action="{$SCRIPT_NAME}" method="post" enctype="multipart/form-data">
		
		<table border="1">
			<tr>
		        <td>ID</td>
		        <td>{$competitor.ID}<input type="hidden" name="ID" value="{$competitor.ID}"></td>
		    </tr>
		    <tr>
		        {if $user_access == "admin"}
		        <td>Enrolment State</td>
		        <td><select name="Enrolment">
		        	<option value="Registered" {if $competitor.ENROLMENT == "Registered"} selected="selected"{/if}>Registered</option>
		        	<option value="Signed_In" {if $competitor.ENROLMENT == "Signed_In"} selected="selected"{/if}>Signed In</option>
		        	<option value="Scratched" {if $competitor.ENROLMENT == "Scratched"} selected="selected"{/if}>Scratched</option>	        	
		        	<option value="Diqualified" {if $competitor.ENROLMENT == "Disqualified"} selected="selected"{/if}>Disqualified</option>	        	
		        	</select>
		        {else}
		        <td>Enrolment State</td>
		        <td><input type="hidden" name="Enrolment" value="{$competitor.ENROLMENT}">{$competitor.ENROLMENT}</td>
		        {/if}
		    </tr>		    
		   <tr>
		        <td>Title</td>
		        <td><input type="text" name="Title" value="{$competitor.TITLE}" size="10"></td>
		    </tr>	    
		   <tr>
		        <td>First Name</td>
		        <td><input type="text" name="First Name" value="{$competitor.FIRST_NAME}" size="40"></td>
		    </tr>
		    <tr>
		        <td>Middle Name</td>
		        <td><input type="text" name="Middle Name" value="{$competitor.MIDDLE_NAME}" size="40"></td>
		    </tr>
		    <tr>
		        <td>Last Name</td>
		        <td><input type="text" name="Last Name" value="{$competitor.LAST_NAME}" size="40"></td>
		    </tr>
		    <tr>
		        <td>Date of Birth</td>
		        <td>{html_select_date prefix='DOB_' time=$competitor.DOB start_year=$DOB_start end_year=$DOB_end field_order='DMY'}</td>
		    </tr>
		    <tr>
		        <td>Weight (kg)</td>
		        <td><input type="text" name="Weight" value="{$competitor.WEIGHT}" size="40"></td>
		    </tr>    
		    <tr>
		        <td>Height (cm)</td>
		        <td><input type="text" name="Height" value="{$competitor.HEIGHT}" size="40"></td>
		    </tr>	    
		    <tr>
		        <td>Rank</td>
		        <td>{html_options name=Rank size=1 options=$rank_list selected=$rank_selection}</td>
	  	    </tr>
		    <tr>
		        <td>Represents</td>
		        <td>{html_options name=Represents size=1 options=$represents_list selected=$represents_selection}</td>
	  	    </tr>  	        	 
		    <tr>
		        <td>Phone</td>
		        <td><input type="text" name="Phone" value="{$competitor.PHONE}" size="40"></td>
		    </tr>
		    <tr>
		        <td>Gender</td>
		        <td><select name="Gender"><option value="Male" {if $competitor.GENDER == "Male"} selected="selected"{/if}>Male</option>
		        			<option value="Female" {if $competitor.GENDER == "Female"} selected="selected"{/if}>Female</option></select>
		        </td>
		    </tr>
		    <tr>
		        <td>Red Card (Bai Rui Only)</td>
		        <td><input type="text" name="RedCard" value="{$competitor.RED_CARD}" size="40"></td>
		    </tr>	    
		    <tr>
		        <td>Comments</td>
		        <td><textarea cols="50" rows="4" name="Comments">{$competitor.COMMENTS}</textarea></td>
		    </tr>
		    <tr>
		        <td>Events</br>(Hold down CTRL to </br>select multiple events.)</td>
		        <td>{html_options name=Events[] size=6 multiple=true options=$events_list selected=$events_selection}</td>
		    </tr>
		    <tr>
		        <td>Team Events</br>(These are set by </br>adding the competitor to a team.)</td>
		        <td>{html_options name=Team_Events[] size=6 multiple=true options=$team_events_list selected=$events_selection disabled=true}</td>
		    </tr>	    	
		    <tr>
		        <td>Amount Owed ($) (incl GST)</td>
		        <td>{$competitor.OWED_AMOUNT}</td>
		    </tr>
		    <tr>
		        <td>Amount Paid ($) (incl GST)</td>
		        <td>{if $user_access == "admin"} <input type="text" name="Paid_Amount" value="{$competitor.PAID_AMOUNT}" size="10">{else} {$competitor.PAID_AMOUNT}<input type="hidden" name="Paid_Amount" value="{$competitor.PAID_AMOUNT}"> {/if}</td>
		    </tr>	    
		    <tr>
		        <td>Last Updated</td>
		        <td>{$competitor.LAST_UPDATED}</td>
		    </tr>	    	    	    
		    <tr>
		        <td colspan="2" align="center"><input type="submit" value="Submit" name="Submit">&nbsp;&nbsp;<input type="submit" value="Delete" name="Delete">&nbsp;&nbsp;or <a href="edit_competitor.php?ID=new">Add New Competitor</a></td>
		    </tr>
	
	</form>
	{/if}

{/if}

{include file="footer.tpl"}

</body>

