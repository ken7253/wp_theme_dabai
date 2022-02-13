import * as webpack from 'webpack';
import path from 'node:path';

const common: webpack.Configuration = {
  entry: {
    main: path.join('src', 'ts', 'main.ts'),
    components: path.join('src', 'components', 'components.ts')
  },
  module: {
    rules: [
      {
        test: /\.ts/u,
        exclude: /node_modules/,
        loader: "ts-loader"
      }
    ]
  },
  resolve: {
    extensions: [".ts", ".js", ".json"]
  }
}

export default common;