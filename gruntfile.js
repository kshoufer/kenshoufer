module.exports = function(grunt) {

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.initConfig({

        //concat
        concat: {
        options: {
<<<<<<< HEAD
                    separator: ';',
=======
                    //separator: ';',
>>>>>>> b3decf822b81062f028194892371c172385adc07
                },
        dist: {
                src: ['wp-content/themes/Divi-Child/assets/styles/build/style-header.css','wp-content/themes/Divi-Child/assets/styles/build/style-divi.css','wp-content/themes/Divi-Child/assets/styles/build/style-editor.scss'],
                dest: 'wp-content/themes/Divi-Child/assets/styles/build/style-concat.scss',
              },
        },//concat

        // sass
        sass: {
            dist: {
                options: {
                    sourcemap: true,
                    style: 'expanded',
                },
                files: {
                    'wp-content/themes/Divi-Child/assets/styles/build/style.css': 'wp-content/themes/Divi-Child/assets/styles/build/style-concat.scss'
                }
            }
        },//sass

        cssmin: {
             minify: {
                expand: true,
                cwd: 'wp-content/themes/Divi-Child/assets/styles/build/',
                src: ['*.css', '!*.min.css'],
                dest: 'wp-content/themes/Divi-Child/',
                ext: '.css'
                }
<<<<<<< HEAD
        }//cssmin
=======
        },//cssmin
>>>>>>> b3decf822b81062f028194892371c172385adc07


    });

<<<<<<< HEAD
    // register task
=======
>>>>>>> b3decf822b81062f028194892371c172385adc07
    grunt.registerTask('default', ['concat','sass', 'cssmin']);

};
