Birthday: 
	<select name="month">
	<option value="0">Select Month</option>
	<?php
		for( $m = 1; $m <= 12; $m++ ) {
			$num = str_pad( $m, 2, 0, STR_PAD_LEFT );
			$month = date( 'F', mktime( 0, 0, 0, $m + 1, 0, 0, 0 ) );
//if the above code won't work, you may try this:
//$month =  date("F", mktime(0, 0, 0, $m, 1));
			?>
				<option value="<?php echo $num; ?>"><?php echo $month; ?></option>
			<?php
		}
	?>
	</select>
	<select name="day">
	<option value="0">Select Day</option>
	<?php
		for( $a = 1; $a <= 31; $a++ ) {
			?>
				<option value="<?php echo $a; ?>"><?php echo $a; ?></option>
			<?php
		}
	?>
	</select>
	<select name="year">
	<option value="0">Select Year</option>
	<?php