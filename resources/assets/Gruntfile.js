 module.exports = function (grunt) {
    grunt.initConfig({

        watch: {
            prod: {
                files: ['css/src/*/*.scss', 'css/src/main.scss'],
                tasks: ['sass:prod', 'autoprefixer:prod', 'cssmin'],
                options: {
                    spawn: false,
                }
            },
            app: {
                files: ['css/src/*/*.scss', 'css/src/app.scss'],
                tasks: ['sass:app', 'autoprefixer:app'],
                options: {
                    spawn: false,
                }
            },
            scripts: {
                files: ['js/src/*.js'],
                tasks: ['concat:dist', 'uglify:my_target'],
                options: {
                    spawn: false,
                }
            }
        },

        sass: {
            prod: {
                options: {
                    style: 'compressed',
                    sourcemap: false,
                    noCache: true
                },
                files: {
                    'css/app.css': 'css/src/main.scss'
                }
            },
            app: {
                options: {
                    style: 'compressed',
                    sourcemap: 'file',
                    noCache: true
                },
                files: {
                    'css/app.css': 'css/src/main.scss'
                }
            }
        },

        autoprefixer: {
            prod: {
                options: {
                    browsers: ['last 2 versions', 'ie 8', 'ie 9']
                },
                single_file: {
                    src: 'css/app.css',
                    dest: 'css/app.css'
                }
            },
            app: {
                options: {
                    browsers: ['last 2 versions', 'ie 8', 'ie 9']
                },
                single_file: {
                    src: 'css/app.css',
                    dest: 'css/app.css'
                }
            }
        },

        combine_mq: {
            single_file: {
                src: 'css/main.css',
                dest: 'css/main.css',
                expand: false
            }
        },

        cssmin: {
            options: {
                report: 'gzip'
            },
            target: {
                files: {
                  '../../assets/css/app.css': ['css/vendor/slick.css', 'css/app.css']
                }
            }
        },


        // penthouse: {
        //     extract : {
        //         outfile : 'css/crit.css',
        //         css : 'css/main.css',
        //         url : 'http://healthcare.dev',
        //         width : 1280,
        //         height : 1000,
        //         skipErrors : false // this is the default
        //     },
        // },


        concat: {
            options: {
                separator: '',
            },
            dist: {
                src: ['js/vendor/jquery-3.2.1.min.js', 'js/vendor/slick.min.js'],
                dest: 'js/src/vendor.js',
            },
        },

        uglify: {
            my_target: {
                options: {
                    sourceMap: false,
                },
                files: {
                    '../../assets/js/app.js': ['js/src/!(app).js', 'js/src/app.js']
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-combine-mq');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    // grunt.loadNpmTasks('grunt-penthouse');

    grunt.registerTask('default', ['watch:prod']);
    grunt.registerTask('app', ['watch:app']);

    grunt.registerTask('min', ['sass:prod', 'autoprefixer:prod']);
    // grunt.registerTask('crit', ['penthouse']);
    grunt.registerTask('js', ['concat', 'uglify']);
};