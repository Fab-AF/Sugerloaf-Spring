@extends('emails.master')

@section('content')
<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;">
	<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		<td style="padding: 20px 40px 20px 40px;text-align: left;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
			<h1 style="margin: 0;font-family: sans-serif;font-size: 15px;line-height: 26px;color: #333333;font-weight: normal;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Hi {{ config('mail.from.name') }},</h1>
		</td>
	</tr>
	<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		<td style="padding: 0px 40px 20px 40px;font-family: sans-serif;font-size: 15px;line-height: 23px;text-align: left;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
			<p style="margin: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">A new inquiry has been submitted from the contact us page, below are the details, Please contact them as soon as possible.</p>
		</td>
	</tr>
	<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		<td style="padding: 0px 40px 20px 40px;font-family: sans-serif;font-size: 15px;line-height: 23px;text-align: left;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
			<div style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%; border-top:2px solid #A7DBD3; border-bottom:3px solid #A7DBD3; padding:30px 0;">
				<table class="" style="width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-family: Arial, Helvetica, sans-serif;border-collapse: collapse !important;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;table-layout: fixed !important;margin: 0 auto !important;">
					<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<td style="width:20%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;"><strong>Name</strong></td>
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">{{$data['name'] ?? ""}}</td>
					</tr>					
					<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;"><strong>Email</strong></td>
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">{{$data['email'] ?? ""}}</td>
					</tr>
					<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;"><strong>Phone</strong></td>
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">{{$data['phone'] ?? ""}}</td>
					</tr>
					<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;"><strong>Country</strong></td>
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">{{$data['country'] ?? ""}}</td>
					</tr>
					<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;"><strong>Company Name</strong></td>
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">{{$data['company_name'] ?? ""}}</td>
					</tr>
					<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;"><strong>Interested In</strong></td>
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">{{$data['interested_in'] ?? ""}}</td>
					</tr>
					<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important; vertical-align:top;"><strong>Message</strong></td>
						<td style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 5px;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">{{$data['message'] ?? ""}}</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
		<td style="padding: 0px 40px 20px 40px;font-family: sans-serif;font-size: 15px;line-height: 23px;color: #555555;text-align: left;font-weight: normal;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
			<p style="margin: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">Yours Sincerely,</p>
			<p style="margin: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">{{ucwords(strtolower($data['name']))}}</p>
		</td>
	</tr>
</table>
@endsection

