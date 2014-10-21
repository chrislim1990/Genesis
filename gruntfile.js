module.exports = function(grunt) {
	grunt.initConfig({

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
				files: ['genesis/*.scss','style.scss'],
				tasks: ['sass','autoprefixer'],
			},
			options: {
				livereload: true,
			},
		}

	})
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
}