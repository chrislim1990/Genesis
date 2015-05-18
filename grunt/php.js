module.exports = function(grunt) {

  grunt.config('php', {

    watch: {
      options: { open: 'example/cheatsheet/index.php' }
    }
    
  });

  grunt.loadNpmTasks('grunt-php');

};