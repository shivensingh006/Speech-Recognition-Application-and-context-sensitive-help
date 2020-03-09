<?php
     
//TMA 7450 ou embarqué - si 7450 -> 0

if (CopixSession::get('modeconfig') == 0)     // 7450
{
    //echo '&nbsp;&nbsp;<img src="welcome.jpg" border="0" alt="welcome.jpg" align="center">';
    echo '<center>'; // pour IE, ne gene en rien FF

    echo '<div id="image_container">';
    echo '<img src="'._resource ("img/image_tma.jpg").'" alt="" title=""/>';
    echo '</div>';
    echo '</center>'; 
}
else      // embarqué
{


    echo '<div id="image_container">';
  // echo '<img src="'._resource ("img/image_tma.jpg").'" alt="" title=""/>';
	?>
	<div class="row bannercontent">
		<div class="row justify-content-lg-between align-items-lg-center py-5">
					<div class="col-6 appinfo">
						<h1 class="app-header-line">Terminal Management Application</h1>
						<p class="lead mb-4">TMA (Terminal Management Application) automates the generation of the configuration files needed by phones, according their types and manage the phone releases deployment</p>
						<?php echo '<a class="zoom learn_more" href=\'#\' onclick="javascript:OuvrirFenetre(\''._url('default||MoreInfo').'&page=tmainfo\',\'editsubnet\',\'width=800,height=600\')">Learn more</a>';?>
					</div>
					<div class="col-6">
						<img src="<?php echo _resource ("img/image_tma.jpg");?>" class="tma-img" alt="Terminal Management Application">
					</div>
		</div>
	</div>
	<div class="row">
          <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Application configuration</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to Cancel the management of global and specific data files and to retain only software update
actions on the terminals <?php echo '<a class="zoom" href=\'#\' onclick="javascript:OuvrirFenetre(\''._url('default||MoreInfo').'&page=appconfig\',\'editsubnet\',\'width=800,height=600\')"><b>...</b></a>';?></p>
              </dd>
            </dl>
          </div>
		   <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Servers configuration</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to define the parameters of the external storage FTP server(s))<?php echo '<a class="zoom" href=\'#\' onclick="javascript:OuvrirFenetre(\''._url('default||MoreInfo').'&page=serverconfig\',\'editsubnet\',\'width=1000,height=600\')"><b>...</b></a>';?></p>
              </dd>
            </dl>
          </div>
		   <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Inventory</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to view the inventory of installation terminals and manage the list of
terminals) <?php echo '<a class="zoom" href=\'#\' onclick="javascript:OuvrirFenetre(\''._url('default||MoreInfo').'&page=inventory\',\'editsubnet\',\'width=800,height=600\')"><b>...</b></a>';?></p>
              </dd>
            </dl>
          </div>
    </div>
	<div class="row">
          <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Software management</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to install and manage the terminal software releases
and start terminal update actions)<a href="#"><b>...</b></a></p>
              </dd>
            </dl>
          </div>
		   <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Terminals configuration</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to distribute the global and specific parameters and to
start data update on the terminal<a href="#"><b>...</b></a></p>
              </dd>
            </dl>
          </div>
		   <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Deployment</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to deploy the terminals manually and also used to make available to the FTP server(s) the template files and the certificates<a href="#"><b>...</b></a></p>
              </dd>
            </dl>
          </div>
    </div>
	<div class="row">
          <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Terminals configuration export</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to export in .csv format the global and specific
data about Mitel 6000 SIP Phones and MiVoice 5300 IP Phones<a href="#"><b>...</b></a></p>
              </dd>
            </dl>
          </div>
		   <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Actions display</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu is used to display the actions started on the terminals (deployment, terminal
software, global and specific data)<a href="#"><b>...</b></a></p>
              </dd>
            </dl>
          </div>
		   <div class="col-4">
            <h3 class="h5 font-weight-bold pb-3">Events log</h3>
            <dl>
              <dd class="text-sm">
                <p class="mb-0">This menu displays the events log of (deployment, terminal
software, global and specific data)<a href="#"><b>...</b></a></p>
              </dd>
            </dl>
          </div>
    </div>
	<?php
    echo '</div>';
}

?>

<!--<?php
   $mode = CopixSession::get ('modeconfig');
   if ($mode == 0)//M7450 mode
   {
        echo'<h2>'._i18n ('default.reference').'</h2>';
        echo'<ul>';
        echo'<li><a href="http://www.copix.org">'._i18n ('default.referencemanual').'</a></li>';
        echo'</ul>';
   }  
?> -->
