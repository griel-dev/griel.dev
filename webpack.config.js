const path = require("path");

module.exports = {
    mode: 'production',
    entry: './public/assets/javascript/index.js',
    output: {
        filename: "bundle.js",
        path: path.resolve(__dirname, 'public/html')
    },
    devtool: "eval-source-map"
}