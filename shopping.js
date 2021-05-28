// console.log('JS file is working.')


function displayRecommendation() {
    // console.log('submit button working.')
    var rec = document.getElementById('recommendation')
    var recImage = document.getElementById('recImage')
    var quality = document.forms["shoppingSelector"]["quality"].value
    var product = document.forms["shoppingSelector"]["productType"].value

    console.log(product)
    console.log(quality)

    if (product == 'set' && quality == 'yes') {
        console.log('set yes')
        rec.innerHTML = 'Here is a great high quality set that we recommend.'
        recImage.src = 'shoppingimages/thumbnail1.png'
        document.getElementById('productLink').setAttribute('href', 'https://www.amazon.com/Dynamic-Trespass-Distance-Maverick-Midrange/dp/B07NGS9YQT/ref=sxin_10?ascsubtag=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&creativeASIN=B07NGS9YQT&cv_ct_cx=disc+golf&cv_ct_id=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&cv_ct_pg=search&cv_ct_we=asin&cv_ct_wn=osp-single-source-earns-comm&dchild=1&keywords=disc+golf&linkCode=oas&pd_rd_i=B07NGS9YQT&pd_rd_r=a32e8e1e-2519-47b5-9743-7c04ff61c4bc&pd_rd_w=gn3qg&pd_rd_wg=1aHi9&pf_rd_p=e666d5aa-04ca-46aa-86b0-07ac28e037d4&pf_rd_r=3CWXNXB79S9V7TMQJ1W2&qid=1617675915&sr=1-1-64f3a41a-73ca-403a-923c-8152c45485fe&tag=aimassociatesbp-20')
    } else if (product == 'set' && quality == 'no') {
        console.log('set no')
        rec.innerHTML = 'Here is a great budget friendly set that we recommend.'
        recImage.src = 'shoppingimages/thumbnail2.png'
        document.getElementById('productLink').setAttribute('href', 'https://www.amazon.com/Westside-Starter-Frisbee-Underworld-Midrange/dp/B086H56HY7/ref=sxin_10?ascsubtag=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&creativeASIN=B086H56HY7&cv_ct_cx=disc+golf&cv_ct_id=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&cv_ct_pg=search&cv_ct_we=asin&cv_ct_wn=osp-single-source-earns-comm&dchild=1&keywords=disc+golf&linkCode=oas&pd_rd_i=B086H56HY7&pd_rd_r=a32e8e1e-2519-47b5-9743-7c04ff61c4bc&pd_rd_w=gn3qg&pd_rd_wg=1aHi9&pf_rd_p=e666d5aa-04ca-46aa-86b0-07ac28e037d4&pf_rd_r=3CWXNXB79S9V7TMQJ1W2&qid=1617675915&sr=1-2-64f3a41a-73ca-403a-923c-8152c45485fe&tag=aimassociatesbp-20')
    } else if (product == 'bag' && quality == 'yes') {
        rec.innerHTML = 'Here is a great high quality bag that we recommend.'
        recImage.src = 'shoppingimages/thumbnail3.png'
        document.getElementById('productLink').setAttribute('href', 'https://www.amazon.com/MVP-Disc-Sports-Voyager-Backpack/dp/B07W3NPPQK?ref_=ast_sto_dp&th=1&psc=1')
    } else if (product == 'bag' && quality == 'no') {
        rec.innerHTML = 'Here is a great budget friendly bag that we recommend.'
        recImage.src = 'shoppingimages/thumbnail4.png'
        document.getElementById('productLink').setAttribute('href', 'https://www.amazon.com/MVP-Disc-Sports-Backpack-Shuttle/dp/B07W67TH7X?ref_=ast_sto_dp&th=1&psc=1')
    } else if (product == 'basket' && quality == 'yes') {
        rec.innerHTML = 'Here is a great high quality basket that we recommend.'
        recImage.src = 'shoppingimages/thumbnail5.png'
        document.getElementById('productLink').setAttribute('href', 'https://www.amazon.com/MVP-30-Chain-Portable-Disc-Basket/dp/B06W9P9NJC?ref_=ast_sto_dp')
    } else if (product == 'basket' && quality == 'no') {
        rec.innerHTML = 'Here is a great budget friendly basket that we recommend.'
        recImage.src = 'shoppingimages/thumbnail6.png'
        document.getElementById('productLink').setAttribute('href', 'https://www.amazon.com/MVP-24-Chain-Disc-Basket-Target/dp/B0842Y2MT4?ref_=ast_sto_dp')
    }
}