<?php

namespace capac\Providers\Menu\Evento;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class MenuEventoProvider extends ServiceProvider
{
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {  
            
            $evento = session()->get('evento');

            // dd(session()->get('evento'));

            Gate::define('evento', function ($user) {
                if(session()->get('evento') == true){
                    return $user;
                }
            });

            Gate::define('cache', function ($user) {
                if(session()->get('cache') == true){
                    return $user;
                }
            });

            $event->menu->add('Evento');
            $event->menu->add(
                [
                    'text'       => 'Início',
                    'url'        => 'home',
                    'icon'       => 'home',
                ],
                [
                    'text'       => 'Evento',
                    'url'        => 'evento',
                    'icon'       => 'calendar-check-o',
                ],
                [
                    'text'       => 'Informações Evento',
                    'url'        => 'evento.informacoes',
                    'icon'       => ' fa-question-circle',
                    'can'        =>  ['evento', 'cache'],
                    
                ],
                [
                    'text'       => 'Informações Gerais do Evento',
                    'url'        => route('evento.informacoesGerais'),
                    'icon_color' => 'aqua',
                    'can'        =>  'evento',
                ],
                [
                    'text'       => 'Arquivos do Evento',
                    'url'        => route('evento.arquivosDoEvento'),
                    'icon_color' => 'aqua',
                    'can'        =>  'evento',
                ],
                [
                    'text'       => 'Dados do Produtor',
                    'url'        => route('evento.dadosDoProdutor'),
                    'icon_color' => 'aqua',
                    'can'        =>  'evento',
                ],
                [
                    'text'       => 'Arquivos Para Comunicação e Produção',
                    'url'        => route('evento.arquivosComunicacaoProducao'),
                    'icon_color' => 'aqua',
                    'can'        =>  'evento',
                ],
                [
                    'text'       => 'Cadastro do Proponente',
                    'url'        => route('evento.cadastroDoProponente'),
                    'icon_color' => 'aqua',
                    'can'        => 'evento',
                ]
        
            );

        });
    }


    public function register()
    {
        
    }
}
