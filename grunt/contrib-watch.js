module.exports = function(grunt) {

  grunt.config('watch', {

    sass:{
      files: [
      '<%= paths.genesis_sass.src %>/*.scss',
      '<%= paths.cheatsheet_sass.src %>/*.scss',
      '<%= paths.pivot_sass.src %>/*.scss'
      ],
      tasks: ['sass', 'autoprefixer'],
    },

    livereload: {
      files: [
      '*.php',
      '<%= paths.genesis_sass.dest %>/*.css',
      
      /* cheatsheet */
      '<%= paths.cheatsheet_sass.src %>/*.php',
      '<%= paths.cheatsheet_sass.src %>/*.css',

      /* pivot */
      '<%= paths.pivot_sass.src %>/*.css'
      ],

      options: { livereload: 7000 },
    }
    
  });

  grunt.loadNpmTasks('grunt-contrib-watch');

};