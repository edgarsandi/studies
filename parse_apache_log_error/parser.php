<?php
exec('tail error.log', $output);
?>
<Table border="1">
    <tr>
        <th>Date</th>
        <th>Type</th>
        <th>Client</th>
        <th>Message</th>
    </tr>
<?php
    foreach($output as $line) {
    	// sample line: [Wed Oct 01 15:07:23 2008] [error] [client 76.246.51.127] PHP 99. Debugger->handleError() /home/gsmcms/public_html/central/cake/libs/debugger.php:0
    	preg_match('~^\[(.*?)\]~', $line, $date);
    	if(empty($date[1])) {
    		continue;
    	}
    	preg_match('~\] \[([a-z]*?)\] \[~', $line, $type);
    	preg_match('~\] \[client ([0-9\.]*)\]~', $line, $client);
    	preg_match('~\] (.*)$~', $line, $message);
    	?>
    <tr>
        <td><?php echo $date[1]?></td>
        <td><?php echo $type[1]?></td>
        <td><?php echo $client[1]?></td>
        <td><?php echo $message[1]?></td>
    </tr>
    	<?php
    }
?>
</table>