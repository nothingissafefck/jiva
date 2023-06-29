import {resolve} from 'path';
import ViteSvgSpriteWrapper from 'vite-svg-sprite-wrapper'
import handlebars from 'vite-plugin-handlebars';
import {plants} from './source/data/plants.js'

export default {
    root: 'source',
    plugins: [
        handlebars({
            partialDirectory: resolve(__dirname, 'source', 'partials'),
            context: {
                catalogPlants: plants,
                mainPagePlants: plants.slice(0, 8)
            },
        }),
        ViteSvgSpriteWrapper({
            icons: 'source/img/icons/*.svg',
            outputDir: 'source/img'
        })
    ],
    build: {
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'source', 'index.html'),
                catalog: resolve(__dirname, 'source', 'catalog.html')
            }
        }
    }
}
