import { useEffect } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import { registerPlugin } from '@wordpress/plugins';
import { PluginDocumentSettingPanel } from '@wordpress/edit-post';
import { useEntityProp } from '@wordpress/core-data';
import { ToggleControl, TextControl } from '@wordpress/components';

import './index.scss';

const IABlockAreaSize = function() {
  const [ meta, setMeta ] = useEntityProp( 'postType', 'blockarea', 'meta' );
  let _resize_area = false;
  let _area_width = 800;
  if ( meta ) {
    if ( meta._resize_area ) {
      _resize_area = meta._resize_area;
    }
    if ( meta._area_width ) {
      _area_width = parseInt( meta._area_width );
    }
  }
  useEffect( () => {
    document.body.classList.toggle( 'area-has-width', _resize_area );
    if ( _resize_area && _area_width ) {
      document.body.style.setProperty( '--area-width', _area_width + 'px' );
    }
  }, [ _resize_area, _area_width ] );

  return (
      <PluginDocumentSettingPanel
          name="ia-block-area-size"
          title={ __( 'Area Size' ) }
          className='plugin-ia-block-area-size'
          icon="none"
      >
        <ToggleControl
            label={ __( 'Resize block Area' ) }
            checked={ _resize_area }
            onChange={ () => setMeta( { ...meta, _resize_area : !_resize_area } ) }
        />
        {
          _resize_area &&
          <TextControl
              label={ __( 'Area max-width' ) }
              type="number"
              value={ _area_width }
              onChange={ value => setMeta( { ...meta, _area_width : value } ) }
          />
        }
      </PluginDocumentSettingPanel>
  );
};

registerPlugin( 'plugin-ia-block-area-size', {
  render : IABlockAreaSize,
} );