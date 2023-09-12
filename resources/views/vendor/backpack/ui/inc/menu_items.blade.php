{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Categorias" icon="la la-question" :link="backpack_url('categoria')" />
<x-backpack::menu-item title="Lojas" icon="la la-question" :link="backpack_url('loja')" />
<x-backpack::menu-item title="Produtos" icon="la la-question" :link="backpack_url('produto')" />
<x-backpack::menu-item title="Fotos" icon="la la-question" :link="backpack_url('foto')" />
<x-backpack::menu-item title="Comentarios" icon="la la-question" :link="backpack_url('comentario')" />
<x-backpack::menu-item title="Usuario mercados" icon="la la-question" :link="backpack_url('usuario-mercado')" />
<x-backpack::menu-item title="Cartaos" icon="la la-question" :link="backpack_url('cartao')" />
<x-backpack::menu-item title="Acessos" icon="la la-question" :link="backpack_url('acesso')" />