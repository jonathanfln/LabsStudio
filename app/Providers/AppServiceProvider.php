<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Article;
use App\Comment;
use Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event){

            if(Gate::allows('admin'))
            {
                $event->menu->add([
                    'text'        => 'Articles',
                    'url'         => 'admin/articles',
                    'icon'        => 'tag',
                    'label' => Article::where('validation',2)->count(),
                    'label_color' => 'warning',
                ]);
            }
            else
            {
                $event->menu->add([
                    'text'        => 'Articles',
                    'url'         => 'admin/articles',
                    'icon'        => 'tag',
                ]);
            }

        if(Gate::allows('admin'))
            {
                $event->menu->add([
                    'text' => 'Commentaires',
                    'url' => 'admin/comments',
                    'icon' => 'file',
                    'label' => Comment::where('validation',2)->count(),
                    'label_color' => 'warning',
                ]);
            }
            else
            {
               $event->menu->add([
                    'text' => 'Commentaires',
                    'url' => 'admin/comments',
                    'icon' => 'file',
                ]); 
            };
        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
