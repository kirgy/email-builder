<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta content="telephone=no" name="format-detection">
  <title>Kerve</title>
  
  <style type="text/css">

  	/* GLOBAL RESETS */
    * { 
      margin: 0;
      padding: 0;
    }

    * {
      font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing:antialiased; 
      -webkit-text-size-adjust: none; 
    }

	img {
		display: block;
	}

    table {
      border-collapse: collapse !important;
    }

    a {
      color: #000000;
      text-decoration: none !important;
      padding-left: 0px;
    }

    a.underline {
    	text-decoration: underline !important;
    }

   .msoFix {
		mso-table-lspace:-1pt;
		mso-table-rspace:-1pt;
   }

    /**************************************/

    a.unsub {
      color: #FFFFFF;
      text-decoration: underline;
    }

    .footerlink a {color: #e79696 !important; text-decoration: none;}

    /* ------------------------------------- 
        BODY 
    ------------------------------------- */
    table.body-wrap { width: 100%;}

    /* ------------------------------------- 
        FOOTER 
    ------------------------------------- */
    table.footer-wrap {
      width: 100%;
      clear:both!important;
    }

    table.footer-wrap p {
      color: #CACACA;
    }

    [class~="desktop-hide"] {
			display: none; 
			font-size: 0; 
			max-height: 0; 
			line-height: 0; 
			padding: 0; (optional)
			mso-hide: all; /* hide elements in Outlook 2007-2013 */
	}




    /* ------------------------------------- 
        TYPOGRAPHY 
    ------------------------------------- */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin-bottom: 15px;
      color: #222222;
    }

    p { 
      margin-bottom: 15px; 
      color: #222222;
    }


    /* Be sure to place a .clear element after each set of columns, just to be safe */
    .clear { display: block; clear: both; }


    /* ------------------------------------------- 
        PHONE
        For clients that support media queries.
        Nothing fancy. 
    -------------------------------------------- */
    @media only screen and (max-width: 600px) {
      
      img { 
        max-width: 100%; 
      }
      
      table[class="body-wrap"] {
        padding: 0px 10px !important;
      }

      td[class="container"] {
        width: auto !important;
        max-width: 600px !important;
      }

      [class="mobile-padding"] {
        padding: 10px !important;
      }

      [class="mobile-hide"] {
        display: none !important;
      }

      a[class="btn"] {
        display:block!important;
        margin-bottom:10px!important;
        margin-right:0!important;
      }

      [class="cta-table"] {
        width: 100%;
      }

      [class~="mobile-column"] {
        width: auto!important;
        float: none !important;
        padding-top: 20px !important;
        margin-top: 20px !important;
        border-top: 1px solid #DDD;
      }

      [class="topless"] {
        border-top: 1px solid #DDD;
      }

      [class="600-width"] {
        width: 100%;
      }

      [class="98-width"] {
        width: 100%;
      }

      [class="mobile-no1s"] {
        text-align: center;
        width: 100%;
      }

      [class~="mobile-block"]  {
        display: block !important;
      }

      [class~="mobile-autocenter"] {
      	margin: 0 auto !important;
      	align: center !important;
      }

      [class~="mobile-block-cta-zero"] {
        padding-top: 20px !important;
        margin-top: 30px !important;
        margin-bottom: 10px !important;
        padding-bottom: 20px !important;
        border-top: 1px solid #DDD;
        border-bottom: 1px solid #DDD;
      }

      [class~="mobile-block-cta"] {
        padding-top: 20px !important;
        margin-top: 90px !important;
        margin-bottom: 10px !important;
        padding-bottom: 20px !important;
        border-top: 1px solid #DDD;
        border-bottom: 1px solid #DDD;
      }

      [class~="mobile-block-cta-double"] {
        padding-top: 20px !important;
        margin-top: 140px !important;
        margin-bottom: 10px !important;
        padding-bottom: 20px !important;
        border-top: 1px solid #DDD;
        border-bottom: 1px solid #DDD;
      }

      [class="mobile-center"] {
        display: block !important;
      }

      [class="mobile-center-100"] {
        display: block !important;
        width: 100% !important;
      }

      [class="mobile-center-border-bottom"] {
        display: block !important;
        width:100%;
        border-bottom: 1px solid #cccccc;
        margin-bottom: 30px;
        padding-bottom: 30px;       
      }

      [class="center-imagetable"] {
        width: 100%!important;
        float: none !important;
        padding-top: 20px !important;
        margin-top: 20px !important;
        padding-bottom: 20px !important;
        border-top: 1px solid #DDDDDD !important;
        border-bottom: 1px solid #DDDDDD !important;
        text-align: center !important;
      }

      [class="center-imagetable-borderless"] {
        width: 100%!important;
        float: none !important;
        padding-top: 20px !important;
        margin-top: 20px !important;
        padding-bottom: 20px !important;
      }

      [class="center-image"] {
        width: 100%!important;
        float: none !important;
        padding-top: 20px !important;
        margin-top: 20px !important;
        padding-bottom: 20px !important;
        text-align: center;
      }     

      [class="mobile-space"] {
        line-height:30px !important;
      }
      [class="mobile-space-10"] {
        line-height:10px !important;
      }

      [class="mobile-hidden"] {
        display: none !important;
      }

      [class~="mobile-fullwidth"] {
        width: 100% !important;
      }

      .mobile-padding-bottom {
        padding-bottom: 20px;
      }

      [class~="mobile-leftpad"] {
        padding-left: 10px;
      }

      [class~="mobile-padding"] {
        padding: 10px;
      }

      [class~="mobile-autoheight"] {
        min-height: 10px !important;
      }

      [class~="mobile-spacer"] {
        line-height: 20px !important;
      }

      [class~="mobile-typocenter"] {
          text-align: center !important;
      }

      [class~="desktop-hide"] {
		display: block !important;
		font-size: 12px !important;
		max-height: none !important;
		line-height: 1.5 !important;
      }
      [class~="mobile-text-center"] {
      	text-align: center !important;
      }

        td[class="pattern"] table { width: 100%; }
        td[class="pattern"] .hero_image img {
            width: 100%;
            height: auto !important;
        }      

        td[class="pattern"] .spacer { display: none; }
        td[class="pattern"] .colstatic{
        	display: block;
        }
        td[class="pattern"] .col{
            width: 100%;
            display: block;
        }
        td[class="pattern"] .col:first-child { margin-bottom: 30px; }
        td[class="pattern"] .hero_image img { width: 100%; }      

    }


    @media only screen and (max-width: 380px) {

      [class~="tiny-hide"] {
        display: none;
      }

      [class~="tiny-fullwidth"] {
        display: block !important;
        width: 100%;
      }

      [class~="tiny-center"] {
        text-align: center !important;
      }

      [class~="tiny-spacer"] {
        line-height: 20px !important;
      }

      [class="tiny-textcenter"] {
        text-align: center !important;
      }

      [class~="mobile-padding"] {
        padding: 10px !important;
      }
    }
/**************************/

.body-background-color {
	background-color: #eee;
}

/* block-view-online */

    .block-view-online td, .block-view-online td p, .block-view-online td a {
    	color: #ffffff;
    	text-align: center;
    }
    .block-view-online td a {
    	text-decoration: underline;
    }

/* block-logo */
	.block-logo-spacer {
		max-width: 245px;
		/*background-image: url('images/block-logo/side-background.jpg');*/
	}

	.block-logo-sideimg {
		max-width: 100%;
	}
	.block-logo-logoimg {
		max-width: 100%;
	}
/* title-text-cta */

	.h2-white {
		color: #ffffff;
	}

	p.black-text {
		color: #000000;
	}

  /****
  * Carousel code begins here
  *
  */
  input{
    display: none;
  }
  @media screen and (max-width:10000px){
    .cboxcheck:checked + .thumbnail,
    * [summary=cboxcheck]:checked + [summary^=thumbnail] {
    height: auto !important;
    max-height: none !important;
    line-height:0;
    }
    .thumbnail span,
    * [summary^=thumbnail] span {
    font-size:0;
    line-height:0;
    }
    
    .cboxcheck:checked + .thumbnail .car-content, 
    * [summary=cboxcheck]:checked + [summary^=thumbnail] [summary^=content]{
    display:none;
    max-height:0px;
    overflow:hidden;
    }
    .thumbnail .cbox1:checked + span .content-1,
    .thumbnail .cbox2:checked + span .content-2,
    .thumbnail .cbox3:checked + span .content-3,
    .thumbnail .cbox4:checked + span .content-4,
    .thumbnail .cbox5:checked + span .content-5,
    * [summary^=thumbnail] [summary=cbox1]:checked + span [summary=content-1], 
    * [summary^=thumbnail] [summary=cbox2]:checked + span [summary=content-2],
    * [summary^=thumbnail] [summary=cbox3]:checked + span [summary=content-3], 
    * [summary^=thumbnail] [summary=cbox4]:checked + span [summary=content-4], 
    * [summary^=thumbnail] [summary=cbox5]:checked + span [summary=content-5] 
    {
    display:block !important;
    max-height:none !important;
    overflow:visible !important;
    }
    

    .thumbnail .thumb,
    * [summary^=thumbnail] [summary=thumb]{
    cursor:pointer;
    display:inline-block;
    width:17.5%;
    margin:1% 0.62%;
    border:2px solid #bbbbbb;
    }
    .thumbnail .thumb:hover,
    * [summary^=thumbnail] [summary=thumb]:hover{
    border:2px solid #444444;
    }
    .thumbnail input:checked + span > span,
    * [summary^=thumbnail] [summary^=cbox]:checked + span > span{
    border-color: #444444;
    }  
    .thumbnail .thumb img,
    * [summary^=thumbnail] [summary=thumb] img{
    width:100%;
    height: auto;
    }
    .thumbnail img,
    * [summary^=thumbnail] img{
    max-height: none !important;
    }      
    .cboxcheck:checked + .fallback{
    display:none !important;
    display:none;
    max-height: 0px;
    height: 0px;
    overflow: hidden;
    }
    * [lang="x-cboxcheck"]:checked + [lang="x-fallback"]
    {
    max-height: 0px;
    height: 0px;
    overflow: hidden;
    }  
  }

  @media screen and (max-width:600px){
    .car-table.responsive,
    .car-table.responsive .thumbnail,
    .car-table.responsive .thumbnail .car-content img,
    .car-table.responsive .fallback .car-content img
     {
    width:100% !important;  
    height:auto;
     }
  }    


  </style>

</head>