module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            development: {
                options: {
                    paths: ['less'],
                    compress: false,
                    cleancss: true,
                    dumpLineNumbers: 'comments'
                },
                files: {
                    '../themes/violet_ui/css/style.css': 'source/less/style.less'
                }
            }
        },

        bake: {
            your_target: {
                options: {
                    // Task-specific options go here.
                },

                files: {
                    // files go here, like so:
                    "../themes/violet_ui/templates/html--node__3.tpl.php": "source/html-src/index.html",
                    "../themes/violet_ui/templates/html--node__5.tpl.php": "source/html-src/advertising.html",
                    //"../branding.php": "source/html-src/branding.html",
                   // "../cfc.php": "source/html-src/cfc.html",
                   // "../company-descr.php": "source/html-src/company-descr.html",
                   // "../comps.php": "source/html-src/comps.html",
                   // "../design.php": "source/html-src/design.html",
                  //  "../fondexx.php": "source/html-src/fondexx.html",
                   // "../get-in-touch.php": "source/html-src/get-in-touch.html",
                  //  "../mail-marketing.php": "source/html-src/mail-marketing.html",
                  //  "../mobile-marketing.php": "source/html-src/mobile-marketing.html",
                 //   "../seo.php": "source/html-src/seo.html",
                  //  "../smm.php": "source/html-src/smm.html",
                 //   "../strategy.php": "source/html-src/strategy.html",
                  //  "../tax.php": "source/html-src/tax.html",
                    "../themes/violet_ui/templates/html--node__4.tpl.php": "source/html-src/thank-you.html",
                 //   "../404.php": "source/html-src/404.html"
                }
            }
        },

        watch: {
            grunt: {
                files: ['Gruntfile.js']
            },

            less: {
                files: [
                    'source/less/**/*.less'
                ],
                tasks: ['less', 'postcss']
            },

            bake: {
                files: [
                    'source/html-src/**/*.*'
                ],
                tasks: ['bake']
            }

        },
        
        postcss: {
            options: {
              processors: [
                require('autoprefixer')({browsers: ['last 2 versions', 'ie 10']})
              ]
            },
            dist: {
              src: '../themes/violet_ui/css/style.css'
            }
        }
    });

    // load npm modules
    grunt.loadNpmTasks('grunt-bake');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');

    // register tasks
    grunt.registerTask('default', ['bake', 'less', 'postcss', 'watch']);
    grunt.registerTask('jenkins', ['bake', 'less', 'postcss']);

};
