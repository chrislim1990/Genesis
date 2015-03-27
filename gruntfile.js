module.exports = function(grunt) {


	grunt.initConfig({

		pkg: require('./package.json'),

		paths:{

			base: '',

			genesis_sass:{
				src:'src/sass',
				dest:'build'
			},

			cheatsheet_sass:{
				src:'example/cheatsheet'
			},

			pivot_sass:{
				src:'example/pivot'
			}

		}

	});

	/* Load per-task config from separate files. */
	grunt.loadTasks('grunt');

	/* Register alias */
	grunt.registerTask('server',['php', 'watch', 'sass', 'autoprefixer']);
}