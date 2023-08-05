<!DOCTYPE html>
<html>
<head>
	<title>Cetak Surat panggilan</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
	<center>
		<table>
			<tr>
				<td></td>
				<td>
				<center>
					<img src="{{ asset('foto/logo.png') }}" height="90"><br>
					<font size="4" style="font-style: italic; font-family: sans-serif;">PONDOK PESANTREN "SALAFIYAH SYAFI'IYAH" SUKOREJO </font><br>
					<font size="5" style="font-style: italic; font-family: Times New Roman"><b>BIDANG KEPESANTRENAN DAN PU</b></font><br>
					<font size="2" style="font-style: italic; font-family: verdana;">SUMBEREJO BANYUPUTIH SITUBONDO JAWA TIMUR</font><br>
					<font size="2" style="font-family: calibri;"><i>Akte Notaris No. 4/25.08.1970 & No. 3/05.07.2001</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		
		</table>
		{{-- @foreach ($data as $d ) --}}
			
		<table>
			<tr>
				<td>Perihal</td>
				<td width="564"><i> : Panggilan Ubudiyah</i></td>
			</tr>
			<tr>
				<td>Kepada</td>
				<td width="564"></td>
			</tr>
			<tr>
				<td>Yth</td>
				<td width="564"><i> : Ketua Kamar</i></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td>
					<font>Asrama</font>
				</td>
				<td> : {{ $data->asrama }}</td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">di -<br></font>
						</td>
					</tr>
					<tr>
						<td style="text-indent: 25px;">
							<span>Sukorejo</span>
						</td>
					</tr>
		</table>
		<br>
		<table width="625">
				<tr>
		      <td>
			     <font size="2"><b>Assalamu'alaikum wr.wb</b><br>Bersama Surat ini, kami mohon kepada Ustadz untuk menyuruh anak didiknya,</font>
		      </td>
		    </tr>
				<tr>
					<td>
						<font size="2">Agar Melakukan pembinaan di kantor ubudiyah,</font>
					</td>
				</tr>
				<tr>
					<td>
						<font size="2"><i>Pukul 20:30 s/d 22:30 WIB,</i>,</font>
					</td>
				</tr>
		</table>

		</table>
		<table>
			<tr class="text2">
				<td>Nama</td>
				<td width="541">: <b>{{ $data->nama_santri }}</b> <b></b></td>
			</tr>
			<tr class="text2">
				<td>Pelanggaran</td>
				<td width="541">: {{ $data->jenis_pelanggaran }} <b></b></td>
			</tr>
			<tr class="text2">
				<td>Tanggal</td>
				<td width="541">: {{ $data->tgl }} <b></b></td>
			</tr>
			<tr class="text2">
				<td>Waktu</td>
				<td width="541">: {{ $data->waktu }} <b></b></td>
			</tr>
		</table>
		{{-- @endforeach --}}
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Demikian atas kerjasamanya, Jazakumullahu Khairan
							<br><br><b>Wassalamu'alaikum wr.wb.</b>
</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">Kasubag Ubudiyah<br><br><br><br>Ahmad Fauzan, S.pd.i</td>
			</tr>
	     </table>
	</center>
</body>
</html>