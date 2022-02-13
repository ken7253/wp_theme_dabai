import * as webpack from 'webpack';
import common from "./webpack.common";

const config:webpack.Configuration = {
  mode: 'production',
  ...common
}

export default config;