   // tailwind.config.js
   module.exports = {
     purge: ['./src/**/*.html', './src/**/*.php'],
     darkMode: false, // or 'media' or 'class'
     theme: {
      backgroundImage:{
        'flag-building': "url('http://gqnn.local/wp-content/uploads/2025/07/flag-on-building-scaled.jpg')",
      },
       extend: {},
     },
     variants: {
       extend: {},
     },
     plugins: [],
   }