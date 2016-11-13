# echo-landing
F212 Echo Landing Page – WordPress Template

URL: http://goo.gl/qLgXCB


### environment:
```bash
# make sure you have Xcode installed (https://developer.apple.com/download)
$ cd {development_location}
$ git clone git@github.com:jodriscoll/echo-landing.git
$ cd {development_location}/echo-landing/
$ git status
```


### sass:
```bash
# make sure you have Sass installed (http://sass-lang.com/install)
$ cd {development_location}/echo-landing/sass/
$ sass --watch --sourcemap=none echo-lp.scss:echo-lp.min.css --style compressed
```


### javascript:
```bash
# make sure you have UglifyJS installed (https://www.npmjs.com/package/uglify-js)
$ cd {development_location}/echo-landing/javascript/
$ uglifyjs echo-template.js -o echo-template.min.js -c -m
# translation: sourcefile --output destionationfile --compressed --mangled (https://github.com/mishoo/UglifyJS2)
```


### php:
- ````/php-partials/functions.php````: includes any PHP partials required for this template
- ````echo-landing.php````: core template file that should be placed in the root of your active theme
