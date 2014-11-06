module.exports = function(grunt) {
	grunt.initConfig({

		express:{
			all:{
				options:{
					port:9000,
					hostname:"localhost",
					bases: ['/Users/Chris/Github/sass/'],
					livereload: true
				}
			}
		},

		sass: {                            
			dist: {                           
				options: {                       
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {                         
					'style.css': 'style.scss',    
				}
			}
		},

		autoprefixer: {
			file: {
				src: 'style.css'
			},
		},

		watch: {
			sass:{
				files: ['genesis/sass/*.scss','style.scss'],
				tasks: ['sass','autoprefixer'],
			},
			options: {
				livereload: true,
			},
		}

	})

	grunt.registerTask('server',[
 		'express',
 		'watch'
 		])

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-express');
}