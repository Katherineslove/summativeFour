module.exports = function(grunt) {

  grunt.initConfig({
    csslint: {
      strict: {
        options: {
          import: 2,
          'universal-selector': false
        },
        src: ['css/*.css', '!css/*.min.css']
      }
    },
    jshint: {
      files: ['js/*.js','js/!*.min.js'],
        options: {
          esversion: 6
        }
    },
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'css/',
          src: ['*.css', '!*.min.css'],
          dest: 'css/',
          ext: '.min.css'
        }]
      }
    },
    watch:{
      js: {
        files: ['js/*.js', '!js/*.min.js'],
        tasks: ['jshint', 'uglify']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-csslint');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask('checkCss', ['csslint']);
  grunt.registerTask('hintJS', ['jshint']);
  grunt.registerTask('default', ['watch']);
};
