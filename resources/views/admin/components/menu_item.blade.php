@if(optional($menu)['type'] === 'header')
    <li class="header">{{ $menu['name'] }}</li>
@elseif($menu['type'] === 'single')
    <li {{ active_class_menu($menu) }}>
        <a href="{{ get_link_route($menu['route']) }}">
            <i class="{{ optional($menu)['icon'] }}"></i>
            <span>{{ optional($menu)['name'] }}</span>
        </a>
    </li>
@elseif(optional($menu)['type'] === 'multi')
    <li class="treeview {{active_class_menu($menu)}}">
        <a href="#">
            <i class="{{ optional($menu)['icon'] }}"></i>
            <span>{{ optional($menu)['name'] }}</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @foreach(optional($menu)['children'] as $submenu)
                @component('admin.components.submenu_item', ['menu' => $submenu])
                @endcomponent
            @endforeach
        </ul>
    </li>
@endif