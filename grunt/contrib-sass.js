module.exports = function(grunt) {

	grunt.config('sass', {

		dist: {                           
			options: { style: 'compressed'},

			files: {                       				
				/* cheatsheet */
				'<%= paths.cheatsheet_sass.dest %>/style.css': '<%= paths.cheatsheet_sass.src %>/style.scss'
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-sass');

};