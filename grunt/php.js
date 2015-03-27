module.exports = function(grunt) {

  grunt.config('php', {

    watch: {
      options: { open: true }
    }
    
  });

  grunt.loadNpmTasks('grunt-php');

};