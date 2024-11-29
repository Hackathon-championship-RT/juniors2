const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
	entry: path.join(__dirname, "src", "index.js"),
	output: {
		path: path.resolve(__dirname, "dist"),
	},
	module: {
		rules: [
			{
				test: /\.svg$/,
				use: ['@svgr/webpack'],
			},
			{
				test: /\.(png|jp(e*)g|svg|gif)$/,
				use: ['file-loader'],
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
			'@services': path.resolve(__dirname, 'src/services'),
			'@utils': path.resolve(__dirname, 'src/utils'),
			'@styles': path.resolve(__dirname, 'src/styles'),
		},
	},
	plugins: [
		new HtmlWebpackPlugin({
			template: path.join(__dirname, "src", "index.html"),
		}),
	],
}