$(document).ready(function()
{
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
});
