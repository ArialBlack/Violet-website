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
                    "../themes/violet_ui/templates/html--node__4.tpl.php": "source/html-src/thank-you.html",
                    "../themes/violet_ui/templates/html--node__5.tpl.php": "source/html-src/advertising.html",
                    "../themes/violet_ui/templates/html--node__6.tpl.php": "source/html-src/branding.html",
                    "../themes/violet_ui/templates/html--node__7.tpl.php": "source/html-src/cfc.html",
                    "../themes/violet_ui/templates/html--node__8.tpl.php": "source/html-src/about-company.html",
                    "../themes/violet_ui/templates/html--node__9.tpl.php": "source/html-src/comps.html",
                    "../themes/violet_ui/templates/html--node__10.tpl.php": "source/html-src/design.html",
                    "../themes/violet_ui/templates/html--node__11.tpl.php": "source/html-src/fondexx.html",
                    "../themes/violet_ui/templates/html--node__12.tpl.php": "source/html-src/contacts.html",
                    "../themes/violet_ui/templates/html--node__13.tpl.php": "source/html-src/mail-marketing.html",
                    "../themes/violet_ui/templates/html--node__14.tpl.php": "source/html-src/mobile-marketing.html",
                    "../themes/violet_ui/templates/html--node__15.tpl.php": "source/html-src/seo.html",
                    "../themes/violet_ui/templates/html--node__16.tpl.php": "source/html-src/smm.html",
                    "../themes/violet_ui/templates/html--node__17.tpl.php": "source/html-src/strategy.html",
                    "../themes/violet_ui/templates/html--node__18.tpl.php": "source/html-src/tax.html",

                    "../themes/violet_ui/templates/html--node__19.tpl.php": "source/html-src/404.html",
                    "../themes/violet_ui/templates/html--node__20.tpl.php": "source/html-src/403.html",
                    "../themes/violet_ui/templates/html--node__21.tpl.php": "source/html-src/arabic.html",
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
