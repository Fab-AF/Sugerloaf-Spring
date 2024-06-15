<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0 auto !important;padding: 0 !important;height: 100% !important;width: 100% !important;">
<head style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
	<meta charset="utf-8" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <meta name="viewport" content="width=device-width, initial-scale=1" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <meta name="x-apple-disable-message-reformatting" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <title style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><?php echo e(config('app.name')); ?></title>   
    <!--[if !mso]><!-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500" rel="stylesheet" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <!--<![endif]-->

    <!-- CSS Reset -->
    <style style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display:none !important;
           }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit @ericlepetitsf) for help troubleshooting */
        @media  only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }
    </style>

    <!-- Progressive Enhancements -->
    <style style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media  screen and (max-width: 480px) {

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

            /* What it does: Adjust typography on small screens to improve readability */
            .email-container p {
                font-size: 17px !important;
                line-height: 22px !important;
            }
        }
		/* Table Class */
		.jewelTable { font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%; }
		.jewelTable td, .jewelTable th {border: 1px solid #ddd;padding: 8px;}
		.jewelTable tr:nth-child(even){background-color: #f2f2f2;}
		.jewelTable tr:hover {background-color: #ddd;}
		.jewelTable th {padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #f0643b;color: white;}
    </style>    
</head>
<body width="100%" bgcolor="#F1F1F1" style="background: #F1F1F1;margin: 0 auto !important;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;padding: 0 !important;height: 100% !important;width: 100% !important;">
    <center style="width: 100%;background: #F1F1F1;text-align: left;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <div style="width:100%;max-width: 680px;margin: 30px auto 10px auto;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%; border-radius:5px;" class="email-container">
			<table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="680px" style="width:100%; max-width: 680px;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;" class="email-container">
				
                <tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <td style="background: #A7DBD3;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="width:100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;">
                            <tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                <td style="padding: 20px 40px 20px 40px; text-align: center;-ms-text-size-adjust: 100%;-webkit-text-siZe-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important; ">
                                    <img src="<?php echo e(url('/').'/images/logo.svg'); ?>" width="150" height="13" alt="alt_text" border="0" style="height: auto;font-family: sans-serif;font-size: 15px;line-height: 20px;color: #555555;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                

				
				<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <td bgcolor="#ffffff" style="background: #ffffff;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
						<?php echo $__env->yieldContent('content'); ?>
					</td>
                </tr>

				
                <tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <td style="background: #343A40;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="width:100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;">
                            <tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                <td style="padding: 15px 15px;text-align: center;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;Mso-table-rspace: 0pt !important;">
                                    <table align="center" style="width:100%;text-align: center;color: #FFFFFF;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;margin: 0 auto !important;">
										<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
											<td style="font-family: sans-serif;font-size: 12px;line-height: 18px;text-align: center;font-weight: normal;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
												302 Main Street, Union City, CA 94022
											</td>
										</tr>
										<tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
											<td style="font-family: sans-serif;font-size: 12px;line-height: 18px;text-align: center;font-weight: normal;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
												Copyright &copy; <?php echo e(date('Y')); ?> <b style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><?php echo e(config('app.name')); ?></b>, All Rights Reserved.
											</td>
										</tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
            </table>			
        </div>
		<?php if(!empty($data['unsubscribe'])): ?>
			<div style="text-align: center; padding-bottom: 10px; font-size: 12px; color: #666666;"><?php echo e(__('email.footer.unsubscribe-text')); ?> <a href="<?php echo e($data['unsubscribe']); ?>" title='unsubscribe' style="cursor:pointer; color: #343A40;"><?php echo e(__('email.footer.unsubscribe-link')); ?></a>.</div>
		<?php endif; ?>
    </center>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sugerloaf_admin\resources\views/emails/master.blade.php ENDPATH**/ ?>