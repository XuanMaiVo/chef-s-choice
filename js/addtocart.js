function addtocart_notification(){
    if(!document.querySelector('#cart-notification-dialog')){
        console.log('cart notification dialog not found');
        return;
    }
    const cNotificationDialog = document.querySelector('#cart-notification-dialog');
    cNotificationDialog.showModal();
    const cnotiImage = document.querySelector('cnoti-image');
    const cnotiText = document.querySelector('cnoti-text');
    const cnotiReturnBtn = document.getElementById('cnoti-return-btn');
    const cnotiContinueBtn = document.getElementById('cnoti-continue-btn');

    cnotiReturnBtn.replaceWith(cnotiReturnBtn.cloneNode(true));
    cnotiContinueBtn.replaceWith(cnotiContinueBtn.cloneNode(true));

    if(/* dk de biet dang login*/){
        cnotiImage.src = /* đường dẫn đến tick xanh img */;
        cnotiText.innerText = 'Thêm vào giỏ hàng thành công';
        cnotiReturnBtn.innerText = 'Tiếp tục mua sắm';
        cnotiReturnBtn.addEventListener('click', () => {
            cNotificationDialog.close();
        });
        cnotiContinueBtn.innerText = 'Xem giỏ hàng';
        cnotiContinueBtn.addEventListener('click', () => {
            cNotificationDialog.close();
            /* goToCart(); chuyển hướng đến trang giỏ hàng */
        });
    }else{
        cnotiImage.src = /* đường dẫn đến x đỏ img */;
        cnotiText.innerText = 'Vui lòng đăng nhập để tiếp tục mua sắm';
        cnotiReturnBtn.innerText = 'Trang chủ';
        cnotiReturnBtn.addEventListener('click', () => {
            cNotificationDialog.close();
            /* goToHome(); chuyển hướng đến trang chủ */
        });
        cnotiContinueBtn.innerText = 'Đăng nhập'    ;
        cnotiContinueBtn.addEventListener('click', () => {
            cNotificationDialog.close();
            /* goToLogin(); chuyển hướng đến trang đăng nhập */
        });
    }
}