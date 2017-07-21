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
                    "../themes/violet_ui/templates/html--node__3.tpl.php": "source/html-src/index.php", //ready
                    "../themes/violet_ui/templates/html--node__22.tpl.php": "source/html-src/index_ar.php",

                    "../themes/violet_ui/templates/html--node__5.tpl.php": "source/html-src/advertising.php", //ready
                    "../themes/violet_ui/templates/html--node__23.tpl.php": "source/html-src/advertising_ar.php",

                    "../themes/violet_ui/templates/html--node__6.tpl.php": "source/html-src/branding.php", //ready
                    "../themes/violet_ui/templates/html--node__24.tpl.php": "source/html-src/branding_ar.php",

                    "../themes/violet_ui/templates/html--node__7.tpl.php": "source/html-src/cfc.php", //ready
                    "../themes/violet_ui/templates/html--node__25.tpl.php": "source/html-src/cfc_ar.php",

                    "../themes/violet_ui/templates/html--node__8.tpl.php": "source/html-src/about-company.php", //ready
                    "../themes/violet_ui/templates/html--node__26.tpl.php": "source/html-src/about-company_ar.php",

                    "../themes/violet_ui/templates/html--node__9.tpl.php": "source/html-src/comps.php", //ready
                    "../themes/violet_ui/templates/html--node__27.tpl.php": "source/html-src/comps_ar.php",

                    "../themes/violet_ui/templates/html--node__10.tpl.php": "source/html-src/design.php", //ready
                    "../themes/violet_ui/templates/html--node__28.tpl.php": "source/html-src/design_ar.php",

                    "../themes/violet_ui/templates/html--node__11.tpl.php": "source/html-src/fondexx.php", //ready
                    "../themes/violet_ui/templates/html--node__29.tpl.php": "source/html-src/fondexx_ar.php",

                    "../themes/violet_ui/templates/html--node__4.tpl.php": "source/html-src/thank-you.php", //ready
                    "../themes/violet_ui/templates/html--node__31.tpl.php": "source/html-src/thank-you_ar.php",

                    "../themes/violet_ui/templates/html--node__12.tpl.php": "source/html-src/contacts.php", //ready
                    "../themes/violet_ui/templates/html--node__32.tpl.php": "source/html-src/contacts_ar.php",

                    "../themes/violet_ui/templates/html--node__13.tpl.php": "source/html-src/mail-marketing.php", //ready
                    "../themes/violet_ui/templates/html--node__33.tpl.php": "source/html-src/mail-marketing_ar.php",

                    "../themes/violet_ui/templates/html--node__14.tpl.php": "source/html-src/mobile-marketing.php", //ready
                    "../themes/violet_ui/templates/html--node__34.tpl.php": "source/html-src/mobile-marketing_ar.php",

                    "../themes/violet_ui/templates/html--node__15.tpl.php": "source/html-src/seo.php", //ready
                    "../themes/violet_ui/templates/html--node__35.tpl.php": "source/html-src/seo_ar.php",

                    "../themes/violet_ui/templates/html--node__16.tpl.php": "source/html-src/smm.php",  //ready
                    "../themes/violet_ui/templates/html--node__36.tpl.php": "source/html-src/smm_ar.php",

                    "../themes/violet_ui/templates/html--node__17.tpl.php": "source/html-src/strategy.php", //ready
                    "../themes/violet_ui/templates/html--node__37.tpl.php": "source/html-src/strategy_ar.php",

                    "../themes/violet_ui/templates/html--node__18.tpl.php": "source/html-src/tax.php",  // ready
                    "../themes/violet_ui/templates/html--node__38.tpl.php": "source/html-src/tax_ar.php",

                    "../themes/violet_ui/templates/html--node__19.tpl.php": "source/html-src/404.php", //ready
                    "../themes/violet_ui/templates/html--node__39.tpl.php": "source/html-src/404_ar.php",

                    "../themes/violet_ui/templates/html--node__20.tpl.php": "source/html-src/403.php", //ready
                    "../themes/violet_ui/templates/html--node__40.tpl.php": "source/html-src/403_ar.php",
                    
                    "../themes/violet_ui/templates/html--node__21.tpl.php": "source/html-src/arabic.php"
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
