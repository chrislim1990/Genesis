module.exports = function(grunt) {

	grunt.config('copy', {

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

		dist: {
			files: [
			{ expand: true, flatten: true, src: ['src/*'], dest: 'dist/', filter: 'isFile', },
			{ expand: true, cwd: 'src/', src: ['vendors/*'], dest: 'dist/', }
			]
		},

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