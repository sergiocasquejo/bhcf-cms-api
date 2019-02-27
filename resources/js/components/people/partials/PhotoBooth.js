import React, { Component } from 'react';
import Webcam from "react-webcam";
import ReactCrop from 'react-image-crop';
import 'react-image-crop/dist/ReactCrop.css';

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'

class PhotoBooth extends Component {
    state = {
        src: null,
        crop: {
            aspect: 1,
            width: 50,
            x: 0,
            y: 0,
        },
    };

    onSelectFile = e => {
    if (e.target.files && e.target.files.length > 0) {
        const reader = new FileReader();
        reader.addEventListener('load', () =>
        this.setState({ src: reader.result }),
        );
        reader.readAsDataURL(e.target.files[0]);
    }
    };

    onImageLoaded = (image, pixelCrop) => {
    this.imageRef = image;
    };

    onCropComplete = (crop, pixelCrop) => {
    this.makeClientCrop(crop, pixelCrop);
    };

    onCropChange = crop => {
    this.setState({ crop });
    };

    async makeClientCrop(crop, pixelCrop) {
    if (this.imageRef && crop.width && crop.height) {
        const croppedImageUrl = await this.getCroppedImg(
            this.imageRef,
            pixelCrop,
            'newFile.jpeg',
        );
        
        this.setState({ croppedImageUrl });
    }
    }

    getCroppedImg(image, pixelCrop, fileName) {
    const canvas = document.createElement('canvas');
    canvas.width = pixelCrop.width;
    canvas.height = pixelCrop.height;
    const ctx = canvas.getContext('2d');

    ctx.drawImage(
        image,
        pixelCrop.x,
        pixelCrop.y,
        pixelCrop.width,
        pixelCrop.height,
        0,
        0,
        pixelCrop.width,
        pixelCrop.height,
    );

    return new Promise((resolve, reject) => {
        canvas.toBlob(blob => {
        if (!blob) {
            //reject(new Error('Canvas is empty'));
            console.error('Canvas is empty');
            return;
        }
        blob.name = fileName;
        window.URL.revokeObjectURL(this.fileUrl);
        this.fileUrl = window.URL.createObjectURL(blob);
        resolve(this.fileUrl);
        }, 'image/jpeg');
    });
    }


    setRef = webcam => {
        this.webcam = webcam;
    };
    
    capture = () => {
        const imageSrc = this.webcam.getScreenshot();
        console.log(imageSrc);
    };
    
    render() {
        const { crop, croppedImageUrl, src } = this.state;

        const videoConstraints = {
            width: 1280,
            height: 1280,
            facingMode: "user"
          };
          
        return (
            <div className="photo-booth">
                <div className="photo-booth-inner">
                    <Webcam
                        audio={false}
                        ref={this.setRef}
                        screenshotFormat="image/jpeg"
                        minScreenshotHeight={400}
                        videoConstraints={videoConstraints}
                    />
                    {src && (
                        <ReactCrop
                        src={src}
                        crop={crop}
                        onImageLoaded={this.onImageLoaded}
                        onComplete={this.onCropComplete}
                        onChange={this.onCropChange}
                        />
                    )}
                    <div className="tools">
                        <div className="tools-inner">
                            <ul className="list-inline">
                                <li className="list-inline-item">
                                    <FontAwesomeIcon icon="image" />
                                    <input type="file" onChange={this.onSelectFile} />
                                </li>
                                <li className="list-inline-item"><FontAwesomeIcon icon="camera" onClick={this.capture}/></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default PhotoBooth;