<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta content="telephone=no" name="format-detection">
  <title>Kerve</title>
  
  <style type="text/css">
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

    a {
      color: #000000;
      text-decoration: underline;
      padding-left: 0px;
    }

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

  </style>

</head>