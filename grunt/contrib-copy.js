module.exports = function(grunt) {

	grunt.config('copy', {

		resaveScss: {
			files: [
			{
				expand: true,
				flatten: true,
				cwd: 'bower_components/',
				src: ['normalize.css/normalize.css'], 
				dest: 'src/sass/vendors/',
				rename: function(dest, src) {
					return dest + src.replace(/\.css$/, ".scss");
				}
			}
			],
		},

	});

	grunt.loadNpmTasks('grunt-contrib-copy');

};