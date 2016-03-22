<table border=1>
	<tr>
		<td>Parameter</td>
		<td>Nilai Awal</td>
		<td>Nilai Setimbang</td>
		<td>Keterangan</td>
	</tr>
	<tr>
		<td>R</td>
		<td><?php echo $r_awal;?></td>
		<td><?php echo $r ;?></td>
		<td>
			<?php 
				foreach($keterangan_r as $show){
					echo $show."<br>";
				}
			?>
		</td>	
	</tr>
	<tr>
		<td>S</td>
		<td><?php echo $s_awal;?></td>
		<td><?php echo $s ;?></td>
		<td>
			<?php 
				foreach($keterangan_s as $show){
					echo $show."<br>";
				}
			?>
		</td>	
	</tr><tr>
		<td>T</td>
		<td><?php echo $t_awal;?></td>
		<td><?php echo $t ;?></td>
		<td>
			<?php 
				foreach($keterangan_t as $show){
					echo $show."<br>";
				}
			?>
		</td>	
	</tr>	
</table>

