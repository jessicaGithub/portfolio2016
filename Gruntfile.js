module.exports = function(grunt) {
    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ["./public/assets/css/less/"],
                    yuicompress: true
                },
                files: {
                    "./public/assets/css/app.css": "./public/assets/css/app.less"
                }
            }
        },
        concat: {
            dist: {
              src: ['./public/assets/js/vendor/jquery.min.js',              
                    './public/assets/js/vendor/imagesloaded.pkgd.min.js',
                    './public/assets/js/vendor/jquery.slimscroll.min.js',
                    './public/assets/js/vendor/jquery.fullPage.min.js',
                    './public/assets/js/vendor/jquery.gsap.min.js',
                    './public/assets/js/vendor/TweenMax.min.js',
                    './public/assets/js/vendor/TimelineMax.min.js',
                    './public/assets/js/vendor/TextPlugin.min.js',
                    './public/assets/js/vendor/BezierPlugin.min.js',
                    './public/assets/js/vendor/DrawSVGPlugin.min.js',
                    './public/assets/js/vendor/MorphSVGPlugin.min.js',
                    './public/assets/js/vendor/bootstrap.min.js',
                    './public/assets/js/vendor/jquery.chocolat.js',
                    './public/assets/js/vendor/particles.min.js',
                    './public/assets/js/vendor/swiper.min.js',
                    './public/assets/js/vendor/masonry.pkgd.min.js',
                    './public/assets/js/vendor/icheck.min.js',
                    './public/assets/js/vendor/EpiCaptcha/js/epicaptcha.js'],
              dest: './public/assets/js/vendor.js',
            },
          },
        watch: {
            less: {
                files: ["./public/assets/css/*.less", 
                        "./public/assets/css/less/*", 
                        "./public/assets/css/less/vendor/*",
                        "./public/assets/css/less/vendor/*/*"],
                tasks: ["less"]
            },
            js: {
                files: ["./public/assets/js/vendor/*"],
                tasks: ["concat:dist"]
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default',['watch', 'concat:dist', 'less']);
};
