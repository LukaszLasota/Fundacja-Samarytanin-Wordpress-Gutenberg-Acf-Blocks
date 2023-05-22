import { __ } from '@wordpress/i18n';

// import './editor.scss';
// import './style.scss';
import { registerBlockType } from '@wordpress/blocks';
// const { registerBlockType } = wp.blocks;
import block from './block.json';
import { MediaUpload, InspectorControls } from '@wordpress/block-editor';

import {
	Button,
	PanelRow,
	PanelBody,
	ToggleControl,
	RangeControl,
	SelectControl,
	TextControl,
} from '@wordpress/components';

const defaultHeight = 800;
const defaultWidth = 0;

const ALLOWED_MEDIA_TYPES = [ 'application/pdf' ];

registerBlockType(block.name, {
edit( props ) {
    const onFileSelect = ( img ) => {
        props.setAttributes( {
            imageURL: img.url,
            imgID: img.id,
            imgTitle: img.title,
        } );
    };

    const onRemoveImg = () => {
        props.setAttributes( {
            imageURL: null,
            imgID: null,
            imgTitle: null,
        } );
    };

    const onToggleDownload = ( value ) => {
        props.setAttributes( {
            showDownload: value,
        } );
    };

    const onHeightChange = ( value ) => {
        // handle the reset button
        if ( undefined === value ) {
            value = defaultHeight;
        }
        props.setAttributes( {
            viewerHeight: value,
        } );
    };

    const onWidthChange = ( value ) => {
        // handle the reset button
        if ( undefined === value ) {
            value = defaultWidth;
        }
        props.setAttributes( {
            viewerWidth: value,
        } );
    };

    return [
        <InspectorControls key="i1">
            <PanelBody title={ __( 'PDF.js Options', 'pdfjs-viewer-shortcode' ) }>
                <PanelRow>
                    <ToggleControl
                        label={ __(
                            'Show Download Option',
                            'pdfjs-viewer-shortcode'
                        ) }
                        help={
                            props.attributes.showDownload
                                ? __( 'Yes', 'pdfjs-viewer-shortcode' )
                                : __( 'No', 'pdfjs-viewer-shortcode' )
                        }
                        checked={ props.attributes.showDownload }
                        onChange={ onToggleDownload }
                    />
                </PanelRow>
            </PanelBody>
            <PanelBody title={ __( 'Embed Height', 'pdfjs-viewer-shortcode' ) }>
                <RangeControl
                    label={ __(
                        'Viewer Height (pixels)',
                        'pdfjs-viewer-shortcode'
                    ) }
                    value={ props.attributes.viewerHeight }
                    onChange={ onHeightChange }
                    min={ 0 }
                    max={ 5000 }
                    allowReset={ true }
                    initialPosition={ defaultHeight }
                />
            </PanelBody>
            <PanelBody title={ __( 'Embed Width', 'pdfjs-viewer-shortcode' ) }>
                <RangeControl
                    label={ __(
                        'Viewer Width (pixels)',
                        'pdfjs-viewer-shortcode'
                    ) }
                    help="By default 0 will be 100%."
                    value={ props.attributes.viewerWidth }
                    onChange={ onWidthChange }
                    min={ 0 }
                    max={ 5000 }
                    allowReset={ true }
                    initialPosition={ defaultWidth }
                />
            </PanelBody>
        </InspectorControls>,
        <div className="pdfjs-wrapper components-placeholder" key="i2" style={{height: props.attributes.viewerHeight}}>
            <div>
                <strong>{ __( 'PDF.js Embed', 'pdfjs-viewer-shortcode' ) }</strong>
            </div>
            { props.attributes.imageURL ? (
                <div className="pdfjs-upload-wrapper">
                    <div className="pdfjs-upload-button-wrapper">
                        <span className="dashicons dashicons-media-document"></span>
                        <span className="pdfjs-title">
                            { props.attributes.imgTitle
                                ? props.attributes.imgTitle
                                : props.attributes.imageURL }
                        </span>
                    </div>
                    { props.isSelected ? (
                        <Button className="button" onClick={ onRemoveImg }>
                            { __( 'Remove PDF', 'pdfjs-viewer-shortcode' ) }
                        </Button>
                    ) : null }
                </div>
            ) : (
                <div>
                    <MediaUpload
                        onSelect={ onFileSelect }
                        allowedTypes={ ALLOWED_MEDIA_TYPES }
                        value={ props.attributes.imgID }
                        render={ ( { open } ) => (
                            <Button className="button" onClick={ open }>
                                { __( 'Choose PDF', 'pdfjs-viewer-shortcode' ) }
                            </Button>
                        ) }
                    />
                </div>
            ) }
        </div>,
    ];
},

save(props) {
    // let urlLink = props.attributes.imageURL
    return (
        <div className="pdfjs-wrapper">
            {`[pdfjs-viewer attachment_id=${ props.attributes.imgID } url=${ props.attributes.imageURL } viewer_width=${ ( props.attributes.viewerWidth !== undefined ) ? props.attributes.viewerWidth : defaultWidth } viewer_height=${ ( props.attributes.viewerHeight !== undefined ) ? props.attributes.viewerHeight : defaultHeight } url=${ props.attributes.imageURL } ]`}
        </div>
    );
},

})
