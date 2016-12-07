<?php
/*
 * MyBB: [jQuery] Appearing Scroll to Top
 *
 * File: totop.php
 * 
 * Authors: Vintagedaddyo, effone
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 1.0
 * 
 */

// Disallow direct access to this file for security reasons

if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$plugins->add_hook("pre_output_page","totop");

function totop_info()
{
    global $lang;

    $lang->load("totop");
    
    $lang->totop_Desc = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;">' .
        '<input type="hidden" name="cmd" value="_s-xclick">' . 
        '<input type="hidden" name="hosted_button_id" value="AZE6ZNZPBPVUL">' .
        '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">' .
        '<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">' .
        '</form>' . $lang->totop_Desc;

    return Array(
        'name' => $lang->totop_Name,
        'description' => $lang->totop_Desc,
        'website' => $lang->totop_Web,
        'author' => $lang->totop_Auth,
        'authorsite' => $lang->totop_AuthSite,
        'version' => $lang->totop_Ver,
        'compatibility' => $lang->totop_Compat
    );
}


function totop($page)
{
	global $mybb,$db;


        if(THIS_SCRIPT=="index.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
	    if(THIS_SCRIPT=="forumdisplay.php")
	{
		{
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
			
			return $page;
		}
	}
        if(THIS_SCRIPT=="showthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="memberlist.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="member.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="misc.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="search.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="modcp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="usercp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="private.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="printthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="calendar.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
        if(THIS_SCRIPT=="portal.php")
	{

		{
			$page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/totop/css/totop.css" />
<script type="text/javascript" src="'.$mybb->settings["bburl"].'/inc/plugins/totop/js/init.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="backtop">
    <a class="go-top" href="#top" title="Back to Top"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/top.png" /></a>
</div>
</body>',$page);
			
			return $page;
		}
	}
}

?>