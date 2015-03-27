module.exports = function(grunt) {

	grunt.config('autoprefixer', {

		file: {
			src: [
			'<%= paths.genesis_sass.dest %>/*.css',
			'<%= paths.cheatsheet_sass.dest %>/*.css',
			'<%= paths.pivot_sass.dest %>/*.css'
			]
		}

	});

	grunt.loadNpmTasks('grunt-autoprefixer');

};