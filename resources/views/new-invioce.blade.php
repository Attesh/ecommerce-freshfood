<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Fresh Food</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 15px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://fisdemoprojects.com/freshfoodNew/public//frontend/img/new-logo.png" style="width: 100%; max-width: 100px" />
								</td>

								<td>
									Invoice #: INV-00{{$data1["orderid"]}}<br />
									Created: {{$data1["order_date"]}}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

                <tr>
                    <td colspan="2">
                        <table style="border: solid 1px #ddd; padding:10px 20px;">
                            <tr>
                                <td style="font-size:14px;">
                                    <span style="font-weight:bold;display:inline-block;min-width:150px">Order status</span>
                                    <b style="color:green;font-weight:normal;margin:0">{{$data1["status"]}}</b>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:14px;">
                                    <span style="font-weight:bold;display:inline-block;min-width:146px">Order ID</span> {{$data1["orderid"]}}</p>
                                <!-- <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span> Rs. 6000.00</p> -->
                                </td>    
                            </tr>
                        </table>
                      
                    </td>
                </tr>
                <tr></tr>
                <tr class="information" >
					<td colspan="2" >
						<table style="border: solid 1px #ddd; padding:10px 10px;margin-bottom: 25px; margin-top: 18px;">
                            <tr><td style="padding-bottom: 5px;"><b>Customer Information</b></td></tr>
							<tr>
                                <td>
                                    <b style="font-size: 14px;">Contact Information</b> <br />
									{{$data1["first_name"]}} {{$data1["last_name"]}}<br />
									{{$data1["phone"]}}<br />
									{{$data1["email"]}}
								</td>

								<!-- <td>
                                    <b style="font-size: 14px;">Delivery Infomation</b><br />
									Tuesday, June 15 , 2021<br />
                                    12:00 PM
								</td> -->
							</tr>

                            <tr>
								<td>
                                    <b style="font-size: 14px;">Billing Address</b><br />
									{{$data1["billing_address"]}}
									<!-- Shon, Inc.<br />
									12345 jhon Road<br />
									ABC, YY 12345 -->
								</td>

								<td>
                                    <b style="font-size: 14px;">Shipping Address</b> <br />
									{{$data1["street_address"]}}
									<!-- Shon, Inc.<br />
									12345 jhon Road<br />
									ABC, YY 12345 -->
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>

					<td>{{$data1["type"]}}</td>
				</tr>

				<tr class="details">
					<td>Price</td>

					<td>SAR {{$data1["price"]}}</td>
				</tr>

				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>{{$data1["quantity"]}} X {{$data1["name"]}}</td>

					<td>SAR {{$data1["subtotal"]}}</td>
				</tr>

				<tr class="item">
					<td>Shipping </td>

					<td>SAR 0.00</td>
				</tr>
				
				<tr class="item last">
					<td>VAT</td>

					<td>SAR {{$data1["vatamount"]}}</td>
				</tr>

				<tr class="total">
					<td></td>

					<td>Total: SAR {{$data1["grandtotal"]}}</td>
				</tr>
			</table>
		</div>
	</body>
</html>