@if(Auth::check())
	
	<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
	
	{{--@role('Administrador')--}}
		<li class="treeview">
			<a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>Voluntariado</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('voluntario') }}"><i class="fa fa-plus-circle"></i> <span>Voluntarios</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-suitcase" aria-hidden="true"></i> <span>Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('proyecto') }}"><i class="fa fa-folder"></i> <span>Proyectos</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Eventos</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('evento') }}"><i class="fa fa-calendar-plus-o"></i> <span>Eventos</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('blog') }}"><i class="fa fa-rss"></i> <span>Artículos</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-cog" aria-hidden="true"></i> <span>Administrar</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('actividad') }}"><i class="fa fa-dot-circle-o"></i> <span>Actividades</span></a></li>
				<li><a href="{{ backpack_url('banner') }}"><i class="fa fa-picture-o"></i> <span>Banner</span></a></li>
				<li><a href="{{ backpack_url('categoria') }}"><i class="fa fa-tasks"></i> <span>Categorías</span></a></li>
				<li><a href="{{ backpack_url('contacto') }}"><i class="fa fa-envelope"></i> <span>Mensajes</span></a></li>
				<li><a href="{{ backpack_url('patrocinador') }}"><i class="fa fa-handshake-o"></i> <span>Patrocinadores</span></a></li>
				<li><a href="{{ backpack_url('social') }}"><i class="fa fa-share-alt"></i> <span>Social</span></a></li>
				<li><a href="{{ backpack_url('slider') }}"><i class="fa fa-picture-o"></i> <span>Slider index</span></a></li>
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#"><i class="fa fa-group"></i> <span>Gestión de usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
			<ul class="treeview-menu">
				<li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Usuarios</span></a></li>
				<li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
			</ul>
		</li>
		{{--@endrole--}}
@endif