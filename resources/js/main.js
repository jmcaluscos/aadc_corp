import { SV, P, T } from './data.js';

const $=s=>document.querySelector(s);
const $$=s=>[...document.querySelectorAll(s)];

const menuBtn=$("#mb"),nav=$("#nav");
menuBtn.onclick=()=>nav.classList.toggle("open");
nav.onclick=()=>nav.classList.remove("open");

const services=$("#sv");
if(services){
  services.innerHTML=SV.map(s=>`<div class="card"><h3>${s[0]}</h3><ul>${s[1].map(x=>`<li>${x}</li>`).join("")}</ul></div>`).join("");
}

const tbody=$("#tb"),search=$("#q");
if(tbody){
  const render=(f="")=>{
    tbody.innerHTML=P.filter(r=>r.join(" ").toLowerCase().includes(f)).map(r=>`<tr><td><b>${r[0]}</b></td><td>${r[1]}</td><td>${r[2]}</td></tr>`).join("");
  };
  render();
  search.oninput=e=>render(e.target.value.toLowerCase());
}

const team=$("#tm");
if(team){
  team.innerHTML=T.map(t=>`<div><div class="av">${t[0].replace("Archi. ","").split(" ").map(w=>w[0]).slice(0,2).join("")}</div><b>${t[0]}</b><span>${t[1]}</span></div>`).join("");
}

const tabs=$$(".tabs button"),panels=$$(".panel");
tabs.forEach(b=>b.onclick=()=>{
  tabs.concat(panels).forEach(x=>x.classList.remove("on"));
  b.classList.add("on");
  panels[b.dataset.t].classList.add("on");
});

const slides=$$(".slide"),dots=$$(".dots i"),caption=$("#cap");
if(slides.length){
  const captions=["Retail &amp; Commercial Fit-outs","Engineering &amp; Construction","Safety-First Workmanship"];
  let k=0;
  const go=n=>{
    k=n;
    slides.forEach((s,i)=>s.classList.toggle("on",i==n));
    dots.forEach((d,i)=>d.classList.toggle("on",i==n));
    caption.innerHTML=captions[n];
  };
  dots.forEach((d,i)=>d.onclick=()=>go(i));
  setInterval(()=>go((k+1)%slides.length),5500);
}

const io=new IntersectionObserver(es=>es.forEach(x=>{
  if(x.isIntersecting){x.target.classList.add("in");io.unobserve(x.target)}
}),{threshold:.12});
$$("section:not(.hero) .head,.card,.why,.proj,.team div,.pt,.story>*").forEach(e=>{e.classList.add("rv");io.observe(e)});

const up=$("#up");
addEventListener("scroll",()=>up.classList.toggle("show",scrollY>500));

const form=$("#cf");
if(form){
  form.onsubmit=e=>{
    e.preventDefault();
    const v=id=>$("#"+id).value;
    location.href="mailto:adcengineeringandconstruction@gmail.com?subject="+encodeURIComponent("Quote request: "+v("fs"))+"&body="+encodeURIComponent(v("fm")+"\n\n"+v("fn")+"\n"+v("fe")+"\n"+v("fp"));
  };
}
