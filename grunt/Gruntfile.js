'use strict';

// Configurable paths
var config = {
  app: 'theme',
  dist: '../wordpress/wp-content/themes/theme/'
};

module.exports = function (grunt) {

  // Time how long tasks take. Can help when optimizing build times
  require('time-grunt')(grunt);

  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);


  // Define the configuration for all the tasks
  grunt.initConfig({

    // Project settings
    config: config,

    // Watches files for changes and runs tasks based on the changed files
    watch: {
      dist : {
        cwd: '<%= config.app %>',
        files: [
          '*.{ico,png,txt}',
          'theme/images/{,*/}*.*',
          'theme/{,*/}*.html',
          'theme/{,*/}*.php',
          'theme/**/{,*/}*.scss',
          'theme/**/{,*/}*.js',
          'theme/fonts/{,*/}*.*',
          'Gruntfile.js'
          ],
        tasks: ['build'],
        options: {
          livereload: true
        }
      }
    },

    // Empties folders to start fresh
    clean: {
      dist: {
        options: { force: true },
        files: [{
          dot: true,
          src: [
            '.tmp',
            '<%= config.dist %>/*',
            '!<%= config.dist %>/.git*'
          ]
        }]
      },
      server: '.tmp'
    },

    compass: {
      dist: {     
        options: {
          sassDir: '<%= config.app %>/scss',
          cssDir: '.tmp/css'
        }
      }
    },
    // Compiles Sass to CSS and generates necessary files if requested
    sass: {
      options: {
        loadPath: 'bower_components'
      },
      dist: {
        files: [{
          expand: true,
          cwd: '<%= config.app %>/scss',
          src: ['*.{scss,sass}'],
          dest: '.tmp/css',
          ext: '.css'
        }]
      }
    },
        
    uglify: {
      core: {
        expand: true,
        cwd: '<%= config.app %>/js',
        src: ['*.js'],
        dest: '<%= config.dist %>/js/'
      }
    },

    concat: {
      options: {
        separator: ';',
      },
      vendor: {
        src: [
          '<%= config.app %>/js/vendor/*'
        ],
        dest: '<%= config.dist %>/js/vendor/vendor.js',
      },
    },

    cssmin : {
      dist:{
        expand: true,
        cwd: '.tmp/css',
        src: ['{,*/}*.css'],
        dest: '<%= config.dist %>/css/'
      }
    },

    copy : {
      dist: {
        files: [{
          expand: true,
          dot: true,
          cwd: '<%= config.app %>',
          dest: '<%= config.dist %>',
          src: [
            '*.{ico,png,txt}',
            'images/{,*/}*.*',
            '{,*/}*.html',
            '{,*/}*.php',
            'fonts/{,*/}*.*',
            'style.css',
            '.htaccess',
          ]
        },
        {
          expand: true,
          dot: true,
          cwd: '.',
          src: 'bower_components/bootstrap-sass-official/assets/fonts/bootstrap/*',
          dest: '<%= config.dist %>'
        }]
      },
      styles: {
        expand: true,
        dot: true,
        cwd: '<%= config.app %>/scss',
        dest: '.tmp/css/',
        src: [
          '{,*/}*.css'
        ]
      }
    }
  });

  grunt.registerTask('build', [
    'clean:dist',
    'compass',
    'copy:styles',
    'cssmin',
    'uglify:core',
    'copy:dist',
    'concat'
  ]);

  grunt.registerTask('default', [
    'build'
  ]);

};