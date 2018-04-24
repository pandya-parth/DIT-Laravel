<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>DIT</title>
</head>
<body style="margin: 0; padding: 0;">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td align="center" style="background: #f5f5f5; padding: 20px 0 20px 0; font-family: Helvetica , Arial, sans-serif; font-size: 16px;">
				<table cellpadding="0" cellspacing="0" width="800" align="center">
					<tr>
						<td style="width: 800px; background: #ffffff;">
							<table cellpadding="0" cellspacing="0" width="100%">
								<tr style="background-color:#bfc3c9">
									<td style="padding: 10px 0px 10px 0px;text-align: center;">
										<a href="{{ url('/') }}" target="_blank">
											<img src="{{asset('images/logo.png') }}"> 
										</a>
									</td>
								</tr>
								<tr>
									<td style="padding: 30px 10px 0 10px;">Hi {{ title_case($user->name) }},</td>
								</tr>
								<tr>
									<td style="padding: 30px 10px 0 10px;">Welcome to Digital Ink Technologies.</td>
								</tr>
								<tr>
									<td style="padding: 30px 10px 0 10px;">Your credentials is as below,</td>
								</tr>
								<tr>
									<td style="padding: 10px 10px 0 10px;"><strong>Username :</strong> {{ $user->email }}</td>
								</tr>
								<tr>
									<td style="padding: 10px 10px 0 10px;"><strong>Password :</strong> {{ $pass }}</td>
								</tr>								
								<tr>
									<td style="padding: 30px 10px 0 10px;">
										Any questions please contact our support team on 
										<a href="mailTo:support@ditcanada.com">support@ditcanada.com</a>.
									</td>
								</tr>
								<tr>
									<td  style="padding: 30px 10px 0 10px;"></td>
								</tr>
								<tr>
									<td style="padding: 10px; background: #bfc3c9; text-align: center; font-size: 16px; color: #000000 	;" align="center">© <?= date('Y'); ?> 
										Digital Ink Technologies
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	{!! dd('hi') !!}
</body>
</html>