{{$slot}}
<div id="sidebar-menu">
	<ul class="pt-2">
		<li class="text-muted menu-title">{{__('pack.customerrelationship')}} </li>
		<li id="mainmenuItem-dashboard">
			<a href="/dashboard" class="waves-effect">
				<i class="mdi mdi-view-dashboard"></i> 
				<span> 
					{{__('pack.dashboard')}} 
				</span> 
			</a>
		</li>
		<li class="has_sub" id="mainmenuItem-customers">
			<a href="javascript:void(0);" class="waves-effect">
				<i class="mdi mdi-account-group"></i> 
				<span> 
					{{__('pack.customers')}} 
				</span> 
				<span class="menu-arrow"></span>
			</a>
			<ul class="list-unstyled">
                <!-- <li>
                	<a href="/customers/clients/list">
                		<i class="mdi mdi-contacts"></i> 
                		<span> 
							{{__('pack.clients')}} 
						</span> 
                	</a>
                </li>
                <li>
                	<a href="/customers/leads/list">
                		<i class="mdi mdi-spin mdi-star"></i> 
                		<span> 
							{{__('pack.leads')}} 
						</span> 
                	</a>
                </li> -->
                <li>
                	<a href="/customers/visitors/list">
                		<i class="mdi mdi-transit-transfer"></i> 
                		<span> 
							{{__('pack.visitors')}} 
						</span> 
                	</a>
                </li>
            </ul>
		</li>
		<!-- <li>
			<a href="/orders/list" class="waves-effect">
				<i class="mdi mdi-dump-truck"></i> 
				<span> 
					{{__('pack.orders')}} 
				</span>
			</a>
		</li>
		<li>
			<a href="/products/list" class="waves-effect">
				<i class="mdi mdi-barcode-scan"></i> 
				<span> 
					{{__('pack.products')}} 
				</span> 
			</a>
		</li> -->
		<!-- <li>
			<a href="/tasks/list" class="waves-effect">
				<i class="mdi mdi-briefcase-search-outline"></i> 
				<span> 
					{{__('pack.tasks')}} 
				</span> 
			</a>
		</li> -->
		<!-- <li>
			<a href="/settings" class="waves-effect">
				<i class="mdi mdi-settings"></i> 
				<span> 
					{{__('pack.settings')}} 
				</span> 
			</a>
		</li> -->
		<!-- <li>
			<a href="/users" class="waves-effect">
				<i class="mdi mdi-account-multiple-outline"></i> 
				<span> 
					{{__('pack.users')}} 
				</span> 
			</a>
		</li> -->
		<li class="text-muted menu-title">{{__('pack.frontend')}} </li>
		<!-- <li class="has_sub">
			<a href="javascript:void(0);" class="waves-effect">
				<i class=" mdi mdi-layers-outline"></i> 
				<span> 
					{{__('pack.pages')}} 
				</span> 
				<span class="menu-arrow"></span>
			</a>
			<ul class="list-unstyled">
                <li>
                	<a href="/frontend/pages/contacts">
                		<i class="mdi mdi-image-filter-none"></i> 
                		<span> 
							{{__('pack.contacts')}} 
						</span> 
                	</a>
                </li>
                <li>
                	<a href="/frontend/pages/about">
                		<i class="mdi mdi-image-filter-none"></i> 
                		<span> 
							{{__('pack.about')}} 
						</span> 
                	</a>
                </li>
            </ul>
		</li> -->
		<li id="mainmenuItem-landing">
			<a href="/frontend/landing" class="waves-effect">
				<i class="mdi mdi-expand-all-outline"></i> 
				<span> 
					{{__('pack.landingblocks')}} 
				</span> 
			</a>
		</li>
		<li id="mainmenuItem-knowledge">
			<a href="/knowledge" class="waves-effect">
				<i class="mdi mdi-information-outline"></i> 
				<span> 
					{{__('pack.knowledge')}} 
				</span> 
			</a>
		</li>
	</ul>
	<div class="clearfix"></div>
</div>