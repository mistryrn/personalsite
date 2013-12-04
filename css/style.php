<?php header("Content-type: text/css"); ?>  
* { margin: 0; padding: 0; }
html { background-color: #eee; }

@font-face {
    font-family: 'bebas_neueregular';
    src: url('../fonts/BebasNeue-webfont.eot');
    src: url('../fonts/BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('../fonts/BebasNeue-webfont.woff') format('woff'),
         url('../fonts/BebasNeue-webfont.ttf') format('truetype'),
         url('../fonts/BebasNeue-webfont.svg#bebas_neueregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
h1 { font-family: "bebas_neueregular", Helvetica, Arial, Sans-Serif; font-size: 46pt; color: white; }
h2 { font-family: "Helvetica Neue", Helvetica, Arial, Sans-Serif; font-size: 18pt; font-weight: lighter; color: white; }
p { font-family: "Helvetica Neue", Arial, Sans-Serif; font-size: 14pt; font-weight: lighter; color: white; }
a {	text-decoration: none; }

.center {
    margin: 0 auto;
    padding: 25px;
    width: 325px;
}

html, body{
    /* any div up to fullscreen-cont must have this
    in this case html and body */
    height:100%;
    min-height:100%;
    margin:0;
}
.fullscreen-cont {
    display:block;position:relative;
    min-width:100%;
    min-height:100%;
    margin-bottom:2px;
}
.fullscreen-img {
    display:block;position:absolute;z-index:-1;
    min-width:100%;
    min-height:100%;
    background:transparent url('../images/bg<?php echo rand(1,5);?>.jpg') center center no-repeat;
    background-size:cover;
}
#profile { height: 325px; width: 325px; }

#menu { margin-top: 15px; }
.menu-item { padding: 0 20px 0 0; }
nav ul { list-style-type:none; }
nav ul li { display: inline; }