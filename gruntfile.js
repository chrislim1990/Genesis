module.exports = function(grunt) {


	grunt.initConfig({

		pkg: require('./package.json'),

		paths:{

			base: '',

			genesis_sass:{
				src:'src',
				dest:'dist'
			},

			cheatsheet_sass:{
				src:'example/cheatsheet'
		}

		}

	});

	/* Load per-task config from separate files. */
	grunt.loadTasks('grunt');

	/* Register alias */
	grunt.registerTask('default',['php', 'watch', 'sass', 'autoprefixer']);
}