
<?php
//    error_reporting(E_ALL);
//    ini_set("display_errors", "on");
    $type = $_GET["productType"];
    $quality = $_GET["quality"];
    if ($type == "set"){
        if ($quality == "yes"){
	    print <<<FORM_RESULT
		<center>
  		<h3> Here is a great high quality set we recommend </h3>
  		<a href = 'https://www.amazon.com/Dynamic-Trespass-Distance-Maverick-Midrange/dp/B07NGS9YQT/ref=sxin_10?ascsubtag=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&creativeASIN=B07NGS9YQT&cv_ct_cx=disc+golf&cv_ct_id=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&cv_ct_pg=search&cv_ct_we=asin&cv_ct_wn=osp-single-source-earns-comm&dchild=1&keywords=disc+golf&linkCode=oas&pd_rd_i=B07NGS9YQT&pd_rd_r=a32e8e1e-2519-47b5-9743-7c04ff61c4bc&pd_rd_w=gn3qg&pd_rd_wg=1aHi9&pf_rd_p=e666d5aa-04ca-46aa-86b0-07ac28e037d4&pf_rd_r=3CWXNXB79S9V7TMQJ1W2&qid=1617675915&sr=1-1-64f3a41a-73ca-403a-923c-8152c45485fe&tag=aimassociatesbp-20'><img src = 'shoppingimages/thumbnail1.png'></a>
        </center>
FORM_RESULT;
        }
        else if ($quality == "no"){
	    print <<<FORM_RESULT
		<center>
  		<h3> Here is a great budget friendly set that we recommend. </h3>
  		<a href = 'https://www.amazon.com/Westside-Starter-Frisbee-Underworld-Midrange/dp/B086H56HY7/ref=sxin_10?ascsubtag=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&creativeASIN=B086H56HY7&cv_ct_cx=disc+golf&cv_ct_id=amzn1.osa.8907b730-8b0b-4029-aa1d-e663d8c10102.ATVPDKIKX0DER.en_US&cv_ct_pg=search&cv_ct_we=asin&cv_ct_wn=osp-single-source-earns-comm&dchild=1&keywords=disc+golf&linkCode=oas&pd_rd_i=B086H56HY7&pd_rd_r=a32e8e1e-2519-47b5-9743-7c04ff61c4bc&pd_rd_w=gn3qg&pd_rd_wg=1aHi9&pf_rd_p=e666d5aa-04ca-46aa-86b0-07ac28e037d4&pf_rd_r=3CWXNXB79S9V7TMQJ1W2&qid=1617675915&sr=1-2-64f3a41a-73ca-403a-923c-8152c45485fe&tag=aimassociatesbp-20'><img src = 'shoppingimages/thumbnail2.png'></a>
        </center>
FORM_RESULT;

        }
    }
    if ($type == "bag"){
        if ($quality == "yes"){
	    print <<<FORM_RESULT
		<center>
  		<h3> Here is a great high quality bag that we recommend. </h3>
  		<a href = 'https://www.amazon.com/MVP-Disc-Sports-Voyager-Backpack/dp/B07W3NPPQK?ref_=ast_sto_dp&th=1&psc=1'><img src = 'shoppingimages/thumbnail3.png'></a>
        </center>
FORM_RESULT;
        }
        else if ($quality == "no"){
	    print <<<FORM_RESULT
		<center>
  		<h3> Here is a great budget friendly bag that we recommend. </h3>
  		<a href = 'https://www.amazon.com/MVP-Disc-Sports-Backpack-Shuttle/dp/B07W67TH7X?ref_=ast_sto_dp&th=1&psc=1'><img src = 'shoppingimages/thumbnail4.png'></a>
        </center>
FORM_RESULT;
          
        }
    }
    if ($type == "basket"){
        if ($quality == "yes"){
	    print <<<FORM_RESULT
		<center>
  		<h3> Here is a great high quality basket that we recommend. </h3>
  		<a href = 'https://www.amazon.com/MVP-30-Chain-Portable-Disc-Basket/dp/B06W9P9NJC?ref_=ast_sto_dp'><img src = 'shoppingimages/thumbnail5.png'></a>
        </center>
FORM_RESULT;
        }
        else if ($quality == "no"){
	    print <<<FORM_RESULT
		<center>
  		<h3> Here is a great budget friendly basket that we recommend. </h3>
  		<a href = 'https://www.amazon.com/MVP-24-Chain-Disc-Basket-Target/dp/B0842Y2MT4?ref_=ast_sto_dp'><img src = 'shoppingimages/thumbnail6.png'></a>
        </center>
FORM_RESULT;
        }
    }
?>
