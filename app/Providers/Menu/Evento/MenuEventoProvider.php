<?php

namespace App\Providers\Menu\Evento;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class MenuEventoProvider extends ServiceProvider
{
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {    
            $event->menu->add('Menu');
            $event->menu->add('Evento');
            $event->menu->add(
                [
                    'text'       => 'Informações Gerais do Evento',
                    'url'        => '',
                    'icon_color' => 'aqua',
                ],
                [
                    'text'       => 'Arquivos do Evento',
                    'url'        => '',
                    'icon_color' => 'aqua',
                ],
                [
                    'text'       => 'Dados do Produtor',
                    'url'        => '',
                    'icon_color' => 'aqua',
                ],
                [
                    'text'       => 'Arquivos Para Comunicação e Produção',
                    'url'        => '',
                    'icon_color' => 'aqua',
                ],
                [
                    'text'       => 'Cadastro do Proponente',
                    'url'        => '',
                    'icon_color' => 'aqua',
                ]
        
            );

        });
    }


    public function register()
    {
        
    }
}
