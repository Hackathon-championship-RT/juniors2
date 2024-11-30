const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
	entry: path.join(__dirname, "src", "index.js"),
	output: {
		path: path.resolve(__dirname, "../laravel/public/react-build"),
	},
	module: {
		rules: [
			{
				test: /\.svg$/,
				use: ['@svgr/webpack'],
			},
			{
				test: /\.(png|jpg|gif)$/,
				use: [
					{
						loader: 'file-loader',
						options: {}
					}
				]
			},
			{
				test: /\.css$/,
				use: ['style-loader', {
					loader: "css-loader",
					options: {
					  modules: {
						localIdentName: '[path][name]__[local]'
					},
					  
					},
				  }],
			},
			{
				test: /\.?(js|jsx)$/,
				exclude: /node_modules/,
				use: {
					loader: "babel-loader",
					options: {
						presets: ['@babel/preset-env', '@babel/preset-react']
					}
				}
			},
		]
	},
	resolve: {
		extensions: ['.js', '.jsx', '.ts', '.css'],
		alias: {
			'@': path.resolve(__dirname, 'src'),
			'@components': path.resolve(__dirname, 'src/components'),
			'@config': path.resolve(__dirname, 'src/config'),
			'@page': path.resolve(__dirname, 'src/pages'),
			'@routes': path.resolve(__dirname, 'src/routes'),
			// '@brands': path.resolve(__dirname, 'src/img/brands'),
			'@utils': path.resolve(__dirname, 'src/utils'),
			'@styles': path.resolve(__dirname, 'src/styles'),
		},
	},
	plugins: [
		new HtmlWebpackPlugin({
			template: path.join(__dirname, "src", "index.html"),
		}),
	],
	performance: {
		maxEntrypointSize: 1024000,
		maxAssetSize: 1024000
	},
}