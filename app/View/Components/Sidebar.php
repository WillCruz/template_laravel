<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $links; 

    public function __construct()
    {
        // Define os links do sidebar aqui ou busca de um arquivo de configuração/banco de dados
        $this->links = [
            [
                'label' => 'Dashboard',
                'icon' => 'icon-grid',
                'route' => 'dashboard', // Nome da rota
                'active' => false //request()->routeIs('dashboard'), // Verifica se a rota atual é a do dashboard
            ],
            [
                'label' => 'UI Elements',
                'icon' => 'icon-layout',
                /* 'route' => 'ui.basic', */
                'active' => false,
                'controls' => 'ui.basic',
                'sublinks' => [
                    [
                        'label' => 'Buttons',
                        'route' => 'ui.buttons',
                        'active' => false //request()->routeIs('ui.buttons'),
                    ],
                    [
                        'label' => 'Dropdowns',
                        'route' => 'ui.dropdowns',
                        'active' => false //request()->routeIs('ui.dropdowns'),
                    ],
                    [
                        'label' => 'Typography',
                        'route' => 'ui.typography',
                        'active' => false //request()->routeIs('ui.typography'),
                    ],
                ],
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar', ['links' => $this->links]);
    }
}