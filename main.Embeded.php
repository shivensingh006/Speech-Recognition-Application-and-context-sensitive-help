<body class="mainbody">
<div class="fond"></div>
 <div class="top" width="100%"> 
    <div id="divider" class="divider"></div>
	<div class="header_section">
		<div class="left_side">
			<div id="titre" class="toptitle"> <?php  echo _i18n ('default|default.titleTopPage');?></div>
		</div>
		<div class="right_side">
			<?php $page = _request('module'); ?>
			<div id="site_info"><?php echo '<a class="zoom" href=\'#\' onclick="javascript:OuvrirFenetre(\''._url('default||MoreInfo').'&page='.$page.'\',\'editsubnet\',\'width=1200,height=600\')"><img src="'._resource ("img/Very-Basic-Info-icon.png").'" alt="" title=""/></a>';?></div>	
		</div>
	</div>
</div>
<h1 class="titre1"><?php echo $TITLE_PAGE; ?></h1>
<div class="domaine" id="domaine">
<?php
if (isset ($menuItems))
    {
    $liste_param= CopixUrl::parse (CopixUrl::getCurrentUrl(),false,false);
    $module=$liste_param["module"];
    foreach ($menuItems as $menuCaption=>$menuUrl)
    {
        $liste_paramMenu= CopixUrl::parse ($menuUrl,false,false);
        

        if($menuUrl=="?module=".$module)
            echo '<a href="'.$menuUrl.'" class="menuselect">';
        else
            echo '<a href="'.$menuUrl.'" class="menu">';                            
        echo '<span>';
        echo $menuCaption;
        echo '</span>';
        echo '</a>';
    }
    }
?> 


</div>

<div id="maincontent">
                <?php echo $MAIN; ?>
            </div>
</body>
