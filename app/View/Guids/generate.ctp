<table>
<?php
	$i = 0;
	foreach( $uuids as $uuid ){
		$uuid = preg_replace( '/\-/' , '' , $uuid );
		$numeric = preg_replace( '/[a-z]/' , '' , $uuid );
		?>
		<tr>
			<td><?php echo $uuid; ?></td>
			<td><?php echo $numeric; ?></td>
		</tr>
		<?php
	}
?>
</table>