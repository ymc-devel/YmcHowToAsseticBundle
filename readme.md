# YmcHowToAsseticBundle

## Description
This is Demo-Code for the blogpost **Symfony2 insights – Assetic** on http://ymc.ch

## Links
German: http://www.ymc.ch/symfony2-insights-assetic

English: http://www.ymc.ch/en/symfony2-insights-assetic

## Configuration
Checkout this Repository into the ```src/``` directory in your Smyfony2 Standard installation.
You have to change the Assetic-Configuration in ```app/config/config.yml``` like this:

    # app/config/config.yml
    assetic:
        debug:          %kernel.debug%
        use_controller: false
        filters:
            cssrewrite: ~
            less:
                node: /usr/local/bin/node
                node_paths: [/usr/local/lib/node]
            yui_css:
                jar: %kernel.root_dir%/../java/yuicompressor-2.4.6.jar
            yui_js:
                jar: %kernel.root_dir%/../java/yuicompressor-2.4.6.jar