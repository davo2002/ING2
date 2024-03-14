<?php


	$pdf = new FPDF	('P','mm','Letter');
	$pdf->SetMargins(17,17,17);
	$pdf->AddPage();

	# Logo de la empresa formato png #
	$pdf->Image('./assets/fondo/favicon.jpg',165,12,35,35,'jpg');

	# Encabezado y datos de la empresa #
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(32, 100, 210);
	$pdf->Cell(150, 10, strtoupper($nombre_empresa), 0, 0); // Utiliza el dato $nombre_empresa
	
	$pdf->Ln(9);

	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(150,9,utf8_decode("NIT: ".$nit),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,utf8_decode("Direccion: ".$direccion_empresa." ".$ciudad),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,utf8_decode("Teléfono: ".$telefono),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,utf8_decode("Email: ".$correo),0,0,'L');

	$pdf->Ln(10);

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(30,7,utf8_decode("Fecha de emisión:"),0,0);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(116,7,utf8_decode(date("d/m/Y", strtotime($fecha))." ".date("h:s A")),0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(35,7,utf8_decode(strtoupper("Factura Nro.")),0,0,'C');

	$pdf->Ln(7);

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(12,7,utf8_decode("Cajero:"),0,0,'L');
	$pdf->SetTextColor(97,97,97);
	$nombrea=$this->session->admins->nombre;
	$snombre=$this->session->admins->snombre;
	$spallido=$this->session->admins->sapellido;
	$documentoa=$this->session->admins->cedula;
	$correoa=$this->session->admins->correo;
	$telefonoa=$this->session->admins->telefono;
	$apellidoa=$this->session->admins->apellido;
	$pdf->Cell(134,7,utf8_decode($nombrea." ".$snombre." ".$apellidoa),0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(35,7,utf8_decode(strtoupper($codigo)),0,0,'C');

	$pdf->Ln(5);
	$pdf->Cell(8,7,utf8_decode("Documento: ".$documentoa),0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetTextColor(97,97,97);
	$pdf->Ln(5);

	$pdf->Cell(60,7,utf8_decode("Telefono: ".$telefonoa),0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetTextColor(97,97,97);
	$pdf->Ln(5);
	$pdf->Cell(7,7,utf8_decode("Correo:".$correoa),0,0,'L');
	$pdf->SetTextColor(97,97,97);
	$pdf->Ln(5);

	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(13,7,utf8_decode(" "),0,0);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(60,7,utf8_decode(" "),0,0,'L');
	$pdf->SetTextColor(39,39,51);
	$pdf->Ln(7);

	$pdf->SetTextColor(39,39,51);

	# Tabla de productos #
	$pdf->SetFont('Arial','',8);
	$pdf->SetFillColor(23,83,201);
	$pdf->SetDrawColor(23,83,201);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(90,8,utf8_decode("Descripción"),1,0,'C',true);
	$pdf->Cell(15,8,utf8_decode("Cant."),1,0,'C',true);
	$pdf->Cell(25,8,utf8_decode("Precio"),1,0,'C',true);
	$pdf->Cell(32,8,utf8_decode("Subtotal"),1,0,'C',true);

	$pdf->Ln(8);

	
	$pdf->SetTextColor(39,39,51);
	$valor_formateado = number_format($precio, 0, ".", ".");
	 


	/*----------  Detalles de la tabla  ----------*/
	$pdf->Cell(90,7,utf8_decode("Compra Inventario(".$producto.")"),'L',0,'C');
	$pdf->Cell(15,7,utf8_decode($cantidad),'L',0,'C');
	$pdf->Cell(25,7,utf8_decode("$". $valor_formateado),'L',0,'C');

	$subtotal=number_format(($cantidad*$precio), 0, ".", ".");;
		$pdf->Cell(32,7,utf8_decode($subtotal),'LR',0,'C');
	$pdf->Ln(7);
	/*----------  Fin Detalles de la tabla  ----------*/
	
	$pdf->SetFont('Arial','B',9);
	
	# Impuestos & totales #
	$pdf->Cell(100,7,utf8_decode(''),'T',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'T',0,'C');
	$pdf->Cell(32,7,utf8_decode("SUBTOTAL"),'T',0,'C');
	$pdf->Cell(34,7,utf8_decode("+ $ ".$subtotal),'T',0,'C');
	$pdf->Ln(7);

	$iva=number_format(($cantidad*$precio)*0.19, 0, ".", ".");
	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(32,7,utf8_decode("IVA (19%)"),'',0,'C');
	$pdf->Cell(34,7,utf8_decode(" $ ".$iva),'',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');


	$total=number_format((($cantidad*$precio)*0.19)+(($cantidad*$precio)), 0, ".", ".");
	$pdf->Cell(32,7,utf8_decode("TOTAL A PAGAR"),'T',0,'C');
	$pdf->Cell(34,7,utf8_decode(" $ ".$total),'T',0,'C');

	$pdf->Ln(7);

	$trans=number_format(((($cantidad*$precio)*0.19)+(($cantidad*$precio)))*$transferencia/100, 0, ".", ".");
	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(32,7,utf8_decode("Total transferencia"),'',0,'C');
	$pdf->Cell(34,7,utf8_decode(" $ ".$trans),'',0,'C');

	$pdf->Ln(7);	
	$efec=number_format(((($cantidad*$precio)*0.19)+(($cantidad*$precio)))*$efectivo/100, 0, ".", ".");


	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(32,7,utf8_decode("Total Efectivo"),'',0,'C');
	$pdf->Cell(34,7,utf8_decode(" $ ".$efec),'',0,'C');
	

	$pdf->Ln(7);
	$debo=number_format(((($cantidad*$precio)*0.19)+(($cantidad*$precio)))*$cpp/100, 0, ".", ".");

	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(32,7,utf8_decode("Total Deuda"),'',0,'C');
	$pdf->Cell(34,7,utf8_decode(" $ ".$debo),'',0,'C');

	$pdf->Ln(7);
	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');

	$pdf->Ln(12);

	$pdf->SetFont('Arial','',9);

	$pdf->SetTextColor(39,39,51);
	$pdf->MultiCell(0,9,utf8_decode("*** Precios de productos incluyen impuestos. Para poder realizar un reclamo o devolución debe de presentar esta factura ***"),0,'C',false);

	$pdf->Ln(9);


	# Nombre del archivo PDF #
	$pdf->Output("I","Factura_Nro_1.pdf",'D');
