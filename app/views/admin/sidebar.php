<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="active"> <a href="<?=site_url('/')?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href=""><i class="fas fa-suitcase"></i> <span> Stores </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="<?=site_url('/store')?>"> All Stores </a></li>
							</ul>
						</li>

						<li class="ProductRecords"> <a href="ProductRecords"><i class="fas fa-suitcase"></i> <span> Products </span></a></li>
						   
						<li class="submenu"> <a href=""><i class="fas fa-suitcase"></i> <span> Orders </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="<?=site_url('/allorder')?>"> All Orders </a></li>
                                <li><a href="<?=site_url('/pending-orders')?>"> Pending Orders </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Transaction </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="#"> All Transactions </a></li>
							</ul>
						</li>
                    </ul>
				</div>
			</div>
		</div>