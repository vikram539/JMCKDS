*{margin:0; padding:0; box-sizing:border-box;}

/*
font-family: 'Fira Sans', sans-serif;
font-family: 'Nunito', sans-serif;
@font-face {
    font-family: "headingfont";
    src: url(../fonts/FallingSky.otf);
	
    font-family: "bodyfont";
    src: url(../fonts/lmroman10-bold.otf);
} */ 

:root
{
	--primary-color: #21a8e0;
	--sane-serif:'Fira Sans', sans-serif;
	--body-font:'Nunito', sans-serif;
	--body-bg:#ffffff;
	--header-div:linear-gradient(rgb(248, 248, 248) 0px, rgb(204, 204, 204) 100%);
	--top-div-color:#000000;
	--logo-color:#ffffff;
	--primary-bg:#f5f5f5  /*rgb(212, 0, 42)*/;
	--topstrip-bg:#272727;
	--topstrip-color:#ffffff;
	--star-rate-color:#21a8e0;
	--widget-bg:#f47617;
	--widget-btn-bg:#a14500;
	--aprt-tumb-bg:#222222; 
	--thumb-hover:#21a8e0;
	--h4-bg:#1ea1db;
	--primery-color:#000000;
	--primery-hover:#c1c1c1;
	--primary-border:#c1c1c1;
	--nav-collapse-bg:#21a8e0;
	--room-thumb-bg:#e9403f;
	--facility-check:#21a8e0;
	--footer-social:#21a8e0;
	--footer-bg:#21a8e0;
	--reserve:#f5f5f5;
}
.container
{
	max-width: 1270px; 	
}
.btn-danger
{
    background-color: #21a8e0;
    border-color: #21a8e0;
}
*:first-letter
{
	text-transform:uppercase;
}
hr{width:100%;}
body{margin:0; padding:0; border:none; font-size:100%; color:#000000; font-family:var(--sane-serif); background:var(--body-bg)}
h2, h3, h4{text-align: center; font-family:var(--body-font);}
	p{font-family:var(--sane-serif); text-align:center; font-weight:400;}
h4>p{color:#000000; text-align:left; text-transform:capitalize; 
    font-size: 1rem;
    font-weight: 400;}
h4>p img{   padding: 0.2rem;}
h2{text-transform: uppercase; font-weight: 600; margin-bottom: 2rem;}
h3{ color: #000000;}
h4{color: var(--h4-bg);   font-size: 1.2rem;}
p{line-height: 2rem;}
p:first-letter{text-transform:uppercase;}
a{text-decoration:none; color:#000000;}  
li{padding-bottom: 1rem;}
.header-bg{background:var(--header-div);}
.sticky-header{}
.sticky-header .container{}
.star-rate{color:var(--star-rate-color); margin:0;}
._topbar{display:flex; align-items:center; flex-flow:row wrap; color:var(--top-div-color); justify-content: flex-end;}
._topbar>ul{display: flex; flex-flow: row wrap; align-items: center; justify-content: flex-end; list-style: none; margin:0;}
._topbar>ul :is(li, a){text-transform: uppercase; padding: 0.5rem 0.3rem; text-decoration: none; color: var(--top-div-color); font-size:0.85rem; font-weight:400;}
._topbar>ul>li:hover a,._topbar>ul>li:focus a,._topbar>ul>li:link a{color:#c1c1c1;}
.top-primary-menu{background:var(--primary-bg); /*height:80px;*/}
.menu-resize{height:50px; position:fixed;top:0; left:0; z-index:9999; width:100%; animation:resize 0.5s forwards; }
.menu-resize .navbar{  padding-top: 0; padding-bottom: 0;}
.menu-resize .container{max-width:100%} 
.menu-resize .navbar a
{
	<!-- color: #fff;	 -->
}
@keyframes resize
{
	0%{transform:translateY(-40px)};
	100%{transform:translateY(0px)};
	
}
/* ================== Common Btn ====================== */
.comm_btn
{
    background: #21a8e0;
    text-transform: uppercase;
    padding: 0.5rem 1rem;
	display:table;
	margin:0 auto;
	
}
.comm_btn>a
{
    text-decoration: none;
	color: #fff;
}

.receptions{
    padding-left: 0.3rem;
    padding-right: 0.3rem;}
.top-primary-menu [class*='row']
{
	
}
.navbar-collapse
{	
    
    width: 100%;
   /* background: #21a8e0;*/
    isolation: isolate;
    z-index: 999;
}
.top-primary-menu .navbar{padding:0rem 0;} 
img{transition:all linear 0.5s;}
.menu-resize .navbar-brand>img
{
	max-height:40px;
}
.primary-link
{
}
.primary-link .navbar
{
	padding-top:0;
}
.primary-link>li
{
	text-transform:uppercase;
    font-weight: 400;
    font-size: 1rem;
    padding: 0.5rem 0.6rem;
	position:relative;
}

.primary-link>li.booknow
{
	background: #f46c06;
}

.primary-link>li.booknow a
{
	color:#ffffff;
}
.avis
{
    margin-left: 0.5rem;
    background: #ffffff;
    font-size: 1.5rem !important;
    padding: 0 !important;
}
.avis a
{
	color: var(--primary-bg)!important;
}
.primary-link>li:after
{
    content: '';
    position: absolute;
    top: 50%;
    right: 0;
    border-right: 1px solid var(--primary-border);
    height: 100%;
    vertical-align: middle;
    transform:translateY(-50%);
}
.primary-link>li :is(a) 
{
	text-decoration:none;    
	color: var(--primery-color);
	padding:0rem 0.3rem;
}
.primary-link>li:hover a, .li-active a
{
	color:var(--primery-hover) !important;
}
.primary-link>li:last-child::after
{
	border-right:none;	
}
a.navbar-brand{color:var(--logo-color) !important;}
.navbar-brand p{
    margin: 0;
    font-size: 0.8rem;
    line-height: 0;
    position: relative;
    top: -5px;}
.navbar-brand span{
	text-transform: uppercase;    
    font-size: 1.5rem;
    transform: scaley(1);
    display: block;
    letter-spacing: 1px;
    word-spacing: 5px;
    font-weight: 400;
	}
	.navbar-brand span small{ font-size: 1rem;  font-weight: 400;}
.navbar-brand span b{font-size: 1.95rem;} 
.bookdirect{
    background: var(--topstrip-bg);
    padding: 0.2rem 0;
    text-align: center;
    font-size: 0.9rem;
	color:var(--topstrip-color);}
.bookdirect>span{font-weight:400;}


.jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssorb132{position:absolute}.jssorb132 .i{position:absolute;cursor:pointer}.jssorb132 .i .b{fill:#fff;fill-opacity:.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:.7}.jssorb132 .i:hover .b{fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:.8}.jssorb132 .iav .b{fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:.8;stroke-opacity:1}.jssorb132 .i.idn{opacity:.3}.jssora051{display:block;position:absolute;cursor:pointer}.jssora051 .a{fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10}.jssora051:hover{opacity:.8}.jssora051.jssora051dn{opacity:.5}.jssora051.jssora051ds{opacity:.3;pointer-events:none}

.thumb-action{}
.thumb-action [class*='row']{justify-content: center; padding:0;}
.thumb-action [class*='row']>[class*='col-']{}
.thumb-action-img{position:relative;  background:var(--room-thumb-bg); margin-bottom: 0.2rem; overflow:hidden; isolation: isolate;}
.thumb-action-img img, .thumb-action-img{width:100%; }
.thumb-action-img{border-radius:4px; outline:2px solid #ececec;}
.thumb-action-img >h2, .read-more-btn{position: absolute; top: 0; left: 0; width: 100%; text-align: center; font-size: 1.2rem; background: var(--aprt-tumb-bg);  color: #ffffff; text-transform: uppercase; padding: 0.5rem 0;font-weight: 400;}

#b247SearchBoxContainer{background:var(--widget-bg); padding:0.1rem 0 0 !important; margin-bottom:1rem; }
.searchbox__clickable a{background-color:var(--widget-btn-bg) !important;}
.sbx-container{margin-bottom:0;} 
.caption-text
{
    font-family:var(--body-font);
}
.thumb-action-img
{
	transform-style:preserve-3d;
	perspective:1000px;
}
.thumb-action-img:hover h2, .thumb-action-img:focus h2
{
	transform: rotateX(90deg); backface-visibility: hidden; transition:all linear 0.3s;
}
.read-more-btn
{
	background: var(--thumb-hover);  transform: rotateX(90deg);  backface-visibility: hidden;  transition:all linear 0.3s;
}
.thumb-action-img:hover .read-more-btn, .thumb-action-img:focus .read-more-btn
{   
    transform: rotateX(0deg); 
}
.more-acc
{
	position:relative;
}
.more-acc:after
{
	content:'';
	position:absolute;
	width:100%;
	height:100%;
	background:rgba(0,0,0,0.5);
	top:0;
	left:0;	
}

.more-acc a
{
    position: absolute;
    top: 50%;
    z-index: 999;
    left: 50%;
    color: #fff;
    transform: translate(-50%, -50%);
    background: #21a8e0;
    text-transform: uppercase;
    padding: 0.5rem 1rem;
    text-decoration: none;
}
.more-acc:hover a
{
	background:#21a8e0;
}
.tweenty4-outer
{
	position: fixed;
    bottom: 20px;
    right: -160px;
    padding: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
	z-index:1000;
}
.tweenty4-outer, .tweenty4
{
    width: 140px;
    height: 120px;
}
.tweenty4
{
	position:absolute;
    border-radius: 50%;
    border: 10px solid #cccccc;
    border-top: 10px solid #ff5778;
	animation:spin linear 1s infinite;
    background: #fff;
    z-index: -1;
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.tweenty4:after
{
	content:'';
	position:absolute; 
}
.tweenty4 img
{
}
.tweenty4-outer h4
{
} 
.tweenty4-outer p
{
    margin: 0;
    line-height: 1.8rem;
    text-transform: capitalize;
    font-size: 2rem;
	font-weight:300;
}
.tweenty4-outer p span
{
	display:block;
    font-size: 1rem;
    margin-top: 0.5rem;
	color:var(--primary-bg);
	font-weight:400;
}
.widgetPos
{
    position: fixed;
    top: 50px;
    left: 0;
    width: 100%;
    z-index: 9999;
    isolation: isolate;
}

.contents{background:#ffffff; margin: 3rem 0; }
.txt-formation
{
	 perspective: 1000px;
}

.hrs
{
    position: absolute;
    right: 0;
    top: 0;
	transform-style:preserve-3d;
	animation:rotatehr linear 2s infinite;
}
@keyframes rotatehr
{
	0%{transform:rotateY(0deg);}
	50%{transform:rotateY(-90deg);}
	100%{transform:rotateY(-0deg)};
}
.guest-features>h4, .map-location>h4
{
	text-align:left;
}
.icon-img{justify-content:center;}

.icon-img>li{display: block !important;   
    margin: 0.5rem 0rem;
    width: 20%;}
.icon-img img{ display:block;   margin: 0 auto; max-width:62px; filter: grayscale(1);}
.icon-img img+span{ text-align:center; width:100%;
    display: block;
    text-transform: uppercase;
    margin-top: 0.5rem;
    font-weight: 400;font-size: 0.75rem;} 

.facilityP>li>img{max-width:100%;}

.features, .map
{
	background:#f1f1f1;
}
.features :is(ul), .map-location :is(ul)
{
    list-style: none;	
}
.features ul :is(li)
{
    
}
.features ul :is(li), .map-location ul :is(li)
{
    display: flex;  flex-flow: row
}
.features ul>li :is(i, label)
{
    padding-right: 0.5rem;
}
.features ul>li :where(i){color: var(--facility-check);}

.guest-features>a.btn
{
    display: table; margin: 1rem auto; box-shadow: none; text-transform: uppercase;  font-size: 0.9rem;
}
.guest-features img{display:block; margin:0 auto;}
footer
{
    padding: 1rem 0; background: var(--footer-bg); 
	position:relative;
}

.front-desk
{
    background: #e8e6e6;
    padding: 0.5rem 0.2rem;
}
.front-desk>h4
{
	text-transform:uppercase;
}

.front-desk>p
{
	font-size:0.9rem;
}

.front-desk>p>strong
{
	font-size:1rem;
}

.description, owle-photo
{
	padding:1rem 0 0;
}
.description ul>li
{
	/*margin-right: 1rem;*/
    padding-bottom: 0.7rem;
	min-width: 33.333%;
}
.description ul>li i
{
	margin-right:0.2rem;
}
.description img
{
    max-width: 70px;
    padding: 0.2rem;
    margin: 0.4rem;
}
.owl-btn{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
	}
.owl-btn a:nth-of-type(1), .owl-btn a:nth-of-type(2)
{
    color: #fff;
    text-transform: uppercase;
    padding: 0.5rem 1rem;
    font-size: 1.2rem;
    font-weight: 400;
    text-decoration: none;
	}
.owl-btn a:nth-of-type(1)
{
    background: #21a8e0;
    margin-right: 2rem;
}
.owl-btn a:nth-of-type(2)
{
    background: #000;	
}
.owl-btn{}
.desc-wrap
{
	background:#e8e6e6 /*f9ba65 */ ;
	
   padding: 1rem 0.8rem;
}
.owl-dots{display:none;}
.owle-photo 
{
}
.owle-photo .owl-nav
{
	    margin-top: 0 !important;
}
.things-row
{
}
.things-row:nth-of-type(even)
{
	
}
.things-row:nth-of-type(even) [class*='col']:nth-of-type(1)
{
	order:2
}
.things-row:nth-of-type(even) [class*='col']:nth-of-type(2)
{
	order:1;
}
footer:before
{
    /*content: "";
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    width: 95%;
    background: #198e34;
    padding: 1px;*/
}
footer [class*='row']
{
	align-items:center;
}
.footer-logo{ display: flex; justify-content: flex-start; align-items: center; flex-flow: row wrap;}
.footer-logo ul{flex:0 0 100%;    display: flex;   justify-content: center;   align-items: center;   margin-bottom: 0;  margin-top: 1rem;}
.footer-logo ul>li{ list-style: none; padding-bottom: 0; background: var(--footer-social); margin-right: 1rem; border-radius: 50%; height: 42px; width: 42px;
    display: flex; align-items: center; justify-content: center;}
.footer-logo ul>li a{ color:#ffffff; text-decoration:none;}
.footer-logo ul>li a>i{}
.footer-logo ul>li:hover a, .footer-logo ul>li:focus a{ color:#f1f1f1;}
.footer-map>iframe{    max-height: 150px;}

.reserve{  text-align: left;  margin-top: 2rem;  color: var(--reserve);  font-size: 0.8rem;  border-top: 1px solid var(--reserve);}
.footer-menu ul{display: flex; flex-flow: row wrap; justify-content: center;   align-items: center; margin-bottom: 0;  margin-top: 2rem;}
.footer-menu ul>li{list-style:none; text-transform: uppercase; font-size: 0.9rem; padding: 0rem 0.5rem 0;}
.footer-menu ul>li a{color:#ffffff; text-decoration:none;}
.footer-menu ul>li:hover a, .footer-menu ul>li:focus a
{
	color:#e12621;
}