<?php include "inc/header.inc"; ?>
	<table>
		<tr>
			<td>Nombre</td>
			<td>Edad</td>
		</tr>
		<?php 
		foreach ($datos as $dato) {
			echo "<tr><td>".$dato['nombre']."</td>";
			echo "<td>".$dato['edad']."</td></tr>";
		}
		?>
	</table>
<?php include "inc/footer.inc"; ?>