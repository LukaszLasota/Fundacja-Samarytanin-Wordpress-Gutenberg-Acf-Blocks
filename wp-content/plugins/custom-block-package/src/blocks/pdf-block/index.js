import { registerBlockType } from '@wordpress/blocks';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, PanelRow, Button, ToggleControl, RangeControl } from '@wordpress/components';
import { Fragment } from '@wordpress/element';
import { __ } from '@wordpress/i18n';
import block from './block.json';
import { MediaUpload } from '@wordpress/block-editor';


registerBlockType(block.name, {
  

  edit: ({ attributes, setAttributes }) => {
    const { pdfUrl, pdfID, pdfTitle, showDownload, viewerHeight, viewerWidth } = attributes;

    const onSelectPDF = (media) => {
      setAttributes({
        pdfUrl: media.url,
      });
    };

    const onHeightChange = ( value ) => {
        setAttributes( {
            viewerHeight: value,
        } );
    };

    const onWidthChange = ( value ) => {
        setAttributes( {
            viewerWidth: value,
        } );
    };

    return (
      <Fragment>
        <InspectorControls>
          <PanelBody title={__('PDF Settings', 'custom-block-package')} initialOpen={true}>
            <PanelRow>
              <MediaUpload
                onSelect={onSelectPDF}
                allowedTypes={['application/pdf']}
                value={pdfUrl}
                render={({ open }) => (
                  <Button isPrimary onClick={open}>
                    {pdfUrl ? __('Change PDF', 'custom-block-package') : __('Upload PDF', 'custom-block-package')}
                  </Button>
                )}
              />
            </PanelRow>
          </PanelBody>
          <PanelBody title={ __( 'Embed Height', 'pdfjs-viewer-shortcode' ) }>
                <RangeControl
                    label={ __(
                        'Viewer Height (pixels)',
                        'pdfjs-viewer-shortcode'
                    ) }
                    value={ viewerHeight }
                    onChange={ onHeightChange }
                    min={ 0 }
                    max={ 2000 }
                    allowReset={ true }
                />
            </PanelBody>
            <PanelBody title={ __( 'Embed Width', 'pdfjs-viewer-shortcode' ) }>
                <RangeControl
                    label={ __(
                        'Viewer Width (procents)',
                        'pdfjs-viewer-shortcode'
                    ) }
                    help="By default 0 will be 100%."
                    value={  viewerWidth }
                    onChange={ onWidthChange }
                    min={ 0 }
                    max={ 100 }
                    allowReset={ true }
                />
            </PanelBody>
        </InspectorControls>
        <div className="pdf-block">
          <div className="pdf-container">
            {pdfUrl && (
              <embed src={pdfUrl} type="application/pdf" width="100%" height="600px" />
            )}
          </div>
        </div>
      </Fragment>
    );
  },

  save: ({ attributes }) => {
    const { pdfUrl, pdfID, pdfTitle, showDownload, viewerHeight, viewerWidth } = attributes;

    return (
      <div className="pdf-block">
        <div className="pdf-container">
          {pdfUrl && (
            <embed src={pdfUrl} type="application/pdf" width={viewerWidth} height={viewerHeight} />
          )}
        </div>
      </div>
    );
  },
});

