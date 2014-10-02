module.exports = function(grunt) {

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.initConfig({

        // sass
        sass: {
            dist: {
                options: {
                    sourcemap: true,
                    style: 'expanded',
                },
                files: {
                    'wp-content/themes/Divi-Child/assets/styles/build/style-editor.css': 'wp-content/themes/Divi-Child/assets/styles/build/style-editor.scss'
                }
            }
        },//sass

        //concat
        concat: {
        options: {

                },
        dist: {
                src: ['wp-content/themes/Divi-Child/assets/styles/build/style-divi(original).css','wp-content/themes/Divi-Child/assets/styles/build/style-editor.css'],
                dest: 'wp-content/themes/Divi-Child/assets/styles/build/style-concat.css',
              },
        },//concat


        cssmin: {
          add_banner: {
            options: {
              banner: '/*Theme Name: Divi Child   Author: Ken Shoufer   Template: Divi  */'
            },
            files: {
              'wp-content/themes/Divi-Child/style.css': ['wp-content/themes/Divi-Child/assets/styles/build/style-concat.css']
            }
          }
        },//cssmin

    });

    grunt.registerTask('default', ['sass', 'concat', 'cssmin']);

};
