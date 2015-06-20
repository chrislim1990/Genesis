module.exports = function(grunt) {


	grunt.initConfig({

		pkg: require('./package.json'),

		paths:{

			base: '',

			genesis_sass:{
				src:'src',
				dest:'dist'
			},

			cheatsheet_base: 'example/cheatsheet',

			cheatsheet_sass:{
				src:'<%= paths.cheatsheet_base %>/src',
				dest:'<%= paths.cheatsheet_base %>/asset'
			}

		}

	});

	/* Load per-task config from separate files. */
	grunt.loadTasks('grunt');

	/* default */
	grunt.registerTask('default',['php', 'watch', 'sass', 'autoprefixer']);

	/* distribution */
	grunt.registerTask('dist',['sass', 'autoprefixer', 'copy:dist', 'copy:updatePath']);
}