import * as webpack from 'webpack';
import common from "./webpack.common";

const config: webpack.Configuration = {
  mode: 'development',
  watch: true,
  ...common
}

export default config;