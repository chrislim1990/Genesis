module.exports = function(grunt) {

	grunt.config('copy', {

		/* Resave css from bower_components into scss */
		resaveScss: {
			expand: true,
			flatten: true,
			cwd: 'bower_components/',
			src: ['normalize.css/normalize.css'], 
			dest: 'src/sass/vendors/',
			rename: function(dest, src) {
				return dest + src.replace(/\.css$/, ".scss");
			}
		},

		/* Copy all scss to dist */
		dist: {
			files: [
			{ expand: true, flatten: true, src: ['src/*'], dest: 'dist/', filter: 'isFile', },
			{ expand: true, cwd: 'src/', src: ['vendors/*'], dest: 'dist/', }
			]
		},

		/* Update the path in utilities */
		updatePath: {
			src: 'dist/utilities.scss',
			dest: 'dist/utilities.scss',
			options: {
				process: function (content, srcpath) {
					return content.replace('bower_components',"..");
				},
			},
		}
	});

	grunt.loadNpmTasks('grunt-contrib-copy');

};