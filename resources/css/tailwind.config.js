module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'image-wllp': "url('../../public/asset/img/wllp.jpg')",
       })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
