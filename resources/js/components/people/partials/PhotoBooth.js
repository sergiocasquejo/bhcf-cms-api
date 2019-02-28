import React, { Component } from 'react';
import ImageCrop from './ImageCrop';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'

class PhotoBooth extends Component {
    constructor(props, context) {
        super(props, context);

        this.handleShow = this.handleShow.bind(this);
        this.handleClose = this.handleClose.bind(this);
        this.handlePreviewImage = this.handlePreviewImage.bind(this);
        this.state = {
            show: false,
            preview: {
                img: this.props.src
            }
        };
    }

    handlePreviewImage(preview) {
        this.props.photoChange(preview.img);
        this.setState({ preview: preview, show: false });
    }

    handleShow() {
        this.setState({ show: true });
    }

    handleClose() {
        this.setState({ show: false });
    }
    
    render() {
        return (
            <div>
                <div className="g-avatar">
                    <div className="g-avatar-preview">
                    {this.state.preview && (
                        <img
                            src={this.state.preview.img}
                            style={{
                            borderRadius: `${(Math.min(
                                this.state.preview.height,
                                this.state.preview.width
                            ) +
                                10) *
                                (this.state.preview.borderRadius / 2 / 100)}px`,
                            }}
                        />
                    )}
                    </div>
                    <div className="g-avatar-camera-icon"  onClick={this.handleShow}>
                        <FontAwesomeIcon icon="camera" />
                    </div>
                </div>
                <ImageCrop {...this.props} defaultSrc={this.props.src} previewImage={this.handlePreviewImage} hide={this.handleClose} show={this.state.show} />
            </div>
        )
    }
}

export default PhotoBooth;