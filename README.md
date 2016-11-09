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


### php:
- *functions.php*: includes any PHP partials required for this template
- *echo-landing.php*: core template file that should be placed in the root of your active theme