module.exports = function(grunt) {
  // Do grunt-related things in here

  grunt.initConfig({

  // Watch
    watch: {
      css: {
        files: 'src/scss/*.scss',
        tasks: ['sass', 'autoprefixer'],
        options: {
          livereload: true,
        },
      },

      scripts: {
        files: ['src/js/**/*.js'],
        tasks: ['uglify'],
        options: {
          spawn: false,
        },
      },

    },

  // CSS
    sass: {
      sassFront: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'assets/css/sstt.css': 'src/scss/sstt.scss',
        }
      },
      sassAdmin: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'assets/css/sstt-admin.css': 'src/scss/sstt-admin.scss',
        }
      },
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']
      },
      preFront: {
        src: 'assets/css/sstt.css',
        dest: 'assets/css/sstt.min.css'
      },
      preAdmin: {
        src: 'assets/css/sstt-admin.css',
        dest: 'assets/css/sstt-admin.min.css'
      },
    },

  // JS
    uglify: {
      my_target: {
        files: {
          'assets/js/sstt.min.js': ['src/js/**/*.js'],
        }
      }
    },

  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-autoprefixer');
};