(window.webpackJsonp=window.webpackJsonp||[]).push([[18],{"f+ep":function(l,n,u){"use strict";u.r(n);var e=u("8Y7J"),i=u("Z6yl"),o=u("Bu0p"),s=u("IheW");class a{constructor(l,n,u){this.apiSerivice=l,this.sessionManager=n,this.router=u,this.user={email:"klan1@klan1.com",password:"klan1net"},this.k1Url=l.apiUrl,l.apiUrl="https://isag-dev.klan1.net/webapp/api/",this.sessionManager.setDeviceSession(101,"null-session","null-token")}ngOnInit(){}login(){const l=(new s.g).set("Content-type","application/json");this.apiSerivice.post("login",{data:this.user},{observe:"body",headers:l}).subscribe(l=>{console.log(l),this.sessionManager.setDeviceSession(l.data.id,l.data.id+"-session",l.data.id+"-token"),this.apiSerivice.apiUrl=this.k1Url,this.router.navigateByUrl("/home")},l=>{console.log(l)})}}class t{}var b=u("pMnS"),r=u("MKJQ"),d=u("sZkV"),g=u("s7LF"),p=u("iInd"),c=e.nb({encapsulation:0,styles:[[""]],data:{}});function h(l){return e.Gb(0,[(l()(),e.pb(0,0,null,null,1,"ion-header",[["class","ion-padding"],["translucent",""]],null,null,null,r.Q,r.n)),e.ob(1,49152,null,0,d.A,[e.h,e.k,e.x],{translucent:[0,"translucent"]},null),(l()(),e.pb(2,0,null,null,36,"ion-content",[["class","ion-padding"],["color","light"],["fullscreen",""]],null,null,null,r.M,r.j)),e.ob(3,49152,null,0,d.t,[e.h,e.k,e.x],{color:[0,"color"],fullscreen:[1,"fullscreen"]},null),(l()(),e.pb(4,0,null,0,0,"img",[["class","ion-padding"],["src","/assets/logo-nutritec-1024.png"]],null,null,null,null,null)),(l()(),e.pb(5,0,null,0,33,"form",[["novalidate",""]],[[2,"ng-untouched",null],[2,"ng-touched",null],[2,"ng-pristine",null],[2,"ng-dirty",null],[2,"ng-valid",null],[2,"ng-invalid",null],[2,"ng-pending",null]],[[null,"submit"],[null,"reset"]],(function(l,n,u){var i=!0;return"submit"===n&&(i=!1!==e.Ab(l,7).onSubmit(u)&&i),"reset"===n&&(i=!1!==e.Ab(l,7).onReset()&&i),i}),null,null)),e.ob(6,16384,null,0,g.k,[],null,null),e.ob(7,4210688,null,0,g.g,[[8,null],[8,null]],null,null),e.Cb(2048,null,g.a,null,[g.g]),e.ob(9,16384,null,0,g.f,[[4,g.a]],null,null),(l()(),e.pb(10,0,null,null,25,"ion-list",[["lines","inset"]],null,null,null,r.W,r.t)),e.ob(11,49152,null,0,d.N,[e.h,e.k,e.x],{lines:[0,"lines"]},null),(l()(),e.pb(12,0,null,0,11,"ion-item",[],null,null,null,r.U,r.q)),e.ob(13,49152,null,0,d.G,[e.h,e.k,e.x],null,null),(l()(),e.pb(14,0,null,0,2,"ion-label",[["color","medium"],["position","fixed"]],null,null,null,r.V,r.s)),e.ob(15,49152,null,0,d.M,[e.h,e.k,e.x],{color:[0,"color"],position:[1,"position"]},null),(l()(),e.Fb(-1,0,[" Email "])),(l()(),e.pb(17,0,null,0,6,"ion-input",[["name","email"],["type","text"]],[[2,"ng-untouched",null],[2,"ng-touched",null],[2,"ng-pristine",null],[2,"ng-dirty",null],[2,"ng-valid",null],[2,"ng-invalid",null],[2,"ng-pending",null]],[[null,"ngModelChange"],[null,"ionBlur"],[null,"ionChange"]],(function(l,n,u){var i=!0,o=l.component;return"ionBlur"===n&&(i=!1!==e.Ab(l,18)._handleBlurEvent(u.target)&&i),"ionChange"===n&&(i=!1!==e.Ab(l,18)._handleInputEvent(u.target)&&i),"ngModelChange"===n&&(i=!1!==(o.user.email=u)&&i),i}),r.S,r.p)),e.ob(18,16384,null,0,d.Kb,[e.k],null,null),e.Cb(1024,null,g.c,(function(l){return[l]}),[d.Kb]),e.ob(20,671744,null,0,g.h,[[2,g.a],[8,null],[8,null],[6,g.c]],{name:[0,"name"],model:[1,"model"]},{update:"ngModelChange"}),e.Cb(2048,null,g.d,null,[g.h]),e.ob(22,16384,null,0,g.e,[[4,g.d]],null,null),e.ob(23,49152,[["email",4]],0,d.F,[e.h,e.k,e.x],{name:[0,"name"],type:[1,"type"]},null),(l()(),e.pb(24,0,null,0,11,"ion-item",[["lines","none"]],null,null,null,r.U,r.q)),e.ob(25,49152,null,0,d.G,[e.h,e.k,e.x],{lines:[0,"lines"]},null),(l()(),e.pb(26,0,null,0,2,"ion-label",[["color","medium"],["position","fixed"]],null,null,null,r.V,r.s)),e.ob(27,49152,null,0,d.M,[e.h,e.k,e.x],{color:[0,"color"],position:[1,"position"]},null),(l()(),e.Fb(-1,0,[" Contrase\xf1a "])),(l()(),e.pb(29,0,null,0,6,"ion-input",[["name","password"],["type","password"]],[[2,"ng-untouched",null],[2,"ng-touched",null],[2,"ng-pristine",null],[2,"ng-dirty",null],[2,"ng-valid",null],[2,"ng-invalid",null],[2,"ng-pending",null]],[[null,"ngModelChange"],[null,"ionBlur"],[null,"ionChange"]],(function(l,n,u){var i=!0,o=l.component;return"ionBlur"===n&&(i=!1!==e.Ab(l,30)._handleBlurEvent(u.target)&&i),"ionChange"===n&&(i=!1!==e.Ab(l,30)._handleInputEvent(u.target)&&i),"ngModelChange"===n&&(i=!1!==(o.user.password=u)&&i),i}),r.S,r.p)),e.ob(30,16384,null,0,d.Kb,[e.k],null,null),e.Cb(1024,null,g.c,(function(l){return[l]}),[d.Kb]),e.ob(32,671744,null,0,g.h,[[2,g.a],[8,null],[8,null],[6,g.c]],{name:[0,"name"],model:[1,"model"]},{update:"ngModelChange"}),e.Cb(2048,null,g.d,null,[g.h]),e.ob(34,16384,null,0,g.e,[[4,g.d]],null,null),e.ob(35,49152,[["password",4]],0,d.F,[e.h,e.k,e.x],{name:[0,"name"],type:[1,"type"]},null),(l()(),e.pb(36,0,null,null,2,"ion-button",[["class","ion-padding"],["expand","block"],["size","large"]],null,[[null,"click"]],(function(l,n,u){var e=!0;return"click"===n&&(e=!1!==l.component.login()&&e),e}),r.E,r.b)),e.ob(37,49152,null,0,d.j,[e.h,e.k,e.x],{disabled:[0,"disabled"],expand:[1,"expand"],size:[2,"size"]},null),(l()(),e.Fb(-1,0,["INICIAR SESI\xd3N "]))],(function(l,n){var u=n.component;l(n,1,0,""),l(n,3,0,"light",""),l(n,11,0,"inset"),l(n,15,0,"medium","fixed"),l(n,20,0,"email",u.user.email),l(n,23,0,"email","text"),l(n,25,0,"none"),l(n,27,0,"medium","fixed"),l(n,32,0,"password",u.user.password),l(n,35,0,"password","password"),l(n,37,0,!u.user.email||!u.user.password,"block","large")}),(function(l,n){l(n,5,0,e.Ab(n,9).ngClassUntouched,e.Ab(n,9).ngClassTouched,e.Ab(n,9).ngClassPristine,e.Ab(n,9).ngClassDirty,e.Ab(n,9).ngClassValid,e.Ab(n,9).ngClassInvalid,e.Ab(n,9).ngClassPending),l(n,17,0,e.Ab(n,22).ngClassUntouched,e.Ab(n,22).ngClassTouched,e.Ab(n,22).ngClassPristine,e.Ab(n,22).ngClassDirty,e.Ab(n,22).ngClassValid,e.Ab(n,22).ngClassInvalid,e.Ab(n,22).ngClassPending),l(n,29,0,e.Ab(n,34).ngClassUntouched,e.Ab(n,34).ngClassTouched,e.Ab(n,34).ngClassPristine,e.Ab(n,34).ngClassDirty,e.Ab(n,34).ngClassValid,e.Ab(n,34).ngClassInvalid,e.Ab(n,34).ngClassPending)}))}function m(l){return e.Gb(0,[(l()(),e.pb(0,0,null,null,1,"app-login",[],null,null,null,h,c)),e.ob(1,114688,null,0,a,[o.a,i.a,p.m],null,null)],(function(l,n){l(n,1,0)}),null)}var C=e.lb("app-login",a,m,{},{},[]),v=u("SVse");u.d(n,"LoginPageModuleNgFactory",(function(){return y}));var y=e.mb(t,[],(function(l){return e.xb([e.yb(512,e.j,e.X,[[8,[b.a,C]],[3,e.j],e.v]),e.yb(4608,v.k,v.j,[e.s,[2,v.q]]),e.yb(4608,g.j,g.j,[]),e.yb(4608,d.b,d.b,[e.x,e.g]),e.yb(4608,d.Db,d.Db,[d.b,e.j,e.p]),e.yb(4608,d.Hb,d.Hb,[d.b,e.j,e.p]),e.yb(1073742336,v.b,v.b,[]),e.yb(1073742336,g.i,g.i,[]),e.yb(1073742336,g.b,g.b,[]),e.yb(1073742336,d.Ab,d.Ab,[]),e.yb(1073742336,p.o,p.o,[[2,p.t],[2,p.m]]),e.yb(1073742336,t,t,[]),e.yb(1024,p.k,(function(){return[[{path:"",component:a}]]}),[])])}))}}]);