<script src="script/validarFiguras.js"></script>
<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
</head>
<?php
	abstract class figura{

		//Atributos

		private $tipo;
		private $area; //area
		private $perimetro; //perimetro


		public static function get_form(){
			$html = '
			<body background=red>
			<form name="figuras" method="POST" action="" >
			<table border=0 align="center" class="table table-info">
				<tr>
					<th colspan="2" class="text-center">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select class="form-select" id="tipo" name="tipo" OnChange="validarLados()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input class="form-control" type="text" id="lado_1" name="lado_1"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input class="form-control" type="text" id="lado_2" name="lado_2"size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input class="form-control" type="text" id="lado_3" name="lado_3"size="4" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input class="btn btn-outline-secondary form-control" type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>
			<body/>';
			return $html;
		}

		
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>