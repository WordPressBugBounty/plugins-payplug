(()=>{"use strict";var e={n:t=>{var n=t&&t.__esModule?()=>t.default:()=>t;return e.d(n,{a:n}),n},d:(t,n)=>{for(var a in n)e.o(n,a)&&!e.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:n[a]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=window.wp.element,n=window.wp.i18n,a=window.wp.htmlEntities,o=window.wp.data,c=window.wc.wcSettings,r=window.wc.wcBlocksRegistry,s=window.React,i=window.jQuery;var l=e.n(i);const p=(0,c.getSetting)("apple_pay_data",{}),u=(0,c.getSetting)("apple_pay_data",{}),d=(0,n.__)("Gateway method title","payplug"),y=(0,a.decodeEntities)(u?.title)||d,m=e=>{const{eventRegistration:n,emitResponse:a}=e,{onPaymentSetup:c,onCheckoutSuccess:r}=n,{CHECKOUT_STORE_KEY:i}=window.wc.wcBlocksData,d=(0,o.useSelect)((e=>e(i).getOrderId()));let y=null;(0,s.useEffect)((()=>{jQuery((function(e){e("form .wp-block-woocommerce-checkout-actions-block .wc-block-components-button").on("click",(async e=>{e.preventDefault(),m.CreateSession(),m.CancelOrder()}))}))}),[]),(0,s.useEffect)((()=>{const e=c((async()=>{await((e,t)=>{const n={order_id:t,"woocommerce-process-checkout-nonce":p.wp_nonce,gateway:"apple_pay"};return new Promise(((e,t)=>l().ajax({type:"POST",data:n,url:p.payplug_create_intent_payment}).success((function(t){e(t)})).error((function(e){t(e)}))))})(0,d).then((async e=>{await m.BeginSession(e)})).then((async e=>({type:"success"})))}));return()=>{e()}}),[c,a.noticeContexts.PAYMENTS,a.responseTypes.ERROR,a.responseTypes.SUCCESS]),(0,s.useEffect)((()=>{const e=r((async({processingResponse:{paymentDetails:e}})=>{var t;let n={};return await new Promise(((e,n)=>{y.onpaymentauthorized=async n=>{let a={action:"applepay_update_payment",post_type:"POST",payment_id:y.payment_id,payment_token:n.payment.token,order_id:y.order_id};await(e=>new Promise(((t,n)=>{l().ajax({type:"POST",data:e,url:p.ajax_url_applepay_update_payment}).success((function(e){t(e)})).error((function(e,t,a){n(a)}))})))(a).then((n=>{t=ApplePaySession.STATUS_SUCCESS,!0!==n.success&&(t=ApplePaySession.STATUS_FAILURE),y.completePayment({status:t}),e()}))}})).then((()=>{n={type:"success",redirectUrl:y.return_url}})),n}));return()=>{e()}}),[r]);let m={CreateSession:function(){const t={countryCode:u.payplug_countryCode,currencyCode:u.payplug_currencyCode,merchantCapabilities:["supports3DS"],supportedNetworks:["visa","masterCard"],total:{label:"Apple Pay",type:"final",amount:e.billing.cartTotal.value/100},applicationData:btoa(JSON.stringify({apple_pay_domain:u.payplug_apple_pay_domain}))};y=new ApplePaySession(3,t)},CancelOrder:function(){y.oncancel=e=>{window.location=y.cancel_url}},BeginSession:function(e){y.payment_id=e.data.payment_id,y.order_id=d,y.cancel_url=e.data.cancel,y.return_url=e.data.redirect,m.MerchantValidated(y,e.data.merchant_session),y.begin()},MerchantValidated:function(e,t){e.onvalidatemerchant=async n=>{try{e.completeMerchantValidation(t)}catch(e){alert(e)}}}};return(0,t.createElement)(t.Fragment,null)},w=()=>(0,t.createElement)("img",{src:u?.icon.src,alt:u?.icon.icon_alt,className:"payplug-payment-icon",style:{float:"right"}}),_={name:"apple_pay",label:(0,t.createElement)((()=>(0,t.createElement)("span",{style:{width:"100%"}},y,(0,t.createElement)(w,null))),null),content:(0,t.createElement)(m,null),edit:(0,t.createElement)(m,null),canMakePayment:()=>!0,ariaLabel:y,supports:{features:u.supports}};(0,r.registerPaymentMethod)(_)})();