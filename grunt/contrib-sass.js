module.exports = function(grunt) {

	grunt.config('sass', {

		dist: {                           
			options: { style: 'compressed'},

			files: {                       
				/* genesis */
				'<%= paths.genesis_sass.dest %>/genesis.min.css': '<%= paths.genesis_sass.src %>/genesis.scss',
				
				/* cheatsheet */
				'<%= paths.cheatsheet_sass.src %>/style.css': '<%= paths.cheatsheet_sass.src %>/style.scss',
				
				/* pivot */
				'<%= paths.pivot_sass.src %>/style.css': '<%= paths.pivot_sass.src %>/style.scss'
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-sass');

};