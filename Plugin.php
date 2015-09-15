<?php namespace RainLab\Weather;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Weather',
            'description' => 'Provides the local weather information.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-sun-o',
            'homepage'    => 'https://github.com/rainlab/weather-plugin'
        ];
    }

    public function registerComponents()
    {
        return [
           '\RainLab\Weather\Components\Weather' => 'weather'
        ];
    }
}
