var certGalleryItems = document.getElementsByClassName('ImagesPart');
for (let certGalleryItem of certGalleryItems) {
    lightGallery(certGalleryItem, {
        plugins: [lgZoom, lgThumbnail, lgHash],
        thumbnail: true,
        // autoplay: true,
        showCloseIcon : true,
        // selector: '.ImagesPart',
        mobileSettings : {
            showCloseIcon: true,
        },
    });
}