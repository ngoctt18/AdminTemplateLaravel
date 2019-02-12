<?php

function GitPull(){
    $cmd = "sh /home/vpet/web/dev.vpet.3fgroup.vn/public_html/github.sh";
    exec($cmd,$output);
    print_r($output);
}
function index_row($paginator, $index){
    $page = request('page') < 1 ? 0 : request('page') - 1;
    return $paginator->perPage() * $page + $index + 1;
}

function get_link_route($routeName){
    return Route::has($routeName) ? route($routeName, [], false) : '';
}

function has_route_name($menu, $routeName){
    if($menu['type'] === 'single' && $menu['route'] === $routeName){
        return true;
    } else
    if($menu['type'] === 'multi'){
        foreach($menu['children'] as $submenu){
            if(has_route_name($submenu, $routeName)){
                return true;
            }
        }
    }
    return false;
}

function active_class_menu($menu){
    $routeName = Route::currentRouteName();
    if(has_route_name($menu, $routeName)){
        if($menu['type'] == 'single'){
            return 'class=active';
        }else
        if($menu['type'] == 'multi'){
            return 'menu-open active';
        }
    }
    return '';
}

// function cộng thêm số ngày vào 1 date
function plusDate($date_in, $date_plus){
    $date_trans = str_replace("/", "-", $date_in);
    $date_tmp = date('d-m-Y', strtotime($date_trans. '+'.$date_plus.' days' ));
    $date_out = str_replace("-", "/", $date_tmp);
    return $date_out;
}

function get_guard(){
    if(Auth::guard('admin')->check())
        {return "admin";}
    elseif(Auth::guard('writer')->check())
        {return "writer";}
}