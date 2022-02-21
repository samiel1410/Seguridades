
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="x-apple-disable-message-reformatting">
	<title></title>
	<style>
		table, td, div, h1, p {font-family: Arial, sans-serif;}
	</style>
</head>
<body style="margin:0;padding:0;">
	<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
		<tr>
			<td align="center" style="padding:0;">
				<table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
					<tr>
							<img src="https://www.muyseguridad.net/wp-content/uploads/2018/11/Seguridad_Inform%C3%A1tica.jpg" alt="600" width="500" style="height:auto;display:block;" />
					</tr>
					<tr>
						<td style="padding:36px 30px 42px 30px;">
							<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
								<tr>
									<td style="padding:0 0 20px 0;color:#153643;">
										<h1 style="font-size:20px;margin:0 0 20px 0;font-family:Arial,sans-serif;">GRUPO #1</h1>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"> Bienvenid@ <h style="font-size:20px;margin:0 0 18px 0;font-family:Arial,sans-serif;">{{$first_name}} </h> la grupo</p>
                                    
										<h1 style="font-size:20px;margin:0 0 18px 0;font-family:Arial,sans-serif;"></h1> <p>LOGIN: ingresando con su correo electronico ({{$email}})  </p>
                                        <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Contraseña:  <h style="font-size:20px;margin:0 0 18px 0;font-family:Arial,sans-serif;">{{$password}} </h></p>
                                        <div>
                                      
										<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->color(38, 38, 38, 0.85)->backgroundColor(255, 255, 255, 0.82)->size(200)->generate($QRpassword)) !!} ">
  
                                        </div>
									</td>
									
								</tr>
								<tr>
									<td style="padding:0 0 20px 0;color:#7A2B1D;">				
									
									</td>
								</tr>
							</table>
						</td>
					</tr>

					
				</table>
			</td>
		</tr>
	</table>
</body>
</html>