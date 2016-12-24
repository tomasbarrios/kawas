<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
	<head>
    	<meta name="viewport" content="width=device-width" />
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<title>Contacto {{ Config::get('settings.sitename') }}</title>
  	</head>
<body bgcolor="#FFFFFF" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; margin: 0; padding: 0;">&#13;
&#13;
&#13;
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0 auto; padding: 0;"><tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;"><td style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;">&#13;
			&#13;
				<div style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; display: block; margin: 0 auto; padding: 0;">&#13;
					<table width="600" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#000" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0; padding: 0;"><tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">
						<td style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;"><a href="'.URL.'" title="{{ Config::get('settings.sitename') }}">
						<img src="{{ URL::to('/') }}/img/logo-mail.png" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; max-width: 100%; margin: 0; padding: 10px;" alt="{{ Config::get('settings.sitename') }}" /></a></td>&#13;
						<td align="right" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;"><h6 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #fff !important; line-height: 1.1; font-weight: 900; font-size: 17px; text-transform: uppercase; margin: 0; padding: 0 10px 0 0;">{{ Config::get('settings.slogan') }}</h6></td>&#13;
					</tr></table></div>&#13;
				&#13;
		</td>&#13;
		&#13;
	</tr></table><table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0 auto; padding: 0;"><tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;"><td align="center" bgcolor="#FFFFFF" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto; padding: 0;">&#13;
&#13;
			<div style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; display: block; margin: 0 auto; padding: 0;">&#13;
			<table border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; width: 600px; margin: 0; padding: 0;"><tr style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;"><td style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;">&#13;
            &#13;
            &#13;
            <p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;"><br />
            Se ha generado un nuevo contacto con los siguientes datos.</p>
						&#13;
                        &#13;<br />

						<h3 style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #000; line-height: 1.1; font-weight: 500; font-size: 27px; margin: 10px 10px 10px 0; padding: 0;">{{ $name }}</h3>
&#13;
						&#13;
						<p style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;">&#13;
                       Nombre: <strong>{{ $name }}</strong><br />
                       Email: <strong>{{ $email }}</strong><br />
                       Fono: <strong>{{ $phone }}</strong><br />
                       Fecha: <strong>{{ date("d-m-Y") }}</strong><br />
					   <br />
                       <div style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; background-color: #E1E9EB; margin: 0 0 15px; padding: 15px;line-height: 1.4;">
                       	<h4 style="margin:0; padding:0 0 10px 0">Nuevo Contacto KAWAS</h4>
                       	&#13;
 						{{ $elmessage }}</div>
                         &#13;
                        </p>&#13;
                        
											&#13;
						<br style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;" /><br style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: #333; margin: 0; padding: 0;" /></td>&#13;
				</tr></table></div>&#13;
									&#13;
		</td>&#13;
	</tr></table></body>
</html>