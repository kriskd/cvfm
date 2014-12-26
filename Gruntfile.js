var autoprefixer = require('autoprefixer-core');
module.exports = function(grunt) {
	'use strict';

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		concat: {
			options: {
				separator: ';',
			},
			dist: {
				src: [
					'webroot/js/src/jquery.galleriffic.js',
					'webroot/js/src/modal.js',
					'webroot/js/src/tooltip.js',
					'webroot/js/src/js.js',
				],
				dest: 'webroot/js/build/scripts.js'
			}
		},
		uglify: {
			options: {
				mangle: false
			},
			my_target: {
				files: {
					'webroot/js/build/scripts.min.js': ['webroot/js/build/scripts.js']
				}
			}
		},
		less:	{
			my_target: {
				files: {
					'webroot/css/build/styles.css': 'webroot/css/src/styles.less',
				}
			},
			admin : {
				files : {
					'webroot/css/build/admin.css': 'webroot/css/src/admin.less'
				}
			}
		},
		cssmin: {
			my_target: {
				expand: true,
				cwd: 'webroot/css/build/',
				src: ['styles.css', '!*.min.css'],
				dest: 'webroot/css/build/',
				ext: '.min.css'
			},
			admin : {
				expand: true,
				cwd: 'webroot/css/build/',
				src: ['admin.css', '!*.min.css'],
				dest: 'webroot/css/build/',
				ext: '.min.css'
			}
		},
        postcss: {
          options: {
            processors: [
              autoprefixer({ browsers: ['last 2 version'] }).postcss
              ]
          },
          dist: { src: 'webroot/css/build/*.css' }
       },
       watch: {
         jss: {
           files: ['webroot/js/src/*.js'],
           tasks: ['concat', 'uglify']
         },
         css: {
           files: ['webroot/css/src/styles.less', 'webroot/css/src/admin.less'],
           tasks: ['less', 'cssmin', 'postcss']
         }
       }
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-autoprefixer');

	grunt.registerTask('default', ['concat:dist', 'uglify']);
};
