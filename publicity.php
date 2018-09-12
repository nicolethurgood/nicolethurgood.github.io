<!--
<style type="text/css">
	#publicity_container {
		width:600px;
		border:1px solid #000000;
		padding:3px;
		margin-bottom:10px;
	}
	#publicity_title {
		font-size:24px;
		font-weight:bold;
	}
	#publicity_left {
		float:left;
		margin-left:5px;
		margin-top:7px;
		width:377px;
	}
	#publicity_right {
		float:right;
		border:1px solid #000000;
		margin-right:3px;
		margin-top:7px;
		padding:5px;
		padding-top:0px;
		width:200px;
	}
</style>
-->
<p><a href="javascript:window.print();">Print Form</a></p>
<? $event_query = "SELECT event_name AS `name`, start AS `begin`, end AS `end`, location AS `location`, alt_location AS `altLocation`, description AS `description`, organization AS `group` FROM sf_events_new WHERE id = 90 LIMIT 1");
$event_result = mysql_query($event_query);
while ($event = mysql_fetch_assoc($event_result)) { ?>
	<div id="publicity_container">
		<div id="publicity_title"><? echo $event['name']; ?> (Spring Festival)</div>
		<div id="publicity_left">
			<p><strong>Presented By:</strong> <? echo $event['group']; ?><br />
			<strong>Event Begins at:</strong> <? echo date("l, F j, Y g:i A",$event['begin']); ?><br />
			<strong>Event Ends at:</strong> <? echo date("l, F j, Y g:i A",$event['end']); ?><br />
			<strong>Location:</strong> <? echo $event['location']; ?><br />
			<strong>Alternate Location:</strong> <? echo $event['altLocation']; ?></p>
		</div>
		<div id="publicity_right">
			<p class="bold">Description:</p>
			<p><? echo preg_replace("[\r]","<br />",$event['description']); ?></p>
		</div>
		<div class="clear"></div>
	</div>
<? } //end $event = mysql_fetch_assoc($event_result) WHILE ?>