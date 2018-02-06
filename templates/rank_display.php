
<div id="rankred" class="pretty_font" style="color:red">
	<div style="font-size:40px">Red Player</div>
	<br>
	<?php	
		$length = count($ranks,COUNT_NORMAL);
		for($i = 1;$i<$length;$i++)
		{
			$element=$ranks[$i];
			$j=$i;
			while($j>0 && $ranks[$j-1]["red"]<$element["red"])
			{
				$ranks[$j]=$ranks[$j-1];
				$j = $j -1;
				$ranks[$j]=$element;
			}
		}
	?>
	<div style="font-size:20px">
		<table>
			<tr>
			<td width="600" height="50">Username</td>
			<td width="600" height="50">Wins</td>
			</tr>
			<?php $i = 0; ?>			
			<?php foreach($ranks as $rank): ?>
			<?php if (($i%2) == 0): ?>
			<tr bgcolor="#98FB98">
			<td width="600" height="50"><?= $rank["name"]?></td>
			<td width="600" height="50"><?= $rank["red"]?></td>
			</tr>
			<?php $i++ ?>
			<?php else: ?>
			<tr bgcolor="#E1FFFF">
			<td width="600" height="50"><?= $rank["name"]?></td>
			<td width="600" height="50"><?= $rank["red"]?></td>
			</tr>
			<?php $i++ ?>
			<?php endif; ?>
			<?php endforeach; ?>
		</table>
	</div>
	
</div>
<div id="rankblue" style="color:blue" class="pretty_font">
	<div style=" font-size:40px">Blue Player</div>
	<br>
	<?php	
		$length = count($ranks,COUNT_NORMAL);
		for($i = 1;$i<$length;$i++)
		{
			$element=$ranks[$i];
			$j=$i;
			while($j>0 && $ranks[$j-1]["blue"]<$element["blue"])
			{
				$ranks[$j]=$ranks[$j-1];
				$j = $j -1;
				$ranks[$j]=$element;
			}
		}
	?>
	<div style="font-size:20px">
		<table>
			<tr>
			<td width="600" height="50">Username</td>
			<td width="600" height="50">Wins</td>
			</tr>
			<?php $i = 0; ?>			
			<?php foreach($ranks as $rank): ?>
			<?php if (($i%2) == 0): ?>
			<tr bgcolor="#98FB98">
			<td width="600" height="50"><?= $rank["name"]?></td>
			<td width="600" height="50"><?= $rank["blue"]?></td>
			</tr>
			<?php $i++ ?>
			<?php else: ?>
			<tr bgcolor="#E1FFFF">
			<td width="600" height="50"><?= $rank["name"]?></td>
			<td width="600" height="50"><?= $rank["blue"]?></td>
			</tr>
			<?php $i++ ?>
			<?php endif; ?>
			<?php endforeach; ?>
		</table>
	</div>
	
</div>
<div style="position:absolute;left:685px;top:400px;font-size:20px;"><a href="index.php">Back</a><div>
