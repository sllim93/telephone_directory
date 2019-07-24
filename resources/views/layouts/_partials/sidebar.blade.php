<button class="m-aside-left-close  m-aside-left-close--skin-light" id="m_aside_left_close_btn">
	<i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{route('home')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fas fa-chalkboard"></i>
					<span class="m-menu__link-text">Home</span>
				</a>
			</li>
			@if(auth()->user())
			<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{route('directory.index')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fas fa-chalkboard"></i>
					<span class="m-menu__link-text">Directory</span>
				</a>
			</li>
			@endif
		</ul>
	</div>
</div>