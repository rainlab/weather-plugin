# Weather plugin

The plugin was created for the [php[tek] 2014](https://tek.phparch.com/) conference.

The weather information is loaded from [Open Weather Map](http://openweathermap.org/API). For the simplicity the country list in the Inspector dropdown menu is limited with United States, Canada and Australia, but if you edit the component definition in the page code manually you can set any country and state.

The plugin defines the Weather component that have four properties: 

* country - two-letter country code, the default value us "us"
* state - two-letter state code, the default value us "dc"
* city - city name, the default value is "Washington"
* units - units for the temperature and wind speed, possible values are "metric" and "imperial", the default value is "imperial".

To use the component, drop it on a page and use the `{% component 'weather' %}` tag anywhere in the page code to render it. Note that the component injects a CSS file reference to a page to style the widget. It's optional. If you want to use it, use the `{% styles %}` tag in the HEAD section. The next example shows a simplest page code that uses the weather component:

    title = "Weather"
    url = "/weather"

    [weather]
    units = "metric"
    ==
    <!DOCTYPE html>
    <html>
        <head>
            <title>Weather component example</title>
            {% styles %}
        </head>
        <body>
            {% component 'weather' %}
        </body>
    </html>

![back-end preview](http://dl.dropboxusercontent.com/u/73673100/Screenshots/pxs7.png)