
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Thanh toán thành công</title>
</head>
<body style="margin: 0; padding: 0;">
	@php
		$cart = Session::get('cart');
	@endphp
    <div style="background: #fafbfc; margin: 0px; min-height: 300px; padding: 0px 30px 15px; font-family: 'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.5;">
        <div style="max-width: 600px; margin: 0 auto;">
            <div style="text-align: center; padding-bottom: 20px; padding-top: 30px;">
                <span style="font-weight: 700; font-size: 32px; color: #b7bdc1;">Thanh toán tiền vé tàu thành công!</span>
            </div>
            <div style="border-top: 3px solid #32a067; color: #525c65; padding: 10px; background: #fff;">

                <p style="margin: 5px 0;color: #525c65">Xin chào bạn {{ $name }}</p>
                <p style="margin: 5px 0;color: #525c65">Bạn đã thanh toán thành công {{ $ticket }} vé tàu vào thời gian ngày {{ $day }}</p>

                <strong>Nội dung chuyến đi: </strong>
                <p style="margin: 5px 0;color: #525c65"> - Bạn nên đến cảng sớm hơn 30p so với giờ tàu chạy để làm thủ tục nhận vé. </p>
                <p style="margin: 5px 0;color: #525c65"> - Trẻ em dưới 6 tuổi không cần mua vé tàu và sẽ ngồi với 1 người lớn (Mang theo giấy tờ chứng minh. </p>

                <strong>Thủ tục nhận vé:</strong>
                
                <p style="margin: 5px 0;color: #525c65">Cách 1: Mang theo email này đến phòng bán vé tại cảng để nhận vé.</p>
                <p style="margin: 5px 0;color: #525c65">Cách 2: Mang theo cmnd + số điện thoại trùng với thông tin mua hàng tại web.</p>

                <strong>{{ $id }} là mã giao dịch của bạn. Trong trường hợp bạn không sử dụng được cách 1 và cách 2, bạn có thể gọi điện đến tổng đài của chúng tôi để chúng tôi hỗ trợ bạn nhận vé.</strong>
                <p style="margin: 5px 0;color: #525c65">0935.091.684</p>
                <p style="margin: 5px 0;color: #525c65">0978.17.55.06</p>

            </div>
            <div style="text-align: center;"><img style="max-width: 90%;" src="https://www.inithtml.com/demo/email/shadow.png" alt="Shadow"></div>
            <div style="text-align: center; margin-top: 45px; margin-bottom: 45px;">
                <div style="margin-bottom: 30px;">
                    <a href="https://www.facebook.com/dulichlysongiare/" style="margin-right: 20px;"><img alt="Facebook" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/facebook.jpg" width="26" height="26"></a>
                    <a href="maito:datvetaulyson@gmail.com" style="margin-right: 20px;"><img alt="Google Plus" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/google.jpg" width="26" height="26"></a>
                </div>
                <p style="font-size: 12px; color: #b7bdc1; margin-bottom: 15px;">muavetaulyson &#8211; </p>
            </div>
        </div>
    </div>
    <div style="text-align: center; background: rgb(125, 151, 173); padding: 10px 0; color: #fff; font-family: 'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size: 14px;">Cảm ơn bạn!</div>
</body>
</html>