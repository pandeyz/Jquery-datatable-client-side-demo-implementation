<html>
	<head>
		<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		
		<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {
            var data = [];
            data.push(
                [1,"Sasha","Brenna","0800 1111"],
                [2,"Sage","Mia","(01012) 405872"],
                [3,"Chelsea","Allistair","076 0578 0265"],
                [4,"Uta","Savannah","070 1247 5884"],
                [5,"Remedios","Berk","0995 181 0007"],
                [6,"Ruby","Wayne","0800 1111"],
                [7,"Faith","Fredericka","(01709) 099879"],
                [8,"Myra","Harrison","070 4241 9576"],
                [9,"Drake","Miriam","0800 733635"],
                [10,"Reed","Shannon","076 8597 5067"]
            );
             
            $('#data_table').DataTable( {
                data:           data,
                deferRender:    true,
                scrollY:        200,    // Y scroll fix to 200px
                scrollCollapse: true,
                scroller:       true
            });
        });
		</script>
		
		<style>
		.odd{
			background-color: #FFF8FB !important;
		}
		.even{
			background-color: #DDEBF8 !important;
		}
		</style>
	</head>
	<body>
	<div>

	<table id="data_table">
		<thead>
			<tr>
				<th>Emp Code</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Mobile</th>
			</tr>
		</thead>

		<tbody>
		<!-- Dynamic Body -->
		</tbody>
	</table>

	</body>
	</div>
</html>