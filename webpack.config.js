const path = require('path');
const PRODUCTION = process.NODE_ENV === 'production';

var webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const ManifestPlugin = require('webpack-manifest-plugin');
const autoprefixer = require('autoprefixer');

const ExtractFrontCss = new ExtractTextPlugin({ filename: 'front-[hash].css', 
    disable: !PRODUCTION
});

const ExtractBackCss = new ExtractTextPlugin({ filename: 'back-[hash].css', 
    disable: !PRODUCTION
});


const config = {
    // Context is an absolute path to the directory where webpack will be
    // looking for our entry points.
    context: path.resolve(process.cwd(), 'resources/assets'),

    // Our entry points, with a unique name as key and a relative path 
    // (starting from `context`) as value.
    entry: {
        // 'webpack-hot-middleware/client':'webpack-hot-middleware/client',
        'front.app': './js/app.js',
        'front.style': './sass/app.scss',
    },

    output: {
        // An absolute path to the desired output directory.
        path: path.resolve(process.cwd(), 'public/build'),

        // A filename pattern for the output files. This would create 
        // `front.app.js` and `front.style.js`.
        filename: '[name].js',

        // A filename pattern for generated chunks.
        chunkFilename: '[name].js',
    },

    // An array of extensions webpack should try to resolve in `require`, 
    // `import`, etc. statements.
    resolve: {
        extensions: ['', '.js', '.jsx', '.css', '.scss'],
    },

    loaders: [
        // {
        //     test: /\.scss$/,
        //     // include: /\/sass\//,
        //     loader: ExtractFrontCss.extract('style', 'css!sass'),
        // },
        { test: /\.css$/, loader: ExtractTextPlugin.extract({
                fallbackLoader: "style-loader",
                loader: "css-loader"
            }) }
        
        // { test: /\.scss$/, loader: ExtractTextPlugin.extract({
        //         fallbackLoader: "style-loader",
        //         loader: ['style-loader', 'css-loader']//, 'postcss-loader', 'sass-loader']
        //     }) }

      //   { test: /\.css$/, loaders: ['style-loader', 'css-loader', 'postcss-loader'] },
      // { test: /\.scss$/, loaders: ['style-loader', 'css-loader', 'postcss-loader', 'sass-loader'] },

        // { test: /\.scss$/, loaders: [ 'style', 'css', 'sass?sourceMap' ] }
        // {
        //     test: /\.scss$/,
        //     include: /\/sass\/back\//,
        //     loader: ExtractBackCss.extract('style', 'css!postcss!sass'),
        // },

    ],
    plugins: [
        ExtractFrontCss,
        // ExtractBackCss,
        // new webpack.HotModuleReplacementPlugin()
        // new webpack.NormalModuleReplacementPlugin(
        //     /\.(jpe?g|png|gif|svg)$/,
        //     'node-noop'
        // ),
        // new ManifestPlugin({
        //     fileName: 'rev-manifest.json',
        // }),
    ],
    // sassLoader: {
    //     includePaths: [path.resolve(process.cwd(), 'node_modules')],
    // },
    // postcss() {
    //     return [autoprefixer];
    // },
    // ...
};

module.exports = config;