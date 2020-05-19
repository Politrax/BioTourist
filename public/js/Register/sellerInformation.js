const sellerInformations = document.getElementById('seller_information');
const checkButtonTourist = document.getElementById('button_tourist');
const checkButtonSeller = document.getElementById('button_seller');
const registerInformationTourist = document.getElementById('button_register_normal');

checkButtonSeller.addEventListener('click', () => {
    sellerInformations.style.display = 'flex';
    registerInformationTourist.style.display = 'none';
})

checkButtonTourist.addEventListener('click', () => {
    sellerInformations.style.display = 'none';
    registerInformationTourist.style.display = 'flex';
})

registerInformationTourist.addEventListener( 'click', () => {
    console.log(registerInformationTourist)
})