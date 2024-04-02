<?php
/**
 * ImageOptimize plugin for Craft CMS
 *
 * Automatically optimize images after they've been transformed
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

/**
 * @author    nystudio107
 * @package   ImageOptimize
 * @since     1.0.0
 */
return [
    'does not exist' => 'does not exist',
    'Original' => 'Original',
    'Optimized' => 'Optimized',
    'Savings' => 'Savings',
    'Not Installed' => 'Not Installed',
    'The aspectRatioX of the transformed images.' => 'The aspectRatioX of the transformed images.',
    'The source domain to use for the imgix transforms.' => 'The source domain to use for the imgix transforms.',
    'The additional retina sizes that should be created for this variant.' => 'The additional retina sizes that should be created for this variant.',
    'Variant Creator' => 'Variant Creator',
    'The width of the optimized image variant in pixels. This should match your `@media` query breakpoints.' => 'The width of the optimized image variant in pixels. This should match your `@media` query breakpoints.',
    'Focal Point not set' => 'Focal Point not set',
    'Failed to create image variant at: ' => 'Failed to create image variant at: ',
    'The aspectRatioY of the transformed images.' => 'The aspectRatioY of the transformed images.',
    'This image is upscaled' => 'This image is upscaled',
    'Retina Sizes' => 'Retina Sizes',
    'Choose from Craft native transforms or an image transform service to handle your image transforms site-wide.' => 'Choose from Craft native transforms or an image transform service to handle your image transforms site-wide.',
    'Craft' => 'Craft',
    'imgix' => 'imgix',
    '{name} plugin loaded' => '{name} plugin loaded',
    'Transform Method' => 'Transform Method',
    'Variant' => 'Variant',
    'File Format' => 'File Format',
    'Image Processor' => 'Image Processor',
    'The quality of the optimized image variant.' => 'The quality of the optimized image variant.',
    'Command' => 'Command',
    'Installed' => 'Installed',
    'Focal Point set' => 'Focal Point set',
    'Started resaveAsset queue job id: {jobId} Element id: {elementId}' => 'Started resaveAsset queue job id: {jobId} Element id: {elementId}',
    'Started resaveVolumeAssets queue job id: {jobId}' => 'Started resaveVolumeAssets queue job id: {jobId}',
    'Controls whether Optimized Image Variants are created that would be up-scaled to be larger than the original source image.' => 'Controls whether Optimized Image Variants are created that would be up-scaled to be larger than the original source image.',
    'Optimizing images in {name}' => 'Optimizing images in {name}',
    'The optional [security token](https://docs.imgix.com/setup/securing-images) used to sign image URLs from imgix.' => 'The optional [security token](https://docs.imgix.com/setup/securing-images) used to sign image URLs from imgix.',
    'Controls whether retina images are automatically created with reduced quality as per <a href=\'https://www.netvlies.nl/blogs/retina-revolutie-follow\' target=\'_blank\'>here</a>.' => 'Controls whether retina images are automatically created with reduced quality as per <a href=\'https://www.netvlies.nl/tips-updates/design-interactie/design-interactie/retina-revolution/\' target=\'_blank\'>here</a>.',
    'Display Optimized Image Variants' => 'Display Optimized Image Variants',
    'Controls whether images scaled down >= 50% should be automatically sharpened.' => 'Controls whether images scaled down >= 50% should be automatically sharpened.',
    'Controls whether SVG placeholder silhouettes should be created for image variants. It takes a bit of time, so if you never plan to use them, you can turn it off.' => 'Controls whether SVG placeholder silhouettes should be created for image variants. It takes a bit of time, so if you never plan to use them, you can turn it off.',
    'Controls whether the optimized image variants will be displayed in the Edit Asset HUD.' => 'Controls whether the optimized image variants will be displayed in the Edit Asset HUD.',
    'Optimizing image id {id}' => 'Optimizing image id {id}',
    'Auto Sharpen Scaled Images' => 'Auto Sharpen Scaled Images',
    'Display Dominant Color Palette' => 'Display Dominant Color Palette',
    'Image transform >= 50%, sharpened the transformed image: {name}' => 'Image transform >= 50%, sharpened the transformed image: {name}',
    'Controls whether the dominant color palette will be displayed in the Edit Asset HUD.' => 'Controls whether the dominant color palette will be displayed in the Edit Asset HUD.',
    'Create Placeholder Silhouettes' => 'Create Placeholder Silhouettes',
    'Display LazyLoad Placeholder Images' => 'Display LazyLoad Placeholder Images',
    'Controls whether a dominant color palette should be created for image variants. It takes a bit of time, so if you never plan to use it, you can turn it off.' => 'Controls whether a dominant color palette should be created for image variants. It takes a bit of time, so if you never plan to use it, you can turn it off.',
    'Create Color Palette' => 'Create Color Palette',
    'The API key to use for the imgix transforms (needed for auto-purging changed assets).' => 'The API key to use for the imgix transforms (needed for auto-purging changed assets).',
    'Controls whether the lazy load placeholder images will be displayed in the Edit Asset HUD.' => 'Controls whether the lazy load placeholder images will be displayed in the Edit Asset HUD.',
    'Lower Quality Retina Image Variants' => 'Lower Quality Retina Image Variants',
    'Allow Up-Scaled Image Variants' => 'Allow Up-Scaled Image Variants',
    'Manifest file not found at: {manifestPath}' => 'Manifest file not found at: {manifestPath}',
    'Don\'t create image transforms for files that are of the following types:' => 'Don\'t create image transforms for files that are of the following types:',
    'Ignore Files' => 'Ignore Files',
    'GIF' => 'GIF',
    'The optional [security key](https://thumbor.readthedocs.io/en/latest/security.html) used by Thumbor to create secure image urls.' => 'The optional [security key](https://thumbor.readthedocs.io/en/latest/security.html) used by Thumbor to create secure image urls.',
    'SVG' => 'SVG',
    'The base URL to use for the Thumbor transforms.' => 'The base URL to use for the Thumbor transforms.',
    'Module does not exist in the manifest: {moduleName}' => 'Module does not exist in the manifest: {moduleName}',
    'Thumbor' => 'Thumbor',
    'Optionally prefix your asset path with the bucket name. This is useful if your Thumbor configuration does not specify an explicit bucket. Only relevant for AWS S3 volumes at this time.' => 'Optionally prefix your asset path with the bucket name. This is useful if your Thumbor configuration does not specify an explicit bucket. Only relevant for AWS S3 volumes at this time.',
    'Object failed to validate' => 'Object failed to validate',
    'Is not a Model object.' => 'Is not a Model object.',
    'Generic Transform' => 'Generic Transform',
    'Placeholder Silhouette' => 'Placeholder Silhouette',
    'OptimizedImages fields only work when added to an Asset Volume\'s layout.' => 'OptimizedImages fields only work when added to an Asset Volume\'s layout.',
    'Sharp' => 'Sharp',
    'Placeholder Box' => 'Placeholder Box',
    'Create Optimized Image Variants for images in the sub-folders:' => 'Create Optimized Image Variants for images in the sub-folders:',
    'LazyLoad Placeholder Images:' => 'LazyLoad Placeholder Images:',
    'Dominant Color Palette:' => 'Dominant Color Palette:',
    'Color Palette not extracted' => 'Color Palette not extracted',
    'Optimized Image Variants:' => 'Optimized Image Variants:',
    'Placeholder Image' => 'Placeholder Image',
    'The base URL to use for the Sharp transform service. If Sharp is being used via [AWS Serverless Image Handler](https://aws.amazon.com/solutions/serverless-image-handler/), this is your \'Image handler distribution\' CloudFront distribution URL.' => 'The base URL to use for the Sharp transform service. If Sharp is being used via [AWS Serverless Image Handler](https://aws.amazon.com/solutions/serverless-image-handler/), this is your \'Image handler distribution\' CloudFront distribution URL.',
    'Lightness:' => 'Lightness:',
    'Add Variant' => 'Add Variant',
    'Imgix' => 'Imgix',
    'The source domain to use for the Imgix transforms.' => 'The source domain to use for the Imgix transforms.',
    'Whether to allow limiting the creation of Optimized Image Variants for images by sub-folders.' => 'Whether to allow limiting the creation of Optimized Image Variants for images by sub-folders.',
    'The API key to use for the Imgix transforms (needed for auto-purging changed assets).' => 'The API key to use for the Imgix transforms (needed for auto-purging changed assets).',
    'The optional [security token](https://docs.imgix.com/setup/securing-images) used to sign image URLs from Imgix.' => 'The optional [security token](https://docs.imgix.com/setup/securing-images) used to sign image URLs from Imgix.',
    'ImageOptimize Info' => 'ImageOptimize Info',
    'Limit by Sub-Folder' => 'Limit by Sub-Folder',
    'Cap Placeholder Silhouette Size' => 'Cap Placeholder Silhouette Size',
    'The amount of sharpening that should be applied if an image is scaled down more than 50% via the [USM parameter](https://docs.imgix.com/apis/rendering/adjustment/usm).' => 'The amount of sharpening that should be applied if an image is scaled down more than 50% via the [USM parameter](https://docs.imgix.com/apis/rendering/adjustment/usm).',
    'Error rendering template string -> {error}' => 'Error rendering template string -> {error}',
    'The amount an image needs to be scaled down for automatic sharpening to be applied.' => 'The amount an image needs to be scaled down for automatic sharpening to be applied.',
    'Error rendering `{template}` -> {error}' => 'Error rendering `{template}` -> {error}',
    'This option caps the placeholder silhouette SVG size to 32Kb. If it\'s larger than that, a default SVG box is returned.' => 'This option caps the placeholder silhouette SVG size to 32Kb. If it\'s larger than that, a default SVG box is returned.',
    'This option caps the placeholder silhouette SVG size to 32kB. If it\'s larger than that, a default SVG box is returned.' => 'This option caps the placeholder silhouette SVG size to 32kB. If it\'s larger than that, a default SVG box is returned.',
    'Controls whether retina images are automatically created with reduced quality. <a href=\'https://www.netvlies.nl/blogs/retina-revolutie-follow\' target=\'_blank\'>Learn more</a>.' => 'Controls whether retina images are automatically created with reduced quality. <a href=\'https://www.netvlies.nl/blogs/retina-revolutie-follow\' target=\'_blank\'>Learn more</a>.',
    'Sharpen Image Percentage' => 'Sharpen Image Percentage',
];
