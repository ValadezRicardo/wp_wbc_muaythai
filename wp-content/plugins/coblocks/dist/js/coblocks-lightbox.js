!function(){"use strict";const{closeLabel:t,leftLabel:e,rightLabel:o}=coblocksLightboxData,c=document.getElementsByClassName("has-lightbox");Array.from(c).forEach((function(c,i){c.className+=" lightbox-"+i+" ",function(c){const i=document.createElement("div");i.setAttribute("class","coblocks-lightbox");const n=document.createElement("div");n.setAttribute("class","coblocks-lightbox__background");const l=document.createElement("div");l.setAttribute("class","coblocks-lightbox__heading");const a=document.createElement("button");a.setAttribute("class","coblocks-lightbox__close"),a.setAttribute("aria-label",t);const s=document.createElement("span");s.setAttribute("class","coblocks-lightbox__count");const r=document.createElement("div");r.setAttribute("class","coblocks-lightbox__image");const g=document.createElement("img");g.setAttribute("alt","Placeholder");const u=document.createElement("figcaption");u.setAttribute("class","coblocks-lightbox__caption");const b=document.createElement("button");b.setAttribute("class","coblocks-lightbox__arrow coblocks-lightbox__arrow--left"),b.setAttribute("aria-label",e);const d=document.createElement("button");d.setAttribute("class","coblocks-lightbox__arrow coblocks-lightbox__arrow--right"),d.setAttribute("aria-label",o);const m=document.createElement("div");m.setAttribute("class","arrow-right"),m.setAttribute("aria-label",o);const h=document.createElement("div");h.setAttribute("class","arrow-left"),h.setAttribute("aria-label",e);const f=[`.has-lightbox.lightbox-${c} > :not(.carousel-nav) figure img`,`.has-lightbox.lightbox-${c} > figure img`,`figure.has-lightbox.lightbox-${c} > img`,`.has-lightbox.lightbox-${c} > figure[class^="align"] img`,`.masonry-grid.has-lightbox.lightbox-${c} figure img`].join(", "),x=[`.has-lightbox.lightbox-${c} > :not(.carousel-nav) figure figcaption`,`.masonry-grid.has-lightbox.lightbox-${c} figure figcaption`].join(", "),E=document.querySelectorAll(f),p=document.querySelectorAll(x);let k;l.append(s,a),r.append(g,u),b.append(h),d.append(m),i.append(n,l,r,b,d),E.length>0&&(document.getElementsByTagName("BODY")[0].append(i),1===E.length&&(d.remove(),b.remove())),p.length>0&&Array.from(p).forEach((function(t,e){t.addEventListener("click",(function(){A(e)}))})),Array.from(E).forEach((function(t,e){t.closest("figure").addEventListener("click",(function(){A(e)}))})),b.addEventListener("click",(function(){k=0===k?E.length-1:k-1,A(k)})),d.addEventListener("click",(function(){k=k===E.length-1?0:k+1,A(k)})),n.addEventListener("click",(function(){i.style.display="none"})),a.addEventListener("click",(function(){_(),i.style.display="none"}));const y={preloaded:!1,setPreloadImages:()=>{y.preloaded||(y.preloaded=!0,Array.from(E).forEach((function(t,e){y[`img-${e}`]=new window.Image,t.attributes.src.value?.includes("lazy-load")&&void 0!==t.attributes?.["data-src"]?.value?y[`img-${e}`].src=t.attributes["data-src"].value:y[`img-${e}`].src=t.attributes.src.value,y[`img-${e}`]["data-caption"]=E[e]&&E[e].nextElementSibling?function(t){let e=t.nextElementSibling;for(;e;){if(e.matches("figcaption"))return e.innerHTML;e=e.nextElementSibling}return""}(E[e]):""})))}};function A(t){y.setPreloadImages(),k=t,"flex"!==i.style.display&&(i.style.display="flex",v()),n.style.backgroundImage=`url(${y[`img-${k}`].src})`,g.src=y[`img-${k}`].src,u.innerHTML=y[`img-${k}`]["data-caption"],s.textContent=`${k+1} / ${E.length}`}const v=()=>document.addEventListener("keydown",$),_=()=>document.removeEventListener("keydown",$),$=t=>{if(t&&t?.code&&"flex"===i.style.display)switch(t.code){case"Escape":a.click();break;case"ArrowLeft":case"KeyA":b.click();break;case"ArrowRight":case"KeyD":d.click()}}}(i)}))}();