<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>A simple, clean, and responsive HTML invoice template</title>

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
            padding-bottom: 40px;
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
            <td colspan="4">
                <table>
                    <tr>
                        <td class="title">
                            <h3>Lowkalo</h3>
                        </td>

                        <td>
                            Invoice #: {{$user->id}}<br />
{{--                            Created: {{$user->created_at}}<br />--}}
{{--                            Due: February 1, 2015--}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="4">
                <table>
                    <tr>
{{--                        <td>--}}
{{--                            Sparksuite, Inc.<br />--}}
{{--                            {{$user->name}}<br />--}}
{{--                            {{$order->country}}, {{$order->city}}--}}
{{--                        </td>--}}

                        <td>

                            {{$user->name}} <br />
                            {{$user->email}}<br />
                            {{$user->phone}}<br />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td colspan="4">Payment Method</td>


        </tr>

        <tr class="details">
            <td colspan="4">Credit Card</td>


        </tr>

        <tr class="heading">
            <td colspan="2">Item</td>
            <td colspan="2">Description</td>

        </tr>


            <tr class="item">
                <td colspan="2">1</td>

                    <td colspan="2">Inventory Management Course</td>


            </tr>

        <tr class="total">
            <td></td>
            <td colspan="3">Subtotal: {{$subtotal}} SAR</td>

        </tr>
        @if($dis !== 0)
            <tr class="total">
                <td></td>
                <td colspan="3">Discount: {{$dis}} SAR</td>

            </tr>
        @endif
        <tr class="total">
            <td></td>
            <td colspan="3">Tax: {{$tax}} SAR</td>

        </tr>
        <tr class="total">
            <td></td>
            <td colspan="3">Total: {{$total}} SAR</td>

        </tr>



    </table>

</div>
</body>
</html>
