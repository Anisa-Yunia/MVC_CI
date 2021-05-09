<div class="col-md-12">
	<h3>
		Daftar Pasien
	</h3>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>nilai BMI</th>
				<th>Status BMI</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$nomor=1;
				foreach ($list_bmi as $bmi) {
			?>
			<tr>
				<td><?=$nomor?></td>
				<td><?=$bmi->kode?></td>
				<td><?=$bmi->nama?></td>
				<td><?=$bmi->gender?></td>
				<td><?=$bmi->nilaiBMI?></td>
				<td><?=$bmi->statusBMI?></td>
			</tr>
			<?php
				$nomor++;
				}
			?>
		</tbody>
	</table>
</div>