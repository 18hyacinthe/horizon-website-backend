<?php

namespace App\Services;

use Cloudinary\Cloudinary;
use Cloudinary\Transformation\Resize;
use Illuminate\Http\UploadedFile;

class CloudinaryService
{
    protected $cloudinary;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
        ]);
    }

    /**
     * Upload image to Cloudinary
     */
    public function uploadImage(UploadedFile $file, string $folder = 'horizon/products'): string
    {
        $result = $this->cloudinary->uploadApi()->upload(
            $file->getPathname(),
            [
                'folder' => $folder,
                'use_filename' => true,
                'unique_filename' => true,
                'overwrite' => false,
                'transformation' => [
                    'quality' => 'auto',
                    'fetch_format' => 'auto'
                ]
            ]
        );

        return $result['secure_url'];
    }

    /**
     * Delete image from Cloudinary
     */
    public function deleteImage(string $publicId): bool
    {
        try {
            $result = $this->cloudinary->uploadApi()->destroy($publicId);
            return $result['result'] === 'ok';
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Extract public ID from Cloudinary URL
     */
    public function getPublicIdFromUrl(string $url): string
    {
        $parts = explode('/', $url);
        $filename = end($parts);
        return pathinfo($filename, PATHINFO_FILENAME);
    }
}
