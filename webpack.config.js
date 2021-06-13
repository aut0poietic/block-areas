const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );

module.exports = {
  ...defaultConfig,
  entry : {
    'area-size' : path.resolve( process.cwd(), 'src', 'area-size', 'index.js' ),
  },
};