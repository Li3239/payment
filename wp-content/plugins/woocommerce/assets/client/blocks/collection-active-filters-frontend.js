(()=>{"use strict";const e=window.wc.__experimentalInteractivity;(0,e.store)("woocommerce/collection-active-filters",{actions:{clearAll:()=>{const{params:t}=(0,e.getContext)(),c=new URL(window.location.href),{searchParams:o}=c;t.forEach((e=>o.delete(e))),(0,e.navigate)(c.href)}}})})();